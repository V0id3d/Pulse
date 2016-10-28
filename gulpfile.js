const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir.config.css.autoprefix.options.browsers = ['> 5%', 'Last 2 versions', 'IE 9'];
elixir((mix) => {
    mix.sass('pulse.scss')
        .webpack('app.js')
        .copy('./node_modules/font-awesome/fonts/**', 'public/fonts');
});
