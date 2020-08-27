
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
			</button>
			<div class="container-fluid">
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto navigation mx-5 ml-4">
					<li class="nav-item active">
						<a class="nav-link" href="{{route('dreamdecor')}}">HOME <span class="sr-only">(current)</span></a>
					</li>
					@foreach($categories as $category)
					<li class="nav-item">
						<a class="nav-link mx-3" href="{{route('item')}}">
							{{$category->name}}
						</a>
					</li>
					@endforeach
				</ul>

			</div>
			</div>
		</nav>