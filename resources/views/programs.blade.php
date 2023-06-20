<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Programs -CFFJ</title>
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
                    
                    <li><a  href="{{ url('policyrecommendations') }}">Policy
                            Recommendations</a>
                    </li>


                    <li><a class="active" href="">Programs</a>
                    <li><a href="{{ url('blog') }}">Blog</a></li>
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
                                    <li><a href="{{ url('opinionbank') }}">Opinion Bank</a>
                    </li>
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

    
    <main id="main">

        <!-- ======= Our breadcrumbs Section ======= -->
        <section class="breadcrumbs ">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center pt-3">
                    <h2>Programs</h2>
                    <ol>
                        <li><a href="{{url ('/')}}">Home</a></li>
                        <li>Programs</li>
                    </ol>
                </div>

            </div>
        </section><!-- End breadcrumbs Section -->
        
        <!-- ======= Sub Section Title ======= -->
        <section class="services pt-3">
            <div class="container">
                <div class="section-title">

                    <h2>Programs</h2>
                    <p>The Center of Faith Family and Justice has focused on addressing challenges in the following areas:</p>

                </div>

            </div>
        </section><!-- End Sub Section Title -->


        <!-- ======= Programss Section ======= -->

        <section class="about shadow pb-5" data-aos="fade-up">
            <div class="container">
              <div class="row pt-2">
                    
                    <div class="col-lg-12 pt-lg-0">
                       

                            <h3 class="pt-4 pb-1"><strong>1. The Digital Shea Project</strong></h3>
                            <p>The Digitization of Nilotica Market Systems for Improved Livelihoods Project, simply referred to as the ‘Digital Shea Project’ aims to bridge the gap between the supply and demand for Uganda’s Nilotica Shea through a digitized marketing platform. This much-needed idea has come after many farmers, producers and stakeholders have voiced the need to supply external markets with Uganda’s luxuriant emollient, Nilotica Shea Butter, and its products' variations.</p>


                    </div>
                    
                    <div class="col-lg-12 pt-lg-0">
                       

                            <h3 class="pt-4 pb-1"><strong>2. The Mindset Change Project</strong></h3>
                            <p>Mindset Change for Entrepreneurial Success is a project geared towards promoting a growth mindset among Ugandans. The growth-mindset will empower Ugandans with self-responsibility, resilience and hope for a better future. With a growth mindset, Ugandans will realize that they are indeed in control of much of the outcomes of their lives.</p> <br>
                            
                            <p>This project is inspired by the theory developed by Dr. Carol S. Dweck who observed and differentiated between a fixed mindset and a growth mindset as follows: The fixed mindset believes in one’s natural ability over nurture and effort, and feels devastated in the face of failure, failing to pick up the pieces after tragedies. Whereas the growth-mindset takes on an ever-learning stance, harnessing challenges as opportunities to grow and excel. Here, excellence or success are achieved through effort, training and perseverance. 

</p>


                    </div>
                    
                    <div class="col-lg-12 pt-lg-0">
                       

                            <h3 class="pt-4 pb-1"><strong>3. The School Mobility Project</strong></h3>
                            <p>The Student Mobility Program aims to tackle the challenge many thousands of Ugandan students and teachers face in trekking to school daily. This project will promote and provide several interventions to resolve or ease this problem by working with schools and local governments to improve access to schools.

</p>


                    </div>
                    
                      <div class="col-lg-12 pt-lg-0">
                       

                            <h3 class="pt-4 pb-1"><strong>4. The GBV Prevention Program</strong></h3>
                            <p>The Gender-Based-Violence Prevention project seeks to protect women and girls in communities, and especially those in rural areas, against all forms of gender-based-violence (GBV) by helping men understand and appreciate the value of women and the girls to their families, to the community, and to the country at large.
</p>


                    </div>
                    
                    <div class="col-lg-12 pt-lg-0">
                       

                            <h3 class="pt-4 pb-1"><strong>5. The Family Based Drug Abuse Prevention Program</strong></h3>
                            <p>This Program aims to tackle the problem of rampant drug/substance abuse in Uganda through family skills training and raising awareness of negative impacts of drug abuse amongst high-risk and general population families.
</p> <br>

<p>This program will create awareness on drug abuse and its effects, and also provide support to family members of drug/substance addicts and the addicts themselves through the creation of support groups. These groups (similar to the Alcoholic Anonymous groups) will support the addicts through recovery using the 12-step programme. These groups will also support the families of addicts who are usually prone to Codependency, a trait that further enables the behavior of the addicts they are desperately trying to help.</p>


                    </div>
                    
                    <div class="col-lg-12 pt-lg-0">
                       

                            <h3 class="pt-4 pb-1"><strong>6. The Family Strengthening Program</strong></h3>
                            <p>Recognizing that the Family is the cornerstone of society, the Center of Faith Family and Justice, in conjunction with the Anglican Church of Uganda is implementing a program geared towards strengthening the Family unit in Uganda. The Family program will target the youth, to teach, inspire and promote the practices and conditions for harmonious, healthy and thriving marriages and families. “How good and pleasant it is when God’s people [families] live together in unity!” Psalm 133:1.</p>
                    </div>
                </div>
                </div>
        </section>


        <!-- End programss Section -->

    </main>

    <!--end main-->
    @include('sys.footer.footer')
