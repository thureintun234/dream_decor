@extends('frontendtemplate')

@section('nav')
    @include('frontend.nav')
@endsection

@section('content')
<div class="container my-5">
	<h1 class="text-center py-3">Products</h1>
	<?php if(isset($msg)) {echo $msg;}
	else {?> Featured Item <?php } ?>
	<div id="myItems" class="row" >
		@foreach($items as $item)
		<div class="col-md-3 my-3 mx-4">

			<div class="card" style="width: 18rem;">
				<a href="{{route('itemdetail',$item->id)}}">
					<img src="{{$item->photo1}}" class="card-img-top" width="200" height="200"></a>
				<div class="card-body text-center">
					<h5 class="card-title">{{$item->name}}</h5>

					
					{{-- <p>Price:: <span><del>{{$item->price}}MMK</del></span>
						{{$item->discount}}MMK
					</p> --}}

					@if($item->discount)
					<p>{{$item->discount}} MMK</p>
					<del>{{$item->price}} MMK</del>
					@else
					<p>{{$item->price}} MMK</p>
					@endif

					<p class="card-text">{{$item->description}}</p>
					<small class="text-muted font-weight-bold">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
				</div>
				<div class="card-footer text-center">
					<button class="btn btn-info cart" data-cid="{{$item->id}}" data-cname="{{$item->name}}" data-cphoto="{{$item->photo1}}" data-cprice="{{$item->price}}" data-cdiscount="{{$item->discount}}">Add To Cart</button>
					{{-- <a href="#" class="btn btn-secondary">View Cart</a> --}}
				</div>
			</div>
		</div>
		@endforeach

					{{-- <div class="card" style="width: 18rem;">
					<a href="{{route('itemdetail',$item->id)}}">
					<img src="{{asset($item->photo1)}}" class="card-img-top" width="200" height="200"></a>
					<div class="card-body text-center">
					<h5 class="card-title">{{$item->name}}</h5>
					<p class="card-text">{{$item->price}}</p>
					<small class="text-muted font-weight-bold">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
					</div>
					<div class="card-footer text-center">
					<button class="btn btn-info cart" data-cid="{{$item->id}}" data-cname="{{$item->name}}" data-cphoto="{{$item->photo1}}" data-cprice="{{$item->price}}" data-cdiscount="{{$item->discount}}">Add To Cart</button>
					</div>
					</div>
					</div>
		@endforeach	 --}}


	</div>
</div>
@endsection

@section('script')
	<script type="text/javascript" src="{{asset('frontend/js/script.js')}}"></script>

	{{-- <script type="text/javascript">
		$(document).ready(function(){
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});

			showItems(0);

			function showItems(id)	{
				$.post("{{route('getitems')}}", {sid:id} ,function(res){
				console.log(res);

				var html = '';
				$.each(res,function(i,v){
					var url = '/itemdetail/'+v.id;
					html +=`
					<div class="col-md-3 my-3 mx-4">
					<div class="card" style="width: 18rem;">
					<a href="${url}">
					<img src="${v.photo1}" class="card-img-top" width="200" height="200"></a>
					<div class="card-body text-center">
					<h5 class="card-title">${v.name}</h5>
					<p class="card-text">${v.price}</p>
					<small class="text-muted font-weight-bold">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
					</div>
					<div class="card-footer text-center">
					<button class="btn btn-info cart" data-cid="${v.id}" data-cname="${v.name}" data-cphoto="${v.photo1}" data-cprice="${v.price}" data-cdiscount="${v.discount}">Add To Cart</button>
					</div>
					</div>
					</div>
					`	
				});

				$('#myItems').html(html);

			});
			}

			$('.filter').click(function(){
				var id = $(this).data('id');
				showItems(id);

				var name=$(this).data('name');

				$('.filterhead').text("Filter By: "+name);
			});
			
		});
	</script> --}}

@endsection