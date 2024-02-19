<?php

namespace App\Http\Controllers;
use PDF;
use Illuminate\Http\Request;


class PdfController extends Controller
{
    //
    public function generatePdf()
    {
        $pdf = \PDF::loadView('pdf.template'); // Replace 'pdf.template' with your actual view name
        return $pdf->stream('document.pdf');
    }
}
