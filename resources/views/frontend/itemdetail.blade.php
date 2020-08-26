@extends('frontendtemplate')
@section('content')
	<div class="container">

		<div class="card my-3">
			<div class="container-fluid">
				<div class="wrapper row">
					<div class="col-md-6">
						<img src="{{asset($items->photo1)}}" class="img-fluid">
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
										@if ($items->price)
										<span>{{ (($items->discount/$items->price) * 100) }}% <br />OFF</span>
										@endif
										<td class="product_price">Price:: <span><del>{{$items->price}}MMK</del></span>
											{{ $items->discount}}MMK
										</td>
									</tr>

									<tr>
										<td class="product_brand">Brand:: <span>{{$items->brand_id}}</span></td>
									</tr>
									<tr>
										<td class="font-weight-bold">Available Colors </td>
										@foreach($items->colors as $color)
										<td><img src="{{asset($color->photo)}}" width="50" height="50"></td>
										@endforeach
									</tr>
									
								</tbody>
							</table>
						</div>
						{{-- <a href="#" class="cart btn btn-secondary mx-3 my-3">Add To Cart</a>
						<a href="#" class="bg-info"><i class="far fa-heart fa-2x"></i></a> --}}
					</div>

				</div>
			</div>
		</div>
	</div>
@endsection
