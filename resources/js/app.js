import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

window.testFunction = function() {
    alert('test');
}

