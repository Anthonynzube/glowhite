<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('moisturizer');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function showMoisturizer(Product $product)
    {
        $reviewCount = $product->reviews->count();
        $productReviews = $product->reviews;
        $averageProductRating = $productReviews->avg('rating');
        return view('moisturizerDescription', compact('product', 'reviewCount', 'productReviews', 'averageProductRating'));
    }

    public function showSerum(Product $product)
    {
        $reviewCount = $product->reviews->count();
        $productReviews = $product->reviews;
        $averageProductRating = $productReviews->avg('rating');
        return view('serumDescription', compact('product', 'reviewCount', 'productReviews', 'averageProductRating'));
    }

    public function showCleanser(Product $product)
    {
        $reviewCount = $product->reviews->count();
        $productReviews = $product->reviews;
        $averageProductRating = $productReviews->avg('rating');
        return view('cleanserDescription', compact('product', 'reviewCount', 'productReviews', 'averageProductRating'));
    }

    public function showToolkit(Product $product)
    {
        $reviewCount = $product->reviews->count();
        $productReviews = $product->reviews;
        $averageProductRating = $productReviews->avg('rating');
        return view('toolkitDescription', compact('product', 'reviewCount', 'productReviews', 'averageProductRating'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
