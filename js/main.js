/**
 * Portfolio Cyberpunk - Main JavaScript
 * Étudiant en Cybersécurité
 */

import { initNavigation } from './modules/navigation.js';
import { initScrollAnimations } from './modules/scroll-animations.js';
import { initBootSequence } from './modules/boot-sequence.js';
import { initEasterEgg } from './modules/easter-egg.js';
import { initContactForm } from './modules/contact-form.js';

// ===================================
// INITIALIZATION
// ===================================
document.addEventListener('DOMContentLoaded', function() {
    initNavigation();
    initScrollAnimations();
    initContactForm();
    initEasterEgg();
});

// Boot sequence s'initialise au load de la page
initBootSequence();
