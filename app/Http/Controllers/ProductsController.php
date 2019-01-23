<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use Auth;

class ProductsController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = product::all()->Where('status', 1)
                    ->where('user_id', Auth::user()->id);
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
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
        //the ucfirst() function sets the first letter of a string to uppercase
        $products = new product;
        $products->brand= ucfirst($request->brand);
        $products->name = ucfirst($request->name);
        $products->unitprice = $request->unitprice;
        $products->quantity = $request->quantity;
        $products->unit = $request->unit;
        $products->status = 1;
        $products->user_id = Auth::user()->id;

        $products->save();
        return redirect('/gtrade/products');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        return view('products.edit', compact('product'));   
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
        $item = product::FindorFail($id);
         
        $request->validate([
            'name'=>'required'
        ]);
        
        $item->name = ucfirst($request->name);
        $item->unitprice = $request->unitprice;
        $item->quantity = $request->quantity;

        $item->save();
        return redirect('/gtrade/products');
    }

    //this function updates the status of a product when its finish changes the boolean value
    public function UpdateStats0(Request $request, $id)
    {
        $item = product::FindorFail($id);
        $item->status = 0;
        $item->update();
        return redirect('/gtrade/products');
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
