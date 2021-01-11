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



mix.styles(["resources/css/bootstrap.css",
    "resources/css/bootstrap-rtl.css",
    "resources/css/custom.css"
], "public/app.css");

mix.js([
    "resources/js/jquery.js",
    "resources/js/popper.js",
    "resources/js/bootstrap.js"
], "public/app.js");
