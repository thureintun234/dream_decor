@extends('backendtemplate')

@section('content')
	<div class="container-fluid">
		<h2 class="d-inline-block">Color List (Table)</h2>
		<a href="{{route('colors.create')}}" class="btn btn-success float-right">Add Color</a>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Name</th>
					<th>Photo</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				@php $i=1;	@endphp
				@foreach($colors as $color)
				<tr>
					<td>{{$i++}}</td>
					<td>{{$color->name}}</td>
					<td><img src="{{asset($color->photo)}}" width="100" height="100" alt="CategoryImage"></td>
					<td>
						<a href="{{route('colors.edit',$color->id)}}" class="btn btn-warning">Edit</a>
						<form method="POST" action="{{route('colors.destroy',$color->id)}}" onsubmit="return confirm('Are you Sure?')" class="d-inline-block">
							@csrf
							@method('DELETE')
							<input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection