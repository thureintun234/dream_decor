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

        <div class="container-fluid text-center mb-lg-5">
            <img src="{{'frontend/images/inboxlogo1.png'}}" class="img-fluid text-center" width="150" height="150" >   
            <h5 class="welcome text-center">WELCOME TO DREAMDECOR</h5>
            <P class="text-center mt-3"><i class="furnishing fa fa-star fa-spin fa-1x"></i><span class="furnishing_txt mx-4">   Furnishing Your Life   </span>  <i class="furnishing fa fa-star fa-spin fa-1x"></i></P>  
        </div>
        <br><br>

		<!-- News slide for packages -->
		<div class="container ">
			{{-- <div class="m"> --}}
				<h5 class="recommended text-center mt-lg-5">RECOMMENDED PACKAGES FOR YOU</h5>
				<div class="slick_slider slider">
					@foreach($packages as $package)
					<div class="text-center">
						<a href="{{route('package')}}">
							<div class="card cardimg">
								<img src="{{$package->photo}}" class="card-img-top" width="200" height="200">
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
			{{-- </div> --}}
		</div>

		<!-- Trending Now -->
		<section class="banner-bottom py-5">
        <div class="container-fluid py-md-5">


            <div class="row ml-lg-5 text-center">
                <div class="col-lg-4 gallery-content-info text-center mt-lg-5">
                    <h5 class="heading_index mt-lg-5 mb-lg-5 mb-4">TRENDING PRODUCTS </h5>
                    <p class="p_index">The Finnish Design Shop team was there to check out the favorite brands’ new products for the spring – view our list of the most interesting designs! </p>
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
                        <div class="popup"><a href="{{'item'}}">
                            <img src="{{$item->photo1}}" alt="Popup image" class="mt-4" width="200" height="200" /></a>
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
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="btm-right1">
                    <a href="{{'branditem'}}">
                        <img src="{{asset('frontend/images/brands.gif')}}" alt="" class="img-fluid">
                        <div class="captn1">
                            <h5 class="heading_index">SEARCH BRANDs</h5>
                        </div>
                    </a>    
                </div>
            </div>
    		<div class="col-lg-6 col-md-6 col-sm-6 py-5 mb-3 text-center">
                <h5 class="heading_index mt-lg-5 mb-5">SEARCH BRANDS</h5>
                <p class="p_index mb-lg-5">Discover our curated selection of designer homeware and luxury furniture brands we are welcoming to DreamDecor this season.</p>
                <a href="{{route('branditem')}}" class="btn btn-danger btn-lg shop mt-3">More Brands</a>
    		</div>
    	</div>
    </div>
<<<<<<< HEAD

    
=======
@endsection

@section('script')
<script type="text/javascript" src="{{asset('frontend/js/script.js')}}"></script>
>>>>>>> 33fd9876585b2bc853c7d0d3c51268ad09c6beeb
@endsection