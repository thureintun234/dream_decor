@extends('frontendtemplate')

@section('nav')
    @include('frontend.nav')
@endsection

@section('content')
<div class="container my-5">
	<h1 class="text-center py-3">Products</h1>
	<div class="row" id="myItems">
		{{-- @foreach($items as $item) --}}
		{{-- <div class="col-md-3 my-3 mx-4">
			<div class="card" style="width: 18rem;">
				<a href="{{route('itemdetail',$item->id)}}">
				<img src="{{$item->photo1}}" class="card-img-top" width="200" height="200"></a>
				<div class="card-body text-center">
					<h5 class="card-title">{{$item->name}}</h5>
					<p class="card-text">{{$item->description}}</p>
					<small class="text-muted font-weight-bold">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
				</div>
				<div class="card-footer">
					<a href="#" class="btn btn-secondary mx-3">Add To Cart</a>
					<a href="#" class="btn btn-secondary">View Cart</a>
				</div>
			</div>
		</div> --}}
		{{-- @endforeach --}}
	</div>
</div>
@endsection

@section('script')
	<script type="text/javascript" src="{{asset('frontend/js/script.js')}}"></script>

	<script type="text/javascript">
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
					var url = '/itemdetail'+v.id;
					html +=`
					<div class="col-md-3 my-3 mx-4">
			<div class="card" style="width: 18rem;">
				<img src="${v.photo1}" class="card-img-top" width="200" height="200">
				<div class="card-body text-center">
					<h5 class="card-title">${v.name}</h5>
					<p class="card-text">${v.description}</p>
					<small class="text-muted font-weight-bold">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
				</div>
				<div class="card-footer">
					<a href="#" class="btn btn-secondary mx-3">Add To Cart</a>
					<a href="#" class="btn btn-secondary">View Cart</a>
				</div>
			</div>
		</div>
					`	
				});

				$('#myItems').html(html);

			});
			}

			// $('.filter').click(function(){
			// 	var id = $(this).data('id');
			// 	showItems(id);

			// 	var name=$(this).data('name');

			// 	$('.filterhead').text("Filter By: "+name);
			// });
			
		});
	</script>

	<script type="text/javascript" src="asset{{'frontend/js/script.js'}}"></script>
@endsection