<?php
	session_start();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Mentoring - Register</title>

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
                            <h1>Register</h1>
                            <p class="account-subtitle">Access to our dashboard</p>

                            <!-- Form -->
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="name" class="col-form-label text-md-end">{{ __('Name') }}</label>
                                    <input class="form-control namealert" type="text" name="name"
                                        value="{{ old('name') }}" requid autocomplete="name" autofocus
                                        placeholder="Name">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label for="name" class="col-form-label text-md-end">{{ __('Name') }}</label>
                                    <input class="form-control emailalert" id="email" name="email" value="" type="text"
                                        placeholder="Email" value="{{ old('email') }}" requid autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="phone" class="col-form-label text-md-end">{{ __('Phone')
                                        }}</label>
                                    <input type="tel" pattern="(^([+]{1}[8]{2}|0088)?(01){1}[3-9]{1}\d{8})$"
                                        maxlength="11" onkeypress="return /[0-9]/i.test(event.key)"
                                        class="form-control phonealert" id="phone" name="phone"
                                        value="{{ old('phone') }}" requid autocomplete="phone" placeholder="Phone">
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-form-label text-md-end">{{ __('Password')
                                        }}</label>
                                    <input class="form-control passwordalert" id="password" name="password" type="text"
                                        requid autocomplete="new-password" placeholder="Password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password-confirm" class="col-form-label text-md-end">{{
                                        __('Confirm Password') }}</label>
                                    <input class="form-control confirmpasswordalert" id="password-confirm"
                                        type="password" name="password_confirmation" requid
                                        autocomplete="new-password" placeholder="Confirm Password">

                                </div>
                                <div class="form-group mb-0">
                                    <button class="btn btn-primary btn-block" type="submit">{{ __('Register')
                                        }}</button>
                                </div>
                            </form>
                            <!-- /Form -->

                            <div class="login-or">
                                <span class="or-line"></span>
                                <span class="span-or">or</span>
                            </div>

                            <!-- Social Login -->
                            <div class="social-login">
                                <span>Register with</span>
                                <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#"
                                    class="google"><i class="fab fa-google"></i></a>
                            </div>
                            <!-- /Social Login -->

                            <div class="text-center dont-have">Already have an account? <a
                                    href="{{ route('login') }}">{{ __('Login') }}</a>
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
