@extends('frontendtemplate')
@section('content')
	<div class="container my-3">
		<h1 class="text-center py-3">Sale Products</h1>
		<div class="row">
			
			@foreach($items as $item)
			<div class="col-md-3 my-3 mx-4">
				<div class="card" style="width: 18rem;">
					<a href="{{route('itemdetail',$item->id)}}">
						<img src="{{$item->photo1}}" class="card-img-top" width="200" height="200"></a>
						<div class="card-body text-center">
							<h5 class="card-title">{{$item->name}}</h5>
							
							<p class="product_price">Price:: <span><del>{{$item->price}}MMK</del></span>
								{{ $item->discount}}MMK
							</p>
									
							<p class="card-text">{{$item->description}}</p>
							<small class="text-muted font-weight-bold">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
						</div>
						<div class="card-footer">
							<a href="#" class="btn btn-secondary mx-3">Add To Cart</a>
							{{-- <a href="#" class="btn btn-secondary">View Cart</a> --}}
						</div>
					</div>
				</div>
				@endforeach
				
			</div>
	</div>

@endsection