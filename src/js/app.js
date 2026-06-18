import LogColor from './utils/log-color';
import { Dispatch } from './utils/dispatch';

import Swup from 'swup';

import Alpine from 'alpinejs'


/**
 * ==================================================
 * Swup.js
 * Init Swup before Alpine
 * https://swup.js.org/integrations/alpine/
 * ==================================================
 */

const swup = new Swup({
    containers: ["#main"],
    animationSelector: '.page-transition',
});

window.swup = swup


/**
 * ==========================================
 * Alpine js
 * https://alpinejs.dev/start-here
 * ==========================================
 */

window.Alpine = Alpine;

// Alpine.plugin(pluginname)
// Alpine.data('component', component)

Alpine.start();
