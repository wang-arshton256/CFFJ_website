<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Donate -CFFJ</title>
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
                            <li><a href="#">Consultancy & Advisory services</a></li>
                            <li><a href="{{ url('policydialogueandwebinars') }}">Policy dialogues
                                    and Webinars</a></li>
                            <li><a href="#">Training, Outreach and Advocacy</a></li>
                            <li><a href="#">Symposia, Conferences and Workshops</a></li>
                            <li><a href="#">Podcasts</a></li>



                        </ul>
                    </li>
                    <li><a href="{{ url('contact') }}">Contact Us</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <div class=" ml-auto">




                <a class="active" href="{{ url('donate') }}"
                    class="btn btn-warning btn-sm danX">Donate</a>
            </div>

        </div>


    @if (Session::has('subscriber_details_submitted'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('subscriber_details_submitted') }}
    </div>
@endif

    </header>


    <main id="main">

        <!-- ======= Blog Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center pt-3">
                    <h2>Donate</h2>

                    <ol>
                        <li><a href="{{url ('/')}}">Home</a></li>
                        <li>Donate</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Blog Section -->

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-8 entries pl-3">



                        <article class="entry">



                            <h2 class="entry-title">Donate to Center of Faith Family and Justice
                            </h2>



                            <div class="entry-content dexal">
                                <p>
                                    Please choose your preferred payment method.
                                </p>
                                <h4 class="">Payment Method*</h4>

                                <a href="standingord.html"
                                    class="btn btn-secondary btn-lg btndirect danX">Cheque</a>
                                <a href="directdt.html"
                                    class="btn btn-primary btn-lg btndirect">Direct Debit</a>



                            </div>

                        </article><!-- End blog entry -->



                        <article class="entry" pt-2>





                            <div class="entry-content dexal">

                                <h4 class="">Payment Instructions: Standing Order</h4>

                                <p class=" pt-3">Below are the details required to set up a
                                    Standing Order with your bank. Kindly indicate your name on the
                                    payment description of your bank slip for easy identification.
                                </p>
                                </p>





                                <dl class="mb-0 pt-3 row">
                                    <dt class="col-md-6">Name of Bank</dt>
                                    <dd class="col-md-6">
                                        Equity Bank (U) Ltd </dd>
                                    <dt class="col-md-6">Address of Bank (street) </dt>

                                    <dd class="col-md-6"> Plot 34, Church House, Kampala Road
                                    </dd>

                                    <dt class="col-md-6">Address of Bank (town) </dt>

                                    <dd class="col-md-6"> Kampala </dd>

                                    <dt class="col-md-6">Address of Bank (country) </dt>

                                    <dd class="col-md-6">Uganda </dd>

                                    <dt class="col-md-6">SWIFT = BIC (obligatory) </dt>

                                    <dd class="col-md-6"> EQBLUGKA </dd>

                                    <dt class="col-md-6">Account number </dt>

                                    <dd class="col-md-6"> 1001201854354 (UGX)-Shillings
                                        Account </dd>


                                    <dt class="col-md-6"> Account number </dt>

                                    <dd class="col-md-6">1001201854361 ($)-Dollar Account</dd>

                                    <dt class="col-md-6 d-none">Sort Code </dt>

                                    <dd class="col-md-6 d-none"> .....013447..... </dd>

                                    <dt class="col-md-6">Account holder name </dt>

                                    <dd class="col-md-6"> CENTER OF FAITH FAMILY AND JUSTICE
                                        (CFFJ) LIMITED</dd>

                                    <dt class="col-md-6">Address of account holder (street)
                                    </dt>

                                    <dd class="col-md-6">Kampala, Uganda </dd>

                                    <dt class="col-md-6"> Address of account holder (town)
                                    </dt>

                                    <dd class="col-md-6"> Kampala </dd>

                                    <dt class="col-md-6">Address of account holder (country)
                                    </dt>

                                    <dd class="col-md-6">Uganda </dd>

                                </dl>

                            </div>

                        </article><!-- End blog entry -->



                    </div>
                </div>
            </div>

        </section><!-- End Blog Section -->

    </main><!-- End #main -->
    @include('sys.footer.footer')
