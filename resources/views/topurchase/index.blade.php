@extends('layout.mastertable')

@section('page_title')
	Topurchase
@endsection

@section('topurchase')
	active
@endsection

@section('active1')
	Exhausted Items
@endsection

@section('active')
	Home
@endsection

@section('table_title')
	Exhausted Items
@endsection

@section('createbtn')
	"{{Route('topurchase.create')}}"
@endsection

@section('deletebtn')
	'{{route('topurchase.delete')}}'
@endsection

@section('extra-btns')
	<a href="/gtrade/products" class="btn btn-success btn-flat">
		<span class="fa fa-cart-arrow-down"> &nbsp; Available Products</span>
	</a>
@endsection

@section('thead')
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Options</th>
	</tr>
@endsection

@section('tbody')
	@foreach ($products as $product)
		<tr>
			<td>{{$product->id}}</td>
			<td>{{$product->brand}} {{$product->name}}</td>
			<td>
				<form class="form-group" action="{{'/gtrade/topurchase/status/'.$product->id}}" method="post">
					{{csrf_field()}}
					<button type="submit" class="btn btn-xs btn-success">
						<span class="fa fa-cart-arrow-down"> Available</span>
					</button>
				</form>
				<a href="#" class="btn btn-xs btn-danger" data-item-id="{{$product->id}}" id="confirm_delete">
					<span class="fa fa-trash"> Delete</span>
				</a>
			</td>
		</tr>
	@endforeach
@endsection
