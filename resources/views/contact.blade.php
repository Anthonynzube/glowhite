@extends('partials.app')

@section('title', 'Contact Us')

@section('content')
<div class="breadcrumb-area section-padding-1 breadcrumb-bg-4 breadcrumb-ptb-5">
    <div class="container-fluid">
        <div class="breadcrumb-content text-center">
            <div class="breadcrumb-title">
                <h2>Contact Page</h2>
            </div>
            <ul>
                <li>
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li><span> > </span></li>
                <li class="active"> Contact Page </li>
            </ul>
        </div>
    </div>
</div>
<div class="contact-us-area pt-90 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 ml-auto mr-auto">
                <div class="row">
                    <div class="col-xl-9 col-lg-8 col-md-7">
                        <div class="contact-form-area">
                            <h2>Say Hello! 😊</h2>
                            <form id="contact-form" action="assets/mail-php/mail.php" method="post">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <input name="name" type="text" placeholder="Your Name">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <input name="email" type="email" placeholder="Your Email">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <textarea name="message" placeholder="Your Message"></textarea>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <button class="submit" type="submit">Send</button>
                                    </div>
                                </div>
                            </form>
                            <p class="form-messege"></p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-5">
                        <div class="contact-info-area">
                            <h2>Our Info</h2>
                            <div class="contact-info-top">
                                <div class="sin-contact-info-wrap mb-25">
                                    <div class="contact-icon">
                                        <i class="dlicon business_building"></i>
                                    </div>
                                    <div class="contact-address">
                                        <span>Glowhite Headquarter</span>
                                        <p>Plot 7, Diamond Plaza, BBA Trade Fair Complex, Badagry Expressway Lagos.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-info-bottom">
                                <ul>
                                    <li><i class="dlicon ui-1_email-83"></i>hello@glowhitecosmetics.com</li>
                                    <li><i class="dlicon ui-2_phone"></i>+2348135869604</li>
                                    <li><i class="dlicon ui-2_phone"></i>+2348029493632</li>

                                </ul>
                                <div class="contact-info-social">
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
