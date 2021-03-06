
window._ = require('lodash');
window.Vue = require('vue');
require('vue-resource');


/**
 * We'll register a HTTP interceptor to attach the "CSRF" header to each of
 * the outgoing requests issued by this application. The CSRF middleware
 * included with Laravel will automatically verify the header's value.
 */

Vue.http.interceptors.push((request, next) => {
    // request.headers.set('X-CSRF-TOKEN', Laravel.csrfToken);

    next();
});

/**
 * Vue 2.0 removed filters that were useful and so we are just adding back the ones
 * that we really like and used.
 */
Vue.filter('capitalize', function (n) {
    return n[0].toUpperCase() + n.slice(1)
});

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from "laravel-echo"

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: 'your-pusher-key'
// });
