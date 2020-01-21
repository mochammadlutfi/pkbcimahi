

<link rel="stylesheet" href="{{ asset('assets/backend/js/plugins/datatables/dataTables.bootstrap4.css') }}">
<link rel="stylesheet" href="{{ asset('assets/backend/js/plugins/sweetalert2/sweetalert2.min.css') }}">

@yield('styles')
<!-- Fonts and Codebase framework -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
<link rel="stylesheet" id="css-main" href="{{ mix('/assets/backend/css/codebase.css') }}">
<link rel="stylesheet" href="{{ asset('assets/backend/js/plugins/sweetalert2/sweetalert2.min.css') }}">
<!-- Scripts -->
<script>window.Laravel = {!! json_encode(['csrfToken' => csrf_token(),]) !!};</script>
<!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
<!-- <link rel="stylesheet" id="css-theme" href="assets/backend/css/themes/flat.min.css"> -->
