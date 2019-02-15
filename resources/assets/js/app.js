require('./bootstrap');

import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);


Vue.component('header-component', require('./components/HeaderComponent.vue'));
Vue.component('sidebar-component', require('./components/SidebarComponent.vue'));
Vue.component('page-component', require('./components/PageComponent.vue'));
Vue.component('footer-component', require('./components/FooterComponent.vue'));

const App = Vue.component('vue-page', require('./components/VuePage.vue'));
const AboutMe = Vue.component('about-me', require('./components/AboutMe.vue'));
const Portfolio = Vue.component('portfolio', require('./components/Portfolio.vue'));
const Contact = Vue.component('contact', require('./components/Contact.vue'));

const routes = [
  {
    path: '/',
    name: 'about-me',
    component: AboutMe
  },
  {
    path: '/portfolio',
    name: 'portfolio',
    component: Portfolio
  },
  {
    path: '/contact',
    name: 'contact',
    component: Contact
  }
];

const router = new VueRouter({
  mode: 'history',
  routes
});

const app = new Vue({
  el: '#app',
  components: { App },
  router,
});
