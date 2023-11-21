<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <title>AppLand - App Landing Page Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{ asset('user') }}/favicons/images-favicon.png" type="image/png">

    <link rel="stylesheet" href="{{ asset('user') }}/css/css-animate.css">

    <link rel="stylesheet" href="{{ asset('user') }}/css/css-magnific-popup.css">

    <link rel="stylesheet" href="{{ asset('user') }}/css/css-slick.css">

    <link rel="stylesheet" href="{{ asset('user') }}/css/css-swiper.min.css">

    <link rel="stylesheet" href="{{ asset('user') }}/css/css-lineicons.css">

    <link rel="stylesheet" href="{{ asset('user') }}/css/css-bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('user') }}/css/css-default.css">

    <link rel="stylesheet" href="{{ asset('user') }}/css/css-style.css">
</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <header class="header-area">
        <div class="navbar-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <script data-pagespeed-no-defer>
                                    (function () { for (var g = "function" == typeof Object.defineProperties ? Object.defineProperty : function (b, c, a) { if (a.get || a.set) throw new TypeError("ES3 does not support getters and setters."); b != Array.prototype && b != Object.prototype && (b[c] = a.value) }, h = "undefined" != typeof window && window === this ? this : "undefined" != typeof global && null != global ? global : this, k = ["String", "prototype", "repeat"], l = 0; l < k.length - 1; l++) { var m = k[l]; m in h || (h[m] = {}); h = h[m] } var n = k[k.length - 1], p = h[n], q = p ? p : function (b) { var c; if (null == this) throw new TypeError("The 'this' value for String.prototype.repeat must not be null or undefined"); c = this + ""; if (0 > b || 1342177279 < b) throw new RangeError("Invalid count value"); b |= 0; for (var a = ""; b;)if (b & 1 && (a += c), b >>>= 1) c += c; return a }; q != p && null != q && g(h, n, { configurable: !0, writable: !0, value: q }); var t = this; function u(b, c) { var a = b.split("."), d = t; a[0] in d || !d.execScript || d.execScript("var " + a[0]); for (var e; a.length && (e = a.shift());)a.length || void 0 === c ? d[e] ? d = d[e] : d = d[e] = {} : d[e] = c }; function v(b) { var c = b.length; if (0 < c) { for (var a = Array(c), d = 0; d < c; d++)a[d] = b[d]; return a } return [] }; function w(b) { var c = window; if (c.addEventListener) c.addEventListener("load", b, !1); else if (c.attachEvent) c.attachEvent("onload", b); else { var a = c.onload; c.onload = function () { b.call(this); a && a.call(this) } } }; var x; function y(b, c, a, d, e) { this.h = b; this.j = c; this.l = a; this.f = e; this.g = { height: window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight, width: window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth }; this.i = d; this.b = {}; this.a = []; this.c = {} } function z(b, c) { var a, d, e = c.getAttribute("data-pagespeed-url-hash"); if (a = e && !(e in b.c)) if (0 >= c.offsetWidth && 0 >= c.offsetHeight) a = !1; else { d = c.getBoundingClientRect(); var f = document.body; a = d.top + ("pageYOffset" in window ? window.pageYOffset : (document.documentElement || f.parentNode || f).scrollTop); d = d.left + ("pageXOffset" in window ? window.pageXOffset : (document.documentElement || f.parentNode || f).scrollLeft); f = a.toString() + "," + d; b.b.hasOwnProperty(f) ? a = !1 : (b.b[f] = !0, a = a <= b.g.height && d <= b.g.width) } a && (b.a.push(e), b.c[e] = !0) } y.prototype.checkImageForCriticality = function (b) { b.getBoundingClientRect && z(this, b) }; u("pagespeed.CriticalImages.checkImageForCriticality", function (b) { x.checkImageForCriticality(b) }); u("pagespeed.CriticalImages.checkCriticalImages", function () { A(x) }); function A(b) { b.b = {}; for (var c = ["IMG", "INPUT"], a = [], d = 0; d < c.length; ++d)a = a.concat(v(document.getElementsByTagName(c[d]))); if (a.length && a[0].getBoundingClientRect) { for (d = 0; c = a[d]; ++d)z(b, c); a = "oh=" + b.l; b.f && (a += "&n=" + b.f); if (c = !!b.a.length) for (a += "&ci=" + encodeURIComponent(b.a[0]), d = 1; d < b.a.length; ++d) { var e = "," + encodeURIComponent(b.a[d]); 131072 >= a.length + e.length && (a += e) } b.i && (e = "&rd=" + encodeURIComponent(JSON.stringify(B())), 131072 >= a.length + e.length && (a += e), c = !0); C = a; if (c) { d = b.h; b = b.j; var f; if (window.XMLHttpRequest) f = new XMLHttpRequest; else if (window.ActiveXObject) try { f = new ActiveXObject("Msxml2.XMLHTTP") } catch (r) { try { f = new ActiveXObject("Microsoft.XMLHTTP") } catch (D) { } } f && (f.open("POST", d + (-1 == d.indexOf("?") ? "?" : "&") + "url=" + encodeURIComponent(b)), f.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"), f.send(a)) } } } function B() { var b = {}, c; c = document.getElementsByTagName("IMG"); if (!c.length) return {}; var a = c[0]; if (!("naturalWidth" in a && "naturalHeight" in a)) return {}; for (var d = 0; a = c[d]; ++d) { var e = a.getAttribute("data-pagespeed-url-hash"); e && (!(e in b) && 0 < a.width && 0 < a.height && 0 < a.naturalWidth && 0 < a.naturalHeight || e in b && a.width >= b[e].o && a.height >= b[e].m) && (b[e] = { rw: a.width, rh: a.height, ow: a.naturalWidth, oh: a.naturalHeight }) } return b } var C = ""; u("pagespeed.CriticalImages.getBeaconData", function () { return C }); u("pagespeed.CriticalImages.Run", function (b, c, a, d, e, f) { var r = new y(b, c, a, e, f); x = r; d && w(function () { window.setTimeout(function () { A(r) }, 0) }) }); })(); pagespeed.CriticalImages.Run('/ngx_pagespeed_beacon', 'https://preview.uideck.com/items/appland/index.html', 'jraX2E1l9J', true, false, '4soVYCpGge0');
                                </script>
                                <img src="{{ asset('user') }}/images/images-logo.png" alt="Logo"
                                    data-pagespeed-url-hash="3022277881"
                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#why">Why</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#features">Features</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#screenshots">Screenshots</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#pricing">Pricing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#download">Download</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div id="home" class="header-hero bg_cover d-lg-flex align-items-center">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
            <div class="shape shape-3"></div>
            <div class="shape shape-4"></div>
            <div class="shape shape-5"></div>
            <div class="shape shape-6"></div>
            <div class="container">
                <div class="row align-items-center justify-content-center justify-content-lg-between">
                    <div class="col-lg-6 col-md-10">
                        <div class="header-hero-content">
                            <h3 class="header-title wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.2s">
                                <span>Launch Your App</span> With Confidence and Creativity.
                            </h3>
                            <p class="text wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.6s">Lorem ipsum
                                dolor sit amet, consetetur sadipscing elitr, sed diamnon umy eirmomp or invidunt ut
                                labore et dolore magna aliquyam eratse diam voluptua. At vero eosaccusam.</p>
                            <ul class="d-flex">
                                <li>
                                    @if (Route::has('login'))
                                    @auth
                                    <a href="{{ url('/home') }}" class="main-btn wow fadeInLeftBig"
                                        data-wow-duration="1.3s" data-wow-delay="0.8s">{{ __("Home") }}
                                        @else
                                        <a href="{{ route('login') }}" class="main-btn wow fadeInLeftBig"
                                            data-wow-duration="1.3s" data-wow-delay="0.8s">{{ __("Login") }}</a>
                                        @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="main-btn wow fadeInLeftBig"
                                            data-wow-duration="1.3s" data-wow-delay="0.8s">{{
                                            __("Register") }}</a>
                                        @endif
                                        @endauth
                                        @endif
                                </li>
                                <li><a href="https://www.youtube.com/watch?v=r44RKWyfcFw"
                                        class="header-video video-popup wow fadeInLeftBig" data-wow-duration="1.3s"
                                        data-wow-delay="1.2s"><i class="lni lni-play"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-10">
                        <div class="header-image">
                            <img src="{{ asset('user') }}/images/images-header-app.png" alt="app"
                                class="image wow fadeInRightBig" data-wow-duration="1.3s" data-wow-delay="0.5s"
                                data-pagespeed-url-hash="837775383"
                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                            <div class="image-shape wow fadeInRightBig" data-wow-duration="1.3s" data-wow-delay="0.8s">
                                <img src="{{ asset('user') }}/images/images-image-shape.svg" alt="shape"
                                    data-pagespeed-url-hash="2312001766"
                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-shape-1 d-none d-md-block"></div>
            <div class="header-shape-2">
                <img src="{{ asset('user') }}/images/images-header-shape-2.svg" alt="shape"
                    data-pagespeed-url-hash="4198591707"
                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
            </div>
        </div>
    </header>


    <section id="why" class="services-area pt-110 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title text-center pb-25">
                        <h3 class="title">Why You Should Choose AppLand</h3>
                        <p class="text">Alii nusquam cu duo, vim eu consulatu percipitur, meis dolor comprehensam at
                            vis. Vel ut percipitur dignissim signiferumque.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-services services-color-1 text-center mt-30 wow fadeInUpBig"
                        data-wow-duration="1.3s" data-wow-delay="0.2s">
                        <div class="services-icon d-flex align-items-center justify-content-center">
                            <i class="lni lni-layers"></i>
                        </div>
                        <div class="services-content">
                            <h4 class="services-title"><a href="#">Clean Design</a></h4>
                            <p class="text">Lorem ipsum dolor sitam etco snsetetur sadipscing elitr sed diam nonumy.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-services services-color-2 text-center mt-30 wow fadeInUpBig"
                        data-wow-duration="1.3s" data-wow-delay="0.4s">
                        <div class="services-icon d-flex align-items-center justify-content-center">
                            <i class="lni lni-layout"></i>
                        </div>
                        <div class="services-content">
                            <h4 class="services-title"><a href="#">Easy to Use</a></h4>
                            <p class="text">Lorem ipsum dolor sitam etco snsetetur sadipscing elitr sed diam nonumy.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-services services-color-3 text-center mt-30 wow fadeInUpBig"
                        data-wow-duration="1.3s" data-wow-delay="0.6s">
                        <div class="services-icon d-flex align-items-center justify-content-center">
                            <i class="lni lni-bolt"></i>
                        </div>
                        <div class="services-content">
                            <h4 class="services-title"><a href="#">Fast Loading</a></h4>
                            <p class="text">Lorem ipsum dolor sitam etco snsetetur sadipscing elitr sed diam nonumy.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-services services-color-4 text-center mt-30 wow fadeInUpBig"
                        data-wow-duration="1.3s" data-wow-delay="0.8s">
                        <div class="services-icon d-flex align-items-center justify-content-center">
                            <i class="lni lni-protection"></i>
                        </div>
                        <div class="services-content">
                            <h4 class="services-title"><a href="#">All Elements</a></h4>
                            <p class="text">Lorem ipsum dolor sitam etco snsetetur sadipscing elitr sed diam nonumy.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="about" class="about-area pt-70 pb-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-image mt-50 wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.5s">
                        <div class="about-shape"></div>
                        <img class="app" src="{{ asset('user') }}/images/images-about-app.png" alt="app"
                            data-pagespeed-url-hash="2996748785"
                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content mt-50 wow fadeInRightBig" data-wow-duration="1.3s" data-wow-delay="0.5s">
                        <div class="section-title">
                            <h3 class="title">Comes With All You Need.</h3>
                            <p class="text">Alii nusquam cu duo, vim eu consulatu percipitur, meis doorcomprehen sam at
                                vis. Vel ut dignissim signiferumq Alii nusquam cuduo, vim eusde consulatu percipitur,
                                meis dolor comprehensam at vij. Alii nusquam cu duo, vim eu consulatu percipitur, meis
                                doorcomprehen sam at vis. Vel ut dignissim signiferumq nusquam.</p>
                        </div>
                        <a href="#" class="main-btn">Get The App</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="features" class="features-area pt-110">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title text-center pb-25">
                        <h3 class="title">Awesome Key Features.</h3>
                        <p class="text">Alii nusquam cu duo, vim eu consulatu percipitur, meis dolor comprehensam at
                            vis. Vel ut percipitur dignissim signiferumque.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="features-items">
                        <div class="single-features features-color-1 d-sm-flex mt-30 wow fadeInUpBig"
                            data-wow-duration="1.3s" data-wow-delay="0.2s">
                            <div class="features-icon d-flex justify-content-center align-items-center">
                                <i class="lni lni-laptop-phone"></i>
                            </div>
                            <div class="features-content media-body">
                                <h4 class="features-title">Fully Responsive</h4>
                                <p class="text">Lorem ipsum dolor sit ametco snsetetur sadipscing elitr sed diam nonumy
                                    eirmod.</p>
                            </div>
                        </div>
                        <div class="single-features features-color-2 d-sm-flex mt-30 wow fadeInUpBig"
                            data-wow-duration="1.3s" data-wow-delay="0.4s">
                            <div class="features-icon d-flex justify-content-center align-items-center">
                                <i class="lni lni-leaf"></i>
                            </div>
                            <div class="features-content media-body">
                                <h4 class="features-title">Refreshing Design</h4>
                                <p class="text">Lorem ipsum dolor sit ametco snsetetur sadipscing elitr sed diam nonumy
                                    eirmod.</p>
                            </div>
                        </div>
                        <div class="single-features features-color-3 d-sm-flex mt-30 wow fadeInUpBig"
                            data-wow-duration="1.3s" data-wow-delay="0.6s">
                            <div class="features-icon d-flex justify-content-center align-items-center">
                                <i class="lni lni-bootstrap"></i>
                            </div>
                            <div class="features-content media-body">
                                <h4 class="features-title">Bootstrap 4</h4>
                                <p class="text">Lorem ipsum dolor sit ametco snsetetur sadipscing elitr sed diam nonumy
                                    eirmod.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="features-image wow fadeInRightBig" data-wow-duration="1.3s" data-wow-delay="0.5s">
                        <img class="image" src="{{ asset('user') }}/images/images-features-app.png" alt="App"
                            data-pagespeed-url-hash="3342278659"
                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                        <div class="features-shape-1"></div>
                        <div class="features-shape-2">
                            <img class="svg" src="{{ asset('user') }}/images/images-features-shape-1.svg" alt=""
                                data-pagespeed-url-hash="2893031478"
                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="screenshots" class="screenshots-area pt-110 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title text-center pb-45">
                        <h3 class="title">App Screenshots.</h3>
                        <p class="text">Alii nusquam cu duo, vim eu consulatu percipitur, meis dolor comprehensam at
                            vis. Vel ut percipitur dignissim signiferumque.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="screenshot-slider">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="slider-image">
                                        <img src="{{ asset('user') }}/images/images-screenshot-1.jpg" alt="screenshot"
                                            data-pagespeed-url-hash="645007176"
                                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slider-image">
                                        <img src="{{ asset('user') }}/images/images-screenshot-2.jpg" alt="screenshot"
                                            data-pagespeed-url-hash="939507097"
                                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slider-image">
                                        <img src="{{ asset('user') }}/images/images-screenshot-3.jpg" alt="screenshot"
                                            data-pagespeed-url-hash="1234007018"
                                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slider-image">
                                        <img src="{{ asset('user') }}/images/images-screenshot-4.jpg" alt="screenshot"
                                            data-pagespeed-url-hash="1528506939"
                                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-pagination"></div>
                            <div class="screenshot-frame d-none d-sm-block">
                                <img src="{{ asset('user') }}/images/images-app-frame.png" alt="frame"
                                    data-pagespeed-url-hash="1340431569"
                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="testimonial" class="testimonial-area pt-110 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title text-center pb-45">
                        <h3 class="title">User Reviews.</h3>
                        <p class="text">Alii nusquam cu duo, vim eu consulatu percipitur, meis dolor comprehensam at
                            vis. Vel ut percipitur dignissim signiferumque.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="testimonial-wrapper">
                        <div class="testimonial-content">
                            <div class="single-testimonial-content text-center">
                                <div class="testimonial-quote">
                                    <img class="svg" src="{{ asset('user') }}/images/images-icon-quote.svg" alt="quote"
                                        data-pagespeed-url-hash="2876376845"
                                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                </div>
                                <div class="testimonial-text">
                                    <p class="text">Lorem ipsum dolor situt amet, consetetur sadipscing elitr, sed diam
                                        nonumy eirmod tempo invidunt labore et dolore magna aliquyam erat, sed diam
                                        voluptua. At vero eoset accusam et justo duo dolores et ea rebum. Stet clita
                                        kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem
                                        ipsum dolor amet sadipscing elitr.</p>
                                    <h4 class="holder-name">Linda Sophia</h4>
                                    <span class="sub-title">Designer, SpaceX</span>
                                </div>
                            </div>
                            <div class="single-testimonial-content text-center">
                                <div class="testimonial-quote">
                                    <img class="svg" src="{{ asset('user') }}/images/images-icon-quote.svg" alt="quote"
                                        data-pagespeed-url-hash="2876376845"
                                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                </div>
                                <div class="testimonial-text">
                                    <p class="text">Lorem ipsum dolor situt amet, consetetur sadipscing elitr, sed diam
                                        nonumy eirmod tempo invidunt labore et dolore magna aliquyam erat, sed diam
                                        voluptua. At vero eoset accusam et justo duo dolores et ea rebum. Stet clita
                                        kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem
                                        ipsum dolor amet sadipscing elitr.</p>
                                    <h4 class="holder-name">Michel Jhonsmith</h4>
                                    <span class="sub-title">CEO, OnePlus</span>
                                </div>
                            </div>
                            <div class="single-testimonial-content text-center">
                                <div class="testimonial-quote">
                                    <img class="svg" src="{{ asset('user') }}/images/images-icon-quote.svg" alt="quote"
                                        data-pagespeed-url-hash="2876376845"
                                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                </div>
                                <div class="testimonial-text">
                                    <p class="text">Lorem ipsum dolor situt amet, consetetur sadipscing elitr, sed diam
                                        nonumy eirmod tempo invidunt labore et dolore magna aliquyam erat, sed diam
                                        voluptua. At vero eoset accusam et justo duo dolores et ea rebum. Stet clita
                                        kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem
                                        ipsum dolor amet sadipscing elitr.</p>
                                    <h4 class="holder-name">John Doe</h4>
                                    <span class="sub-title">CEO, UIdeck</span>
                                </div>
                            </div>
                            <div class="single-testimonial-content text-center">
                                <div class="testimonial-quote">
                                    <img class="svg" src="{{ asset('user') }}/images/images-icon-quote.svg" alt="quote"
                                        data-pagespeed-url-hash="2876376845"
                                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                </div>
                                <div class="testimonial-text">
                                    <p class="text">Lorem ipsum dolor situt amet, consetetur sadipscing elitr, sed diam
                                        nonumy eirmod tempo invidunt labore et dolore magna aliquyam erat, sed diam
                                        voluptua. At vero eoset accusam et justo duo dolores et ea rebum. Stet clita
                                        kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem
                                        ipsum dolor amet sadipscing elitr.</p>
                                    <h4 class="holder-name">Windy Lisa</h4>
                                    <span class="sub-title">Founder, PageBulb</span>
                                </div>
                            </div>
                            <div class="single-testimonial-content text-center">
                                <div class="testimonial-quote">
                                    <img class="svg" src="{{ asset('user') }}/images/images-icon-quote.svg" alt="quote"
                                        data-pagespeed-url-hash="2876376845"
                                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                </div>
                                <div class="testimonial-text">
                                    <p class="text">Lorem ipsum dolor situt amet, consetetur sadipscing elitr, sed diam
                                        nonumy eirmod tempo invidunt labore et dolore magna aliquyam erat, sed diam
                                        voluptua. At vero eoset accusam et justo duo dolores et ea rebum. Stet clita
                                        kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem
                                        ipsum dolor amet sadipscing elitr.</p>
                                    <h4 class="holder-name">Musharof Chowdhury</h4>
                                    <span class="sub-title">CEO, GrayGrids</span>
                                </div>
                            </div>
                            <div class="single-testimonial-content text-center">
                                <div class="testimonial-quote">
                                    <img class="svg" src="{{ asset('user') }}/images/images-icon-quote.svg" alt="quote"
                                        data-pagespeed-url-hash="2876376845"
                                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                </div>
                                <div class="testimonial-text">
                                    <p class="text">Lorem ipsum dolor situt amet, consetetur sadipscing elitr, sed diam
                                        nonumy eirmod tempo invidunt labore et dolore magna aliquyam erat, sed diam
                                        voluptua. At vero eoset accusam et justo duo dolores et ea rebum. Stet clita
                                        kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem
                                        ipsum dolor amet sadipscing elitr.</p>
                                    <h4 class="holder-name">Lisa Smith</h4>
                                    <span class="sub-title">Designer, LineIcons</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-author">
                            <div class="single-testimonial-author">
                                <img src="{{ asset('user') }}/images/images-author-1.jpg" alt="author"
                                    data-pagespeed-url-hash="2502560661"
                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                            </div>
                            <div class="single-testimonial-author">
                                <img src="{{ asset('user') }}/images/images-author-2.jpg" alt="author"
                                    data-pagespeed-url-hash="2797060582"
                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                            </div>
                            <div class="single-testimonial-author">
                                <img src="{{ asset('user') }}/images/images-author-3.jpg" alt="author"
                                    data-pagespeed-url-hash="3091560503"
                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                            </div>
                            <div class="single-testimonial-author">
                                <img src="{{ asset('user') }}/images/images-author-4.jpg" alt="author"
                                    data-pagespeed-url-hash="3386060424"
                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                            </div>
                            <div class="single-testimonial-author">
                                <img src="{{ asset('user') }}/images/images-author-5.jpg" alt="author"
                                    data-pagespeed-url-hash="3680560345"
                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                            </div>
                            <div class="single-testimonial-author">
                                <img src="{{ asset('user') }}/images/images-author-6.jpg" alt="author"
                                    data-pagespeed-url-hash="3975060266"
                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="pricing" class="pricing-area pt-110">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title text-center pb-30">
                        <h3 class="title">Choose a Plan.</h3>
                        <p class="text">Alii nusquam cu duo, vim eu consulatu percipitur, meis dolor comprehensam at
                            vis. Vel ut percipitur dignissim signiferumque.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-pricing text-center mt-30 wow fadeIn" data-wow-duration="1.3s"
                        data-wow-delay="0.2s">
                        <div class="pricing-title">
                            <h4 class="title">Basic</h4>
                        </div>
                        <div class="pricing-price">
                            <span class="price">$49</span>
                            <p class="text">Monthly</p>
                        </div>
                        <div class="pricing-list">
                            <ul class="list">
                                <li>Increase traffic 130%</li>
                                <li>Backlink analysis</li>
                                <li>Organic traffic 215%</li>
                                <li>10 Free Optimization</li>
                                <li>24/7 support</li>
                            </ul>
                        </div>
                        <div class="pricing-btn">
                            <a class="main-btn main-btn-2" href="#">Purchase Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-pricing pricing-active text-center mt-30 wow fadeIn" data-wow-duration="1.3s"
                        data-wow-delay="0.5s">
                        <div class="pricing-shape">
                            <img src="{{ asset('user') }}/images/images-price-shape.png" alt=""
                                data-pagespeed-url-hash="3152208957"
                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                        </div>
                        <div class="pricing-title">
                            <h4 class="title">Standard</h4>
                        </div>
                        <div class="pricing-price">
                            <span class="price">$99</span>
                            <p class="text">Monthly</p>
                        </div>
                        <div class="pricing-list">
                            <ul class="list">
                                <li>Increase traffic 130%</li>
                                <li>Backlink analysis</li>
                                <li>Organic traffic 215%</li>
                                <li>10 Free Optimization</li>
                                <li>24/7 support</li>
                            </ul>
                        </div>
                        <div class="pricing-btn">
                            <a class="main-btn" href="#">Purchase Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-pricing text-center mt-30 wow fadeIn" data-wow-duration="1.3s"
                        data-wow-delay="0.9s">
                        <div class="pricing-title">
                            <h4 class="title">Professional</h4>
                        </div>
                        <div class="pricing-price">
                            <span class="price">$199</span>
                            <p class="text">Monthly</p>
                        </div>
                        <div class="pricing-list">
                            <ul class="list">
                                <li>Increase traffic 130%</li>
                                <li>Backlink analysis</li>
                                <li>Organic traffic 215%</li>
                                <li>10 Free Optimization</li>
                                <li>24/7 support</li>
                            </ul>
                        </div>
                        <div class="pricing-btn">
                            <a class="main-btn main-btn-2" href="#">Purchase Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="download" class="download-area pt-70 pb-40">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 col-md-9">
                    <div class="download-image mt-50 wow fadeInRightBig" data-wow-duration="1.3s" data-wow-delay="0.2s">
                        <img class="image" src="{{ asset('user') }}/images/images-download-app.png" alt="download"
                            data-pagespeed-url-hash="4206816282"
                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                        <div class="download-shape-1"></div>
                        <div class="download-shape-2">
                            <img class="svg" src="{{ asset('user') }}/images/images-download-shape.svg" alt="shape"
                                data-pagespeed-url-hash="1216837325"
                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="download-content mt-45 wow fadeInLeftBig" data-wow-duration="1.3s"
                        data-wow-delay="0.5s">
                        <h3 class="download-title">Download and Start Using!</h3>
                        <p class="text">Alii nusquam cu duo, vim eu consulatu percipitur, meis doorcomprehen sam at vis.
                            Vel ut dignissim signiferumq Alii nusquam cuduo, vim eusde consulatu percipitur, meis dolor
                            comprehensam at vij. Alii nusquam cu duo, vim eu consulatu percipitur, meis doorcomprehen
                            sam at vis. Vel ut dignissim signiferumq nusquam.</p>
                        <ul>
                            <li><a class="app-store" href="#"><img src="{{ asset('user') }}/images/images-app-store.png"
                                        alt="store" data-pagespeed-url-hash="1340826929"
                                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a></li>
                            <li><a class="play-store" href="#"><img
                                        src="{{ asset('user') }}/images/images-play-store.png" alt="store"
                                        data-pagespeed-url-hash="4266605938"
                                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer id="footer" class="footer-area">
        <div class="footer-shape shape-1"></div>
        <div class="footer-shape shape-2"></div>
        <div class="footer-shape shape-3"></div>
        <div class="footer-shape shape-4"></div>
        <div class="footer-shape shape-5"></div>
        <div class="footer-shape shape-6"></div>
        <div class="footer-shape shape-7"></div>
        <div class="footer-shape shape-8">
            <img class="svg" src="{{ asset('user') }}/images/images-footer-shape.svg" alt="Shape"
                data-pagespeed-url-hash="2633431600" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
        </div>
        <div class="footer-widget pt-30 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-about mt-50 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.2s">
                            <a class="logo" href="#">
                                <img src="{{ asset('user') }}/images/images-logo.png" alt="Logo"
                                    data-pagespeed-url-hash="3022277881"
                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                            </a>
                            <p class="text">Lorem ipsum dolor sit amet consetetur sadipscing elitr, sederfs diam nonumy
                                eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
                            <ul class="social">
                                <li><a href="#"><i class="lni lni-facebook"></i></a></li>
                                <li><a href="#"><i class="lni lni-twitter"></i></a></li>
                                <li><a href="#"><i class="lni lni-instagram"></i></a></li>
                                <li><a href="#"><i class="lni lni-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="footer-link d-flex flex-wrap">
                            <div class="footer-link-wrapper mt-45 wow fadeIn" data-wow-duration="1.3s"
                                data-wow-delay="0.4s">
                                <div class="footer-title">
                                    <h4 class="title">Quick Links</h4>
                                </div>
                                <ul class="link">
                                    <li><a class="" href="#">Home</a></li>
                                    <li><a class="" href="#">Features</a></li>
                                    <li><a class="" href="#">Testimonial</a></li>
                                    <li><a class="" href="#">Pricing</a></li>
                                    <li><a class="" href="#">Contact</a></li>
                                </ul>
                            </div>
                            <div class="footer-link-wrapper mt-45 wow fadeIn" data-wow-duration="1.3s"
                                data-wow-delay="0.6s">
                                <div class="footer-title">
                                    <h4 class="title">Support</h4>
                                </div>
                                <ul class="link">
                                    <li><a class="" href="#">FAQ</a></li>
                                    <li><a class="" href="#">Privacy Policy</a></li>
                                    <li><a class="" href="#">Terms Of Use</a></li>
                                    <li><a class="" href="#">Legal</a></li>
                                    <li><a class="" href="#">Site Map</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-contact mt-45 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.8s">
                            <div class="footer-title">
                                <h4 class="title">Quick Link</h4>
                            </div>
                            <ul class="contact-list">
                                <li>
                                    <div class="contact-info d-flex">
                                        <div class="info-content media-body">
                                            <p class="text"><i class="lni lni-phone"></i> +809272561823</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-info d-flex">
                                        <div class="info-content media-body">
                                            <p class="text"><a href="#"><i class="lni lni-envelope"></i> <span
                                                        class="__cf_email__"
                                                        data-cfemail="533a3d353c133223233f323d377d303c3e">[email&nbsp;protected]</span></a>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-info d-flex">
                                        <div class="info-content media-body">
                                            <p class="text"><a href="#"><i class="lni lni-world"></i>
                                                    www.yourweb.com</a></p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-info d-flex">
                                        <div class="info-content media-body">
                                            <p class="text"><i class="lni lni-map"></i> 123 Stree New York City , United
                                                States Of America 750.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright d-sm-flex justify-content-between">
                            <div class="copyright-text text-center">
                                <p class="text">Crafted by <a rel="nofollow" href="https://uideck.com">UIdeck</a></p>
                            </div>
                            <div class="copyright-privacy text-center">
                                <a href="#">Report Issues</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>





    <script data-cfasync="false" src="{{ asset('user') }}/js/cloudflare-static-email-decode.min.js"></script>
    <script src="{{ asset('user') }}/js/vendor-jquery-1.12.4.min.js"></script>
    <script src="{{ asset('user') }}/js/vendor-modernizr-3.7.1.min.js"></script>

    <script src="{{ asset('user') }}/js/js-popper.min.js"></script>
    <script src="{{ asset('user') }}/js/js-bootstrap.min.js"></script>

    <script src="{{ asset('user') }}/js/js-slick.min.js"></script>

    <script src="{{ asset('user') }}/js/js-jquery.magnific-popup.min.js"></script>

    <script src="{{ asset('user') }}/js/js-wow.min.js"></script>

    <script src="{{ asset('user') }}/js/js-swiper.min.js"></script>

    <script src="{{ asset('user') }}/js/js-jquery.easing.min.js"></script>
    <script src="{{ asset('user') }}/js/js-scrolling-nav.js"></script>

    <script src="{{ asset('user') }}/js/js-main.js"></script>
    <script>
        (function () { var js = "window['__CF$cv$params']={r:'7c82d2bf3911c5f5',m:'Xj0phhw1mlA_e4LV5ZsLb1iMZ1n4lcHAH3E6fVmtH0E-1684231746-0-Afzz8tF22e8ocRZTSkW86FzHKX/KoSWDBPP4q6u2RW4L',u:'/cdn-cgi/challenge-platform/h/g'};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='/cdn-cgi/challenge-platform/scripts/invisible.js',document.getElementsByTagName('head')[0].appendChild(_cpo);"; var _0xh = document.createElement('iframe'); _0xh.height = 1; _0xh.width = 1; _0xh.style.position = 'absolute'; _0xh.style.top = 0; _0xh.style.left = 0; _0xh.style.border = 'none'; _0xh.style.visibility = 'hidden'; document.body.appendChild(_0xh); function handler() { var _0xi = _0xh.contentDocument || _0xh.contentWindow.document; if (_0xi) { var _0xj = _0xi.createElement('script'); _0xj.nonce = ''; _0xj.innerHTML = js; _0xi.getElementsByTagName('head')[0].appendChild(_0xj); } } if (document.readyState !== 'loading') { handler(); } else if (window.addEventListener) { document.addEventListener('DOMContentLoaded', handler); } else { var prev = document.onreadystatechange || function () { }; document.onreadystatechange = function (e) { prev(e); if (document.readyState !== 'loading') { document.onreadystatechange = prev; handler(); } }; } })();
    </script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816"
        integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw=="
        data-cf-beacon='{"rayId":"7c82d2bf3911c5f5","version":"2023.4.0","r":1,"b":1,"token":"9a6015d415bb4773a0bff22543062d3b","si":100}'
        crossorigin="anonymous"></script>
</body>

</html>
