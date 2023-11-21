<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Mentoring - Error 404</title>

    @include('partials\links')
</head>

<body class="error-page">

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <div class="error-box">
            <h1>401</h1>
            <h3 class="h2 mb-3"><i class="fas fa-exclamation-triangle"></i> Oops! Unauthorized Access!</h3>
            <p class="h4 font-weight-normal">The page you requested was not authorized access.</p>
            <a href="{{ route('home') }}" class="btn btn-primary">Back to Home</a>
        </div>

    </div>
    <!-- /Main Wrapper -->

    @include('partials\scripts')

</body>

</html>
