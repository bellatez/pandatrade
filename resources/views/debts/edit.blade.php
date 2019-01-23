@extends('layout.masterform')

@section('page title')
	Debts
@endsection

@section('debts')
	active
@endsection

@section('active1')
	Edit
@endsection

@section('active')
	Debts
@endsection

@section('form-title')
	Edit Debt
@endsection

@section('form-action')
	{{Route('debts.update',$debt->id)}}
@endsection


@section('form')
	{{method_field('PUT')}}
	<div class="form-group">
		<label for="name">Name:</label>
		<input type="text" class="form-control" name="name" value="{{$debt->name}}" placeholder="Full Name">
	</div>
	<div class="form-group">
		<label for="items">Items Collected:</label>
	  <select class="form-control select2" multiple="multiple" name="items[]" data-placeholder="Select Item(s)" style="width: 100%;">
	  	@foreach ($itemlist as $li)
		    <option selected="selected">{{$li}}</option>
	  	@endforeach
	    @foreach ($newItem as $product)
	    	<option value="{{$product}}">{{$product}}</option>
	    @endforeach
	  </select>
	</div>
	<div class="form-group">
		<label for="cost">Total Cost:</label>
		<input type="text" class="form-control" name="totalcost" value="{{$debt->totalcost}}" placeholder="Total cost">
	</div>
	<div class="form-group">
		<label for="contact">Contact:</label>
		<input type="number" class="form-control" name="contact" value="{{$debt->contact}}" placeholder="Contact">
	</div>
@endsection

@section('submitbtn')
	<span class="fa fa-edit"> Edit</span>
@endsection