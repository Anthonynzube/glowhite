@extends('partials.app')

@section('title', 'Moisturizers')

@section('content')
    <div class="product-area pt-50 pb-120 section-padding-3" id="glowhite-description">
        <div class="breadcrumb-area section-padding-1 breadcrumb-ptb-3">
            <div class="container-fluid" >
                <div class="breadcrumb-content breadcrumb-font-inc">
                    <ul>
                        <li>
                            <i class="fa fa-home" aria-hidden="true"></i>
                            
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li><span> > </span></li>
                        <li>
                        <a href="{{route('moisturizers')}}">Moisturizers</a>
                        </li>
                        <li><span> > </span></li>
                        <li class="active">{{$product->name}}</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="product-details-area section-padding-1 pb-90">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product-details-tab">
                            <div class="product-dec-right pro-dec-big-img-slider">
                                <div class="easyzoom-style">
                                    <div class="easyzoom easyzoom--overlay">
                                        <a href="{{ asset('images/product/product-14.jpg') }}">
                                            <img src="{{ asset('images/product/product-14.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <a class="easyzoom-pop-up img-popup" href="{{ asset('images/product/product-14.jpg') }}"><i class="dlicon ui-1_zoom-in "></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="product-details-col-72">
                                <div class="product-details-content p-dec-content-edit">
                                    <h2 class="uppercase">{{$product->name}}</h2>
                                    <div class="product-details-ratting-wrap">
                                        <div class="product-details-ratting">

                                            @foreach(range(1,5) as $i)
                                                <span class="fa-stack" style="width:1em;">
                                                    <i class="fa fa-star fa-stack-1x"></i>

                                                    @if($averageProductRating > 0)
                                                        @if($averageProductRating > 0.5)
                                                            <i class="yellow fa fa-star fa-stack-1x"></i>
                                                        @else
                                                            <i class="yellow fa fa-star-half fa-stack-1x"  style="width:0.5em"></i>
                                                        @endif
                                                    @endif
                                                    
                                                    @php $averageProductRating--; @endphp
                                                </span>
                                            @endforeach
                                        </div>
                                        
                                        <p class="ml-2"> ({{$reviewCount}} customer reviews)</p>
                                    </div>
                                    {{-- <h3>$49.00</h3> --}}
                                    <div class="product-details-peragraph">
                                        <p>{{$product->description}}</p>
                                    </div>
                                    <div class="product-details-action-wrap" >
                                        <div class="affiliate-btn" id="shop">
                                            <a title="Shop Now" href="#">Shop Now</a>
                                        </div>
                                        <div class="product-details-wishlist affiliate-res-xs">
                                            <a title="Add to wishlist" href="#"><i class="fa fa-heart-o"></i> Add to wishlist</a>
                                        </div>
                                    </div>
                                    <div class="product-details-meta">
                                        <span>Category: <a href="{{route('moisturizers')}}">{{$product->category->name}}</a></span>
                                    </div>
                                    <div class="social-icon-style-3">
                                        <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                                        <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                        <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                        <a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a>
                                        <a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="description-review-area section-padding-7 pb-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="description-review-wrapper">
                            <div class="description-review-topbar nav">
                                <a class="active" data-toggle="tab" href="#des-details1">Description</a>
                                <a data-toggle="tab" href="#des-details2">Description of use</a>
                                <a data-toggle="tab" href="#des-details3">Reviews ({{$reviewCount}})</a>
                                <a data-toggle="tab" href="#des-details4"> Vendors</a>
                            </div>
                            <div class="tab-content description-review-bottom">
                                <div id="des-details1" class="tab-pane active">
                                    <div class="product-description-wrapper">
                                        <div class="row">
                                            <div class="product-dec-col-62">
                                                <div class="product-dec-content">
                                                    <p>{{$product->description}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="des-details2" class="tab-pane">
                                    <div class="additional-info">
                                        <p>Omo. Use it any how. LOL.</p>
                                    </div>
                                </div>
                                <div id="des-details3" class="tab-pane ">
                                    <div class="review-wrapper">
                                        @if ($reviewCount > 0)
                                            <h2>{{$reviewCount}} review(s) for {{$product->name}}</h2>
                                        
                                            @foreach ($productReviews as $productReview)
                                                <div class="single-review">
                                                    <div class="review-content">
                                                        <div class="review-top-wrap">
                                                            <div class="review-name">
                                                                <h5>
                                                                    <span>{{$productReview->author}}</span> - {{date("d M Y", strtotime($productReview->created_at))}}
                                                                </h5>
                                                            </div>
                                                            <div class="review-rating" id="rating"> 
                                                                @foreach(range(1,5) as $i)
                                                                    <span class="fa-stack" style="width:1em">
                                                                        <i class="fa fa-star fa-stack-1x"></i>

                                                                        @if($productReview->rating > 0)
                                                                            @if($productReview->rating > 0.5)
                                                                                <i class="yellow fa fa-star fa-stack-1x"></i>
                                                                            @else
                                                                                <i class="yellow fa fa-star-half fa-stack-1x"  style="width:0.5em"></i>
                                                                            @endif
                                                                        @endif
                                                                        
                                                                        @php $productReview->rating--; @endphp
                                                                    </span>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                        <p>{{$productReview->body}}</p>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else
                                            <h2>No review for {{$product->name}}</h2>
                                            <div class="single-review">
                                                <div class="review-content">
                                                    <p>Be the first to review this product</p>
                                                </div>
                                            </div>
                                        @endif

                                        
                                    </div>
                                    @include('partials.reviewForm')
                                </div>
                                <div id="des-details4" class="tab-pane ">
                                    <div class="pro-dec-brand-wrap">
                                        <div class="row">
                                            <div class="ml-auto mr-auto col-lg-10">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-4 col-md-6 col-sm-5">
                                                        <div class="pro-dec-brand-img text-center">
                                                            <img src="images/brand-logo/brand-logo-7.png" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 col-md-6 col-sm-7">
                                                        <div class="pro-dec-brand-content">
                                                            <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra, in vehicula lacus scelerisque. Vestibulum ut sem laoreet, feugiat tellus at, hendrerit arcu..</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="small-device-area d-block d-md-none">
            <div class="container-fluid">
                <div class="pro-dec-small-device">
                    <div class="pro-details-sidebar-active slider-nav-style-3 owl-carousel">
                        <div class="single-pro-details-sidebar">
                            <a href="#"><img src="images/product-details/pro-details-sidebar-1.jpg" alt=""></a>
                            <div class="pro-details-sidebar-content">
                                <h4><a href="#">NEW <br>LONDON</a></h4>
                                <p>Off 20% for all</p>
                            </div>
                        </div>
                        <div class="single-pro-details-sidebar">
                            <a href="#"><img src="images/product-details/pro-details-sidebar-2.jpg" alt=""></a>
                            <div class="pro-details-sidebar-content">
                                <h4><a href="#">NEW <br>LONDON</a></h4>
                                <p>Off 20% for all</p>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-subscribe-wrap">
                        <div class="sidebar-subscribe-content text-center">
                            <i class="dlicon ui-1_email-84"></i>
                            <h5>Join Our Newsletter</h5>
                            <p>Sale up to 20% off for your next purchase in this month!</p>
                        </div>
                        <div class="sidebar-subscribe-form">
                            <form class="validate subscribe-form-style" novalidate="" target="_blank" name="mc-embedded-subscribe-form" method="post" action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                                <div class="mc-form">
                                    <input class="email" type="email" required="" placeholder=" email address…" name="EMAIL" value="">
                                    <div class="mc-news" aria-hidden="true">
                                        <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef">
                                    </div>
                                    <div class="clear">
                                        <input class="button" type="submit" name="subscribe" value="Subscribe">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="related-product-area section-padding-1 pb-95">
            <div class="container-fluid">
                <div class="section-title-6 mb-50">
                    <h2>Related Products</h2>
                </div>
                <div class="related-product-active owl-carousel">
                    <div class="product-wrap">
                        <div class="product-img default-overlay mb-25">
                            <a href="product-details.html">
                                <img class="default-img" src="{{ asset('images/product/product-3.jpg') }}" alt="">
                                <img class="hover-img" src="{{ asset('images/product/product-3-2.jpg') }}" alt="">
                            </a>
                            <div class="product-action product-action-position-1">
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                            </div>
                        </div>
                        <div class="product-content-2 title-font-width-400 text-center">
                            <h3><a href="product-details.html">Fashion sneaker winter</a></h3>
                            <div class="product-price">
                                <span class="new-price">$28.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="product-img default-overlay mb-25">
                            <a href="product-details.html">
                                <img class="default-img" src="{{ asset('images/product/product-4.jpg') }}" alt="">
                                <img class="hover-img" src="{{ asset('images/product/product-4-2.jpg') }}" alt="">
                            </a>
                            <div class="product-action product-action-position-1">
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                            </div>
                        </div>
                        <div class="product-content-2 title-font-width-400 text-center">
                            <h3><a href="product-details.html">News strappy sandals</a></h3>
                            <div class="product-price">
                                <span class="new-price">$26.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="product-img default-overlay mb-25">
                            <a href="product-details.html">
                                <img class="default-img" src="{{ asset('images/product/product-1.jpg') }}" alt="">
                                <img class="hover-img" src="{{ asset('images/product/product-1-2.jpg') }}" alt="">
                            </a>
                            <div class="product-action product-action-position-1">
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                            </div>
                        </div>
                        <div class="product-content-2 title-font-width-400 text-center">
                            <h3><a href="product-details.html">Check bermuda shorts</a></h3>
                            <div class="product-price">
                                <span class="new-price">$39.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="product-img default-overlay mb-25">
                            <a href="product-details.html">
                                <img class="default-img" src="{{ asset('images/product/product-5.jpg') }}" alt="">
                                <img class="hover-img" src="{{ asset('images/product/product-5-2.jpg') }}" alt="">
                            </a>
                            <div class="product-action product-action-position-1">
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                            </div>
                        </div>
                        <div class="product-content-2 title-font-width-400 text-center">
                            <h3><a href="product-details.html">Down puffer coat collar</a></h3>
                            <div class="product-price">
                                <span class="new-price">$55.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="product-img default-overlay mb-25">
                            <a href="product-details.html">
                                <img class="default-img" src="{{ asset('images/product/product-6.jpg') }}" alt="">
                                <img class="hover-img" src="{{ asset('images/product/product-6-2.jpg') }}" alt="">
                            </a>
                            <div class="product-action product-action-position-1">
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                            </div>
                        </div>
                        <div class="product-content-2 title-font-width-400 text-center">
                            <h3><a href="product-details.html">Bejewelled velvet sandals</a></h3>
                            <div class="product-price">
                                <span class="new-price">$49.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="product-img default-overlay mb-25">
                            <a href="product-details.html">
                                <img class="default-img" src="{{ asset('images/product/product-4.jpg') }}" alt="">
                                <img class="hover-img" src="{{ asset('images/product/product-4-2.jpg') }}" alt="">
                            </a>
                            <div class="product-action product-action-position-1">
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                            </div>
                        </div>
                        <div class="product-content-2 title-font-width-400 text-center">
                            <h3><a href="product-details.html">News strappy sandals</a></h3>
                            <div class="product-price">
                                <span class="new-price">$26.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
@endsection