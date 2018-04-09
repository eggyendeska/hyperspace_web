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

mix.js('resources/assets/js/app.js', 'public/js')
   // .sass('resources/assets/sass/custom.scss', 'public/css')
   .copy([
       'resources/assets/insta/js/script.js',
       'resources/assets/insta/js/jquery-1.11.3.min.js',
       'resources/assets/insta/library/modernizr/modernizr.js',
       'resources/assets/insta/library/jquery-easing/jquery.easing.min.js',
       'resources/assets/insta/library/easy-pie-charts/jquery.easypiechart.min.js',
       'resources/assets/insta/library/Filterizr/jquery.filterizr.min.js',
       'resources/assets/insta/library/popup/jquery.popup.min.js',
       'resources/assets/insta/library/owl-carousel/owl.carousel.min.js',
       'resources/assets/insta/library/gMap/jquery.gmap.min.js',
       'resources/assets/insta/library/buggyfill/viewport-units-buggyfill.hacks.js',
       'resources/assets/insta/library/buggyfill/viewport-units-buggyfill.js',
       'resources/assets/insta/library/bootstrap/js/bootstrap.min.js'
   ], 'public/js/insta')
   .styles([
       'resources/assets/insta/library/bootstrap/css/bootstrap.min.css',
       // 'resources/assets/insta/library/font-awesome/css/font-awesome.min.css',
       'resources/assets/sass/custom.css',
       'resources/assets/insta/library/popup/popup.css',
       'resources/assets/insta/library/owl-carousel/owl.carousel.css',
       'resources/assets/insta/library/owl-carousel/owl.theme.css',
       'resources/assets/insta/css/style.blue.css',
       'resources/assets/insta/css/responsive.css'

   ], 'public/css/insta.css');
