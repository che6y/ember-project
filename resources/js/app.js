require('./bootstrap');

window.Vue = require('vue');

Vue.component('about-me', require('./components/AboutMe.vue').default);
Vue.component('portfolio', require('./components/Portfolio.vue').default);
Vue.component('contact', require('./components/Contact.vue').default);
Vue.component('vue-page', require('./components/VuePage.vue').default);
Vue.component('portfolio-item', require('./components/PortfolioItem.vue').default);

const app = new Vue({
    el: '#app'
});

tinymce.init({ selector:'textarea' });