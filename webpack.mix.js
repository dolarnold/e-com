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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')

    .copy('node_modules/jquery/dist', 'public/vendor/jquery')

    .copy('node_modules/bootstrap/dist/css', 'public/vendor/bootstrap/css')
    .copy('node_modules/bootstrap/dist/js', 'public/vendor/bootstrap/js')

    .copy('node_modules/admin-lte/dist/img', 'public/vendor/admin-lte/dist/img')
    .copy('node_modules/admin-lte/dist/css', 'public/vendor/admin-lte/dist/css')
    .copy('node_modules/admin-lte/dist/js', 'public/vendor/admin-lte/dist/js')
    .copy('node_modules/admin-lte/plugins', 'public/vendor/admin-lte/plugins');
