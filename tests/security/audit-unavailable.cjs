'use strict';
const assert = require('node:assert/strict');
const fs = require('node:fs');
const os = require('node:os');
const path = require('node:path');
const { spawnSync } = require('node:child_process');
const temp = fs.mkdtempSync(path.join(os.tmpdir(), 'portal-audit-unavailable-'));
try {
  const stub = path.join(temp, 'npm.cjs');
  fs.writeFileSync(stub, 'console.log(JSON.stringify({error:{code:"ECONNREFUSED",summary:"synthetic unavailable endpoint"}}));process.exitCode=1;\n');
  const output = path.join(temp, 'audit');
  const run = spawnSync(process.execPath, [path.join(__dirname, 'dependency-audit.cjs')], {
    encoding: 'utf8', timeout: 10000,
    env: { ...process.env, npm_execpath: stub, DEPENDENCY_AUDIT_OUTPUT: output },
  });
  assert.ifError(run.error);
  assert.equal(run.status, 1, 'Unavailable audit must fail closed');
  assert.match(run.stderr, /npm audit unavailable.*ECONNREFUSED/s);
  assert.doesNotMatch(run.stderr, /TypeError/);
  assert.doesNotMatch(run.stdout, /"regression_passed"\s*:\s*true/);
  assert.equal(fs.existsSync(path.join(output, 'regression-summary.json')), false);
  assert.equal(JSON.parse(fs.readFileSync(path.join(output, 'root.json'))).error.code, 'ECONNREFUSED');
  console.log(JSON.stringify({ passed: true, unavailable_audit: 'refused with diagnostic', false_green: false }));
} finally {
  fs.rmSync(temp, { recursive: true, force: true });
}
