@extends('backendtemplate')

@section('content')
<div class="container-fluid">
	<h2 class="d-inline-block">Brand Create (Form)</h2>
	<a href="{{route('brands.index')}}" class="btn btn-success float-right">Back Brand</a>
	<form class="row py-3" enctype="multipart/form-data" method="POST" action="{{route('brands.update',$brand->id)}}">
		@csrf
		@method('PUT')
		<div class="offset-md-2 col-md-8">
			<div class="form-group">
				<input type="text" name="name" placeholder="Name" class="form-control" value="{{$brand->name}}">
			</div>
			<div class="form-group">
				<input type="file" name="logo" placeholder="Photo" class="form-control-file pb-2" value="{{$brand->logo}}">
				<img src="{{asset($brand->logo)}}" width="60" height="60">
				<input type="hidden" name="oldphoto" value="{{$brand->logo}}">
			</div>
			<button type="submit" class="btn btn-primary">Update</button>
		</div>
	</form>
</div>
@endsection
