<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use Auth;

class TopurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = product::all()->Where('status', 0)
                    ->where('user_id', Auth::user()->id);
        return view('topurchase.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('topurchase.create');
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
           'name'=>'required'
       ]);
       $products = new product;
       $products->brand= $request->brand;
       $products->name = $request->name;
       $products->unit = $request->unit;
       $products->status = 0;
       $products->user_id = Auth::user()->id;

       $products->save();
       return redirect('/gtrade/topurchase'); 
    }

    // change the status of a product if it is available
    public function status1(Request $request, $id)
    {
        $item = product::FindorFail($id);
        $item->status = 1;
        $item->update();
        return redirect('/gtrade/topurchase');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        product::where('id', $request->id)->delete();
    }
}
