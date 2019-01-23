@extends('layout.master')

@section('page_title')
	Profile
@endsection

@section('active')
	Home
@endsection

@section('active1')
	Profile
@endsection

@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="nav-tabs-custom">
			  <ul class="nav nav-tabs">
			    <li class="active"><a href="#Personal" data-toggle="tab">Personal</a></li>
			    <li><a href="#Business" data-toggle="tab">Business</a></li>
			  </ul>
			  <div class="tab-content">
			    <div class="active tab-pane" id="Personal">
			     	<h3 class="profile-username text-center">{{Auth::user()->name}}</h3>

			     	<p class="text-muted text-center">{{Auth::user()->email}}</p>

			     	<ul class="list-group list-group-unbordered">
			     	  <li class="list-group-item">
			     	    <b>contact</b> <a class="pull-right">{{Auth::user()->contact}}</a>
			     	  </li>
			     	  <li class="list-group-item">
			     	    <b>Address</b> <a class="pull-right">{{Auth::user()->address}}</a>
			     	  </li>
			     	</ul>

			     	<a href="/gtrade/edituser" class="btn btn-primary btn-block">
			     		<b>
			     			<span class="fa fa-edit">&nbsp; Edit</span>
			     		</b>
			     	</a>
			    </div>
			    <!-- /.tab-pane -->
			    <div class="tab-pane" id="Business">
			    	<h3 class="profile-username text-center">{{Auth::user()->shopname}}</h3>

			    	<p class="text-muted text-center">{{Auth::user()->business_location}}</p>

			    	<ul class="list-group list-group-unbordered">
			    	  <li class="list-group-item">
			    	    <b>Description</b> <a class="pull-right">{{Auth::user()->shop_description}}</a>
			    	  </li>
			    	  <li class="list-group-item">
			    	    <b>Contact</b> <a class="pull-right">{{Auth::user()->business_contact}}</a>
			    	  </li>
			    	</ul>

			    	<a href="/gtrade/editbusiness" class="btn btn-primary btn-block">
			    		<b>
			    			<span class="fa fa-edit">&nbsp; Edit</span>
			    		</b>
			    	</a>
			    </div>
			    <!-- /.tab-pane -->
			  </div>
			  <!-- /.tab-content -->
			</div>
			<!-- /.nav-tabs-custom -->
		</div>
	</div>
@endsection