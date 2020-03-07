<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfReportController extends Controller
{
    public function generate_pdf()
    {
        $data = [
            'foo' => 'bar'
        ];
        $pdf = PDF::loadView('_modals.aitisiDikModal', $data);
        return $pdf->stream('document.pdf');
    }
}
