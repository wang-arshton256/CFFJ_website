
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
                        <li>Cognitive Development</li>
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
                                <img src="assets/img/blog/cognitive development.jpg" alt=""
                                    class="img-fluid" height="" width="800">
                            </div>


                            <p class="text-danger"><i>Photo: Courtesy of The independent </i> </p>

                            <h2 class="entry-title">
                                <a href="{{ url('teenage_pregnacies') }}">The Importance of
                                    Proper Cognitive Development to the Quality of Uganda’s
                                    Population




                                </a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-person"></i>
                                        <a href="{{ url('teenage_pregnacies') }}"> By Sharon
                                            Ainembabazi


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
                                    The importance of proper cognitive development in children is
                                    hardly discussed in Uganda. This is mostly because some people
                                    have no clue about what it is. Cognitive development is the
                                    progress made in thinking and reasoning abilities as a person
                                    grows. It is basically how a person relates with the world
                                    around them, for example, thinking through a problem and solving
                                    it. Cognitive development starts the moment a child is born as
                                    they respond to the new environments around them. But the most
                                    significant cognitive development happens between 0 and 5 years.
                                    The quality of cognitive development in the first five years of
                                    a child determines the kind of life they will lead in future.




                                </p>
                                <p>
                                    In Uganda, it is common to find parents and guardians perplexed
                                    about the curiosity of their toddlers and children in general.
                                    It being an eyebrow-raising matter stems from the cultural
                                    background of Uganda as a country. Ugandan children are taught
                                    to be quiet and obedient, not very expressive of their natural
                                    curiosity, and yet all children are naturally very curious and
                                    want to explore. Traditionally, well mannered children always
                                    listened and rarely asked questions–which was always seen as
                                    challenging authority. This was a very valid concept at the time
                                    because parents and the elderly in society knew almost every
                                    thing there was to know. Back then, exposure to the outside
                                    world was very minimal and non-existent in some communities.
                                    There was no new information coming in per second compared to
                                    the world we live in now. There was no television and above all,
                                    the internet. The birth and embracing of technology raised and
                                    continues to raise questions among not only children but adults
                                    as well. Children are known to be curious. They ask about
                                    anything and everything which also becomes an irritating matter
                                    if parents are not exposed to the fact that asking questions is
                                    a crucial part of cognitive development today. It is also
                                    important for parents to remember that children are exposed to
                                    so much information at such a young age compared to how it was
                                    in the olden days. They ask questions to understand the world
                                    around them and in very rare circumstances with an intent to
                                    irritate.




                                </p>

                                <blockquote class="">
                                    <p>
                                        "Traditionally, well mannered children always listened and
                                        rarely asked questions–which was always seen as challenging
                                        authority"
                                    </p>
                                </blockquote>

                                <p>
                                    Proper cognitive development has a couple of advantages:
                                    processing information faster and more skillfully, understanding
                                    why they do the things they do/grasping the cause and effect of
                                    things, and improved analytical skills, among others. It affects
                                    how children internalize information and approach life in
                                    general. Some ways of promoting quality cognitive development in
                                    children 0-5 years include sing-alongs, identifying noises from
                                    different animals, practicing the alphabet, and offering choices
                                    like presenting two outfits so they can pick one, among others.
                                    All these activities promote meaningful engagement with a child
                                    and along the way stimulate their brain to start thinking and
                                    reasoning intellectually.




                                </p>

                                <p>
                                    A 2020 UNICEF report shows that every 6 in 10 children in Uganda
                                    between the age of 3-5, are not attending pre-primary which can
                                    also be called kindergarten. This number could have definitely
                                    gone higher because of yearly population increase backed by
                                    increased poverty stemming from limited employment opportunities
                                    for parents to support their children through kindergarten.
                                    While children grow up touching soil, leaves and whatever their
                                    hands can land on which is a natural occurrence process in
                                    cognitive development, kindergarten provides an external guided
                                    experience through the same process hence yielding better tuned
                                    children when it comes to problem solving and memory
                                    capabilities among other aspects.



                                </p>

                                <p>
                                    The major contributor to lack of cognitive development is
                                    poverty in Uganda. Poverty makes it impossible for parents to
                                    take their children to school, particularly pre-primary school.
                                    Some parents even look at this as a waste of funds they do not
                                    even have. Most mothers are usually preoccupied with meeting
                                    their children’s basic needs which lowers the chances of
                                    investing in the cognitive development of their children.



                                </p>

                                <p>
                                    Ugandan parents, more so those in rural areas, are not aware of
                                    cognitive development and thus hardly intentionally engage in
                                    these beneficial practices for the good of their children. This
                                    can be partly attributed to the staggering number of teenage
                                    pregnancies in the country-circumstances in which we have babies
                                    grooming babies. Babies who have such young and inexperienced
                                    parents are least likely to enjoy such meaningful engagements
                                    with their parents. The emotional burden of teenage mothers to
                                    look after their babies, figure out a way to go to school, deal
                                    with public shame and at the same time find a source of income
                                    to sustain their families is immense and does not encourage such
                                    a “waste of time”.




                                </p>
                                <p>The importance of proper cognitive development can no longer be
                                    underrated because it directly affects the quality of the
                                    population, hence the development of the country. Also, looking
                                    at the kind of country Uganda is, culture plays a significant
                                    role in inhibiting proper cognitive development. It is common
                                    practice to find children having very little interaction time
                                    with their parents, who are usually much-feared authority
                                    figures. This leads to timidness and a big setback in cognitive
                                    development.
                                </p>

                                <p>Some solutions that can be taken up to address this issue
                                    include: 1) fighting poverty in Uganda through promoting
                                    vocational education especially for young parents to enable them
                                    find stable sources of income to be able to support their
                                    children through pre-primary education 2) It is vital that all
                                    relevant stakeholders carry out sensitization on the matter of
                                    cognitive development. The biggest inhibitor to proper cognitive
                                    development has been ignorance about it. Training and tasking
                                    antenatal practitioners, for example, to pass on cognitive
                                    development information to pregnant mothers, their husbands and
                                    supporting households would go a long way in dealing with the
                                    ignorance. 3) Fighting teenage pregnancies through mass
                                    sensitization in communities, churches, mosques and schools. It
                                    is vital that people understand the repercussions of teenage
                                    pregnancy on quality of life for the children. An unmarried
                                    pregnant mother is less likely to amply provide for and educate
                                    her child.
                                </p>
                                <p>It is important to remember that when your child is asking
                                    questions, it is best to answer and guide them with the right
                                    information, because the world (the media and other people) will
                                    more readily furnish them with its own information. While taking
                                    children to kindergartens and the like, it's important to find
                                    time to talk to them and let them know they can ask questions.
                                    The hope for a better country lies in the quality of its
                                    population. Proper cognitive development plays a crucial role in
                                    boosting the human capacity of its population. Taking up this
                                    mantle would enable us to fight problems like peer pressure,
                                    poor decision-making and reckless behavior. Proper cognitive
                                    development has proven to pave way for efficient problem solvers
                                    as well as boosting confidence as children take on different
                                    challenges or tasks. . Improving the quality of the population
                                    would be a positive contributor to Uganda’s development, and
                                    this can be done through supporting proper cognitive
                                    development.
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
