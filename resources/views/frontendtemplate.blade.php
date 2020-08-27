<!DOCTYPE html>
<html>
<head>
	<title>Dream Decor | Home Decorationa And Accessories</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<script type="text/javascript" src="{{asset('frontend/bootstrap/js/jquery.min.js')}}"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/bootstrap/css/bootstrap.min.css')}}">
	
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/fontawesome/css/all.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/slick-master/slick/slick.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/slick-master/slick/slick-theme.css')}}">
	<style>
		.slider {
			width: 100%;
			margin: 100px auto;
		}

		.slick-slide {
			margin: 0px 20px;
		}

		.slick-prev:before,
		.slick-next:before {
			color: #8a0606;
		}

		.slick-slide {
			transition: all ease-in-out .3s;
			opacity: .2;
		}

		.slick-active {
			opacity:1;
		}

	</style>
</head>
<body>

	<header class="main_header" id="dreamdecor">
		<nav class="navbar navbar-expand-lg navbar-light bg-light py-4 mr-4">
			<div class="container-fluid">
				<a class="navbar-brand img-thumbnail border-0 ml-4" href="{{route('dreamdecor')}}">
					<img src="{{asset('frontend/images/logo.png')}}" class="img-fluid" width="80">
					<p class="text-monospace">Dream Decor</p>
				</a>
				

				<div class="row">
					<div class="col-md-12">
						<ul class="navbar-nav">
							@guest
							<li class="nav-item">
								<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
							</li>
							@if (Route::has('register'))
							<li class="nav-item">
								<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
							</li>
							@endif
							@else
							<li class="nav-item dropdown">
								<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
									{{ Auth::user()->name }} <span class="caret"></span>
								</a>

								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

									<a class="dropdown-item" href="{{ route('profile') }}"
									onclick="event.preventDefault();
									document.getElementById('profile-form').submit();">
									{{ __('Profile') }}
								</a>

								<a class="dropdown-item" href="{{ route('logout') }}"
								onclick="event.preventDefault();
								document.getElementById('logout-form').submit();">
								{{ __('Logout') }}
							</a>


							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
							</form>

							<form id="profile-form" action="{{ route('profile') }}" method="GET" style="display: none;">
								@csrf
							</form>
						</div>
					</li>
					@endguest
				</ul>
			</div>
			<div class="col-md-12 my-2">
				<div class="row">
					<ul class="navbar-nav">
						<li class="nav-item">
							<form method="POST" action="{{route('searchkey')}}" role="search">
								<div class="d-flex justify-content-between align-items-center">
									@csrf
									
									<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="site_search">
									
									<button type="submit" class="btn btn-outline-success" value="Search">Search
									</button>	
									<div class="d-flex justify-content-between align-items-center">
									</form>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="{{route('view_wishlist')}}"><i class="fas fa-heart fa-2x"></i>
										{{-- <span style="color:green; font-weight: bold;">({{App\Wishlist::count()}})</span> --}}
									</a>
								</li>
								<li class="nav-item cat_img">
									<a class="nav-link" href="{{route('checkout')}}">
										<i class="fas fa-shopping-cart fa-2x"><span id="count"></i>
										</a>
									</li>
								</ul>
							</div>

						</div>
					</div>
				</div>
			</nav>
			@yield('nav')
		</header>

		@yield('content')



		

		<!-- Footer Start -->
		<div class="footer">
			<div class="container">
				<div class="footer-top">
					<div class="row">
						
						<div class="col-md-3 amet-sed">
							<a class="navbar-brand img-thumbnail border-0 ml-4" href="{{route('dreamdecor')}}">
								<img src="{{asset('frontend/images/logo.png')}}" class="img-fluid" width="80">
								<p class="text-monospace">Dream Decor</p>
							</a>
						</div>

						<div class="col-md-3 amet-sed">
							<h4>Contact</h4>
							<div class="info">
								<div class="address">
									<li><i class="icofont-google-map"></i>
										<h5>Location:</h5>
										<p>corner of 59 & 39,<br> Maharaung Myay, Mandalay</p></li>
									</div>

									<div class="email">
										
										<li><i class="icofont-envelope"></i><a class="email"href="#"> dreamdecor@gmial.com</a></li>
										
									</div>

									<div class="phone">
										<li><i class="icofont-phone"></i>
											<h5>Call:</h5>
											<p>+959 977295877</p></li>
										</div>
									</div>
								</div>
								
								
								<div class="col-md-3 amet-sed">
									<h4>Aubout</h4>
								</div>
								<div class="col-md-3 amet-sed ">
									<h4>Follow Us</h4>
									<ul class="social-icons2 wow slideInDown" data-wow-duration="1s" data-wow-delay=".3s">
										<div class="row">
											<div class="col-lg-4 col-md-4 col-sm-4">
												<li><a href="https://twitter.com" class="tw"></a></li>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-4">
												<li><a href="https://www.facebook.com" rel="me" title="Facebook" target="_blank" class="fb"> </a></li>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-4">
												<li><a href="" class="in"></a></li>
											</div>
											
											<div class="clearfix"></div>
										</div>
									</ul>
								</div>
							</div>		
						</div>
						<p class="footer-class">© 2016 Inventive Design . All Rights Reserved | Design by <a href="">EXCELLENT</a></p>
					</div>
				</div>
				<!--start-smooth-scrolling-->
		{{-- <script type="text/javascript">
			$(document).ready(function() {				

		 		$().UItoTop({ easingType: 'easeOutQuart' });

			});
		</script> --}}
		<!--end-start-smooth-scrolling-->

		<a href="#dreamdecor" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>



		<script type="text/javascript" src="{{asset('frontend/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('frontend/slick-master/slick/slick.js')}}"></script>
		@yield('script')
		<script>


			$(document).ready(function(){
				$('.slick_slider').slick({
					slidesToShow: 4,
					slidesToScroll: 1,
					autoplay: true,
					autoplaySpeed: 2000,
					responsive: [
					{
						breakpoint: 1024,
						settings: {
							slidesToShow: 3,
							slidesToScroll: 3,
							infinite: true,
							dots: true
						}
					},
					{
						breakpoint: 600,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 2
						}
					},
					{
						breakpoint: 480,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1
						}
					}
					]
				});
			})
		</script>
	</body>
	</html>