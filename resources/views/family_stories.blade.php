<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Family-Stories -CFFJ</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap"
        rel="stylesheet">

    <link href="//fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600&display=swap"
        rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


    <link href="assets/family-stories-fonts" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/stories-style-starter.css">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- header -->
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
                    <h2>Family Stories</h2>

                    <ol>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Family Stories</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Blog Section -->

        <!-- //header -->
        <!-- /homeblock1-->
        <section class="w3l-homeblock1 py-sm-5 py-4 d-none">
            <div class="container py-md-4">
                <div class="grids-area-hny main-cont-wthree-fea row">
                    <div class="col-lg-3 col-6 grids-feature">
                        <a href="beauty.html">
                            <div class="area-box">
                                <span class="fa fa-bath"></span>
                                <h4 class="title-head">Beauty</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-6 grids-feature">
                        <a href="fashion.html">
                            <div class="area-box">
                                <span class="fa fa-female"></span>
                                <h4 class="title-head">Fashion and style</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-6 grids-feature mt-lg-0 mt-md-4 mt-3">
                        <a href="#food">
                            <div class="area-box">
                                <span class="fa fa-cutlery"></span>
                                <h4 class="title-head">Food and wellness</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-6 grids-feature mt-lg-0 mt-md-4 mt-3">
                        <a href="#lifsetyle">
                            <div class="area-box">
                                <span class="fa fa-pie-chart"></span>
                                <h4 class="title-head">Lifestyle</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- //homeblock1-->

        <section class="w3l-testimonials d-none" id="testimonials">
            <!-- main-slider -->
            <div class="testimonials pt-2 pb-5">
                <div class="container pb-lg-5">
                    <div class="owl-testimonial owl-carousel owl-theme mb-md-0 mb-sm-5 mb-4">
                        <div class="item">
                            <div class="row slider-info">
                                <div class="col-lg-8 message-info align-self">
                                    <span class="label-blue mb-sm-4 mb-3">Beauty</span>
                                    <h3 class="title-big mb-4">Create an Art that shows the beauty
                                        in
                                        everyone’s ideas of flaws.
                                    </h3>
                                    <p class="message">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Ea
                                        sit id accusantium officia quod quasi necessitatibus
                                        perspiciatis Harum error
                                        provident quibusdam tenetur. Ut fermentum leo quis sapienet
                                        faucibus, at
                                        scelerisque sem feugiat. Nulla in eros purus.</p>
                                </div>
                                <div class="col-lg-4 col-md-8 img-circle mt-lg-0 mt-4">
                                    <img src="assets/images/beauty.jpg"
                                        class="img-fluid radius-image-full" alt="client image">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row slider-info">
                                <div class="col-lg-8 message-info align-self">
                                    <span class="label-blue mb-sm-4 mb-3">Fashion and Style</span>
                                    <h3 class="title-big mb-4">Addicted to Fashion is the Armor to
                                        survive the reality of
                                        Everyday Life.
                                    </h3>
                                    <p class="message">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Ea
                                        sit id accusantium officia quod quasi necessitatibus
                                        perspiciatis Harum error
                                        provident quibusdam tenetur. Ut fermentum leo quis sapienet
                                        faucibus, at
                                        scelerisque sem feugiat. Nulla in eros purus.</p>
                                </div>
                                <div class="col-lg-4 col-md-8 img-circle mt-lg-0 mt-4">
                                    <img src="assets/images/fashion.jpg"
                                        class="img-fluid radius-image-full" alt="client image">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row slider-info">
                                <div class="col-lg-8 message-info align-self">
                                    <span class="label-blue mb-sm-4 mb-3">Food and Wellness</span>
                                    <h3 class="title-big mb-4">Create healthy habits, not
                                        restrictions.
                                        Wellness is a taste of
                                        being.
                                    </h3>
                                    <p class="message">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Ea
                                        sit id accusantium officia quod quasi necessitatibus
                                        perspiciatis Harum error
                                        provident quibusdam tenetur. Ut fermentum leo quis sapienet
                                        faucibus, at
                                        scelerisque sem feugiat. Nulla in eros purus.</p>
                                </div>
                                <div class="col-lg-4 col-md-8 img-circle mt-lg-0 mt-4">
                                    <img src="assets/images/food.jpg"
                                        class="img-fluid radius-image-full" alt="client image">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row slider-info">
                                <div class="col-lg-8 message-info align-self">
                                    <span class="label-blue mb-sm-4 mb-3">Lifestyle</span>
                                    <h3 class="title-big mb-4">To succeed in Life, you need 3 things
                                        : a
                                        wishbone, a backbone, a
                                        funny bone.
                                    </h3>
                                    <p class="message">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Ea
                                        sit id accusantium officia quod quasi necessitatibus
                                        perspiciatis Harum error
                                        provident quibusdam tenetur. Ut fermentum leo quis sapienet
                                        faucibus, at
                                        scelerisque sem feugiat. Nulla in eros purus.</p>
                                </div>
                                <div class="col-lg-4 col-md-8 img-circle mt-lg-0 mt-4">
                                    <img src="assets/images/lifestyle.jpg"
                                        class="img-fluid radius-image-full" alt="client image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /main-slider -->
        </section>

        <!-- ======= Bread crumbs ======= -->
        <section class="services pt-3">
            <div class="container">
                <div class="section-title">

                    <h2>Family Stories</h2>
                    <p> The memories we make with our family is everything. Join the CFFJ
                        community,<br>
                        share
                        your ideas and stories, and inspire the world. </p>

                </div>

            </div>
        </section>
        <!-- ======= Bread crumbs ======= -->

        <div class="w3l-homeblock2 py-5">
            <div class="container py-lg-5 py-md-4">
                <!-- block -->
                <div class="row">
                    <div class="col-lg-8">
                        <h3 class="section-title-left mb-4"> Editor's Pick </h3>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 item">
                                <div class="card">
                                    <div class="card-header p-0 position-relative">
                                        <a href="#blog-single.html">
                                            <img class="card-img-bottom d-block radius-image-full"
                                                src="assets/images/jonah (2).jpg"
                                                alt="Card image cap">
                                        </a>
                                    </div>
                                    <div class="card-body blog-details">
                                        <span class="label-blue">ONE MAN’S STORY</span>
                                        <a href="{{ url('one_mans_story') }}"
                                            class="blog-desc">Health and
                                            wholeness
                                        </a>
                                        <p>My name is Jonah. I am 48 years and I live with my
                                            sister,
                                            Juliet in the hills of</p>
                                        <div class="author align-items-center mt-3 mb-1">
                                            <img src="assets/images/a1.jpg" alt=""
                                                class="img-fluid rounded-circle" />
                                            <ul class="blog-meta">
                                                <li>
                                                    <a href="author.html">By Audrey Barungi</a> </a>
                                                </li>
                                                <li class="meta-item blog-lesson">
                                                    <span class="meta-value"> May 16, 2022
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mt-md-0 mt-sm-5 mt-4">
                                <div class="card">
                                    <div class="card-header p-0 position-relative">
                                        <a href="#blog-single.html">
                                            <img class="card-img-bottom d-block radius-image-full"
                                                src="assets/images/agony.jpg" alt="Card image cap">
                                        </a>
                                    </div>
                                    <div class="card-body blog-details">
                                        <span class="label-blue">Agony</span>
                                        <a href="{{ url('agony') }}" class="blog-desc">
                                            Domestic Violence
                                        </a>
                                        <p>My name is I (put real name).  I am 42years and I live in Bushenyi district, Western Uganda. When I was a young girl, I lived with my mother, father and</p>
                                        <div class="author align-items-center mt-3 mb-1">
                                            <img src="assets/images/a2.jpg" alt=""
                                                class="img-fluid rounded-circle" />
                                            <ul class="blog-meta">
                                                <li>
                                                    <a href="author.html">By Audrey Barungi</a> </a>
                                                </li>
                                                <li class="meta-item blog-lesson">
                                                    <span class="meta-value"> May 17, 2022
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 left-right bg-clr-white p-3">
                            <h3 class="section-title-left align-self pl-2 mb-sm-0 mb-3">Research
                                and
                                Public Policy</h3>
                            <a class="btn btn-style btn-primary"
                                href="{{ url('researchandpublications') }}">Learn more</a>
                        </div>
                    </div>
                    <div class="col-lg-4 trending mt-lg-0 mt-5">
                        <div class="topics">
                            <h3 class="section-title-left mb-4"> Topics</h3>
                            <a href="beauty.html" class="topics-list">
                                <div class="list1">
                                    <span class="fa fa-heartbeat"></span>
                                    <h4>Health and wholeness</h4>
                                </div>
                            </a>
                            <a href="fashion.html" class="topics-list mt-3">
                                <div class="list1">
                                    <span class="fa fa-university"></span>

                                    <h4>Education</h4>
                                </div>
                            </a>
                            <a href="#food" class="topics-list mt-3">
                                <div class="list1">
                                    <span class="fa fa-balance-scale"></span>
                                    <h4>Justice</h4>
                                </div>
                            </a>
                            <a href="#lifestyle" class="topics-list mt-3">
                                <div class="list1">
                                    <span class="fa fa-child"></span>
                                    <h4>Family Well-being</h4>
                                </div>
                            </a>
                        </div>
                        <div class="sponsers mt-5">
                            <h3 class="section-title-left mb-4"> Our Blogs</h3>
                            <a href="#ad-banner"><img src="assets/img/blog/ourblogs.png" alt=""
                                    class="img-fluid radius-image-full" /></a>
                            <a href="{{ url('blog') }}"
                                class="text-center d-block text-uppercase">Share your
                                views
                                with us </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w3l-homeblock3 py-5">
            <div class="container py-lg-5 py-md-4">
                <h3 class="section-title-left mb-4"> Top Stories of this month </h3>
                <div class="row top-pics">
                    <div class="col-lg-4 col-md-6">
                        <div class="top-pic1">
                            <div class="card-body blog-details">
                                <a href="{{ url('hope_in_a_web') }}" class="blog-desc">HOPE
                                    IN A WEB OF
                                    HARDSHIP


                                </a>
                                <div class="author align-items-center">
                                    <img src="assets/images/a1.jpg" alt=""
                                        class="img-fluid rounded-circle" />
                                    <ul class="blog-meta">
                                        <li>
                                            <a href="{{ url('hope_in_a_web') }}">By Paul Lincoln Kalema</a> </a>
                                        </li>
                                        <li class="meta-item blog-lesson">
                                            <span class="meta-value"> May 16, 2022 </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                        <div class="top-pic2">
                            <div class="card-body blog-details">
                                <a href="{{ url('Gender_Based_Violence') }}" class="blog-desc">Five Girls
                                    Orphaned
                                    as a result of Gender-Based Violence
                                </a>
                                <div class="author align-items-center">
                                    <img src="assets/images/a2.jpg" alt=""
                                        class="img-fluid rounded-circle" />
                                    <ul class="blog-meta">
                                        <li>
                                            <a href="{{ url('Gender_Based_Violence') }}">By Audrey Barungi</a> </a>
                                        </li>
                                        <li class="meta-item blog-lesson">
                                            <span class="meta-value"> May 17, 2022 </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                        <div class="top-pic3">
                            <div class="card-body blog-details">
                                <a href="#blog-single.html" class="blog-desc"> Regret
                                </a>
                                <div class="author align-items-center">
                                    <img src="assets/images/a3.jpg" alt=""
                                        class="img-fluid rounded-circle" />
                                    <ul class="blog-meta">
                                        <li>
                                            <a href="author.html">By Audrey Barungi</a> </a>
                                        </li>
                                        <li class="meta-item blog-lesson">
                                            <span class="meta-value"> May 17, 2022 </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w3l-homeblock2 py-5 d-none">
            <div class="container py-lg-5 py-md-4">
                <!-- block -->
                <div class="left-right">
                    <h3 class="section-title-left mb-sm-4 mb-2"> Fashion and style</h3>
                    <a href="fashiom.html" class="more btn btn-small mb-sm-0 mb-4">View more</a>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 item">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <a href="#blog-single.html">
                                    <img class="card-img-bottom d-block radius-image-full"
                                        src="assets/images/fashion1.jpg" alt="Card image cap">
                                </a>
                            </div>
                            <div class="card-body blog-details">
                                <a href="#blog-single.html" class="blog-desc">An easy Guide to
                                    buying Denim & My favourite styles
                                </a>
                                <div class="author align-items-center">
                                    <img src="assets/images/a1.jpg" alt=""
                                        class="img-fluid rounded-circle" />
                                    <ul class="blog-meta">
                                        <li>
                                            <a href="author.html">Isabella ava</a> </a>
                                        </li>
                                        <li class="meta-item blog-lesson">
                                            <span class="meta-value"> July 13, 2020 </span>.
                                            <span class="meta-value ml-2"><span
                                                    class="fa fa-clock-o"></span> 1 min</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <a href="#blog-single.html">
                                    <img class="card-img-bottom d-block radius-image-full"
                                        src="assets/images/fashion2.jpg" alt="Card image cap">
                                </a>
                            </div>
                            <div class="card-body blog-details">
                                <a href="#blog-single.html" class="blog-desc">The Satin Skirt
                                    &
                                    How to Wear it all year round fashion
                                </a>
                                <div class="author align-items-center">
                                    <img src="assets/images/a2.jpg" alt=""
                                        class="img-fluid rounded-circle" />
                                    <ul class="blog-meta">
                                        <li>
                                            <a href="author.html">Charlotte mia</a> </a>
                                        </li>
                                        <li class="meta-item blog-lesson">
                                            <span class="meta-value"> July 13, 2020 </span>.
                                            <span class="meta-value ml-2"><span
                                                    class="fa fa-clock-o"></span> 1 min</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <a href="#blog-single.html">
                                    <img class="card-img-bottom d-block radius-image-full"
                                        src="assets/images/fashion3.jpg" alt="Card image cap">
                                </a>
                            </div>
                            <div class="card-body blog-details">
                                <a href="#blog-single.html" class="blog-desc">What I’ll be
                                    Wearing
                                    this Party Season & the Festive edit
                                </a>
                                <div class="author align-items-center">
                                    <img src="assets/images/a3.jpg" alt=""
                                        class="img-fluid rounded-circle" />
                                    <ul class="blog-meta">
                                        <li>
                                            <a href="author.html">Elizabeth</a> </a>
                                        </li>
                                        <li class="meta-item blog-lesson">
                                            <span class="meta-value"> July 13, 2020 </span>.
                                            <span class="meta-value ml-2"><span
                                                    class="fa fa-clock-o"></span> 1 min</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w3l-homeblock2 w3l-homeblock5 py-5 d-none">
            <div class="container py-lg-5 py-md-4">
                <!-- block -->
                <div class="left-right">
                    <h3 class="section-title-left mb-sm-4 mb-2"> Beauty</h3>
                    <a href="beauty.html" class="more btn btn-small mb-sm-0 mb-4">View more</a>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="bg-clr-white hover-box">
                            <div class="row">
                                <div class="col-sm-5 position-relative">
                                    <a href="#blog-single.html" class="image-mobile">
                                        <img class="card-img-bottom d-block radius-image-full"
                                            src="assets/images/beauty1.jpg" alt="Card image cap">
                                    </a>
                                </div>
                                <div class="col-sm-7 card-body blog-details align-self">
                                    <a href="#blog-single.html" class="blog-desc">Natural Spa
                                        -
                                        Where you feel unique and special
                                    </a>
                                    <div class="author align-items-center">
                                        <img src="assets/images/a1.jpg" alt=""
                                            class="img-fluid rounded-circle" />
                                        <ul class="blog-meta">
                                            <li>
                                                <a href="author.html">Isabella ava</a> </a>
                                            </li>
                                            <li class="meta-item blog-lesson">
                                                <span class="meta-value"> July 13, 2020
                                                </span>.
                                                <span class="meta-value ml-2"><span
                                                        class="fa fa-clock-o"></span> 1 min</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-lg-0 mt-4">
                        <div class="bg-clr-white hover-box">
                            <div class="row">
                                <div class="col-sm-5 position-relative">
                                    <a href="#blog-single.html" class="image-mobile">
                                        <img class="card-img-bottom d-block radius-image-full"
                                            src="assets/images/beauty2.jpg" alt="Card image cap">
                                    </a>
                                </div>
                                <div class="col-sm-7 card-body blog-details align-self">
                                    <a href="#blog-single.html" class="blog-desc">How to get
                                        Beautiful coloring Highlights this weak
                                    </a>
                                    <div class="author align-items-center">
                                        <img src="assets/images/a2.jpg" alt=""
                                            class="img-fluid rounded-circle" />
                                        <ul class="blog-meta">
                                            <li>
                                                <a href="author.html">Charlotte mia</a> </a>
                                            </li>
                                            <li class="meta-item blog-lesson">
                                                <span class="meta-value"> July 13, 2020
                                                </span>.
                                                <span class="meta-value ml-2"><span
                                                        class="fa fa-clock-o"></span> 1 min</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4">
                        <div class="bg-clr-white hover-box">
                            <div class="row">
                                <div class="col-sm-5 position-relative">
                                    <a href="#blog-single.html" class="image-mobile">
                                        <img class="card-img-bottom d-block radius-image-full"
                                            src="assets/images/beauty3.jpg" alt="Card image cap">
                                    </a>
                                </div>
                                <div class="col-sm-7 card-body blog-details align-self">
                                    <a href="#blog-single.html" class="blog-desc">New Hair
                                        Styles
                                        can look fabulous and shiny
                                    </a>
                                    <div class="author align-items-center">
                                        <img src="assets/images/a3.jpg" alt=""
                                            class="img-fluid rounded-circle" />
                                        <ul class="blog-meta">
                                            <li>
                                                <a href="author.html">Elizabeth</a> </a>
                                            </li>
                                            <li class="meta-item blog-lesson">
                                                <span class="meta-value"> July 13, 2020
                                                </span>.
                                                <span class="meta-value ml-2"><span
                                                        class="fa fa-clock-o"></span> 1 min</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4">
                        <div class="bg-clr-white hover-box">
                            <div class="row">
                                <div class="col-sm-5 position-relative">
                                    <a href="#blog-single.html" class="image-mobile">
                                        <img class="card-img-bottom d-block radius-image-full"
                                            src="assets/images/beauty4.jpg" alt="Card image cap">
                                    </a>
                                </div>
                                <div class="col-sm-7 card-body blog-details align-self">
                                    <a href="#blog-single.html" class="blog-desc">How our
                                        dreams
                                        should shine and spray beauty to us.</a>
                                    <div class="author align-items-center">
                                        <img src="assets/images/a1.jpg" alt=""
                                            class="img-fluid rounded-circle" />
                                        <ul class="blog-meta">
                                            <li>
                                                <a href="author.html">Isabella ava</a> </a>
                                            </li>
                                            <li class="meta-item blog-lesson">
                                                <span class="meta-value"> July 13, 2020
                                                </span>.
                                                <span class="meta-value ml-2"><span
                                                        class="fa fa-clock-o"></span> 1 min</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w3l-homeblock2 w3l-homeblock6 py-5">
            <div class="container-fluid px-sm-5 py-lg-5 py-md-4">
                <!-- block -->
                <h3 class="section-title-left mb-4"> Trending Now</h3>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="bg-clr-white hover-box">
                            <div class="row">
                                <div class="col-sm-6 position-relative">
                                    <a href="#blog-single.html">
                                        <img class="card-img-bottom d-block radius-image-full pt-5 mt-4 pl-4"
                                            src="assets/images/oil&gas.jpg" alt="Card image cap">
                                    </a>
                                    <p class="pt-2 pl-5">Photo: courtesy of Parliament of
                                        Uganda
                                    </p>
                                </div>
                                <div class="col-sm-6 card-body blog-details align-self">
                                    <span class="label-blue">Oil and Gas</span>
                                    <a href="https://www.parliament.go.ug/news/5935/parliament-committed-fostering-oil-production"
                                        class="blog-desc">Parliament
                                        committed to fostering oil production
                                        <p>The Deputy Speaker of Parliament, Thomas Tayebwa, has
                                            promised unwavering support from the legislative arm of
                                            government towards the production of oil. Tayebwa made
                                            these
                                            remarks at the belated Women’s Day celebrations hosted
                                            by
                                        </p>
                                        <div class="author align-items-center ">
                                            <img src="assets/images/cadreen_lifestory.jpg" alt=""
                                                class="img-fluid rounded-circle" />
                                            <ul class="blog-meta">
                                                <li>
                                                    <a href="author.html">Cadreen Kabahizi</a>
                                    </a>
                                    </li>
                                    <li class="meta-item blog-lesson">
                                        <span class="meta-value"> May 22, 2022 </span>
                                    </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-4">
                    <div class="bg-clr-white hover-box">
                        <div class="row">
                            <div class="col-sm-6 position-relative">
                                <a href="#blog-single.html">
                                    <img class="card-img-bottom d-block radius-image-full pt-5 mt-4 pl-4"
                                        src="assets/images/coffeeagrement.jpg" alt="Card image cap">
                                    <p class="pt-2 pl-5">Photo: courtesy of Parliament of
                                        Uganda
                                    </p>
                                </a>
                            </div>
                            <div class="col-sm-6 card-body blog-details align-self">
                                <span class="label-blue">Agriculture</span>
                                <a href="https://www.parliament.go.ug/news/5929/legislators-call-termination-coffee-agreement"
                                    class="blog-desc">Legislators call for
                                    termination of coffee agreement</a>
                                <p>Parliament unanimously called for the termination of the
                                    agreement
                                    between Uganda Vinci Coffee Company Limited (UVCCL) and the
                                    Government, which sought to grant the company monopoly over the
                                    coffee sector. The report of the Committee on Trade,</p>
                                <div class="author align-items-center mt-4">
                                    <img src="assets/images/cynthia_lifestory.jpg" alt=""
                                        class="img-fluid rounded-circle" />
                                    <ul class="blog-meta">
                                        <li>
                                            <a href="author.html">Cynthia Mbabazi</a> </a>
                                        </li>
                                        <li class="meta-item blog-lesson">
                                            <span class="meta-value"> May 19, 2022 </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="w3l-subscribe py-5 d-none">
            <div class="container py-lg-5 py-md-4">
                <div class="w3l-subscribe-content text-center bg-clr-white py-md-5 py-2">
                    <div class="py-5">
                        <h3 class="section-title-left mb-2">Subscribe to our newsletter!</h3>
                        <p class="mb-md-5 mb-4">We'll send you the best of our blog just once a
                            month. We promise. </p>
                        <form action="#" method="GET" class="subscribe">
                            <input type="email" class="subscribe_input" name="search"
                                placeholder="Email address" required="">
                            <button class="btn btn-style btn-primary">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-28 block -->
        @include('sys.footer.footer')


        <section class="app-footer d-none">
            <footer class="footer-28 py-5">
                <div class="footer-bg-layer">
                    <div class="container py-lg-3">
                        <div class="row footer-top-28">
                            <div
                                class="col-lg-4 footer-list-28 copy-right mb-lg-0 mb-sm-5 mt-sm-0 mt-4">
                                <a class="navbar-brand mb-3" href="index.html">
                                    <span class="fa fa-newspaper-o"></span> NewsBlog</a>
                                <p class="copy-footer-28"> © 2020. All Rights Reserved. </p>
                                <h5 class="mt-2">Design by <a
                                        href="https://w3layouts.com/">W3Layouts</a></h5>
                            </div>
                            <div class="col-lg-8 row">
                                <div class="col-sm-4 col-6 footer-list-28">
                                    <h6 class="footer-title-28">Useful links</h6>
                                    <ul>
                                        <li><a href="#categories">food blogs</a></li>
                                        <li><a href="#advertise">Advertise with us</a></li>
                                        <li><a href="#authors">Our Authors</a></li>
                                        <li><a href="contact.html">Get in touch</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-4 col-6 footer-list-28">
                                    <h6 class="footer-title-28">Categories</h6>
                                    <ul>
                                        <li><a href="beauty.html">Beauty</a></li>
                                        <li><a href="fashion.html">Fashion and Style</a></li>
                                        <li><a href="#food"> Food and Wellness</a></li>
                                        <li><a href="#lifestyle">Lifestyle</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-4 col-6 footer-list-28 mt-sm-0 mt-4">
                                    <h6 class="footer-title-28">Social Media</h6>
                                    <ul class="social-icons">
                                        <li class="facebook">
                                            <a href="#facebook"><span
                                                    class="fa fa-facebook"></span>
                                                Facebook</a>
                                        </li>
                                        <li class="twitter"> <a href="#twitter"><span
                                                    class="fa fa-twitter"></span> Twitter</a></li>
                                        <li class="linkedin"> <a href="#linkedin"><span
                                                    class="fa fa-linkedin"></span> Linkedin</a>
                                        </li>
                                        <li class="dribbble"><a href="#dribbble"><span
                                                    class="fa fa-dribbble"></span> Dribbble</a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </footer>

            <!-- move top -->
            <button onclick="topFunction()" id="movetop" title="Go to top">
                <span class="fa fa-angle-up"></span>
            </button>
            <script>
                // When the user scrolls down 20px from the top of the document, show the button
                window.onscroll = function() {
                    scrollFunction()
                };

                function scrollFunction() {
                    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                        document.getElementById("movetop").style.display = "block";
                    } else {
                        document.getElementById("movetop").style.display = "none";
                    }
                }

                // When the user clicks on the button, scroll to the top of the document
                function topFunction() {
                    document.body.scrollTop = 0;
                    document.documentElement.scrollTop = 0;
                }
            </script>
            <!-- /move top -->
        </section>
        <!-- //footer-28 block -->

        <!-- disable body scroll which navbar is in active -->
        <script>
            $(function() {
                $('.navbar-toggler').click(function() {
                    $('body').toggleClass('noscroll');
                })
            });
        </script>
        <!-- disable body scroll which navbar is in active -->

        <!-- Template JavaScript -->
        <script src="assets/js/jquery-3.3.1.min.js"></script>

        <!-- theme changer js -->
        <script src="assets/js/theme-change.js"></script>
        <!-- //theme changer js -->

        <!-- courses owlcarousel -->
        <script src="assets/js/owl.carousel.js"></script>

        <!-- script for testimonials -->
        <script>
            $(document).ready(function() {
                $('.owl-testimonial').owlCarousel({
                    loop: true,
                    margin: 0,
                    nav: true,
                    responsiveClass: true,
                    autoplay: false,
                    autoplayTimeout: 5000,
                    autoplaySpeed: 1000,
                    autoplayHoverPause: false,
                    responsive: {
                        0: {
                            items: 1,
                            nav: false
                        },
                        480: {
                            items: 1,
                            nav: false
                        },
                        667: {
                            items: 1,
                            nav: true
                        },
                        1000: {
                            items: 1,
                            nav: true
                        }
                    }
                })
            })
        </script>
        <!-- //script for testimonials -->

        <!-- bootstrap -->
        <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>
