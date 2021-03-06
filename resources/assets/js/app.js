
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
// import Vuex from 'vuex';
// Vue.use(Vuex);

Vue.component('qz-alert', require('./components/alert/Alert.vue'));
Vue.component('dropdown', require('./components/dropdown/Dropdown.vue'));
Vue.component('dropdown-item', require('./components/dropdown/Dropdown-Item.vue'));
Vue.component('navigation', require('./components/navigation/Navigation.vue'));
Vue.component('nav-header', require('./components/navigation/header.vue'));
Vue.component('nav-menu', require('./components/navigation/menu.vue'));


Vue.directive('click-out', require('./directives/click-outside'));


// const store = new Vuex.Store({
//     state: {
//         count: 0
//     },
//     mutations: {
//         increment (state) {
//             state.count++;
//             return true;
//         }
//     }
// });

const app = new Vue({
    el: '#app',
});
