<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Blog -CFFJ</title>
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
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('blog') }}">Blog</a></li>
                        <li>Teenage pregnancies</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Blog Section -->

        <!-- ======= Blog Single Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row">

                  
                    <div class="col-lg-3">

                        <div class="sidebar">

                            <h3 class="sidebar-title"></h3>

                            <!-- End sidebar search formn-->

                            <h3 class="sidebar-title">Trending In Public Policy</h3>
                            <div class="sidebar-item categories">
                                
                                <div class="post-item clearfix recent-posts-carousel">
                                        <img src="assets/images/oil&gas.jpg" alt="">






                                </div>
                                <ul id="blogslist">
                                    <li><a href="https://www.parliament.go.ug/news/5935/parliament-committed-fostering-oil-production">Parliament
                                        committed to fostering oil production </a>
                                    </li>
                                    
                                    <div class="post-item clearfix recent-posts-carousel pt-2">
                                        <img src="assets/images/coffeeagrement.jpg" alt="">

                                </div>
                                    <li><a href="https://www.parliament.go.ug/news/5929/legislators-call-termination-coffee-agreement">Legislators call for
                                    termination of coffee agreement </a>
                                    </li>
                                    
                                    
                                      
                                    
                                </ul>
                                
                                 <h3 class="sidebar-title">Top Stories</h3>
                                  <ul id="blogslist">
                                  <div class="post-item clearfix recent-posts-carousel">
                                        <img src="assets/img/blog/emyoga.png" alt="">


                                </div>
                                    <li><a href="{{ url('emyoga') }}">Parish Development
                                            Model
                                            And The Politics Of Financial Handouts</a>
                                    </li>
                                     <time datetime="2020-01-01">March
                                        1, 2022</time>
                                   
                                </ul>
                                
                            </div>

                            <!-- End sidebar categories-->

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

                        <article class="entry entry-single">

                            <div class="entry-img  pt-5 px-5">
                                <img src="assets/img/blog/teenage pregnacies.jpg" alt=""
                                    class="img-fluid" height="" width="800">
                            </div>


                            <p class="text-danger"><i>Photo: Courtesy of Graha Details </i> </p>

                            <h2 class="entry-title">
                                <a href="{{ url('teenage_pregnacies') }}">THE RAMPANT CASES
                                    OF TEENAGE PREGNANCIES IN UGANDA




                                </a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-person"></i>
                                        <a href="{{ url('teenage_pregnacies') }}"> By Sharon
                                            Ainembabazi


                                        </a>
                                    </li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-clock"></i>
                                        <a href="{{ url('teenage_pregnacies') }}"><time
                                                datetime="2020-01-01">July 4, 2022</time></a>
                                    </li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-chat-dots"></i> <a
                                            href="{{ url('teenage_pregnacies') }}">0
                                            Comments</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    Of all the cracks the Covid-19 lock-down exposed, the social
                                    issue of teenage pregnancies in Uganda still sticks out like a
                                    sore thumb. Because of school closure, teenagers were out of
                                    school and idled for a long time which allowed the boom of
                                    teenage pregnancies.



                                </p>
                                <p>
                                    A teenager is a person aged 13 to 19 years, but some pre-teen
                                    girls aged 9 to 12 years face the same vulnerabilities teenagers
                                    face. Teenagehood is a stage of curiosity and body changes.
                                    Teenagers are usually perceived as the most rebellious and
                                    difficult lot. It is easy to perceive teenagers as mature
                                    because they take on a more adult-like look body-wise, and yet,
                                    in actual sense, they need the most guidance. The evidence that
                                    teenagers need more guidance than they receive is in the UNFPA
                                    2021 report, which estimated that 32,566 teenagers got pregnant
                                    monthly in Uganda in 2020–an equivalent of 1,052 pregnant
                                    teenagers a day.



                                </p>

                                <blockquote class="">
                                    <p>
                                        "32,566 teenagers got pregnant monthly in Uganda in 2020–an
                                        equivalent of 1,052 pregnant teenagers a day."
                                    </p>
                                </blockquote>

                                <p>
                                    The number of teenage pregnancies saw a staggering increase in
                                    the Covid-19 lock-down. While many sources and leaders blame the
                                    closure of schools, a lack of proper awareness and sensitization
                                    is a significant contributor to this spike. Avoiding the teenage
                                    pregnancy problem by keeping teens occupied with school leaves
                                    them vulnerable to the same problem when unpredictable events
                                    like the lockdown take them out of school. This vulnerability
                                    stems from the shortage of the right information teenagers need
                                    to make choices in their best interest. This is especially
                                    important because of the curious age at which teenagers are.
                                    They tend to have so much zeal and energy for adventure, no
                                    matter how risky. While these are commendable and brave
                                    characteristics, they are a recipe for disaster if these
                                    teenagers do not have sufficient guidance.



                                </p>

                                <p>
                                    Another cause of teenage pregnancies is early marriages. As
                                    earlier mentioned, when children turn into teenagers, their
                                    bodily changes make them look like adults, yet they are still
                                    immature. This is when some parents, especially those who lack
                                    exposure, decide to marry their children off. While most parents
                                    who do this know that it is unlawful, their biggest driver is
                                    usually the cultural norms of their particular society. These
                                    parents believe that they have their children’s best interests
                                    at heart. As such decisions are made, important matters like the
                                    downsides of early marriages are hardly contemplated. Issues
                                    like difficulty in childbearing by immature mothers,
                                    consequential high maternal mortality rates, mental distress for
                                    young mothers, and depression, among other dire consequences,
                                    are ignored.



                                </p>

                                <p>
                                    Some ways to curb rampant teenage pregnancies include 1) Talking
                                    to the teenagers first. Reproductive health education and
                                    personal responsibility should be at the front and center in
                                    combating this issue. Teenagers need to learn how to responsibly
                                    manage their sexual and relational curiosity. 2) Creating safe
                                    spaces for teenagers to express themselves. Safe environments
                                    for teenage counselling and support could also be provided to
                                    create safe sharing channels that provide wholesome guidance on
                                    navigating their lives and choices. Teenagers are delicate and
                                    need careful handling and nurturing to help them reach their
                                    full potential. Creating safe spaces with well-trained
                                    counsellors or teachers to listen to and guide these teenagers
                                    would go a long way in combating teenage pregnancies. 3) Since
                                    early marriages are still rampant, the government could look
                                    into actively involving community leaders in the fight against
                                    early marriages. This could be achieved through rigorous
                                    awareness-building in communities, starting with respected
                                    elders who usually double as opinion leaders. This would be very
                                    beneficial because early marriages are a cultural norm in many
                                    communities, and shaking such norms can not be done only by laws
                                    but by having the whole community in agreement. Having community
                                    elders condemning early marriage would be a good starting place.
                                    4) Vocational education would be the best way to enable some of
                                    these mothers to earn money to support their dependents.
                                    Scholarships for this purpose would be very helpful, and
                                    successful teenage mothers could be celebrated to enhance
                                    greater participation in such vocational programs.


                                </p>

                                <p>
                                    Although Uganda is among the countries known for having an
                                    abundant young population, the quality of this population may be
                                    questionable and lack efficient productivity in years to come if
                                    issues like teenage pregnancies are not well addressed.



                                </p>


                            </div>

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

                        </article><!-- End blog entry -->



                        <div class="blog-comments">

                            <h4 class="comments-count">View Comments</h4>

                            <div class="reply-form">
                                <h4>Leave a Reply</h4>
                                <p>Your email address will not be published. Required fields are
                                    marked * </p>
                                <form action="Recordblogcomment" method="post"
                                    enctype="multipart/form-data">

                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" name="name" class="form-control"
                                            placeholder="Enter name" required>

                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" name="email" class="form-control"
                                            placeholder="Enter email" required>
                                        <small id="emailHelp" class="form-text text-muted">We'll
                                            never share your email with anyone else.</small>
                                    </div>

                                    <div class="row">
                                        <div class="col form-group">
                                            <textarea name="comment" class="form-control" placeholder="Your Comment*" required></textarea>
                                        </div>
                                    </div>



                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                        <!-- End blog comments -->

                    </div>
                    <!-- End blog entries list -->

                     <div class="col-lg-3">

                        <div class="sidebar">

                            <h3 class="sidebar-title">Search</h3>
                            <div class="sidebar-item search-form">
                                <form action="">
                                    <input type="text" id="myInput"
                                        onkeyup="mySearchFunction()" placeholder="Search">


                                </form>
                            </div>

                            <!-- End sidebar search formn-->

                            <h3 class="sidebar-title">Categories</h3>
                            <div class="sidebar-item categories">
                                <ul id="blogs">
                                    <li><a
                                            href="{{ url('blog_business_category') }}">Business<span>(4)</span></a>
                                    </li>
                                    <li><a href="{{url('blog_family_category')}}">Family<span>(5)</span></a>
                                    </li>
                                    <li><a
                                            href="{{ url('blog_development_category') }}">Development<span>(12)</span></a>
                                    </li>
                                    <li><a href="{{ url('blogs_climate_category') }}">Hunger,
                                            Agriculture,Climate
                                            <span>(1)</span></a></li>


                                    <li><a href="{{ url('blogs_religion_category') }}">Faith
                                            <span>(1)</span></a></li>
                                 

                                </ul>
                            </div>

                            <!-- End sidebar categories-->

                        <h3 class="sidebar-title">Recent Posts</h3>
                        <div class="sidebar-item recent-posts">
                            <div class="post-item clearfix">
                                <img src="assets/img/blog/coffee.png" alt="">
                                <h4><a href="{{ url('coffee_deal') }}">The
                                        Controversial
                                        Coffee Deal: Daylight Robbery or Not?</a></h4>
                                <time datetime="2020-01-01">May
                                    13, 2022</time>
                            </div>

                            <div class="post-item clearfix">
                                <img src="assets/img/blog/ugandas_oil.png" alt="">
                                <h4><a href="{{ url('whyugandas_oil') }}">WHY UGANDA’S OIL
                                        FINAL
                                        INVESTMENT DECISION IS A BIG DEAL</a></h4>
                                <time datetime="2020-01-01">Feb
                                    17, 2022</time>
                            </div>

                            <div class="post-item clearfix d-none">
                                <img src="assets/img/blog/hopeinaweb.jpg" alt="">
                                <h4><a href="{{ url('hopeinaweb') }}">HOPE IN A WEB OF
                                        HARDSHIP</a></h4>
                                <time datetime="2020-01-01">Feb
                                    15, 2022</time>
                            </div>

                            <div class="post-item clearfix">
                                <img src="assets/img/blog/covidex.png" alt="">
                                <h4><a href="{{ url('silentmutiny') }}">The Curious Case Of
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

                </div>

            </div>
        </section><!-- End Blog Single Section -->

    </main><!-- End #main -->
    @include('sys.footer.footer')
