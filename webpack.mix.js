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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
    .styles([
        'resources/assets/insta/bootstrap/css/bootstrap.min.css',
        'resources/assets/insta/font-awesome/css/font-awesome.min.css',
        'resources/assets/insta/popup/popup.css',
        'resources/assets/insta/owl-carousel/owl.carousel.css',
        'resources/assets/insta/owl-carousel/owl.theme.css',
        'resources/assets/insta/style.blue.css',
        'resources/assets/insta/responsive.css'
    ], 'public/css/insta.css');
