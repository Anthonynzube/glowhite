@extends('partials.app')

@section('title', 'Cleansers')

@section('content')
    <div class="product-area pt-50 pb-120 section-padding-3" id="glowhite-padding">
        <div class="container-fluid">
            <div class="section-title-7 mb-45 text-center">
                <h2 style="color: #6F6F6F">Cleansers</h2>
                <hr class="style2">
            </div>
            <div class="product-tab-list nav mb-50 gold" id="ash-nav">
                <a class="active" href="#product-1" data-toggle="tab">
                    All
                </a>
                <a href="#product-2" data-toggle="tab">
                    Pure Carrot
                </a>
                <a href="#product-3" data-toggle="tab">
                    QWhite
                </a>
                <a href="#product-4" data-toggle="tab">
                    Others
                </a>
            </div>
            <div class="tab-content jump padding-60-row-col">
                <div id="product-1" class="tab-pane active">
                    <div class="row">
                        @foreach ($allCleansers as $allCleanser)
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-50">
                                    <div class="product-img mb-25">
                                        <a href="cleansers/{{$allCleanser->id}}/show">
                                            <img class="default-img" src="images/product/product-14.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content-1 title-font-width-400 text-center">
                                        <h3 class="pad-tb product-title-gold">{!! nl2br(e($allCleanser->name)) !!}</h3>
                                        <p>{{ \Illuminate\Support\Str::limit($allCleanser->description, 60, $end='...') }}</p>
                                        <div class="slider-btn-2 pad-tb" id="slider-btn-gold">
                                            <a class="animated" href="http://jumia.com.ng/" data-toggle="modal" data-target="#myModal{{$loop->index}}">Quick View </a>
                                        </div>
                                        <!-- The Modal -->
                                        <div id="div-desktop">
                                            <div class="modal fade my-auto" id="myModal{{$loop->index}}" tabindex="-1" role="dialog" aria-labelledby="myModal" style="display: none;overflow-y: hidden;" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document" style="margin-top: 0px;">
                                                    <div class="modal-content">
                                                        <div class="container-fluid" style="padding-left: 0px; padding-right: 0px;">
                                                            <button type="button" class="close p-2" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <div class="row">
                                                                <div class="col-md-6 bg-img m-h-60 d-none d-sm-block" style="background-image: url('../images/cleanser.png     ')">
                                                                    <div class="cleanser-content">
                                                                        <h2>{!! nl2br(e($allCleanser->name)) !!}</h2>
                                                                        <p>{!! nl2br(e($allCleanser->description)) !!}</p><br>
                                                                        <div>
                                                                            <a href="#">Shop Now</a>
                                                                        </div>
                                                                        <a href="cleansers/{{$allCleanser->id}}/show" id="product-details">See Full Product Details></a>

                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 py-5 px-sm-5 my-auto ">

                                                                    <h2 class="pt-sm-3 my-auto">Product Image</h2>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pad-tb" >
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div id="product-2" class="tab-pane">
                    <div class="row">
                        @foreach ($pureCarrotCleansers as $pureCarrotCleanser)
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-50">
                                    <div class="product-img mb-25">
                                        <a href="cleansers/{{$pureCarrotCleanser->id}}/show">
                                            <img class="default-img" src="images/product/product-14.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content-1 title-font-width-400 text-center">
                                        <h3 class="pad-tb product-title-gold">{!! nl2br(e($pureCarrotCleanser->name)) !!}</h3>
                                        <p>{{ \Illuminate\Support\Str::limit($pureCarrotCleanser->description, 60, $end='...') }}</p>
                                        <div class="slider-btn-2 pad-tb" id="slider-btn-gold">
                                            <a class="animated" href="http://jumia.com.ng/" data-toggle="modal" data-target="#myModalp{{$loop->index}}">Quick View </a>
                                        </div>
                                        <!-- The Modal -->
                                        <div id="div-desktop">
                                            <div class="modal fade my-auto" id="myModalp{{$loop->index}}" tabindex="-1" role="dialog" aria-labelledby="myModal" style="display: none;overflow-y: hidden;" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document" style="margin-top: 0px;">
                                                    <div class="modal-content">
                                                        <div class="container-fluid" style="padding-left: 0px; padding-right: 0px;">
                                                            <button type="button" class="close p-2" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <div class="row">
                                                                <div class="col-md-6 bg-img m-h-60 d-none d-sm-block" style="background-image: url('../images/cleanser.png     ')">
                                                                    <div class="cleanser-content">
                                                                        <h2>{!! nl2br(e($pureCarrotCleanser->name)) !!}</h2>
                                                                        <p>{!! nl2br(e($pureCarrotCleanser->description)) !!}</p><br>
                                                                        <div>
                                                                            <a href="#">Shop Now</a>
                                                                        </div>
                                                                        <a href="cleansers/{{$pureCarrotCleanser->id}}/show" id="product-details">See Full Product Details></a>

                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 py-5 px-sm-5 my-auto ">

                                                                    <h2 class="pt-sm-3 my-auto">Product Image</h2>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pad-tb" >
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div id="product-3" class="tab-pane">
                    <div class="row">
                        @foreach ($qwhiteCleansers as $qwhiteCleanser)
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-50">
                                    <div class="product-img mb-25">
                                        <a href="cleansers/{{$qwhiteCleanser->id}}/show">
                                            <img class="default-img" src="images/product/product-14.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content-1 title-font-width-400 text-center">
                                        <h3 class="pad-tb product-title-gold">{!! nl2br(e($qwhiteCleanser->name)) !!}</h3>
                                        <p>{{ \Illuminate\Support\Str::limit($qwhiteCleanser->description, 60, $end='...') }}</p>
                                        <div class="slider-btn-2 pad-tb" id="slider-btn-gold">
                                            <a class="animated" href="http://jumia.com.ng/" data-toggle="modal" data-target="#myModalq{{$loop->index}}">Quick View </a>
                                        </div>
                                        <!-- The Modal -->
                                        <div id="div-desktop">
                                            <div class="modal fade my-auto" id="myModalq{{$loop->index}}" tabindex="-1" role="dialog" aria-labelledby="myModal" style="display: none;overflow-y: hidden;" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document" style="margin-top: 0px;">
                                                    <div class="modal-content">
                                                        <div class="container-fluid" style="padding-left: 0px; padding-right: 0px;">
                                                            <button type="button" class="close p-2" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <div class="row">
                                                                <div class="col-md-6 bg-img m-h-60 d-none d-sm-block" style="background-image: url('../images/cleanser.png     ')">
                                                                    <div class="cleanser-content">
                                                                        <h2>{!! nl2br(e($qwhiteCleanser->name)) !!}</h2>
                                                                        <p>{!! nl2br(e($qwhiteCleanser->description)) !!}</p><br>
                                                                        <div>
                                                                            <a href="#">Shop Now</a>
                                                                        </div>
                                                                        <a href="cleansers/{{$qwhiteCleanser->id}}/show" id="product-details">See Full Product Details></a>

                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 py-5 px-sm-5 my-auto ">

                                                                    <h2 class="pt-sm-3 my-auto">Product Image</h2>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pad-tb" >
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div id="product-4" class="tab-pane">
                    <div class="row">
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
