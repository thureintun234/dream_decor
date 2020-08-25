@extends('backendtemplate')

@section('content')
	<div class="container-fluid">
		<h2 class="d-inline-block">Item Edit (Form / old value)</h2>
		<a href="{{route('items.index')}}" class="btn btn-success float-right">Back Item</a>
	
		<form class="row py-3" enctype="multipart/form-data" method="POST" action="{{route('items.update',$item->id)}}">
			@csrf
			@method('PUT')
			<div class="offset-md-2 col-md-8">
				<div class="form-group">
					<input type="text" name="codeno" placeholder="codeno" class="form-control" value="{{$item->codeno}}" readonly="readonly">
				</div>
				<div class="form-group">
					<input type="text" name="name" placeholder="Name" class="form-control" value="{{$item->name}}">
				</div>
				<div class="form-group">
					<input type="file" name="photo1" placeholder="Photo" class="form-control-file my-2" value="{{$item->photo1}}">
					<img src="{{asset($item->photo1)}}" width="60" height="60">
					<input type="hidden" name="oldphoto1" value="{{$item->photo1}}">
				</div>
				<div class="form-group">
					<input type="file" name="photo2" placeholder="Photo" class="form-control-file my-2" value="{{$item->photo2}}">
					<img src="{{asset($item->photo2)}}" width="60" height="60">
					<input type="hidden" name="oldphoto2" value="{{$item->photo2}}">
				</div>
				<div class="form-group">
					<input type="number" name="price" placeholder="Price" class="form-control" value="{{$item->price}}">
				</div>
				<div class="form-group">
					<input type="number" name="discount" placeholder="Discount" class="form-control" value="{{$item->discount}}">
				</div>
				<div class="form-group">
					<textarea class="form-control" placeholder="message" name="description">{{$item->description}}</textarea>
				</div>
				<div class="form-group">
					<select class="form-control" name="category">
						<optgroup label="Choose Category">
							@foreach($categories as $category)
							<option value="{{$category->id}}"
								@if($category->id == $item->category_id){{'selected'}}

								@endif
								>{{$category->name}}
							</option>
							@endforeach
						</optgroup>
					</select>
				</div>
				<div class="form-group">
					<select class="form-control" name="brand">
						<optgroup label="Choose Brand">
							@foreach($brands as $brand)
							<option value="{{$brand->id}}"
								@if($brand->id == $item->brand_id){{'selected'}}

								@endif
								>{{$brand->name}}</option>
							@endforeach
						</optgroup>
					</select>
				</div>
				<div class="form-group">
					<select class="form-control" name="subcategory">
						<optgroup label="Choose Subcategory">
							@foreach($subcategories as $subcategory)
							<option value="{{$subcategory->id}}"
								@if($subcategory->id == $item->subcategory_id){{'selected'}}

								@endif
								>{{$subcategory->name}}</option>
							@endforeach
						</optgroup>
					</select>
				</div>
				<div class="form-group">
					<select class="form-control multipleselect" name="colors[]" multiple="multiple">
						<optgroup label="Choose Color">
							@foreach($colors as $color)
							<option value="{{$color->id}}"
								@if($color->id == $item->color_id){{'selected'}}

								@endif
								>{{$color->name}}</option>
							@endforeach
						</optgroup>
					</select>
				</div>
				<button type="submit" class="btn btn-primary" >Updated</button>
			</div>
		</form>
	</div>
@endsection

@section('script')
<script type="text/javascript">
		$(document).ready(function() {
			$('.multipleselect').select2();
		});
	</script>
@endsection