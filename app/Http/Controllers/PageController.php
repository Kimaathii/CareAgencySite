<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function home(){
        return view('home');
    }
    function returnMissionPage(){
        return view('nav_pages.homePages.missionVision');
    }
    function about(){
        return view('nav_pages.homePages.about');
    }
}
