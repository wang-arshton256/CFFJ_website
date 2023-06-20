<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Policy Dialogue & Webinars -CFFJ</title>
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

    <!---- very important CSS file for policy dialogue page--->
    <link href="assets/css/policydialoguepage.css" rel="stylesheet">
    <!---- very important CSS file for policy dialogue page--->


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
                    <li class="dropdown"><a class="active"
                            href="#"><span>Resources</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>

                            <li class="dropdown"><a href="#"><span>Research and
                                        Publications</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="{{ url('researchandpublications') }}">Research
                                            and
                                            Publications</a></li>

                                </ul>
                            </li>
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
<!-- End Header -->

    <main id="main">

        <!-- ======= Our Services Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center pt-3">
                    <h2>Policy Dialogue and Webinars</h2>
                    <ol>
                        <li><a href="{{url ('/')}}">Home</a></li>
                        <li>Policy Dialogue and Webinars</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Our Services Section -->
        <!-- ======= Services Section ======= -->

        <section></section>

        <!-- policy dialogue and webinars section -->
        <section class="w3l-services" id="core">
            <div class="midd-w3 py-5">
                <div class="container py-lg-5 py-md-3 py-2">
                    <div class="row">
                        <div class="col-lg-6 mb-lg-0 mb-md-5 mb-5 align-self">
                            <h6 class="title-small">Core Values</h6>
                            <h3 class="title-big mx-0">As CFFJ, we stand for Faith, Family and
                                Justice</p>
                                <p class="mt-3">Our main focus is to promote the
                                    development of a society with strong faith, family, and just
                                    institutions.<br class="pt-2"> We aspire to connect
                                    policymakers and citizens; and to build transformed, resilient,
                                    and integrated communities.</p>
                                <a href="#features"
                                    class="btn btn-secondary btn-style mt-md-5 mt-4 mr-2 alexa d-none">Work
                                    with us</a>
                                <a href="#Learnmore"
                                    class="btn btn-outline-primary btn-style mt-md-5 mt-4">Learn
                                    More</a>
                        </div>
                        <div class="col-lg-6 align-self-center">
                            <div class="row features4-grids">
                                <div class="col-md-6">
                                    <div class="features4-grid">
                                        <div class="feature-images">
                                            <span class="iconify" data-icon="bx:bx-church"
                                                data-width="35"></span>

                                        </div>
                                        <h5><a href="#about">Faith</a></h5>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-lg-0 mt-4">
                                    <div class="features4-grid">
                                        <div class="feature-images">
                                            <span class="iconify pb-1"
                                                data-icon="carbon:pedestrian-family" data-width="35"
                                                data-height="35"></span></span>
                                        </div>
                                        <h5><a href="#about">Family</a></h5>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-4">
                                    <div class="features4-grid">
                                        <div class="feature-images">
                                            <span class="iconify"
                                                data-icon="healthicons:justice" data-width="35"
                                                data-height="35"></span>
                                        </div>
                                        <h5><a href="#about">Justice</a></h5>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-4 d-none">
                                    <div class="features4-grid">
                                        <div class="feature-images">
                                            <span class="fa fa-bullhorn" aria-hidden="true"></span>
                                        </div>
                                        <h5><a href="#about">Digital Product Development</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- //end policy dialogue and webinars section -->

        <!--  Events section -->
               <section class=" section-bg" data-aos="fade-up" date-aos-delay="200">


        <div class="container py-lg-5 py-md-4">
            <div class="row align-items-center">
                <div class="col-lg-4 bg-white pt-2 pb-2">
                    <h3 class="title-big section-bg section-title why-us mw-100 pt-3  eventtext">
                        Explore solutions</h3>
                </div>
                <div class="col-lg-5 mt-lg-0 mt-md-4 mt-4">
                    <p>From our weekly Policy Labs, regular Policy Training, and research
                        internships.</p>
                </div>

                <div class="col-lg-3 text-lg-right mt-lg-0 mt-3">
                    <a href="{{ url('events') }}" class="btn btn-secondary btn-style "
                        style="background-color:">View all events</a>
                </div>

            </div>
            
            
                
                
            <div class="row mt-md-5 mt-4 text-center  pt-4 pb-4 ">
                
                <div class="col-lg-4 col-md-2">
                    <div class="grids5-info">
                        <a href="#service" class="d-block zoom"><img
                                src="assets/img/publications/cffj annual report.png" alt=""
                                class="img-fluid service-image" /></a>
                        <div class="blog-info shadow pt-4 pb-4">
                            <h4 class="pt-3">CFFJ anunual report 2021-2022.
                            </h4>

                            <p class="px-2 py-2"> Center of Faith, Family and Justice presents to you the annual report for the year 2021-2022.</p>
                            <a
                                href="assets/files/pdfpublications/CFFJ Annual Report 2021-22.pdf">
                                Click here to read report</a>

                        </div>
                    </div>
                </div>

            
            <div class="col-lg-4 col-md-2">
                    <div class="grids5-info">
                        <a href="#service" class="d-block zoom"><img
                                src="assets/img/events/shea.png" alt=""
                                class="img-fluid service-image" /></a>
                        <div class="blog-info shadow pt-4 pb-4">
                            <h4 class="pt-3">SAVE THE SHEA NUT TREE
                            </h4>

                            <p class="px-2 py-2">Save the Ugandan Heritage Campaign</p>
                            <P><strong>Duration</strong> 11th to 12th August, 2022</P>

                                                            <script src="https://cdn.logwork.com/widget/countdown.js"></script>
<a href="https://logwork.com/countdown-wv2k" class="countdown-timer" data-timezone="America/Chicago" data-date="2022-08-11 10:02">Countdown</a>

                        </div>
                        
                    </div>
                </div>

                    

                <div class="col-lg-4 col-md-2">
                    <div class="grids5-info">
                        <a href="#service" class="d-block zoom"><img
                                src="assets/img/events/International Women's Day Poster.png" alt=""
                                class="img-fluid service-image" /></a>
                        <div class="blog-info shadow pt-4 pb-4">
                            <h4 class="pt-3">Happy International Women's Day.
                            </h4>

                            <p class="px-2 py-2"> Happy women's day to the change agents out
                                there. We celebrate you
                                all.</p>

                        </div>
                    </div>
                </div>


               



                <div class="col-lg-4 col-md-6 d-none">
                    <div class="grids5-info">
                        <a href="#service" class="d-block zoom"><img
                                src="assets/img/events/christmas.png" alt=""
                                class="img-fluid service-image" /></a>
                        <div class="blog-info shadow">
                            <h4 class="pt-3">Center of Faith, Family and Justice would
                                like to wish you and your family a Merry Christmas and a happy new
                                year.
                            </h4>

                            <p> May this season find you among those you love, sharing in the twin
                                glories of generocity and gratitude</p>

                        </div>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6 mt-lg-0 mt-5 d-none">
                    <div class="grids5-info">
                        <a href="#service" class="d-block zoom"><img
                                src="assets/img/events/agribusinessflyerc.jpg" alt=""
                                class="img-fluid service-image" /></a>
                        <div class="blog-info shadow pt-4 pb-4">
                            <h4 class="pt-3">Exploring Opportunities For Youth In Agri
                                Business Webinar
                            </h4>
                            <p>25-Nov-2021 -Previous</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-lg-0 mt-5 d-none">
                    <div class="grids5-info">

                        <a href="#service" class="d-block zoom"><img
                                src="assets/img/events/newposterb.png" alt=""
                                class="img-fluid service-image" /></a>


                        <div class="blog-info shadow pt-4 pb-4">


                            <h4 class="pt-3">Feminism, Family and the AFrican Culture.
                            </h4>
                            <p>28-Oct-2021 - Previous</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </section>
        <!--  //Events section -->
    </main>

    <!--end main-->
    @include('sys.footer.footer')
