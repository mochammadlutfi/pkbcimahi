const mix = require('laravel-mix');

// mix.styles([
//     'public/assets/frontend/css/components/widgets.css',
// 	'public/assets/frontend/css/components/sliders.css',
// 	'public/assets/frontend/css/components/social-links.css',
// 	'public/assets/frontend/css/components/dividers.css',
// 	'public/assets/frontend/css/components/content-sliders.css',
// 	'public/assets/frontend/css/components/shop-components-cards.css',
// 	'public/assets/frontend/css/components/team.css',
// 	'public/assets/frontend/css/components/google-maps.css',
// 	'public/assets/frontend/css/components/portfolio-page.css',
// 	'public/assets/frontend/css/components/pagination.css',
// 	'public/assets/frontend/css/components/breadcrumbs.css',
// 	'public/assets/frontend/css/components/portfolio-galleries.css',
// 	'public/assets/frontend/css/components/gallery-cols.css',
// 	'public/assets/frontend/css/components/blog.css',
// 	'public/assets/frontend/css/components/blog-page.css',
// 	'public/assets/frontend/css/components/forum-post.css',
// 	'public/assets/frontend/css/components/lists.css',
// 	'public/assets/frontend/vendor/swiper/css/swiper.min.css',
// 	'public/assets/frontend/vendor/slickCarousel/css/slick.css',
// ], 'public/assets/stylenya.css');


// mix.js([
//    'public/assets/frontend/vendor/jquery/js/jquery.min.js',
//    'public/assets/frontend/vendor/popper/js/popper.min.js',
//    'public/assets/frontend/vendor/bootstrap/js/bootstrap.min.js',
//    'public/assets/frontend/vendor/waypoints/js/jquery.waypoints.min.js',
//    'public/assets/frontend/vendor/wow/js/wow.min.js',
//    'public/assets/frontend/vendor/uiToTop/js/jquery.ui.totop.min.js',
//    'public/assets/frontend/vendor/unveilhooks/js/ls.unveilhooks.min.js',
//    'public/assets/frontend/vendor/lazysizes/js/lazysizes.min.js',
//    'public/assets/frontend/vendor/formStyler/js/jquery.formstyler.min.js',
//    'public/assets/frontend/js/assets/berserk.js',
//    'public/assets/frontend/js/assets/brk-customizer.js',
//    'public/assets/frontend/js/assets/brk-header.js',
//    'public/assets/frontend/js/components/accordions/main.js',
//    'public/assets/frontend/js/components/tabs/main.js',
//    'public/assets/frontend/js/components/buttons/main.js',
//    'public/assets/frontend/js/components/form-controls/main.js',
//    'public/assets/frontend/js/components/media-embeds/main.js',
//    'public/assets/frontend/js/components/image-map/main.js',
//    'public/assets/frontend/js/components/footer/main.js',
//    'public/assets/frontend/js/components/portfolio-masonry/main.js',
//    'public/assets/frontend/js/components/progress-bars/main.js',
//    'public/assets/frontend/js/components/portfolio-rows/main.js',
//    'public/assets/frontend/js/components/steps/main.js',
//    'public/assets/frontend/js/components/parallax-video/main.js',
//    'public/assets/frontend/js/components/counter/main.js',
//    'public/assets/frontend/js/components/sliders/main.js',
//    'public/assets/frontend/js/components/breadcrumbs/main.js',
//    'public/assets/frontend/js/components/info-box/main.js',
//    'public/assets/frontend/js/components/shop-components-tiles/main.js',
//    'public/assets/frontend/js/components/blog-page/main.js',
// ], 'public/assets/scriptnya.js');

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
