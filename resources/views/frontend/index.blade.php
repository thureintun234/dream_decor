@extends('frontendtemplate')

@section('nav')
    @include('frontend.nav')
@endsection

@section('content')
	<div class="container-fluid my-3">
			<div class="row">
				<div class="col-md-6 relphoto">
					<img src="{{asset('frontend/images/carousel.jpg')}}" class="img-fluid ">
					<div class="dover"></div>
					<div class="postext text-center">
						<h2 class="text-light">Go To Packages Products</h2>
						<a href="{{route('package')}}" class="btn btn-danger btn-lg">Package</a>
					</div>
				</div>
				<div class="col-md-6 relphoto">
					<div class="dover"></div>
					<img src="{{asset('frontend/images/carousel2.jpg')}}" class="img-fluid ">
					<div class="postext text-center">
						<h2 class="text-light">Go To Sale Products</h2>
						<a href="{{route('sale')}}" class="btn btn-danger btn-lg">Sale</a>
					</div>
				</div>
			</div>
		</div>

		<!-- News slide for packages -->
		<div class="container">
			<div class=" my-5">
				<h1 class="text-center">Recommend Packages For you</h1>
				<div class="slick_slider slider">
					@foreach($packages as $package)
					<div class="text-center">
						<a href="{{route('package')}}">
							<div class="card cardimg">
								<img src="{{$package->photo}}" class="card-img-top">
								<div class="card-body">
									<a href="" class="text-muted">
										{{$package->name}}
									</a>
								</div>
							</div>
						</a>
					</div>
					@endforeach
				</div>
			</div>
		</div>

		<!-- Trending Now -->
		<section class="banner-bottom py-5">
        <div class="container py-md-5">


            <div class="row">
                <div class="col-lg-4 gallery-content-info text-center mt-lg-5">
                    <h3 class="title-wthree text-monospace text-secondary mb-lg-5 mb-4">Trending Product </h3>
                    <a href="{{route('item')}}" class="btn btn-danger btn-lg shop mt-3">Shop Now</a>

                </div>
                <div class="col-lg-8 gallery-content">
                    <div class="row">
                    	@foreach($items as $item)
                        <div class="col-md-4 col-sm-6 gal-img">
                            <a href="#{{$item->id}}"><img src="{{$item->photo1}}" alt="Baggage" class="mt-4" width="200" height="200"></a>
                        </div>
                        @endforeach

                    </div>
                    <!-- gallery popups -->
                    <!-- popup-->
                    @foreach($items as $item)
                    <div id="{{$item->id}}" class="popup-effect">
                        <div class="popup">
                            <img src="{{$item->photo1}}" alt="Popup image" class="mt-4" width="200" height="200" />
                            <a class="close" href="#gallery">&times;</a>
                        </div>
                    </div>
                    @endforeach
                    <!-- //popup -->
                    <!-- //gallery popups -->

                </div>
            </div>

        </div>
    </section>

		

    <div class="container-fluid">
    	<div class="row py-4">
    		<div class="col-lg-4 col-md-4 col-sm-4">
    			<div class="btm-right1">
    				<a href="bestseller.html">
    					<img src="{{asset('frontend/images/abyamara.jpg')}}" alt="" class="img-fluid" fluid>
    					<div class="captn1">
    						<h5>Best Seller</h5>
    					</div>
    				</a>	
    			</div>
    		</div>
    		<div class="col-lg-4 col-md-4 col-sm-4">
    			<div class="btm-right1">
    				<a href="bestseller.html">
    					<img src="{{asset('frontend/images/new.jpg')}}" alt="" class="img-fluid">
    					<div class="captn1">
    						<h5>New Arrivals</h5>
    					</div>
    				</a>	
    			</div>
    		</div>
    		<div class="col-lg-4 col-md-4 col-sm-4">
    			<div class="btm-right1">
    				<a href="{{'branditem'}}">
    					<img src="{{asset('frontend/images/abyamara.jpg')}}" alt="" class="img-fluid">
    					<div class="captn1">
    						<h5>Brands</h5>
    					</div>
    				</a>	
    			</div>
    		</div>
    	</div>
    </div>
@endsection