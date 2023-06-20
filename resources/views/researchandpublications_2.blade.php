<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Publications -CFFJ</title>
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
                    
                    <li><a href="{{ url('policyrecommendations') }}">Policy Recommendations</a>
                    </li>


                    <li><a href="{{url('programs')}}">Programs</a></i>
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
                            <li><a href="{{ url('businessandinnovations') }}"">Business & innovation</a></li>
                            <li><a href="#">Consultancy & Advisory services</a></li>
                            <li><a href="{{ url('policydialogueandwebinars') }}">Policy dialogues
                                    and Webinars</a></li>
                                     <li><a href="{{ url('opinionbank') }}">Opinion Bank</a>
                    </li>
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

        <!-- ======= About Us Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center pt-3">
                    <h2>Research and Publications</h2>
                    <ol>
                        <li><a href="{{url ('/')}}">Home</a></li>
                        <li>Research and Publications</li>
                    </ol>
                </div>

            </div>
        </section>
        
        <!-- End About Us Section -->

    

        <section class="team pt-5" data-aos="fade-up" data-aos-easing="ease-in-out"
            data-aos-duration="500">
            <div class="container">

                <div class="section-title">

                    <h4>A key part of our work is to engage in research related to our areas of
                        interest.<br>Here are our publications;-
                    </h4>

                </div>

                <div class="row ">

                    <div class="col-lg-2 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/publications/the effects of formal.png"
                                    class="img-fluid" alt="">
                                <a
                                    href="assets/files/pdfpublications/EffectsoformalfemaleemploymentonwellbeingAglobalperspective.pdf">click
                                    here to download</a>
                            </div>
                            <div class="member-info text-center">
                                <h4>Mrs. Cadreen Barungi Kabahizi</h4>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 d-flex align-items-stretch d-none">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/publications/continuous innovation.png"
                                    class="img-fluid" alt="">
                                <a
                                    href="assets/files/pdfpublications/CA-ContinuousInnovation-200821-1343.pdf">click
                                    here to download</a>
                            </div>
                            <div class="member-info text-center">
                                <h4>Mrs. Cadreen Barungi Kabahizi</h4>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 d-flex align-items-stretch d-none">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/publications/covidex.png"
                                    class="img-fluid" alt="">
                                <a
                                    href="assets/files/pdfpublications/CA-TheCuriousCaseofCOVIDEX-200821-1344.pdf">click
                                    here to download</a>
                            </div>
                            <div class="member-info text-center">
                                <h4>Mrs. Cadreen Barungi Kabahizi</h4>

                            </div>
                        </div>
                    </div>




                </div>

            </div>

            </div>
            
            
            
             </section> 
             
             <!----End team section---->
            
             <!-- ======= Contact Us Section (research & publications ======= -->
        <section class="why-us section-bg pt-5 pb-5" data-aos="fade-up" date-aos-delay="200">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12 d-flex flex-column justify-content-center p-3">
                        <p class="wlas">For More Details on Research and Publications</p>
                        <h2 class="wlasa">Get in touch</h2>

                    </div>
                    <div class="col-md-4 mt-2 mb-2 ">
                        <div class="icon-box ">

                            <div class="icon"><span class="iconify"
                                    data-icon="bx:bx-current-location" data-width="30"
                                    data-height="30"></span></div>
                            <h4 class="title pt-4"><a href="">Kampala, Uganda</a></h4>

                        </div>
                    </div>


                    <div class="col-md-4 mt-2 mb-2">
                        <div class="icon-box  ">
                            <div class="icon"><span class="iconify"
                                    data-icon="bx:bx-mail-send" data-width="30"
                                    data-height="30"></span></div>
                            <h4 class="title pt-4"><a href="">info@cffj.or.ug</a></h4>


                        </div>
                    </div>
                    <div class="col-md-4 mt-2 mb-2">
                        <div class="icon-box">
                            <div class="icon  "><span class="iconify"
                                    data-icon="bx:bx-phone-call" data-width="30"
                                    data-height="30"></span></div>
                            <h4 class="title pt-4"><a href="">+256-760-130-120</a></h4>

                        </div>
                    </div>
                </div>
            </div>

            </div>
        </section>


        <!-- ======= End Contact Us Section (research & publications ======= -->
        
        
        <!--Next page section -->
        
        <section>
        <div class="pt-5 pb-3">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="{{url ('researchandpublications')}}"
                            tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>

                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
            </div>
        </section>
        
        <!--End Next page section -->
        
        
    


    </main><!-- End #main -->
    @include('sys.footer.footer')
