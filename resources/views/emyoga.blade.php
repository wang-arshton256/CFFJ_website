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
                        <li>Parish Development</li>
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
                                <img src="assets/img/blog/emyoga.png" alt="" class="img-fluid"
                                    height="" width="800">
                            </div>
                            <p><i>Photo is a courtesy of the internet</i> </p>
                            <h2 class="entry-title">
                                <a href="blog-single.html">Parish Development Model
                                    And The Politics Of Financial Handouts

                                </a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-person"></i> <a
                                            href="blog-single.html">By KALEMA PAUL
                                            LINCOLN</a>
                                    </li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-clock"></i> <a
                                            href="blog-single.html"><time datetime="2020-01-01">Feb
                                                9, 2022</time></a></li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-chat-dots"></i> <a
                                            href="blog-single.html">0 Comments</a></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    On 26th February 2022, the president launched the parish
                                    development model (PDM) in Kibuku district. According to the
                                    government, the program aims to eradicate poverty at the
                                    grassroots level, and a whopping 490 billion shillings have been
                                    earmarked for the program, with every parish receiving seventeen
                                    million shillings out of the fund. The modus operandi of the
                                    program will include households saving and borrowing funds from
                                    the parish SACCOs which funds will then be used by the household
                                    to start up their preferred businesses or boost one that it
                                    already has. The program replaces the <i>Emyooga</i> program,
                                    which was
                                    rolled out in October 2020 as a poverty eradication program. In
                                    2013, the government rolled out the Youth Livelihood Programme,
                                    in which it injected a staggering 265 billion to help the youth
                                    start-up businesses as a poverty alleviation strategy. The lofty
                                    sums of taxpayers’ money that are continuously dedicated towards
                                    poverty eradication behove us to look closer into the picture
                                    painted by the protagonists of these programs. It is noteworthy
                                    that Uganda is still among the world’s poorest countries, and
                                    all evidence shows that we still have a long way to go, but the
                                    fundamental question is, are we on the right track?



                                </p>
                                <p>
                                    Attractive as the idea of distributing money to people seems, it
                                    is ineffective in alleviating poverty simply because the money
                                    is given to people who have no wealth-generating literacy and
                                    this money usually ends up being inappropriately invested or
                                    even outrightly squandered. The recipients of the funds
                                    typically perceive the funds as their share of the national
                                    cake, and such programs are usually welcomed with considerable
                                    excitement by the public. The fact that these very people
                                    continue to languish in poverty after the money has been spent
                                    confirms the ineffectiveness of the money distribution schemes.
                                    To understand this irony, we need to comprehend what poverty is.
                                    Poverty is a multi-dimensional condition of inability to afford
                                    the minimum standards of living, which are often coupled with
                                    the incapacity to exploit available resources usually caused by
                                    ignorance. It is not uncommon to find households in Uganda with
                                    substantial chunks of arable land in a place with a favourable
                                    climate enveloped by acute poverty, living on far less than a
                                    dollar a day. One may be quick to conclude that indolent people
                                    inhabit such households, yet it is quite the opposite. Such
                                    households work hard using rudimentary farming methods. They
                                    only manage to get what to eat, remaining with a little more to
                                    sell within their equally poor neighbourhoods. The Uganda Bureau
                                    of Statistics’ Statistical Abstract of 2020 confirmed this when
                                    it highlighted that out of a workforce of 15 million people in
                                    Uganda, only 9 million were gainfully employed. The remaining 6
                                    million were engaging in unpaid work in subsistence activities,
                                    especially agriculture. In a country of forty million people,
                                    the current official workforce is considerably too small to
                                    support the unemployed population. A significant proportion of
                                    that unemployed workforce is wasted in the subsistence economy
                                    hence the biting poverty.



                                </p>


                                <p>
                                    In such a situation, a prudent poverty alleviation program must
                                    entail thorough sensitization and skills development to bridge
                                    the knowledge gap, technological support to boost the capacity
                                    of those already in business and provision of essential social
                                    services like education, transport and health services. The
                                    government must then incentivize the population to enter into
                                    production and commerce through tax cuts, supporting small and
                                    medium enterprises with advanced technology, and offering tax
                                    holidays to local investors who have reached a certain level of
                                    entrepreneurship success. Cash packages can also be used to
                                    further attract more people to enter into commercial activity.
                                    Still, these packages should target communities who have been
                                    trained in various vocational and commercial skills. Further,
                                    the impact of any poverty alleviation program must be trackable
                                    to understand the number of people who have accessed the funds,
                                    how far their businesses have grown, what additional support the
                                    government can offer if necessary, and above all, the impact of
                                    the program on the economy.



                                </p>

                                <p>
                                    In Uganda’s case, the number of people who have accessed money
                                    out of government poverty eradication programs is regularly
                                    obfuscated by the callous spectre of corruption. The programs
                                    are usually tainted by political prejudice, especially against
                                    those who do not support the government. In September 2021,
                                    members of parliament presented reports on the floor of
                                    parliament about their findings on the implementation of the
                                    <i>Emyooga</i> program and a bipartisan consensus was reached
                                    that the
                                    program was poorly implemented. Parliamentarians reported that
                                    the SACCOs used for the program were hurriedly made with no
                                    shared vision except that of receiving money. Political
                                    interference turned out to be a challenge, with opposition
                                    supporters being denied access to the funds. And great
                                    difficulty ensued involving the access of funds by women.
                                    Lastly, the funds were embezzled along the distribution chain.
                                    The same fate befell the Youth Livelihood Program in which
                                    billions of shillings were put to waste.



                                </p>

                                <p>
                                    In contrast with the political façade in Uganda, Brazil has one
                                    of the world’s most successful poverty eradication programs.
                                    Meticulously planned to have an enduring impact on the
                                    population, the <i>Bolsa Familia</i> program was designed to
                                    achieve
                                    both short-term and long-term progress in the area of poverty
                                    eradication while addressing social bottlenecks. Under the
                                    program, families receive periodic direct cash transfers from
                                    the government upon fulfilment of specific conditions set by the
                                    government. Some of the conditions to be fulfilled include;
                                    sending children to school, having them vaccinated, mandatory
                                    attendance of prenatal check-ups for pregnant women among
                                    others. The beneficiaries of this program are well documented
                                    and are issued with a subscription card on which their
                                    performance under the program can be tracked. By 2015, the
                                    <i>Bolsa
                                        Familia</i> program accounted for more than 14% poverty
                                    reduction in
                                    Brazil. Further, the program is strategically implemented to
                                    target female-headed households, which are usually most affected
                                    by poverty. This would reduce domestic violence levels since
                                    women would be more capable of leaving abusive relationships.
                                    This program exemplifies a government’s resolve to genuinely
                                    tackle the poverty problem in a systematic approach that
                                    incentives the public to engage in activities they would have
                                    otherwise not taken upon. The success of the program is solely
                                    based on the central principle that the government alone cannot
                                    attempt to eradicate poverty without ensuring that public
                                    efforts are geared in the right direction. The cash transfer
                                    acts as a motivating factor to get the population to direct
                                    efforts in nationally prioritised activities or sectors. This
                                    can be contrasted to Uganda where the government gives people
                                    money, and they choose whether to use it for the intended
                                    purpose or to misappropriate it.



                                </p>

                                <p>
                                    Before the country can comprehend the post-mortem report of the
                                    <i>Emyooga</i> program, which according to members of parliament
                                    from
                                    both sides of the aisle, died from chronic corruption,
                                    miscalculation and political gerrymandering, the government is
                                    already rolling out a replica of the dead program. While it may
                                    seem logical that government pauses to reflect on a better
                                    program and perhaps assess the impact of the previous programs,
                                    a new program is already generating debate. A substantial number
                                    of Ugandans are eager to know the details of the program so that
                                    they can strategically position themselves to partake from the
                                    government handout. From a political perspective, the government
                                    is right to give its people paucity of their revenue
                                    <i>(Entadikwa)</i>
                                    which the people can use as they see fit. This way, the
                                    government gives people a taste of “government money”, and maybe
                                    some may even look favourably upon them when the opportune time
                                    comes. Economic pundits can write a thesis about it if they
                                    disagree, but this way, everyone wins.


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
                                            <textarea name="comment" class="form-control"
                                                placeholder="Your Comment*" required></textarea>
                                        </div>
                                    </div>



                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                        <!-- End blog comments -->
                        
                         <div class="blog-comments">

                            <h4 class="comments-count">1 Comment</h4>

                            <div id="comment-1" class="comment">
                                <div class="d-flex">
                                    <div class="comment-img"><img
                                            src="assets/img/blog/comments-1.jpg" alt=""></div>
                                    <div>
                                        <h5><a href="">Birungi Mukalere Samuel</a> <a href="#"
                                                class="reply d-none"><i
                                                    class="bi bi-reply-fill"></i> Reply</a></h5>
                                        <time datetime="2020-01-01">10 Mar, 2022</time>
                                        <p>
                                            Great observations.
                                        </p>
                                    </div>
                                </div>
                            </div><!-- End comment #1 -->

                        </div><!-- End blog comments -->

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
