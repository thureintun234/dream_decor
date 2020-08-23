@extends('backendtemplate')

@section('content')
	<div class="container-fluid">
		<h2 class="d-inline-block">Package List (Table)</h2>
		<a href="{{route('packages.create')}}" class="btn btn-success float-right">Add Package</a>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Name</th>
					<th>Photo</th>
					<th>Price</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				@php $i=1;	@endphp
				@foreach($packages as $package)
				<tr>
					<td>{{$i++}}</td>
					<td>{{$package->name}}</td>
					<td><img src="{{asset($package->photo)}}" width="100" height="100" alt="CategoryImage"></td>
					<td>{{$package->price}}</td>
					<td>
						<a href="{{route('packages.edit',$package->id)}}" class="btn btn-warning">Edit</a>
						<form method="POST" action="{{route('packages.destroy',$package->id)}}" onsubmit="return confirm('Are you Sure?')" class="d-inline-block">
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