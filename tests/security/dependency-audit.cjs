'use strict';

// Regression check only: both recorded upstream findings remain unresolved.
const assert = require('node:assert/strict');
const fs = require('node:fs');
const os = require('node:os');
const path = require('node:path');
const { spawnSync } = require('node:child_process');
const root = path.resolve(__dirname, '../..');
const baseline = require('../../security/unresolved-dev-advisories.json').findings;

function evaluate(scope, report, lock, findings = baseline) {
  assert.ok(report.metadata && report.vulnerabilities, 'missing audit result');
  assert.ok(report.auditReportVersion >= 2 && report.metadata.dependencies?.total > 0,
    'missing audit coverage metadata');
  assert.equal(report.metadata.vulnerabilities?.total, Object.keys(report.vulnerabilities).length,
    'inconsistent audit finding count');
  const unresolved = new Map();
  for (const [name, vulnerability] of Object.entries(report.vulnerabilities)) {
    assert.ok(vulnerability.nodes?.length && vulnerability.via?.length,
      `missing advisory locations or provenance: ${name}`);
    for (const node of vulnerability.nodes || []) {
      assert.equal(lock.packages[node]?.dev, true,
        `${scope}: vulnerable dependency moved outside the development-only graph: ${node}`);
    }
    for (const via of vulnerability.via) {
      if (typeof via === 'string') {
        assert.ok(report.vulnerabilities[via], `unresolved audit dependency: ${via}`);
        continue;
      }
      const id = new URL(via.url).pathname.split('/').pop();
      const known = findings.find(item => item.id === id && item.scope === scope);
      assert.ok(known, `${scope}: new/unreviewed advisory ${id} in ${name}`);
      assert.equal(via.name, known.package, `${id}: package changed`);
      assert.equal(via.severity, known.severity, `${id}: severity changed`);
      for (const node of vulnerability.nodes) {
        assert.equal(lock.packages[node]?.version, known.version, `${id}: unreviewed package version`);
      }
      unresolved.set(id, { id, package: known.package, version: known.version,
        severity: known.severity, status: 'UNRESOLVED', source: known.source });
    }
  }
  return [...unresolved.values()];
}

function selfTest() {
  const finding = baseline[0];
  const node = `node_modules/${finding.package}`;
  const make = () => ({ auditReportVersion: 2,
    metadata: { dependencies: { total: 1 }, vulnerabilities: { total: 1 } }, vulnerabilities: { [finding.package]: {
    nodes: [node], via: [{ name: finding.package, severity: finding.severity,
      url: `https://github.com/advisories/${finding.id}` }] } } });
  const lock = { packages: { [node]: { dev: true, version: finding.version } } };
  assert.equal(evaluate('.', make(), lock).length, 1);
  assert.throws(() => evaluate('.', { metadata: {}, vulnerabilities: {} }, lock), /coverage metadata/);
  const unknown = make();
  unknown.vulnerabilities[finding.package].via[0].url = 'https://github.com/advisories/GHSA-synthetic-new-finding';
  assert.throws(() => evaluate('.', unknown, lock), /new\/unreviewed advisory/);
  const production = JSON.parse(JSON.stringify(lock)); production.packages[node].dev = false;
  assert.throws(() => evaluate('.', make(), production), /development-only/);
  assert.throws(() => evaluate('modules/Admin', make(), lock), /new\/unreviewed advisory/);
  const changed = make(); changed.vulnerabilities[finding.package].via[0].severity = 'critical';
  assert.throws(() => evaluate('.', changed, lock), /severity changed/);
  return ['missing audit coverage', 'unknown advisory', 'production dependency exposure', 'scope change', 'severity escalation'];
}

function main() {
  const npm = process.env.npm_execpath;
  assert.ok(npm && fs.existsSync(npm), 'Run through npm run test:dependency-audit');
  const output = process.env.DEPENDENCY_AUDIT_OUTPUT || fs.mkdtempSync(path.join(os.tmpdir(), 'portal-dependency-audit-'));
  fs.mkdirSync(output, { recursive: true });
  const results = [];
  for (const scope of ['.', 'modules/Admin', 'modules/Grade']) {
    const directory = path.resolve(root, scope);
    const run = spawnSync(process.execPath, [npm, 'audit', '--json'], {
      cwd: directory, encoding: 'utf8', timeout: 60000, maxBuffer: 16 * 1024 * 1024 });
    assert.ifError(run.error);
    assert.ok([0, 1].includes(run.status), `${scope}: npm audit failed: ${run.stderr}`);
    const report = JSON.parse(run.stdout);
    fs.writeFileSync(path.join(output, scope === '.' ? 'root.json' : path.basename(scope) + '.json'), JSON.stringify(report, null, 2) + '\n');
    const lock = JSON.parse(fs.readFileSync(path.join(directory, 'package-lock.json')));
    results.push({ scope, aggregate_counts: report.metadata.vulnerabilities,
      unresolved: evaluate(scope, report, lock) });
  }
  const result = { regression_passed: true, production_security_approval: 'NOT_ASSESSED',
    unresolved_findings_are_not_fixed: true, results };
  if (process.argv.includes('--self-test')) result.rejected_controls = selfTest();
  fs.writeFileSync(path.join(output, 'regression-summary.json'), JSON.stringify(result, null, 2) + '\n');
  console.log(JSON.stringify(result, null, 2));
}

try { main(); } catch (error) { console.error(error); process.exitCode = 1; }
