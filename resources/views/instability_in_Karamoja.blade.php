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
                                    <li><a href="{{ url('opinionbank') }}">Opinion Bank</a></li>
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
                        <li>Instability in Karamoja</li>
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
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-person"></i>
                                        <a href="{{ url('instability_in_Karamoja') }}">By
                                            KALEMA PAUL
                                            LINCOLN


                                        </a>
                                    </li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-clock"></i>
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
                                    The Karamoja subregion in Uganda has long been known for
                                    insecurity, severe poverty, hunger, disease, and general
                                    backwardness. This north-eastern part of the country has been
                                    the typical example of underdevelopment, notwithstanding its
                                    vast resource potential. The sub-region has a wide expanse of
                                    land, and mineral deposits augmented by a considerable
                                    likelihood of the presence of oil deposits. Notwithstanding
                                    these resources, the region remains backwards, with little
                                    development. Current reports from the area speak to the surge in
                                    cattle rustling, clashes between cattle rustlers and government
                                    forces, and loss of lives. The locals have accused government
                                    forces of killing innocents, failing to protect their cows from
                                    rustlers despite the heavy deployment, and failing to hand over
                                    cattle recovered from rustlers to rightful owners. To comprehend
                                    the situation in Karamoja, one must look at the origin of the
                                    insecurity in the region so that tranquillity can prevail in the
                                    long-troubled area.



                                </p>
                                <p>
                                    The people in the Karamoja sub-region are nomadic pastoralists,
                                    and the number of cattle one has determines their status in
                                    society. The culture of these people is so dependent on cattle
                                    that dowry goes way higher than one hundred heads of cattle for
                                    a bride. Historically the Karamojong, Pokot and Turkana tribes
                                    have always carried out cattle raids against each other, and
                                    these attacks have always been bloody. For decades, the Turkana
                                    from Kenya had the upper hand in the cattle raids due to their
                                    possession of guns, while the tribes in Uganda used spears, bows
                                    and arrows to defend themselves and raid cattle. For the
                                    northeastern tribes, “opportunity” presented itself in 1979 when
                                    Idi Amin’s government fell and the soldiers abandoned the Moroto
                                    barracks leaving over twelve thousand guns in the armoury. The
                                    locals looted the guns and used them to defend their cattle and
                                    make raids on each other and against the Turkana. The
                                    instability in Southern Sudan also created an avenue for
                                    obtaining more guns in the years that followed. And so the
                                    battle for cattle raged.




                                </p>

                                <blockquote class="d-none">
                                    <p>
                                        "Block Quote"
                                    </p>
                                </blockquote>

                                <p>
                                    In 1987, The Karamoja Development Agency was created with the
                                    duty to supervise general transformation and bring about rapid
                                    economic & social development in the region. In addition, it was
                                    to provide sufficient water and promote increased productivity
                                    in the area. In 2001, the government of Uganda launched a
                                    disarmament program where thousands of guns were recovered from
                                    the region. While it is evident that not all people were
                                    disarmed, relative peace was restored in the region by 2010. But
                                    intermittent cattle raids persisted, and long-lasting peace was
                                    far from reach. It is important to investigate why this is so.
                                    The strategy of pacifying Karamoja has had flaws right from the
                                    start, and this is why we have not registered meaningful
                                    progress in the region for decades. Deeply rooted factors
                                    usually occasion conflict and instability. They can not be
                                    stamped out by simply overpowering the conflicting parties as
                                    this only postpones the problems and only creates short episodes
                                    of peace.



                                </p>

                                <p>
                                    Given all this, Karamoja still suffers a deep-rooted culture of
                                    warrior pastoralism, a proliferation of guns, cross-border
                                    insecurity, poverty and ineffectiveness of government programs.
                                    When the government conducted the disarmament program, emphasis
                                    was placed on persuading the community to hand over their arms
                                    and defeating those who refused. After the disarmament exercise,
                                    a chance to end this cycle of violence presented itself but was
                                    not seized by the government. The government could have engaged
                                    traditional leaders in the area to introduce programs to teach
                                    the former nomadic warriors how to live productive and settled
                                    lives. Concepts like cross-breeding, commercial livestock
                                    rearing, market economy, demand for milk and beef could have
                                    been introduced then. However, no such action was taken, leaving
                                    the nomadic pastoralists with their warrior mentality.



                                </p>

                                <p>
                                    Furthermore, the disarmament of the people in Karamoja was not
                                    met with equal disarmament efforts of their nomadic counterparts
                                    in Kenya. The Karamojong, Turkana and Pokot in Kenya continued
                                    to raid cattle from the Karamoja sub-region, taking advantage of
                                    the disarmed pastoralists in Uganda. This reality drove the
                                    nomads on the Ugandan side to also acquire arms from the black
                                    market to defend their cattle. Another shortfall in the Karamoja
                                    question was the absence of a strong and well-coordinated
                                    security apparatus in the Karamoja sub-region to protect them
                                    from cattle raiders across from the border. This still stands
                                    out as one of the major causes of insecurity in the region.
                                    Further, the prevalence of acute poverty in the sub-region makes
                                    it easier for the people in the region to return to the old ways
                                    of nomadism and cattle rustling. This poverty, coupled with the
                                    warrior culture that regards cattle as the main source of wealth
                                    and pride is what forces the people in this sub-region to resort
                                    to cattle rustling. The cattle-keeping culture can be used to
                                    assist these people to generate wealth through applying more
                                    technologically advanced ways of rearing cattle.


                                </p>

                                <p>
                                    As we speak, the people in the Karamoja sub-region are decrying
                                    the excessive use of force by the UPDF and its failure to return
                                    their cattle recovered from the cattle rustlers. The UPDF has
                                    been ranked among the most disciplined force on the continent
                                    but at home, it is known for its brutality to civilians–a
                                    perception that has only grown in the past few years. Our armed
                                    forces must understand that the existence of conflict within
                                    Uganda does not necessitate untamed violence, nor does it
                                    warrant the misappropriation of people’s property. While the
                                    situation in the sub-region requires a partly militaristic
                                    solution, it is a social problem that needs social solutions and
                                    not war tactics. The UPDF should be a force that helps victims
                                    of cattle rustling recover their cows and feel secure in their
                                    lands. This must be a deliberate effort to make friendly contact
                                    with the people in the area. The absence of friendly contact
                                    with the people in the area and an assault of innocents by the
                                    military risks making any future efforts to pacify the Karamoja
                                    communities futile. This is partly because the people have
                                    become suspicious of government intentions in the region. It is
                                    now more difficult for people in Karamoja to accept the idea of
                                    abandoning rudimentary practices when they do not trust the
                                    government which killed their people and took their cattle.



                                </p>

                                <p>As it stands, there is a need for a calmer and more strategic
                                    response to the insecurity in the Karamoja sub-region. I hope
                                    the government can pursue more effective methods to bring peace
                                    to a region that has long suffered insecurity.




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
