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

      </head>


      <body data-spy="scroll" data-target="#data-scroll"  data-hijacking="on" data-animation="scaleDown">

            <!-- Navbar -->
            <div class="navbar navbar-custom sticky navbar-fixed-top" role="navigation">
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


            <!--START HOME-->
            <section class="bg-images home-padding-t-150" id="home">
                <div class="bg-overlay"></div>
                <div class="display-table">
                    <div class="home-cell-bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2 text-white text-center">
                                    <h1 class="home-title">Coem Chat App</h1>
                                    <p class="padding-t-15 home-desc">Brand new chat apps that build by Laravel, VueJs, Pusher and LOVE. Coem Chat is Free and Open Source so everyone can use it.</p>
                                    <a href="#" class="btn btn-custom margin-t-20">Get Started</a>
                                    <img src="{{ asset('assets/images/home-dashboard.png') }}" alt="" class="img-responsive center-block margin-t-20">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--END HOME-->


            <!--START SERVICES-->
            <section class="section" id="services">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h1 class="section-title text-center">Our Services</h1>
                            <div class="section-title-border margin-t-20"></div>
                            <p class="section-subtitle text-muted text-center padding-t-30 font-secondary">We make people connect to each other, we make people can talk with other random people to make a connection or a relationship. <strong>Coem Chat</strong> is Free and Open Source so everyone can use it.</p>
                        </div>
                    </div>
                    <div class="row margin-t-30">
                        <div class="col-md-4 margin-t-20">
                            <div class="services-box text-center">
                                <i class="pe-7s-diamond text-custom"></i>
                                <h4 class="padding-t-15">Easy To Use</h4>
                                <p class="padding-t-15 text-muted">Coem Chat App is easy to use, you just need to sign up an account.</p>
                            </div>
                        </div>
                        <div class="col-md-4 margin-t-20">
                            <div class="services-box text-center">
                                <i class="pe-7s-display2 text-custom"></i>
                                <h4 class="padding-t-15">Chat With Other People</h4>
                                <p class="padding-t-15 text-muted">You can chat and get in touch with other random people easily.</p>
                            </div>
                        </div>
                        <div class="col-md-4 margin-t-20">
                            <div class="services-box text-center">
                                <i class="pe-7s-piggy text-custom"></i>
                                <h4 class="padding-t-15">Free To Use</h4>
                                <p class="padding-t-15 text-muted">You dont need to pay to use our chat app, is absolutly FREE to Everyone.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--START SERVICES-->


            <!--START WEBSITE-DESCRIPTION-->
            <section class="section bg-web-desc">
                <div class="bg-overlay overlay-opacity-low"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="text-white">Wanna Try Our Chat App ?</h2>
                            <p class="padding-t-15 home-desc">If you wanna chat and get in touch to other people just register in this website and you can use it easily.</p>
                            <a href="/register" class="btn btn-custom margin-t-30 waves-effect waves-light">Try It Free</a>
                        </div>
                    </div>
                </div>
            </section>
            <!--END WEBSITE-DESCRIPTION-->


            <!--START TESTIMONIAL-->
            <section class="section" id="team">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h1 class="section-title text-center">Our Team</h1>
                            <div class="section-title-border margin-t-20"></div>
                            <p class="section-subtitle text-muted text-center font-secondary padding-t-30">Our team is full of young people that wanna improve and make a better world and make people connect to each other, we serve you professionally and of course with love.</p>
                        </div>
                    </div>
                    <div class="row margin-t-50">
                        <div class="col-md-3 col-sm-6">
                            <div class="team-box text-center">
                                <div class="team-wrapper">
                                    <div class="team-member">
                                        <img alt="" src="{{ asset('assets/images/team/faisal.jpg') }}" class="img-responsive img-rounded">
                                    </div>
                                </div>
                                <h4 class="team-name">Faisal Amir</h4>
                                <p class="text-uppercase team-designation">Developer</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="team-box text-center">
                                <div class="team-wrapper">
                                    <div class="team-member">
                                        <img alt="" src="{{ asset('assets/images/team/solihin.jpg') }}" class="img-responsive img-rounded">
                                    </div>
                                </div>
                                <h4 class="team-name">Muhammad Solihin</h4>
                                <p class="text-uppercase team-designation">Developer</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="team-box text-center">
                                <div class="team-wrapper">
                                    <div class="team-member">
                                        <img alt="" src="{{ asset('assets/images/team/fikri.jpg') }}" class="img-responsive img-rounded">
                                    </div>
                                </div>
                                <h4 class="team-name">Fikri Rizky Zuraysh</h4>
                                <p class="text-uppercase team-designation">UI/UX </p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="team-box text-center">
                                <div class="team-wrapper">
                                    <div class="team-member">
                                        <img alt="" src="{{ asset('assets/images/team/dian.jpg') }}" class="img-responsive img-rounded">
                                    </div>
                                </div>
                                <h4 class="team-name">Dian Fitriani</h4>
                                <p class="text-uppercase team-designation">Customer Service</p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!--END TESTIMONIAL-->


            <!--START TESTIMONIAL-->
            <section class="section" id="testi">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h1 class="section-title text-center">People says</h1>
                            <div class="section-title-border margin-t-20"></div>
                            <p class="section-subtitle text-muted text-center font-secondary padding-t-30">Some of a thousand reviews that user give to our Coem Chat Apps.</p>
                        </div>
                    </div>
                    <div class="row margin-t-50">
                        <div class="col-md-4">
                            <div class="testimonial-box margin-t-30">
                                <img src="{{ asset('assets/images/testimonials/1.jpg') }}" alt="" class="img-responsive center-block img-thumbnail img-circle">
                                <div class="bg-gray testimonial-decs">
                                    <h5 class="text-muted text-center"><b>"</b>I have been using Coem Chat App for 1 month and i think i love it.</h5>
                                </div>
                                <h5 class="text-center text-uppercase padding-t-15">Ruben Reed -<span class="text-muted text-capitalize">Charleston</span></h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial-box margin-t-30">
                                <img src="{{ asset('assets/images/testimonials/2.jpg') }}" alt="" class="img-responsive center-block img-thumbnail img-circle">
                                <div class="bg-gray testimonial-decs">
                                    <h5 class="text-muted text-center"><b>"</b>I can interact with other people from other country, learn about their culture and many things.</h5>
                                </div>
                                <h5 class="text-center text-uppercase padding-t-15">Michael P. Howlett -<span class="text-muted text-capitalize">Worcester</span></h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial-box margin-t-30">
                                <img src="{{ asset('assets/images/testimonials/3.jpg') }}" alt="" class="img-responsive center-block img-thumbnail img-circle">
                                <div class="bg-gray testimonial-decs">
                                    <h5 class="text-muted text-center"><b>"</b>This a great apps, so easy to use with great design and fast.</h5>
                                </div>
                                <h5 class="text-center text-uppercase padding-t-15">Theresa D. Sinclair -<span class="text-muted text-capitalize">Lynchburg</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--END TESTIMONIAL-->


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
