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

mix
    .version()
    .js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css/app.css')

    .js('resources/js/admin.js', 'public/js')
    .sass('resources/sass/admin.scss', 'public/css/admin.css')

    .js('resources/js/admin/mailings/_form.js', 'public/js/admin.mailings._form.js')
;

/*mix.extract([
    'jquery'
]);*/


mix.webpackConfig({
    resolve: {
        alias: {
            Services : path.resolve(__dirname, "resources/js/services"),
            Component: path.resolve(__dirname, "resources/js/component"),
            // Css      : path.resolve(__dirname, "resources/sass"),
            // Modules  : path.resolve(__dirname, "node_modules")
            // NodeModules  : path.resolve(__dirname, 'node_modules')
        }
    }
});


mix.disableNotifications();
