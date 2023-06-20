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
                        <li>Ugandan Fuel Crisis</li>
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
                                <img src="assets/img/blog/ugandanfuel.png" alt=""
                                    class="img-fluid" height="" width="800">
                            </div>


                            <p><i>Photo: courtesy of The Observer Newspaper </i> </p>

                            <h2 class="entry-title">
                                <a href="{{ url('ugandanfuel') }}">Ugandan Fuel Crises and
                                    the Biblical story of Joseph

                                </a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-person"></i> <a
                                            href="{{ url('ugandanfuel') }}">By KALEMA PAUL
                                            LINCOLN</a>
                                    </li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-clock"></i> <a
                                            href="{{ url('ugandanfuel') }}"><time
                                                datetime="2020-01-01">April 12, 2022</time></a></li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-chat-dots"></i> <a
                                            href="{{ url('ugandanfuel') }}">0 Comments</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    The book Genesis relays a story of a Pharaoh who had a dream
                                    that foretold the seven years of bountiful harvest and seven
                                    years of famine. Having received interpretation from Joseph, a
                                    Jewish prisoner, the Egyptian king at once gave him all power to
                                    ensure that he averts the brunt of the impending famine. The
                                    young prime minister started filling the silos with grain in
                                    times of plenty to buffer the country’s food supply. Indeed, the
                                    Pharaoh’s decision proved wise when famine enveloped the lands
                                    and the people of Egypt were cushioned from starvation.

                                </p>


                                <p>
                                    All evidence shows that Uganda has not picked the lesson of this
                                    Biblical story! As we speak, Ugandan businessmen are bracing for
                                    the worst in anticipation of the Kenyan polls in August. The
                                    leadership of Kampala City Traders’ Association (KACITA), has
                                    advised its members to prepare to use the longer central
                                    corridor when transporting their goods to avoid the losses that
                                    may result in complete loss of goods.





                                </p>

                                <blockquote class="d-none">
                                    <p>
                                        "Block Quote"
                                    </p>
                                </blockquote>

                                <p>
                                    This is not new for the government since Kenya holds elections
                                    yearly. However, one who has studied the situation in Kenya will
                                    know that these are not so-ordinary polls. Kenyans face an
                                    election that could potentially lead to a change in leadership.
                                    With the escalation of political threats among contenders in
                                    Kenya, there is a need to worry—like the saying goes, once
                                    beaten twice shy. Kenya’s 2007 presidential polls were
                                    tumultuous, to say the least, with demonstrations shaking the
                                    country. Trucks carrying Ugandan borne goods and fuel were burnt
                                    or looted, and businessmen lost millions of shillings in the
                                    process. Fuel supply from Mombasa was cut off and the price of a
                                    litre mounted to ten thousand shillings. For an economy largely
                                    dependent on fuel for production and transportation of goods,
                                    this hit the economy hard. Commodity prices reached a record
                                    high, businesses were driven out of the market, and poverty bit
                                    even harder. The businessmen who lost billions of shillings are
                                    yet to receive their compensation as their court case arising
                                    out of the 2007 chaos is still on appeal in Kenya.




                                </p>



                                <p>
                                    A month ago, fuel prices shot up due to the industrial action of
                                    truck drivers who protested expensive double COVID tests in
                                    Kenya and Uganda. Overnight, the fuel prices skyrocketed partly
                                    due to hoarding by some private actors and the meagre fuel
                                    reserves that could not meet the daily national demand. As
                                    already mentioned, the fuel price is directly proportional to
                                    the price of commodities in Uganda. The landlocked nature of our
                                    country dictates that we depend on the service of foreign ports
                                    like Mombasa and Dar es Salam. This means that peace in these
                                    countries is of critical importance to Uganda. However, more
                                    importantly, Uganda needs to put in place government-controlled
                                    fuel buffers that can meet the country’s fuel demand for a
                                    considerable time. The current fuel buffers can only meet a
                                    national fuel demand of only ten days. This means that should
                                    Kenya have a repeat of the 2007 scenario for just three months,
                                    we would have a painful fuel crisis and a long-standing
                                    commodity price increase. The alternative to the Mombasa port is
                                    the central corridor route that connects Uganda to the port of
                                    Dar es Salam in Tanzania.




                                </p>

                               

                                <p>
                                    The reason why ninety per cent of Uganda’s cargo passes through
                                    the northern corridor connecting to the port of Mombasa and not
                                    Dar es Salam is because it is more expensive to use the central
                                    corridor than the northern corridor. It costs about 17.9 million
                                    shillings to transport a 20 feet cargo through the central
                                    corridor while it costs only 14.4 million shilling for the same
                                    container to use the northern corridor. If the importing traders
                                    in Kampala choose to use the central corridor, the increased
                                    cost of transportation will lead to the further hiking of
                                    commodity prices. Further, if Uganda’s fuel trucks also use the
                                    central corridor, there will be a corresponding increase in the
                                    already high fuel prices and a more devastating commodity price
                                    increase. The government’s failure to follow up on its 2008
                                    pledge to construct fuel reserves has brought Uganda to this
                                    point. One of the core functions of a government is to provide
                                    economic security to its people and to ensure that the
                                    population is in a more advantageous position to sustain itself.
                                    With the Russo-Ukrainian war still raging and its impact on the
                                    global fuel supply, coupled with the potentially chaotic Kenyan
                                    elections, Uganda is on an economic time bomb.




                                </p>



                                <p>
                                    Even when the predictable chaos in Kenya does not occur, it is
                                    highly perilous for a landlocked country whose economic
                                    structure depends on fuel not to have fuel reserves that can
                                    meet national demand for at least six months. This wisdom should
                                    also be extended to other critical sectors of the country to
                                    reduce its vulnerability in the face of crisis. For many years,
                                    Uganda has been grappling with the issue of famine that
                                    intermittently hits different areas in Uganda and causes
                                    starvation and untold food shortage. Notwithstanding the
                                    recurrence of this hazard, the government has never thought it
                                    fit to put in place functional food silos. This explains the
                                    intermittent hunger crises that face some parts of the country
                                    notwithstanding the country’s ability to feed itself and leave
                                    enough for export. The leadership of this country must adopt the
                                    Pharoah-Joseph approach, especially in regard to resources that
                                    are of critical importance to the country. The construction of
                                    critical resource reserves serves a litany of advantages to the
                                    country.




                                </p>

                                <p>

                                    Perhaps the most important rationale for these reserves makes is
                                    that they would make Uganda more resilient to external shocks.
                                    It would save the economy from taking hits resulting from abrupt
                                    increases in fuel prices that happen overnight because of
                                    industrial action or minor instabilities in Kenya. Reserves
                                    would save small and medium enterprises from economic shocks,
                                    which could potentially drive them out of business. There is a
                                    need to curb the high mortality rate of businesses in Uganda,
                                    and this can be partly done by eradicating volatility in the
                                    economy. Resource buffers afford the government enough time to
                                    plan for the country in times of crisis so that the real impact
                                    of the disaster can be ameliorated when government maps out
                                    alternatives. By saving the country from immediate economic
                                    shocks, businesses are given time to adjust accordingly, making
                                    them more capable of withering economic storms. As long as we
                                    still have a volatile economic sector that is easily brought to
                                    its knees by industrial action or instability elsewhere, efforts
                                    of lifting people out of poverty remain will remain a dream.






                                </p>

                                <p>

                                    The Ugandan government needs to divorce itself from the
                                    proclivity of handling crises as they happen and seek to prevent
                                    or plummet their impact before they occur. A disaster-ready
                                    nation is one that prospers, one whose ability to deal with
                                    challenges with a limited and controlled impact. Our economy
                                    needs to be carefully managed and shielded from preventable
                                    risks and disruption. This is the only way we can transition to
                                    middle-income status and beyond in a considerably short period
                                    of time.


                                </p>


                            </div>

                            <div class="entry-footer">
                                <i class="bi bi-folder"></i>
                                <ul class="cats">
                                    <li><a
                                            href="{{ url('researchandpublications') }}">Research</a>
                                    </li>
                                </ul>

                                <i class="bi bi-tags"></i>
                                <ul class="tags">
                                    <li><a href="#">Creative</a></li>
                                    <li><a href="#">Tips</a></li>

                                </ul>
                                <div class="social-links">
                                    <a href="https://twitter.com/CFFJ_Ug?s=09"><i
                                            class="bi bi-twitter"></i></a>
                                    <a href="https://www.facebook.com/CenterofFaithF1/"><i
                                            class="bi bi-facebook"></i></a>
                                    <a href="https://instagram.com/#"><i
                                            class="biu bi-instagram"></i></a>
                                </div>
                            </div>

                        </article><!-- End blog entry -->



                        <div class="blog-comments">

                            <h4 class="comments-count">0 Comments</h4>

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
