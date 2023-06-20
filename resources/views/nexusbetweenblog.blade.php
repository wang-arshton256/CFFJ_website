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
                <a href="{{url ('/')}}"><img src="assets/img/cffjlogo.png" alt=""
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
                            <li><a href="{{ url('outreach') }}">Training, Outreach and Advocacy</a></li>
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

    <main id="main">

        <!-- ======= Blog Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center pt-3">
                    <h2>Blog</h2>

                    <ol>
                        <li><a href="{{url ('/')}}">Home</a></li>
                        <li><a href="{{url ('blog')}}">Blog</a></li>
                        <li>Nexus Between COVID-19, Food, Faith, And Politics</li>
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
                                <a href="nexusbetweenblog.html">Nexus Between COVID-19, Food, Faith,
                                    And Politics</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-person"></i> <a
                                            href="blog-single.html">By Frank Juuko and Jonathan
                                            Mwesigwa S.</a></li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-clock"></i> <a
                                            href="blog-single.html"><time datetime="2020-01-01">Aug
                                                01, 2021</time></a></li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-chat-dots"></i> <a
                                            href="blog-single.html">0 Comments</a></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    Relating the COVID-19 pandemic to food, faith, and politics may
                                    quite naturally appear to be a rather extraneous task for one to
                                    undertake, yet at the same time, the subject is a
                                    thought-provoking one requiring a fair degree of scrutiny,
                                    atleast—especially given the status quo in Uganda. This article,
                                    therefore, attempts to do just that. The unclouded truth is that
                                    the pandemic has affected and lasts to affect every sector of
                                    our economy.

                                </p>
                                <p>
                                    Worse, there are many cases—both reported and unreported—where
                                    the Standard Operating Procedures (SOPs) issued by the World
                                    Health Organisation (WHO) and customized by the Government of
                                    Uganda (GoU), plus the accompanying “lockdowns” are now the main
                                    instigators of its adverse nature.
                                </p>

                                <blockquote>
                                    <p>
                                        "Ugandans seem to be instantly highly alarmed by a crisis,
                                        and yet just moments later, are emboldened enough to make
                                        fun of it"
                                    </p>
                                </blockquote>

                                <p>
                                    Akin to Uganda, the COVID-19 crisis continues to worsen in
                                    various parts of the world. Several countries are now in a much
                                    more difficult position than before. They must re- strategize on
                                    how to best combat this deadly plague, while very much keeping
                                    in mind the possibility of new demands likely to unfold as their
                                    unique circumstances may necessitate. Here, for instance, is a
                                    sneak peek by The Economist of 8-14 May 2021 of the situation
                                    around the globe: India “registered its highest daily number of
                                    new infections, over 412,000, on May 5 th . Half the world’s
                                    daily reported cases now come from India, as well as a quarter
                                    of deaths.” In South-East Asia, “cases are also rising…with
                                    spikes in Cambodia, Laos, Malaysia and Thailand, as well as a
                                    handful of locally transmitted cases in Singapore, causing the
                                    city to restrict gatherings.”
                                </p>

                                <p>
                                    In the diplomatic world, some officials have, indeed, yielded to
                                    using ‘undiplomatic language&#39; to drive their points home.
                                    The Philippines’ foreign minister, Teodoro Locsin “issued a
                                    tweet asking China to ‘get the fuck out’ of waters claimed by
                                    both countries.”
                                </p>

                                <p>
                                    In the UK, “The entire Indian delegation to the G7 summit in
                                    London went into self-isolation when some of their team tested
                                    positive for covid-19.
                                </p>

                                <p>
                                    The meeting marked a return to face- to-face diplomacy, albeit
                                    with distancing measures in place.” In sports, “The Indian
                                    Premier League, the world’s biggest cricket tournament, was
                                    suspended after several players tested positive.”
                                </p>

                                <p>
                                    In North America, “Canada approved the Pfizer jab for
                                    12–15-year- olds, the first country to endorse a vaccine for
                                    children under 16”, and the US “is ready to do the same.”
                                    Additionally, in the US, “Connecticut, New Jersey, New York and
                                    Pennsylvania will end most limits on the number of people
                                    allowed in shops, offices and so on. Rules on face masks and
                                    distancing will remain, [and] as an incentive to increase the
                                    state’s vaccination rate, New Jersey is offering a free beer to
                                    anyone over 21 who gets the first jab in May[!]”
                                </p>

                                <p>
                                    Had it been simply that this crisis was momentary, perhaps a
                                    great majority of governments in the developing world would have
                                    played deaf to their citizens’ cries of panic, but thank God:
                                    spendthrift presidents, first ladies, ministers, local
                                    government officials and other public servants all
                                    cannot—however much they wish—escape the kind of constriction
                                    the virus has had and lasts to have on their livelihoods!
                                </p>

                                <p>
                                    Many in Uganda, for instance, are still obstinately greedy as
                                    they continue to salt away public funds—counting borrowed ones,
                                    too, and with inflated interest rates—for themselves. Be that as
                                    it may, the situation is yet to enable free outlay without
                                    raising eyebrows. So they are, in a way, “happily” stuck with
                                    stashes of cash, which otherwise would have significantly
                                    assisted in alleviating the situation for all of us, not least
                                    their families, friends and relations—through food supplies and
                                    other necessities of life. In times like these, what truly
                                    clarifies a higher devotion to (economic) materialism than to
                                    God, which Russel W. Belk in his 1985 work, Materialism: Trait
                                    Aspects of Living in the Material World theorizes to include:
                                    non-generosity (a reluctance to give or share possessions with
                                    others); envy (desire for others’ possessions); and, indeed,
                                    unavoidably, possessiveness (concern about the loss of
                                    possessions and a desire for the greater control of ownership)?


                                </p>

                                <p>
                                    Perhaps the “easiest” way to answer this question, and only in
                                    part, is to compare notes with many of Uganda’s “benefactors” in
                                    Europe and the United States, who for decades have been
                                    struggling, and in many ways continue to struggle in this area.
                                    Mary Eberstadt, according to one of her reviewers, “paints a
                                    provocative and powerful portrait” in her highly rated book, How
                                    the West Really Lost God (2014) “of the familial roots of
                                    contemporary secularization in” that part of the world hence the
                                    rather sharp “declines in [faith as demonstrated by low] church
                                    attendance [and individual piety] throughout Europe and the
                                    Americas…”
                                </p>

                                <p>
                                    The other feasible response, we think, necessitates examining
                                    the effect of (total) lockdowns as sanctioned by the regime on a
                                    cross-section of people, whose faith in God would probably have
                                    advanced greatly had it not been for the restrictions on
                                    “corporate and participatory worship…in an ordered and
                                    liturgical space,” not to mention the scarcity of venerable
                                    leadership by their prelates. But this is not without precedence
                                    in Uganda. Between 1953-55, for instance, several natives of the
                                    Buganda Kingdom—one of Uganda’s constituent parts—are reported
                                    to have quickly returned to their traditional religion, i.e.,
                                    the worship of ‘Lubaale’ given the leadership vacuum resulting
                                    from the exile of their beloved king, Kabaka Edward Frederick
                                    Mutesa II after a sharp disagreement with the then colonial
                                    admin. They very much anticipated Lubaale’s intervention in the
                                    matter. Never mind that in the 1870s, his great-grandfather,
                                    Kabaka Mutesa I had requested for Christian missionaries to
                                    inter alia evangelize his country. Well, Mutesa II triumphantly
                                    returned home but having to endure a subtle rebuke of his people
                                    by the then expatriate Bishop of Uganda, Leslie Wilfrid Brown.
                                    Given their country’s weak economy, Ugandans, in general,
                                    awfully remain exposed to the ravaging nature of the coronavirus
                                    in much the same way as other people, especially those in the
                                    developed world, who have had to endure the crudeness of its
                                    wrath rather infinitely.
                                </p>

                                <p>
                                    Yet quite remarkably Ugandans seem to be highly alarmed by the
                                    crisis instantly, and just moments later are emboldened enough
                                    to make fun of it. This appeal seems to be informed by something
                                    else altogether other than some filtrate of their religious
                                    beliefs, whatever their kind. Nor is it just that they are
                                    unaware of the status quo in the world’s superpowers, chiefly
                                    China and the US, as to tellingly compare and contrast their
                                    devastation to Uganda’s. Whatever the case might be, they can
                                    only observe the SOPs and “trust” what “their” government has to
                                    say about the vaccines, but only for so long.
                                </p>

                                <p>
                                    On the contrary, they seem to very much be yearning for a quick
                                    reversal of the various anti-corona virus policies regardless of
                                    the degree of acclaim or embarrassment to Mr Yoweri Kaguta
                                    Museveni’s regime.
                                </p>

                                <p>
                                    Schemes purportedly designed for them by the one man’s regime
                                    towards managing the present disaster are, in fact, pretty far
                                    from satisfactorily providing a conducive environment that
                                    would: guarantee their socio-economic welfare; foil their hunger
                                    and starvation, lessen crime-related risks in their communities
                                    tended to emerge from situations of hopelessness, let alone
                                    improve their already petite public confidence in their
                                    (mis)leaders.
                                </p>

                                <p>
                                    During the first wave of the contagion, for example, Ugandans
                                    were very much obliged to isolate themselves for nearly half a
                                    year. So, a great sum of “non-essential workers” amongst them
                                    had to abstain from work, and sadly, they could hardly earn a
                                    penny for their own fending as well as that of their dependents.
                                    Despite the overwhelming goodwill from given individuals, NGOs,
                                    corporate entities, religious organisations, and traditional or
                                    cultural institutions—in terms of various relief items,
                                    especially foodstuffs—the government still failed to supply the
                                    same to its people, and, of course, it turned into a scandalous
                                    affair!
                                </p>

                                <p>
                                    Last September the Science Direct World Development Journal and
                                    Research Gate published an insightful study that sought to
                                    assess the COVID-19 implications on household income and food
                                    security in Kenya and Uganda.
                                </p>

                                <p>
                                    The study revealed that in both countries: (i) more than
                                    two-thirds of households experienced income shocks and worsened
                                    food security; (ii) food security outcomes were worse among the
                                    income poor and households dependent on labour income; (iii)
                                    labour-dependent and income poor households employed food-based
                                    coping strategies; and (iv) membership in savings groups was
                                    more likely to mitigate member’s income shocks than the National
                                    Social Security Fund[s].
                                </p>

                                <p>
                                    The GoU, as usual, bluffed about providing food relief, i.e.,
                                    rations of 6kg of maize flour per person, 3kg of beans per
                                    person, and salt to “vulnerable workers, particularly those
                                    whose daily activities would be affected by the lockdown, in a
                                    way of extending social protection to vulnerable sections of the
                                    population [totaling about 1.5 million people—representing of
                                    3.2% of 46 million Ugandans]!” The lactating mothers and the
                                    sick nation were each to receive 2kgs of powdered milk and 2kgs
                                    of sugar.
                                </p>

                                <p>
                                    Indeed, as anticipated, “Majority of vulnerable households
                                    [outside the districts of Kampala, Mukono and Wakiso],”
                                    according to its COVID-19 Interventions Report, FY 2019/20 by
                                    the Ministry of Finance, Planning and Economic Development “did
                                    not benefit from the food donations including many urban and
                                    rural dwellers”. Only God
                                </p>

                                <p>
                                    knows what happened to the UGX 1.829 billion released to the
                                    Office of the Prime Minister for this purpose, and how the
                                    remaining 96.8% Ugandans lasted!
                                </p>

                                <p>
                                    Finally, our case does not markedly differ from that of the
                                    Filipinos. Because of the COVID-19 precautions, many (most?) are
                                    confined. “So a recent sprouting of hundreds of local food
                                    banks,” The Economist conveyed “meant to keep their hunger at
                                    bay should, on the face of it, be widely welcomed. Instead, it
                                    has stirred up a storm of political controversy…the pantries
                                    are…a threat to elected politicians, who would prefer to
                                    preserve a monopoly on handing out goodies to voters near
                                    election time…[and hoping] to curry favour with voters.”
                                </p>

                                <p>
                                    Uganda’s status quo further waned as many egocentric politicians
                                    took the prospects of the 2021 electoral politics season
                                    presented in good stride, albeit with utter impunity. We
                                    witnessed, just like the rest of the world, a rather excessive
                                    flouting of the SOPs linked to public assemblies of any kind by
                                    the very elements behind their enactment, but also purporting to
                                    observe them—not to mention the gross violation of their
                                    opponents’ human rights and freedoms.
                                </p>

                                <p>
                                    Such fickleness!
                                </p>

                                <p>
                                    The writers are policy analysts.
                                </p>
                                <p>
                                    franklinjuuko@gmail.com jmwesigwas@gmail.com
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
                                <form action="Recordblogcomment" method="post" enctype="multipart/form-data">
                                
                                @csrf
                                <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" name="name" class="form-control"  placeholder="Enter name" required>
                                         
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" name="email" class="form-control"  placeholder="Enter email" required>
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
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

                        </div><!-- End blog comments -->

                    </div><!-- End blog entries list -->

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
