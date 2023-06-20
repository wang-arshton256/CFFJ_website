<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Business and Innovation -CFFJ</title>
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
                    <li><a  href="{{ url('about') }}">About Us</a></li>
                    <li><a href="{{ url('whatwedo') }}">What We Do</a></li>
                    <li><a href="{{url ('policyrecommendations')}}">Policy Recommendations</a></li>


                    <li><a href="{{url('programs')}}">Programs</a></li>
                    <li><a href="{{url ('ourpartners')}}">Our Partners</a></li>


                    <li><a href="{{url ('blog')}}">Blog</a></li>
                    <li class="dropdown"><a href="#"><span>Resources</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li class="dropdown"><a href="#"><span>Research and
                                        Publications</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="{{url ('researchandpublications')}}">Research and
                                            Publications</a></li>

                                </ul>
                            </li>
                             <li><a class="active" href="{{ url('businessandinnovations') }}"">Business & innovation</a></li>
                            <li><a href="#">Consultancy & Advisory services</a></li>
                            <li><a href="{{url ('policydialogueandwebinars')}}">Policy dialogues and Webinars</a></li>
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

@if (Session::has('poll_submited'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('poll_submited') }}
    </div>
@endif


@if (Session::has('subscriber_details_submitted'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('subscriber_details_submitted') }}
    </div>
@endif


    </header>
    
    <!-- End Header -->

    <main id="main">
        
         <!-- ======= Blog Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center pt-3">
                    <h2>Business and innovation</h2>

                    <ol>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Business and innovation</li>
                    </ol>
                </div>

            </div>
        </section>

<!-- ======= Bread crumbs ======= -->
        <section class="services pt-3">
            <div class="container">
                <div class="section-title">

                    <h2>Business and innovation</h2>
                    <p>  The business and innovative ideas you have been waiting for, its going to be amaizing. Stay tuned!</p>

                </div>

            </div>
        </section>
         <!-- ======= Bread crumbs ======= -->




         <!--- Business and innonation Section -->

        <!-- ======= Business and innonation section ======= -->

 

        <!-- Business and innonation Section -->

        <!-- End Business and innonation Section -->

    </main>
   @include('sys.footer.footer')

    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#checkBtn').click(function() {
                checked = $("input[type=checkbox]:checked").length;
                checked = $("input[type=checkbox3]:checked").length;
                checked = $("input[type=checkbox4]:checked").length;
                checked = $("input[type=checkbox5a]:checked").length;
                checked = $("input[type=checkbox5b]:checked").length;
                checked = $("input[type=checkbox5c]:checked").length;
                checked = $("input[type=checkbox5d]:checked").length;
                checked = $("input[type=checkbox7]:checked").length;


                if (!checked) {
                    alert("You must choose at least one option for each checkbox.");
                    return false;
                }

            });
        });
    </script>


