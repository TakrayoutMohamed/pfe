<?php

namespace App\Http\Controllers\folders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    public function pdfDownloader()
    {
        $pdf = PDF::loadview('folders/realProgrammer');
        return $pdf->download('download_pdf_file.pdf');
    }
    public function pdfView()
    {
        return view('folders/realProgrammer');
    }

}
