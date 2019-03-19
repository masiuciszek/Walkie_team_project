const mix = require('laravel-mix');

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

mix.react('resources/js/list-of-dogs/index.js', 'public/js/list-of-dogs.js')
   .react('resources/js/modals/index.js', 'public/js/modals.js')
   .react('resources/js/homepage/index.js', 'public/js/Home.js')
   .sass('resources/sass/app.scss', 'public/css')
   .version();
