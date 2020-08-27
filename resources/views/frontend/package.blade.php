@extends('frontendtemplate')

@section('nav')
    @include('frontend.nav')
@endsection

@section('content')
<div class="container my-5">
	<h1 class="text-center py-3">Packages for You</h1>
	<div class="row" id="myItems">
		
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
				$.post("{{route('getpackages')}}", {pid:id} ,function(res){
				console.log(res);

				var html = '';
				var discount = 0;
				$.each(res,function(i,v){
					var url = '/packagedetail/'+v.id;
					html +=`
					<div class="col-md-4 my-3">
			
				<div class="card packagebox" style="width: 18rem;">
				<a href="${url}" class="text-decoration-none">
					<img src="${v.photo}" class="card-img-top" width="200" height="200">
					</a>
					<div class="card-body text-center">
						<p class="card-text">${v.price}</p>
					</div>
					<div class="card-footer text-center">
						<small class="text-muted font-weight-bold d-block">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
						<button class="btn btn-info cart" data-pid="${v.id}" data-pname="${v.name}" data-pphoto="${v.photo}" data-pprice="${v.price}" data-pdiscount="0">Add To Cart</button>
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
	</script>

@endsection