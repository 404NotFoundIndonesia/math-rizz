import './bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.bundle';
import './../css/app.css';

import { createInertiaApp } from '@inertiajs/svelte';

createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.svelte', { eager: true })
        return pages[`./Pages/${name}.svelte`]
    },
    setup({ el, App, props }) {
        new App({ target: el, props })
    },
})
