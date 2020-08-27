@extends('frontendtemplate')
<<<<<<< HEAD
@section('nav')
    @include('frontend.nav')
@endsection
=======

@section('nav')
    @include('frontend.nav')
@endsection

>>>>>>> 33fd9876585b2bc853c7d0d3c51268ad09c6beeb
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

@section('script')
<script type="text/javascript" src="{{asset('frontend/js/script.js')}}"></script>
@endsection