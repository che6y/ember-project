require('./bootstrap');

window.Vue = require('vue');

Vue.component('about-me', require('./components/AboutMe.vue').default);
Vue.component('portfolio', require('./components/Portfolio.vue').default);
Vue.component('contact', require('./components/Contact.vue').default);
Vue.component('header-component', require('./components/HeaderComponent.vue').default);
Vue.component('sidebar-component', require('./components/SidebarComponent.vue').default);
Vue.component('page-component', require('./components/PageComponent.vue').default);
Vue.component('footer-component', require('./components/FooterComponent.vue').default);
Vue.component('vue-page', require('./components/VuePage.vue').default);

const app = new Vue({
    el: '#app'
});