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
