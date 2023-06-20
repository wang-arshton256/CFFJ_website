
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
                                <img src="assets/img/blog/coffee.png" alt="" class="img-fluid"
                                    height="" width="800">
                            </div>


                            <p class="text-danger"><i>Photo: courtesy of Africa-Uganda Travel
                                    Guide.com </i> </p>

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
                                    On 10th February 2022, the Government of Uganda signed an
                                    agreement with the Uganda Vinci Coffee Company (UVCC) whose
                                    specifics met the public eye through different media platforms.
                                    Upon knowledge of the unbelievably crooked deal, the public went
                                    up in arms condemning the unholy agreement designed to kill
                                    Uganda’s long-cherished coffee product. The ten-year-long
                                    agreement gives the UVCC exclusive rights over Ugandan produced
                                    coffee, exempts the company from paying any form of tax, and
                                    assures the company of a steady supply of water and electricity.
                                    In addition, if UVCC fails to realise its intended coffee
                                    target, the government will have to compensate it for the
                                    shortfall for any year. The irritation towards this coffee deal
                                    has even attracted criticism within the government, However, the
                                    Attorney general who sanctioned it insists it is not against any
                                    law.




                                </p>
                                <p>
                                    While it is true that the agreement does not contravene any law
                                    in the land, sanctioning such an unfair and economically
                                    perilous agreement on behalf of the country is alarming, to say
                                    the least. Fast forward, the agreement creates a monopoly over
                                    Ugandan coffee because Ugandan farmers can only sell their
                                    coffee to the UVCC first before considering other buyers. The
                                    reality of having a monopoly is that the company will dictate
                                    the price to favour its profit maximisation. Further, the
                                    absence of any form of competition as has been seen in
                                    monopolies all over the world creates laxity, stifles innovation
                                    and stagnates the sector because the monopolist is making huge
                                    profits and there is no need to innovate or invest in quality
                                    assurance initiatives. Before the signing of this agreement, the
                                    National Coffee Act 2021 was enacted and key among its
                                    provisions was the requirement for all coffee growers to have a
                                    coffee-growing licence. It is therefore easy for the government
                                    to enforce its monopolistic agreement because all coffee farmers
                                    are known wherever they are.




                                </p>

                                <blockquote class="d-none">
                                    <p>
                                        "Block Quote"
                                    </p>
                                </blockquote>

                                <p>
                                    One of the sinister facts of this deal is that Ms Enrica
                                    Pinetti, the UVCC Board Chairperson who signed the contract on
                                    its behalf, also owns Finasi construction company which was
                                    contracted to construct the National Specialised Hospital in
                                    Lubowa. For more than two years now, the company has not erected
                                    any wall despite constant assurances to start construction. The
                                    magnitude of faith that the government has in Ms Enrica Pinetti
                                    is equal to that the disciples had in Jesus after His
                                    resurrection!



                                </p>

                                <p>
                                    In the logical world, it is unfathomable that a government can
                                    put a country’s flagship cash crop at the whims of an investor
                                    who has reneged on a contract to build a major hospital for more
                                    than two years. Indeed our leaders do not fear huge
                                    disappointments. Many of the people enraged by this destructive
                                    agreement may be tempted to think that this is a result of
                                    incompetence or the lack of simple economic knowledge explained
                                    above. Well, it is not! The people who execute such agreements
                                    are intelligent and far more sophisticated. They also understand
                                    the undesirable implication of their actions.


                                </p>

                                <p>
                                    These unfair agreements are symptoms of a chronically perverted
                                    mode of service that treats Uganda as an enterprise of a few.
                                    The notion is that those who are strategically placed in
                                    government must pull strings to their benefit. The nation of
                                    Uganda itself was born as an entrepreneurial venture of the
                                    Imperial British East African Company (IBEACo) which was given
                                    royal chatter in 1888 to come and manage territories in East
                                    Africa. Uganda became a British protectorate in 1894, the IBEACo
                                    was to carry out general administration, collect taxes and
                                    enforce the order.

                                </p>

                                <p>
                                    In their book <i>Why Nations Fail</i>, prominent economists
                                    Daron Acemoglu and James Robinson called such systems extractive
                                    systems. Extractive in the sense that the tax or wealth
                                    generated is to be extracted by well-placed people in the
                                    existing institutions. Under these systems leaders do what they
                                    know is detrimental to the interest of their people but benefits
                                    a few elites in the government. In Uganda, this system is not
                                    endorsed by the government as the accepted mode of operation but
                                    it is simply discouraged and not fought.


                                </p>

                                <p>Some of the vices that undermine otherwise credible institutions
                                    to become extractive are corruption, collusion, influence
                                    peddling and intrigue. Powerful people with selfish interests
                                    use their influence to ensure that decisions that favour them
                                    financially are taken to the detriment of the country. These
                                    decisions manifest themselves in the form of unrealistic
                                    agreements signed on behalf of the country and policies designed
                                    to exploit the citizens without any legitimate purpose. Usually,
                                    these schemes present themselves as regulations only to be
                                    abandoned years or later when the damage is realised or upon the
                                    vehement protest of the people.





                                </p>
                                <p>In 2004, the ministry of works and transport issued a statutory
                                    instrument that required all cars to have speed governors
                                    installed under the pretext of curbing road accidents. These
                                    devices cost three hundred thousand shillings at the time and
                                    every driver had to purchase them from three companies whose
                                    selection criterion was quite sinister. Operations to enforce
                                    the speed governor requirement hit the transport industry and
                                    those who procured the devices reported unrealistically
                                    low-speed limits and engine failure as a result of the devices.
                                    After a few months, the scheme was unceremoniously abandoned
                                    with no impact to show for it.
                                </p>

                                <P>
                                    Another such scheme was the initiation of mandatory vehicle
                                    inspection that was done in July 2016 when the government
                                    contracted Societe Generale de Surveillance (SGS) to do the job.
                                    The proponents of this exercise cited the fact that many cars in
                                    Uganda are in very bad mechanical condition and needed to be
                                    inspected for their roadworthiness. The real problem was that
                                    Uganda was importing many used cars manufactured over
                                    twenty-five years ago and when such automobiles are driven on
                                    the dusty potholed Ugandan roads, their mechanical degeneration
                                    is dangerous. The rational decision was to stop the importation
                                    of old vehicles as was later done in June 2018. But because the
                                    team sponsoring the SGS deal back in 2016, it was not about
                                    solving the problem but simply profiting from the monopoly of
                                    mandatory nationwide vehicle inspection. Indeed after a few
                                    months of public protest, the idea proved to be difficult in its
                                    original form and vehicle inspection became voluntary.
                                </P>
                                <p>This modus operandi is given fertile ground by the government’s
                                    tolerance of corruption which has resulted in malignant impunity
                                    in the hall of power. The president has on multiple occasions
                                    expressed his mild approach to corruption in a consistently
                                    stunning way. While attending the 25th anniversary of
                                    Transparency International Uganda, the President said that the
                                    laws and the institutions are there to fight corruption but he
                                    does not need a frightened civil service. On his 2021
                                    inauguration, the President said that there is no bribery in
                                    government that he is not aware of. Perhaps his most alarming
                                    comment was on the opening of the new law year in February 2022
                                    when he said that corruption is not so bad because corrupt
                                    people build hotels and create jobs. This soft speech on
                                    corruption is the reason why government officials are actively
                                    engaging in corruption. The assurance that there are no serious
                                    consequences to corruption or foul play is a critical booster
                                    for the appetite for public funds.
                                </p>
                                <p>Given the humongous nature of the government, it is difficult to
                                    know how much damage has been caused to the country. The
                                    citizenry must use this coffee deal to reflect on the nature of
                                    public affairs and become more vigilant. History has proven that
                                    whenever the citizenry is vigilant, the government is
                                    restrained.
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
