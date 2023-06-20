<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Blog - CFFJ</title>
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
                    <li><a href=" {{ url('about') }}">About Us</a></li>
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
                            <li><a href="{{ url('businessandinnovations') }}"">Business & innovation</a></li>
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

        @if (Session::has('Blog_comment_submitted'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('Blog_comment_submitted') }}
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
                    <h2>Blog</h2>

                    <ol>
                        <li><a href="{{url ('/')}}">Home</a></li>
                        <li><a href="{{url ('blog')}}">Blog</a></li>
                        <li>The Curious Case Of COVIDEX</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Blog Section -->

        <!-- ======= Blog Single Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-8 entries">

                        <article class="entry entry-single">

                            <div class="entry-img">
                                <img src="assets/img/blog/covidex.png" alt=""
                                    class="img-fluid pt-3 covidex">
                            </div>

                            <h2 class="entry-title">
                                <a href="blog-single.html">The Curious Case Of COVIDEX</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-person"></i> <a
                                            href="blog-single.html">By Cadreen Barungi Kabahizi</a>
                                    </li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-clock"></i> <a
                                            href="blog-single.html"><time datetime="2020-01-01">Sep
                                                07, 2021</time></a></li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-chat-dots"></i> <a
                                            href="blog-single.html">0 Comments</a></li>
                                </ul>
                            </div>

                            <div class="entry-content">

                                <p>
                                    While millions worldwide grapple with the realities of COVID-19
                                    and its immense costs on livelihoods, some scientists – on whose
                                    shoulders the mantle lies – are striving day and night to find
                                    the treatment for this deadly ailment. Although scientists have
                                    not yet found the cure for COVID-19, it is paramount that the
                                    relevant institutions invest in Research and Development, and
                                    innovation. Harnessing all effort, both local and international
                                    to discover remedies for COVID-19.



                                </p>
                                Professor Engeu Patrick Ogwang is one such Ugandan pharmacist who,
                                in pursuit of his dream to manufacture herbal drugs, prepared a
                                herbal remedy he called ‘Covidex’. The Covidex herbal solution
                                mainly constitutes of Zanthoxylum Challybeum or Zanthoxylum Gilleti
                                and Warbugia Ugandensis, two types of trees found only in Uganda,
                                Kenya and Tanzania. Coincidentally, Patrick had been studying these
                                two trees and their medicinal components for over a decade at
                                Mbarara University of Science and Technology where he is an
                                Associate Pharmacy Professor. It was the worldwide surge of COVID-19
                                that pushed him, together with his team of pharmacists from MUST, to
                                make this specific concoction. This herbal mixture is now indicated
                                as a supportive remedy management in the treatment of viral
                                infections.
                                <p>
                                    Many attest to the powerful properties this herbal concoction
                                    contains. Consumers say Covidex provides relief from the heavy
                                    congestion brought about by the Coronavirus.
                                </p>

                                <blockquote>
                                    <p>
                                        '' Such innovative breakthroughs point to the further need
                                        for heavier investments in Research and Development''
                                    </p>
                                </blockquote>


                                <p>
                                    For several years now, Jena Herbals factory in Entebbe Uganda,
                                    which is now producing Covidex, has been producing herbal
                                    medicines for cough and flu syrups, diabetes management, sickle
                                    cell management, and stomach ulcer management.


                                </p>


                                <p>
                                    Following Covidex’s popularity and controversies, the President,
                                    after consulting Prof. Ogwang, approved the continued production
                                    of Covidex and its consumption by the Covid patients. The
                                    National Drug Authority, too, after much consultation and
                                    testing, approved the concoction as a supportive remedy in the
                                    fight against COVID-19 on June 29th 2021.
                                </p>


                                <p>
                                    Although the World Health Organization has not given approval
                                    for the use of Covidex, its efficacy as a supporting dug is hard
                                    to disprove. Africa Center for Disease Control recognises the
                                    existence and use of herbal remedies for the relief of COVID-19
                                    symptoms. Many of these are still under clinical trials and will
                                    require more time to be officially approved. In the meantime,
                                    ailing Ugandans are using Covidex with confidence in its ability
                                    to combat COVID-19.
                                </p>


                                <p>
                                    Such innovative breakthroughs point to the further need for
                                    heavier investments in Research and Development. Ugandans need
                                    not rely too dependently on exported goods. Ugandans like all
                                    Global Southerners, have it in them to innovate and create what
                                    they need to survive, thrive and make a significant impact on
                                    the world.
                                </p>

                                <p>
                                    Now sold at a factory price of 5,000Ugx ($1.41) per little
                                    bottle, Covidex has recently been subject to hoarding by some
                                    strategic businessmen who hiked the prices to as high as
                                    50,000Ugx ($14.1) per bottle.
                                </p>

                                <p>
                                    We call upon the government to regulate the Covidex prices,
                                    placing a price ceiling on the cost of Covidex to the public.
                                    Covidex should be easily accessible and affordable to all the
                                    locals. In its effort to combat the deadly coronavirus, the
                                    Ministry of Health should also provide Covidex to all COVID
                                    patients in hospitals.


                                </p>
                                <!----footer--->
                                <div class="entry-footer">
                                    <i class="bi bi-folder"></i>
                                    <ul class="cats">
                                        <li><a href="#">Research</a></li>
                                    </ul>

                                    <i class="bi bi-tags"></i>
                                    <ul class="tags">
                                        <li><a href="#">Creative</a></li>
                                        <li><a href="#">Tips</a></li>

                                    </ul>
                                    <div class="social-links">
                                        <a href="https://twitters.com/#"><i
                                                class="bi bi-twitter"></i></a>
                                        <a href="https://facebook.com/#"><i
                                                class="bi bi-facebook"></i></a>
                                        <a href="https://instagram.com/#"><i
                                                class="biu bi-instagram"></i></a>
                                    </div>
                                </div>
                                <!----endfooter--->



                        </article><!-- End blog entry -->



                        <div class="blog-comments">

                            <h4 class="comments-count">0 Comments</h4>




                            <div class="reply-form">
                                <h4>Leave a Reply</h4>
                                <p>Your email address will not be published. Required fields are
                                    marked * </p>
                                <form action="">
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <input name="name" type="text" class="form-control"
                                                placeholder="Your Name*">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input name="email" type="text" class="form-control"
                                                placeholder="Your Email*">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col form-group">
                                            <input name="website" type="text" class="form-control"
                                                placeholder="Your Website">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col form-group">
                                            <textarea name="comment" class="form-control"
                                                placeholder="Your Comment*"></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Post
                                        Comment</button>

                                </form>

                            </div>

                        </div><!-- End blog comments -->
                    </div><!-- End blog entries list -->

                    <div class="col-lg-4">

                        <div class="sidebar">

                            <h3 class="sidebar-title">Search</h3>
                            <div class="sidebar-item search-form">
                                <form action="">
                                    <input type="text">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div><!-- End sidebar search formn-->

                            <h3 class="sidebar-title">Categories</h3>
                            <div class="sidebar-item categories">
                                <ul>
                                    <li><a href="#">General <span>(4)</span></a></li>
                                    <li><a href="#">Lifestyle <span>(0)</span></a></li>
                                    <li><a href="#">Travel <span>(0)</span></a></li>
                                    <li><a href="#">Health <span>(2)</span></a></li>
                                    <li><a href="#">Politics <span>(1)</span></a></li>
                                    <li><a href="#">Educaion <span>(0)</span></a></li>
                                </ul>
                            </div><!-- End sidebar categories-->

                            <h3 class="sidebar-title">Recent Posts</h3>
                            <div class="sidebar-item recent-posts">
                                <div class="post-item clearfix">
                                    <img src="assets/img/blog/sideblog.png" alt="">
                                    <h4><a href="blog-single.html">Inclusive Development –
                                            Underlying Dynamics</a></h4>
                                    <time datetime="2020-01-01">Jul 23, 2021</time>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="assets/img/blog/sideblog.png" alt="">
                                    <h4><a href="nexusbetweenblog.html">Nexus Between COVID-19,
                                            Food, Faith, And Politics</a></h4>
                                    <time datetime="2020-01-01">Aug 01, 2021</time>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="assets/img/blog/sideblog.png" alt="">
                                    <h4><a href="mentalhealthamidstblog.html">Mental Health Amidst
                                            COVID-19 In Uganda</a></h4>
                                    <time datetime="2020-01-01">Aug 21, 2021</time>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="assets/img/blog/sideblog.png" alt="">
                                    <h4><a href="caseofcovidexblog">The Curious Case Of COVIDEX</a>
                                    </h4>
                                    <time datetime="2020-01-01">Sep 07, 2021</time>
                                </div>



                            </div><!-- End sidebar recent posts-->



                            <h3 class="sidebar-title">Tags</h3>
                            <div class="sidebar-item tags">
                                <ul>
                                    <li><a href="https://twitter.com/CFFJ_Ug?s=09">CFFJ_Ug</a></li>
                                    <li><a href="podcasts.html">Podcasts</a></li>
                                    <li><a href="researchandpublications.html">Research</a></li>
                                    <li><a href="opinionbank.html">Opinion Bank</a></li>

                                </ul>
                            </div><!-- End sidebar tags-->

                        </div><!-- End sidebar -->

                    </div><!-- End blog sidebar -->

                </div>

            </div>
        </section><!-- End Blog Single Section -->

    </main><!-- End #main -->
    @include('sys.footer.footer')
