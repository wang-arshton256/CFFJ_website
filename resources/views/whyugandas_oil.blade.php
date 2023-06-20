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
                        <li>WHY UGANDA’S OIL</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Blog Section -->

        <!-- ======= Blog Single Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-8 entries">

                        <article class="entry entry-single">

                            <div class="entry-img  pt-5 px-5">
                                <img src="assets/img/blog/ugandas_oil.png" alt="" class="img-fluid" height=""
                                                    width="800">
                            </div>

                            <h2 class="entry-title">
                                <a href="{{ url('whyugandas_oil') }}">WHY UGANDA’S OIL FINAL INVESTMENT
                                    DECISION IS A BIG DEAL

                                </a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-person"></i> <a
                                            href="{{ url('whyugandas_oil') }}">By KALEMA PAUL
                                            LINCOLN</a>
                                    </li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-clock"></i> <a
                                            href="{{ url('whyugandas_oil') }}"><time datetime="2020-01-01">Feb
                                                17, 2022</time></a></li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-chat-dots"></i> <a
                                            href="{{ url('whyugandas_oil') }}">0 Comments</a></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    At the height of terror attacks in Uganda towards the end of
                                    2n 1st February 2022, the global head of Total Energies
                                    announced the Final Investment Decision (FID) on Uganda’s
                                    Tilenga and Kingfisher oil projects. This decision is a
                                    significant milestone in Uganda’s long pilgrimage to becoming an
                                    oil-producing country. To comprehend the magnitude of this
                                    breakthrough, we must look back to the starting point of this
                                    trek. Uganda’s oil potential was first brought to light by
                                    Edward James Wayland, a government geologist. He published his
                                    geological survey report titled “Petroleum in Uganda” in 1925,
                                    wherein he reported on the existence of large quantities of oil
                                    seepages in the Albertine basin. This was followed by a series
                                    of geological surveys, drilling of shallow wells, and a host of
                                    petroleum exploration activities during and after colonialism.


                                </p>
                                <p>
                                    In 1986, the president launched capacity building and
                                    information gathering efforts in preparation for a more rigorous
                                    adventure to exploit Uganda’s oil. Efforts of petroleum
                                    exploration intensified between the 1990s throughout the early
                                    2000s, with companies like Heritage Oil and Tullow Oil coming on
                                    board to explore Uganda’s oil potential in the Albertine region.
                                    These exploration exercises entail a series of complex,
                                    technical, and capital-intensive activities closely monitored by
                                    the government with the sole purpose of establishing the number
                                    of oil deposits, the nature and location of hydrocarbons, and
                                    the economic profitability of the oil and the
                                    environmental-safety risks. Before an oil company invests in any
                                    project, some of the risks taken into consideration include the
                                    political risks due to weak governments and dictatorships, the
                                    cost of oil production, and the nature and amount of
                                    hydrocarbons present. This risk assessment is simply done to
                                    ensure that the oil project is worth the huge investment.
                                    Assessments of these risks is a thorough and rigorous process
                                    given the fact that oil projects in the world have a high
                                    failure rate standing at a towering rate of over 65%.


                                </p>

                                <blockquote>
                                    <p>
                                        "This Foreign Direct Investment is expected to create
                                        600,000 jobs for
                                        Ugandans and provide a market for local service providers,
                                        influence
                                        human resources, and improve infrastructure."
                                    </p>
                                </blockquote>

                                <p>
                                    The recent FID announcement by Total Energies and CNOOC is a
                                    commitment for these companies to invest a lofty fifteen billion
                                    dollars in Uganda, which according to the minister of energy,
                                    will facilitate a Gross Domestic Product growth of 22%. This
                                    Foreign Direct Investment is expected to create 600,000 jobs for
                                    Ugandans and provide a market for local service providers,
                                    influence human resources, and improve infrastructure. The oil
                                    and gas industry will also greatly increase the country’s tax
                                    base through taxation of oil companies, persons employed
                                    directly and indirectly by the oil and gas sector, and other
                                    services providers contracted by key players on the oil project
                                    not to mention the profits earned by the government from the
                                    undertaking. While the first drop of oil is expected to be
                                    realized in 2025, the impact of the oil investment will be felt
                                    before then. The benefits of the investment decision will be
                                    enjoyed by all Ugandans through improved public utilities and a
                                    potential increase in the economy's purchasing power.


                                </p>

                                <p>
                                    TWhile the picture may seem rosy, it must be understood that
                                    prosperity and doom are two sides of the oil production coin.
                                    The innumerable benefits that we all hope for may elude us if
                                    this resource is not prudently handled and monitored. The most
                                    significant downside of oil production is its brutal scorching
                                    of the environment through oil spills that occur accidentally or
                                    negligently. These oil spills kill every semblance of aquatic
                                    life in an unmeasurable radius and can potentially render
                                    fishing impossible in the basin where they occur, not to mention
                                    the scorching of the soil in the surrounding area. Between 2015
                                    to 2021, the Nigerian government documented over 4,900 oil
                                    spills which resulted in the release of millions of litres into
                                    water bodies used as a source of water and fish. Oil spills can
                                    cause an irreversibly negative impact on the environment and a
                                    classic example of this is the BP-operated Macondo Deepwater
                                    Horizon oil rig, which spilt oil in the Gulf of Mexico in 2010.
                                    The impact of the oil spill on the water body is still felt to
                                    date, with fishing activities significantly lower than they used
                                    to be more than eleven years ago, notwithstanding the
                                    world-class response from the government of the United States.


                                </p>

                                <p>
                                    With such potentially overwhelming economic ramifications that
                                    mAnother drawback common to African oil-producing countries is
                                    political instability born of discontent and precipitated by the
                                    squandering of oil revenue, government brutality and high
                                    poverty levels. Government officials usually collude with
                                    petroleum companies to either cover up or turn a blind eye to
                                    the non-compliance of environmental standards set for them. The
                                    continuous oil spills, whose impact is not alleviated on account
                                    of corruption then cause barrenness of lakes, rivers and land
                                    hence plunging the people into worse economic conditions.
                                    Exacerbated by embezzlement of oil revenues, the lack of
                                    personal and institutional accountability and widening economic
                                    inequality, public resentment fuels incessant protests, which
                                    are usually quelled by dehumanizing violence by the state. In
                                    2002, the government of Nigeria was held liable by the African
                                    Court of Human & Peoples’ Rights for failing to hold oil
                                    companies accountable for the oil spills made and brutally
                                    suppressing people who protested against the oil spills,
                                    corruption, and the extreme poverty that engulfed them at the
                                    hands of an indifferent government. Despite this ruling, nothing
                                    has changed, and Nigeria, like other African oil-producing
                                    countries like Angola, Gabon, and others, continues to grapple
                                    with environmental hazards, political turmoil, corruption,
                                    authoritarianism and high levels of poverty.


                                </p>

                                <p>
                                    At the crossroads of such drastically different impacts of oil
                                    production, all Ugandans must go get more civically responsive
                                    and hold those responsible for Uganda’s oil production
                                    accountable. All stakeholders must always remember that oil
                                    production can accelerate Uganda’s journey to middle-income
                                    status and beyond or be a poisoned chalice.

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

                    <div class="col-lg-4">

                        <div class="sidebar">

                            <h3 class="sidebar-title">Search</h3>
                            <div class="sidebar-item search-form">
                                <form action="">
                                    <input type="text">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div><!-- End sidebar search formn-->

                            <h3 class="sidebar-title">Categories</h3>
                            <div class="sidebar-item categories">
                                <ul>
                                    <li><a href="#">General <span>(4)</span></a></li>
                                    <li><a href="#">Lifestyle <span>(0)</span></a></li>
                                    <li><a href="#">Travel <span>(0)</span></a></li>
                                    <li><a href="#">Health <span>(2)</span></a></li>
                                    <li><a href="#">Politics <span>(1)</span></a></li>
                                    <li><a href="#">Educaion <span>(0)</span></a></li>
                                </ul>
                            </div><!-- End sidebar categories-->

                            <h3 class="sidebar-title">Recent Posts</h3>
                            <div class="sidebar-item recent-posts">
                                <div class="post-item clearfix">
                                    <img src="assets/img/blog/sideblog.png" alt="">
                                    <h4><a href="blog-single.html">Inclusive Development –
                                            Underlying Dynamics</a></h4>
                                    <time datetime="2020-01-01">Jul 23, 2021</time>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="assets/img/blog/sideblog.png" alt="">
                                    <h4><a href="blog-single.html">Nexus Between COVID-19, Food,
                                            Faith, And Politics</a></h4>
                                    <time datetime="2020-01-01">Jul 23, 2021</time>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="assets/img/blog/sideblog.png" alt="">
                                    <h4><a href="blog-single.html">Mental Health Amidst COVID-19 In
                                            Uganda</a></h4>
                                    <time datetime="2020-01-01">Aug 01, 2021</time>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="assets/img/blog/sideblog.png" alt="">
                                    <h4><a href="blog-single.html">The Curious Case Of COVIDEX</a>
                                    </h4>
                                    <time datetime="2020-01-01">Jul 23, 2021</time>
                                </div>



                            </div><!-- End sidebar recent posts-->

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
