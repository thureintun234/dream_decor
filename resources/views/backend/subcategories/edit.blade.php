@extends('backendtemplate')

@section('content')
	<div class="container-fluid">
		<h2 class="d-inline-block">Subcategory Edit (Form / old value)</h2>
		<a href="{{route('subcategories.index')}}" class="btn btn-success float-right">Back Subcategory</a>
		<form class="row py-3" enctype="multipart/form-data" method="POST" action="{{route('subcategories.update',$subcategories->id)}}">
			@csrf
			@method('PUT')
			<div class="offset-md-2 col-md-8">
				<div class="form-group">
					<input type="text" name="name" placeholder="Name" class="form-control {{ $errors->has('name') ? 'border border-danger' : '' }}" value="{{$subcategories->name}}">
					<span style="color:red;">{{$errors->first('name')}}</span>
				</div>
				<div class="form-group">
					<select class="form-control" name="scatid">
						<optgroup label="Choose Brand">
							@foreach($categories as $category)
							<option value="{{$category->id}}">{{$category->name}}</option>
							@endforeach
						</optgroup>
					</select>
				</div>
				<button type="submit" class="btn btn-primary">Update</button>
			</div>
		</form>
	</div>
@endsection