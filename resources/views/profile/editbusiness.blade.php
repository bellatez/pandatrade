@extends('layout.masterform')

@section('page title')
	Edit
@endsection

@section('active1')
	Edit Business
@endsection

@section('active')
	Profile
@endsection

@section('form-title')
	Edit Business Details
@endsection

@section('form-action')
	{{Route('profile.UpdateBusiness')}}
@endsection


@section('form')
	<div class="form-group">
		<input type="text" class="form-control" name="shopname" value="{{Auth::user()->shopname}}" placeholder="Business Name">
	</div>
	<div class="form-group">
		<input type="text" class="form-control" name="shop_description" value="{{Auth::user()->shop_description}}" placeholder="Business Description">
	</div>
	
	<div class="form-group">
		<input type="text" class="form-control" name="business_location" value="{{Auth::user()->business_location}}" placeholder="Business Location">
	</div>
	<div class="form-group">
		<input type="number" class="form-control" name="business_contact" value="{{Auth::user()->business_contact}}" placeholder="Business Contact">
	</div>
@endsection

@section('submitbtn')
	<span class="fa fa-edit"> Edit</span>
@endsection