<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Glowhite Cosmetics | @yield('title')</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">

    <style>
        @media only screen and (min-width: 1000px){
            #glowhite-padding{
            padding-top: 200px;
            }
        }
        .checked {
            color: orange;
        }
        #slider-btn-2 a {
            display: inline-block;
            line-height: 1;
            font-weight: 600;
            font-size: 12px;
            letter-spacing: 1px;
            color: #fff;
            background-color: #EC1C24;
            text-transform: uppercase;
            padding: 15px 30px 16px;
        }
        .pad-tb{
            padding-top: 5px;
            padding-bottom: 5px;
        }
        .product-title{
            color: #EC1C24;
        }
        hr.style1{
            border-top: 5px solid #FF1B1B;
            width: 10%;
            margin-top: 2px;
        }
        #ash-nav{
            border-radius: 5px;
            background-color: #E9E9E9;
            padding: 20px 0px;
            display: flex;
            justify-content: space-around;
        }
    </style>
    @include('partials.styles')

</head>
