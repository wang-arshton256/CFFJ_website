<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>OutReach -CFFJ</title>
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
                <a href="{{ url('/') }}"><img src="assets/img/cffjlogo.png" alt=""
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
                            <li><a href="{{ url('businessandinnovations') }}"">Business & innovation</a></li>
                            <li><a href="#">Consultancy & Advisory services</a></li>
                            <li><a href="{{ url('policydialogueandwebinars') }}">Policy dialogues
                                    and Webinars</a></li>
                            <li><a href="{{ url('outreach') }}">Training, Outreach and
                                    Advocacy</a></li>
                            <li><a href="{{ url('outreach') }}">Symposia, Conferences and Workshops</a></li>
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

        <main id="main">

            <!-- ======= Blog Section ======= -->
            <section class="breadcrumbs">
                <div class="container">

                    <div class="d-flex justify-content-between align-items-center pt-3">
                        <h2>OutReach</h2>

                        <ol>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>OutReach</li>
                        </ol>
                    </div>

                </div>
            </section>

            <!-- End Blog Section -->

            <!-- ======= Services Section ======= -->
            <section class="services pt-4">
                <div class="container">
                    <div class="section-title">

                        <h2>OutReach</h2>
                        <p>CFFJ Outreach department was mainly
                            established to contribute to the achieving of the CFFJ objective
                            7<br>(To
                            carry
                            out outreach sensitization, training and community mobilization were
                            necessary, to enable <br> the realization of ever-increasing family
                            welfare
                            and
                            justice
                            nationally and globally.)

                        </p>

                    </div>

                </div>
            </section>

            <!----End header----->

            <!-- ======= Out reach-policy dialogue ======= -->
            <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-6 video-box">
                            <img src="assets/img/outreach/bishop.jpg" class="img-fluid rounded"
                                alt="">

                        </div>

                        <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

                            <div class="icon-box">
                                <div class="icon"><span class="iconify"
                                        data-icon="clarity:employee-group-solid" data-width="35"
                                        data-height="35"></span></div>
                                <h4 class="title"><a
                                        href="{{ url('webinars') }}">Background</a></h4>
                                <p class="description">CFFJ Outreach department was mainly
                                    established
                                    to contribute to the achieving of the CFFJ objective 7(To
                                    carry out
                                    outreach sensitization, training and community mobilization
                                    were<br>
                                    necessary, to enable the realization of ever-increasing
                                    family
                                    welfare
                                    and justice nationally and globally.</p>
                                <p class="description pt-2">CFFJ outreach Department is aimed at
                                    reaching
                                    out to and sensitizing families on different aspects of life
                                    but
                                    mainly on Faith, Family and Justice. This will be achieved
                                    mainly
                                    through cffj outreach activities like Workshops, Social
                                    corporate
                                    Responsibility (SCR), Webinar, podcasts.</p>
                            </div>



                        </div>
                    </div>

                </div>

            </section>
            <!-- End Out reach-policy dialogue Section -->


            <!-- Out reach Section -->
            <section class="w3l-grids-3 py-5" id="why">
                <div class="container py-lg-5 py-md-4 py-2">
                    <h2>CFFJ OutReach focuses on the following key areas:</h2>
                    <p class="pb-5">CFFJ Outreach department was mainly
                        established to contribute to the achieving of the CFFJ objective
                        7<br>(To
                        carry
                        out outreach sensitization, training and community mobilization were
                        necessary, to enable <br> the realization of ever-increasing family
                        welfare
                        and
                        justice
                        nationally and globally.)

                    </p>

                    <div class="row bottom-ab-grids-imges mt-lg-0 pt-3 pb-4 shadow-lg">
                        <div class="col-lg-3 col-md-3 bottom-ab-img mt-lg-5 mt-4 px-5">
                            <div class="whybox-wrap-grid mb-lg-5 mb-4">
                                <img src="assets/img/events/" alt="" class="radius-image img-fluid">
                                <div class="whybox-wrap-grid-inf mt-4">
                                    <div class="icon">
                                        <span class="iconify"
                                            data-icon="grommet-icons:workshop" data-width="35"
                                            data-height="35"></span>
                                    </div>
                                    <div class="info">
                                        <h4 class=""><a href="#url"> Workshops</a>
                                        </h4>
                                    </div>
                                </div>
                                <p class="mt-3">These will involve identifying and
                                    working
                                    with experienced people in the three (3) core aspects i.e.,

                                    Faith, Family and Justice while reaching out to the
                                    communities.</p>

                                <p class="pt-3"> CFFJ in collaboration with different
                                    organizations will be
                                    assisted by the authorities to organize 1- or 2-day
                                    workshops in
                                    different communities.</p>

                                <p class="pt-3"> The workshops will be divided in the
                                    3
                                    core aspects of
                                    CFFJ;

                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 bottom-ab-img mt-lg-5 mt-4">
                            <div class="whybox-wrap-grid mb-lg-5 mb-4">
                                <img src="assets/img/events/" alt="" class="radius-image img-fluid">
                                <div class="whybox-wrap-grid-inf mt-4">
                                    <div class="icon">
                                        <span class="iconify"
                                            data-icon="carbon:pedestrian-family" data-width="35"
                                            data-height="35"></span>
                                    </div>
                                    <div class="info">
                                        <h4><a href="#url"> Family</a></h4>
                                    </div>
                                </div>
                                <p class="pt-3">This will entail sensitization on:</p>
                                <p class="mt-3"> &#9679; Exposing Family
                                    planning/Contraceptives/Anti-family agenda. </p>
                                <p class="mt-3"> &#9679; God-given roles of
                                    men/fathers in
                                    families.</p>
                                <p class="mt-3"> &#9679; Exposing Family
                                    planning/Contraceptives/Anti-family agenda. </p>


                                <div class="pt-3">
                                    <button type="button" class="collapsible">View
                                        more</button>



                                    <div class="content">
                                        <p class="mt-3"> &#9679; God-given roles of
                                            women/mothers
                                            in families.
                                        </p>
                                        <p class="mt-3"> &#9679; Mindset change
                                            towards hard
                                            work/education/faithfulness.
                                        </p>
                                        <p class="mt-3"> &#9679; Exploiting available
                                            Agribusiness-related opportunities.

                                        </p>
                                        <p class="mt-3"> &#9679; Family Health.
                                        </p>
                                        <p class="mt-3"> &#9679; Culture-related
                                            issues.

                                        </p>
                                        <p class="mt-3"> &#9679;Domestic violence.
                                        </p>
                                        <p class="mt-3"> &#9679; and any other family
                                            pressing
                                            issues.
                                        </p>
                                        <p class="mt-3"> &#9679;Education.

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 bottom-ab-img mt-lg-5 mt-4">
                            <div class="whybox-wrap-grid mb-lg-5 mb-4">
                                <img src="assets/img/events/" alt="" class="radius-image img-fluid">
                                <div class="whybox-wrap-grid-inf mt-4">
                                    <div class="icon">
                                        <span class="iconify" data-icon="healthicons:justice"
                                            data-width="35" data-height="35"></span>
                                    </div>
                                    <div class="info">
                                        <h4><a href="#url"> Justice</a></h4>
                                    </div>
                                </div>
                                <p class="pt-3">This will mainly be focussed on:
                                </p>
                                <p class="mt-3"> &#9679; legal sensitization i.e.,
                                    sensitizing communities of their rights
                                    . </p>
                                <p class="mt-3"> &#9679; Policy awareness
                                    .</p>
                                <p class="mt-3"> &#9679; Legal procedure awareness
                                    . </p>
                                <p class="mt-3"> &#9679; Addressing pressing issues
                                    like
                                    land related issues and other related fields.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 bottom-ab-img mt-lg-5 mt-4">
                            <div class="whybox-wrap-grid mb-lg-5 mb-4">
                                <img src="assets/img/events/g" alt=""
                                    class="radius-image img-fluid">
                                <div class="whybox-wrap-grid-inf mt-4">
                                    <div class="icon">
                                        <span class="iconify"
                                            data-icon="maki:religious-christian" data-width="35"
                                            data-height="35"></span>
                                    </div>
                                    <div class="info">
                                        <h4><a href="#url"> Faith</a></h4>
                                    </div>
                                </div>
                                <p class="pt-3">This will focus on:
                                </p>
                                <p class="mt-3"> &#9679; The potential of Christian
                                    faith
                                    to transform societies

                                    . </p>
                                <p class="mt-3"> &#9679; Integrating faith at work
                                    .</p>
                                <p class="mt-3"> &#9679; Integrating faith into family
                                    life
                                    . </p>
                                <p class="mt-3"> &#9679; Intersecting cultural and
                                    Christian teaching.
                                </p>
                                <p class="mt-3"> &#9679; And other practical Christian
                                    applications for life.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--End Out reach Section -->

            <!-- ======= Out reach gallary ======= -->

            <!--/gallery-->


            <section class="section-bg  " data-aos="fade-up" date-aos-delay="200">
                <div class="container">

                    <div class="row pt-3 pb-3">
                        <div class=" text-center py-lg-3 pt-4 pb-4">

                            <h3 class="title-big mb-4 mx-0 mw-100">Take A Look At Our
                                Latest Projects</h3>

                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="thumbnail">
                                    <a href="/w3images/lights.jpg">
                                        <img src="assets/img/outreach/IMG-20211216-WA0010.jpg"
                                            class="img-fluid rounded" alt="" style="width:100%">
                                        <div class="caption">
                                            <p></p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="thumbnail">
                                    <a href="/w3images/nature.jpg">
                                        <img src="assets/img/outreach/IMG-20211216-WA0009.jpg"
                                            class="img-fluid rounded" alt="" style="width:100%">
                                        <div class="caption">
                                            <p></p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="thumbnail">
                                    <a href="/w3images/fjords.jpg">
                                        <img src="assets/img/outreach/IMG-20211216-WA0002.jpg"
                                            class="img-fluid rounded" alt="" style="width:100%">
                                        <div class="caption">
                                            <p></p>
                                            
                                           <a href="{{ url('outreachgallary') }}"
                                                class="btn btn-style mr-sm-2 mr-1 offset-8 .btngallary"
                                                style="background-color: #05488f;   color:#5bc0de; padding: 13px; width: 30%;  border-radius: 8px;">View
                                                more</a>
                                                
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
            <!--//gallery-->


            <!-- ======= Out reach donations ======= -->
            <section class="why-us pt-5 pb-5" data-aos="fade-up" date-aos-delay="200">
                <div class="container">

                    <div class="row">
                        <div class=" text-center py-lg-3 pt-4 pb-4">

                            <h3 class="title-big mb-4 mx-0 mw-100">Make a Donation</h3>
                            <p class="pr-lg-5">Private gifts play a vital role in
                                supporting the
                                people, programs and services at Center of Faith Family and
                                Justice.
                                Your
                                contributions allow us to meet new challenges and seek
                                solutions to help people live longer and healthier lives. Please
                                consider
                                making a contribution today. Your gift will support an important
                                resource
                                for our community, the state and the world.</p>
                            <div class="buttons mt-md-5 mt-4">
                                 <a href="" class="btn btn-style btn-warning  mr-1"
                                    style="padding: 13px; width: 12%;">Donate</a>

                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <!-- ======= End Out reach donations ======= -->

            <!-- End policy dialogue Section -->

        </main>
        @include('sys.footer.footer')

        <!---script for family collapsable button-->
        <script>
            var coll = document.getElementsByClassName("collapsible");
            var i;

            for (i = 0; i < coll.length; i++) {
                coll[i].addEventListener("click", function() {
                    this.classList.toggle("true");
                    var content = this.nextElementSibling;
                    if (content.style.display === "block") {
                        content.style.display = "none";
                    } else {
                        content.style.display = "block";
                    }
                });
            }
        </script>
        <!---script for family collapsable button-->
