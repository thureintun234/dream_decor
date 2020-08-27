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
				<a href="{{route('dreamdecor')}}">
					<img src="{{asset('frontend/images/logo.png')}}" class="img-fluid" width="100">
					<p class="text-monospace dreamdecor">DreamDecor</p>
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


		<!--/shipping-->
		<section class="shipping">
			<div class="shiopping-grids d-lg-flex">
				<div class="col-lg-4 shiopping-pvt-gd text-center">
					<div class="icon-gd"><span class="fa fa-truck" aria-hidden="true"></span>
					</div>
					<div class="icon-gd-info">
						<h3>FREE SHIPPING</h3>
						<p>On all order over $2000</p>
					</div>
				</div>
				<div class="col-lg-4 shiopping-pvt-gd sec text-center">
					<div class="icon-gd"><span class="fa fa-bullhorn" aria-hidden="true"></span></div>
					<div class="icon-gd-info">
						<h3>FREE RETURN</h3>
						<p>On 1st exchange in 30 days</p>
					</div>
				</div>
				<div class="col-lg-4 shiopping-pvt-gd text-center">
					<div class="icon-gd"> <span class="fa fa-gift" aria-hidden="true"></span></div>
					<div class="icon-gd-info">
						<h3>PACKAGES</h3>
						<p>Set Of Best Products in a Package.</p>
					</div>

				</div>
			</div>

		</section>
		<!--//shipping-->

		

		<!-- footer -->
		<div class="footer_agileinfo_topf py-5">
			<div class="container py-md-5">
				<div class="row">
					<div class="col-lg-2 footer_wthree_gridf mt-lg-4 ">
						<a href="{{route('dreamdecor')}}">
							<img src="{{asset('frontend/images/logo.png')}}" class="img-fluid" width="100">
							<p class="text-monospace dreamdecor">DreamDecor</p>
						</a> 
						
						{{-- <label class="sub-des2">Online Store</label> --}}
					</div>
					<div class="col-lg-3 footer_wthree_gridf mt-md-0 mt-4">
						<ul class="footer_wthree_gridf_list">
							<li>
								<a href="{{route('dreamdecor')}}"><span class="fa fa-angle-right" aria-hidden="true"></span> Home</a>
							</li>
							<li>
								<a href="{{route('about')}}"><span class="fa fa-angle-right" aria-hidden="true"></span> About</a>
							</li>
							<li>
								<a href="{{route('item')}}"><span class="fa fa-angle-right" aria-hidden="true"></span> Shop</a>
							</li>
							<li>
								<a href="{{route('package')}}"><span class="fa fa-angle-right" aria-hidden="true"></span>Package</a>
							</li>


						</ul>
					</div>
					<div class="col-lg-4 footer_wthree_gridf mt-md-0 mt-sm-4 mt-3">
						<ul class="">
							<a href="{{route('contact')}}"><span class="fa fa-angle-right mb-2 mt-4" aria-hidden="true"></span> Contact Us</a>
							<p><i class="fas fa-phone-alt"></i><span> +95998766543</span></p>
							<p><i class="fas fa-envelope"></i><span> dreamdecor@gmail.com</span></p>
							<p><i class="fas fa-map-marker-alt"></i><span> Corner of main road and 38th street.</span></p>
						</ul>
					</div>

					<div class="col-lg-3 footer_wthree_gridf mt-md-0 mt-sm-4 mt-3">
						<ul class="footer_wthree_gridf_list">
							<li>
								<a href="{{route('login')}}"><span class="fa fa-angle-right" aria-hidden="true"></span> Login </a>
							</li>

							<li>
								<a href="{{route('register')}}"><span class="fa fa-angle-right" aria-hidden="true"></span>Register</a>
							</li>
							

						</ul>
					</div>
				</div>

				<div class="w3ls-fsocial-grid">
					<h3 class="sub-w3ls-headf">Follow Us</h3>
					<div class="social-ficons">
						<ul class="footer-final">
							<li><a href="https://www.facebook.com" class="facebook"><img src="{{asset('frontend/images/fb.png')}}" class="img-fluid" width="50" height="50"> Facebook</a></li>
							<li><a href="https://twitter.com" class="twitter"><img src="{{asset('frontend/images/tw.png')}}" class="img-fluid" width="50" height="50"> Twitter</a></li>
							<li><a href="https://plus.google.com" class="google"><img src="{{asset('frontend/images/gg.png')}}" class="img-fluid" width="50" height="50"> Google</a></li>
						</ul>
					</div>
				</div>
				<div class="move-top text-center mt-lg-4 mt-3">
					<a href="#dreamdecor"><span class="fa fa-angle-double-up" aria-hidden="true"></span></a>
				</div>
			</div>
		</div>
		<!-- //footer -->

		
		



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