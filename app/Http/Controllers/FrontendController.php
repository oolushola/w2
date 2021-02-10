<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index() 
    {
        return view('fe.index');
    }

    public function aboutKaya() 
    {
        return view('fe.about');
    }

    public function blogList() 
    {
        return view('fe.blog');
    }

    public function blogDetails() 
    {
        return view('fe.blog-details');
    }

    public function contact() {
        return view('fe.contact');
    }
}
