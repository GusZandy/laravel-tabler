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

mix.webpackConfig({
  resolve: {
    alias: {
      'circle-progress': 'jquery-circle-progress',
      'core': path.resolve(__dirname, 'node_modules/tabler-ui/dist/assets/js/core.js'),
      'vector-map': 'jvectormap'
    }
  }
});

mix.js('resources/assets/js/tabler.js', 'public/js')
  .sass('resources/assets/sass/tabler.scss', 'public/css');

mix.autoload({
  jquery: [ '$', 'jQuery', 'jquery', 'window.jQuery'],
});

mix.extract([
  'lodash',
  'popper.js',
  'bootstrap',
  'bootstrap-datepicker',
  'bootstrap-sass',
  'chart.js',
  'd3',
  'jquery',
  'jquery-circle-progress',
  'jvectormap',
  'moment',
  'requirejs/require',
  'select2',
  'selectize',
  'sparkline',
  'tablesorter',
  'vue'
], 'public/js/vendor.js');

mix.version();

mix.setPublicPath('public');
