@extends('backendtemplate')

@section('content')
	<div class="container-fluid">
		<h2 class="d-inline-block">Brand Create (Form)</h2>
		<a href="{{route('brands.index')}}" class="btn btn-success float-right">Back Brand</a>
		<form class="row py-3" enctype="multipart/form-data" method="POST" action="{{route('brands.store')}}">
			@csrf
			<div class="offset-md-2 col-md-8">
				<div class="form-group">
					<input type="text" name="name" placeholder="Name" class="form-control {{ $errors->has('name') ? 'border border-danger' : '' }}">
					<span style="color:red;">{{$errors->first('name')}}</span>
				</div>
				<div class="form-group">
					<input type="file" name="logo" placeholder="Logo" class="form-control-file {{ $errors->has('logo') ? 'border border-danger' : '' }}">
					<span style="color:red;">{{$errors->first('logo')}}</span>
				</div>
				<button type="submit" class="btn btn-primary">Create</button>
			</div>
		</form>
	</div>
@endsection