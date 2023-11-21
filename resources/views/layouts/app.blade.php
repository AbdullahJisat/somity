<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @include('partials.links')
</head>

<body>

    <!-- Loader -->
    <div id="loader"></div>
    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Header -->
        @include('partials.header')
        <!-- /Header -->

        <!-- Sidebar -->
        @include('partials.sidebar')
        <!-- /Sidebar -->

        <!-- Page Wrapper -->
        <div class="page-wrapper">
            <div class="content container-fluid">

                <!-- Page Header -->
                @include('partials.page_header')
                <!-- /Page Header -->

                <!-- Row -->
                <div class="row">
                    <div class="col-sm-12">

                        {{-- @include('partials.content') --}}
                        @yield('content')

                    </div>
                </div>
                <!-- /Row -->
                @include('partials.footer')
            </div>
        </div>
        <!-- /Page Wrapper -->

    </div>
    <!-- /Main Wrapper -->

    @include('partials.scripts')

</body>

</html>
