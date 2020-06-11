@extends('partials.homeApp')

@section('title', 'Home')

@section('content')

    <div id="fullpage">
        <div class="section single-full-slider height-100vh bg-img d-flex align-items-center bg-lightslategray">
            <div class="container-fluid p-0">
                <div class="row no-gutters align-items-center">
                    <div class="custom-col-width-fullpage-41">
                        <div class="fullpage-first-slide-content fullpage-pl-300">
                            <h2 class="wow fadeInLeft" data-wow-delay="1.25s">Love Seat Linen Fabric <br> Sofa, Light Grey</h2>
                            <div class="btn-style-1 wow fadeInUp" data-wow-delay="1.25s">
                                <a class="btn-border-black" href="product-details.html">
                                    <div class="btn-viewmore-normal btn-ptb-3 btn-viewmore-common btn-font-2 btn-letter-sp">
                                        <span>SHOP NOW</span>
                                    </div>
                                    <div class="btn-viewmore-hover btn-ptb-3 btn-viewmore-common btn-font-2 btn-letter-sp">
                                        <span>SHOP NOW</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-width-fullpage-58">
                        <div class="fullpage-one-img wow zoomIn" data-wow-delay="1.25s">
                            <img src="{{ asset('images/slider/home18-img-02-1.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section single-full-slider height-100vh bg-img d-flex align-items-center bg-antiquewhite">
            <div class="container-fluid p-0">
                <div class="row no-gutters align-items-center">
                    <div class="custom-col-width-fullpage-42">
                        <div class="fullpage-first-slide-content fullpage-pl-300">
                            <h2 class="wow bounceInLeft" data-wow-delay="1">Ceramic Lamp With <br> LED</h2>
                            <div class="btn-style-1 wow bounceInLeft" data-wow-delay="1">
                                <a class="btn-border-black" href="product-details.html">
                                    <div class="btn-viewmore-normal btn-ptb-3 btn-viewmore-common btn-font-2 btn-letter-sp">
                                        <span>SHOP NOW</span>
                                    </div>
                                    <div class="btn-viewmore-hover btn-ptb-3 btn-viewmore-common btn-font-2 btn-letter-sp">
                                        <span>SHOP NOW</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-width-fullpage-57">
                        <div class="fullpage-two-img wow bounceInRight" data-wow-delay="1">
                            <img src="{{ asset('images/slider/home18-img-01-1.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section single-full-slider height-100vh bg-img d-flex align-items-center bg-palegreen">
            <div class="container-fluid p-0">
                <div class="row no-gutters align-items-center ">
                    <div class="custom-col-width-fullpage-56">
                        <div class="fullpage-three-img fullpage-pl-345 wow bounceInLeft" data-wow-delay="1">
                            <img src="{{ asset('images/slider/home18-img-03-1.png') }}" alt="">
                        </div>
                    </div>
                    <div class="custom-col-width-fullpage-43">
                        <div class="fullpage-first-slide-content fullpage-pl-80">
                            <h2 class=" wow bounceInRight" data-wow-delay="1">Costa Farms Live <br> Indoor</h2>
                            <div class="btn-style-1 wow bounceInRight" data-wow-delay="1">
                                <a class="btn-border-black" href="product-details.html">
                                    <div class="btn-viewmore-normal btn-ptb-3 btn-viewmore-common btn-font-2 btn-letter-sp">
                                        <span>SHOP NOW</span>
                                    </div>
                                    <div class="btn-viewmore-hover btn-ptb-3 btn-viewmore-common btn-font-2 btn-letter-sp">
                                        <span>SHOP NOW</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section single-full-slider height-100vh bg-img d-flex align-items-center bg-powderblue">
            <div class="container-fluid p-0">
                <div class="row no-gutters align-items-center ">
                    <div class="custom-col-width-fullpage-47">
                        <div class="fullpage-four-img fullpage-pl-230 wow bounceInLeft" data-wow-delay="1">
                            <img src="{{ asset('images/slider/home18-img-04-1.png') }}" alt="">
                        </div>
                    </div>
                    <div class="custom-col-width-fullpage-50">
                        <div class="fullpage-first-slide-content fullpage-pl-150">
                            <h2 class="wow bounceInRight" data-wow-delay="1">Contemporary Office <br> Chair</h2>
                            <div class="btn-style-1 wow bounceInRight" data-wow-delay="1">
                                <a class="btn-border-black" href="product-details.html">
                                    <div class="btn-viewmore-normal btn-ptb-3 btn-viewmore-common btn-font-2 btn-letter-sp">
                                        <span>SHOP NOW</span>
                                    </div>
                                    <div class="btn-viewmore-hover btn-ptb-3 btn-viewmore-common btn-font-2 btn-letter-sp">
                                        <span>SHOP NOW</span>
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

@include('partials.scripts')
</body>

</html>
@endsection
