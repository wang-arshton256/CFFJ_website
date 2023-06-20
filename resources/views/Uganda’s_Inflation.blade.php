
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
                        <li>Uganda's Inflation</li>
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
                                <img src="assets/img/blog/uganda's inflation.png" alt=""
                                    class="img-fluid" height="" width="800">
                            </div>


                            <p class="text-danger"><i>Photo: Courtesy of ceo.co.ug
                                </i> </p>

                            <h2 class="entry-title">
                                <a href="{{ url('The_Need_for_Climate') }}">Uganda’s Inflation
                                    and the Russo-Ukrainian War






                                </a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-person"></i>
                                        <a href="{{ url('The_Need_for_Climate') }}">By Paul
                                            Lincoln Kalema




                                        </a>
                                    </li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-clock"></i>
                                        <a href="{{ url('A_Stich_In_Time') }}"><time
                                                datetime="2020-01-01">June 13, 2022</time></a>
                                    </li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-chat-dots"></i> <a
                                            href="{{ url('need_for_mental_health') }}">Views</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    For months, fuel prices have been rapidly increasing, dragging
                                    the cost of essential commodities through the roof. The
                                    inflation sent shock waves into the economy, with families
                                    cutting their expenditures and thousands of people surviving
                                    through improvisation. Manufacturers have steadily increased the
                                    prices of their commodities to retain their profit. In
                                    anticipation of the State of the Nation’s Address, Ugandans were
                                    eager to see measures the President had prepared to curb this
                                    inflation.


                                </p>


                                <p>
                                    In his speech, the President rightly attributed the cause of the
                                    high fuel prices to the Russo-Ukrainian war, which led to a
                                    shortage of oil on the international market, thereby leading to
                                    high fuel prices. However, regarding his solutions, His
                                    Excellency said he would not reduce taxes but would instead
                                    engage international actors causing the fuel shortage. He also
                                    expressed his faith in the meeting the President of the United
                                    States, H.E. Joe Biden, was scheduled to have with the crown
                                    prince of Saudi Arabia to persuade him to increase his fuel
                                    supply. The Head of State told Ugandans that reducing taxes was
                                    a trap because there are many road projects to be worked on
                                    which would not be embarked on if taxes were reduced. Still, in
                                    his speech, the President pointed to the many opportunities that
                                    lie in other countries that urgently need commodities like
                                    chicken and sugar, which are bountiful in Uganda.



                                </p>

                                <blockquote class="">
                                    <p>
                                        "To cover Russia’s oil export gap, the OPEC countries would have to export much more oil than they have, and even if they had the required capacity, they would not allow more oil in circulation because they are currently minting higher revenues."
                                    </p>
                                </blockquote>

                                <p>
                                    To cover Russia’s oil export gap, the OPEC countries would have
                                    to export much more oil than they have, and even if they had the
                                    required capacity, they would not allow more oil in circulation
                                    because they are currently minting higher revenues.






                                </p>

                                <p>
                                    This kind of rhetoric begs the question, “what is the role of
                                    our government if we are to look elsewhere for solutions to this
                                    crisis?” The high fuel prices are precipitated by the
                                    sanctioning of Russia by the United States and other European
                                    Countries. Russia is the world’s second-highest producer of
                                    crude oil and gas, so a global oil shortage was inevitable. For
                                    a land-locked country like Uganda, fuel reserves that can take
                                    the country for a reasonable period had to have been put in
                                    place many years ago since the price of virtually every
                                    commodity in Uganda depends on the fuel price. But this was
                                    never a priority. The higher the cost of fuel, the more
                                    expensive the production of commodities. This has led to
                                    cost-push inflation.







                                </p>

                                <p>
                                    Cost-push inflation occurs when the aggregate demand remains
                                    unchanged, but aggregate supply falls due to exogenous causes
                                    like the Russo-Ukrainian war in this case. The increased cost of
                                    production of commodities in Uganda has lowered production
                                    levels amidst the same level of demand. This accounts for the
                                    higher commodity prices. The immediate solution to this kind of
                                    inflation is for government to reduce the cost of production
                                    through tax reduction, offering subsidies to production firms
                                    and setting a price ceiling for essential commodities.


                                </p>

                                <p>
                                    The President, however, said tax reductions would be suicidal
                                    because ongoing road projects need funding. However, upon
                                    implementing the solutions above, the government could embark on
                                    austerity measures of reallocating money from the less essential
                                    expenditures to funds for road construction.



                                </p>


                                <p>Even if this was not possible, the situation as it is today
                                    reflects economic instability and stifles investment. Many small
                                    and medium ventures are struggling, if not collapsing. There is
                                    a need to save the country from suffering preventable economic
                                    pains, especially after COVID-19 has already constricted the
                                    economy. In the interim, it is more important to cushion the
                                    business sector from the adversity of the global fuel crisis
                                    than inject resources into medium-term or long-term ventures
                                    like road construction. The economic machinery of the country
                                    must at all times function to cause improvement in standards of
                                    living at all times. There is no way this can be ensured when
                                    abnormal commodity prices persist in such a land-locked and
                                    poverty-stricken country.
                                </p>
                                <p>Recently, the Bank of Uganda released its Financial Capability
                                    Survey Report, which indicated that of the 22.8 million working
                                    Ugandans, only 1% earn more than one million shillings ($268),
                                    while an astounding 49.2% earn less than 150,000/= ($40). This
                                    information clearly illustrates the dire economic conditions
                                    that most Ugandans face daily. And one can imagine how this
                                    inflation worsens the already fragile status of the average
                                    Ugandan.
                                </p>
                                <P>OPEC countries are currently minting money from the global oil
                                    shortage and would want to maintain the high revenues flowing
                                    in. It is also difficult for Saudi Arabia or OPEC to fill the
                                    gap created by the sanctions imposed on Russia. As of December
                                    2021, Russia exported 7.8 million barrels of oil products a day.
                                    To cover Russia’s oil export gap, the OPEC countries would have
                                    to export much more oil than they have, and even if they had the
                                    required capacity, they would not allow more oil in circulation
                                    because they are currently minting higher revenues.
                                </P>
                                <p>At present, Uganda is likely headed for a long stretch of
                                    economic hardship, which, if not decisively dealt with, will
                                    have a lasting negative impact on the economy and push more
                                    families into poverty. There is a need for the government to
                                    engineer internal solutions rather than look to the mercy and
                                    goodwill of other nations. The many economic opportunities cited
                                    by the President can only be pursued by an economically thriving
                                    populace, not one that has been subdued by the prevailing
                                    crisis. The good news is that the matter is not fait accompli,
                                    and the government still has a chance to salvage the situation.
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

                            <h4 class="comments-count">Views</h4>

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
