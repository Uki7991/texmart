const mix = require('laravel-mix');
require('laravel-mix-purgecss');
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
    .purgeCss({
        enabled: true
    });

mix.styles(['public/css/slick-theme.css', 'public/css/slick.css'], 'public/css/slick.min.css').purgeCss({
    enabled: true
});
mix.styles(['public/css/main.css'], 'public/css/main.min.css').purgeCss({
    enabled: true
});
mix.styles(['public/css/mmenu.css'], 'public/css/mmenu.min.css').purgeCss({
    enabled: true
});
mix.styles(['public/css/jquery.rateyo.css'], 'public/css/jquery.rateyo.min.css').purgeCss({
    enabled: true
});
