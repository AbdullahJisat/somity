<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin') }}/img/favicon.png">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ asset('admin') }}/css/bootstrap.min.css">

<!-- Fontawesome CSS -->
<link rel="stylesheet" href="{{ asset('admin') }}/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="{{ asset('admin') }}/plugins/fontawesome/css/all.min.css">

<!-- Feathericon CSS -->
<link rel="stylesheet" href="{{ asset('admin') }}/css/feather.css">

<!-- Select2 CSS -->
<link rel="stylesheet" href="{{ asset('admin') }}/plugins/select2/css/select2.min.css">

<!-- Datatables CSS -->
<link rel="stylesheet" href="{{ asset('admin') }}/plugins/datatables/datatables.min.css">

<!-- Main CSS -->
<link rel="stylesheet" href="{{ asset('admin') }}/css/style.css">

<!-- Toastr Notifications -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<style>
    #loader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background-color: #ffffff;
        background-image: url('admin/img/loader.gif');
        background-repeat: no-repeat;
        background-position: center;
        /* background: url('admin/img/loader.gif') 50% 50% no-repeat rgb(249, 249, 249); */
    }

    /* Hide the loader once the page has finished loading */
    .loaded #loader {
        display: none;
    }

    .footer {
        background: #ffffff;
        left: 0;
        position: fixed;
        bottom: 0;
        height: 30px;
        width: 100%;
        box-shadow: 0 0 13px 0 rgba(82, 63, 105, 0.08);
    }
</style>
@stack('styles')
