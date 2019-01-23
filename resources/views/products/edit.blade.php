@extends('layout.masterform')

@section('page title')

@endsection

@section('products')
	active
@endsection

@section('active')
	Products
@endsection

@section('active1')
	Edit
@endsection

@section('form-title')
	Edit Product
@endsection

@section('form-action')
	{{Route('products.update',$product->id)}}
@endsection

@section('form')
	{{method_field('PUT')}}
	<div class="form-group">
		<label for="">Name:</label>
		<input type="text" class="form-control" name="name" value="{{$product->name}}"  placeholder="Item Name">
	</div>
	<div class="form-group">
		<label for="">Price per Item:</label>
		<input type="text" class="form-control" name="unitprice" value="{{$product->unitprice}}" placeholder="Price Per Item">
	</div>
	<div class="form-group">
		<label for="">Quantity Available:</label>
		<input type="text" class="form-control" name="quantity" value="{{$product->Quantity}}" placeholder="Available Quantity">
	</div>
@endsection

@section('submitbtn')
	<span class="fa fa-edit"> Edit</span>
@endsection