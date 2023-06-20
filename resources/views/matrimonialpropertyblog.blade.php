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
                            <li><a href="{{ url('outreach') }}">">Training, Outreach and Advocacy</a></li>
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
                        <li>The Matrimonial Property question in Uganda.</li>
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
                                <a href="blog-single.html">The Matrimonial Property question in
                                    Uganda</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-person"></i> <a
                                            href="blog-single.html">By Kirume Martin Juuko Adams</a>
                                    </li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-clock"></i> <a
                                            href="blog-single.html"><time datetime="2020-01-01">Sep
                                                25, 2021</time></a></li>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-chat-dots"></i> <a
                                            href="blog-single.html">0 Comments</a></li>
                                </ul>
                            </div>

                            <div class="entry-content">

                                <p>
                                    An analysis of the efficacy of the Supreme Court decision of the
                                    case of Julius Rwabinumi V. Hope Bahimbisomwe Supreme Court
                                    Constitutional Appeal No. 10 of 2009, in resolving the
                                    matrimonial property issues at the dissolution of marriages in
                                    Uganda.



                                </p>
                                The question of matrimonial property has not taken a specific
                                dimension, in the development of family law. And this research seeks
                                to analyse how this question has been demystified in different
                                jurisdictions over the ages. I will look at Uganda, as my case
                                study. And more specifically, analysing the locus clasicus of Julius
                                Rwabinumi V. Hope Bahimbisomwe Supreme Court Constitutional Appeal
                                No. 10 of 2009, focusing on its recent developments in analysing the
                                question of matrimonial property in Uganda

                                <p>
                                    In England, married women could not own property for most and
                                    purposes until the passing of the Married Women’s Property Act
                                    in 1882. At common Law it would be presumed that all property in
                                    a matrimonial home belonged to the husband , and this was
                                    reflected in the case of LAILAI V. THE QUEEN 1955 23 EACA 609.
                                    This explains the existence of the conflicts in marriage, the
                                    battle of who owns or who should own what, before, during and
                                    after the dissolution of marriage. This was also reflected in
                                    the dicta of Lord Denning in HINE V. HINE [1962] 3 All E.R, and
                                    also in the case of GISSING V. GISSING [1970] ALL ER 780 where
                                    court held that it was not possible to, draw an inference that
                                    there was any common intention that the wife should have any
                                    beneficial interest in the house. This confusion is also
                                    reflected in our laws in Uganda. For example, in cases of
                                    divorce, Sections 26, 27, 28, of the Divorce Act CAP 249
                                    favoured husbands, in regards to property, and also basing on
                                    the traditional-customary historical question , in regards to
                                    the women Succession of property in Uganda, which was also
                                    backed up by the Succession Act , however historical question
                                    was settled in the case of Law Advocacy for Women in Uganda v
                                    Attorney General - Constitutional Petitions Nos. 13 /05 /& 05
                                    /06 [2007] UGCC 1 (5 April 2007), where Court held that that
                                    women to have a right to inherit property.[1] The same position
                                    was supported in the case of BEST KEMIGISA V. MABLE KOMUNTALE.
                                    Over time, the position in England (Common Law position) has
                                    changed. For instance, in the case of PETTIT V. PETTIT [1969] 2
                                    ALL E.R 385, Court held that a husband was not entitled to an
                                    interest in his wife’s property.[2]
                                </p>




                                <div class="entry-content">
                                    <h6>The Position of the Law on Matrimonial Property In Uganda
                                    </h6>
                                    <p>
                                        The Position of the Law on Matrimonial Property In Uganda
                                        In Uganda too, as a general practice among many customs, as
                                        stated above, it was not simple for a woman to own property,
                                        whether during marriage, upon dissolution of marriage, or
                                        even as a heir. This was because all property belonged to
                                        the husband, during marriage, upon dissolution of marriage,
                                        and even upon his death, the male child would be made the
                                        heir.

                                    </p>

                                    <p>
                                        However, in Uganda, the position of the law has changed over
                                        time, to recognise the rights of both men and women (husband
                                        and wife) in regards to matrimonial property, along other
                                        rights. This is established under Article 21 of the
                                        Constitution of the Republic of Uganda 1995 (2015 as
                                        Amended) that provides for equality of all people before the
                                        law, and freedom from discretion, Article 24, which provides
                                        for respect of human dignity and protection from inhuman
                                        treatment. Article 26 and Article 27 which protect one from
                                        deprivation of property, the right to privacy of person,
                                        home, and other property, respectively. Article 31 also
                                        provides for the family rights, Article 32, for affirmative
                                        action, and Article 33 that provides for the rights of
                                        women. In the case of Uganda V. Jemima Kyanda (1977) Asthana
                                        J held that “…a woman in Uganda is capable in law to hold
                                        and to own her own separate property. This is further
                                        stretched by Section 28 of the Divorce Act, which provides
                                        for the powers of Court to intervene in the separation of
                                        couples for the proper distribution and management of the
                                        property.

                                    </p>

                                    <blockquote>
                                        <p>
                                            "The issue of Matrimonial property in Uganda, is still
                                            one of the most contentious issues in marriage, due to
                                            the rapidly developing trends in the laws governing
                                            marriage and divorce"
                                        </p>
                                    </blockquote>


                                    <p>
                                        It is prudent to note that, Matrimonial Property is not
                                        defined under the Marriage and Divorce Act. But however,
                                        Clause 3 of the Marriage and Divorce Bill No. 19 of 2009
                                        gives a reference , and Clause 116 of the same Bill, in
                                        regards to what amounts to Matrimonial property.
                                        Furthermore, Clause 115 of the Marriage and Divorce Bill is
                                        gives an expounded definition of what amounts to matrimonial
                                        property[3]. No wonder Clause 116 is to the effect that
                                        matrimonial property, as defined in section 115, shall be
                                        owned in common by the spouses. Clause 117 of the same Act
                                        gives the parties, whether married or cohabiting, the
                                        freedom to make an agreement in regards to their ownership
                                        property, before, during and upon dissolution of married.

                                    </p>


                                    <p>
                                        It is worth noting that this is one of the developments of
                                        the law in family law. That is to say, where the law also
                                        intervenes in matters of matrimonial property, even among
                                        cohabiting couples. The meaning of matrimonial property was
                                        further in the case other Julius Rwabinumi V. Hope
                                        Bahimbisomwe, Constitutional Appeal No. 10 of 2009, in the
                                        Supreme Court of Uganda. It was stated in this case that
                                        matrimonial property is that property that a married couple
                                        chooses to call home and such other property that a married
                                        couple or either of them contributes to directly or
                                        indirectly and may be registered in their joint names. He[4]
                                        contended that even where such property is registered in the
                                        names of either the husband or the wife, such property will
                                        be held to be matrimonial property on the basis of a
                                        resultant trust.
                                        Facts of the case (Julius Rwabinumi V. Hope Bahimbisomwe)[5]

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

                                    <p>
                                        The appellant Rwabinumi and the respondent contracted a
                                        marriage on 30th Aug 2003 at our lady of Africa Mbuya
                                        Catholic Church. However before their wedding, the parties
                                        had cohabited together also produced a son, Edison Rubarema,
                                        who was born on 28th, March, 2003. However, the parties
                                        developed serious misunderstandings during their first year
                                        of, which culminated in the appellant chasing the respondent
                                        and her infant son out of the couple’s residence in Kisasi
                                        Village, Kampala district, on 30th July 2004.
                                    </p>



                                </div>

                                <p>
                                    The respondent subsequently petitioned for divorce on 14th Feb
                                    2005 under the Divorce Cause No. 4 of 2005, on grounds of the
                                    appellant’s adultery and cruelty which had led to her marriage
                                    to break down. She prayed for judgement against the appellant
                                    for the following orders. A divorce Order; Maintenance Order for
                                    the child; a share of the property to which she contributed; a
                                    return of all gifts and presents given during the giveaway
                                    ceremony; cost of the petition; and any other remedy as court
                                    may think fit. However, the appellant also cross petitioned for
                                    divorce on grounds of the respondent’s adultery, witchcraft and
                                    irretrievable breakdown of marriage. Dissatisfied with the
                                    judgement of the High Court, the appellant lodged Civil Appeal
                                    No. 30 of 2007 in the Court of Appeal, which dismissed his
                                    appeal, with Costs to the respondent. Being dissatisfied with
                                    the Court of Appeal’s decision he appealed to the Supreme Court,
                                    the Supreme Court challenged the Court of Appeal decisions, both
                                    in fact and in law.
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

                                <h6>Issues (before the Supreme Court)</h6>

                                <p>
                                    1. Whether all the property solely acquired by the individual
                                    appellant became jointly owned property upon his marriage to the
                                    respondent, and should be equally shared.</p>

                                <p>2 .Whether the learned justices of the Court of Appeal erred in
                                    law in their interpretation of Article 31by applying it to
                                    equality in the distribution of the property independently owned
                                    by the appellant.
                                </p>

                                <h6>Holding of the Supreme Court</h6>

                                <p>Court held that property individually held by the spouses prior
                                    to the marriage, would not be jointly owned by both parties,
                                    just by the mere church ceremony vows exchanged upon their
                                    wedding. Hence the property should be equally shared, on the
                                    basis of church marriage vows. Court also stated that Article 31
                                    of the Constitution, 1995 had been wrongly interpreted in the
                                    Court of Appeal.</p>

                                <p>With reference to the Supreme Court decision in Julius Rwabinumi
                                    V. Hope Bahimbisomwe, and with reference to other relevant
                                    authorities and decided cases, the guidelines considered by the
                                    Court on how such property should be divided. Court Considers;
                                </p>

                                <p>Whether the matrimony property of the Couple had been jointly
                                    contributed to; Supreme Court discussed the principle of both
                                    parties jointly contributing to the matrimonial property. Court
                                    established that as a matter of right and in the normal course
                                    of things a spouse to a marriage in case of breakup of that
                                    marriage is entitled share equally in that property which both
                                    spouses have contributed to and have chosen to refer to as their
                                    own. It is the Court that determines the extent of share the
                                    spouse is entitled to, depending on the context of individual
                                    contribution of both as husband and wife. That the term
                                    contribution of both the spouse should be given a wide meaning
                                    so as to capture and reflect the real customary values,
                                    practices and economic dynamics of a typical Ugandan family.
                                    Hence the position of the law on matrimonial property as was
                                    established in Julius Rwabinumi V. Hope Bahimbisomwe[6] is to
                                    the effect that where both spouses in a marriage put their
                                    financial and or resources together acquire property and
                                    register or otherwise own the same in their joint proportions
                                    then such property is family property and is owned by spouses in
                                    equal shares. This principle was also elaborated in the earlier
                                    case of Edith Nakiyingi V. Melekizedeki 1978 HCB 107[7] where
                                    Court held that the husband (Melekizedeki) had a duty to provide
                                    the wife with a home and if he wanted to evict her, he must find
                                    alternative accommodation for her since it was the husband who
                                    had terminated marriage.[8]</p>

                                <p>Court will also consider property owned by the parties before
                                    marriage, that is to say before entering into the relationship.
                                    Nigel Lowe in Bromley’s Family Law[9] states that presumptively,
                                    marriage, civil partnership, engagement or cohabitation will not
                                    affect the ownership of property vested in either of the
                                    partners at the time. This will also be true of property which
                                    is used by them jointly in the family home; for example,
                                    furniture, in the absence of an express gift of a joint interest
                                    in law or in equity. In Uganda, the same principle is reflected
                                    in the Constitution of the Republic of Uganda, 1995 (as
                                    Amended). That is to say, Article 26 protects one from
                                    deprivation of property, hence establishing that one has a right
                                    to own property, whether individually, or with others. Article
                                    27 of the same Constitution also established a right to privacy
                                    of person, home, and other property, respectively. And also,
                                    Article 31, backed up with Article 21, provide for equality of
                                    all people before the law, even in marriage. But notwithstanding
                                    that still a couple can make an agreement to co-own the,
                                    property that was individually owned before marriage. </p>

                                <p>Gifts between engaged Couples, are also put into consideration,
                                    as a guideline in dividing matrimonial property. Court
                                    considered the general rule (at common law), that gifts made by
                                    one party to an engagement to the other in the contemplation of
                                    marriage would not be withdrawn, except where the receiver of
                                    the gift had breached her Contract. For example, where a man
                                    gave a woman an engagement ring, up on the promise of marring
                                    him, and the woman breached a contract, the man was at liberty
                                    to have back his engagement ring as was decided in the case of
                                    COHEN V. SELLAR [1926] 1 KB 536. However, this law is not so
                                    much practiced or effected in Uganda especially, after the case
                                    of MIFUMI and 12 Ors V. Attorney General Constitutional Petition
                                    No. 12 of 2007. Where Court held that though payment of the
                                    bride price should be done at one’s own will, hence making it
                                    unlawful to demand for bride price as a condition for marriage,
                                    as it contravenes Article 31[10] asking back the same bride
                                    price or gifts upon dissolution of marriage was declared null
                                    and void. Hence gifts are taken to be of absolute ownership of
                                    the receiver. And they should be distinguished from bride
                                    price.[11]</p>

                                <p>Wedding gifts, here the case is completely different, though
                                    related to the above; that is to say, whether a gift belongs to
                                    one spouse alone, or both is a question of the donor’s
                                    intention. The general rule is that the wedding presents in the
                                    absence of any evidence to the contrary, from a friend of either
                                    spouse belongs to that spouse alone. This was discussed .in the
                                    case of SAMSON V. SAMSON [1960] 1 All ER 653, CA a married
                                    couple disagreed as to ownership of their wedding gifts
                                    including some gifts of cash and sought an order under S17 of
                                    1882 Act. The court of appeal rejected the wife’s argument that
                                    wedding gifts are jointly owned and said that the determining
                                    factor is the donor’s intention. The House of Lords overruled
                                    this judgment and held that property which is given at a time of
                                    wedding to ones spouses or other may become joint property .In
                                    the case in question, the appellant denied the respondent any
                                    share in the gifts, and maintained that no gifts had been given.
                                    Court held the gifts were to be shared in equal terms.</p>

                                <p>Court also considers the issue of the Bank Account; where the
                                    spouses pull their incomes and place them in a common fund. In
                                    the case of Jones V Maynard (1951) Ch 572 court held that
                                    regardless of their differences in contribution and withdraws,
                                    they acquire joint interests in the same account. In this case,
                                    both parties operated a J.H higher business and opened a joint
                                    bank accounts of the business despite the appellant stating that
                                    the respondent had taken all the money in the bank account and
                                    had also taken three quarters of all the equipment the
                                    respondent did not controvert this evidence. Court held that on
                                    the evidence adduced the business was jointly owned by both
                                    parties as a family enterprise.</p>

                                <p>
                                    In conclusion, the issue of Matrimonial property in Uganda, is
                                    still one of the most contentious issues in marriage, due to the
                                    rapid developing trends in the laws governing Marriage and
                                    divorce, that are being coaxed to accommodate in cohabitation as
                                    one of the major basis for the dilemma seen in the division of
                                    the matrimonial property, that even the Marriage and Divorce
                                    Bill No. 19 of 2009 is still not in effect, due to the existing
                                    loopholes. No wonder Bbosa J Muwanga v Kintu High Court Divorce
                                    Appeal No.135 of 1997, rightly pointed out the challenges that
                                    Courts will continue to face in determining what constitutes
                                    matrimonial property in Uganda[12].

                                </p>

                                <p>
                                    However, the Supreme Court of Uganda in Julius Rwabinumi v Hope
                                    Bahimbisomwe S.C.C.A NO.10 of 2009 provides the current position
                                    of the law in regards to the division of matrimonial property,
                                    hence the guidelines established in this court provide remedy to
                                    the issues surrounding the [division of Matrimonial property in
                                    Uganda.Bottom of Form

                                </p>
                                <h6>BIBLIOGRAPHY</h6>
                                <p>Statutes</p>
                                <p> v The Constitution of the Republic of Uganda 1995, as
                                    Amended<br>v The Marriage Act CAP 251

                                    <br>v The Marriage and Divorce Bill<br>
                                    v The Divorce Act CAP 249<br>
                                    v The Succession Act<br>
                                    v The Land Act CAP 227, as Amended<br>
                                    1. Case Law<br>
                                    1. Text Books<br>
                                    v Nigel L. And Douglas, Bromley’s Family Law. 2007, United
                                    States, Oxford University Press.<br>
                                    v Katarina J. And Kanjama C. Family Law Digest on Matrimonial
                                    Property<br>
                                    v Jennifer Okumu Wengi, Women’s Law and Grassroots Justice in
                                    Uganda. 2011; Kampala, Law Africa.
                                </p>




                                <p>[1] Court stated that Section 2 (n) (i) and (ii), 14,15, 26, 27,
                                    29, 43, 44 of the Succession Act and Rules 1, 7, 8, and 9 of the
                                    Second Schedule of the same Act are inconsistent with and
                                    contravene Articles 21 (1) (2) (3) 31, 33(6)of the Constitution
                                    and they are null and void.
                                    [2] This because his contribution was deemed to be any
                                    reasonable man’s expected performance as a husband in a home.
                                    There was nothing extra ordinary that he had done to earn him an
                                    interest on his wife’s property upon divorce.
                                </p>

                                <p>[3] Clause 115 is to the effect that Matrimonial property shall
                                    include; the matrimonial home (as defined under Section 3 of the
                                    Bill), household property in the matrimonial home; any other
                                    property either immovable or movable acquired before or during
                                    the subsistence of marriage, deemed to be matrimonial property
                                    by express agreement, property which was separate property but
                                    which a spouse has made a contribution towards, except where the
                                    property relates to the sale of family land, and seed money
                                    provided by a spouse for the establishment of a business.
                                    [4][4] Counsel for the appellant (Mr. Masembe Kanyerezi of MAKKS
                                    Advocates.)
                                    [5] Constitutional Appeal No. 10 of 2009, in the Supreme Court
                                    of Uganda.<br>
                                    [6] Constitutional Appeal No. 10 of 2009, in the Supreme Court
                                    of Uganda.
                                    [7] where Court held that the husband(Melekizedeki) had a duty
                                    to provide the wife with a home and if he wanted to evict her,
                                    he must find alternative accommodation for her since the husband
                                    who had terminated marriage. In this case, the wife had
                                    contributed to the building and the maintenance of the home for
                                    12 years. The husband on divorce proceedings sought to evict her
                                    from the home.<br>
                                    [8] However, in the case above case (Edith Nakiyingi V.
                                    Melekizedeki ) Court explained that merely spending money on
                                    another man’s property does not generally give one a proprietary
                                    interest therein however the doctrine of equitable estoppels
                                    subsists if the owner encourages the other spouse to expend on
                                    the property. However, as long as the spouse made substantive
                                    improvements on the property, the property is presumed to be
                                    owned together hence the house in the Nakiyingi case was jointly
                                    owned by the spouses.<br>
                                    [9] Tenth Edition, Oxford University Press, 2007, at page 132
                                    [10] Of the Constitution of the Republic of Uganda, 1995,as
                                    Amended.
                                    [11] This is because much as a bride price can not be asked back
                                    upon dissolution of marriage, mere gifts can be demanded
                                    back(withdrawn), especially f they were given on a condition of
                                    fulfilment of the promise, for example, a promise to marry.<br>
                                    [12] Where she observed that “Matrimonial property is understood
                                    differently by different people. There is always property which
                                    the couple chose to call home. There may be property which may
                                    be acquired separately by each spouse before or after marriage.
                                    Then there is property which a husband may hold in trust for the
                                    clan. Each of these should, in my view be considered
                                    differently. The property to which each spouse should be
                                    entitled is that property which the parties chose to call home
                                    and which they jointly contribute to”

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
