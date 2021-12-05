/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import Vue from 'vue';
require('./bootstrap');

window.Vue = require('vue').default;

import VueRouter from 'vue-router'

Vue.use(VueRouter)


import Toaster from 'v-toaster'

// You need a specific loader for CSS files like https://github.com/webpack/css-loader
import 'v-toaster/dist/v-toaster.css'

// optional set default imeout, the default is 10000 (10 seconds).
Vue.use(Toaster, { timeout: 2000 })

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

const files = require.context('./', true, /\.vue$/i)
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
const contactus = require('./components/ContactComponent.vue').default;
const checkout = require('./components/CheckoutComponent.vue').default;
const home = require('./components/HomeComponent.vue').default;


const routes = [

    {
        path: '/home',
        component: home
    },
    {
        path: '/contactus',
        component: contactus
    },
    {
        path: '/checkout',
        component: checkout
    }
]



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
// Vue.component('mensproduct', require('./components/MensProductComponent.vue').default);
// Vue.component('womensproduct', require('./components/WomensProductComponent.vue').default);
// Vue.component('accessoriesproduct', require('./components/AccessoriesProductComponent.vue').default);
// Vue.component('kidsproduct', require('./components/KidsProductComponent.vue').default);
// Vue.component('carousalproducts', require('./components/CarousalProductsComponent.vue').default);
// Vue.component('productmodal', require('./components/ProductdetailComponent.vue').default);
//Vue.component('home', require('./components/HomeComponent.vue').default);
Vue.component("cartcom", require("./components/HeaderComponent.vue").default);

const router = new VueRouter({
    routes,
})

const app = new Vue({
    el: '#app',
    router,
});


