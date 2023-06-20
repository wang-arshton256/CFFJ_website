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
                    <li><a href=" {{ url('about') }}">About Us</a></li>
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
                        <li>Continuous Innovation</li>
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

                            <div class="member-img">
                                                <img src="assets/img/publications/continuous innovation.png"
                                                    class="img-fluid" alt="">

                                            </div>

                            <h2 class="entry-title">
                                <a href="blog-single.html">Continuous Innovation</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-person"></i> <a
                                            href="blog-single.html">By Ms. Mbabazi Cynthia</a>
                                    </li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-clock"></i> <a
                                            href="blog-single.html"><time datetime="2020-01-01">Sep
                                                10, 2021</time></a></li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-chat-dots"></i> <a
                                            href="blog-single.html">0 Comments</a></li>
                                </ul>
                            </div>

                            <div class="entry-content">

                                <p>
                                    WInnovation has proved for many organizations a vital source of
                                    growth and a significant determinant of competitive advantage.
                                    Therefore, in order
                                    to sustain competitive advantage and drive growth in the long
                                    run, organizations need to continuously innovate. Achieving this
                                    requires the
                                    coordinated efforts of various stakeholders and a seamless
                                    integration of activities across all organization functions.
                                    Continuous innovation has
                                    been defined as the ability to combine exploitation and
                                    exploration capabilities through operational effectiveness and
                                    strategic flexibility that have
                                    traditionally been regarded as antithetical. Organizations can
                                    seize and sustain competitive advantage by exploiting
                                    opportunities in existing
                                    markets and market niches by aligning the firm’s strategy to
                                    efficiently utilize its basic resources and capabilities while
                                    also exploring
                                    opportunities in emerging and new markets through research,
                                    risk-taking, experimentation, flexibility, discovery, and
                                    self-disruption. In other
                                    words, continuous innovation is not a destination rather a
                                    journey of continuous incremental improvement, the interaction
                                    between operations,
                                    learning and radical innovation with the aim of successively
                                    combining exploitation and exploration activities.


                                </p>

                                <p><strong>continuous innovation?</strong></p>
                                The several reasons why companies need continuous innovation can be
                                grouped into four main reasons as follows;


                                <i> Changing customer demands </i>

                                <blockquote>
                                    <p>
                                        ''Nokia, and Kodak failed to develop and adopt new innovative technologies despite having resources and foresight.''
                                    </p>
                                </blockquote>


                                <p>
                                    <b> Figure1: Evolution of customer demands</b>

                                </p>


                                <p>
                                    Bolwijn and Kumpe deduced that, with the evolving customer
                                    demands through the years, after the efficient firm of the
                                    period until 1975, the
                                    quality firm of the late 1970s and the early 1980s, and the
                                    flexible firm of the late 1980s and the 1990s, now is the era of
                                    the innovative firm.
                                    Every stage appends the strengths of its antecedent. Consumers
                                    demand a high variety of unique quality products that are
                                    affordable and timely
                                    service. Therefore, companies need continuous innovation in
                                    their product and services development in order to remain
                                    relevant to customers’
                                    needs.
                                </p>

                                <i>Rapid technological development</i>
                                <p>
                                    The emergence of the fourth industrial revolution has kindled
                                    rapid technological change such as; the internet of things,
                                    artificial intelligence, big
                                    data, blockchain technology, 3D printing, nanotechnology,
                                    virtual and augmented reality, satellite and drone technologies.
                                    All these add notable
                                    complexity to companies' pursuits to remain competitive. These
                                    complexities include automation, cybersecurity, altered
                                    productivity models and a
                                    short-lived comparative advantage, more so, customers have more
                                    information and options. These realities prompt companies to
                                    manage both
                                    opportunities and threats presented and continuously innovate to
                                    satisfy their customers’ demands.
                                </p>

                                <i>Globalization and new competitors</i>
                                <p>
                                    Globalization creates a dynamic and complex business environment
                                    where companies compete nearly with all companies on the globe.
                                    The
                                    nature of competition has tremendously been transformed with
                                    changes in investment, production and distribution patterns as
                                    customers,
                                    suppliers and enterprises interact differently. For example, a
                                    new clothing company in Korea could acquire raw materials from
                                    Egypt, sell to
                                    customers in Europe and compete in the US clothing industry.
                                    Companies, therefore,
                                </p>

                                <i>Environmental policies</i>
                                <p>
                                    Environmental regulations on carbon emissions, pollution,
                                    natural habitat and biodiversity conservation induce high
                                    indirect input costs and
                                    trigger different responses by firms which increases
                                    competition. Responses include price, output, and investment
                                    changes which lead to
                                    productivity innovations notably in pollution and
                                    energy-intensive sectors . Environmental regulations foster
                                    innovation in clean and renewable
                                    technologies which increasingly impact competitiveness therefore
                                    companies need to continuously innovate amidst new
                                    circumstances.Evidence documents that many firms operate in
                                    increasingly dynamic and complex environments, where disruptive
                                    forces such as changing
                                    consumer demands, rapid technological development, globalized
                                    competition, and environmental policies operate with amplified
                                    frequency .
                                    Consequently, all companies must continuously modify their
                                    structures and processes through exploitation of core
                                    competencies and exploration
                                    of new domains in order to sustain competitiveness and satisfy
                                    or initiate future demand.
                                </p>

                                <p>
                                    <strong> companies fail?</strong>

                                </p>
                                <p>
                                    In order to achieve successful continuous innovation, it is
                                    crucial to understand why companies that once experienced
                                    innovation success failed
                                    to remain competitive – only 12% of the Fortune 500 companies
                                    included in 1955 were still listed 62 years later in 2017 and
                                    the shift index shows
                                    that the average lifespan of S&P 500 companies declined from an
                                    average of 75 years half a century ago to 15 years in 2010
                                    (Diem, 2017). The
                                    main reason is that majority of the firms focused on
                                    exploitation of their successful business model as most old
                                    competitive theories stated such
                                    as Porter’s three strategies of cost leadership, focus and
                                    differentiation and Skinner’s argument of a narrow product mix
                                    for a market niche and
                                    failed to explore any new areas. Management was incentivized to
                                    fully exploit the one successful model through targets and KPI’s
                                    which means
                                    that focus, resources and culture were geared towards the usual
                                    low risk ventures that easily became obsolete.

                                </p>
                                <p>
                                    According to Clayton Christensen, in his book ‘The Innovator’s
                                    Dilemma’, reigning companies can lose their leadership status to
                                    new innovations
                                    when they only gratify their current customers’ needs and fail
                                    to adopt new innovations and technologies which will answer
                                    their future needs.
                                    Examples include; Blockbuster - film and video game rental
                                    company that ran bankrupt in 2010 was disrupted by on-demand
                                    streaming sites like
                                    Netflix because it didn’t adapt to the new online business
                                    model, Yahoo failed to take the risk to invest in google and
                                    Facebook and ended up
                                    losing its market share, Kodak invented the digital camera but
                                    still filed for bankruptcy in 2012. Nokia was one of the
                                    pioneers of the smartphone
                                    but lost significant market share to the iPhone, and many more.

                                </p>
                                <p>
                                    The challenge to continuous innovation for many of these
                                    companies was that most new disruptive innovations did not fit
                                    their current structures
                                    and business models and therefore posed a high risk to their
                                    investments if adopted. Considering that the current business
                                    model is what most
                                    companies are designed to deliver on, any new disruptive
                                    innovation would require substantial changes to the current
                                    business model which
                                    creates a misalignment, therefore, the extent of the changes
                                    required and the disposition of leadership to navigate that
                                    change fundamentally
                                    dictates the success of continuous innovation.

                                </p>
                                <p>
                                    INokia, and Kodak failed to develop and adopt new innovative
                                    technologies despite having resources and foresight. Their
                                    leadership was not
                                    willing to execute the right business models to take the new
                                    technologies to market therefore successful continuous
                                    innovation requires active
                                    corporate leadership participation in changing current
                                    structures to aid the continuous development of innovative new
                                    business models.
                                </p>

                                <P><strong> can companies stay competitive?</strong></P>

                                <P>Achieving continuous innovation is quite tough and many attempt
                                    and fail, however, drawing from successful continuously
                                    innovative companies
                                    such as Google, Facebook, Microsoft, Amazon, P&G, Pfizer, Sony,
                                    Apple, BMW and many more we learn that the following four
                                    approaches can
                                    drive continuous innovation.</strong></P>
                                <P>Strategic partnerships for shared risks and strategic options as
                                    the case with Procter and Gamble, Oracle and IBM. The downside
                                    to partnerships
                                    is shared returns and loss of control. Secondly, recruiting,
                                    developing and retaining superior human capital to enable
                                    organizational flexibility and
                                    human resource management like Google, Goldman Sachs and
                                    Research in Motion. The weakness of this approach is slow growth
                                    and the
                                    challenge of identifying and valuing superior human capital.
                                    Thirdly, internal research & development spending to cultivate a
                                    culture of risk-taking,
                                    organization flexibility and long-term commitment for example
                                    Apple, Hewlett-Packard, and BMW. The limitation to this approach
                                    is full risk
                                    exposure, long-term and uncertain returns. Lastly, identifying
                                    and assimilating acquisition targets to obtain innovative
                                    technologies before
                                    startups become competitors and enable faster growth as the case
                                    with Pfizer, Microsoft and General Electric. The disadvantage of
                                    this
                                    approach is the risk of overpaying, cultural integration
                                    concerns and dependence on others for innovation.</P>
                                <P>There is no one-size-fits-all formula for successful continuous
                                    innovation. For example, the ambidextrous organization can
                                    behave organically
                                    when the circumstances require the introduction of new models,
                                    and the punctuated equilibrium organization can assume long
                                    periods of small
                                    and incremental change interrupted by short periods of
                                    discontinuous radical change and the innovative organization is
                                    one in which radical
                                    systematic change is followed by long periods of maintenance and
                                    incremental improvement. In general, continuous innovation
                                    requires an
                                    organizational balance of exploitation and exploration
                                    activities and it takes time to achieve the balance.
                                </P>
                                <P>The examples of failures and successes of continuous innovation
                                    evince that knowledge acquisition and management is crucial in
                                    building an
                                    enduring company culture of innovation and sustainable
                                    competitive advantage. Gianmario Verona and Davide Ravasi
                                    outline three vital
                                    capabilities namely; creation and absorption of knowledge,
                                    knowledge integration and knowledge reconfiguration required
                                    across the
                                    organization in order to acquire continuous innovation.
                                </P>
                                <P>First, companies needs to generate and absorb knowledge from the
                                    market by committing to long-term investment in potential
                                    technological and
                                    market applications, building a risk tolerant and
                                    experimentation culture, training and empowering employees,
                                    fostering open communication,
                                    designing customer-oriented solutions, challenging the
                                    conventional management thinking, and facilitating open
                                    innovation to absorb knowledge
                                    from the external sources.
                                </P>
                                <P>Secondly, after acquiring knowledge, companies need to integrate
                                    the knowledge into the company processes and strategic plans by
                                    building the
                                    dynamic capacity of employees and resources across all functions
                                    needed to quickly implement new ideas, fostering strategic
                                    partnerships with
                                    suppliers and customers and reducing bureaucracies.
                                </P>
                                <P>Lastly, knowledge needs to be continuously reconfigured by
                                    creating an organic structure that enables the redefinition of
                                    roles and relationship
                                    patterns in a flexible way making it easy to continuously
                                    reintegrate resources by eliminating processes that don’t work
                                    and adjusting to new
                                    business environment changes.These three capabilities steer
                                    companies towards the continuous generation of new products
                                    which constantly renews their competitive
                                    advantage. Research indicates that company culture, structure
                                    and systems and physical resources support the three dynamic
                                    capabilities and
                                    together they can create continuous innovation. There must be
                                    internal resource coherence for the capabilities to fulfil their
                                    function.
                                </P>

                                <P> <strong> Conclusion</strong>
                                </P>

                                <p>
                                    In conclusion, companies to be ready for a different future than
                                    the one they are now experiencing as the business environment
                                    gets more
                                    dynamic, complex and challenging. Companies need to continuously
                                    innovate in order to stay ahead of the competition and not fall
                                    into failure
                                    cases. Large companies are most likely going to be unexpectedly
                                    disrupted by new companies because they focus on their current
                                    customer
                                    demands instead of their future demands for example the
                                    unexpected disruption of the hotel industry by Airbnb. Sustained
                                    competitive advantage
                                    and growth in the long run for organizations requires continuous
                                    innovation due to evolution in customer demands, rapid
                                    technological change,
                                    globalization and new policies.
                                </p>

                                <P>

                                    Case studies suggest possible approaches for acquiring
                                    continuous innovation through strategic partnerships,
                                    recruiting, developing and
                                    retaining superior human capital, internal research &
                                    development and identifying and assimilating acquisition targets
                                    but they are also
                                    encountered by various challenges. Ultimately, through knowledge
                                    acquisition, management and organization experimental learning,
                                    companies
                                    need to balance exploitation and exploration capabilities in
                                    order to continuously innovate and stay ahead of the
                                    competition.
                                </P>

                                CaCase studies suggest possible approaches for acquiring continuous
                                innovation through strategic partnerships, recruiting, developing
                                and
                                retaining superior human capital, internal research & development
                                and identifying and assimilating acquisition targets but they are
                                also
                                encountered by various challenges. Ultimately, through knowledge
                                acquisition, management and organization experimental learning,
                                companies
                                need to balance exploitation and exploration capabilities in order
                                to continuously innovate and stay ahead of the competition.
                                </P>

                                Continuous Innovation does not exist in a vacuum, it requires active
                                leadership participation across all organization functions,
                                innovative
                                organizational culture, dynamic company structure, strategic
                                partnerships and lobbying existing resources and technologies in
                                order to satisfy
                                and create future demand. Change is irresistible, but so is
                                innovation. Therefore, it is best to embrace its opportunities,
                                threats, find solutions and
                                keep up with new technologies while ensuring proper leadership and
                                continuous innovation strategies are set.
                                </P>
                                <!----footer--->
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
                                <!----endfooter--->



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
                            
                            <!---sidebar recent posts--->

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
