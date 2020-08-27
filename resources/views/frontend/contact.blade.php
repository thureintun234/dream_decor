@extends('frontendtemplate')
{{-- @section('nav')
    @include('frontend.nav')
@endsection --}}
@section('content')
	<section id="contact" class="contact mb-3">
 	<div class="container" data-aos="fade-up">

 		<div class="container-fluid section-title">
 			<h1 class="text-center py-3">Contact</h1>
 		</div>

 		<div class="container-fluid text align-self-center">
 			<div class="text-center col-md-9">
 				<h5 class="contact text-center">Why Choose Us?</h5>
 				<p class="contact text-center text-justify">-Designer Interiors without the Price Tag <br> -Quality Furnishing at Affordable Local Price <br>-Turnkey Hassle-Free and Effience Service</p>
 				<iframe style="border:0; width:100%; height:270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3700.30773024087!2d96.11509911528641!3d21.961149460668928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30cb6da3b3ee664f%3A0x16b0f99f341ff593!2s39%2059th%20St%2C%20Mandalay!5e0!3m2!1sen!2smm!4v1595807357766!5m2!1sen!2smm" frameborder="0" allowfullscreen=""></iframe>
 			</div>
 		</div>

 		<div class="row mt-5">

 			<div class="col-lg-4">
 				<div class="info">
 					<div class="address">
 						<i class="icofont-google-map"></i>
 						<h4>Location:</h4>
 						<p>corner of 59 & 39, Maharaung Myay, Mandalay</p>
 					</div>

 					<div class="email">
 						<i class="icofont-envelope"></i>
 						<h4>Email:</h4>
 						<p>marmarkyi773@gmail.com</p>
 					</div>

 					<div class="phone">
 						<i class="icofont-phone"></i>
 						<h4>Call:</h4>
 						<p>+959 977295877</p>
 					</div>

 				</div>

 			</div>

 			<div class="col-lg-8 mt-5 mt-lg-0">

 				<form action="forms/contact.php" method="post" role="form" class="php-email-form">
 					<div class="form-row">
 						<div class="col-md-6 form-group">
 							<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
 							<div class="validate"></div>
 						</div>
 						<div class="col-md-6 form-group">
 							<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
 							<div class="validate"></div>
 						</div>
 					</div>
 					<div class="form-group">
 						<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
 						<div class="validate"></div>
 					</div>
 					<div class="form-group">
 						<textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
 						<div class="validate"></div>
 					</div>
 					<div class="mb-3">
 						<div class="loading">Loading</div>
 						<div class="error-message"></div>
 						
 					</div>
 					<div class="text-center"><button type="submit" class="btn btn-outline-success">Send Message</button></div>
 				</form>

 			</div>

 		</div>

 	</div>
 </section>
@endsection