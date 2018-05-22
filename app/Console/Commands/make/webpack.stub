let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

 mix.js('resources/assets/js/tabler.js', 'public/js')
    .sass('resources/assets/sass/tabler.scss', 'public/css');

 mix.autoload({
     jquery: [ '$', 'jQuery', 'jquery'],
 });

 mix.extract([
     'lodash', 'jquery', 'vue'
 ], 'public/js/vendor.js');
 mix.version();
