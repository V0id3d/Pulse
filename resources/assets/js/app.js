
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

Vue.component('qz-alert', require('./components/Alert.vue'));
Vue.component('qz-dropdown', require('./components/Dropdown.vue'));

const app = new Vue({
    el: '#app'
});
