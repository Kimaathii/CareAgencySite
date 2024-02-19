<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    //
    public function generatePdf()
    {
        $pdf = \PDF::loadView('pdf.template'); // Replace 'pdf.template' with your actual view name
        return $pdf->stream('document.pdf');
    }
}
