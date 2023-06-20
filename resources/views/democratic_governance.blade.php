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
                        <li>Democratic Governance</li>
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
                                <img src="assets/img/blog/democratic governance.png" alt=""
                                    class="img-fluid" height="" width="800">
                            </div>


                            <p class="text-danger"><i>Photo: Courtesy of The independent </i> </p>

                            <h2 class="entry-title">
                                <a href="{{ url('teenage_pregnacies') }}">The Cost Of The Democratic Governance Facility’s Continued Suspension 

                                </a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-person"></i>
                                        <a href="{{ url('teenage_pregnacies') }}"> By Paul
                                            Lincoln Kalema


                                        </a>
                                    </li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-clock"></i>
                                        <a href="{{ url('teenage_pregnacies') }}"><time
                                                datetime="2020-01-01">July 4, 2022</time></a>
                                    </li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-chat-dots"></i> <a
                                            href="{{ url('teenage_pregnacies') }}">0
                                            Comments</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    In the immediate aftermath of the 2021 general elections, Uganda’s President-elect indefinitely suspended the operations of the Democratic Governance Facility (DGF). The process of this moratorium officially began when President Yoweri Kaguta Museveni wrote to the Ministry of Finance Planning and Economic Development (MoFPED) expressing his disapproval of how the facility had been given free rein in Uganda. Further, he expressed concern with the fact that the fund single-handedly manages its funds without the involvement of the government of Uganda. The Fountain of Honour directed the Minister of Finance to immediately halt the activities of the facility pending inquiries and considerations from the executive. And so, the hammer fell on 3rd February 2021, sending shock waves in the civil society and some government entities. 





                                </p>
                                <p>
                                    After several back-and-forth negotiations between the government
                                    and officials from DGF, the President “lifted” the suspension of
                                    the facility and allowed it to operate till December 2022.
                                    Currently, the fate of the facility is still in doubt in the
                                    face of this conditional lifting of the ban. For one living in
                                    Uganda, suspension or even total closure of corporate entities
                                    are commonplace, except that the case of DGF is not so ordinary.
                                    The fund is estimated to hold over one hundred twenty million
                                    euros, an equivalent of more than five hundred billion
                                    shillings. It is a basket of funds from countries like Austria,
                                    Denmark, Ireland, Norway, Sweden and the Netherlands augmented
                                    by the European Union. The facility focuses on strengthening
                                    democratic institutions, citizen empowerment, sensitization and
                                    the protection of human rights. While the facility provides
                                    funding and monitors project implementation, the groundwork is
                                    done by more than fifty-eight civil society organisations.





                                </p>

                                <blockquote class="">
                                    <p>
                                        "The DGF basket fund reduces the financial burden on the
                                        government by funding a host of programs for the development
                                        of the country"
                                    </p>
                                </blockquote>

                                <p>
                                    Among the activities funded by DGF include the provision of free
                                    lawyers to the indigent and marginalised; undertaking access to
                                    justice research; monitoring corruption; gender equality and
                                    equity programs; sensitizing the public about the national
                                    budget processes and implementation; advocating and driving for
                                    a progressive mindset change in society to mention but a few.
                                    This is in addition to funding state agencies like the
                                    Parliament of Uganda, New Vision, Uganda Law Society, Kasese
                                    District Local Government, Kitgum District Local Government and
                                    Justice Centres, a state-owned legal aid service centre. For all
                                    the above entities, citizen engagement has been at the core of
                                    the programs undertaken under DGF’s facilitation to achieve the
                                    target of creating a responsive citizenry.




                                </p>

                                <p>
                                    After more than a year since the facility was suspended, we
                                    ought to look beyond the reasons given for its suspension. It
                                    behoves us to ask a few questions and contextualize the matter.
                                    In a country where the government policy has for decades
                                    favoured and continues to favour foreign direct investment, why
                                    are DGF’s foreign gathered funds suddenly questionable? The most
                                    outstanding query from the government is why the DGF solely
                                    administers the hefty one hundred million euro fund without
                                    government consultation or involvement. But in a free and
                                    democratic nation, this should not be a matter of dispute since
                                    there are laws that regulate the use of funds with institutions
                                    put in place to monitor the source, appropriation and purpose of
                                    money.




                                </p>

                                <p>
                                    The Financial Intelligence Authority’s role is to combat money
                                    laundering; hence it seizes any illicitly gotten money it
                                    detects. The Inspectorate of Government tracks the utilization
                                    of government funds and combats corruption; therefore, the IGG’s
                                    office is able to track and handle any funds the DGF spends
                                    influencing civil servants. There are a host of other laws and
                                    entities that could be used to gather intelligence and monitor
                                    the operations of any corporate entity to unearth any
                                    wrongdoing. It need not be emphasized that the DGF had never
                                    been accused of breaching any laws relating to financial
                                    discipline or any other particular offence. This continued
                                    suspension is more of a pain to the people of Uganda who
                                    directly or indirectly benefit from its funds.




                                </p>

                                <p>
                                    To monitor and regulate the DGF’s activities, the President
                                    could always instruct the relevant government institution to
                                    brief him about the operation of a given entity and solve any
                                    existing misunderstandings. The impact of the continued DGF
                                    suspension continues to affect thousands of Ugandans, and it is
                                    worth pointing out the magnitude of this misfortune. To begin
                                    with, DGF directly employs thousands of Ugandans in more than
                                    fifty-eight civil society organisations and different government
                                    agencies. The employment of these Ugandans swings in balance as
                                    the suspension continues to bite amidst a time of disturbing
                                    economic hardship, characterised by collapsing businesses and
                                    escalating commodity prices.





                                </p>
                                <p>The beneficiaries of the work done by the different entities
                                    funded by DGF also remain in a very precarious position.
                                    According to the DGF annual report of 2018, 47,926 received
                                    direct free legal services from DGF-funded institutions; 98,204
                                    persons were educated in human rights and civic
                                    responsibilities; 5,813 victims of conflict and torture received
                                    free medical and psychosocial support and 92 studies were
                                    carried out in Uganda. In 2019, 67,681 persons received direct
                                    legal assistance, 3,426 victims of conflict and torture received
                                    medical and psychosocial support, and 459,777 individuals
                                    participated in DGF-supported learning events. All the above
                                    represent a small proportion of work supported by DGF, including
                                    media campaigns against corruption and countless programs where
                                    citizens interface with duty bearers on issues of national
                                    importance.

                                </p>

                                <p>Considering DGF’s economic and social contribution to the
                                    country, it is prudent that the government’s decision bends
                                    toward a complete and meaningful lifting of the ban on this
                                    development partner. For a long time, the government has fallen
                                    short of its responsibilities due to the inadequacy of funds and
                                    the country faces an annual public debt increment to foster
                                    development. The DGF basket fund reduces the financial burden on
                                    the government by funding a host of programs for the development
                                    of the country. Perhaps one of the most significant
                                    contributions of the facility is citizen sensitization and
                                    skilling which enable the people of Uganda to identify
                                    opportunities, cease them and hold their leaders accountable. It
                                    is therefore not only justified but imperative to any
                                    well-intentioned government to iron out any existing
                                    misunderstandings and have the facility running again.

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

                            <h4 class="comments-count">View Comments</h4>

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
                                    <li><a href="https://twitter.com/CFFJ_Ug?s=09">CFFJ_Ug</a>
                                    </li>
                                    <li><a href="{{ url('podcasts') }}">Podcasts</a></li>
                                    <li><a
                                            href="{{ url('researchandpublications') }}">Research</a>
                                    </li>
                                    <li><a href="{{ url('opinionbank') }}">Opinion Bank</a>
                                    </li>

                                </ul>
                            </div><!-- End sidebar tags-->

                        </div><!-- End sidebar -->

                    </div>
                    <!-- End blog sidebar -->

                </div>

            </div>
        </section><!-- End Blog Single Section -->

    </main><!-- End #main -->
    @include('sys.footer.footer')
