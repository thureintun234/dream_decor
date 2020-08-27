@extends('frontendtemplate')
{{-- @section('nav')
    @include('frontend.nav')
@endsection --}}
@section('content')
	<div class="container">
 	<h1 class="text-center mt-6">About Us</h1>
 	<hr class="divider">
 	<h2 class="text-center my-3">Furniture And Decoration Package</h2> 	
 </div>
 <div class="container">
 	<div class="row">
 		<div class="relphoto">
 			<img src="{{asset('frontend/images/gif2.gif')}}" class="img-fluid ml-5" width="900" height="850">
 			<div class="dover"></div>
 			<div class="postext text-center">
 				<h2 class="text-light">ABOUT US</h2>
 				
 			</div>
 		</div>
 	</div>
 	<div class="card">
 		<div class="row text-justify">
 			<div class="col-lg-4 col-md-4 col-sm-4 ">
 				<h3>Full Pack</h3>
 				<p>-For Unfurnished Units<br>-Complete Set of Furniture and Appliance<br>-Starting 1,500,000MMK</p>
 			</div>
 			<div class="col-lg-4 col-md-4 col-sm-4">
 				<h3>Partial Pack</h3>
 				<p>-For Partially furnished Units<br>-Bespoke Furniture, Appliance and Decoration<br>-Starting 1,000,000MMK</p>
 			</div>
 			<div class="col-lg-4 col-md-4 col-sm-4">
 				<h3>Home Staging</h3>
 				<p>-Furnishing Touches, Decorations and Home Accessories<br>-Starting 500,000MMK</p>
 			</div>
 		</div>
 	</div>
 </div>


 <div class="container">
 	<div class="card">
 		<div class="row">
 			<div class="col-md-6 text-center">
 				<img src="{{asset('frontend/images/sale.jpg')}}" class="m_market" width="500" height="400">
 			</div>
 			<div class="col-md-6">
 				<div class="card-body">
 					<h2 class="card-title text-center">What We Do</h2>
 					<p class="card-text text-justify">-Providing High Quality, Stylish and Affordable Furniture Package for the time-pressed landlords, we take the effort out of furnishing the ideal tenant ready home. <br>-Our homeinterior packs, are carefully selected to suit a majority of tastes and styles. On top of this, we offer an afficient turnarround of under 2 weeks. <br> - Our Service includes installation, setup, professiional cleaning and photography to facilitate the rental marketing process.</p>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>
@endsection