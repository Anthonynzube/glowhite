@extends('partials.homeApp')

@section('title', 'Home')

@section('content')

    <div id="fullpage">
        <div class="section single-full-slider height-100vh bg-img d-flex align-items-center" style="background-color: #f7f7f7">
            <div class="container-fluid p-0">
                <div class="row no-gutters align-items-center">
                    <div class="custom-col-width-fullpage-41">
                        <div class="fullpage-first-slide-content fullpage-pl-300">
                            <h2 class="wow fadeInLeft" data-wow-delay="1.25s" style="color: #6F6F6F;">Lightening Toning Creamy, <br>Moisturizers</h2>
                            <div class="btn-style-1 wow fadeInUp" data-wow-delay="1.25s">
                                <a href="{{ route('moisturizers') }}" style="border: 2px solid #EC1C24;">
                                    <div class=" btn-ptb-3 btn-viewmore-common btn-font-2 btn-letter-sp">
                                        <span style="color: #EC1C24">DISCOVER NOW</span>
                                    </div>
                                    <div class="btn-viewmore-hover-m btn-ptb-3 btn-viewmore-common btn-font-2 btn-letter-sp">
                                        <span>DISCOVER NOW</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-width-fullpage-58">
                        <div class="fullpage-one-img wow zoomIn" data-wow-delay="1.25s">
                            <img src="{{ asset('images/ture-carrot-lotion-series.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section single-full-slider height-100vh bg-img d-flex align-items-center" style="background-color: #EC1C24">
            <div class="container-fluid p-0">
                <div class="row no-gutters align-items-center">
                    <div class="custom-col-width-fullpage-42">
                        <div class="fullpage-first-slide-content fullpage-pl-300">
                            <h2 class="wow bounceInLeft" data-wow-delay="1" style="color: #fff7f7">Extra Whitening, <br>Moisturizing Serums</h2>
                            <div class="btn-style-1 wow bounceInLeft" data-wow-delay="1">
                                <a href="{{ route('serums') }}" style="border: 2px solid #fff7f7">
                                    <div class="btn-ptb-3 btn-viewmore-common btn-font-2 btn-letter-sp">
                                        <span style="color: #fff7f7">DISCOVER NOW</span>
                                    </div>
                                    <div class="btn-viewmore-hover-s btn-ptb-3 btn-viewmore-common btn-font-2 btn-letter-sp">
                                        <span>DISCOVER NOW</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-width-fullpage-57">
                        <div class="fullpage-two-img wow bounceInRight" data-wow-delay="1">
                            <img src="{{ asset('images/ture-carrot-lotion-series.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section single-full-slider height-100vh bg-img d-flex align-items-center"  style="background-color: #FFF9D9">
            <div class="container-fluid p-0">
                <div class="row no-gutters align-items-center ">
                    <div class="custom-col-width-fullpage-56">
                        <div class="fullpage-three-img fullpage-pl-345 wow bounceInLeft" data-wow-delay="1">
                            <img src="{{ asset('images/ture-carrot-lotion-series.png') }}" alt="">
                        </div>
                    </div>
                    <div class="custom-col-width-fullpage-43">
                        <div class="fullpage-first-slide-content fullpage-pl-80">
                            <h2 class=" wow bounceInRight" data-wow-delay="1" style="color: #FF9100">Exfoliating, Refreshing, <br>Lightening Cleansers</h2>
                            <div class="btn-style-1 wow bounceInRight" data-wow-delay="1">
                                <a href="{{ route('cleansers') }}" style="border: 2px solid #FF9100">
                                    <div class="btn-ptb-3 btn-viewmore-common btn-font-2 btn-letter-sp">
                                        <span style="color: #FF9100">DISCOVER NOW</span>
                                    </div>
                                    <div class="btn-viewmore-hover-c btn-ptb-3 btn-viewmore-common btn-font-2 btn-letter-sp">
                                        <span>DISCOVER NOW</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section single-full-slider height-100vh bg-img d-flex align-items-center"  style="background-color: #FF9100">
            <div class="container-fluid p-0">
                <div class="row no-gutters align-items-center ">
                    <div class="custom-col-width-fullpage-47">
                        <div class="fullpage-four-img fullpage-pl-230 wow bounceInLeft" data-wow-delay="1">
                            <img src="{{ asset('images/ture-carrot-lotion-series.png') }}" alt="">
                        </div>
                    </div>
                    <div class="custom-col-width-fullpage-50">
                        <div class="fullpage-first-slide-content fullpage-pl-150">
                            <h2 class="wow bounceInRight" data-wow-delay="1" style="color: #fff7f7">"Heal Your Skin" <br>Toolkit</h2>
                            <div class="btn-style-1 wow bounceInRight" data-wow-delay="1">
                                <a href="{{ route('toolkit') }}" style="border: 2px solid #fff7f7">
                                    <div class="btn-ptb-3 btn-viewmore-common btn-font-2 btn-letter-sp">
                                        <span style="color:  #fff7f7">DISCOVER NOW</span>
                                    </div>
                                    <div class="btn-viewmore-hover-t btn-ptb-3 btn-viewmore-common btn-font-2 btn-letter-sp">
                                        <span>DISCOVER NOW</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="support-lists">
        <ul>
            <li><a href="#"><i class="dlicon ui-3_chat-46"></i></a></li>
            <li><a href="#"><i class=" dlicon ui-3_phone"></i></a></li>
            <li><a href="#"><i class="dlicon ui-1_email-85"></i></a></li>
        </ul>
    </div>
</div>

<!--news letter popup start-->
<div class="newletter-popup">
    <div id="popup2">
        <span class="b-close"><span><i class="dlicon ui-1_simple-remove"></i></span></span>
    </div>
    <div class="popup-wrapper-all">
        <div class="popup-subscribe-area">
            <span>Don't Miss Out</span>
            <h2>Sign up for $5 dollars off your first purchase</h2>
            <div class="subscribe-bottom">
                <form action="{{route('newsletter')}}" method="post" name="mc-embedded-subscribe-form" class="validate">
                    @csrf
                    <div class="mc-form">
                        <input type="email" value="" name="email" class="email" placeholder="Your email address…" required>
                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div class="mc-news" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                        <div class="clear-2"><input type="submit" value="Join Our Journey" name="subscribe" class="button"></div>
                    </div>
                </form>
            </div>
            <div class="dont-show mt-15">
                <input type="checkbox" id="newsletter_popup_dont_show_again">
                <label for="newsletter_popup_dont_show_again">Do not show popup anymore</label>
            </div>
        </div>
        <div class="popup-image">
            <img src="{{ asset('images/banner/newletter-popup.jpg') }}" alt="banner">
        </div>
    </div>
</div>
@include('partials.scripts')
</body>

</html>
@endsection
