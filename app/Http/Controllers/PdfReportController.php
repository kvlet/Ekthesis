<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfReportController extends Controller
{
    public function aitisiDikografias_pdf()
    {
        $data = [
            'foo' => 'bar'
        ];
        $pdf = PDF::loadView('_modals.aitisiDikModal', ['foo'=>'bar'],[],['title' => 'Αίτηση Δικογραφίας',
            'margin_top' => 0]);
        return $pdf->stream('Αίτηση Δικογραφίας.pdf');
    }
}
