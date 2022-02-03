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

mix
    // Dashboard Assets
    .js('resources/js/app.js', 'public/js/app.js')
    .js('resources/js/app-non-defer.js', 'public/js/app-non-defer.js')
    .postCss('resources/css/app.css', 'public/css/app.css', [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
    ])
    .postCss('resources/css/toastui-editor.min.css', 'public/css/app.css')
    .postCss('resources/css/choices.min.css', 'public/css/app.css')
