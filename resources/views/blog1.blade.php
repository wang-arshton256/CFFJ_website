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
                            
                                 <!--blog entry-->
                                
                             
                             <article class="entry">

                        <div class="entry-img  pt-5 px-5">
                            <img src="assets/img/blog/insecurity in karamoja.png" alt=""
                                class="img-fluid" height="" width="800">
                        </div>

                        <p><i>Photo: courtesy of Pinterest </i> </p>

                        <h2 class="entry-title">
                            <a href="{{ url('instability_in_Karamoja') }}">The Origins and
                                Solutions of Instability in Karamoja




                            </a>
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i>
                                    <a href="{{ url('instability_in_Karamoja') }}">By
                                        KALEMA PAUL
                                        LINCOLN


                                    </a>
                                </li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i>
                                    <a href="{{ url('A_Stich_In_Time') }}"><time
                                            datetime="2020-01-01">April 19, 2022</time></a>
                                </li>
                                <li class="d-flex align-items-center"><i
                                        class="bi bi-chat-dots"></i> <a
                                        href="{{ url('instability_in_Karamoja') }}">0
                                        Comments</a>
                                </li>
                            </ul>
                        </div>

                        <div class="entry-content">
                            <p>
                                The Karamoja subregion in Uganda has long been known for insecurity,
                                severe poverty, hunger, disease, and general backwardness. This
                                north-eastern part of the country has been the typical example of
                                underdevelopment, notwithstanding its vast resource potential. The
                                sub-region has a wide expanse of land, and mineral deposits
                                augmented by a considerable likelihood of the presence of oil
                                deposits. Notwithstanding these resources, the region remains
                                backwards, with little development. Current reports from
                            </p>



                            <div class="read-more">
                                <a href="{{ url('instability_in_Karamoja') }}">Read
                                    More</a>
                            </div>
                        </div>

                    </article>
                    
                    
                        <article class="entry">

                            <div class="entry-img  pt-5 px-5">
                                <img src="assets/img/blog/mobility.jpg" alt=""
                                    class="img-fluid" height="" width="800">
                            </div>

                            <p class="d-none"><i>Photo: courtesy of Daily Monitor </i> </p>

                            <h2 class="entry-title">
                                <a href="{{ url('enhancing_mobility') }}">Enhancing mobility in
                                    rural communities in Uganda with bicycles.


                                </a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-person"></i> <a
                                            href="{{ url('enhancing_mobility') }}">By
                                            Cynthia Mbabazi


                                        </a></li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-clock"></i> <a
                                            href="{{ url('A_Stich_In_Time') }}"><time
                                                datetime="2020-01-01">April 12, 2022</time></a></li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-chat-dots"></i> <a
                                            href="{{ url('enhancing_mobility') }}">0
                                            Comments</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    While conducting research in Lira, Northern Uganda, last
                                    month,
                                    we came across a young girl, about 11 years, in the
                                    morning who
                                    had fainted along the road from walking a long distance
                                    to
                                    school. As we rushed her back to her home, the father
                                    shared
                                    that she had left for school fine after doing house
                                    chores and
                                    the health facility was too far to take the young girl
                                    as she
                                    was vomiting. Fortunately, we had moved with some
                                </p>



                                <div class="read-more">
                                    <a href="{{ url('enhancing_mobility') }}">Read
                                        More</a>
                                </div>
                            </div>

                        </article>
                            
                            
                             <!--blog entry-->
                        <article class="entry">

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
                                            href="ugandanfuel{{ url('ugandanfuel') }}">By
                                            KALEMA PAUL
                                            LINCOLN


                                        </a></li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-clock"></i> <a
                                            href="{{ url('ugandanfuel') }}"><time
                                                datetime="2020-01-01">April 12, 2022</time></a></li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-chat-dots"></i> <a
                                            href="{{ url('ugandanfuel') }}">0
                                            Comments</a>
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
                                    and the people of
                                </p>



                                <div class="read-more">
                                    <a href="{{ url('ugandanfuel') }}">Read
                                        More</a>
                                </div>
                            </div>

                        </article>
                        
                        <!-- End blog entry -->
                        
                        
                        <!--blog entry-->
                        <article class="entry">

                            <div class="entry-img  pt-5 px-5">
                                <img src="assets/img/blog/grief _in_politics.png" alt=""
                                    class="img-fluid" height="" width="800">
                            </div>

                            <p><i>Photo: courtesy of Daily Monitor </i> </p>

                            <h2 class="entry-title">
                                <a href="{{ url('Grief_and_The_Politics_of_Ethnicity') }}">Grief
                                    and The Politics of
                                    Ethnicity


                                </a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-person"></i> <a
                                            href="{{ url('Grief_and_The_Politics_of_Ethnicity') }}">By
                                            KALEMA PAUL
                                            LINCOLN


                                        </a></li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-clock"></i> <a
                                            href="{{ url('A_Stich_In_Time') }}"><time
                                                datetime="2020-01-01">March
                                                30, 2022</time></a></li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-chat-dots"></i> <a
                                            href="{{ url('Grief_and_The_Politics_of_Ethnicity') }}">0
                                            Comments</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    The demise of the Rt. Hon Jacob Oulanya took the country by
                                    storm. The vibrant legislator and speaker of the eleventh
                                    parliament was a man of vigour, charisma and generosity, which
                                    explains his favour across the country. His death sent shock
                                    waves to those who knew him, and bereavement obfuscated reason,
                                    exposing the deeply rooted tribal entitlements and perverted
                                    spirit of ethnic divisiveness. It all began with the bold
                                    bigotry of the Acholi parliamentary forum’s demand that the next
                                    speaker and deputy speaker come from northern Uganda or be
                                    Acholi. For the most part, this vilifying demand was also
                                    happens to be
                                </p>



                                <div class="read-more">
                                    <a href="{{ url('Grief_and_The_Politics_of_Ethnicity') }}">Read
                                        More</a>
                                </div>
                            </div>

                        </article>

                        <!-- End blog entry -->

                        <!--blog entry-->
                        <article class="entry">

                            <div class="entry-img  pt-5 px-5">
                                <img src="assets/img/blog/nssf.png" alt="" class="img-fluid"
                                    height="" width="800">
                            </div>

                            <p class="d-none"><i>The photo is a courtesy of </i> </p>

                            <h2 class="entry-title">
                                <a href="{{ url('A_Stich_In_Time') }}">A Stitch In
                                    Time: The Case of NSSF Mid-term Access


                                </a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-person"></i> <a
                                            href="{{ url('A_Stich_In_Time') }}">By
                                            KALEMA PAUL
                                            LINCOLN


                                        </a></li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-clock"></i> <a
                                            href="{{ url('A_Stich_In_Time') }}"><time
                                                datetime="2020-01-01">March
                                                18, 2022</time></a></li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-chat-dots"></i> <a
                                            href="{{ url('A_Stich_In_Time') }}">0
                                            Comments</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    Over the previous weeks, the nation has had its eyes glued to
                                    the National Social Security Fund (NSSF) and the Ministry of
                                    Gender, Labour and Social Development, seeking to understand the
                                    criterion of accessing mid-term savings. This comes after the
                                    NSSF (Amendment) Act 2021 came into force on 4th January 2022.
                                    The Amendment made a host of changes in the operation of the
                                    NSSF, including changes in the board's constitution to provide
                                    for mandatory and voluntary contributions, mid-term access of
                                    savings, and other matters. The amendment as a whole is landmark
                                    legislation that streamlines the functioning of the NSSF

                                </p>



                                <div class="read-more">
                                    <a href="{{ url('A_Stich_In_Time') }}">Read
                                        More</a>
                                </div>
                            </div>

                        </article>

                        <!-- End blog entry -->

                        <!--blog entry-->
                        <article class="entry">

                            <div class="entry-img  pt-5 px-5">
                                <img src="assets/img/blog/In_pursuit.png" alt=""
                                    class="img-fluid" height="" width="800">
                            </div>

                            <p><i>The photo is a courtesy of eagle.co.ug</i> </p>

                            <h2 class="entry-title">
                                <a href="{{ url('In_Pursuit_Of_Opportunity') }}">In Pursuit Of
                                    Opportunity:
                                    The Undertones of Uganda’s Labour Export


                                </a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-person"></i> <a
                                            href="{{ url('In_Pursuit_Of_Opportunity') }}">By
                                            KALEMA PAUL
                                            LINCOLN


                                        </a></li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-clock"></i> <a
                                            href="{{ url('In_Pursuit_Of_Opportunity') }}"><time
                                                datetime="2020-01-01">March
                                                14, 2022</time></a></li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-chat-dots"></i> <a
                                            href="{{ url('In_Pursuit_Of_Opportunity') }}">0
                                            Comments</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    The plight of Ugandans shipped to the Middle East has
                                    intermittently been in the news for several years now. The most
                                    common headlines on the subject are Ugandans being tortured by
                                    their employers abroad, having their pay withheld by recruiting
                                    agencies, dying from lack of treatment and bodies rarely
                                    repatriated home. The most recent case regarding the subject was
                                    that of Ms Judith Nakintu. A company recruited her to work as a
                                    housemaid abroad only to have her kidney extracted without her
                                    consent and later abandoned by the recruiting agency without the
                                    necessary treatment, resulting in permanent disfig.

                                </p>



                                <div class="read-more">
                                    <a href="{{ url('In_Pursuit_Of_Opportunity') }}">Read
                                        More</a>
                                </div>
                            </div>

                        </article>

                        <!-- End blog entry -->


                       <div class="blog-pagination">
                            <ul class="justify-content-center">
                                <li ><a href="{{ url('blog') }}">1</a></li>
                                <li class="active"><a href="{{ url('blog1') }}">2</a></li>
                                <li><a href="{{ url('blog2') }}">3</a></li>
                                <li ><a href="{{ url('blog3') }}">4</a></li>
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
                                            href="{{ url('blogs_business_category') }}">Business,Trade,Economics<span>(6)</span></a>
                                    </li>
                                    <li><a href="}">Family,
                                            Law <span>(8)</span></a>
                                    </li>
                                    <li><a
                                            href="{{ url('blog_development_category') }}">Development<span>(12)</span></a>
                                    </li>
                                    <li><a href="{{ url('blogs_climate') }}">Climate,
                                            Environment
                                            <span>(3)</span></a></li>




                                    <li><a href="">Hunger,
                                            Agriculture
                                            <span>(3)</span></a></li>

                                    <li><a href="">Religion
                                            <span>(2)</span></a></li>
                                    <li><a href="">COVID-19
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
