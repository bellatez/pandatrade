<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\transaction;
use Auth;

class TransactionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactions = transaction::orderBy('created_at', 'desc')->Where('user_id', Auth::user()->id)->get();
        return view('transactions.index', compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transactions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'date'=>'required'   
        ]);

        $transactions = new transaction;
        $transactions->date=$request->date;
        $transactions->income=$request->income;
        $transactions->expenditure=$request->expenditure;
        $transactions->user_id = Auth::user()->id;
        $transactions->save();
        
        return redirect('/gtrade/transactions');

     // $transactions = new transaction;


    }
}
