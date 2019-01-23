<?php

namespace App\Http\Controllers;

use App\debt;
use App\product;
use Auth;
use Illuminate\Http\Request;

class DebtsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $debts = debt::all()->Where('user_id', Auth::user()->id);
        return view('debts.index',  compact('debts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //fetches all the products for the user and displays it in a dropdown
        //for the user the select the ones collected by the debtor
        $products = product::all()->where('user_id', Auth::user()->id);
        return view('debts.create', compact('products'));
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
            'items'=>'required',
            'totalcost'=>'required',
            'contact'=>'max:11'
        ]);
        /*the $itemlist variable is a list of items selected which is stored in an array
            the implode() function takes those items and lists them seperating them by ","
            the ucwords() function converts the first letter of each word in a stmt to uppercase
        */
        $itemlist = $request->items;
        $itemlist = implode(',', $itemlist);

        $debts = new debt;
        $debts->name = ucwords($request->name);
        $debts->totalcost = $request->totalcost;
        $debts->contact = $request->contact;
        $debts->user_id = Auth::user()->id;
        $debts->items = ucwords($itemlist);

        $debts->save();
        return redirect('/gtrade/debts');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /*the explode function returns an array of strings which each element in the array 
            being the element after a comma
            pluck() function takes the name of all the products under that user and parse to 
            an array using toArray() functio
            array_diff compares products in that array with the itemlist array and returns the
            all items in products that are not in itemlist
        */
        $debt = debt::findOrFail($id);
        $itemlist = $debt->items;
        $itemlist = explode(',',$itemlist);
        $products = product::where('user_id', Auth::user()->id)->pluck('name')->toArray();
        $newItem  = array_diff($products, $itemlist);
        // return $result;

        return view('debts.edit', compact('debt', 'itemlist', 'newItem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'items'=>'required',
            'totalcost'=>'required',
            'contact'=>'max:11'
        ]);
        $debt = debt::findOrFail($id);

        $items = $request->items;
        $items = implode(',', $items);

        $debt->items=ucwords($items);
        $debt->totalcost=$request->totalcost;
        $debt->contact=$request->contact;

        $debt->save();
        return redirect('/gtrade/debts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
        {
            debt::where('id', $request->id)->delete();
        }
}
