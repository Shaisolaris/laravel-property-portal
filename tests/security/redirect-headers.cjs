'use strict';

// Synthetic loopback-only checks for the two follow-redirects credential alerts.
const assert = require('node:assert/strict');
const http = require('node:http');
const { createRequire } = require('node:module');
const path = require('node:path');

const root = path.resolve(__dirname, '../..');
const scopes = ['.', 'modules/Admin', 'modules/Grade'];
const sensitive = ['authorization', 'cookie', 'x-session^token', 'x-private|key'];

function headers(array) {
  const pairs = [
    ['Authorization', 'Bearer synthetic-test-value'],
    ['Cookie', 'session=synthetic-test-value'],
    ['X-Session^Token', 'synthetic-custom-value'],
    ['X-Private|Key', 'synthetic-custom-value'],
    ['X-Safe', 'retained'],
  ];
  return array ? pairs.flat() : Object.fromEntries(pairs);
}

async function listen(server) {
  await new Promise((resolve, reject) => {
    server.once('error', reject);
    server.listen(0, '127.0.0.1', resolve);
  });
  return `http://127.0.0.1:${server.address().port}`;
}

function get(client, url, array) {
  return new Promise((resolve, reject) => {
    let request;
    try {
      request = client.get(url, {
        headers: headers(array),
        sensitiveHeaders: ['X-Session^Token', 'X-Private|Key'],
      }, response => {
        let body = '';
        response.setEncoding('utf8');
        response.on('data', chunk => { body += chunk; });
        response.on('error', reject);
        response.on('end', () => {
          try { resolve(JSON.parse(body)); } catch (error) { reject(error); }
        });
      });
    } catch (error) {
      reject(error);
      return;
    }
    request.setTimeout(3000, () => request.destroy(new Error('loopback request timed out')));
    request.on('error', reject);
  });
}

async function checkScope(scope) {
  const directory = path.resolve(root, scope);
  const localRequire = createRequire(path.join(directory, 'package.json'));
  const resolved = localRequire.resolve('follow-redirects/package.json');
  assert.ok(resolved.startsWith(path.join(directory, 'node_modules') + path.sep),
    `${scope}: install this scope before testing; do not fall back to another scope`);
  const client = localRequire('follow-redirects').http;
  const version = localRequire('follow-redirects/package.json').version;
  let crossRequests = 0;
  const destination = http.createServer((request, response) => {
    crossRequests += 1;
    request.resume();
    response.setHeader('Content-Type', 'application/json');
    response.end(JSON.stringify({ received: true, headers: request.headers }));
  });
  let destinationURL;
  const origin = http.createServer((request, response) => {
    request.resume();
    if (request.url === '/same-final') {
      response.setHeader('Content-Type', 'application/json');
      response.end(JSON.stringify({ received: true, headers: request.headers }));
      return;
    }
    response.writeHead(302, {
      Location: request.url === '/same' ? '/same-final' : destinationURL + '/final',
    });
    response.end();
  });
  const results = [];
  try {
    destinationURL = await listen(destination);
    const originURL = await listen(origin);
    const same = await get(client, originURL + '/same', false);
    assert.equal(same.received, true);
    for (const name of sensitive) assert.ok(same.headers[name], `${scope}: same-origin ${name} lost`);
    assert.equal(same.headers['x-safe'], 'retained');
    results.push('same-origin object headers retained');

    const cross = await get(client, originURL + '/cross', false);
    assert.equal(cross.received, true);
    assert.equal(cross.headers['x-safe'], 'retained');
    for (const name of sensitive) assert.equal(cross.headers[name], undefined,
      `${scope}: cross-origin object credential ${name} leaked`);
    results.push('cross-origin built-in and regex-metacharacter credential headers stripped');

    const before = crossRequests;
    let array;
    try {
      array = await get(client, originURL + '/cross', true);
    } catch (error) {
      // Explicit input rejection is a permitted fail-closed fix for array headers.
      // Network failures, timeouts and unrelated exceptions must still fail.
      assert.ok(error instanceof TypeError && /header|array/i.test(error.message), error);
      assert.equal(crossRequests, before, 'array rejection occurred after reaching the destination');
      results.push('array headers explicitly rejected before cross-origin delivery');
    }
    if (array) {
      assert.equal(array.received, true);
      assert.equal(array.headers['x-safe'], 'retained');
      for (const name of sensitive) assert.equal(array.headers[name], undefined,
        `${scope}: cross-origin array credential ${name} leaked`);
      results.push('cross-origin array credential headers stripped');
    }
    assert.equal(results.length, 3);
    return { scope, version, passed: true, results };
  } finally {
    origin.closeAllConnections();
    destination.closeAllConnections();
    await Promise.all([origin, destination].map(server =>
      new Promise(resolve => server.close(() => resolve()))));
  }
}

(async () => {
  const results = [];
  for (const scope of scopes) {
    try { results.push(await checkScope(scope)); }
    catch (error) { results.push({ scope, passed: false, error: error.message }); }
  }
  console.log(JSON.stringify({ loopback_only: true, results }, null, 2));
  if (results.some(result => !result.passed)) process.exitCode = 1;
})().catch(error => { console.error(error); process.exitCode = 1; });
