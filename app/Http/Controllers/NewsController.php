<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function faqs(){
        return view('nav_pages.news.FAQs');
    }
}
