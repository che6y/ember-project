require('./bootstrap');

window.Vue = require('vue');

Vue.component('about-me', require('./components/AboutMe.vue'));
Vue.component('portfolio', require('./components/Portfolio.vue'));
Vue.component('contact', require('./components/Contact.vue'));
Vue.component('header-component', require('./components/HeaderComponent.vue'));
Vue.component('sidebar-component', require('./components/SidebarComponent.vue'));
Vue.component('page-component', require('./components/PageComponent.vue'));
Vue.component('footer-component', require('./components/FooterComponent.vue'));

const App = require('./components/VuePage').default;
// const App = Vue.component('vue-page', require('./components/VuePage.vue'));

const app = new Vue({
    el: '#app',
    components: { App }
});
