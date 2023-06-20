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
                            <li><a href="#">Consultancy & Advisory services</a></li>
                            <li><a href="{{ url('policydialogueandwebinars') }}">Policy dialogues
                                    and Webinars</a></li>
                            <li><a href="{{ url('outreach') }}">Training, Outreach and
                                    Advocacy</a></li>
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


            <!-- ======= Out reach Youtube section ======= -->


    <section class="why-us section-bg pt-5" data-aos="fade-up" date-aos-delay="200">
        <div class="container">

            <div class="row">
                <div class="col-lg-6 video-box">
                    <img src="assets/img/outreach/IMG-20211216-WA0002.jpg" class="img-fluid" alt="">
                    <a href="" class="venobox play-btn mb-4" data-vbtype="video"
                        data-autoplay="true"></a>
                </div>

                <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

                    <div class="">
                        
                        <h4 class="title"><a href="">CFFJ OutReach Videos</a></h4>
                        <p class="description">To view our out reach videos, click on the play button. Never get behind of the latest news, subscribe to our you tube channel to stay updated</p>

                    </div>

                    <div class="">
                       
                        <p class="description">Our main focus is to promote the development of a
                            society with strong faith, family, and just institutions. We aspire to
                            connect policymakers and citizens; and to build transformed, resilient,
                            and integrated communities.</p>
                    </div>

                </div>
            </div>

        </div>
         </section>
         
          <!-- ======= Out reach Youtube section ======= -->


             <section class="section-bg pt-5 pb-5" data-aos="fade-up" date-aos-delay="200">
                <div class="container">

                    <div class="row">
                        <div class=" text-center py-lg-3 pt-4 pb-4">

                            <h3 class="title-big mb-4 mx-0 mw-100">More on the CFFJ Out Reach
                                Projects</h3>

                        </div>
                        <div class="row shadow-lg pt-3 pb-3">
                            <div class="col-md-4">
                                <div class="thumbnail">
                                    <a href="">
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
                                    <a href="">
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
                                    <a href="">
                                        <img src="assets/img/outreach/IMG-20211216-WA0002.jpg"
                                            class="img-fluid rounded" alt="" style="width:100%">
                                        <div class="caption">
                                            <p></p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="thumbnail">
                                    <a href="">
                                        <img src="assets/img/outreach/IMG-20220103-WA0009.jpg"
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
                                        <img src="assets/img/outreach/bishop.jpg"
                                            class="img-fluid rounded" alt="" style="width:100%">
                                        <div class="caption">
                                            <p></p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="thumbnail">
                                    <a href="">
                                        <img src="assets/img/outreach/IMG-20220107-WA0001.jpg"
                                            class="img-fluid rounded" alt="" style="width:100%">
                                        <div class="caption">
                                            <p></p>
                                        </div>
                                    </a>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="thumbnail">
                                    <a href="">
                                        <img src="assets/img/outreach/s.jpg"
                                            class="img-fluid rounded" alt="" style="width:100%">
                                        <div class="caption">
                                            <p></p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="thumbnail">
                                    <a href="">
                                        <img src="assets/img/outreach/b.jpg"
                                            class="img-fluid rounded" alt="" style="width:100%">
                                        <div class="caption">
                                            <p></p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="thumbnail">
                                    <a href="">
                                        <img src="assets/img/outreach/c.jpg"
                                            class="img-fluid rounded" alt="" style="width:100%">
                                        <div class="caption">
                                            <p></p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="thumbnail">
                                    <a href="">
                                        <img src="assets/img/outreach/d.jpg"
                                            class="img-fluid rounded" alt="" style="width:100%">
                                        <div class="caption">
                                            <p></p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="thumbnail">
                                    <a href="">
                                        <img src="assets/img/outreach/e.jpg"
                                            class="img-fluid rounded" alt="" style="width:100%">
                                        <div class="caption">
                                            <p></p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="thumbnail">
                                    <a href="">
                                        <img src="assets/img/outreach/f.jpg"
                                            class="img-fluid rounded" alt="" style="width:100%">
                                        <div class="caption">
                                            <p></p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="thumbnail">
                                    <a href="">
                                        <img src="assets/img/outreach/g.jpg"
                                            class="img-fluid rounded" alt="" style="width:100%">
                                        <div class="caption">
                                            <p></p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="thumbnail">
                                    <a href="">
                                        <img src="assets/img/outreach/h.jpg"
                                            class="img-fluid rounded" alt="" style="width:100%">
                                        <div class="caption">
                                            <p></p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="thumbnail">
                                    <a href="">
                                        <img src="assets/img/outreach/i.jpg"
                                            class="img-fluid rounded" alt="" style="width:100%">
                                        <div class="caption">
                                            <p></p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="thumbnail">
                                    <a href="">
                                        <img src="assets/img/outreach/j.jpg"
                                            class="img-fluid rounded" alt="" style="width:100%">
                                        <div class="caption">
                                            <p></p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="thumbnail">
                                    <a href="">
                                        <img src="assets/img/outreach/k.jpg"
                                            class="img-fluid rounded" alt="" style="width:100%">
                                        <div class="caption">
                                            <p></p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="thumbnail">
                                    <a href="">
                                        <img src="assets/img/outreach/l.jpg"
                                            class="img-fluid rounded" alt="" style="width:100%">
                                        <div class="caption">
                                            <p></p>
                                        </div>
                                    </a>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="thumbnail">
                                    <a href="">
                                        <img src="assets/img/outreach/n.jpg"
                                            class="img-fluid rounded" alt="" style="width:100%">
                                        <div class="caption">
                                            <p></p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="thumbnail">
                                    <a href="">
                                        <img src="assets/img/outreach/o.jpg"
                                            class="img-fluid rounded" alt="" style="width:100%">
                                        <div class="caption">
                                            <p></p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="thumbnail">
                                    <a href="">
                                        <img src="assets/img/outreach/p.jpg"
                                            class="img-fluid rounded" alt="" style="width:100%">
                                        <div class="caption">
                                            <p></p>
                                        </div>
                                    </a>
                                </div>
                            </div>



                            <div class="col-md-4">
                                <div class="thumbnail">
                                    <a href="">
                                        <img src="assets/img/outreach/r.jpg"
                                            class="img-fluid rounded" alt="" style="width:100%">
                                        <div class="caption">
                                            <p></p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="thumbnail">
                                    <a href="">
                                        <img src="assets/img/outreach/a.jpg"
                                            class="img-fluid rounded" alt="" style="width:100%">
                                        <div class="caption">
                                            <p></p>
                                        </div>
                                    </a>
                                </div>
                            </div>



                        </div>
                    </div>

            </section>
            
            <section> 

                <div class="pt-5">
        <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="{{ url('outreach') }}"
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
            <!--//gallery-->



            <!-- ======= Out reach donations ======= -->
            <section class="why-us pt-5 pb-5 " data-aos="fade-up" date-aos-delay="200">
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

        <script>
video_count =1;
videoPlayer = document.getElementById("homevideo");

function run(){
        video_count++;
        if (video_count == 16) video_count = 1;
        var nextVideo = "video"+video_count+".mp4";
        videoPlayer.src = nextVideo;
        videoPlayer.play();
   };
   </script>
