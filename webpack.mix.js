const mix = require('laravel-mix');

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

mix.js('resources/{{ asset('assets/fe/{{ asset('assets/fe/js/app.js', 'public/js')
    .postCss('resources/{{ asset('assets/fe/{{ asset('assets/fe/css/app.css') }}, 'public/css', [
        //
    ]);
