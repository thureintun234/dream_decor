@extends('frontendtemplate')

@section('nav')
    @include('frontend.nav')
@endsection

@section('content')
<div class="container my-5">
	<h1 class="text-center py-3">Packages for You</h1>
	<div class="row">
		@foreach($packages as $package)
		<div class="col-md-4 my-3">
			<a href="{{route('packagedetail',$package->id)}}" class="text-decoration-none">
				<div class="card packagebox" style="width: 18rem;">
					<img src="{{$package->photo}}" class="card-img-top" width="200" height="200">
					<div class="card-body text-center">
						<h5 class="card-title">{{$package->name}}</h5>
						<p class="card-text">{{$package->price}}</p>
					</div>
					<div class="card-footer text-center">
						<small class="text-muted font-weight-bold">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
					</div>
				</div>
			</a>
		</div>
		@endforeach
	</div>
</div>
@endsection