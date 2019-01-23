@extends('layout.mastertable')

@section('page_title')
	Transactions
@endsection

@section('transactions')
	active
@endsection

@section('active')
	Home
@endsection

@section('active1')
	Transactions
@endsection

@section('table_title')
	Daily Transactions
@endsection

@section('createbtn')
	"{{Route('transactions.create')}}"
@endsection

@section('thead')
	<tr>
		<th>Transaction Date</th>
		<th>Income(frs)</th>
		<th>Expenditure(frs)</th>
		<th>Date Registered</th>
	</tr>
@endsection

@section('tbody')
	@foreach ($transactions as $transaction)
		<tr>
			<td>{{$transaction->date->toFormattedDateString()}}</td>
			<td>{{number_format($transaction->income)}}</td>
			<td>{{number_format($transaction->expenditure)}}</td>
			<td>{{$transaction->created_at->toFormattedDateString()}}</td>
		</tr>
	@endforeach
@endsection
