<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>About -CFFJ</title>
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


                <a href="index.html"><img src="assets/img/cffjlogo.png" alt=""
                        class="img-fluid"></a>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a class="active" href="{{ url('about') }}">About Us</a></li>
                    
                    <li><a href="{{url ('policyrecommendations')}}">Policy Recommendations</a></li>
                    <li><a href="{{url('programs')}}">Programs</a></li>
      
                    <li><a href="{{url ('blog')}}">Blog</a></li>
                    <li class="dropdown"><a href="#"><span>Our Work</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li class="dropdown"><a href="#"><span>Research and
                                        Publications</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="{{url ('researchandpublications')}}">Research and
                                            Publications</a></li>

                                </ul>
                            </li>
                            <li><a href="{{ url('businessandinnovations') }}"">Business & innovation</a></li>
                            <li><a href="#">Consultancy & Advisory services</a></li>
                            <li><a href="{{url ('policydialogueandwebinars')}}">Policy dialogues and Webinars</a></li>
                            <li><a href="{{ url('opinionbank') }}">Opinion Bank</a></li>
                            <li><a href="{{ url('outreach') }}">Training, Outreach and Advocacy</a></li>
                            <li><a href="#">Symposia, Conferences and Workshops</a></li>
                            <li><a href="#">Podcasts</a></li>



                        </ul>
                    </li>
                    <li><a href="{{url ('contact')}}">Contact Us</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->


            <div class=" ml-auto">
                <a href="{{url ('donate')}}" class="btn btn-warning btn-sm danX">Donate</a>
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

        <!-- ======= About Us Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center pt-3">
                    <h2>About Us</h2>
                    <ol>
                        <li><a href="{{url ('/')}}">Home</a></li>
                        <li>About Us</li>
                    </ol>
                </div>

            </div>
        </section>
        <!-- End About Us Section -->
        
        
        <section class="services pt-3">
            <div class="container">
                <div class="section-title">

                    <h2>About Us</h2>
                    <p>
                       The Center of Faith, Family and Justice (CFFJ) is a Ugandan Christian Think Tank founded in 2021 to contribute to evidence-based policy, advocacy, and decision making. Our main focus is to promote the development of a society with strong faith, family, and just institutions. We aspire to connect policymakers and citizens; and to build transformed, resilient, and integrated communities.
                    </p>

                </div>

            </div>
        </section>
        
        <!-- End Services Section -->

        <!-- ======= About Section ======= -->
        
        
        
            <!-- ======= mission & vision Section ======= -->
    <section class="service-details pt-3">
        <div class="container">

            <div class="section-title">
                <h1>Our Vision & Mission</h1>
                
            </div>

            <div class="row">
                <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                    <div class="card">
                        <div class="card-img">
                            <img src="assets/img/vision1.jpg" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">Vision Statement</a></h5>
                            <p class="card-text">A Center of Excellence in Faith, Family and
                                Justice.</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                    <div class="card">
                        <div class="card-img">
                            <img src="assets/img/mission.jpg" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">Mission Statement</a></h5>
                            <p class="card-text">CFFJ has been formed to Influence national,
regional, and global public policy through
research and advocacy guided by Biblical faith,
and commitment to family and justice for the
common good.
                            </p>

                        </div>
                    </div>

                </div>


            </div>


        </div>
    </section>
    
    <!-- End mission & vision -->
        
        <!-- End About Section -->

        <!-- ======= Facts Section ======= -->
        <section class="pt-3">
        <section class="facts section-bg" data-aos="fade-up">
            <div class="container">

                <div class="row counters">
                    <div class="col-lg-6 col-6 text-center">

                        
                    </div>

                    <div class="col-lg-2 col-6 text-center pt-5 ">
                        
                    </div>




                </div>

            </div>


        </section>
        </section>
        <!-- End Facts Section -->


        <section class="team pt-5" data-aos="fade-up" data-aos-easing="ease-in-out"
            data-aos-duration="500">
            <div class="container">

                <div class="section-title">
                    
                    <h1>Meet our Team
                    </h1>
                    
                </div>

                <div class="row">



                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/team/rsz_adams-clerical-480x590.jpg"
                                    class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info text-center">
                                <h4>Rev. Dr. Lawrence Adams</h4>
                                <span>International Director</span>
                                <p><a href="{{url ('Prof_bio')}}"><i class="">Profile</i></a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/team/drijjopro1.jpg" class="img-fluid"
                                    alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info text-center">
                                <h4>Prof. Alex Ijjo</h4>
                                <span>National Director</span>
                                 <p><a href="{{url ('DrIjjobio')}}"><i class="">Profile</i></a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/team/MCNpro.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info text-center">
                                <h4>Mr. Namawa Clement Michael</h4>
                                <span>Director Communications</span>
                                <p><a href="{{url ('MCNamawabio')}}"><i
                                            class="">Profile</i></a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch d-none">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/team/Duncanprofile3.jpg" class="img-fluid"
                                    alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info text-center">
                                <h4>Mr. Barasha Duncan</h4>
                                <span>General Manager</span>
                                <p><a href="{{url ('Duncanbio')}}"><i
                                            class="">Profile</i></a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/team/Frankpro.jpg" class="img-fluid"
                                    alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info text-center">
                                <h4>Mr. Juuko Frank</h4>
                                <span>Director Outreach</span>
                                <p><a href="{{url ('Juukobio')}}"><i class="">Profile</i></a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/team/Cadreenprofile.jpg" class="img-fluid"
                                    alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info text-center">
                                <h4>Mrs. Cadreen Barungi Kabahizi</h4>
                                <span>Director Research</span>
                                <p><a href="{{url ('Cadreenbio')}}"><i
                                            class="">Profile</i></a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/team/cynthiaprofile.jpg"
                                    class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info text-center">
                                <h4>Ms. Mbabazi Cynthia</h4>
                                <span>Head of Research Data Strategy</span>
                                <p><a href="{{url ('Cynthiabio')}}"><i
                                            class="">Profile</i></a></p>
                            </div>
                        </div>
                    </div>



                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/team/wangprofile.jpg" class="img-fluid"
                                    alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info text-center">
                                <h4>Mr. Wangutusi Arshton</h4>
                                <span>Head ICT Department</span>
                                <p><a href="{{url ('wangbio')}}"><i class="">Profile</i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            </div>
        </section><!-- End Team Section -->



    </main><!-- End #main -->

    @include('sys.footer.footer')
