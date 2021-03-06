@extends('backendtemplate')

@section('content')
	<div class="container-fluid">
		<h2 class="d-inline-block">Category Create (Form)</h2>
		<a href="{{route('categories.index')}}" class="btn btn-success float-right">Back Category</a>
		<form class="row py-3" enctype="multipart/form-data" method="POST" action="{{route('categories.update',$category->id)}}">
			@csrf
			@method('PUT')
			<div class="offset-md-2 col-md-8">
				<div class="form-group">
					<input type="text" name="name" placeholder="Name" class="form-control {{ $errors->has('name') ? 'border border-danger' : '' }}" value="{{$category->name}}">
					<span style="color:red;">{{$errors->first('name')}}</span>
				</div>
				<div class="form-group">
					<input type="file" name="photo" placeholder="Photo" class="form-control-file pb-2 {{ $errors->has('photo') ? 'border border-danger' : '' }}" value="{{$category->photo}}">
					<img src="{{asset($category->photo)}}" width="60" height="60">
					<input type="hidden" name="oldphoto" value="{{$category->photo}}">
					<span style="color:red;">{{$errors->first('photo')}}</span>
				</div>
				<button type="submit" class="btn btn-primary">Update</button>
			</div>
		</form>
	</div>
@endsection