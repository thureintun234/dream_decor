@extends('frontendtemplate')
@section('content')
	<div class="container my-3">
		<h1 class="text-center py-3">Brands Collection</h1>
		<div class="row">
			@foreach($brands as $brand)
			<div class="col-md-2 my-3 mx-4" >
				<div  style="width: 10rem;" class="img-thumbnail text-center">
					<a href="{{route('branditem',$brand->id)}}" class="text-decoration-none text-secondary">
						<img src="{{$brand->logo}}" class="img-fluid " width="200" height="200" >
						<p>{{$brand->name}}</p>
					</a>
				</div>
			</div>
			@endforeach
		</div>
	</div>
@endsection