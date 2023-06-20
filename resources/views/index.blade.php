@include('sys.header.header')



<ul>
    <li><a class="active" href="{{ url('index') }}">Home</a></li>
    <li><a href="{{ url('about') }}">About Us</a></li>
    
    <li><a href="{{ url('policyrecommendations') }}">Policy Recommendations</a></li>
<li><a href="{{url('programs')}}">Programs</a></li>

    <li><a href="{{ url('blog') }}">Blog</a></li>
    <li class="dropdown"><a href=""><span>Our Work</span> <i
                class="bi bi-chevron-down"></i></a>
        <ul>

            <li class="dropdown"><a href=""><span>Research and
                        Publications</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                    <li><a href="{{ url('researchandpublications') }}">Research and
                            Publications</a>
                    </li>

                </ul>
            </li>
            <li><a href="{{ url('businessandinnovations') }}"">Business & innovation</a></li>
            <li><a href="#">Consultancy & Advisory services</a></li>
            <li><a href="{{ url('policydialogueandwebinars') }}">Policy dialogues and Webinars</a>
            </li>
            <li><a href="{{ url('opinionbank') }}">Opinion Bank</a></li>
            <li><a href="{{ url('outreach') }}">Training, Outreach and Advocacy</a></li>
            <li><a href="#">Symposia, Conferences and Workshops</a></li>
            <li><a href="{{ url('podcasts') }}">Podcasts</a></li>



        </ul>
    </li>
    <li><a href="{{ url('contact') }}">Contact Us</a></li>
</ul>
<i class="bi bi-list mobile-nav-toggle"></i>





</nav><!-- .navbar -->
</div>
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


<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-cntent-center align-items-center">
    
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel"
        data-bs-interval="5000">

        <!-- Slide 1 -->
        <div class="carousel-item active">
            <div class="carousel-container">
                <h2 class="animate__animated animate__fadeInDown"><span>Excellence <br> in Public
                        Policy</span></h2>
                <p class="animate__animated animate__fadeInUp">Since our beginning, we have worked
                    tirelesly to earn our reputation for quality, service and dependability</p>
                <a href="{{url ('about')}}"
                    class="btn-get-started animate__animated animate__fadeInUp">Learn More</a>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
            <div class="carousel-container">
                <h2 class="animate__animated animate__fadeInDown">Excellence <br> in Public Policy
                </h2>
                <p class="animate__animated animate__fadeInUp">Since our beginning, we have worked
                    tirelesly to earn our reputation for quality, service and dependability</p>
                <a href="{{url ('about')}}"
                    class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
            <div class="carousel-container">
                <h2 class="animate__animated animate__fadeInDown">Excellence <br> in Public Policy
                </h2>
                <p class="animate__animated animate__fadeInUp">Since our beginning, we have worked
                    tirelesly to earn our reputation for quality, service and dependability</p>
                <a href="{{url ('about')}}"
                    class="btn-get-started animate__animated animate__fadeInUp">Read More</a>

            </div>
        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        </a>

    </div>
</section><!-- End Hero -->


<main id="main">

    <!-- ======= Services Section ======= -->
    <section class="services">
        <div class="container">
            <div class="section-title">
                <h2>Top Quality Research in

                    Faith, Family & Justice</h2>

            </div>


        </div>
    </section><!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
        <div class="container">

            <div class="row">
                <div class="col-lg-6 video-box">
                    <img src="assets/img/whyus1.jpg" class="img-fluid" alt="">
                    <a href="" class="venobox play-btn mb-4" data-vbtype="video"
                        data-autoplay="true"></a>
                </div>

                <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

                    <div class="icon-box">
                        <div class="icon"><span class="iconify"
                                data-icon="carbon:pedestrian-family" data-width="35"
                                data-height="35"></span></span></div>
                        <h4 class="title"><a href="">ABOUT THE CENTER OF FAITH, FAMILY AND
                                JUSTICE</a></h4>
                        <p class="description">The Center of Faith, Family and Justice (CFFJ) is a Ugandan Christian Think Tank founded in 2021 to contribute to evidence-based policy, advocacy, and decision making. Our main focus is to promote the development of a society with strong faith, family, and just institutions. We aspire to connect policymakers and citizens; and to build transformed, resilient, and integrated communities.</p>

                    </div>

                    <div class="icon-box">
                        <div class="icon"><span class="iconify"
                                data-icon="healthicons:justice" data-width="35"
                                data-height="35"></span></div>
                        <p class="description">Our main focus is to promote the development of a
                            society with strong faith, family, and just institutions. We aspire to
                            connect policymakers and citizens; and to build transformed, resilient,
                            and integrated communities.</p>
                    </div>

                </div>
            </div>

        </div>
    </section>
    
    <!-- End Why Us Section -->


    
    
    <!--what we do-->
    <section class="service-details pt-5">
        <div class="container">


            <section class="services">
                <div class="container">
                    <div class="section-title">
                        <h6>OUR ACTIVITIES</h6>
                        <h1>What we do</h1>
                        <p>CFFJ engages different stakeholders on different platforms to find policy
                            alternatives <br> and solutions to the varied challenges in local
                            communities through public dialogue.</p>

                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch"
                            data-aos="fade-up">
                            <div class="icon-box icon-box-pink">
                                <div class="icon"><span class="iconify"
                                        data-icon="akar-icons:book" data-width="35"
                                        data-height="35"></span></div>
                                <h4 class="title"><a href="{{url ('researchandpublications')}}" ">Research and
                                        Publications</a></h4>
                                <p class="description">A key part of our work is to engage in
                                    research related to our areas of interest.</p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up"
                            data-aos-delay="100">
                            <div class="icon-box icon-box-cyan">
                                <div class="icon"><span class="iconify"
                                        data-icon="mdi:frequently-asked-questions" data-width="35"
                                        data-height="35"></span></div>
                                <h4 class="title"><a href="">Consultancy & Advisory
                                        services</a></h4>
                                <p class="description">CFFJ’s goal is to advocate for policies
                                    that recognize the dignity of all people.</p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="icon-box icon-box-green">
                                <div class="icon"><span class="iconify"
                                        data-icon="openmoji:people-dialogue" data-width="35"
                                        data-height="35"></span></div>
                                <h4 class="title"><a
                                        href="{{url ('policydialogueandwebinars')}}">Policy dialogues and
                                        Webinars</a></h4>
                                <p class="description">From our weekly Policy Labs, regular
                                    Policy Training, and research internships.</p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="icon-box icon-box-blue">
                                <div class="icon"><span class="iconify"
                                        data-icon="grommet-icons:workshop" data-width="35"
                                        data-height="35"></span></i></div>
                                <h4 class="title"><a href="">Training, Outreach and
                                        Advocacy</a></h4>
                                <p class="description">CFFJ is devoted to training the next
                                    generation of policy thinkers, advocates..</p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="icon-box icon-box-cyan">
                                <div class="icon"><span class="iconify"
                                        data-icon="healthicons:community-meeting-outline"
                                        data-width="35" data-height="35"></span></i></div>
                                <h4 class="title"><a href="">Symposia, Conferences and
                                        Workshops</a></h4>
                                <p class="description">CFFJ is available to provide consultation
                                    services for interested parties.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch"
                            data-aos="fade-up" data-aos-delay="200">
                            <div class="icon-box icon-box-green">
                                <div class="icon"><span class="iconify"
                                        data-icon="bx:bx-podcast" data-width="35"
                                        data-height="35"></span></i></div>
                                <h4 class="title"><a href="podcasts.html">Podcasts</a>
                                </h4>
                                <p class="description">Stay tuned,CFFJ podcasts are launching
                                    soon on our platforms.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

        </div>
    </section>
    <!--what we do-->



   
    <!--  Events section -->
    <section class=" section-bg" data-aos="fade-up" date-aos-delay="200">


        <div class="container py-lg-5 py-md-4">
            <div class="row align-items-center">
                <div class="col-lg-4 bg-white pt-2 pb-2">
                    <h3 class="title-big section-bg section-title why-us mw-100 pt-3  eventtext">
                        Explore solutions</h3>
                </div>
                <div class="col-lg-5 mt-lg-0 mt-md-4 mt-4">
                    <p>From our weekly Policy Labs, regular Policy Training, and research
                        internships.</p>
                </div>

                <div class="col-lg-3 text-lg-right mt-lg-0 mt-3">
                    <a href="{{ url('events') }}" class="btn btn-secondary btn-style "
                        style="background-color:">View all events</a>
                </div>

            </div>
            
            
                
                
            <div class="row mt-md-5 mt-4 text-center  pt-4 pb-4 ">
                
                
                <div class="col-lg-4 col-md-2">
                    <div class="grids5-info">
                        <a href="#service" class="d-block zoom"><img
                                src="assets/img/publications/Barriers Paper-Exec Summary.png" alt=""
                                class="img-fluid service-image" /></a>
                        <div class="blog-info shadow pt-4 pb-4">
                            <h4 class="pt-3"> A Plan to Help Families in Uganda Support Themselves by Removing Barriers to Wellbeing.
                            </h4>

                            <p class="px-2 py-1"> </p>
                            <a
                                href="assets/files/pdfpublications/Barriers Paper 1.pdf">
                                Click here to read report</a>

                        </div>
                    </div>
                </div>
                
                
                <div class="col-lg-4 col-md-2">
                    <div class="grids5-info">
                        <a href="#service" class="d-block zoom"><img
                                src="assets/img/publications/cffj annual report.png" alt=""
                                class="img-fluid service-image" /></a>
                        <div class="blog-info shadow pt-4 pb-4">
                            <h4 class="pt-3">CFFJ anunual report 2021-2022.
                            </h4>

                            <p class="px-2 py-2"> Center of Faith, Family and Justice presents to you the annual report for the year 2021-2022.</p>
                            <a
                                href="assets/files/pdfpublications/CFFJ Annual Report 2021-22.pdf">
                                Click here to read report</a>

                        </div>
                    </div>
                </div>

            
            <div class="col-lg-4 col-md-2">
                    <div class="grids5-info">
                        <a href="#service" class="d-block zoom"><img
                                src="assets/img/events/shea.png" alt=""
                                class="img-fluid service-image" /></a>
                        <div class="blog-info shadow pt-4 pb-4">
                            <h4 class="pt-3">SAVE THE SHEA NUT TREE
                            </h4>

                            <p class="px-2 py-2">Save the Ugandan Heritage Campaign</p>
                            <P><strong>Duration</strong> 11th to 12th August, 2022</P>

                                                            <script src="https://cdn.logwork.com/widget/countdown.js"></script>
<a href="https://logwork.com/countdown-wv2k" class="countdown-timer" data-timezone="America/Chicago" data-date="2022-08-11 10:02">.</a>

                        </div>
                        
                    </div>
                </div>

                    

                <div class="col-lg-4 col-md-2 d-none">
                    <div class="grids5-info">
                        <a href="#service" class="d-block zoom"><img
                                src="assets/img/events/International Women's Day Poster.png" alt=""
                                class="img-fluid service-image" /></a>
                        <div class="blog-info shadow pt-4 pb-4">
                            <h4 class="pt-3">Happy International Women's Day.
                            </h4>

                            <p class="px-2 py-2"> Happy women's day to the change agents out
                                there. We celebrate you
                                all.</p>

                        </div>
                    </div>
                </div>


               



                <div class="col-lg-4 col-md-6 d-none">
                    <div class="grids5-info">
                        <a href="#service" class="d-block zoom"><img
                                src="assets/img/events/christmas.png" alt=""
                                class="img-fluid service-image" /></a>
                        <div class="blog-info shadow">
                            <h4 class="pt-3">Center of Faith, Family and Justice would
                                like to wish you and your family a Merry Christmas and a happy new
                                year.
                            </h4>

                            <p> May this season find you among those you love, sharing in the twin
                                glories of generocity and gratitude</p>

                        </div>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6 mt-lg-0 mt-5 d-none">
                    <div class="grids5-info">
                        <a href="#service" class="d-block zoom"><img
                                src="assets/img/events/agribusinessflyerc.jpg" alt=""
                                class="img-fluid service-image" /></a>
                        <div class="blog-info shadow pt-4 pb-4">
                            <h4 class="pt-3">Exploring Opportunities For Youth In Agri
                                Business Webinar
                            </h4>
                            <p>25-Nov-2021 -Previous</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-lg-0 mt-5 d-none">
                    <div class="grids5-info">

                        <a href="#service" class="d-block zoom"><img
                                src="assets/img/events/newposterb.png" alt=""
                                class="img-fluid service-image" /></a>


                        <div class="blog-info shadow pt-4 pb-4">


                            <h4 class="pt-3">Feminism, Family and the AFrican Culture.
                            </h4>
                            <p>28-Oct-2021 - Previous</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </section>
    <!--  //Events section -->

    <!--blog-->
    <section class="service-details">
        <div class="container">


            <section class="services pt-5">
                <div class="container">
                    <div class="section-title">
                        <h6>OUR UPDATES</h6>
                        <h1>Latest News and Blogs</h1>
                        <p>We intend to share much of our research through publications that will be
                            of interest to other think-tanks,<br> policy researchers, elected
                            officials, and thoughtful members of the public.</p>

                    </div>
                    <div class="row">
                    
                    <div class="card" style="width: 25rem; padding-top: 7rem;">

                                <div class="card-body">
                                    <h5 class="card-title">Does Public Investment
                                        in Infrastructure contribute to economic growth in Uganda?
                                    </h5>
                                    <h6>By Cynthia
                                        Mbabazi</h6>
                                    <p class="card-text">Public investment, particularly in
                                        infrastructure, plays a
                                        significant role in economic growth and is a critical part
                                        of the transition to a more sustainable and resilient world
                                        (UNOPS,
                                        The Economist, 2019; Wor-
                                    </p>
                                    <a href="{{ url('public_Investment') }}"
                                        class="btn btn-primary">Read
                                        more</a>
                                </div>
                            </div>
                        
                        
                       <div class="card" style="width: 25rem; padding-top: 7rem;">

                            <div class="card-body">
                                <h5 class="card-title">The Cost Of The
                                    Democratic Governance Facility’s Continued Suspension
                                </h5>
                                <h6>By PaulLincoln Kalema</h6>
                                <p class="card-text">In the immediate aftermath of the 2021 general elections,
                                    Uganda’s President-elect indefinitely suspended the operations
                                    of the Democratic Governance Facility (DGF). The process of this
                                    moratorium officially began when </p>
                                <a href="{{ url('democratic_governance') }}" class="btn btn-primary">Read
                                    more</a>
                            </div>
                        </div>


                        <div class="card" style="width: 25rem; padding-top: 7rem;>
          <img class="               card-img-top"
                                        src="assets/img/blog/" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">THE RAMPANT CASES OF
                                                TEENAGE PREGNANCIES IN UGANDA</h5>
                                            <h6>By Sharon
                                                Ainembabazi</h6>
                                            <p class="card-text">Of all the cracks the Covid-19
                                                lock-down exposed, the social
                                                issue of teenage pregnancies in Uganda still sticks
                                                out like a
                                                sore thumb. Because of school closure, teenagers
                                                were out of
                                                school and idled for a long time which allowed the
                                                boom of
                                                teenage </p>
                                            <a href="{{ url('teenage_pregnacies') }}"
                                                class="btn btn-primary">Read more</a>
                                        </div>
                            </div>

                    </div>
                </div>
            </section>

        </div>
    </section>
    <!--blog-->

</main><!-- End #main -->
<!--blog-->

</main><!-- End #main -->


@include('sys.footer.footer')
