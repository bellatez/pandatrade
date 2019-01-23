@extends('layout.master')

@section('page_title')
	Analysis & Balance sheet
@endsection

@section('analysis')
	active
@endsection

@section('active')
	Home
@endsection

@section('active1')
	Analysis & Balance Sheet
@endsection

@section('content')
	<div class="row">
		<div class="col-lg-3 col-xs-6">
		  <!-- small box -->
		  <div class="small-box bg-aqua">
		    <div class="inner">
		      <h3>{{$productcount}}</h3>

		      <p>Available Products Registered</p>
		    </div>
		    <div class="icon">
		      <i class="ion ion-bag"></i>
		    </div>
		    <a href="/gtrade/products" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
		  </div>
		</div>
		<div class="col-lg-3 col-xs-6">
		  <!-- small box -->
		  <div class="small-box bg-yellow">
		    <div class="inner">
		      <h3>{{$finishedcount}}</h3>

		      <p>Ehxausted Products Registered</p>
		    </div>
		    <div class="icon">
		      <i class="ion ion-bag"></i>
		    </div>
		    <a href="/gtrade/topurchase" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
		  </div>
		</div>
		<!-- ./col -->
		<div class="col-lg-3 col-xs-6">
		  <!-- small box -->
		  <div class="small-box bg-red">
		    <div class="inner">
		      <h3>{{$debtcount}}</h3>

		      <p>Debts Registered</p>
		    </div>
		    <div class="icon">
		      <i class="ion ion-person"></i>
		    </div>
		    <a href="/gtrade/debts" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
		  </div>
		</div>
		<!-- ./col -->
		<div class="col-lg-3 col-xs-6">
		  <!-- small box -->
		  <div class="small-box bg-green">
		    <div class="inner">
		      <h3>{{$transactioncount}}</h3>

		      <p>Transactions Registered</p>
		    </div>
		    <div class="icon">
		      <i class="fa fa-cc-mastercard"></i>
		    </div>
		    <a href="/gtrade/transactions" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
		  </div>
		</div>
		<!-- ./col -->
	</div>

	<div class="row">
		<div class="col-md-12">
			<form action="{{Route('balancesheet')}}" method="GET">
				{{ csrf_field() }}
				@component('layout.search', ['title' => 'Generate Balance Sheet'])
				 @component('layout.two-cols-date-search-row', ['items' => ['From', 'To'], 
				 'oldVals' => [isset($searchingVals) ? $searchingVals['from'] : '', isset($searchingVals) ? $searchingVals['to'] : '']])
				 @endcomponent
				@endcomponent
			</form>
		</div>
	</div>
@endsection
