<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Mentoring - Login</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin') }}/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('admin') }}/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('admin') }}/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ asset('admin') }}/plugins/fontawesome/css/all.min.css">

    <!-- Feathericon CSS -->
    <link rel="stylesheet" href="{{ asset('admin') }}/css/feather.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('admin') }}/css/style.css">

    <!--[if lt IE 9]>
			<script src="{{ asset('admin') }}/js/html5shiv.min.js"></script>
			<script src="{{ asset('admin') }}/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>

    <!-- Main Wrapper -->
    <div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="container">
                <div class="loginbox">
                    <div class="login-left" style="background: url({{ asset('admin') }}/img/hack/login-page.jpg);">
                        <img class="img-fluid" src="{{ asset('admin') }}/img/logo-white.png" alt="Logo">
                    </div>
                    <div class="login-right">
                        <div class="login-right-wrap">
                            <h1>Login</h1>
                            <p class="account-subtitle">Access to our dashboard</p>

                            <!-- Form -->
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="email" class=" col-form-label text-md-end">{{ __('Email Address')
                                        }}</label>
                                    <input class="form-control emailalert" id="email" type="email" name="email"
                                        placeholder="Password" value="{{ old('email') }}" required autocomplete="email"
                                        autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password')
                                        }}</label>
                                    <input class="form-control passwordalert" id="password" type="password"
                                        name="password" value="" type="password" placeholder="Password" required
                                        autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block" type="submit">{{ __('Login') }}</button>
                                </div>
                            </form>
                            <!-- /Form -->

                            <div class="text-center forgotpass">
                                @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                            <div class="login-or">
                                <span class="or-line"></span>
                                <span class="span-or">or</span>
                            </div>

                            <!-- Social Login -->
                            <div class="social-login">
                                <span>Login with</span>
                                <a href="#" class="facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="google">
                                    <i class="fab fa-google"></i>
                                </a>
                            </div>
                            <!-- /Social Login -->

                            <div class="text-center dont-have">
                                Don’t have an account?
                                <a href="{{ route('register') }}">{{ __('Register') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Main Wrapper -->


    <!-- jQuery -->
    <script src="{{ asset('admin') }}/js/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ asset('admin') }}/js/popper.min.js"></script>
    <script src="{{ asset('admin') }}/js/bootstrap.min.js"></script>

    <!-- Custom JS -->
    <script src="{{ asset('admin') }}/js/script.js"></script>
</body>


</html>
