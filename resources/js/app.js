import Vue from 'vue';

import './bootstrap';


import jQuery from 'jquery';
window.$ = jQuery;



import TestComponent from './components/TestComponent.vue';

Vue.component('test-component', TestComponent);

const app = new Vue({
    el: '#app',
});


