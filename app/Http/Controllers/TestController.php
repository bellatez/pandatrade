<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class TestController extends Controller
{
    public function index()
    {
    	$data=['Testpage'];
    	$pdf = PDF::loadView('test', $data);
    	return $pdf->download('test.pdf');
    }
}
