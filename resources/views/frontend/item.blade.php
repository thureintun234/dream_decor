@extends('frontendtemplate')

@section('nav')
    @include('frontend.nav')
@endsection

@section('content')
<div class="container my-5">
	<h1 class="text-center py-3">Products</h1>
	<div class="row">
		@foreach($items as $item)
		<div class="col-md-3 my-3 mx-4">
			<div class="card" style="width: 18rem;">
				<img src="{{$item->photo1}}" class="card-img-top" width="200" height="200">
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
		</div>
		@endforeach
	</div>
</div>
@endsection