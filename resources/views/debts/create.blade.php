@extends('layout.masterform')

@section('active')
	Debts
@endsection

@section('active1')
	New
@endsection

@section('form-title')
	New Debt
@endsection

@section('submitbtn')
	<span class="fa fa-plus"> Create</span>
@endsection

@section('form-action')
	{{Route('debts.store')}}
@endsection


@section('form')
	<div class="form-group">
		<input type="text" class="form-control" name="name" placeholder="Full Name">
	</div>
	<div class="form-group">
	  <select class="form-control select2" multiple="multiple" name="items[]" data-placeholder="Select Item(s)" style="width: 100%;">
	  	@foreach ($products as $product)
		    <option value="{{$product->name}}">{{$product->name}}</option>
	  	@endforeach
	  </select>
	</div>
	<div class="form-group">
		<input type="text" class="form-control" name="totalcost" placeholder="Total cost">
	</div>
	<div class="form-group">
		<input type="number" class="form-control" name="contact" placeholder="Contact">
	</div>
@endsection
