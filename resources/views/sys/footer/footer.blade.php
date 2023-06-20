<!-- ======= Footer ======= -->
<footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

    <div class="footer-newsletter">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h4>Our Newsletter</h4>
                    <p style="color:#99CD44;">Subscribe To Our Newsletter and Stay
                        updated</p>
                </div>
                <div class="col-lg-6">
                    <form action="RecordSubsriber" method="post" enctype="multipart/form-data">

                        <input type="email" name="subscriber_email"><input type="submit"
                            value="Subscribe" required>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{url ('/')}}">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{url ('about')}}">About us</a>
                        </li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{url ('whatwedo')}}">What We
                                Do</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a>
                        </li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Other Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a
                                href="{{url ('researchandpublications')}}">Research and Publications</a>
                        </li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{url ('podcasts')}}">Podcats</a>
                        </li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{url ('webinars')}}">Webinars</a>
                        </li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{url ('blog')}}">Blog</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{url ('opinionbank')}}">Polls</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4>Contact Us</h4>
                    <p>
                        Address <br><br>
                        <strong>Phone:</strong> +256-760 130120<br>
                        <strong>Email:</strong> info@cffj.or.ug<br>
                        <strong>P.O.Box:</strong> 150045, Mukono, Uganda<br>
                    </p>

                </div>

                <div class="col-lg-3 col-md-6 footer-info">
                    <h3>About CFFJ</h3>
                    <p>We are a Ugandan Christian Think Tank founded in 2021 to inform
                        evidence-based research, policy, advocacy, and decision making at the
                        national, regional and international levels.</p>
                    <div class="social-links mt-3">
                        <a href="https://twitter.com/CFFJ_Ug?s=09" class="twitter"><i
                                class="bx bxl-twitter"></i></a>
                        <a href="https://www.facebook.com/CenterofFaithF1/"
                            class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="https://t.me/joinchat/secnbEkSgMphZTVk" class="telegram"><i
                                class="bx bxl-telegram"></i></a>
                        <a href="https://www.youtube.com/channel/UCVyMWo-d914uYERL2CR3_gg"
                            class="linkedin"><i class="bx bxl-youtube"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright 2022 <strong><span>Center Of Faith Family and Justice</span></strong>.
            All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/ -->

        </div>
    </div>
</footer>




<!-- End Footer -->
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>



@include('sys.scripts.scripts')


</body>

</html>
