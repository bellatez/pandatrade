<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
// use App\transaction;

class DownloadController extends Controller
{
   public function downloadPDF()
   {
   		// $transaction = transaction::all();
   		$pdf = PDF::loadView('test');
   		return $pdf->download('invoice.pdf');
   }
}
