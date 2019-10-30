const mix = require('laravel-mix');

mix
    /* CSS */
    .sass('resources/sass/main.scss', 'public/assets/backend/css/codebase.css')
    .sass('resources/sass/codebase/themes/corporate.scss', 'public/assets/backend/css/themes/')
    .sass('resources/sass/codebase/themes/earth.scss', 'public/assets/backend/css/themes/')
    .sass('resources/sass/codebase/themes/elegance.scss', 'public/assets/backend/css/themes/')
    .sass('resources/sass/codebase/themes/flat.scss', 'public/assets/backend/css/themes/')
    .sass('resources/sass/codebase/themes/pulse.scss', 'public/assets/backend/css/themes/')

    /* JS */
    .js('resources/js/app.js', 'public/assets/backend/js/laravel.app.js')
    .js('resources/js/codebase/app.js', 'public/assets/backend/js/codebase.app.js')

    /* Page JS */
    .js('resources/js/pages/tables_datatables.js', 'public/assets/backend/js/pages/tables_datatables.js')

    /* Tools */
    .browserSync('localhost:8000')
    .disableNotifications()

    /* Options */
    .options({
        processCssUrls: false
    });
