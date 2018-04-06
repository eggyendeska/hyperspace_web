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
   .js('resources/assets/js/vendor/jquery/jquery.min.js', 'public/js')
   .js('resources/assets/js/vendor/jquery.appear/jquery.appear.min.js', 'public/js')
   .js('resources/assets/js/vendor/jquery.easing/jquery.easing.min.js', 'public/js')
   .js('resources/assets/js/vendor/jquery-cookie/jquery-cookie.min.js', 'public/js')
   .js('resources/assets/js/vendor/bootstrap/js/bootstrap.min.js', 'public/js')
   .js('resources/assets/js/vendor/common/common.min.js', 'public/js')
   .js('resources/assets/js/vendor/jquery.validation/jquery.validation.min.js', 'public/js')
   .js('resources/assets/js/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js', 'public/js')
   .js('resources/assets/js/vendor/jquery.gmap/jquery.gmap.min.js', 'public/js')
   .js('resources/assets/js/vendor/jquery.lazyload/jquery.lazyload.min.js', 'public/js')
   .js('resources/assets/js/vendor/isotope/jquery.isotope.min.js', 'public/js')
   .js('resources/assets/js/vendor/owl.carousel/owl.carousel.min.js', 'public/js')
   .js('resources/assets/js/vendor/magnific-popup/jquery.magnific-popup.min.js', 'public/js')
   .js('resources/assets/js/vendor/vide/vide.min.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');
