<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\debt;
use App\User;
use App\transaction;
use Auth;
use PDF;

class AnalysisController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //obtain the date range for the balancesheet 
        $format = 'Y/m/d';
        $now = date($format);
        $to = date($format, strtotime("+30 days"));
        $constraints = [
            'from' => $now,
            'to' => $to
        ];
        //count each item in the various lists and display on the index page
        $productcount=product::all()->Where('status', 1)->where('user_id', Auth::user()->id)->count();
        $finishedcount=product::all()->Where('status', 0)->where('user_id', Auth::user()->id)->count();
        $debtcount=debt::all()->Where('user_id', Auth::user()->id)->count();
        $transactioncount=transaction::all()->Where('user_id', Auth::user()->id)->count();
        $balancesheet = $this->getBalanceSheet($constraints);        

        return view('analysis.index', compact('productcount', 'finishedcount', 'debtcount', 'transactioncount', 'balancesheet', ['searchingVals' => $constraints]));
    }

    //return all data from transactions table lying between a certain providing date range
    private function getBalanceSheet($constraints) {
        $balancesheet = transaction::where('date', '>=', $constraints['from'])
                        ->where('date', '<=', $constraints['to'])
                        ->Where('user_id', Auth::user()->id)
                        ->get();
        return $balancesheet;
    }

    //calculate total income and expenditure for a certain date range and produce invoice
    public function invoice(Request $request) {
        $constraints = [
            'from' => $request['from'],
            'to' => $request['to']
        ];

        $balancesheet = $this->getBalanceSheet($constraints);
        $sumincome = $balancesheet->sum('income');
        $sumexpense = $balancesheet->sum('expenditure');
        return view('analysis.balancesheet', ['balancesheet'=>$balancesheet, 'searchingVals' => $constraints, 'resultfrom'=>$constraints['from'], 'resultto'=>$constraints['to'], 'incometotal'=> $sumincome, 'expensetotal'=> $sumexpense]);
    }

    //print the invoice
    public function print(Request $request) 
    {
        $constraints = [
            'from' => $request['from'],
            'to' => $request['to']
        ];

        $balancesheet = $this->getBalanceSheet($constraints);
        $sumincome = $balancesheet->sum('income');
        $sumexpense = $balancesheet->sum('expenditure');
        return view('analysis.bsprint', ['balancesheet'=>$balancesheet, 'searchingVals' => $constraints, 'resultfrom'=>$constraints['from'], 'resultto'=>$constraints['to'], 'incometotal'=> $sumincome, 'expensetotal'=> $sumexpense]);
    }

    //generate the pdf file of the invoice using the PDF function from domPDF
    public function loadFile(Request $request)
    {
         $constraints = [
            'from' => $request['from'],
            'to' => $request['to']
        ];
        $balancesheet = $this->getBalanceSheet($constraints);
        $sumincome = $balancesheet->sum('income');
        $sumexpense = $balancesheet->sum('expenditure');
        $data = [

                'balancesheet' => $balancesheet, 
                'searchingVals' => $constraints,
                'incometotal'=> $sumincome, 
                'expensetotal'=> $sumexpense
            ];
            $pdf = PDF::loadView('analysis/salesreport', $data);
            return $pdf->download('salesreport1.pdf');
            // return $pdf->stream(); shows the pdf in browser

    }

}
