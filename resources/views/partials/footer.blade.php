<script src="/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/assets/dist/js/adminlte.min.js"></script>
@toastr_js
@toastr_render
@if(count($errors) > 0)
    @foreach ($errors->all() as $error)
        toastr.error("{{ $error }}");
    @endforeach
@endif
