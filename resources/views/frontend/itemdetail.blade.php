@extends('frontendtemplate')

@section('nav')
    @include('frontend.nav')
@endsection

@section('content')
	<div class="container">

		<div class="cards my-3">
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
									<tr>
										<td class="product_name">Product Name:: <span>{{$items->name}}</span></td>
									</tr>
									<tr>
										<td>
											@if($items->discount)
											<p>{{$items->discount}} MMK</p>
											<del>{{$items->price}} MMK</del>
											@else
											<p>{{$items->price}} MMK</p>
											@endif
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
									<tr>
										<td>
										<?php
										$wishData = DB::table('wishlist')->rightJoin('items','wishlist.item_id', '=', 'items.id')->where('wishlist.item_id', '=', $items->id)->get();
										$count = App\Wishlist::where(['item_id' => $items->id])->count();
										?>

										<?php if($count=="0"){?>
										
											
										<form action="{{route('addToWishList',$items->id)}}" method="POST">
											@csrf
										<input type="hidden" value="{{$items->id}}" name="item_id"/>
										<input type="submit" value="Add to Wishlist" class="btn btn-primary"/>



										</form>
										<?php } else {?>
										<h3 style="color:green">Already Added to Wishlist <a href="{{'view_wishlist'}}" class="btn btn-info">wishlist</a></h3>
										<?php }?>
										<p class=""></p>
										</td>
									</tr>


											<{{-- td>
												<form action="{{route('addToWishList',$items->id)}}" method="POST" role="form">
													@csrf

													<button type="submit" class="btn btn-info">Wishlist</button>
												</form>
											</td>
											<td>
												<a href="{{route('item')}}" class="btn btn-primary">Back To Items</a>
											</td>
										</tr> --}}
									
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

{{-- @section('script')
	<script type="text/javascript" src="{{asset('frontend/js/script.js')}}"></script>
@endsection --}}
