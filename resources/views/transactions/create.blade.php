@extends('layout.masterform')

@section('active')
	Transactions
@endsection

@section('active1')
	New
@endsection

@section('submitbtn')
	<span class="fa fa-plus"> Create</span>
@endsection

@section('form-title')
	New Transactions
@endsection

@section('form-action')
	{{Route('transactions.store')}}
@endsection

@section('form')
	<div class="form-group">
		<input type="text" class="form-control" name="income" placeholder="Day's Income">
	</div>
	<div class="form-group">
		<input type="text" class="form-control" name="expenditure" placeholder="Day's Expenditure">
	</div>
	<div class="form-group">
		<label for="date">Date</label>
		<div class="input-group date">
		  <div class="input-group-addon">
		    <i class="fa fa-calendar"></i>
		  </div>
		  <input type="text" class="form-control pull-right" name="date" id="datepicker">
		</div>
	</div>
@endsection
