<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdftimesheetController extends Controller
{
    //
    public function viewtimesheetPdf()
    {


        return response()->file('pdfs/Cyncarehealthtimesheet.pdf');
    }
    
}
