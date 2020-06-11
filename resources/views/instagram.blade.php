@extends('partials.app')

@section('title', 'Instagram Shop')

@section('content')


    <div class="breadcrumb-area section-padding-1 bg-gray breadcrumb-ptb-2">
        <div class="container-fluid">
            <div class="breadcrumb-content text-center">
                <div class="breadcrumb-title">
                    <h2>Instagram</h2>
                </div>
                <ul>
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li><span> > </span></li>
                    <li class="active">Instagram </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="product-area-2 section-padding-1 padding-70-row-col pt-100 pb-100">
        <div class="container-fluid">
{{--            <div class="p-100">--}}
{{--                <!-- SnapWidget -->--}}
{{--                <script src="https://snapwidget.com/js/snapwidget.js"></script>--}}
{{--                <iframe src="https://snapwidget.com/embed/837617" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden;  width:100%; "></iframe>--}}
{{--            </div>--}}
            <div class="row grid">
                <div class="col-lg-4 col-md-6 grid-item">
                    <div class="shop-instagram-wrap tilt-active mb-70">
                        <a href="product-details.html"><img src="{{ asset('images/product/shop-instra-1.jpg') }}" alt="product"></a>
                        <div class="shop-insta-content-wrap">
                            <div class="shop-insta-content">
                                <h3><a href="product-details.html">Image #1</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="shop-insta-popup">
                                <a class="img-popup" href="{{ asset('images/product/shop-instra-1.jpg') }}"><i class="dlicon ui-1_circle-add"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item">
                    <div class="shop-instagram-wrap tilt-active mb-70">
                        <a href="product-details.html"><img src="{{ asset('images/product/shop-instra-2.jpg') }}" alt="product"></a>
                        <div class="shop-insta-content-wrap">
                            <div class="shop-insta-content">
                                <h3><a href="product-details.html">Image #2</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="shop-insta-popup">
                                <a class="img-popup" href="{{ asset('images/product/shop-instra-2.jpg') }}"><i class="dlicon ui-1_circle-add"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item">
                    <div class="shop-instagram-wrap tilt-active mb-70">
                        <a href="product-details.html"><img src="{{ asset('images/product/shop-instra-3.jpg') }}" alt="product"></a>
                        <div class="shop-insta-content-wrap">
                            <div class="shop-insta-content">
                                <h3><a href="product-details.html">Image #3</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="shop-insta-popup">
                                <a class="img-popup" href="{{ asset('images/product/shop-instra-3.jpg') }}"><i class="dlicon ui-1_circle-add"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item">
                    <div class="shop-instagram-wrap tilt-active mb-70">
                        <a href="product-details.html"><img src="{{ asset('images/product/shop-instra-4.jpg') }}" alt="product"></a>
                        <div class="shop-insta-content-wrap">
                            <div class="shop-insta-content">
                                <h3><a href="product-details.html">Image #4</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="shop-insta-popup">
                                <a class="img-popup" href="{{ asset('images/product/shop-instra-4.jpg') }}"><i class="dlicon ui-1_circle-add"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item">
                    <div class="shop-instagram-wrap tilt-active mb-70">
                        <a href="product-details.html"><img src="{{ asset('images/product/shop-instra-5.jpg') }}" alt="product"></a>
                        <div class="shop-insta-content-wrap">
                            <div class="shop-insta-content">
                                <h3><a href="product-details.html">Image #5</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="shop-insta-popup">
                                <a class="img-popup" href="{{ asset('images/product/shop-instra-5.jpg') }}"><i class="dlicon ui-1_circle-add"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item">
                    <div class="shop-instagram-wrap tilt-active mb-70">
                        <a href="product-details.html"><img src="{{ asset('images/product/shop-instra-6.jpg') }}" alt="product"></a>
                        <div class="shop-insta-content-wrap">
                            <div class="shop-insta-content">
                                <h3><a href="product-details.html">Image #6</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="shop-insta-popup">
                                <a class="img-popup" href="{{ asset('images/product/shop-instra-6.jpg') }}"><i class="dlicon ui-1_circle-add"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pro-pagination-style text-center">
                <ul>
                    <li><a class="active" href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#"><i class="dlicon arrows-1_tail-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection
