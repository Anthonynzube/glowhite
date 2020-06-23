<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('moisturizer');
    }
    public function serums()
    {
        return view('serum');
    }
    public function cleansers()
    {
        return view('cleanser');
    }
    public function toolkit()
    {
        return view('toolkit');
    }
}
