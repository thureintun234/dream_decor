@extends('frontendtemplate')
@section('content')
	<div class="container">
		{{-- <div class="row"> --}}
			{{-- <div class="col-md-9"> --}}
				<h3 class="text-center my-5">Checkout Page</h3>
				<div id="checkout_body">
					<div class="text-center my-5">
						<div class="row">
							<div class="offset-md-2 col-md-8">
								<div class="table-responsive">
									<table class="table">
										<thead>
											<tr>
												<th>No</th>
												<th>Photo</th>
												<th>Product Name</th>
												<th>Price</th>
												<th>Qty</th>
												<th>Subtotal</th>
											</tr>
										</thead>
									</table>
								</div>
							</div>
							<div class="col-md-4 offset-md-4 text-left">
								<div class="form-group">
									<textarea class="form-control notes" placeholder="Notes"></textarea>
									<input type="hidden" name="" class="total">
								</div>
							</div>
							<div class="col-md-4 offset-md-2 text-left">
								<a href="" class="btn btn-success">Continue Shopping</a>
							</div>
							{{-- <textarea class="notes" placeholder="You are not here!"></textarea> --}}
							<div class="col-md-4 offset-md-2 text-left">
								<a href="" class="btn btn-success">Order</a>
							</div>

						</div>
					</div>

				</div>
			{{-- </div> --}}
	





			<div class="col-md-8 offset-md-2 ">

				<form class="my-5" action="" method="" enctype="">
					<div class="form-row">
						<div class="form-group col-md-3">
							<label for="inputEmail4">Email</label>
							
						</div>
						<div class="form-group col-md-9">
							<input type="email" class="form-control" id="inputEmail4">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-3">
							<label for="inputAddress">Address</label>
						</div>
						<div class="form-group col-md-9">
							<input type="text" class="form-control" id="inputAddress" placeholder="Enter Street">
						</div>
					</div>
					
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="inputCity">City</label>
							<input type="text" class="form-control" id="inputCity">
						</div>
						<div class="form-group col-md-6">
							<label for="inputState">State</label>
							<select id="inputState" class="form-control">
								<option selected>Choose...</option>
								<option>...</option>
							</select>
						</div>
						
					</div>
					<div class="form-group">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" id="gridCheck">
							<label class="form-check-label" for="gridCheck">
								Check me out
							</label>
						</div>
					</div>
					
				</form>
				<h3 class="text-center my-3s">Payment</h3>

				<div class="ml-4 text-center mb-5">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="cashondelivery" name="payment" class="cashondelivery">
						<label class="cashondelivery" for="cashondelivery">Cash On Delivery</label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="paypal" name="payment" class="paypal">
						<label class="paypal" for="paypal">Paypal</label>
					</div>
				</div>
			</div>
		{{-- </div> --}}
	</div>
	
@endsection
@section('script')
  <script type="text/javascript" src="{{asset('frontend/js/script.js')}}"></script>
  @endsection