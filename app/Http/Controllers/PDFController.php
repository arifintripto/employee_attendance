<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\DB;

class PDFController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }
    public function generatePDF()
    {
        $pdf = PDF::loadView('includes.attendance_sheet')->setPaper('a4', 'landscape');

        return $pdf->stream('Report.pdf');
    }
}
