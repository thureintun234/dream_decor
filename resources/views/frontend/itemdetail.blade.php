@extends('frontendtemplate')
@section('content')
	<div class="container">

		<div class="card my-3">
			<div class="container-fluid">
				<div class="wrapper row">
					<div class="col-md-6">
						<img src="{{asset($items->photo)}}" class="img-fluid">
					</div>
					<div class="col-md-6">
						<div class="rating">
							<div class="star">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star-half-alt"></i>
								
							</div>
							<span class="viewers">50 Viewers</span>
						</div>
						<div class="table-responsive">
							<table class="table">
								<thead>

								</thead>
								<tbody>
									<tr>
										<td class="product_name">Product Name:: <span>{{$items->name}}</span></td>
									</tr>
									<tr>
										<td class="product_price">Price:: <span>{{$items->price}}</span></td>
									</tr>
									<tr>
										<td class="product_brand">Brand:: <span>{{$items->brand_id}}</span></td>
									</tr>
									<tr>
										{{-- @foreach($items->colors as $color) --}}
										<td class="product_color">Color:: <span>{{$items->colors}}</span></td>
										{{-- @endforeach --}}
									</tr>

								</tbody>
							</table>
						</div>
						<a href="#" class="add_to_cart btn btn-secondary mx-3 my-3">Add To Cart</a>
						<a href="#" class="wishlist mx-2"><i class="far fa-heart fa-2x"></i></a>
					</div>

				</div>
			</div>
		</div>
	</div>
@endsection