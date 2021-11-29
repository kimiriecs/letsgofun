/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


window.Vue = require('vue').default;
// import Vue from "vue";

import store from "./store";

import router from "./router";

import VModal from 'vue-js-modal'

Vue.use(VModal, {})

// import AOS from 'aos'
// AOS.init({
//   offset: 200,
//   duration: 600,
//   easing: 'ease-in-sine',
//   delay: 100,
// })

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

const files = require.context('./', true, /\.vue$/i)
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('app-component', require('./components/App.vue').default);
// Vue.component('base-modal-component', require('./components/baseComponents/BaseModalComponent.vue').default);
// Vue.component('form-component', require('./components/partials/forms/FormComponent.vue').default);
// Vue.component('login-component', require('./components/root/startPage/auth/LoginComponent.vue').default);
// Vue.component('register-component', require('./components/root/startPage/auth/RegisterComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: "#app",
    store,
    router
});
