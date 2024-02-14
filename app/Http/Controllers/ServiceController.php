<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function staffing(){
        return view('nav_pages.servicesPages.staffingPage');
    }
    public function training(){
        return view('nav_pages.servicesPages.trainingPage');
    }
    public function cleaning(){
        return view('nav_pages.servicesPages.cleaningPage');
    }
    public function join(){
        return view('nav_pages.servicesPages.join_us');
    }
    public function domiciliary(){
        return view('nav_pages.servicesPages.domiciliaryPage');
    }
}
