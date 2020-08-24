@extends('partials.app')

@section('title', 'About Us')

@section('content')
    <div class="breadcrumb-area section-padding-1 breadcrumb-bg-3 breadcrumb-ptb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 ml-auto">
                    <div class="breadcrumb-content-2">
                        <h2>Go forth & be <br> fabulous</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-us-skill pt-100 pb-100 padding-60-row-col">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="skill-img default-overlay">
                        <img src="{{ asset('images/banner/about-01.jpg') }}" alt="banner">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="skill-content">
                        <h2>About Us</h2>
                        <p>
                            When it comes to skincare, there's no second-guessing our devotedness and commitment to giving you products you can trust. These products are formulated with you in mind. Every ingredient is carefully selected and scientifically manipulated using new and reliable technologies to be gentle and safe with maximum effectiveness. We’ve been in existence for 15 years and renowned for the production of high-quality products that can compete auspiciously with other products within and outside the country.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="service-area section-padding-8 pb-70">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="service-wrap-3 text-center mb-30">
                        <div class="service-icon-3">
                            <i class="dlicon business_bulb-62"></i>
                            <i class="dlicon bus"></i>
                        </div>
                        <div class="service-content-3">
                            <h4>Brainstorming</h4>
                            <p>Fusce a augue lorem. Morbi ut orci nec odio placerat viverra</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="service-wrap-3 text-center mb-30">
                        <div class="service-icon-3">
                            <i class="dlicon design_window-paragraph"></i>
                        </div>
                        <div class="service-content-3">
                            <h4>Wireframe Design</h4>
                            <p>Fusce a augue lorem. Morbi ut orci nec odio placerat viverra</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="service-wrap-3 text-center mb-30">
                        <div class="service-icon-3">
                            <i class="dlicon design-2_mirror"></i>
                        </div>
                        <div class="service-content-3">
                            <h4>Handmade</h4>
                            <p>Fusce a augue lorem. Morbi ut orci nec odio placerat viverra</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="service-wrap-3 text-center mb-30">
                        <div class="service-icon-3">
                            <i class="dlicon location_route-open"></i>
                        </div>
                        <div class="service-content-3">
                            <h4>Testing & Released</h4>
                            <p>Fusce a augue lorem. Morbi ut orci nec odio placerat viverra</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="testimonial-area pt-100 pb-100 bg-gray">
        <div class="container-fluid p-0">
            <div class="section-title-9 text-center mb-60">
                <h2>What Clients Say</h2>
            </div>
            <div class="testimonial-active-2">
                <div class="single-testimonial-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Aliquam quis erat blandit, convallis velit vehicula, molestie risus. Nulla volutpat pulvinar sagittis. Nunc rutrum congue dignissim. Etiam lobortis, velit at molestie dignissim, lorem leo pharetra nisl, a lacinia</p>
                    <div class="client-info-wrap3">
                        <div class="client-img-3">
                            <img src="{{ asset('images/testimonial/testi-5.png') }}" alt="testimonial">
                        </div>
                        <div class="client-info-3">
                            <h3>Ronald Blake</h3>
                            <span>from California</span>
                        </div>
                    </div>
                </div>
                <div class="single-testimonial-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Aliquam quis erat blandit, convallis velit vehicula, molestie risus. Nulla volutpat pulvinar sagittis. Nunc rutrum congue dignissim. Etiam lobortis, velit at molestie dignissim, lorem leo pharetra nisl, a lacinia</p>
                    <div class="client-info-wrap3">
                        <div class="client-img-3">
                            <img src="{{ asset('images/testimonial/testi-6.png') }}" alt="testimonial">
                        </div>
                        <div class="client-info-3">
                            <h3>Ronald Blake</h3>
                            <span>from California</span>
                        </div>
                    </div>
                </div>
                <div class="single-testimonial-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Aliquam quis erat blandit, convallis velit vehicula, molestie risus. Nulla volutpat pulvinar sagittis. Nunc rutrum congue dignissim. Etiam lobortis, velit at molestie dignissim, lorem leo pharetra nisl, a lacinia</p>
                    <div class="client-info-wrap3">
                        <div class="client-img-3">
                            <img src="{{ asset('images/testimonial/testi-7.png') }}" alt="testimonial">
                        </div>
                        <div class="client-info-3">
                            <h3>Ronald Blake</h3>
                            <span>from California</span>
                        </div>
                    </div>
                </div>
                <div class="single-testimonial-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Aliquam quis erat blandit, convallis velit vehicula, molestie risus. Nulla volutpat pulvinar sagittis. Nunc rutrum congue dignissim. Etiam lobortis, velit at molestie dignissim, lorem leo pharetra nisl, a lacinia</p>
                    <div class="client-info-wrap3">
                        <div class="client-img-3">
                            <img src="{{ asset('images/testimonial/testi-8.png') }}" alt="testimonial">
                        </div>
                        <div class="client-info-3">
                            <h3>Ronald Blake</h3>
                            <span>from California</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="team-area section-padding-8 pt-100 pb-70">
        <div class="container-fluid">
            <div class="section-title-9 text-center mb-50">
                <h2>Our Team</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="team-wrap default-overlay tilt-active mb-30">
                        <img src="{{ asset('images/team/member-01.jpg') }}" alt="team">
                        <div class="team-content text-center">
                            <h4>Florence Moreno</h4>
                            <span>Art Director</span>
                            <div class="team-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="team-wrap default-overlay tilt-active mb-30">
                        <img src="{{ asset('images/team/member-02.jpg') }}" alt="team">
                        <div class="team-content text-center">
                            <h4>Blake Harrison</h4>
                            <span>Art Director</span>
                            <div class="team-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="team-wrap default-overlay tilt-active mb-30">
                        <img src="{{ asset('images/team/member-03.jpg') }}" alt="team">
                        <div class="team-content text-center">
                            <h4>Louisa Kelly</h4>
                            <span>Art Director</span>
                            <div class="team-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="brand-area section-padding-3 bg-gray pt-20 pb-20">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-6 col-sm-4">
                    <div class="single-brand-logo-2 text-center">
                        <a href="#"><img src="{{ asset('images/brand-logo/brand-logo-8.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 col-sm-4">
                    <div class="single-brand-logo-2 text-center">
                        <a href="#"><img src="{{ asset('images/brand-logo/brand-logo-9.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 col-sm-4">
                    <div class="single-brand-logo-2 text-center">
                        <a href="#"><img src="{{ asset('images/brand-logo/brand-logo-10.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 col-sm-4">
                    <div class="single-brand-logo-2 text-center">
                        <a href="#"><img src="{{ asset('images/brand-logo/brand-logo-11.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 col-sm-4">
                    <div class="single-brand-logo-2 text-center">
                        <a href="#"><img src="{{ asset('images/brand-logo/brand-logo-12.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 col-sm-4">
                    <div class="single-brand-logo-2 text-center">
                        <a href="#"><img src="{{ asset('images/brand-logo/brand-logo-13.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
