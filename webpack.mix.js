const mix = require('laravel-mix');
const glob = require('glob');
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
 
glob.sync('resources/sass/**/*.scss').map(function(file){
    mix.sass(file, 'public/css')
    .options({
        processCssUrls: false
    });
});

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/form.js', 'public/js')
    .js('resources/js/side-menu.js', 'public/js')
    .js('resources/js/top.js', 'public/js')