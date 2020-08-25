@extends('frontendtemplate')
@section('content')
	<div class="container">
		<div class="col-md-9">
			<h3>Checkout Page</h3>
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
						
						
					</div>
				</div>
				
			</div>
		</div>
		<div class="container">
			<div class="col-md-3 ">
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
	</div>
@endsection
@section('script')
  <script type="text/javascript" src="{{asset('frontend/js/script.js')}}"></script>
  @endsection