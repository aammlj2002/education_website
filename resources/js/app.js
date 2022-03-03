import { createApp, h } from "vue";
import { App, createInertiaApp, Head } from "@inertiajs/inertia-vue3";
import { InertiaProgress } from "@inertiajs/progress";
import AppLayout from "@/Layouts/AppLayout";
// const appName =
//     window.document.getElementsByTagName("title")[0]?.innerText || "Laravel";

createInertiaApp({
    title: (title) => `Edu Website - ${title}`,
    resolve: (name) => {
        const page = require(`./Pages/${name}.vue`).default;
        if (page.layout === undefined) page.layout = AppLayout;
        return page;
    },
    setup({ el, app, props, plugin }) {
        return createApp({ render: () => h(app, props) })
            .use(plugin)
            .mixin({ methods: { route } })
            .component("Head", Head)
            .mount(el);
    },
});

InertiaProgress.init({ color: "#4B5563" });
