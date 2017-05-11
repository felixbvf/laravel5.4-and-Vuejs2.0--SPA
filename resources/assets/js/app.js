import router from './routes.js';
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router';

Vue.use(VueRouter);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('home', require('./components/Home.vue'));
/*Vue.component('inbox', require('./components/Inbox.vue'));
Vue.component('solicitude', require('./components/Solicitude.vue'));
Vue.component('create', require('./components/Form.vue'));*/

const app = new Vue({
    el: '#app',
    router

});
