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
                            <li><a href="{{ url('businessandinnovations') }}"">Business & innovation</a></li>
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
                            </div>

                            <!-- End sidebar categories-->

                             

                          <h3 class="sidebar-title">Top Stories</h3>
                                <div class="       sidebar-item  ">
                                    <div class="post-item clearfix recent-posts-carousel">
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

                                <div class="post-item clearfix d-none">
                                    <img src="assets/img/blog/covidex.png" alt="">
                                    <h4><a href="{{ url('silentmutiny') }}">The Curious Case Of
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
                                <img src="assets/img/blog/teenage pregnacies.jpg" alt=""
                                    class="img-fluid" height="" width="800">
                            </div>

                            <p class="text-danger"><i>Photo: Courtesy of Graha Details
                                </i> </p>

                            <h2 class="entry-title">
                                <a href="{{ url('teenage_pregnacies') }}">THE RAMPANT CASES OF
                                    TEENAGE PREGNANCIES IN UGANDA






                                </a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-person"></i>
                                        <a href="{{ url('teenage_pregnacies') }}">By Sharon
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
                                            href="{{ url('teenage_pregnacies') }}">Views</a>
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



                                <div class="read-more">
                                    <a href="{{ url('teenage_pregnacies') }}">Read
                                        More</a>
                                </div>
                            </div>

                        </article>

                        <!--end blog entry--->

                        <!---blog entry-->

                        <article class="entry">

                            <div class="entry-img  pt-5 px-5">
                                <img src="assets/img/blog/cognitive development.jpg"
                                    alt="" class="img-fluid" height=""
                                    width="800">
                            </div>

                            <p class="text-danger"><i>Photo: Courtesy of The independent

                                </i> </p>

                            <h2 class="entry-title">
                                <a href="{{ url('cognitive_development') }}">The Importance of
                                    Proper Cognitive Development to the Quality of Uganda’s
                                    Population
                                </a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-person"></i>
                                        <a href="{{ url('cognitive_development') }}">By Sharon
                                            Ainembabazi




                                        </a>
                                    </li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-clock"></i>
                                        <a href="{{ url('cognitive_development') }}"><time
                                                datetime="2020-01-01">July 4, 2022</time></a>
                                    </li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-chat-dots"></i> <a
                                            href="{{ url('cognitive_development') }}">Views</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    The importance of proper cognitive development in children is
                                    hardly discussed in Uganda. This is mostly because some people
                                    have no clue about what it is. Cognitive development is the
                                    progress made in thinking and reasoning abilities as a person
                                    grows. It is basically how a person relates with the world
                                    around them, for example,
                                </p>



                                <div class="read-more">
                                    <a href="{{ url('cognitive_development') }}">Read
                                        More</a>
                                </div>
                            </div>

                        </article>
                        <!---end blog entry-->

                       
                                 <article class="entry">

                            <div class="entry-img  pt-5 px-5">
                                <img src="assets/img/blog/mentalhealth.jpg" alt=""
                                    class="img-fluid" height="" width="800">
                            </div>

                            <p class="text-danger d-none"><i>Photo: courtesy of Africa-Uganda
                                    Travel
                                    Guide.com </i> </p>

                            <h2 class="entry-title">
                                <a href="{{ url('need_for_mental_health') }}">THE NEED FOR MENTAL
                                    HEALTH AWARENESS IN UGANDA





                                </a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-person"></i>
                                        <a href="{{ url('need_for_mental_health') }}">By Sharon
                                            Ainembabazi




                                        </a>
                                    </li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-clock"></i>
                                        <a href="{{ url('need_for_mental_health') }}"><time
                                                datetime="2020-01-01">June 7, 2022</time></a>
                                    </li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-chat-dots"></i> <a
                                            href="{{ url('need_for_mental_health') }}">Views</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    Access to capital is one of the most significant contributors to
                                    business growth in any economy. With a good business plan and
                                    access to capital, most businesses can thrive. However, it is
                                    usually the case that not everyone who has a viable business
                                    plan has access to personal capital or can even borrow it. Loan
                                    accessibility is still a challenge in Uganda. With jobs at an
                                    all-time low, many are making an effort to employ themselves –
                                    making access to capital more necessary.

                                </p>



                                <div class="read-more">
                                    <a href="{{ url('need_for_mental_health') }}">Read
                                        More</a>
                                </div>
                            </div>

                        </article>
                        
                        
                                 

                            <!---end blog entry--->
                            
                            <!--blog entry-->
                        <article class="entry">

                            <div class="entry-img">
                                <img src="assets/img/blog/blog-1.jp" alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href="{{ url('silentmutiny') }}">THE SILENT
                                    MUTINY: OPERATION SHUJA AND THE UPDF’S CONTEMPT FOR CIVILIAN
                                    AUTHORITY

                                </a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-person"></i> <a
                                            href="{{ url('silentmutiny') }}">By KALEMA PAUL
                                            LINCOLN


                                        </a></li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-clock"></i> <a
                                            href="{{ url('silentmutiny') }}"><time
                                                datetime="2020-01-01">Feb
                                                9, 2022</time></a></li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-chat-dots"></i> <a
                                            href="{{ url('silentmutiny') }}">0 Comments</a></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    AIn the stained congestion of Katanga Kimwanyi zone, where small
                                    shanties are tussled for space with gutters as improvised paths
                                    and makeshift latrines forged from shallow holes, sticks, and
                                    sackcloth lives a chaotic neighbourhood. Here, amid crime,
                                    promiscuity and profanity uttering drunkards, Ms Tuhaise Rose
                                    Mary raises her family of six. Her family is more than complete,
                                    with three sons, two daughters, and one grandchild. The
                                    forty-two-year-old mother begins her day with a prayer invoking
                                    the Almighty to take the lead, a practice she has diligently
                                    instilled in her children. She then begins her daily hunt for
                                    those with

                                </p>



                                <div class="read-more">
                                    <a href="{{ url('silentmutiny') }}">Read More</a>
                                </div>
                            </div>

                        </article>

                        <!-- End blog entry -->


                        <!---blog entry -->

                        <article class="entry">

                            <div class="entry-img d-none">
                                <img src="assets/img/blog/status.jpg" alt=""
                                    class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href="{{ url('mentalhealthamidstblog') }}">Mental Health
                                    Amidst
                                    COVID-19
                                    In Uganda</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-person"></i> <a
                                            href="blog-single.html">By Cynthia Mbabazi</a></li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-clock"></i> <a
                                            href="blog-single.html"><time datetime="2020-01-01">Aug
                                                21, 2021</time></a></li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-chat-dots"></i> <a
                                            href="blog-single.html">0 Comments</a></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <h2>Status of mental health</h2>
                                <p>
                                    Mental health is referred to intellectual, social and emotional
                                    well-being. It often receives the least focus amongst health
                                    conditions. The most common types of mental illness include
                                    anxiety disorders (panic disorders, phobias,
                                    obsessive-compulsive disorder (OCD), Post-traumatic stress
                                    (PTS)), mood disorders (major depression, bipolar disorders) and
                                    schizophrenia disorders (delusions, thought disorders,
                                    hallucinations, withdrawal). Mental illnesses may develop due to
                                    the loss of loved ones, underlying health problems, such as
                                    cancer, diabetes, HIV, chronic pain and adverse economic
                                    problems such as poverty.


                                </p>
                                <div class="read-more">
                                    <a href="{{ url('mentalhealthamidstblog') }}">Read More</a>
                                </div>
                            </div>

                        </article>
                        
                        <!-- End blog entry -->
                            
                            
                       <div class="blog-pagination">
                            <ul class="justify-content-center">
                                <li class="active"><a href="{{ url('blog') }}">Back</a></li>
                                <li class="d-none"><a href="{{ url('blog1') }}">Next</a></li>
                               
                            </ul>
                        </div>

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
                                   
                                    <li><a
                                            href="{{ url('blog_development_category') }}">Development<span>(12)</span></a>
                                    </li>
                                    <li><a href="{{ url('blogs_climate') }}">Climate
                                            <span>(3)</span></a></li>




                                    <li><a href="">Hunger,
                                            Agriculture
                                            <span>(3)</span></a></li>

                                    <li><a href="">Religion
                                            <span>(2)</span></a></li>
                                    <li><a href="">Health
                                            <span>(2)</span></a></li>
                                    <li><a href="">Law
                                            <span>(4)</span></a>
                                    </li>
                                    <li><a href="">Innovation
                                            <span>(0)</span></a>

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
                                <li><a href="https://twitter.com/CFFJ_Ug?s=09">CFFJ_Ug</a></li>
                                <li><a href="{{ url('podcasts') }}">Podcasts</a></li>
                                <li><a href="{{ url('researchandpublications') }}">Research</a>
                                </li>
                                <li><a href="{{ url('opinionbank') }}">Opinion Bank</a></li>

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
