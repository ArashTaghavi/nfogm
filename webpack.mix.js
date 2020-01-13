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

mix.js('resources/assets/Admin/app.js', 'public/admin-js');
mix.js('resources/assets/InstituteExpert/app.js', 'public/institute-expert-js');

mix.styles([
    "public/assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css",
    "public/assets/css/bootstrap-rtl.min.css",
    "public/assets/css/core.css",
    "public/assets/css/components.css",
    "public/assets/css/icons.css",
    "public/assets/css/pages.css",
    "public/assets/css/menu.css",
    "public/assets/css/responsive.css",
    "public/assets/css/custom.css"
], 'public/css/app.css');

mix.scripts([
    "public/assets/js/jquery.min.js",
    "public/assets/js/bootstrap-rtl.min.js",
    "public/assets/js/detect.js",
    "public/assets/js/detect.js",
    "public/assets/js/fastclick.js",
    "public/assets/js/jquery.slimscroll.js",
    "public/assets/js/jquery.blockUI.js",
    "public/assets/js/waves.js",
    "public/assets/js/jquery.nicescroll.js",
    "public/assets/js/jquery.scrollTo.min.js",
    "public/assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js",
    "public/assets/js/jquery.core.js",
    "/assets/js/modernizr.min.js"
], 'public/js/app.js');