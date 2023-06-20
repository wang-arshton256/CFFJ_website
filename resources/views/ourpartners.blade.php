<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Our Partners -CFFJ</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Moderna - v4.5.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center ">
        <div class="container d-flex justify-content-between align-items-center">

            <div class="logo">
                <a href="{{url ('/')}}"><img src="assets/img/cffjlogo.png" alt=""
                        class="img-fluid"></a>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('about') }}">About Us</a></li>
                    <li><a href="{{ url('whatwedo') }}">What we do</a></li>
                    <li><a href="{{ url('policyrecommendations') }}">Policy Recommendations</a>
                    </li>


                    <li><a href="{{url('programs')}}">Programs</a>
                    </li>
                    <li><a href="{{ url('blog') }}">Blog</a></li>
                    <li class="dropdown"><a href="#"><span>Resources</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>

                            <li class="dropdown"><a href="#"><span>Research and
                                        Publications</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="{{ url('researchandpublications') }}">Research
                                            and
                                            Publications</a></li>

                                </ul>
                            </li>
                            <li><a href="{{ url('businessandinnovations') }}"">Business & innovation</a></li>
                            <li><a href="#">Consultancy & Advisory services</a></li>
                            <li><a href="{{ url('policydialogueandwebinars') }}">Policy dialogues
                                    and Webinars</a></li>
                            <li><a href="{{ url('outreach') }}">Training, Outreach and Advocacy</a></li>
                            <li><a href="#">Symposia, Conferences and Workshops</a></li>
                            <li><a href="#">Podcasts</a></li>



                        </ul>
                    </li>
                    <li><a href="{{ url('contact') }}">Contact Us</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <div class=" ml-auto">




                <a href="{{ url('donate') }}" class="btn btn-warning btn-sm danX">Donate</a>
            </div>

        </div>


       @if (Session::has('subscriber_details_submitted'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('subscriber_details_submitted') }}
    </div>
@endif

    </header>

    <main id="main">

        <!-- ======= Our Services Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center pt-3">
                    <h2>Our Partners</h2>
                    <ol>
                        <li><a href="{{url ('/')}}">Home</a></li>
                        <li>Our Partners</li>
                    </ol>
                </div>

            </div>
        </section>
        <!-- End Our Services Section -->
        
          <section class="services pt-3">
            <div class="container">
                <div class="section-title">

                    <h2>Our Partners</h2>
                    <p>    </p>

                </div>

            </div>
        </section>
        
        
        <!-- ======= Services Section ======= -->



        <!--  //OUr partners section -->


        <div class="w3l-servicesblock1" id="why">
            <section id="grids5-block" class="py-5">
                <div class="container py-lg-5 py-md-4">
                    <div class="row align-items-center">
                        <div class="col-lg-10 ">
                            <h3
                                class="title-big  section-title why-us section-bg mw-100 pt-3  eventtext justify-content-center">
                                Agro Value Added Association & <br>Extension Services (AVAAES)</h3>
                        </div>
                        <div class="col-lg-5 mt-lg-0 mt-md-4 mt-4 d-none justify-content-center">
                            <p><strong>Avaas.</strong></p>
                        </div>

                    </div>
                    <div class="row mt-md-5 mt-4 text-center">
                        <div class="col-lg-4 col-md-6 d-none">
                            <div class="grids5-info">
                                <a href="#service" class="d-block zoom"><img
                                        src="assets/img/events/christmas.png" alt=""
                                        class="img-fluid service-image" /></a>
                                <div class="blog-info">
                                    <h4 class="pt-3"><a href="#service">Center of Faith,
                                            Family and Justice would like to wish you and your
                                            family a Merry Christmas and a happy new year.
                                        </a></h4>

                                    <p> May this season find you among those you love, sharing in
                                        the twin glories of generocity and gratitude</p>

                                </div>
                            </div>
                        </div>



                        <div class="col-lg-4 col-md-6 mt-lg-0 mt-5 d-none">
                            <div class="grids5-info">
                                <a href="#service" class="d-block zoom"><img
                                        src="assets/img/partners/Avaaeslogo.png" alt=""
                                        class="img-fluid service-image" /></a>
                                <div class="blog-info">
                                    <h4 class="pt-3"><a href="#service">Exploring
                                            Opportunities For Youth In Agri Business Webinar
                                        </a></h4>
                                    <p>25-Nov-2021 -Previous</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-10 col-md-6 mt-lg-0 mt-5 ">
                            <div class="grids5-info">

                                <a href="#service" class="d-block zoom"><img
                                        src="assets/img/partners/Avaaeslogo.png" alt=""
                                        class="img-fluid service-image" /></a>


                                <div class="blog-info">


                                    <h4 class="pt-3"><a href="#service">AVAAES is a
                                            nonprofit Agribusiness organization that was
                                            incorporated in 2018 to mainly sensitize farmers and the
                                            youths about Agribusiness and crop value addition
                                            through different training programs
                                        </a></h4>
                                    <p>P.O.Box 102272, Kampala, Uganda<br>
                                        Call Us: 256-755-123-176<br>
                                        Mukono - Uganda</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>

        <!--- end our partners section--->

    </main>


    <!---end main-->
    @include('sys.footer.footer')
