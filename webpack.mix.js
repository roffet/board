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

// キャッシュの対策だけ追加した jqueryを全体として読み込むべきか
mix.js(['resources/js/app.js', 'resources/js/samplejQuery.js'], 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .version()
