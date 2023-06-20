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

        <!-- ======= About Us Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center pt-3">
                    <h2>Research and Publications</h2>
                    <ol>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Research and Publications</li>
                    </ol>
                </div>

            </div>
        </section>

        <!-- End About Us Section -->


        <section id="blog" class="blog shadow-lg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">

                    <h4>A key part of our work is to engage in research related to our areas of
                        interest.<br>Here are our publications;-
                    </h4>

                </div>



                <div class="section-title">

                    <h2 class="">Reports</h2>
                </div>

                <div class="row ">
                    <div class="col-lg-9">
                        <div class="row">
                          
                            
                            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                                <div class="member">
                                    <div class="member-img">
                                        <img src="assets/img/publications/male and female union.png"
                                            class="img-fluid" alt="">


                                    </div>
                                    <div class="member-info text-center pt-3">

                                        <h4>Author: Rev. Lawrence E Adams (PhD)</h4>
                                        <a
                                            href="assets/files/pdfpublications/CA-MaleandFemaleUnion.pdf">click
                                            here to read/download</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                                <div class="member">
                                    <div class="member-img">
                                        <img src="assets/img/publications/religious composition.png"
                                            class="img-fluid" alt="">

                                    </div>
                                    <div class="member-info text-center pt-3">

                                        <h4>Author: Ms. Cynthia Mbabazi</h4>

                                        <a
                                            href="assets/files/pdfpublications/ReligiousComposition-FactSheet.pdf">click
                                            here to dread/download</a>
                                    </div>
                                </div>
                            </div>
                            
                              <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                                <div class="member">
                                    <div class="member-img">
                                        <img src="assets/img/publications/marriangeanddivorce.png"
                                            class="img-fluid" alt="">

                                    </div>
                                    <div class="member-info text-center pt-3">

                                        <h4>Author: Mr. Martin Juuko Kirume</h4>
                                        <a
                                            href="assets/files/pdfpublications/Marriage & Div Bill paper.pdf">click
                                            here to read/download</a>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                                <div class="member">
                                    <div class="member-img">
                                        <img src="assets/img/publications/effectsofreligion.png"
                                            class="img-fluid" alt="">

                                    </div>
                                    <div class="member-info text-center pt-3">

                                        <h4>Author: Mrs. CADREEN BARUNGI KABAHIZI</h4>
                                        <a
                                            href="assets/files/pdfpublications/Religion-Socioeconomy brief.pdf">click
                                            here to read/download</a>
                                    </div>
                                </div>
                            </div>
                            
                            <hr class="" WIDTH="25%" SIZE="20"
                                style="background-color:#99CD44">

                            <div class="section-title pt-5">

                                <h2 class="offset-4 ">Policy Brief's</h2>

                            </div>
                            
                            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                                <div class="member">
                                    <div class="member-img">
                                        <img src="assets/img/publications/ethics_state.png"
                                            class="img-fluid" alt="">

                                    </div>
                                    <div class="member-info text-center pt-3">

                                        <h4>Author: CYNTHIA MBABAZI,
ALEX THOMAS IJJO (PhD)</h4>
                                        <a
                                            href="assets/files/pdfpublications/Ethics Policy Brief.pdf">click
                                            here to read/download</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                    <div class="col-lg-3">

                        <div class="sidebar research-sidebar">

                            <h3 class="sidebar-title">Search Publications</h3>
                            <div class="sidebar-item search-form">
                                <form action="">
                                    <input type="text" id="myInput" onkeyup="mySearchFunction()"
                                        placeholder="Search">


                                </form>
                            </div><!-- End sidebar search formn-->

                            <h3 class="sidebar-title">Categories</h3>
                            <div class="sidebar-item categories">


                                <ul id="pulicationslist">
                                    </li>
                                    <li><a href="{{ url('researchandpublications') }}">General
                                            <span>(25)</span></a>
                                    </li>

                                    <li><a href="{{ url('trade_africe_economics') }}">Trade,
                                            Africa, Economics <span>(4)</span></a>
                                    </li>
                                    <li><a href="{{ url('family_contraception_law') }}">Family,
                                            Contraception, Law <span>(8)</span></a>
                                    </li>
                                    <li><a href="{{ url('climate_environment_economics') }}">Climate,
                                            Environment, Economics
                                            <span>(3)</span></a></li>


                                    <li><a href="{{ url('business_economics') }}">Business,
                                            Economics <span>(6)</span></a></li>
                                            

                                    <li><a href="{{ url('hunger_agriculture_economics') }}">Hunger,
                                            Agriculture,
                                            Economics<span>(3)</span></a></li>
                                            
                                            <li><a href="{{ url('government') }}">Government<span>(1)</span></a></li>


                                    <li><a href="{{ url('law') }}">Law
                                            <span>(4)</span></a>
                                    </li>
                                    <li><a href="{{ url('innovation') }}">Innovation
                                            <span>(1)</span></a></li>
                                </ul>
                            </div>

                            <!-- End sidebar categories-->


                            <h3 class="sidebar-title">Related Topics</h3>
                            <div class="sidebar-item tags">
                                <ul>
                                    <li><a href=""></a>
                                    </li>
                                    <li><a href=""></a></li>
                                    <li><a href=""></a>
                                    </li>
                                    <li><a href=""></a>
                                    </li>

                                </ul>
                            </div><!-- End sidebar tags-->

                        </div><!-- End sidebar -->

                    </div><!-- End blog sidebar -->
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
                        <li class="page-item disabled">
                            <a class="page-link" href="about.html" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link"
                                href="{{ url('researchandpublications') }}">1</a></li>
                        <li class="page-item"><a class="page-link"
                                href="{{ url('researchandpublications_2') }}">2</a></li>

                        <li class="page-item">
                            <a class="page-link"
                                href="{{ url('researchandpublications_2') }}">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </section>
        <!--End Next page section -->



    </main><!-- End #main -->
    @include('sys.footer.footer')
    <script>
        function mySearchFunction() {
            // Declare variables
            var input, filter, ul, li, item, i, txtValue;
            // User Input
            input = document.getElementById("myInput");
            // Filter, makes search not case sensitive
            filter = input.value.toUpperCase();
            // Grabs the parent element by id
            ul = document.getElementById("pulicationslist");
            // Individual item on list
            li = ul.getElementsByTagName("li");

            // Treats lists items like an array, where each item can be accessed through      it's index
            for (i = 0; i < li.length; i++) {
                item = li[i];
                // Iterate over each list item to see if the value of the input, ignoring         case, matches the inner text or inner html of the item.
                txtValue = item.textContent || item.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    // Displays list items that are a match, and nothing if no match
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        }
    </script>
