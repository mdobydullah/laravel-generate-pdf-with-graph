<?php

namespace App\Http\Controllers;

class PDFController extends Controller
{
    // function to display preview
    public function preview()
    {
        return view('graph');
    }

    // function to generate PDF
    public function generatePDF()
    {
        $pdf = \PDF::loadView('graph');
        $pdf->setOption('enable-javascript', true);
        $pdf->setOption('javascript-delay', 5000);
        $pdf->setOption('enable-smart-shrinking', true);
        $pdf->setOption('no-stop-slow-scripts', true);
        return $pdf->download('graph.pdf');
    }
}
