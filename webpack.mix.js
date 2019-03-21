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

mix.js([
        'resources/js/jquery-3.2.1.js',
        'resources/js/moment-with-locales.js',
        'resources/js/jquery-ui-1.12.1.custom.min.js',
        'resources/js/popper.js',
        'resources/js/bootstrap.js',
        'resources/js/bootstrap-switch.min.js',
        'resources/js/nouislider.js',
        'resources/js/bootstrap-datetimepicker.js',
        'resources/js/paper-kit.js',
        'resources/js/app.js'
    ], 'public/js')

    .sass('resources/sass/paper-kit.scss', 'public/css/app.css')
    .sass('resources/sass/app.scss', 'public/css/custom.css')
    .styles([
        'resources/css/bootstrap/bootstrap-reboot.css',
        'resources/css/bootstrap/bootstrap-grid.css',
        'resources/css/bootstrap/bootstrap.css'
    ], 'public/css/bootstrap.css')
    .styles([
        'resources/css/nucleo-icons.css'
    ], 'public/css/fonts.css')
    .styles(['public/css/app.css', 'public/css/custom.css'], 'public/css/app.css');

if (mix.inProduction()) {
        mix.version();
}