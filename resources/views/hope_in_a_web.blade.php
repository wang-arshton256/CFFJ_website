<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Family-Stories -CFFJ</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap"
        rel="stylesheet">

    <link href="//fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600&display=swap"
        rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


    <link href="assets/family-stories-fonts" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/stories-style-starter.css">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- header -->
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
                            <li><a href="{{ url('outreach') }}">Training, Outreach and
                                    Advocacy</a></li>
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
                    <h2>Family Stories</h2>

                    <ol>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Family Stories</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Blog Section -->

        <!-- //header -->
        <!-- /homeblock1-->
        <section class="w3l-homeblock1 py-sm-5 py-4 d-none">
            <div class="container py-md-4">
                <div class="grids-area-hny main-cont-wthree-fea row">
                    <div class="col-lg-3 col-6 grids-feature">
                        <a href="beauty.html">
                            <div class="area-box">
                                <span class="fa fa-bath"></span>
                                <h4 class="title-head">Beauty</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-6 grids-feature">
                        <a href="fashion.html">
                            <div class="area-box">
                                <span class="fa fa-female"></span>
                                <h4 class="title-head">Fashion and style</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-6 grids-feature mt-lg-0 mt-md-4 mt-3">
                        <a href="#food">
                            <div class="area-box">
                                <span class="fa fa-cutlery"></span>
                                <h4 class="title-head">Food and wellness</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-6 grids-feature mt-lg-0 mt-md-4 mt-3">
                        <a href="#lifsetyle">
                            <div class="area-box">
                                <span class="fa fa-pie-chart"></span>
                                <h4 class="title-head">Lifestyle</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- //homeblock1-->

        <section class="w3l-testimonials d-none" id="testimonials">
            <!-- main-slider -->
            <div class="testimonials pt-2 pb-5">
                <div class="container pb-lg-5">
                    <div class="owl-testimonial owl-carousel owl-theme mb-md-0 mb-sm-5 mb-4">
                        <div class="item">
                            <div class="row slider-info">
                                <div class="col-lg-8 message-info align-self">
                                    <span class="label-blue mb-sm-4 mb-3">Beauty</span>
                                    <h3 class="title-big mb-4">Create an Art that shows the beauty
                                        in
                                        everyone’s ideas of flaws.
                                    </h3>
                                    <p class="message">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Ea
                                        sit id accusantium officia quod quasi necessitatibus
                                        perspiciatis Harum error
                                        provident quibusdam tenetur. Ut fermentum leo quis sapienet
                                        faucibus, at
                                        scelerisque sem feugiat. Nulla in eros purus.</p>
                                </div>
                                <div class="col-lg-4 col-md-8 img-circle mt-lg-0 mt-4">
                                    <img src="assets/images/beauty.jpg"
                                        class="img-fluid radius-image-full" alt="client image">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row slider-info">
                                <div class="col-lg-8 message-info align-self">
                                    <span class="label-blue mb-sm-4 mb-3">Fashion and Style</span>
                                    <h3 class="title-big mb-4">Addicted to Fashion is the Armor to
                                        survive the reality of
                                        Everyday Life.
                                    </h3>
                                    <p class="message">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Ea
                                        sit id accusantium officia quod quasi necessitatibus
                                        perspiciatis Harum error
                                        provident quibusdam tenetur. Ut fermentum leo quis sapienet
                                        faucibus, at
                                        scelerisque sem feugiat. Nulla in eros purus.</p>
                                </div>
                                <div class="col-lg-4 col-md-8 img-circle mt-lg-0 mt-4">
                                    <img src="assets/images/fashion.jpg"
                                        class="img-fluid radius-image-full" alt="client image">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row slider-info">
                                <div class="col-lg-8 message-info align-self">
                                    <span class="label-blue mb-sm-4 mb-3">Food and Wellness</span>
                                    <h3 class="title-big mb-4">Create healthy habits, not
                                        restrictions.
                                        Wellness is a taste of
                                        being.
                                    </h3>
                                    <p class="message">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Ea
                                        sit id accusantium officia quod quasi necessitatibus
                                        perspiciatis Harum error
                                        provident quibusdam tenetur. Ut fermentum leo quis sapienet
                                        faucibus, at
                                        scelerisque sem feugiat. Nulla in eros purus.</p>
                                </div>
                                <div class="col-lg-4 col-md-8 img-circle mt-lg-0 mt-4">
                                    <img src="assets/images/food.jpg"
                                        class="img-fluid radius-image-full" alt="client image">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row slider-info">
                                <div class="col-lg-8 message-info align-self">
                                    <span class="label-blue mb-sm-4 mb-3">Lifestyle</span>
                                    <h3 class="title-big mb-4">To succeed in Life, you need 3 things
                                        : a
                                        wishbone, a backbone, a
                                        funny bone.
                                    </h3>
                                    <p class="message">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Ea
                                        sit id accusantium officia quod quasi necessitatibus
                                        perspiciatis Harum error
                                        provident quibusdam tenetur. Ut fermentum leo quis sapienet
                                        faucibus, at
                                        scelerisque sem feugiat. Nulla in eros purus.</p>
                                </div>
                                <div class="col-lg-4 col-md-8 img-circle mt-lg-0 mt-4">
                                    <img src="assets/images/lifestyle.jpg"
                                        class="img-fluid radius-image-full" alt="client image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /main-slider -->
        </section>

        <!-- ======= Bread crumbs ======= -->
        <section class="services pt-3">
            <div class="container">
                <div class="section-title">

                    <h2>Family Stories</h2>
                    <p> The memories we make with our family is everything. Join the CFFJ
                        community,<br>
                        share
                        your ideas and stories, and inspire the world. </p>

                </div>

            </div>
        </section>
        <!-- ======= Bread crumbs ======= -->
        <div class="w3l-homeblock2 w3l-homeblock5 py-5 ">
            <div class="container pt-md-4 pb-md-5">
                <!-- block -->
                <h3 class="category-title mb-3 offset-3" > HOPE IN A WEB OF HARDSHIP</h3>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="bg-clr-white hover-box">
                            <div class="row">
                                <div class="col-sm-5 position-relative">
                                    <a href="#blog-single.html" class="image-mobile">
                                        <img class="card-img-bottom d-block radius-image-full pl-4 pt-5"
                                            src="assets/images/pic1.jpg" alt="Card image cap">
                                    </a>
                                </div>
                                <div class="col-sm-7  blog-details align-self">
                                    <a href="#blog-single.html" class="blog-desc d-none">Health and
                                        wholeness
                                    </a>
                                    <p class="pr-3 align-self">In the stained congestion of Katanga
                                        Kimwanyi zone, where small
                                        shanties are tussle for space with gutters as improvised
                                        paths
                                        and makeshift latrines forged from shallow holes, sticks,
                                        and
                                        sackcloth lives a chaotic neighbourhood. Here, amid crime,
                                        promiscuity and profanity uttering drunkards, Ms Tuhaise
                                        Rose
                                        Mary raises her family of six. Her family is more than
                                        complete,
                                        with three sons, two daughters, and one grandchild. The
                                        forty-two-year-old mother begins her day with a prayer
                                        invoking
                                        the Almighty to take the lead, a practice she has diligently
                                        instilled in her children. She then begins her daily hunt
                                        for
                                        those with dirty laundry to whom she can offer her cleaning
                                        services at a humble price of five thousand shillings. Upon
                                        receipt of the fruits of her sweat, Mary rushes home to
                                        prepare
                                        a meal for her already hungry children who have grown
                                        familiar
                                        with the single meal custom at home. Amidst the competing
                                        needs
                                        of life that she and her children have, this mother has to
                                        identify the most pressing of needs to spend on
                                    </p>



                                </diV>
                                <div class=" pl-4 ml-2 mr-2 card-body blog-details align-self ">

                                    <p>meticulously.
                                        Usually, her discretion favours the seventy-thousand
                                        shillings
                                        rent fee, food, and her children’s school needs above all
                                        else.
                                        The family’s financial improvisation strategy is in a
                                        neighbourhood saving scheme where Mary saves a few shillings
                                        until her turn of getting the group loan comes. Her usual
                                        limit
                                        is one hundred fifty thousand shillings of loaned money
                                        which
                                        she splits into driblets to cater for the family’s top
                                        priorities. While the saving scheme has proved to be
                                        helpful,
                                        there is immense pressure mounted on her to forage for money
                                        to
                                        pay daily instalments and provide food for her toddlers. She
                                        cannot afford to break the trust of the scheme members as
                                        this
                                        is the family’s only financial cushion.</p>



                                    <p>This is the situation that Mary and
                                        her children have had to
                                        adjust to in the past five years since their father jumped
                                        ship
                                        and retreated to the comfort of his village in Fort Portal.
                                        The
                                        desertion of the family’s sole breadwinner dealt a huge blow
                                        to
                                        Mary and the children. With nowhere to
                                        start, the family was evicted from the more spacious house
                                        they
                                        rented in Katanga and relegated to the single-roomed shack
                                        they
                                        now reside in. Struck with a drastic change of status quo,
                                        the
                                        children grew despondent, and depression took a toll on
                                        them.
                                        The usual three meals a day were gone and gone for good, the
                                        occasional change of meals was now out of the question, and
                                        all
                                        family resources were to be utilized with utmost frugality.
                                        In
                                        the face of this vicissitude of life, the children rejected
                                        the
                                        unfamiliar food improvised by their mother and were often
                                        plunged into deep thoughts, wondering what occurred to their
                                        father. Questioning what wrong they had done to deserve such
                                        harsh treatment. Gripped with desperation and hardship, Mary
                                        constantly contacted the father of her children, persuading
                                        him
                                        to return or to at least send financial support to the
                                        family,
                                        but all was in vain. After close to two years of futile
                                        efforts
                                        to persuade her deserted partner, Mary came to terms with
                                        the
                                        fact that he was never going to return. By now, the children
                                        had
                                        also accepted the life they had been forced to live and
                                        rallied
                                        around their mother.
                                    </p>





                                    <p>Owing to the nature of the neighbourhood, Mary was hit by yet
                                        another blow, her firstborn son, dropped out of school and
                                        picked up the habit of gallivanting around the slum. With no
                                        aim
                                        of getting any gainful employment, he started drinking and
                                        engaging in all forms of detestable behaviour typical of
                                        slum
                                        dwellers. This stirred up a never-ending fear of having her
                                        younger children turn out to be like their older brother,
                                        who
                                        chose a life of unproductivity. On some occasions, she hears
                                        her
                                        younger children regurgitating the profanities usually
                                        spoken by
                                        neighbours and recount incidents of fights and bitter
                                        quarrels
                                        that happen in the congested neighbourhood. This disquiets
                                        her
                                        soul and resurrects her worry about her children not
                                        becoming
                                        what she wants them to be. To arrest this occurrence, she
                                        has
                                        instilled a culture of prayer that all children are bound to
                                        follow. The daily prayers and occasional fasting have, in
                                        her
                                        observation, created a form of restraint among her children
                                        and
                                        lit a dim ray of hope in their hearts. Although her
                                        firstborn is
                                        still not part of the family’s spiritual journey, she hopes
                                        that
                                        he will get on board.
                                    </p>
                                    <p>Another source of constant worry and anxiety is the fate of
                                        her
                                        mentally impaired son, who needs extra attention to navigate
                                        the
                                        daily tasks of the day. Kato Vincent obtained this
                                        impairment as
                                        a result of the poor posture of the twins in the womb during
                                        pregnancy. While his twin sister Babirye Immaculate has
                                        progressed to primary two, Kato’s education journey is still
                                        hampered by his mental impairment. Seeing her toddler son in
                                        a
                                        state of helplessness adds to the already heavy emotional
                                        burden
                                        she has to carry.

                                    </p>
                                    <p>
                                        Grim as the circumstances are, Mary hopes her children can
                                        grow
                                        up to become responsible citizens of this country and live a
                                        much better life than she can give them. Her single most
                                        important aspiration is to see her children finish school.
                                        The
                                        audacity to aspire and dream in such unrelenting turbulence
                                        speaks to the calibre of unsung heroes that Mary belongs to.
                                        An
                                        example of the strength of a mother, a heart that does not
                                        fumble and a spirit that never surrenders. The kind that
                                        William
                                        Ernest Henley referred to in his Invictus poem. Indeed, her
                                        head
                                        is bloody but unbowed.
                                    </p>
                                </div>
                                <diV>
                                    <div class="author align-items-center pl-5 pb-5">
                                        <img src="assets/images/a1.jpg" alt=""
                                            class="img-fluid rounded-circle">
                                        <ul class="blog-meta">
                                            <li>
                                                <a href="author.html">By Audrey Barungi
                                                </a>
                                            </li>
                                            <li class="meta-item blog-lesson">
                                                <span class="meta-value"> May 16, 2022 </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4 d-none">
                        <div class="bg-clr-white hover-box">
                            <div class="row">
                                <div class="col-sm-5 position-relative">
                                    <a href="#blog-single.html" class="image-mobile">
                                        <img class="card-img-bottom d-block radius-image-full"
                                            src="assets/images/beauty10.jpg" alt="Card image cap">
                                    </a>
                                </div>
                                <div class="col-sm-7 card-body blog-details align-self">
                                    <a href="#blog-single.html" class="blog-desc">Take steps
                                        to
                                        beautiful Summer Feet with Spa experience </a>
                                    <div class="author align-items-center">
                                        <img src="assets/images/a2.jpg" alt=""
                                            class="img-fluid rounded-circle">
                                        <ul class="blog-meta">
                                            <li>
                                                <a href="author.html">Charlotte mia</a>
                                            </li>
                                            <li class="meta-item blog-lesson">
                                                <span class="meta-value"> July 13, 2020
                                                </span>.
                                                <span class="meta-value ml-2"><span
                                                        class="fa fa-clock-o"></span> 1 min</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4 d-none">
                        <div class="bg-clr-white hover-box">
                            <div class="row">
                                <div class="col-sm-5 position-relative">
                                    <a href="#blog-single.html" class="image-mobile">
                                        <img class="card-img-bottom d-block radius-image-full"
                                            src="assets/images/beauty5.jpg" alt="Card image cap">
                                    </a>
                                </div>
                                <div class="col-sm-7 card-body blog-details align-self">
                                    <a href="#blog-single.html" class="blog-desc">Tried and
                                        Tested: Thermal Spa and Turkish Experience
                                    </a>
                                    <div class="author align-items-center">
                                        <img src="assets/images/a1.jpg" alt=""
                                            class="img-fluid rounded-circle">
                                        <ul class="blog-meta">
                                            <li>
                                                <a href="author.html">Isabella ava</a>
                                            </li>
                                            <li class="meta-item blog-lesson">
                                                <span class="meta-value"> July 13, 2020
                                                </span>.
                                                <span class="meta-value ml-2"><span
                                                        class="fa fa-clock-o"></span> 1 min</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4 d-none">
                        <div class="bg-clr-white hover-box">
                            <div class="row">
                                <div class="col-sm-5 position-relative">
                                    <a href="#blog-single.html" class="image-mobile">
                                        <img class="card-img-bottom d-block radius-image-full"
                                            src="assets/images/beauty6.jpg" alt="Card image cap">
                                    </a>
                                </div>
                                <div class="col-sm-7 card-body blog-details align-self">
                                    <a href="#blog-single.html" class="blog-desc">3 Incredible
                                        Facials, Makeups you Simply have to try</a>
                                    <div class="author align-items-center">
                                        <img src="assets/images/a3.jpg" alt=""
                                            class="img-fluid rounded-circle">
                                        <ul class="blog-meta">
                                            <li>
                                                <a href="author.html">Elizabeth</a>
                                            </li>
                                            <li class="meta-item blog-lesson">
                                                <span class="meta-value"> July 13, 2020
                                                </span>.
                                                <span class="meta-value ml-2"><span
                                                        class="fa fa-clock-o"></span> 1 min</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4 d-none">
                        <div class="bg-clr-white hover-box">
                            <div class="row">
                                <div class="col-sm-5 position-relative">
                                    <a href="#blog-single.html" class="image-mobile">
                                        <img class="card-img-bottom d-block radius-image-full"
                                            src="assets/images/beauty1.jpg" alt="Card image cap">
                                    </a>
                                </div>
                                <div class="col-sm-7 card-body blog-details align-self">
                                    <a href="#blogd-none-single.html"
                                        class="blog-desc">Natural
                                        Spa -
                                        Where you feel unique and special
                                    </a>
                                    <div class="author align-items-center">
                                        <img src="assets/images/a1.jpg" alt=""
                                            class="img-fluid rounded-circle" />
                                        <ul class="blog-meta">
                                            <li>
                                                <a href="author.html">Isabella ava</a> </a>
                                            </li>
                                            <li class="meta-item blog-lesson">
                                                <span class="meta-value"> July 13, 2020
                                                </span>.
                                                <span class="meta-value ml-2"><span d-none
                                                        class="fa fa-clock-o"></span> 1 min</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4 d-none">
                        <div class="bg-clr-white hover-box">
                            <div class="row">
                                <div class="col-sm-5 position-relative">
                                    <a href="#blog-single.html" class="image-mobile">
                                        <img class="card-img-bottom d-block radius-image-full"
                                            src="assets/images/beauty2.jpg" alt="Card image cap">
                                    </a>
                                </div>
                                <div class="col-sm-7 card-body blog-details align-self">
                                    <a href="#blog-single.html" class="blog-desc">How to get
                                        Beautiful coloring Highlights this weak
                                    </a>
                                    <div class="author align-items-center">
                                        <img src="assets/images/a2.jpg" alt=""
                                            class="img-fluid rounded-circle" />
                                        <ul class="blog-meta">
                                            <li>
                                                <a href="author.html">Charlotte mia</a> </a>
                                            </li>
                                            <li class="meta-item blog-lesson">
                                                <span class="meta-value"> July 13, 2020
                                                </span>.
                                                <span class="meta-value ml-2"><span
                                                        class="fa fa-clock-o"></span> 1 min</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="site-pagination text-center mt-md-5 mt-4">
                    <li><span aria-current="page" class="page-numbers current">1</span></li>
                    <li><a class="page-numbers" href="#page2">2</a></li>
                    <li><a class="page-numbers" href="#page3">3</a></li>
                    <li><span class="page-numbers dots">…</span></li>
                    <li><a class="page-numbers" href="#page7">7</a></li>
                    <li><a class="next page-numbers" href="#next">Next »</a></li>
                </ul>
            </div>
        </div>
        <!-- footer-28 block -->
        @include('sys.footer.footer')


        <section class="app-footer d-none">
            <footer class="footer-28 py-5">
                <div class="footer-bg-layer">
                    <div class="container py-lg-3">
                        <div class="row footer-top-28">
                            <div
                                class="col-lg-4 footer-list-28 copy-right mb-lg-0 mb-sm-5 mt-sm-0 mt-4">
                                <a class="navbar-brand mb-3" href="index.html">
                                    <span class="fa fa-newspaper-o"></span> NewsBlog</a>
                                <p class="copy-footer-28"> © 2020. All Rights Reserved. </p>
                                <h5 class="mt-2">Design by <a
                                        href="https://w3layouts.com/">W3Layouts</a></h5>
                            </div>
                            <div class="col-lg-8 row">
                                <div class="col-sm-4 col-6 footer-list-28">
                                    <h6 class="footer-title-28">Useful links</h6>
                                    <ul>
                                        <li><a href="#categories">food blogs</a></li>
                                        <li><a href="#advertise">Advertise with us</a></li>
                                        <li><a href="#authors">Our Authors</a></li>
                                        <li><a href="contact.html">Get in touch</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-4 col-6 footer-list-28">
                                    <h6 class="footer-title-28">Categories</h6>
                                    <ul>
                                        <li><a href="beauty.html">Beauty</a></li>
                                        <li><a href="fashion.html">Fashion and Style</a></li>
                                        <li><a href="#food"> Food and Wellness</a></li>
                                        <li><a href="#lifestyle">Lifestyle</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-4 col-6 footer-list-28 mt-sm-0 mt-4">
                                    <h6 class="footer-title-28">Social Media</h6>
                                    <ul class="social-icons">
                                        <li class="facebook">
                                            <a href="#facebook"><span
                                                    class="fa fa-facebook"></span>
                                                Facebook</a>
                                        </li>
                                        <li class="twitter"> <a href="#twitter"><span
                                                    class="fa fa-twitter"></span> Twitter</a></li>
                                        <li class="linkedin"> <a href="#linkedin"><span
                                                    class="fa fa-linkedin"></span> Linkedin</a>
                                        </li>
                                        <li class="dribbble"><a href="#dribbble"><span
                                                    class="fa fa-dribbble"></span> Dribbble</a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </footer>

            <!-- move top -->
            <button onclick="topFunction()" id="movetop" title="Go to top">
                <span class="fa fa-angle-up"></span>
            </button>
            <script>
                // When the user scrolls down 20px from the top of the document, show the button
                window.onscroll = function() {
                    scrollFunction()
                };

                function scrollFunction() {
                    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                        document.getElementById("movetop").style.display = "block";
                    } else {
                        document.getElementById("movetop").style.display = "none";
                    }
                }

                // When the user clicks on the button, scroll to the top of the document
                function topFunction() {
                    document.body.scrollTop = 0;
                    document.documentElement.scrollTop = 0;
                }
            </script>
            <!-- /move top -->
        </section>
        <!-- //footer-28 block -->

        <!-- disable body scroll which navbar is in active -->
        <script>
            $(function() {
                $('.navbar-toggler').click(function() {
                    $('body').toggleClass('noscroll');
                })
            });
        </script>
        <!-- disable body scroll which navbar is in active -->

        <!-- Template JavaScript -->
        <script src="assets/js/jquery-3.3.1.min.js"></script>

        <!-- theme changer js -->
        <script src="assets/js/theme-change.js"></script>
        <!-- //theme changer js -->

        <!-- courses owlcarousel -->
        <script src="assets/js/owl.carousel.js"></script>

        <!-- script for testimonials -->
        <script>
            $(document).ready(function() {
                $('.owl-testimonial').owlCarousel({
                    loop: true,
                    margin: 0,
                    nav: true,
                    responsiveClass: true,
                    autoplay: false,
                    autoplayTimeout: 5000,
                    autoplaySpeed: 1000,
                    autoplayHoverPause: false,
                    responsive: {
                        0: {
                            items: 1,
                            nav: false
                        },
                        480: {
                            items: 1,
                            nav: false
                        },
                        667: {
                            items: 1,
                            nav: true
                        },
                        1000: {
                            items: 1,
                            nav: true
                        }
                    }
                })
            })
        </script>
        <!-- //script for testimonials -->

        <!-- bootstrap -->
        <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>
