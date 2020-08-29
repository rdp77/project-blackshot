const mix = require("laravel-mix");

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

// FrontEnd
mix.styles(
    [
        "resources/assets/frontend/css/bootstrap.min.css",
        "resources/assets/frontend/css/main.css",
    ],
    "public/css/front.css"
);

mix.scripts(
    [
        "resources/assets/frontend/js/all.js",
        "resources/assets/frontend/js/v4-shims.js",
        "resources/assets/frontend/js/jquery-3.5.1.min.js",
        "resources/assets/frontend/js/TweenMax.min.js",
        "resources/assets/frontend/js/bootstrap.min.js",
        "resources/assets/frontend/js/jquery.validate.min.js",
        "resources/assets/frontend/js/hammer.min.js",
        "resources/assets/frontend/js/jquery.nanoscroller.min.js",
        "resources/assets/frontend/js/jquery-3.5.1.min.js",
        "resources/assets/frontend/js/main.js",
        "resources/assets/frontend/js/init.js",
    ],
    "public/js/all.js"
);
