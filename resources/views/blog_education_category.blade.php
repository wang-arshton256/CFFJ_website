<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Contact -CFFJ</title>
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


                    <li><a href="{{url('programs')}}">Programs</a></li>
                    <li><a href="{{ url('ourpartners') }}">Our Partners</a></li>


                    <li><a class="active" href="{{ url('blog') }}">Blog</a></li>
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


    <!-- End Header -->

    <main id="main">

        <!-- ======= Blog Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center pt-3">
                    <h2>Blog</h2>

                    <ol>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Blog</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Blog Section -->




        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row">


                    <div class="col-lg-3">

                        <div class="sidebar">

                            <h3 class="sidebar-title">Trending</h3>

                            <!-- End sidebar search formn-->

                            <h3 class="sidebar-title">.............</h3>
                            <div class="sidebar-item categories d-none">
                                <ul id="blogslist">
                                    <li><a href="{{ url('blog') }}">............ </a>
                                    </li>
                                    <li><a href="#">.............</a></li>
                                    <li><a href="#">............. </a></li>
                                    <li><a href="#">.............</a></li>
                                    <li><a
                                            href="{{ url('Grief_and_The_Politics_of_Ethnicity') }}">.............
                                        </a></li>
                                    <li><a href="#">.............</a></li>
                                </ul>
                            </div>

                            <!-- End sidebar categories-->



                            <h3 class="sidebar-title">Top Stories</h3>
                            <div class="       sidebar-item recent-posts-carousel ">
                                <div class="post-item clearfix">
                                    <img src="assets/img/blog/emyoga.png" alt="">



                                </div>
                                <div class="pt-3">
                                    <h4><a href="{{ url('emyoga') }}">Parish Development
                                            Model
                                            And The Politics Of Financial Handouts</a></h4>
                                    <time datetime="2020-01-01">March
                                        1, 2022</time>
                                </div>

                                <div class="post-item clearfix d-none">
                                    <img src="assets/img/blog/ugandas_oil.png" alt="">
                                    <h4><a href="{{ url('whyugandas_oil') }}">WHY UGANDA’S
                                            OIL
                                            FINAL
                                            INVESTMENT DECISION IS A BIG DEAL</a></h4>
                                    <time datetime="2020-01-01">JFeb
                                        17, 2022</time>
                                </div>

                                <div class="post-item clearfix d-none">
                                    <img src="assets/img/blog/hopeinaweb.jpg" alt="">
                                    <h4><a href="{{ url('hopeinaweb') }}">HOPE IN A WEB OF
                                            HARDSHIP</a></h4>
                                    <time datetime="2020-01-01">Feb
                                        15, 2022</time>
                                </div>

                                <div class="post-item clearfix d-none">
                                    <img src="assets/img/blog/covidex.png" alt="">
                                    <h4><a href="{{ url('silentmutiny') }}">The Curious Case
                                            Of
                                            COVIDEX</a>
                                    </h4>
                                    <time datetime="2020-01-01">Feb
                                        9, 2022</time>
                                </div>


                            </div>

                            <div class="list-group" background-color:1B8EC1;>
                                <a href="{{ url('researchandpublications') }}"
                                    class="list-group-item list-group-item-action active">
                                    Browse Publications
                                </a>
                                <a href="{{ url('family_stories') }}"
                                    class="list-group-item list-group-item-action">Family
                                    Stories</a>
                                <a href="{{ url('podcasts') }}"
                                    class="list-group-item list-group-item-action">Podcasts</a>
                                <a href="{{ url('opinionbank') }}"
                                    class="list-group-item list-group-item-action">Opinion
                                    Bank</a>

                            </div>


                            <!-- End sidebar recent posts-->




                        </div><!-- End sidebar -->

                    </div><!-- End blog sidebar -->



                    <div class="col-lg-6 entries">

                        <!--blog entry-->

                        <article class="entry">

                            <div class="entry-img  pt-5 px-5">
                                <img src="assets/img/blog/Unemploymentblogpicture.jpg" alt=""
                                    class="img-fluid" height="" width="800">
                            </div>

                            <p class="text-danger d-none"><i>Photo: courtesy of Africa-Uganda
                                    Travel
                                    Guide.com </i> </p>

                            <h2 class="entry-title">
                                <a href="{{ url('unemployement') }}">UNEMPLOYMENT: A
                                    NEW NORMAL IN UGANDA




                                </a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-person"></i>
                                        <a href="{{ url('unemployement') }}">By Sharon
                                            Ainembabazi



                                        </a>
                                    </li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-clock"></i>
                                        <a href="{{ url('unemployement') }}"><time
                                                datetime="2020-01-01">May 25, 2022</time></a>
                                    </li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-chat-dots"></i> <a
                                            href="{{ url('unemployement') }}">Views</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    In May 2022, Makerere University released an excited bunch
                                    of
                                    graduates who toiled through the Covid-19 lockdown patiently
                                    to
                                    be able to receive such honours. It is truly something to be
                                    celebrated. However, every single year, thousands of
                                    students
                                    graduate from Makerere University. Over 30 universities in
                                    Uganda release graduates every year. It is estimated that
                                    this
                                </p>



                                <div class="read-more">
                                    <a href="{{ url('unemployement') }}">Read
                                        More</a>
                                </div>
                            </div>

                        </article>
                        <!----end blog entry--->




                        <div class="blog-pagination">
                            <ul class="justify-content-center">
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                            </ul>
                        </div>

                    </div>

                    <!-- End blog entries list -->

                    <div class="col-lg-3">

                        <div class="sidebar">

                            <h3 class="sidebar-title">Search</h3>
                            <div class="sidebar-item search-form">
                                <form action="">
                                    <input type="text" id="myInput" onkeyup="mySearchFunction()"
                                        placeholder="Search">


                                </form>
                            </div>

                            <!-- End sidebar search formn-->

                            <h3 class="sidebar-title">Categories</h3>
                            <div class="sidebar-item categories">
                                <ul id="blogs">

                                    <li><a href="{{ url('education') }}">Education,
                                            COVID-19 <span>(1)</span></a>
                                    </li>

                                    <li><a href="{{ url('trade_africe_economics') }}">Trade,
                                            Africa, Economics <span>(4)</span></a>
                                    </li>
                                    <li><a href="{{ url('family_contraception_law') }}">Family,
                                            Contraception, Law <span>(8)</span></a>
                                    </li>
                                    <li><a
                                            href="{{ url('economy_family_development ') }}">Development<span>(1)</span></a>
                                    </li>
                                    <li><a href="{{ url('economy_family_development') }}">Climate,
                                            Environment, Economics
                                            <span>(3)</span></a></li>


                                    <li><a href="{{ url('blogs_business_category') }}">Business,
                                            Economics <span>(6)</span></a></li>

                                    <li><a href="{{ url('hunger_agriculture_economics') }}">Hunger,
                                            Agriculture,
                                            Economics<span>(3)</span></a></li>

                                    <li><a href="{{ url('religion') }}">Religion
                                            <span>(2)</span></a></li>
                                    <li><a href="{{ url('uganda') }}">Economics,Uganda,COVID-19
                                            <span>(2)</span></a></li>
                                    <li><a href="{{ url('law') }}">Law
                                            <span>(4)</span></a>
                                    </li>
                                    <li><a href="{{ url('innovation') }}">Innovation
                                            <span>(0)</span></a>

                                </ul>
                            </div>

                            <!-- End sidebar categories-->

                            <h3 class="sidebar-title">Recent Posts</h3>
                            <div class="sidebar-item recent-posts">
                                <div class="post-item clearfix">
                                    <img src="assets/img/blog/emyoga.png" alt="">
                                    <h4><a href="{{ url('emyoga') }}">Parish Development
                                            Model
                                            And The Politics Of Financial Handouts</a></h4>
                                    <time datetime="2020-01-01">March
                                        1, 2022</time>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="assets/img/blog/ugandas_oil.png" alt="">
                                    <h4><a href="{{ url('whyugandas_oil') }}">WHY UGANDA’S
                                            OIL
                                            FINAL
                                            INVESTMENT DECISION IS A BIG DEAL</a></h4>
                                    <time datetime="2020-01-01">JFeb
                                        17, 2022</time>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="assets/img/blog/hopeinaweb.jpg" alt="">
                                    <h4><a href="{{ url('hopeinaweb') }}">HOPE IN A WEB OF
                                            HARDSHIP</a></h4>
                                    <time datetime="2020-01-01">Feb
                                        15, 2022</time>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="assets/img/blog/covidex.png" alt="">
                                    <h4><a href="{{ url('silentmutiny') }}">The Curious Case
                                            Of
                                            COVIDEX</a>
                                    </h4>
                                    <time datetime="2020-01-01">Feb
                                        9, 2022</time>
                                </div>



                            </div>

                            <!-- End sidebar recent posts-->


                            <h3 class="sidebar-title">Tags</h3>
                            <div class="sidebar-item tags">
                                <ul>
                                    <li><a href="https://twitter.com/CFFJ_Ug?s=09">CFFJ_Ug</a>
                                    </li>
                                    <li><a href="{{ url('podcasts') }}">Podcasts</a></li>
                                    <li><a
                                            href="{{ url('researchandpublications') }}">Research</a>
                                    </li>
                                    <li><a href="{{ url('opinionbank') }}">Opinion Bank</a>
                                    </li>

                                </ul>
                            </div><!-- End sidebar tags-->

                        </div><!-- End sidebar -->

                    </div>
                    <!-- End blog sidebar -->

                    <div class="col-lg-3">

                        <div class="sidebar">

                            <h3 class="sidebar-title">Search</h3>
                            <div class="sidebar-item search-form">
                                <form action="">
                                    <input type="text" id="myInput" onkeyup="mySearchFunction()"
                                        placeholder="Search">


                                </form>
                            </div>

                            <!-- End sidebar search formn-->

                            <h3 class="sidebar-title">Categories</h3>
                            <div class="sidebar-item categories">
                                <ul id="blogslist">
                                    <li><a href="{{ url('blog') }}">General
                                            <span>(13)</span></a>
                                    </li>
                                    <li><a href="{{ url('innovation_business') }}">innovation,business
                                            <span>(3)</span></a></li>
                                    <li><a href="#">Travel <span>(0)</span></a></li>
                                    <li><a href="#">Health <span>(3)</span></a></li>
                                    <li><a
                                            href="{{ url('Grief_and_The_Politics_of_Ethnicity') }}">Politics
                                            <span>(1)</span></a></li>
                                    <li><a href="#">Educaion <span>(0)</span></a></li>
                                </ul>
                            </div>

                            <!-- End sidebar categories-->

                            <h3 class="sidebar-title">Recent Posts</h3>
                            <div class="sidebar-item recent-posts">
                                <div class="post-item clearfix">
                                    <img src="assets/img/blog/emyoga.png" alt="">
                                    <h4><a href="{{ url('emyoga') }}">Parish Development
                                            Model
                                            And The Politics Of Financial Handouts</a></h4>
                                    <time datetime="2020-01-01">March
                                        1, 2022</time>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="assets/img/blog/ugandas_oil.png" alt="">
                                    <h4><a href="{{ url('whyugandas_oil') }}">WHY UGANDA’S
                                            OIL
                                            FINAL
                                            INVESTMENT DECISION IS A BIG DEAL</a></h4>
                                    <time datetime="2020-01-01">JFeb
                                        17, 2022</time>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="assets/img/blog/hopeinaweb.jpg" alt="">
                                    <h4><a href="{{ url('hopeinaweb') }}">HOPE IN A WEB OF
                                            HARDSHIP</a></h4>
                                    <time datetime="2020-01-01">Feb
                                        15, 2022</time>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="assets/img/blog/covidex.png" alt="">
                                    <h4><a href="{{ url('silentmutiny') }}">The Curious Case
                                            Of
                                            COVIDEX</a>
                                    </h4>
                                    <time datetime="2020-01-01">Feb
                                        9, 2022</time>
                                </div>



                            </div>

                            <!-- End sidebar recent posts-->


                            <h3 class="sidebar-title">Tags</h3>
                            <div class="sidebar-item tags">
                                <ul>
                                    <li><a href="https://twitter.com/CFFJ_Ug?s=09">CFFJ_Ug</a>
                                    </li>
                                    <li><a href="{{ url('podcasts') }}">Podcasts</a></li>
                                    <li><a
                                            href="{{ url('researchandpublications') }}">Research</a>
                                    </li>
                                    <li><a href="{{ url('opinionbank') }}">Opinion Bank</a>
                                    </li>

                                </ul>
                            </div><!-- End sidebar tags-->

                        </div><!-- End sidebar -->

                    </div><!-- End blog sidebar -->

                </div>

            </div>
        </section><!-- End Blog Section -->

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
            ul = document.getElementById("blogs");
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
