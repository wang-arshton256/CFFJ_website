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
                        <li>THE SILENT
                            MUTINY</li>
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

                            <div class="entry-img">
                                <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
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
                                            LINCOLN</a>
                                    </li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-clock"></i> <a
                                            href="{{ url('silentmutiny') }}"><time datetime="2020-01-01">Feb
                                                9, 2022</time></a></li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-chat-dots"></i> <a
                                            href="{{ url('silentmutiny') }}">0 Comments</a></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    At the height of terror attacks in Uganda towards the end of
                                    2021, the commander-in-chief informed the country that the
                                    Allied Democratic Forces (ADF) were the masterminds of the
                                    bombings that left some dead and scores injured. Following this
                                    revelation, the Uganda Peoples’ Defence Forces (UPDF)
                                    clandestinely entered the Democratic Republic of Congo (DRC) and
                                    launched what later came to be known as Operation Shuja which to
                                    date is still in its infant stages. The operation is a joint
                                    military campaign between the UPDF and the Armed Forces of the
                                    Democratic Republic of Congo whose aim is to vanquish the ADF
                                    which would be a significant milestone in the war on terrorism
                                    in East Africa. One would argue that this is a war of necessity,
                                    one that the two countries must take on given their previous
                                    taste of the bitter cup of bloodshed served by the ADF.
                                    Notwithstanding the legitimacy of the operation, it has
                                    understandably generated considerable debate in Uganda, DRC and
                                    the international community specifically regarding the UPDF’s
                                    involvement in the campaign. Among the concerns raised by the
                                    international community include the unspecified period of the
                                    operation (given that the UPDF is on foreign soil), the possible
                                    misconduct of the UPDF (given its unpleasant past in DRC) and
                                    the prospects of success.


                                </p>
                                <p>
                                    In Uganda, the debate about Operation Shuja mainly concerns the
                                    fact that the operation was never authorized by parliament as
                                    section 39 of the UPDF Act stipulates, the 249.2 million daily
                                    expenditure to keep the operation running which has necessitated
                                    the ministry of defence to request a lofty 89.7 billion
                                    shillings cheque not to mention the recent video of a civilian
                                    journalist dressed in military fatigue appearing to be
                                    commanding the members of the armed force, a role that was
                                    assigned to his brother Major General Kayanja Muhanga. This
                                    well-founded public reservation about Operation Shuja is born of
                                    the noticeable occasional misconduct of the Ugandan military
                                    which is characterized by the recalcitrant conduct of the
                                    military to civilian authority and the pervasive arrogance of
                                    senior military officers exacerbated by a long history of
                                    military disregard for the law in Uganda. While the UPDF has
                                    proven to be more disciplined than the past militaries of the
                                    Republic of Uganda, it has become increasingly clear that such
                                    discipline is more emphasized among lower ranks and it fades the
                                    higher an officer grows in rank. Many high-ranking military
                                    officers exude a god-like sense of self-importance bolstered by
                                    deep-set impunity on account of their real or perceived military
                                    accomplishments. While this is a detestable public perception of
                                    our armed forces, there is a far more critical impact of the
                                    modus operandi of the UPDF on the rule of law, democracy and
                                    foreign image of Uganda as this article will show.

                                </p>

                                <blockquote>
                                    <p>
                                        "The deployment of the UPDF in DRC no matter how
                                        well-meaning and
                                        necessary is illegal by law for lack of parliamentary
                                        approval"
                                    </p>
                                </blockquote>

                                <p>
                                    One of the most important pillars of an enduring democracy is
                                    the subordination of the armed force to civilian rule and for
                                    every true democracy, this is out of the question. While article
                                    208 of the Ugandan Constitution is couched in mandatory terms
                                    that the UPDF shall be professional, disciplined and subordinate
                                    to civilian authority, the fulfilment of this constitutional
                                    aspiration is yet to be achieved. To begin with, the deployment
                                    of the UPDF in DRC no matter how well-meaning and necessary is
                                    illegal by law for lack of parliamentary approval. While some
                                    may argue that this deployment needed to be discreet to surprise
                                    the ADF, parliament should have been briefed as soon as the
                                    deployment was done. Lest we forget, the deployment of the UPDF
                                    in South Sudan in 2014 was done without the authority of
                                    parliament and the deployment of the UPDF in Zaire in 1999 was
                                    done with mere communication to parliament. This such a pattern
                                    of total disregard of parliament’s authority, it is safe to
                                    conclude that the UPDF command structure stands in utter
                                    contempt of civilian authority hence unwilling to fulfil the
                                    constitutional requirement.

                                </p>

                                <p>
                                    The cost of such unilateral decisions of the military to deploy
                                    our troops abroad has always come at a great human and financial
                                    cost to the people of Uganda. In the case of the 1999 deployment
                                    of the UPDF in Zaire, Uganda ended up with the vilifying lawsuit
                                    filed by DRC in the International Court of Justice (ICJ) for
                                    transgressing the sovereignty of DRC and the fact that high
                                    ranking military officers were found to have plundered natural
                                    resources in DRC. After the suit, Uganda was found liable and
                                    DRC later submitted a four billion-dollar request for
                                    reparations. The ICJ is set to deliver its ruling on this
                                    request on 9th February 2022. Should the ICJ order Uganda to pay
                                    the said reparation, it will be the ordinary taxpayer to bear
                                    the burden of the errant officers and their command structure
                                    that made the blunder. It is critical to note that none of the
                                    officers in the Zaire looting scandal was indicted for causing
                                    such a national embarrassment which today, could potentially be
                                    worth four billion dollars owed by the Ugandan taxpayer to DRC.
                                    This reparation order hanging over the heads of Ugandans coupled
                                    with the close to nine billion requested by the UPDF to finance
                                    Operation Shuja charged on a largely peasant economy that is yet
                                    to recover from the impact of COVID-19 will surely be bargain
                                    Ugandans did not sign up for. Had there been genuine oversight
                                    of the UPDF by parliament and an unquestionable subordination of
                                    the armed forces to civilian authority, there could perhaps have
                                    been a semblance of accountability in the Zaire operation.

                                </p>

                                <p>
                                    With such potentially overwhelming economic ramifications that
                                    may result from Operation Shuja, not to mention the human
                                    causalities that the UPDF will surely incur, there is a
                                    compelling need for parliament to assert its supervisory powers
                                    over the executive to ensure that the operation is well executed
                                    with the responsibility and professionalism it deserves. In the
                                    interim, the august house must stand bold and demand for a
                                    comprehensive report regarding Operation Shuja and to sternly
                                    monitor the execution of the operation lest Uganda incurs
                                    unnecessary expenditures like the case was in 1999. However, in
                                    the long run, the people of Uganda must demand greater
                                    accountability from the armed forces and recognize they are the
                                    ultimate benefactors of the UPDF and therefore must call for a
                                    military discipline that has no exception. The reluctance of
                                    stakeholders concerning the conduct of the UPDF will not only
                                    fuel the existing impunity of the force but also threaten what
                                    democratic achievements Uganda may have achieved in the past.
                                    This is especially critical in a time when militaries across the
                                    continent have proved to be more contemptuous to the tenets of
                                    democracy and have resorted to mutinies, coups and intimidation
                                    of leaders which has plunged several African countries into
                                    political chaos, leadership vacuums and economic sanctions all
                                    of which affect the ordinary citizen.

                                </p>

                                <p>
                                    Intil strict personal and collective accountability for excesses
                                    done by UPDF officers is enforced across the board, the
                                    stability of Uganda’s democracy and institutional independence
                                    will be in doubt not to mention the lofty bills that will
                                    continue to be cashed out of the taxpayers’ pocket to fund wars
                                    whose objective is not known and whose execution entangles
                                    Uganda in debt and foreign vilification. To this end, Ugandans
                                    can only hope that those in charge of this operation have learnt
                                    from the past and comprehend the enormity of the task before
                                    them and the stakes involved. It must be understood by all that
                                    this is a chance to right the wrongs done by the UPDF in 1999
                                    and to salvage Uganda’s image in the DRC and beyond. This can
                                    only be achieved by outrightly crashing the ADF and getting out
                                    of DRC as swiftly as possible so that the ghosts of the 1999
                                    Zaire campaign are put to rest.

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
