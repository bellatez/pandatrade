@extends('layout.mastertable')

@section('page_title')
	Debts
@endsection

@section('debts')
	active
@endsection

@section('active')
	Home
@endsection

@section('active1')
	Debts
@endsection

@section('table_title')
	Debts
@endsection

@section('createbtn')
	"{{Route('debts.create')}}"
@endsection

@section('deletebtn')
	'{{route('debts.delete')}}'
@endsection

@section('thead')
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Contact</th>
		<th>Items collected</th>
		<th>Amount(frs)</th>
		<th>Registered on</th>
		<th>Options</th>
	</tr>
@endsection

@section('tbody')
	@foreach ($debts as $debt)
		<tr>
			<td>{{$debt->id}}</td>
			<td>{{$debt->name}}</td>
			<td>{{$debt->contact}}</td>
			<td>{{$debt->items}}</td>
			<td>{{number_format($debt->totalcost)}}</td>
			<td>{{$debt->created_at->toFormattedDateString()}}</td>
			<td>
				<a href="{{'/gtrade/debts/'.$debt->id.'/edit'}}" class="btn btn-xs btn-primary"><span class="fa fa-edit"></span></a> &nbsp;
				<a href="#" class="btn btn-xs btn-danger" data-item-id="{{$debt->id}}" id="confirm_delete"><span class="fa fa-trash"></span></a>
			</td>
		</tr>
	@endforeach
@endsection
