<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @include('backend.layouts.meta')

        <!-- Stylesheets -->

        <!-- Page JS Plugins CSS -->

        {{-- <link rel="stylesheet" href="{{ asset('assets/backend/js/plugins/slick/slick.css') }}"> --}}
        {{-- <link rel="stylesheet" href="{{ asset('assets/backend/js/plugins/slick/slick-theme.css') }}"> --}}
        <link rel="stylesheet" href="{{ asset('assets/backend/js/plugins/datatables/dataTables.bootstrap4.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/backend/js/plugins/sweetalert2/sweetalert2.min.css') }}">

        @yield('styles')
        {{--  --}}
        <!-- Fonts and Codebase framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
        {{-- <link rel="stylesheet" id="css-main" href="{{ asset('assets/backend/css/codebase.css') }}"> --}}
        <link rel="stylesheet" id="css-main" href="{{ mix('/assets/backend/css/codebase.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/backend/js/plugins/sweetalert2/sweetalert2.min.css') }}">
        <!-- Scripts -->
        <script>window.Laravel = {!! json_encode(['csrfToken' => csrf_token(),]) !!};</script>
        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/backend/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>

        <div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-modern main-content-boxed">

            @include('backend.layouts.sidebar')
            <!-- END Sidebar -->

            <!-- Header -->
            @include('backend.layouts.header')
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                @yield('content')
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="opacity-0">
                <div class="content py-20 font-size-xs clearfix">
                    <div class="float-right">
                        Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="#" target="_blank">Pintasku</a>
                    </div>
                    <div class="float-left">
                        <a class="font-w600" href="" target="_blank">PKB CIMAHI</a> &copy; <span class="js-year-copy">2019</span>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->
        <script src="{{ mix('/assets/backend/js/codebase.app.js') }}"></script>
        <script src="{{ asset('assets/backend/js/laroute.js') }}"></script>
        <script src="{{ asset('assets/backend/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/backend/js/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/backend/js/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
        <script src="{{ asset('assets/backend/js/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
        <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        </script>
        <!-- Laravel Scaffolding JS -->
        <script src="{{ mix('/assets/backend/js/laravel.app.js') }}"></script>
        @stack('scripts')
    </body>
</html>
