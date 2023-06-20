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
                    <li class="dropdown"><a href="#"><span>Our Work</span> <i
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

                    <div class="col-lg-8 entries">

                        <article class="entry entry-single">

                            <div class="entry-img  pt-5 px-5">
                                <img src="assets/img/blog/nssf.png" alt="" class="img-fluid"
                                    height="" width="800">
                            </div>


                            <p class="d-none"><i>The photo is a courtesy of </i> </p>

                            <h2 class="entry-title">
                                <a href=" {{ url('A_Stich_In_Time') }}">A Stitch In
                                    Time: The Case of NSSF Mid-term Access

                                </a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-person"></i> <a
                                            href="{{ url('A_Stich_In_Time') }}">By KALEMA PAUL
                                            LINCOLN</a>
                                    </li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-clock"></i> <a
                                            href="{{ url('A_Stich_In_Time') }}"><time
                                                datetime="2020-01-01">Mar
                                                18, 2022</time></a></li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-chat-dots"></i> <a
                                            href="{{ url('A_Stich_In_Time') }}">0 Comments</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    Over the previous weeks, the nation has had its eyes glued to
                                    the National Social Security Fund (NSSF) and the Ministry of
                                    Gender, Labour and Social Development, seeking to understand the
                                    criterion of accessing mid-term savings. This comes after the
                                    NSSF (Amendment) Act 2021 came into force on 4th January 2022.
                                    The Amendment made a host of changes in the operation of the
                                    NSSF, including changes in the board's constitution to provide
                                    for mandatory and voluntary contributions, mid-term access of
                                    savings, and other matters. The amendment as a whole is landmark
                                    legislation that streamlines the functioning of the NSSF in a
                                    way that improves its functionality. However, the most notable
                                    provision of the Amendment is that of mid-term access, which has
                                    been a source of national attention, excitement and
                                    disappointment in equal measure.


                                </p>
                                <p>
                                    Section 20(A) of the NSSF (Amendment) Act 2021 allows persons
                                    forty-five years and above with NSSF savings for at least ten
                                    years access up to 20% of their current savings. On the other
                                    hand, persons with disabilities who have attained forty years
                                    are eligible to access up to 50% of their NSSF savings. On 3rd
                                    March 2022, Hon. Betty Amogi signed the National Social Security
                                    Fund Regulations 2022, which authorized eligible NSSF members to
                                    start applying for their midterm savings starting 7th March
                                    2022. The was eagerly awaited and a barrage of applicants
                                    stormed different application points with more than 3000
                                    applicants for midterm savings. According to NSSF, the number of
                                    people eligible for mid-term savings is 41,174 and a whopping
                                    1.4 trillion shillings has been earmarked to pay off those who
                                    qualify. From the onset, the NSSF belaboured to elucidate the
                                    procedure and requirements of accessing the midterm savings to
                                    sieve out ineligible applicants given the high level of
                                    excitement and expectation the topic of midterms has brewed.
                                    Currently, thousands have been rejected for not meeting either
                                    the required 120 monthly instalments or the forty-five-year age
                                    requirement.




                                </p>

                                <blockquote class="d-none">
                                    <p>
                                        "Block Quote"
                                    </p>
                                </blockquote>

                                <p>
                                    It is important to understand the forces driving the excitement
                                    and the huge number of applications flooding the NSSF. Firstly,
                                    the NSSF midterm law came into force at a time when businesses
                                    everywhere had long been suffocated by the COVID-19 pestilence,
                                    which saw a wide range of businesses closing their doors and
                                    companies or scaling down staff. The lockdown saw the vast
                                    majority of people sit home without work, resulting in generally
                                    low purchasing power in the Ugandan economy. People were unable
                                    to purchase essential items for their survival. In the face of
                                    such economic difficulty, the escalation of prices of essential
                                    commodities has only made the situation worse. The current
                                    clamour associated with the midterm cash is an understandable
                                    response of people in economic distress. Therefore, the midterm
                                    pay is an opportunity for eligible members to ameliorate their
                                    financial condition by jump starting their businesses and
                                    improving their livelihood. One can say there was no better
                                    timing than now.



                                </p>

                                <p>
                                    Another factor behind the eagerness to apply for the midterms
                                    is that before the Amendment, NSSF members were only entitled to
                                    receive their savings when they attained the age of fifty.
                                    According to national and international demographics, Uganda’s
                                    life expectancy is about 64 years and has been steadily
                                    increasing in the last decade. Based on these statistics, many
                                    Ugandans have not been able to access their NSSF benefits which
                                    they saved for years. It is worth noting that the
                                    NSSF savings are a statutory deduction made
                                    monthly by employers for their employees as a
                                    portion of their gross pay. Given
                                    the relatively low life expectancy, most NSSF members never get
                                    the chance to access their savings since some die before hitting
                                    the statutory age of cashing it out. While their relatives have
                                    a right to access it in the event of their death, most people
                                    would want to enjoy the fruit of their sweat, even if it is just
                                    a fraction of the entire sum. With this perception, the high
                                    number of applicants for the midterms are a foreseeable result
                                    of the minister’s approval of the NSSF regulations.



                                </p>

                                <p>
                                    In contrast with the political façade in Uganda, Brazil has one
                                    of the world’s most successful poverty eradication programs.
                                    Meticulously planned to have an enduring impact on the
                                    population, the <i>Bolsa Familia</i> program was designed to
                                    achieve
                                    both short-term and long-term progress in the area of poverty
                                    eradication while addressing social bottlenecks. Under the
                                    program, families receive periodic direct cash transfers from
                                    the government upon fulfilment of specific conditions set by the
                                    government. Some of the conditions to be fulfilled include;
                                    sending children to school, having them vaccinated, mandatory
                                    attendance of prenatal check-ups for pregnant women among
                                    others. The beneficiaries of this program are well documented
                                    and are issued with a subscription card on which their
                                    performance under the program can be tracked. By 2015, the
                                    <i>Bolsa
                                        Familia</i> program accounted for more than 14% poverty
                                    reduction in
                                    Brazil. Further, the program is strategically implemented to
                                    target female-headed households, which are usually most affected
                                    by poverty. This would reduce domestic violence levels since
                                    women would be more capable of leaving abusive relationships.
                                    This program exemplifies a government’s resolve to genuinely
                                    tackle the poverty problem in a systematic approach that
                                    incentives the public to engage in activities they would have
                                    otherwise not taken upon. The success of the program is solely
                                    based on the central principle that the government alone cannot
                                    attempt to eradicate poverty without ensuring that public
                                    efforts are geared in the right direction. The cash transfer
                                    acts as a motivating factor to get the population to direct
                                    efforts in nationally prioritised activities or sectors. This
                                    can be contrasted to Uganda where the government gives people
                                    money, and they choose whether to use it for the intended
                                    purpose or to misappropriate it.The imposing 1.4 trillion
                                    shillings to be paid out in midterms is a double aged sword in
                                    terms of its impact on the economy. At a personal level, midterm
                                    cash can help struggling businesses overcome cash shortages and
                                    boost their operations. The cash is also a viable solution to
                                    the lack of start-up capital for many whose businesses were
                                    shuttered by the two-year-long lockdown and can be utilised by
                                    those who want to transition from employment to business. This
                                    pay scheme will also be critical in boosting the low purchasing
                                    power, which shrunk greatly upon the imposition of the lockdown.
                                    With over forty thousand recipients of the cash, we can be sure
                                    that there will be a significant increase in national
                                    expenditure, which is a step toward the recovery of those in
                                    business.




                                </p>

                                <p>
                                    Notwithstanding the short-term benefits of the NSSF midterm pay,
                                    there is a downside associated with the collective payment of
                                    over a trillion shillings to over forty thousand people. The
                                    most obvious is the inflationary impact the collective payment
                                    may have on the economy in the long run. The payment starts at
                                    the time when the government has just launched the Parish
                                    Development Model where over four hundred ninety billion
                                    shillings will be distributed to the grass-root level. The
                                    combined release of all these sums of money can potentially have
                                    an inflationary impact on the economy, which is already
                                    grappling with the steady rise in prices of commodities
                                    resulting from the high fuel prices. Midterm payments are also
                                    going to reduce the liquidity of the NSSF, which will not only
                                    slow down its pace of investment but also limit its capacity to
                                    lend money to the government. The NSSF has for a long time been
                                    a credible internal lender to the government, mainly through the
                                    purchase of treasury bonds. This minimizes government reliance
                                    on external borrowing, which is usually associated with
                                    high-interest rates and other political dictation by the
                                    lenders. The NSSF has been a significant investor in
                                    construction in real estate, which is a capital-intensive
                                    business. The need to always have money set aside for mid-term
                                    payments will slow down the intensity of the NSSF to invest in
                                    real estate.


                                </p>

                                <p>As it stands, the NSSF (Amendment) Act is highly welcome given
                                    all the improvements it has made to the operation of the NSSF
                                    but particularly for the midterm benefits whose true impact is
                                    yet to be determined. Whatever the impact may be, one clear
                                    thing is that the public is eager to spend the cash.



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
