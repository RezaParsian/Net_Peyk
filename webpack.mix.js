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

// mix.js('resources/js/app.js', 'public/js')
//     .postCss('resources/css/app.css', 'public/css', [
//         //
//     ]);

mix.styles(["resources/css/bootstrap.css",
    "resources/css/bootstrap-rtl.css",
    "resources/css/custom.css"
],"public/app.css");

mix.js(["resources/js/bootstrap.js",
    "resources/js/bootstrap.bundle.js",
    "resources/js/jquery.js"
], "public/app.js");
