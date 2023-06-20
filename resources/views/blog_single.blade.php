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


                    <li><a href="{{url('programs')}}">Programsk</a></li>
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
                        <li><a href="{{url ('/')}}">Home</a></li>
                        <li><a href="{{url ('blog')}}">Blog</a></li>
                        <li>Inclusive Development – Underlying Dynamics</li>
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
                                <a href="blog-single.html">Inclusive Development – Underlying
                                    Dynamics</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-person"></i> <a
                                            href="blog-single.html">By Prof. Alex Thomas Ijjo</a>
                                    </li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-clock"></i> <a
                                            href="blog-single.html"><time datetime="2020-01-01">Jul
                                                23, 2021</time></a></li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-chat-dots"></i> <a
                                            href="blog-single.html">0 Comments</a></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    Inclusiveness is high on the global policy agenda. It is
                                    mentioned several times in the United Nations Sustainable
                                    Development Goals (SDGs) of 2015-2030. It is also a keyword in
                                    policy documents nationally and globally. Inclusiveness is
                                    believed to be the panacea for eliminating the marginalization
                                    of individuals and families, and the associated poverty
                                    prevailing in many countries. But, what is inclusiveness? And
                                    how is it to be realized? This brief review takes aim at the
                                    concept of inclusiveness and its ramifications along with the
                                    forces undergirding its realization drawing on the example of
                                    Less Developed Countries (LDCs).

                                </p>
                                <p>
                                    Inclusive development is normally seen to embrace a range of
                                    elements including the absence of systemic discrimination and
                                    marginalization, equity of opportunities, level playing field in
                                    socioeconomic and political spheres, individual capability to
                                    participate, individual freedom of choice, availability of
                                    safety nets, permissive institutions and fair and unbiased
                                    regulatory environment, among other things. However, at the core
                                    of inclusiveness, are the twin forces of individual capability
                                    and freedom to participate on the one hand; and facilitating,
                                    non-discriminatory institutional environment on the other.
                                    “Freedom of choice” in participation is important to distinguish
                                    the concept from “forceful” totalitarian collectivism.
                                </p>

                                <blockquote>
                                    <p>
                                        "A favourable development environment is normally seen to
                                        include the security of life and property, guarantee of
                                        individual and civic rights, democratic accountability,
                                        justice and rule of law and facilitative public policy"
                                    </p>
                                </blockquote>

                                <p>
                                    Two broad sets of factors are at work in the development
                                    process. The first is individual agency which is seen to
                                    comprise self-motivation, proactive initiative-taking,
                                    willingness to apply oneself to existing opportunities in life;
                                    the second is the conduciveness of the wider socio-economic and
                                    political environment in which the individual operates. For
                                    inclusivity, the socio-economic and political environment has to
                                    be permissive and non-discriminatory in addition to individual
                                    agency. The broader environment is usually the product of a
                                    multiplicity of factors including but not limited to culture,
                                    ideology, institutions and government policy. Inclusiveness
                                    requires these to be liberal and facilitative to individual
                                    initiative and enterprise.
                                </p>

                                <p>
                                    In reference to the current sway of neoliberal economic
                                    ideology, for example, the basic model of economic and social
                                    development is seen to be that of governments creating
                                    favourable environment for individual agency to thrive. This
                                    implies “small” governments with a mandate limited to ensuring a
                                    fair and just system of “ground rules” and a dynamic thriving
                                    private sector. A favourable development environment is normally
                                    seen to include the security of life and property, guarantee of
                                    individual and civic rights, democratic accountability, justice
                                    and rule of law and facilitative public policy. Important as it
                                    is, a favourable macro-environment is not a sufficient condition
                                    to guarantee inclusiveness. It must be complemented by
                                    individual empowerment and motivation to translate opportunities
                                    into desired outcomes, an indispensable component of an
                                    inclusiveness strategy.
                                </p>

                                <p>
                                    The capability approach (CA) to development advanced by Amartya
                                    Sen is pertinent to the idea of inclusiveness. The CA puts
                                    emphasis on the capability of individuals to function in given
                                    environments, and associates development with the expansion of
                                    individual capabilities and choices in the society.
                                    Inclusiveness that is not coerced presumes capability to
                                    participate, which in turn presupposes an understanding of how
                                    to participate. Thus, inclusiveness heavily hinges on individual
                                    capabilities and motivation to participate. Motivation is in
                                    turn driven by the perception of the pay-off or net benefit of
                                    taking action versus not taking action. An excellent example of
                                    this in the context of entrepreneurship is the ability of
                                    individuals to recognize opportunities and their awareness of
                                    their own capabilities to act as entrepreneurs to exploit the
                                    opportunities.
                                </p>

                                <p>
                                    In unbundling participation further, especially the notion of
                                    knowing how to participate which is critical in determining
                                    whether people participate or not in the affairs and
                                    opportunities of society, we recognize that the main implication
                                    is on knowledge and skills, that is, education. As the saying
                                    goes, “Knowledge is power” or more accurately potential power,
                                    since it can only be effective when it is applied correctly to
                                    relevant situations. Empowerment through awareness or knowledge
                                    is akin to the notion of “conscientization” introduced by Paulo
                                    Freire in the 70s. It is a reference to social critical
                                    consciousness, which is instrumental in holding institutions to
                                    account and in taking informed social and political action.
                                    Individuals need to be empowered with knowledge and equipped
                                    with the motivation to take relevant action in improving their
                                    circumstances.
                                </p>

                                <p>
                                    In reference to Uganda, the educational literacy rating is
                                    currently 77%. However, of this only about 25% of the working
                                    population of 14-65 year olds has more than just primary
                                    education, and a mere 6.5% has acquired any form of specialized
                                    training. The official statistics show that the percentage of
                                    the population living at or below the poverty line was at 19.7%
                                    in 2012/13. In addition, 43% of the population is vulnerable to
                                    poverty. Inequality, as measured by the Gini coefficient of
                                    0.395, with the highest prevalence rates in the northern and
                                    eastern parts of the country. In a country where 78% of the
                                    population is under 30 years old, youth unemployment is
                                    estimated at 64%. These figures which are not very different for
                                    many Sub-Saharan African (SSA) countries pose a serious
                                    challenge to the vision of inclusiveness in these countries
                                    particularly in terms of the capability or empowerment aspect
                                    but also the conduciveness of the environment for rewarding
                                    individual enterprise.
                                </p>

                                <p>
                                    In the short and medium term, prospects and economic
                                    opportunities for much of SSA took a nose dive due to the impact
                                    of COVID-19. Many sectors were negatively affected including
                                    tourism, exports, foreign direct investment, remittances and
                                    others. The shock of the COVID-19 pandemic and lockdowns have
                                    led to layoffs, firm closures, loss of business, and a slowdown
                                    especially in the urban informal sector with livelihood
                                    dependent on movement and social interaction. Finally, the
                                    closure of schools as part of lockdowns in response to the
                                    pandemic means that empowerment through education has been
                                    seriously interrupted and is likely to have severe negative
                                    knock-on effects on growth and socio-economic transformation.
                                </p>

                                <p>
                                    One key policy recommendation for enhancing inclusiveness is
                                    therefore strengthening individual capabilities and confidence
                                    levels through education and training. The other is creating
                                    favourable, non-discriminatory, level playing fields of economic
                                    opportunities. Providing relevant knowledge through education
                                    requires appropriate education curricula and vocational training
                                    programs that teach individuals skills that are immediately
                                    applicable. In addition to this, education and training must
                                    equip individuals with the critical consciousness to analyze
                                    situations and to take appropriate action to translate
                                    opportunities into desired outcomes consistent with rising
                                    welfare.
                                </p>

                                <p>
                                    At the national level, these policy suggestions may require the
                                    strategic partnership of an active developmental state able to
                                    engage with the people in designing creative programs for
                                    skill-enhancement, attitude transformation, productive
                                    engagement and appropriate response to globalization and
                                    international relations. In conclusion, inclusiveness,
                                    therefore, requires the empowerment of individuals with relevant
                                    knowledge and skills and motivation but also a just, equitable
                                    and non-discriminatory institutional and regulatory environment.
                                </p>

                                <h2>References</h2>
                                <p>Sen, Amartya (1985). Commodities and capabilities. Amsterdam and
                                    New York, North-Holland Sole distributors for the U.S.A. and
                                    Canada.</p>
                                <p>Sen, Amartya (1989). “Development as Capability Expansion,” in
                                    Journal of Development Planning 19: 41–58.</p>
                                <p>Freire, Paulo. (2007). Pedagogy of the Oppressed. New York,
                                    Continuum.

                                </p>
                                <p>Economic Development Policy and Research Department of the
                                    Ministry of Finance Planning and Economic Development (EDPRD).
                                    (2014). Poverty Status Report 2014: Structural Change and
                                    Poverty Reduction in Uganda. Kampala, Government of Uganda.</p>
                                <p>Uganda Bureau of Statistics. (2014). 2014 Statistical Abstract.
                                    Kampala, Republic of Uganda.</p>
                                <p>Singer, S. Amoros, J. E. and Moska, D. (2015). Global
                                    Entrepreneurship Monitor 2014: Global Report. Babson College:
                                    Wellesley, MA. Universidad delDesarrollo: Santiago.
                                    UniversitiTun Abdul Razak, and Tecnologico de Monterrey.</p>

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
