<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Profile -CFFJ</title>
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
                    <li><a class="active" href="{{ url('about') }}">About Us</a></li>
                    <li><a href="{{ url('whatwedo') }}">What we do</a></li>
                    <li><a href="{{ url('policyrecommendations') }}">Policy Recommendations</a>
                    </li>


                    <li><a href="{{url('programs')}}">Programs</a></li>
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

        <!-- ======= Blog Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center pt-3">
                    <h2>Profile</h2>

                    <ol>
                        <li><a href="{{url ('/')}}">Home</a></li>
                        <li>Profile</li>
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



                            <h2 class="entry-title">Mr. Wangutusi Arshton</h2>

                            <h6 class="entry-title">ICT OFFICER</h6>


                            <div class="entry-content dexal">
                                <p>

                                    Is an experienced software developer with a passion for
                                    developing innovative programs that expedite the efficiency and
                                    effectiveness of organizational success. Well-versed in
                                    technology and writing code to create systems that are reliable
                                    and user-friendly. Skilled leader who has the proven ability to
                                    motivate, educate, and manage a team of professionals to build
                                    software programs and effectively track changes. Confident
                                    communicator, strategic thinker, and innovative creator to
                                    develop software that is customized to meet a company’s
                                    organizational needs, highlight their core competencies, and
                                    further their success.
                                </p>
                                <p>
                                    Well-versed in programming languages including HTML, JavaScript,
                                    PHP, CSS, BackBone and JQuery, among others. -Skilled at reading
                                    and writing code using viable inputs and outputs after accurate
                                    assessment of pre- and post-conditions. -Experienced at
                                    designing unit tests to measure the effectiveness of software
                                    programs, backend services, and user interfaces. -Confident
                                    problem-solving abilities to overcome glitches with creative
                                    solutions that are strategically designed to last long-term.
                                </p>
                                <p>
                                    Strong communication skills and the ability to listen carefully
                                    to user feedback to determine modifications for optimal
                                    user-function.
                                    Has worked as a Web applications developer at Babu Motors LTD, a
                                    Systems analyst at The East, Central and Southern Africa Health
                                    Community, as a Systems developer at Greater Wealth Capital and
                                    Bespoke Software Consultacy.



                                </p>


                                <a href="{{url ('about')}}"
                                    class="btn btn-danger btn-lg btndirect danX">Close</a>




                            </div>

                        </article><!-- End blog entry -->







                    </div>
                </div>
            </div>

        </section><!-- End Blog Section -->

    </main><!-- End #main -->
    @include('sys.footer.footer')