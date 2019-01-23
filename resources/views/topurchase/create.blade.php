@extends('layout.masterform')

@section('active')
	Exhausted Items
@endsection

@section('active1')
	New
@endsection

@section('submitbtn')
	<span class="fa fa-plus"> Create</span>
@endsection

@section('form-title')
	New Product
@endsection

@section('form-action')
	{{Route('topurchase.store') }}
@endsection

@section('form')
	<div class="form-group">
		<input type="text" class="form-control" name="brand" placeholder="product Brand">
	</div>
	<div class="form-group">
		<input type="text" class="form-control" name="name"  placeholder="Item Name">
	</div>
	<div class="form-group">
	  <label>Item Unit</label>
	  <select class="form-control" name="unit">
	    <option>Kg</option>
	    <option>Litre(s)</option>
	    <option>Pair(s)</option>
	    <option>Hand(s)</option>
	    <option>piece(s)</option>
	  </select>
	</div>
@endsection