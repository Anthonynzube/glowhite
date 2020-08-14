<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function instagram()
    {
        return view('instagram');
    }
    public function coming()
    {
        return view('coming');
    }
    public function moisturizers()
    {
        $allMoisturizers = DB::table('products')->where('category_id', 1)->get();
        $pureCarrotMoisturizers = DB::table('products')->where([['category_id', 1],['name', 'like', '%Pure%']])->get();
        $qwhiteMoisturizers = DB::table('products')->where([['category_id', 1],['name', 'like', '%qwhite%']])->get();
        return view('moisturizer', \compact('allMoisturizers', 'pureCarrotMoisturizers', 'qwhiteMoisturizers'));
    }
    public function serums()
    {
        $allSerums = DB::table('products')->where('category_id', 2)->get();
        $pureCarrotSerums = DB::table('products')->where([['category_id', 2],['name', 'like', '%Pure%']])->get();
        $qwhiteSerums = DB::table('products')->where([['category_id', 2],['name', 'like', '%qwhite%']])->get();
        return view('serum', \compact('allSerums', 'pureCarrotSerums', 'qwhiteSerums'));
    }
    public function cleansers()
    {
        $allCleansers = DB::table('products')->where('category_id', 3)->get();
        $pureCarrotCleansers = DB::table('products')->where([['category_id', 3],['name', 'like', '%Pure%']])->get();
        $qwhiteCleansers = DB::table('products')->where([['category_id', 3],['name', 'like', '%qwhite%']])->get();
        return view('cleanser', \compact('allCleansers', 'pureCarrotCleansers', 'qwhiteCleansers'));
    }
    public function toolkit()
    {
        $allToolkits = DB::table('products')->where('category_id', 4)->get();
        $pureCarrotToolkits = DB::table('products')->where([['category_id', 4],['name', 'like', '%Pure%']])->get();
        $qwhiteToolkits = DB::table('products')->where([['category_id', 4],['name', 'like', '%qwhite%']])->get();
        $otherToolkits = DB::table('products')->where([['category_id', 4],['name', 'not like', '%qwhite%'],['name', 'not like', '%Pure%']])->get();
        return view('toolkit', \compact('allToolkits', 'pureCarrotToolkits', 'qwhiteToolkits', 'otherToolkits'));
    }
}
