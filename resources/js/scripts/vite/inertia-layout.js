const PLUGIN_NAME = 'vite:inertia:layout';
const TEMPLATE_LAYOUT_REGEX = /<template +layout(?: *= *['"](?:(?:(\w+):)?(\w+))['"] *)?>/;

/**
 * A basic Vite plugin that adds a <template layout="name"> syntax to Vite SFCs.
 * It must be used before the Vue plugin.
 */
export default (layouts = '~/js/Layouts/') => ({
  name: PLUGIN_NAME,
  transform: (code) => {
    if (!TEMPLATE_LAYOUT_REGEX.test(code)) {
      return;
    }

    const isTypeScript = /lang=['"]ts['"]/.test(code);

    // eslint-disable-next-line consistent-return
    return code.replace(TEMPLATE_LAYOUT_REGEX, (_, __, layoutName) => `
            <script${isTypeScript ? ' locales="ts"' : ''}>
            import layout from '${layouts}${layoutName ?? 'AppLayout'}.vue'
            export default { layout }
            </script>
            <template>
        `);
  },
});
