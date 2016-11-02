(function (){
    const HANDLER = '_click-out-handler';
    let ClickOutside = {
        bind(el, binding) {
            let callback = binding.value;
            if(typeof callback !== 'function'){
                if(process.env.NODE_ENV !== 'production') {
                    Vue.until.warn('v-' + binding.name + '="' + binding.expression + '" expects a function');
                }
                return;
            }
            el[HANDLER] = function(click_event) {
                if(!el.contains(click_event.target)) {
                    return callback(click_event);
                } else if (el.contains(click_event.target)){
                    if (!click_event.target.children.length && click_event.target.parentNode.__vue__.$options._componentTag !== 'dropdown') {
                        return callback(click_event);
                    }
                }
            };
            document.documentElement.addEventListener('click', el[HANDLER], false);
        },
        unbind(el) {
            document.documentElement.removeEventListener('click', el[HANDLER], false);
            delete el[HANDLER];
        }
    };
    if (typeof define === 'object' && module.exports) {
        module.exports = ClickOutside;
    } else if (typeof define === 'function' && define.amd) {
        define( function() { return ClickOutside });
    } else if (typeof window !== undefined) {
        return Vue.directive('click-outside', ClickOutside);
    }
})();