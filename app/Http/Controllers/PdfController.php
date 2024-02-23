<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;


class PdfController extends Controller
{
    

    public function viewPdf()
    {
        // $filename = 'cyncarehealthapplicationform.pdf';
        // $path = storage_path('app\public\pdfs' . $filename);

        return response()->file('pdfs/cyncarehealthapplicationform.pdf');
    }
    }

