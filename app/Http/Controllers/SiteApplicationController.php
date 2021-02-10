<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteApplicationController extends Controller
{
    public function index() {
        return view('admin.site-application.main');
    }
}
