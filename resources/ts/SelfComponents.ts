import { App, DefineComponent, defineAsyncComponent } from 'vue';

export function importGlobals(app: App<Element>) {
    // @ts-ignore
    const components = import.meta.globEager('/resources/js/Components/**/*.vue');

    Object.entries(components).forEach(([path, definition]) => {
        const componentName = path.split('/').pop()?.replace(/\.\w+$/, '');

        if (componentName) {
            app.component(
                componentName,
                defineAsyncComponent(definition as unknown as () => Promise<DefineComponent>)
            );
        }
    });
}