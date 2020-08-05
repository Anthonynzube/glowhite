<footer class="footer-area section-padding-1 border-top-3">
    <div class="container-fluid">
        <div class="footer-top pt-100 pb-60">
            <div class="row">
                <div class="footer-column footer-width-24">
                    <div class="footer-widget footer-about mb-30">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('images/logo/footer-logo.svg') }}" alt="logo">
                        </a>
                        <p>Lorem ipsum dolor sit amet, magna habemus ius ad, qui minimum voluptar</p>
                        <div class="social-icon-style-2 social-icon-hm4">
                            <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                            <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                            <a class="youtube" href="#"><i class="fa fa-youtube"></i></a>
                            <a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a>
                        </div>
                    </div>
                </div>
                <div class="footer-column footer-width-12">
                    <div class="footer-widget footer-info-list-2 mb-30">
                        <h3 class="footer-title">Company Link</h3>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Help Center</a></li>
                            <li><a href="#">Our Team</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">The Blog</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-column footer-width-14">
                    <div class="footer-widget footer-info-list-2 mb-30">
                        <h3 class="footer-title">Userful Link</h3>
                        <ul>
                            <li><a href="#">Guides & Articles</a></li>
                            <li><a href="#">Customer Reviews</a></li>
                            <li><a href="#">Coupon Codes</a></li>
                            <li><a href="#">Military Discount</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-column footer-width-19">
                    <div class="footer-widget footer-info-list-2 footer-contect mb-30">
                        <h3 class="footer-title">Contact info</h3>
                        <ul>
                            <li><i class="dlicon ui-2_time-clock"></i> Monday - Friday: 9:00 - 16:00</li>
                            <li><i class="dlicon ui-1_email-83"></i> hello@glowhitecosmetics.com</li>
                            <li><i class="dlicon tech-2_rotate"></i> +2348135869604 <br> +2348029493632</li>
                            <li><i class="dlicon ui-1_home-simple"></i>Plot 7, Diamond Plaza, BBA Trade Fair Complex, Badagry Expressway Lagos.</li>
                        </ul>
                    </div>
                </div>
                <div class="footer-column footer-width-29 mb-30">
                    <div class="contact-page-map">
                        <div id="contact-map"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-botoom">
            <div class="row">
                <div class="col-12">
                    <div class="copyright-2 text-center">
                        <p>© 2020 <a href="/">Glowhite Cosmetics</a> All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<div class="support-lists">
    <ul>
        <li><a href="#"><i class="dlicon ui-3_chat-46"></i></a></li>
        <li><a href="#"><i class=" dlicon ui-3_phone"></i></a></li>
        <li><a href="#"><i class="dlicon ui-1_email-85"></i></a></li>
    </ul>
</div>
@include('partials.scripts')
</body>

</html>
