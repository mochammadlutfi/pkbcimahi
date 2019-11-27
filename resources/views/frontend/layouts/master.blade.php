<!DOCTYPE html>
<html lang="en" data-brk-skin="brk-blue.css">
<head>
	{{-- <title>@yield('title')</title> --}}

	<link rel="shortcut icon" href="{{ asset('assets/img/favicons/favicon.png') }}">
	<link rel="apple-touch-icon-precomposed" href="{{ asset('assets/img/favicons/apple-touch-icon-180x180.png') }}">
	<link rel="stylesheet" id="brk-direction-bootstrap" href="{{ asset('assets/frontend/css/assets/bootstrap.css') }}">
	<link rel="stylesheet" id="brk-skin-color" href="{{ asset('assets/frontend/css/skins/brk-blue.css') }}">
	<link id="brk-base-color" rel="stylesheet" href="{{ asset('assets/frontend/css/skins/brk-base-color.css') }}">
	<link rel="stylesheet" id="brk-direction-offsets" href="{{ asset('assets/frontend/css/assets/offsets.css') }}">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/assets/brk-header-elements.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/assets/brk-preloader.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/assets/block-visibility.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/assets/text-align.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/assets/brk-normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/assets/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/assets/type-styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/assets/text-style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/assets/controls.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/components/accordions.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/components/info-box.css ') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/components/buttons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/components/CFA.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/components/form-controls.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/components/flip-boxes.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/components/elements.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/components/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/components/media-embeds.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendor/normalize/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendor/animate/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendor/fancybox/css/jquery.fancybox.min.css') }}">


	<link rel="stylesheet" href="{{ asset('assets/frontend/css/components/pagination.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/components/breadcrumbs.css') }}">

	<link rel="stylesheet" href="{{ asset('assets/frontend/css/components/social-links.css ') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/components/google-maps.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/frontend/css/components/blog-page.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/components/blog.css') }}">

	<!-- Page Style -->
    @yield('styles')
    <!-- Page Style -->

	{{-- <!-- galeri -->
	<!-- galeri detail -->
	
	<!-- blog -->
	<!-- QnA -->

	<!-- tanya fraksi -->
	<link rel="stylesheet" id="brk-direction-bootstrap" href="{{ asset('assets/frontend/css/components/forum-post.css') }}">
	<!-- sejarah -->
    <link rel="stylesheet" id="brk-direction-bootstrap" href="{{ asset('assets/frontend/css/components/lists.css') }}">
    <link rel="stylesheet" id="brk-direction-bootstrap" href="{{ asset('assets/frontend/css/components/backgrounds.css') }}">
	<!-- component --> --}}


</head>
<body>
    <div class="brk-loader">
		<div class="brk-loader__loader"></div>
	</div>
	<div class="main-page mt-110">
			<!-- header -->
				@include('frontend.layouts.header')
			<!-- endofheader -->

			<!-- content -->
				@yield('content')
			<!-- endofcontent -->

			<!-- footer -->
				@include('frontend.layouts.footer')
			<!-- endoffooter -->

	</div>
    <!-- js	 -->

    <script src="{{ asset('assets/frontend/vendor/jquery/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/popper/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/waypoints/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/wow/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/uiToTop/js/jquery.ui.totop.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/unveilhooks/js/ls.unveilhooks.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/lazysizes/js/lazysizes.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/formStyler/js/jquery.formstyler.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/assets/berserk.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/assets/brk-customizer.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/assets/brk-header.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/components/accordions.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/components/tabs.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/components/buttons.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/components/form-controls.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/components/media-embeds.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/components/image-map.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/components/footer.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/components/portfolio-masonry.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/components/progress-bars.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/components/portfolio-rows.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/components/steps.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/components/counter.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/components/sliders.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/components/breadcrumbs.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/components/info-box.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/components/blog-page.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/components/google-maps.js') }} "></script>
    @stack('scripts')

	<!-- beranda -->
</body>
</html>
