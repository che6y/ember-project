/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';
import Vue from 'vue';

Vue.use(VueRouter);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('vue-page', require('./components/VuePage.vue'));
Vue.component('image-lightbox', require('./components/ImageLightbox.vue'));
Vue.component('header-component', require('./components/HeaderComponent.vue'));
Vue.component('sidebar-component', require('./components/SidebarComponent.vue'));
Vue.component('page-component', require('./components/PageComponent.vue'));
Vue.component('footer-component', require('./components/FooterComponent.vue'));

const AboutMe = Vue.component('about-me', require('./components/AboutMe.vue'));
const Portfolio = Vue.component('portfolio', require('./components/Portfolio.vue'));
const Contact = Vue.component('contact', require('./components/Contact.vue'));

const routes = [
  { path: '/', redirect: '/about-me'},
  { path: '/about-me', component: AboutMe},
  { path: '/portfolio', component: Portfolio },
  { path: '/contact', component: Contact }
];

const router = new VueRouter({
  mode: 'history',
  routes
});

const app = new Vue({
  router,
}).$mount('#app');
