const mix = require ('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.styles (['resources/hyper/css/icons.min.css', 'resources/hyper/css/app.min.css'], 'public/css/app.css')
   .scripts (['resources/hyper/js/vendor.min.js', 'resources/hyper/js/app.min.js'], 'public/js/app.js');
