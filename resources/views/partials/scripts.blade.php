<!-- jQuery -->
<script src="{{ asset('admin') }}/js/jquery-3.2.1.min.js"></script>

<script>
    $(window).on("load", function() {
        // Add the 'loaded' class to the document's body
        $("body").addClass("loaded");
    });
</script>

<!-- Bootstrap Core JS -->
<script src="{{ asset('admin') }}/js/popper.min.js"></script>
<script src="{{ asset('admin') }}/js/bootstrap.min.js"></script>

<!-- Slimscroll JS -->
<script src="{{ asset('admin') }}/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Form Validation JS -->
<script src="{{ asset('admin') }}/js/form-validation.js"></script>

<!-- Toastr Notifications -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

<!-- ['success', 'error', 'info', 'warning'] -->
<script>
    @if (Session::has('success'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.success("{{ session('success') }}");
    @endif

    @if (Session::has('error'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.error("{{ session('error') }}");
    @endif

    @if (Session::has('info'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.info("{{ session('info') }}");
    @endif

    @if (Session::has('warning'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.warning("{{ session('warning') }}");
    @endif
</script>
@stack('scripts')

<!-- Custom JS -->
<script src="{{ asset('admin') }}/js/script.js"></script>
