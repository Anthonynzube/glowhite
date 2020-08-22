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
        // return $allProducts = DB::table('products')->get();
        // return $allMoisturizers = DB::table('products')->where('category_id', 1)->get();
        // return $pureCarrotMoisturizers = DB::table('products')->where([['category_id', 1],['name', 'like', '%Pure%']])->get();
        // return $qwhiteMoisturizers = DB::table('products')->where([['category_id', 1],['name', 'like', '%qwhite%']])->get();

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
        return view('moisturizerDescription', compact('product'));
    }

    public function showSerum(Product $product)
    {
        return view('serumDescription', compact('product'));
    }

    public function showCleanser(Product $product)
    {
        return view('cleanserDescription', compact('product'));
    }

    public function showToolkit(Product $product)
    {
        return view('toolkitDescription', compact('product'));
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
