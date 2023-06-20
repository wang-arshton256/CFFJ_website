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
                        <li>A Stitch In
                            Time</li>
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
                                <img src="assets/img/blog/grief _in_politics.png" alt=""
                                    class="img-fluid" height="" width="800">
                            </div>


                            <p class="d-none"><i>The photo is a courtesy of </i> </p>

                            <h2 class="entry-title">
                                <a href=" {{ url('A_Stich_In_Time') }}">Grief
                                    and The Politics of
                                    Ethnicity

                                </a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-person"></i> <a
                                            href="{{ url('Grief_and_The_Politics_of_Ethnicity') }}">By KALEMA PAUL
                                            LINCOLN</a>
                                    </li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-clock"></i> <a
                                            href="{{ url('Grief_and_The_Politics_of_Ethnicity') }}"><time
                                                datetime="2020-01-01">Mar
                                                30, 2022</time></a></li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-chat-dots"></i> <a
                                            href="{{ url('Grief_and_The_Politics_of_Ethnicity') }}">0 Comments</a>
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
                                    Acholi. For the most part, this vilifying demand was premised on
                                    the fact that Maj. Gen. Paul Lokech, the former Deputy Inspector
                                    General of Police, an Acholi, died in office and the Rt. Hon
                                    speaker died in office who also happens to be an Acholi died a
                                    few months after taking on the deeply contested speakership
                                    position. To some of our honourable parliamentarians, a
                                    coincidence was inconceivable–someone had to be witch-hunting
                                    Acholis in government, hence the need to ring-fence the
                                    speakership position.

                                </p>
                                <p>
                                    While the Acholi Parliamentary Forum was yet to convince the
                                    country that Acholis in key government positions are politically
                                    endangered, the chief justice started vociferating—angered by a
                                    demonstration by the National Unity Platform supporters. They
                                    were demonstrating against the misplaced priorities of a
                                    government that has neglected the local health system and finds
                                    it fit to ferociously spend taxpayers' money chartering planes
                                    for some leaders to be treated abroad. This demonstration was
                                    sparked by the 1.7 billion-shillings chatter of a Ugandan
                                    Airplane plane to transport the deceased speaker to Seattle for
                                    treatment. His Lordship charged at the demonstrators whom he
                                    perceived to be Baganda. He accused them of hypocrisy and
                                    wondered why they did not demonstrate when the Kabaka was flown
                                    to Germany for treatment aboard a presidential aircraft. This
                                    allegation was quickly dispelled by a photo of the Kabaka
                                    departing Entebbe aboard a KLM airline.




                                </p>

                                <blockquote class="d-none">
                                    <p>
                                        "Block Quote"
                                    </p>
                                </blockquote>

                                <p>
                                    It is important to understand the forces driving the excitement
                                    and the huge number of applications flooding the NSSF. Firstly,
                                    the NSSF midterm law came into force at a time when businesses
                                    everywhere had long been suffocated by the COVID-19 pestilence,
                                    which saw a wide range of businesses closing their doors and
                                    companies or scaling down staff. The lockdown saw the vast
                                    majority of people sit home without work, resulting in generally
                                    low purchasing power in the Ugandan economy. People were unable
                                    to purchase essential items for their survival. In the face of
                                    such economic difficulty, the escalation of prices of essential
                                    commodities has only made the situation worse. The current
                                    clamour associated with the midterm cash is an understandable
                                    response of people in economic distress. Therefore, the midterm
                                    pay is an opportunity for eligible members to ameliorate their
                                    financial condition by jump starting their businesses and
                                    improving their livelihood. One can say there was no better
                                    timing than now.



                                </p>

                                <p>
                                    The two mortifying episodes attest to the deeply rooted and
                                    historically suffered politics of ethnicity in Uganda. The fact
                                    that the country’s chief justice tribalized a matter of national
                                    importance like the rotting state of our health system is beyond
                                    the momentary grief of a friend. It is clear as day that an
                                    improved health system would benefit Baganda and the entire
                                    nation. But because the spark of the protest was money spent on
                                    the chief justice’s kinsman, the matter was personal and even
                                    more tribal to him. The logic behind the tribal lenses with
                                    which our leaders comprehend issues of national importance is
                                    partly informed by our checkered history of ethnic intolerance
                                    and counter-productive sub-nationalism. In 1964, the Kabaka, who
                                    was also the president, went to great effort to influence the
                                    Buyaga and Bugangaizi referendum, which would determine whether
                                    the two counties were part of Buganda or Bunyoro. The fact that
                                    a president tried to sway a referendum to favour his kingdom
                                    paints the perfect picture of a leader jettisoning national
                                    interests for sub-nationalist loyalties.


                                </p>

                                <p>
                                    But marvel not, this flawed logic was taken a notch higher by
                                    Idi Amin, who slaughtered Acholi and Langi villages. These
                                    tribes formed the backbone of Obote's government, and the ethnic
                                    political playbook demanded that they be eradicated least a coup
                                    cut the field marshal's reign short. Notwithstanding the
                                    slaughter of many innocents, the dictator’s tyranny was brought
                                    to an end by the <i>Kikosi Malum</i>, a force independent of
                                    Amin’s
                                    ethnic calculations. The lingering legacy of this ethnic
                                    exclusion and witch hunt is what we see today. In a calmer
                                    Uganda, ethnic intolerance and unwarranted suspicion are
                                    exhibited in all events of Uganda's political discourse. From
                                    people who think a political candidate is only as good as his
                                    ethnic proximity to their tribe to those who feel entitled to
                                    certain positions in government. To put it simply, a significant
                                    number of political players tend to look out for their
                                    tribesmen, and a key political appointment cannot be good unless
                                    the person appointed shares the beholder’s route home. The
                                    nearer home, the better.


                                </p>

                                <p>
                                    The violent ethnic purges of the past were replaced by subtle
                                    tribal perfidies held together by an elaborate web of nepotism
                                    cutting across all corners of political power. The benefit of
                                    having a speaker who comes from your sub-region is that matters
                                    concerning that region will presumably be looked upon with
                                    favour regardless of what logic demands. There is also an urgent
                                    need to feel represented. A feeling that our particular tribe is
                                    partaking of the spoils of our 1986 revolution. The only problem
                                    with this way of thinking is that Uganda has about sixty-five
                                    tribes and if one tribe or ethnicity chooses to hold a copyright
                                    to a certain position, how big will the government be? If
                                    leaders choose to countenance the long-rejected politics of
                                    ethnicity, they rob the country of the promise given by the 1995
                                    Constitution. Summed up in the preamble of our Constitution are
                                    a realisation of our atrocious past and a projection of the
                                    desirable future. A future of freedom, democracy and equality
                                    with every human being entitled to the enjoyment of human rights
                                    and a fair share of the opportunities of the land.


                                </p>

                                <p>Article 246 of the Constitution recognises cultural leaders but
                                    excludes them from participating in any political activity, an
                                    effort by the constituent assembly to block out any form of
                                    divided loyalties towards the nation and a lesser entity. It is
                                    therefore disconcerting when leaders try to play the role of
                                    ethnic advocate on issues of national importance given the
                                    effort to constituent assembly’s effort to sanitize out politics
                                    of the same vice. Following the wisdom of our constituent
                                    assembly, an inclusive and accommodative Constitution was
                                    promulgated to ensure that the politics of our motherland runs
                                    in a nationally representative way. The oath of allegiance
                                    toward Uganda sworn by most leaders is an attestation of the
                                    requirement of a national devotion that transcends ethnic
                                    loyalties. This is not to relegate ethnic pride and tribal sense
                                    of belonging to the realm of the irrelevant but the call to
                                    strike the right balance. Flowing from our African heritage, it
                                    is only natural that we are drawn to love our culture and our
                                    way of life. In representing our people and advocating for their
                                    ethnic aspirations, we must always recognise that we are
                                    different people in one nation.




                                </p>

                                <p>
                                    The diversity of our heritages is a natural phenomenon and
                                    should be a source of cautious pride but must never precipitate
                                    ethnic arrogance or entitlement. The entity of Uganda can only
                                    flourish when we face the challenges ahead of us with the unity
                                    with which the pain of such challenges afflicts us. The
                                    understanding that there will never be ethnic specific roads or
                                    hospitals seen throughout Africa’s colonial journey should unite
                                    us when it comes to matters that affect all of us. We ought to
                                    be proud of individual tribes and yet even prouder that we are a
                                    multi-tribal country. The rhetoric of influential figures should
                                    not only be measured but also more uniting even on issues that
                                    tend to divide the country across tribal lines. We will be
                                    doomed as a country if protagonists in our government play
                                    divisive politics. The unforgiving consequences of this brand of
                                    politics would have a far-reaching impact on the politics and
                                    lives of people.

                                </p>
                                <p>
                                    The good news is that there is still room to right the wrongs
                                    and mend fences for the good of everyone concerned. This conduct
                                    may be excused as a consequence of grief and desperation. I only
                                    hope we can be more fortunate to avoid a steady degeneration to
                                    the dark past. We gain more unity and lose more than we could
                                    fathom if we continue to tolerate these unpleasant episodes. For
                                    God and My Country!

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
