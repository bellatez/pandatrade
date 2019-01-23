@extends('layout.mastertable')

@section('page_title')
	Items
@endsection

@section('products')
	active
@endsection

@section('active')
	home
@endsection

@section('active1')
	Items
@endsection

@section('table_title')
	Items
@endsection

@section('createbtn')
	"{{Route('products.create')}}"
@endsection

@section('deletebtn')
	'{{route('products.delete')}}'
@endsection

@section('extra-btns')
	<a href="/gtrade/topurchase" class="btn btn-warning btn-flat">
		<span class="fa fa-cart-arrow-down"> &nbsp; Exhausted Items</span>
	</a>
@endsection

@section('thead')
	<tr>
		<th>ID</th>
		<th>Product Name</th>
		<th>Quantity</th>
		<th>Unit Price(frs)</th>
		<th>Options</th>
	</tr>
@endsection

@section('tbody')
	@foreach ($products as $product)
		<tr>
			<td>{{$product->id}}</td>
			<td>{{$product->brand}} {{$product->name}}</td>
			<td>{{$product->Quantity}} {{$product->unit}}</td>
			<td>{{number_format($product->unitprice)}}</td>
			<td>
				<a href="{{'/gtrade/products/'.$product->id.'/edit'}}" class="btn btn-xs btn-primary" data-toggle="tooltip" title="Edit"><span class="fa fa-edit"></span></a> &nbsp;
				<form action="{{'/gtrade/products/status/'.$product->id}}" class="form-group" method="post">
					{{csrf_field()}}
					<button type="submit" class="btn btn-xs btn-warning" data-toggle="tooltip" title="Exhausted">
						<span class="fa fa-cart-arrow-down"></span>
					</button>
				</form> &nbsp;
				<a href="#" class="btn btn-xs btn-danger" data-toggle="tooltip" title="Delete" data-item-id="{{$product->id}}" id="confirm_delete">
					<span class="fa fa-trash"></span>
				</a>
			</td>
		</tr>
	@endforeach
@endsection

