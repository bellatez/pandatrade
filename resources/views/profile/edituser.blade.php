@extends('layout.masterform')

@section('page title')
	Edit User
@endsection

@section('products')
	active
@endsection

@section('active1')
	Edit User 
@endsection

@section('active')
	Profile
@endsection

@section('form-title')
	Edit User Details
@endsection

@section('form-action')
	{{Route('profile.UpdateUser')}}
@endsection


@section('form')
	<div class="form-group">
	  <input type="text" class="form-control" name="name" value="{{Auth::user()->name}}" placeholder="Full name/Username">
	  @if ($errors->has('name'))
	      <span class="help-block">
	          <strong>{{ $errors->first('name') }}</strong>
	      </span>
	  @endif
	</div>
	<div class="form-group">
	  <input type="email" class="form-control" name="email" value="{{Auth::user()->email}}" placeholder="Email">
	  @if ($errors->has('name'))
	      <span class="help-block">
	          <strong>{{ $errors->first('email') }}</strong>
	      </span>
	  @endif
	</div>
	<div class="form-group">
		<input type="radio" v-model="password_options" value="keep">Do not change password
	</div>
	<div class="form-group">
		<input type="radio" v-model="password_options" value="change">change password
	</div>
	<div v-if="password_options =='change'">
		<div class="form-group">
		  <input type="password" class="form-control" name="password" placeholder="Password">
		  @if ($errors->has('name'))
		      <span class="help-block">
		          <strong>{{ $errors->first('password') }}</strong>
		      </span>
		  @endif
		</div>
		<div class="form-group">
		  <input type="password" class="form-control" name="password_confirmation" placeholder="Retype password">
		</div>
	</div>
	<div class="form-group">
		<input type="number" class="form-control" name="contact" value="{{Auth::user()->contact}}" placeholder="Contact">
	</div>
	<div class="form-group">
		<input type="text" class="form-control" name="address" value="{{Auth::user()->address}}" placeholder="Address">
	</div>
@endsection

@section('submitbtn')
	<span class="fa fa-edit"> Edit</span>
@endsection