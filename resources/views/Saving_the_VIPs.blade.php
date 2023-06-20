
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
                        <li>Saving the VIP's</li>
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
                                <img src="assets/img/blog/savethevip.png" alt=""
                                    class="img-fluid" height="" width="800">
                            </div>


                            <p class="text-danger d-none"><i>Photo: courtesy of Africa-Uganda Travel
                                    Guide.com </i> </p>

                            <h2 class="entry-title">
                                <a href="{{ url('instability_in_Karamoja') }}">Saving the VIPs
                                    from a Wanting Health System



                                </a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-person"></i>
                                        <a href="{{ url('instability_in_Karamoja') }}">By



                                        </a>
                                    </li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-clock"></i>
                                        <a href="{{ url('A_Stich_In_Time') }}"><time
                                                datetime="2020-01-01">May 25, 2022</time></a>
                                    </li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-chat-dots"></i> <a
                                            href="{{ url('instability_in_Karamoja') }}">Views</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    On Sunday 20th March 2022, the president of Uganda broke the
                                    news of the untimely death of the Rt. Hon. Jacob Oulanya, the
                                    Speaker of the eleventh parliament of Uganda. Since his
                                    accession to the office of Speakership, the Rt. Hon. Oulanya had
                                    been in and out of the hospital and the Deputy Speaker of
                                    Parliament informed the house on 8th February 2022 that he had
                                    been flown out of the country for specialized treatment.
                                    Recently, it was revealed that a Uganda Airlines plane, Airbus
                                    A330-800 Neo, which has a sitting capacity of about 220 to 260,
                                    was chattered for five hundred thousand dollars to fly the
                                    speaker to Seattle, USA for treatment. The Chief Justice and
                                    Deputy speaker were facilitated to fly to the United States to
                                    check on the speaker with all expenses paid out of the national
                                    coffers. As we mourn for the charismatic and eloquent speaker of
                                    the august house, it is only imperative for us to ponder whether
                                    it is still prudent for Uganda to spend billions paying for
                                    medical treatment abroad while our hospitals are still in
                                    tatters.






                                </p>

                                </p>
                                <p>
                                    It is commonplace for government officials to seek treatment
                                    abroad at great debit to the national purse. The preference for
                                    treatment abroad is beyond political pomp. The reality that
                                    Uganda does not have the requisite medical equipment, medicines
                                    and hospitals to treat almost all grave and advanced illnesses
                                    behoves high ranking civil servants to seek treatment elsewhere
                                    at taxpayers’ expense. The wanting state of our health care
                                    system has brought death closer to the poor and necessitated
                                    haemorrhage of state funds to save the lives of the
                                    all-important government dignitaries. For the vast majority of
                                    Ugandans, illnesses like cancer and heart disease are considered
                                    a death sentence owing to the high cost of treatment required
                                    for one to obtain specialized treatment.




                                </p>

                                <blockquote class="d-none">
                                    <p>
                                        "Studies show that the majority of Ugandan trained doctors
                                        work abroad because of the meagre and often delayed payment,
                                        lack of adequate working equipment exacerbated by long
                                        working hours."
                                    </p>
                                </blockquote>

                                <p>
                                    Uganda’s health budget is somewhere below 7% of the total
                                    national budget, a very insignificant proportion for a
                                    capital-intensive sector like health. The national hospital bed
                                    density is 0.5 beds per 1000 persons. A number far too low for
                                    the forty-three million Ugandans. This explains the high number
                                    of patients sleeping in the hallways of government hospitals,
                                    with some removed from hospital beds because they cannot afford
                                    a bed fee. Many government health centres still suffer leaking
                                    roofs, shortage of drugs, congestion, lack of medical safety
                                    equipment for doctors and understaffing–especially those under
                                    poor management. Studies show that the majority of Ugandan
                                    trained doctors work abroad because of the meagre and often
                                    delayed payment, lack of adequate working equipment exacerbated
                                    by long working hours. The state of Uganda’s health sector has
                                    encouraged private players to join the sector and dictate the
                                    cost of treatment to a magnitude that excludes the poor majority
                                    of Ugandans. During the surge of the COVID-19 pandemic, families
                                    had to pay millions of shillings daily lest their patients were
                                    left to die owing to the high demand for medical services.





                                </p>

                                <p>
                                    The state of Uganda’s health system has also lately been struck
                                    by the atrocious business of illegal organ trade. Credible
                                    reports have it that illegal organ traders have infiltrated
                                    hospitals to facilitate the unauthorized extraction of human
                                    organs for sale. The troubles bedevilling our health system are
                                    sometimes downplayed and often ignored, a typical reaction in a
                                    country with a proclivity of ignoring important matters. Grim as
                                    the picture of our health sector stands projected for the world
                                    to see and Ugandans to suffer its flaws, the solution is not as
                                    complex as many would want us to believe. It is first and
                                    foremost the government’s repossession of the health sector.
                                    Complete and total monitoring coupled with real investment in
                                    the life-saving infrastructure and better working pay for our
                                    medical personnel will do for the start. The health sector, just
                                    like the defence and education sectors, the health sector must
                                    be under stern monitoring and direction of the government, with
                                    the government providing a significant part of the services. It
                                    is foolhardy for these sectors to be left to the whims of
                                    private players, given their profound impact on the country. Any
                                    government that is lukewarm about controlling these sectors
                                    creates fundamental problems for the country.



                                </p>

                                <p>
                                    The Government should earmark health facilities for construction
                                    every financial year the same way it earmarks roads to be
                                    constructed or upgraded. With sufficient hospitals in different
                                    parts of the country and the construction of more national
                                    referral hospitals, to increase the capacity of the industry the
                                    serve the country and counter private control of the sector. If
                                    Uganda’s political nobility want a hospital of their own, a
                                    befitting facility can be constructed so that they are treated
                                    here. This will save the hundreds of millions spent on
                                    travelling abroad, attract foreigners to receive treatment here
                                    and financially capable citizens will also have their costs
                                    reduced not to mention the income generated by the government
                                    for the treatment.

                                </p>

                                <p>
                                    The COVID-19 pandemic has should have been an aide-memoire for
                                    constructing a self-reliant health sector. When countries closed
                                    their doors to all those beyond their borders, every country had
                                    to rely on its health system. Uganda is among the countries that
                                    managed to register relatively low numbers of COVID-19 patients,
                                    but the facilities could support even the few that were
                                    hospitalized. A key highlight of the pandemic was when the
                                    vaccine was developed. Manufacturing companies withheld vaccines
                                    from African countries for many months even when African
                                    countries were willing to buy them. In a logical world, we would
                                    see a significant improvement in medical research through the
                                    construction of modern medical laboratories, training of
                                    researchers and purchase of equipment. But in a country where
                                    the luxury of a few is more plausible than national progress,
                                    the peasants must pay for the comfort of those whose life is
                                    more important.



                                </p>

                                <p>The obvious peril of relying on foreign health systems is that
                                    those who cannot afford the luxury of travelling abroad and
                                    paying the high costs are forced to receive mediocre treatment
                                    at best. This does not justify the continued payment of taxes by
                                    people who live on the bare minimum of health services. I hope
                                    the protagonists of our policy-making bodies can be moved to
                                    make a difference in the lives of so many who pay so much to see
                                    them live a more honourable life.





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
