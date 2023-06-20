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
                        <li>HOPE IN A WEB OF HARDSHIP</li>
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

                            <div class="entry-img pt-5 px-5">
                                <img src="{{ url('assets/img/blog/hopeinaweb.jpg') }}"
                                    class="img-fluid" alt="" height="" width="800">
                            </div>

                            <h2 class="entry-title">
                                <a href="{{ url('hopeinaweb') }}">HOPE IN A WEB OF HARDSHIP</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-person"></i> <a
                                            href="{{ url('hopeinaweb') }}">by Paul
                                            Lincoln Kalema</a>
                                    </li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-clock"></i> <a
                                            href="blog-single.html"><time datetime="2020-01-01">Feb
                                                15, 2022</time></a></li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-chat-dots"></i> <a
                                            href="{{ url('hopeinaweb') }}l">0 Comments</a></li>
                                </ul>
                            </div>

                            <div class="entry-content">

                                <p>
                                    In the stained congestion of Katanga Kimwanyi zone, where small
                                    shanties are tussle for space with gutters as improvised paths
                                    and makeshift latrines forged from shallow holes, sticks, and
                                    sackcloth lives a chaotic neighbourhood. Here, amid crime,
                                    promiscuity and profanity uttering drunkards, Ms Tuhaise Rose
                                    Mary raises her family of six. Her family is more than complete,
                                    with three sons, two daughters, and one grandchild. The
                                    forty-two-year-old mother begins her day with a prayer invoking
                                    the Almighty to take the lead, a practice she has diligently
                                    instilled in her children. She then begins her daily hunt for
                                    those with dirty laundry to whom she can offer her cleaning
                                    services at a humble price of five thousand shillings. Upon
                                    receipt of the fruits of her sweat, Mary rushes home to prepare
                                    a meal for her already hungry children who have grown familiar
                                    with the single meal custom at home. Amidst the competing needs
                                    of life that she and her children have, this mother has to
                                    identify the most pressing of needs to spend on meticulously.
                                    Usually, her discretion favours the seventy-thousand shillings
                                    rent fee, food, and her children’s school needs above all else.
                                    The family’s financial improvisation strategy is in a
                                    neighbourhood saving scheme where Mary saves a few shillings
                                    until her turn of getting the group loan comes. Her usual limit
                                    is one hundred fifty thousand shillings of loaned money which
                                    she splits into driblets to cater for the family’s top
                                    priorities. While the saving scheme has proved to be helpful,
                                    there is immense pressure mounted on her to forage for money to
                                    pay daily instalments and provide food for her toddlers. She
                                    cannot afford to break the trust of the scheme members as this
                                    is the family’s only financial cushion.

                                </p>
                                <p>

                                    This is the situation that Mary and her children have had to
                                    adjust to in the past five years since their father jumped ship
                                    and retreated to the comfort of his village in Fort Portal. The
                                    desertion of the family’s sole breadwinner dealt a huge blow to
                                    Mary and the children. With nowhere to
                                    start, the family was evicted from the more spacious house they
                                    rented in Katanga and relegated to the single-roomed shack they
                                    now reside in. Struck with a drastic change of status quo, the
                                    children grew despondent, and depression took a toll on them.
                                    The usual three meals a day were gone and gone for good, the
                                    occasional change of meals was now out of the question, and all
                                    family resources were to be utilized with utmost frugality. In
                                    the face of this vicissitude of life, the children rejected the
                                    unfamiliar food improvised by their mother and were often
                                    plunged into deep thoughts, wondering what occurred to their
                                    father. Questioning what wrong they had done to deserve such
                                    harsh treatment. Gripped with desperation and hardship, Mary
                                    constantly contacted the father of her children, persuading him
                                    to return or to at least send financial support to the family,
                                    but all was in vain. After close to two years of futile efforts
                                    to persuade her deserted partner, Mary came to terms with the
                                    fact that he was never going to return. By now, the children had
                                    also accepted the life they had been forced to live and rallied
                                    around their mother.

                                </p>

                                <p>

                                    Owing to the nature of the neighbourhood, Mary was hit by yet
                                    another blow, her firstborn son, dropped out of school and
                                    picked up the habit of gallivanting around the slum. With no aim
                                    of getting any gainful employment, he started drinking and
                                    engaging in all forms of detestable behaviour typical of slum
                                    dwellers. This stirred up a never-ending fear of having her
                                    younger children turn out to be like their older brother, who
                                    chose a life of unproductivity. On some occasions, she hears her
                                    younger children regurgitating the profanities usually spoken by
                                    neighbours and recount incidents of fights and bitter quarrels
                                    that happen in the congested neighbourhood. This disquiets her
                                    soul and resurrects her worry about her children not becoming
                                    what she wants them to be. To arrest this occurrence, she has
                                    instilled a culture of prayer that all children are bound to
                                    follow. The daily prayers and occasional fasting have, in her
                                    observation, created a form of restraint among her children and
                                    lit a dim ray of hope in their hearts. Although her firstborn is
                                    still not part of the family’s spiritual journey, she hopes that
                                    he will get on board.

                                </p>

                                <p>

                                    Another source of constant worry and anxiety is the fate of her
                                    mentally impaired son, who needs extra attention to navigate the
                                    daily tasks of the day. Kato Vincent obtained this impairment as
                                    a result of the poor posture of the twins in the womb during
                                    pregnancy. While his twin sister Babirye Immaculate has
                                    progressed to primary two, Kato’s education journey is still
                                    hampered by his mental impairment. Seeing her toddler son in a
                                    state of helplessness adds to the already heavy emotional burden
                                    she has to carry.

                                </p>

                                <p>
                                    Grim as the circumstances are, Mary hopes her children can grow
                                    up to become responsible citizens of this country and live a
                                    much better life than she can give them. Her single most
                                    important aspiration is to see her children finish school. The
                                    audacity to aspire and dream in such unrelenting turbulence
                                    speaks to the calibre of unsung heroes that Mary belongs to. An
                                    example of the strength of a mother, a heart that does not
                                    fumble and a spirit that never surrenders. The kind that William
                                    Ernest Henley referred to in his Invictus poem. Indeed, her head
                                    is bloody but unbowed.

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

                        </article>
                        
                        <!-- End blog entry -->



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
