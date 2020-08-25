<!DOCTYPE html>
<html>
<head>
	<title>Dream Decor | Home Decorationa And Accessories</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
				

					<form class="form-inline my-2 my-lg-0 ml-auto">
						<div class="row">
							<div class="col-md-12">
								<ul class="navbar-nav">
									<li class="nav-item">
										<a class="nav-link" href="{{route('login')}}">Login</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="{{route('register')}}">Register</a>
									</li>
									{{-- <li class="nav-item">
										<a class="nav-link" href="{{route('profile')}}">{{ Auth::user()->name }}</a>
									</li> --}}
								</ul>
							</div>
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-6">
										<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
									</div>
									<div class="col-md-2">
										<a href="{{route('checkout')}}"><i class="fas fa-shopping-cart fa-2x"></i></a>
									</div>
									<div class="col-md-2">
										<a href=""><i class="far fa-2x fa-heart "></i></a>
									</div>
								</div>

							</div>
							
						</div>
					</form>
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
						<div class="col-md-3 amet-sed ">
							<h4>Follow Us</h4>
							<ul class="social-icons2 wow slideInDown" data-wow-duration="1s" data-wow-delay=".3s">
								<div class="row">
									<div class="col-lg-4 col-md-4 col-sm-4">
										<li><a href="#" class="tw"></a></li>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-4">
										<li><a href="#" class="fb"> </a></li>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-4">
										<li><a href="#" class="in"></a></li>
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
		<script type="text/javascript">
			$(document).ready(function() {				

		 		$().UItoTop({ easingType: 'easeOutQuart' });

			});
		</script>
		<!--end-start-smooth-scrolling-->

		<a href="#dreamdecor" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


<script type="text/javascript" src="{{asset('frontend/bootstrap/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/slick-master/slick/slick.js')}}"></script>
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