'use strict';
const assert = require('node:assert/strict');
const path = require('node:path');
const crypto = require('node:crypto');
const sass = require('sass');
const postcss = require('postcss');
const cssnano = require('cssnano');
const expected = require('./css-compat.expected.json');
const root = path.resolve(__dirname, '../..');
const cases = [
  { name: 'actual-project-icons', css: sass.compile(path.join(root,
    'resources/assets/scss/plugins/icons/_materialdesignicons.scss'), { style: 'expanded' }).css },
  { name: 'selector-and-calculation', css: '.card, .card { color: red; padding: calc(1px + 1px) } .card { color: red }' },
  { name: 'namespaces-and-pseudos', css: 'svg|a[href^="https"]:not(.disabled), .menu > li:nth-child(2n + 1) { display: block; color: #ffffff }' },
  { name: 'stylehacks-and-merges', css: '@media screen and (min-width: 40em) { .a,.b { margin: 0px 0px 0px 0px; } .b { padding: 0; } }' },
];
(async () => {
  const results = [];
  for (const item of cases) {
    const output = await postcss([cssnano()]).process(item.css, { from: undefined, map: false });
    results.push({ name: item.name,
      input_sha256: crypto.createHash('sha256').update(item.css).digest('hex'),
      input_bytes: Buffer.byteLength(item.css),
      output_sha256: crypto.createHash('sha256').update(output.css).digest('hex'),
      output_bytes: Buffer.byteLength(output.css) });
  }
  assert.deepEqual(results, expected, 'CSS differs from the pre-upgrade corpus; review generated CSS before updating this contract');
  console.log(JSON.stringify({ passed: true, cases: results.length, actual_project_input_bytes: results[0].input_bytes }));
})().catch(error => { console.error(error); process.exitCode = 1; });
