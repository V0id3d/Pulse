
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
// import Vuex from 'vuex';
// Vue.use(Vuex);

Vue.component('qz-alert', require('./components/Alert.vue'));
Vue.component('dropdown', require('./components/Dropdown.vue'));
Vue.component('dropdown-item', require('./components/Dropdown-Item.vue'));
Vue.component('navigation', require('./components/Navigation.vue'));

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
