@extends('frontendtemplate')

@section('nav')
    @include('frontend.nav')
@endsection

@section('content')
	<div class="container my-5">
		<h1 class="text-center py-3 d-inline-block">Package Detail</h1>
		<a href="{{route('package')}}" class="btn btn-primary float-right">Back To Package</a>
		<div class="row">
			<div class="col-md-4">
				<img src="{{asset($packages->photo)}}" width="300" height="300">
			</div>
			<div class="col-md-8 table-responsive">
				<table class="table">
					<tr>
						<td><p>Package Name</p></td>
						<td><p class="font-weight-bold">{{$packages->name}}</p></td>
					</tr>
					<tr>
						<td><p>Package Price</p></td>
						<td><p class="font-weight-bold">{{$packages->price}}</p></td>
					</tr>
				</table>
				
				<div class="row">
					@foreach($packages->items as $item)
					
					<div class="col-md-4">
						<div class="card">
							<a href="{{route('item')}}">
							<img src="{{asset($item->photo1)}}" class="card-img-top" width="150" height="150">
							</a>
							<div class="card-footer">
								<strong>{{$item->name}}</strong>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			
			</div>
		</div>
	</div>
@endsection