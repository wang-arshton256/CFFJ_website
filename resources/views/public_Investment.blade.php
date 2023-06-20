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
                        <li>Public Investment</li>
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


                            <h2 class="entry-title">
                                <a href="{{ url('Public_Investment') }}">Does Public Investment in Infrastructure contribute to economic growth in Uganda?  
                                </a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-person"></i>
                                        <a href="{{ url('Cynthiabio') }}"> By Cynthia
                                            Mbabazi


                                        </a>
                                    </li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-clock"></i>
                                        <a href="{{ url('teenage_pregnacies') }}"><time
                                                datetime="2020-01-01">July 6, 2022</time></a>
                                    </li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-chat-dots"></i> <a
                                            href="{{ url('Public_Investment') }}">0
                                            Comments</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                Public investment, particularly in infrastructure, plays a significant role in economic growth and is a critical part of the transition to a more sustainable and resilient world. A vast stock of infrastructure is believed to fuel economic growth by reducing the cost of production and transportation of goods and services, increasing the productivity of input factors, creating indirect positive externalities, and smoothing the business cycle. A deficient infrastructure stock depresses returns to private capital and lowers aggregate economic growth relative to its potential. Public investment in infrastructure remains critical in Uganda’s development trajectory as population expands and urbanization accelerates.





                                </p>
                                <p>
                                    Public investment in infrastructure refers to government spending on economic infrastructure such as construction of roads, dams, airports, railways, and the like, including social infrastructure such as schools, hospitals and prisons and purchase of plant, machinery and equipment. Economic growth refers to increase in the amount of goods and services produced in a country i.e., GDP growth. Uganda’s GDP growth has averaged at 6 percent in the past 35 years however the recent COVID pandemic and global supply chain challenges reduced economic growth to 3% in 2020. The share of total investment in GDP peaked at 31 percent in 2013 from a low of 6 percent in 1980. It has since consistently declined to 24 percent of GDP in 2020. Of the 34 trillion Shillings that were invested in 2020, 97 percent was invested in fixed domestic assets, i.e., infrastructure. Public sector contribution to infrastructure investment in 2020 was 24 percent which accounted for 6 percent of total GDP. 
                                </p>

                                
                                
                                <h5>
                                    <b>Figure 1: Economic growth trend in Uganda (1985 - 2020)</b>
                                </h5>
                                
                                
                                  <div class="entry-img  pt-5 px-5">
                                <img src="assets/img/blog/public_investment.png" alt=""
                                    class="img-fluid" height="" width="800">
                            </div>


                            <p class="text-danger"><i>Source: World Development Indicators (The World Bank, 2022) </u> </i>
                            </p>
                            
                            
                            <h5>
                                    <b>Figure 2: GDP and Public Investment in infrastructure (1985 - 2020)</b>
                                </h5>
                                
                                <div class="entry-img  pt-5 px-5">
                                <img src="assets/img/blog/public_investment2.png" alt=""
                                    class="img-fluid" height="" width="800">
                            </div>
                            
                            <p class="text-danger"><i>Source: World Development Indicators (The World Bank, 2022)</u> </i>
                            </p>
                            
                            

                                <p>
                                    Infrastructure is a key priority of the Ugandan Government. During the past few years, Uganda has planned an investment push intended to accelerate and sustain the high levels of economic growth and to spur transformation into a middle-income country. Infrastructure funding currently comprises about 32.8% of the Government’s total annual expenditure. Mandated by its National Development Plan (NDP), this strategy aims at addressing the binding constraints on growth, with the most significant of these being the country’s huge infrastructure deficit. 
                                </p>
                                
                                <blockquote class="">
                                    <p>
                                        "By improving public investment management and efficiency,
                                        Uganda can greatly increase her economic growth rate"
                                    </p>
                                </blockquote>

                                <p>
                                    In the past decade, total paved roads network as a percentage of total national roads more than doubled from 8 percent in 1986 to 21.1 percent (or 4,551 km) as of May 2018 and electricity generation capacity increased from 601MW in 2010 to 1839MW in 2020. Over the past 15–20 years, the road sector has experienced significant increases in prices of road construction and maintenance. The average construction cost for upgrading roads to paved standard with bituminous surface treatment during the FY2018/19 was UGX 3.1 billion per kilometre as compared to UGX 2.36 billion per kilometre in the previous year. The average cost of rehabilitation of the paved roads was UGX 1.8 billion per kilometre as compared to UGX 1.96 billion per kilometre for the previous year. The rising expenditure on infrastructure needs to be justified by the returns on investment in terms of contribution to economic growth. 
                                </p>
                                
                                <p>
                                    IMF examined the relationship between public investment, infrastructure quality, and economic growth on the basis of the broadest data set and found that increasing public investment efficiency could double the impact of that investment on growth. More specifically, a 1 percent of GDP increase in public investment, would increase output by just 0.3 percentage points of GDP in countries in the bottom efficiency quartile, but by 0.6 percent for countries in the top efficiency quartile. It was orated that public investment can serve as an important catalyst for economic growth, but the economic and social impact of public investment critically depends on its efficiency.
                                </p>

                                <p>
                                   Forecasts by the World Bank in 2016 showed that the Ugandan economy would grow at an average rate of about 6 percent into the medium term yet, if the country operated at a higher level of efficiency, this growth rate could increase to almost 10 percent per annum. Over the period of 2006 - 2016, for every dollar invested in Uganda’s capital infrastructure, only seven-tenth of a dollar was generated. This was far below countries that successfully underwent structural transformation. For example, every dollar invested in the development of the interstate highway network in the United States of America between 1954 and 2001, generated six dollars’ worth of economic activity . In other words, Uganda’s public investments fall short of generating the desired economic return. 
                                </p>

                               
                                <p>
                                    At a low level of efficiency, even very high levels of investment in the development of a country’s infrastructure stock could produce disappointing results. In other words, whatever the level of input, the degree of inefficiency prevents the investments from being converted into productive assets and hence achieving the overall objective of an accelerated rate of economic growth. Consequently, by improving public investment management and efficiency, Uganda can greatly increase her economic growth rate. 
                                </p>
                               
                                
                                <p><strong>References
                                    </strong></p>
                                <p><strong>Adam, C., Bevan, D., & Ohlenburg, T. (2014). <i>
                                            Public Investment and Growth in Uganda.</i>International Growth Centre.</strong>
                                </p>
                                <p><strong>Ansar A., Flyvbjerg B., Budzier A., & Lunn D.
                                        (2016). Does
                                        infrastructure investment lead to economic growth or
                                        economic
                                        fragility? Evidence from China. <i>Oxford Review of Economic
                                            Policy</i>, Volume 32, 360–390.</strong>
                                </p>
                                <p><strong>IMF. (2015a). <i>Making public investment more
                                            efficient</i>.
                                        International Monetary Fund.</strong>
                                </p>
                                <p><strong>IMF. (2015b, June 18). IMF Survey : <i>Closing
                                            Efficiency Gaps
                                            Means Big Gains for Public Investment</i>. Retrieved
                                        from
                                        www.imf.org:
                                        https://www.imf.org/en/News/Articles/2015/09/28/04/53/sonew061815a</strong>
                                </p>
                                <p><strong>
                                        Miller M., Mustapha S. (2016). <i>Public investment
                                            management:
                                            A public financial management introductory guide</i>.
                                        London: Overseas Development Institute.</strong>

                                </p>
                                <p><strong>National Planning Authority. (2020). <i>Third
                                            National
                                            Development Plan (NDPIII)</i> 2020/21 – 2024/25.
                                        Kampala:
                                        NPA.</strong>
                                </p>
                                <p><strong>The World bank. (2016). <i>Unleashing the power
                                            of public
                                            investment management</i>. World Bank Group.</strong>
                                </p>
                                <p><strong>The World Bank. (2020). <i>Digital solutions in a
                                            time of
                                            crisis</i>. . Washington: World Bank Group.</strong>
                                </p>
                                <p><strong>The World Bank. (2022, June 11). <i>The World
                                            Bank data bank</i>.
                                        Retrieved from World Development indicators:
                                        https://databank.worldbank.org/source/world-development-indicators</strong>
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

    @include('sys.footer.footer')
