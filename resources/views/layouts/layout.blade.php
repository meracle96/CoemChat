<!DOCTYPE html>
<html lang="en" class="no-js">
      <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>COEM CHAT APPS</title>
            <meta name="description" content="" />
            <meta name="keywords" content="" />
            <meta name="author" content="Coderthemes" />
            <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

            <!-- Google Font -->
            <link href="https://fonts.googleapis.com/css?family=Raleway:500,600|Roboto:400,500" rel="stylesheet">

            <!-- pe-icon-7 Css-->
            <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pe-icon-7-stroke.css') }}" />
            <!-- pe-icon-social Css-->
            <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pe-icon-social.css') }}" />

            <!-- Waves effect Css-->
            <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/waves.css') }}" />

            <!-- Bootstrap Css-->
            <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}" />


            <!-- Magnific-popup -->
            <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">

            <!-- Custom Css -->
            <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />

            <style media="screen">
                .navbar-custom {
                  background-color: #272a33;
                }
            </style>

      </head>


      <body>

            <!-- Navbar -->
            <div class="navbar navbar-custom">
                <div class="container">
                    <!-- Navbar-header -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <i class="pe-7s-menu"></i>
                        </button>
                    <!-- LOGO -->
                    <a class="navbar-brand logo" href="index.html" style="margin-top:10px;">
                        Coem Chat
                    </a>
                    </div>
                    <!-- end navbar-header -->

                    <!-- menu -->
                    <div class="navbar-collapse collapse" id="data-scroll">
                        <ul class="nav navbar-nav navbar-center" style="margin-top:10px;">
                            <li class="active">
                                <a href="#home">Home</a>
                            </li>
                            <li>
                                <a href="#services">Services</a>
                            </li>
                            <li>
                                <a href="#team">Team</a>
                            </li>
                            <li>
                                <a href="#testi">Reviews</a>
                            </li>
                            @guest
                            <li>
                                <a href="/login">Login</a>
                            </li>
                            @endguest

                            @auth
                            <li>
                                <a href="/chat">Chat Room</a>
                            </li>
                            @endauth
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            @guest
                            <li>
                                <a href="/register"><button type="button" class="btn btn-custom navbar-btn btn-rounded waves-effect waves-light">Try it Free</button></a>
                            </li>
                            @endguest
                            @auth
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    <button type="button" class="btn btn-custom navbar-btn btn-rounded waves-effect waves-light">Logout</button>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                            @endauth
                        </ul>
                    </div>
                    <!--/Menu -->
                </div><!-- end container -->
            </div>
            <!--END NAVBAR-->

            @yield('content')

            <!--START SOCIAL-->
            <section class="cta bg-dark" id="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-inline social margin-t-20">
                                <li><a href="" class="social-icon"><i class="pe-so-facebook"></i></a></li>
                                <li><a href="" class="social-icon"><i class="pe-so-twitter"></i></a></li>
                                <li><a href="" class="social-icon"><i class="pe-so-linkedin"></i></a></li>
                                <li><a href="" class="social-icon"><i class="pe-so-google-plus"></i></a></li>
                                <li><a href="" class="social-icon"><i class="pe-so-youtube-1"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 text-white margin-t-30">
                            <p class="margin-b-0 contact-title"><i class="pe-7s-call"></i> &nbsp;+91 123 4556 789</p>
                        </div>
                        <div class="col-md-3 text-white margin-t-30 text-right">
                            <p class="contact-title"><i class="pe-7s-mail-open"></i>&nbsp; Support@coemchat.com</p>
                        </div>
                    </div>
                </div>
            </section>
            <!--END SOCIAL-->


            <!--START FOOTER ALTER-->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-alt-border"></div>
                        <div class="footer-alt">
                            <div class="pull-left float-none">
                                <p class="copy-rights text-muted">2017 © Coem Company. Dont forget to always support us.</p>
                            </div>
                            <div class="pull-right float-none">
                                <img src="{{ asset('assets/images/payment.png') }}" alt="payment-img" height="36" />
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--START FOOTER ALTER-->


            <!-- JAVASCRIPTS -->
            <script src="{{ asset('assets/js/jquery-2.1.4.min.js') }}"></script>
            <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
            <!-- Sticky Header -->
            <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
            <!-- Waves Effect js -->
            <script src="{{ asset('assets/js/waves.min.js') }}"></script>
            <!-- Jquery stellar for Parallax -->
            <script type="text/javascript" src="{{ asset('assets/js/parallax.min.js') }}"></script>
            <!-- Magnific Popup -->
            <script type="text/javascript" src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
            <!-- Jquery easing -->
            <script type="text/javascript" src="{{ asset('assets/js/jquery.easing.1.3.min.js') }}"></script>
            <script src="{{ asset('assets/js/app.js') }}"></script>

      </body>
</html>
