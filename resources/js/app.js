require('./bootstrap');

window.Vue = require('vue');

Vue.component('tab-about', require('./components/AboutMe.vue').default);
Vue.component('tab-portfolio', require('./components/Portfolio.vue').default);
Vue.component('tab-contact', require('./components/Contact.vue').default);
Vue.component('vue-page', require('./components/VuePage.vue').default);
Vue.component('portfolio-item', require('./components/PortfolioItem.vue').default);

const app = new Vue({
    el: '#app'
});
