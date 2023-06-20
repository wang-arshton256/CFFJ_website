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
                        <li>Mental Health Amidst COVID-19</li>
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

                            <div class="entry-img d-none">
                                <img src="assets/img/blog/status.jpg" alt="" class="img-fluid" >
                            </div>

                            <h2 class="entry-title">
                                <a href="blog-single.html">Mental Health Amidst COVID-19 In
                                    Uganda</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-person"></i> <a
                                            href="blog-single.html">By Cynthia Mbabazi</a></li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-clock"></i> <a
                                            href="blog-single.html"><time datetime="2020-01-01">Aug
                                                21, 2021</time></a></li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-chat-dots"></i> <a
                                            href="blog-single.html">0 Comments</a></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <h2>Effects</h2>
                                <p>
                                    Mental health illnesses can impinge on relationships, income,
                                    physical health, and everyday living. Research shows that
                                    families with dads that have mental illnesses, especially during
                                    early childhood, tend to have children who have difficulty in
                                    managing emotions and behaviours. Persistent mental illnesses
                                    such as stress can also trigger people into destructive
                                    behaviour like domestic violence, crime, brutality, reckless
                                    sexual behaviour, and substance abuse. Additionally, those
                                    living with a mental illness can easily drift into poverty due
                                    to increased healthcare expenditure, stigma and disability.



                                </p>
                                <img src="assets/img/blog/effects.png" class="img-fluid"
                                    alt="">
                                <p>
                                    Image by the Century Foundation
                                </p>




                                <div class="entry-content">

                                    <blockquote>
                                        <p>
                                            "Research shows that religion and spirituality
                                            positively impact mental health by helping a person
                                            tolerate stress, anxiety, and depression through peace,
                                            gratitude, purpose, and forgiveness."
                                        </p>
                                    </blockquote>

                                    <h2>Treatment</h2>
                                    <p>
                                        In Uganda, people living with mental illness, especially
                                        severe cases such as schizophrenia, bipolar mood disorder
                                        and epilepsy, are often pilloried, spurned, and barred from
                                        mainstream society due to social norms as signs of demon
                                        possession. They are deprived of treatment owing to
                                        ignorance about the scope of mental health problems, stigma
                                        against mental illness patients and available treatments.
                                        Access to treatment is lacking, and those that need it the
                                        most are often sent to jails with no assessment from a
                                        psychiatrist or mental health worker. Family, religious
                                        communities and the government have major roles in managing
                                        mental health problems in Uganda in the following ways.
                                    </p>

                                    <h3>Family</h3>
                                    <p>
                                        Family and friends are encouraged to look out for warning
                                        signs such as severe mood changes, behavioural and
                                        communication changes, lack of interest in usual activities,
                                        trouble sleeping and waking up, a decline in performance,
                                        poor concentration, and physiological change amongst their
                                        loved ones. They need to establish trust and openly talk to
                                        mentally ill patients about how they feel and get them
                                        professional help physically or remotely. It is also vital
                                        to recognize paternal mental health and encourage fathers,
                                        and all men, to seek mental health care when they are
                                        struggling.
                                    </p>

                                    <p>
                                        It is a good culture to set a social media schedule,
                                        especially during this COVID -19 isolation since social
                                        networks can be harmful to a people’s mental health. Family
                                        and friends need to give full attention to their loved ones
                                        through constant live communication and entertaining family
                                        activities and trips to help reduce stress and cope with
                                        mental disorders. In addition, patients should be encouraged
                                        to make healthy changes such as reducing alcohol intake,
                                        healthy exercises, meditation, sleeping more, taking a
                                        vacation and eating a balanced diet. Patients must
                                        understand the source of their mental illness and work on
                                        healthy thought patterns with a support network via
                                        self-help groups, friends and family to support everyday
                                        living and reduce the risk of isolation and self-harm.
                                    </p>
                                    <h3>Religion</h3>
                                    <p>
                                        Research shows that religion and spirituality positively
                                        impact mental health by helping a person tolerate stress,
                                        anxiety, and depression through peace, gratitude, purpose,
                                        and forgiveness. Faith communities help people initiate
                                        social connections, which creates a sense of belonging and
                                        offers a trustworthy and safe environment. Religious
                                        communities are encouraged to sensitize their congregation
                                        against discrimination of mentally ill patients by showing
                                        compassion during their worst times and recommending
                                        treatment centres. This is because their disorders do not
                                        define them; individuals deserve compassion and
                                        understanding despite their conditions.
                                    </p>

                                    <h3>Government</h3>

                                </div>

                                <p>
                                    The majority of Uganda’s population is rural, illiterate and
                                    still anchors negative cultural beliefs towards mental health.
                                    The government of Uganda should allocate resources for
                                    mobilisation and sensitisation of communities about mental
                                    health treatment and train professional mental health workers
                                    through appropriate policies and facilities. Government should
                                    also place an appropriate legal and regulatory framework to
                                    address the accessibility and affordability of mental health
                                    care by marginal groups like children, widows and people with
                                    disabilities.
                                </p>

                                <p>
                                    Mental health interventions improve the economic conditions of
                                    affected households, as evidenced in northern Uganda, where
                                    group inter-personal therapy administered by local
                                    non-specialist facilitators made substantial progress in
                                    depression and living conditions of patients. The government of
                                    Uganda should fund health interventions that boost mental
                                    health, such as phone-in calls, radio programmes, group therapy
                                    and tele-counselling.
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
