import './bootstrap';
import { createApp } from 'vue';
import LiveInventoryTracker from './components/LiveInventoryTracker.vue';
import Alpine from 'alpinejs';

window.Alpine = Alpine;
Alpine.start();

// Mount modular Vue component for landing page inventory tracker if element exists
document.addEventListener('DOMContentLoaded', () => {
    const mountEl = document.getElementById('vue-live-inventory');
    if (mountEl) {
        const app = createApp({});
        app.component('LiveInventoryTracker', LiveInventoryTracker);
        app.mount(mountEl);
    }
});
