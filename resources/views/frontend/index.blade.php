@extends('frontendtemplate')

@section('content')
	<div class="container-fluid my-3">
			<div class="row">
				<div class="col-md-6 relphoto">
					<img src="{{asset('frontend/images/carousel.jpg')}}" class="img-fluid ">
					<div class="dover"></div>
					<div class="postext text-center">
						<h2 class="text-light">Go To Packages Products</h2>
						<a href="#" class="btn btn-danger btn-lg">Package</a>
					</div>
				</div>
				<div class="col-md-6 relphoto">
					<div class="dover"></div>
					<img src="{{asset('frontend/images/carousel.jpg')}}" class="img-fluid ">
					<div class="postext text-center">
						<h2 class="text-light">Go To Sale Products</h2>
						<a href="#" class="btn btn-danger btn-lg">Sale</a>
					</div>
				</div>
			</div>
		</div>
		<!-- <div class="container my-5">
			<div class="row">
				<div class="offset-md-2 col-md-8">
					<img src="images/carousel.jpg" class="img-fluid ">
				</div>
			</div>
		</div> -->

		<!-- News slide for any news -->
		<div class="container">
			<div class=" my-5">
				<h1 class="text-center">Recommend News For you</h1>
				<div class="slick_slider slider">
					<div class="text-center">
						<a href="">
							<div class="card cardimg">
								<img src="{{asset('frontend/images/carousel.jpg')}}" class="card-img-top">
								<div class="card-body">
									<a href="health.html" class="text-muted">
										Health is very importnat for everyone.So we should keep our..
									</a>
								</div>
							</div>
						</a>
					</div>
					<div class="text-center w-100">
						<a href="">
							<div class="card">
								<img src="{{asset('frontend/images/carousel.jpg')}}" class="card-img-top">
								<div class="card-body">
									<a href="sport.html" class="text-muted ">
										Football sports is very famous in the world. There are many...
									</a>
								</div>
							</div>
						</a>
					</div>
					<div class="text-center w-100">
						<a href="">
							<div class="card">
								<img src="{{asset('frontend/images/carousel.jpg')}}" class="card-img-top">
								<div class="card-body">
									<a href="it.html" class="text-muted">
										In this years, information technology part is increasing fast.
									</a>
								</div>
							</div>
						</a>
					</div>
					<div class="text-center w-100">
						<a href="">
							<div class="card">
								<img src="{{asset('frontend/images/carousel.jpg')}}" class="card-img-top">
								<div class="card-body">
									<a href="economic.html" class="text-muted">
										Economics is a social science concerned with the production...
									</a>
								</div>
							</div>
						</a>
					</div>
					<div class="text-center w-100">
						<a href="">
							<div class="card">
								<img src="{{asset('frontend/images/carousel.jpg')}}" class="card-img-top">
								<div class="card-body">
									<a href="wealther.html" class="text-muted">
										Weather is the state of the atmosphere, describing for...
									</a>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>

		<!-- Trending Now -->
		<section class="banner-bottom py-5">
        <div class="container py-md-5">


            <div class="row">
                <div class="col-lg-4 gallery-content-info text-center mt-lg-5">
                    <h3 class="title-wthree mb-lg-5 mb-4">Trending Now </h3>
                    <p>Lorem ipsum dolor sit,Nulla pellentesque dolor ipsum laoreet eleifend integer,Pellentesque maximus libero.</p>
                    <a href="shop.html" class="btn shop mt-3">Shop Now</a>

                </div>
                <div class="col-lg-8 gallery-content">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 gal-img">
                            <a href="#gal1"><img src="{{asset('frontend/images/carousel.jpg')}}" alt="Baggage" class="img-fluid mt-4"></a>
                        </div>
                        <div class="col-md-4 col-sm-6 gal-img">
                            <a href="#gal2"><img src="{{asset('frontend/images/carousel.jpg')}}" alt="Baggage" class="img-fluid mt-4"></a>
                        </div>
                        <div class="col-md-4 col-sm-6 gal-img">
                            <a href="#gal3"><img src="{{asset('frontend/images/carousel.jpg')}}" alt="Baggage" class="img-fluid mt-4"></a>
                        </div>
                        <div class="col-md-4 col-sm-6 gal-img">
                            <a href="#gal1"><img src="{{asset('frontend/images/carousel.jpg')}}" alt="Baggage" class="img-fluid mt-4"></a>
                        </div>
                        <div class="col-md-4 col-sm-6 gal-img">
                            <a href="#gal2"><img src="{{asset('frontend/images/carousel.jpg')}}" alt="Baggage" class="img-fluid mt-4"></a>
                        </div>
                        <div class="col-md-4 col-sm-6 gal-img">
                            <a href="#gal3"><img src="{{asset('frontend/images/carousel.jpg')}}" alt="Baggage" class="img-fluid mt-4"></a>
                        </div>

                    </div>
                    <!-- gallery popups -->
                    <!-- popup-->
                    <div id="gal1" class="popup-effect">
                        <div class="popup">
                            <img src="{{asset('frontend/images/carousel.jpg')}}" alt="Popup image" class="img-fluid mt-4" />
                            <a class="close" href="#gallery">&times;</a>
                        </div>
                    </div>
                    <!-- //popup -->
                    <!-- popup-->
                    <div id="gal2" class="popup-effect">
                        <div class="popup">
                            <img src="{{asset('frontend/images/carousel.jpg')}}" alt="Popup image" class="img-fluid mt-4" />
                            <a class="close" href="#gallery">&times;</a>
                        </div>
                    </div>
                    <!-- //popup -->
                    <!-- popup-->
                    <div id="gal3" class="popup-effect">
                        <div class="popup">
                            <img src="{{asset('frontend/images/carousel.jpg')}}" alt="Popup image" class="img-fluid mt-4" />
                            <a class="close" href="#gallery">&times;</a>
                        </div>
                    </div>
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
    				<a href="bestseller.html">
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