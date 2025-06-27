// import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// import './bootstrap'; // <- REMOVE or comment this line

import '../css/app.css';
import.meta.glob([
    '../images/**',
    '../fonts/**',
]);
