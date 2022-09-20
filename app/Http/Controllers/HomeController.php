<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('pages.home');
    }

    public function business(){
        return view('pages.forbusiness');
    }

    public function about(){
        return view('pages.about');
    }

    public function faqs(){
        return view('pages.faqs');
    }

    public function terms(){
        return view('pages.termsandservices');
    }
}
