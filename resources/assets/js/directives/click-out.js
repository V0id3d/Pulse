(function (){
    var HANDLER = '_vue_clickaway_handler';

    function bind(el, binding) {
        unbind(el);

        var callback = binding.value;
        if (typeof callback !== 'function') {
            if (process.env.NODE_ENV !== 'production') {
                Vue.util.warn(
                    'v-' + binding.name + '="' +
                    binding.expression + '" expects a function value, ' +
                    'got ' + callback
                );
            }
            return;
        }

        el[HANDLER] = function(ev) {
            // @NOTE: IE 5.0+
            // @REFERENCE: https://developer.mozilla.org/en/docs/Web/API/Node/contains
            if (!el.contains(ev.target)) {
                return callback(ev);
            }
        };

        document.documentElement.addEventListener('click', el[HANDLER], false);
    }

    function unbind(el) {
        document.documentElement.removeEventListener('click', el[HANDLER], false);
        delete el[HANDLER];
    }

    let ClickOutside = {
        bind: bind,
        update: function(el, binding) {
            if (binding.value === binding.oldValue) return;
            bind(el, binding);
        },
        unbind: unbind,
    };
    if (typeof define === 'object' && module.exports) {
        module.exports = ClickOutside;
    } else if (typeof define === 'function' && define.amd) {
        define( function() { return ClickOutside });
    } else if (typeof window !== undefined) {
        return Vue.directive('click-outside', ClickOutside);
    }
})();