@extends('user.layout', ['user' => $user, 'brand' => $brand])
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			
            <h1 class="page-header">KYC Panel</h1>
            @if($user->is_kyc != 3)
            <p style="font-weight: bold;">Thank you for filling your information. This information will be saved and can't be changed. If you want to change please contact to Moderator</p>
            <div class="panel panel-default">
	            <div class="panel-heading">
	                Step 1: Provide your information <span class="badge"> Success </span>
	            </div>
	            <div class="panel-body">
	                <div class="panel panel-default">
	                	<div class="panel-body">
	                		<form class="form-horizontal" action="{{url('admin/homepage/brand')}}" method="post" enctype="multipart/form-data">
								{!!csrf_field()!!}
								<div class="form-group">
									<label class="col-sm-2">Email</label>

									<div class="col-sm-12">
										<input type="text" class="form-control" name="email" value="{{$user->email}}" disabled="disabled">
									</div>
								</div>
								<div class="form-group">
								  <label class="col-sm-2">Address</label>

								  <div class="col-sm-12">
								    <input type="text" class="form-control" name="address" placeholder="Your Address" disabled="disabled" value="{{$profile['address']}}">
								  </div>
								</div>

								<div class="form-group">
								  <label class="col-sm-2">Country</label>

								  <div class="col-sm-12">
								    <select name="country" class="form-control">
								    	<option value="" disabled selected>{{$profile['country']}}</option>
								    </select>
								  </div>
								</div>

								<div class="form-group">
								  <label class="col-sm-2">City</label>

								  <div class="col-sm-12">
								    <input type="text" class="form-control" name="city" placeholder="Your City"disabled="disabled" value="{{$profile['city']}}">
								  </div>
								</div>

								<div class="form-group">
								  <label class="col-sm-6">Your Identify Card</label>

								  <div class="col-sm-12">
								    <input type="text" class="form-control" name="Identify" placeholder="Provide your identify card number" disabled="disabled" value="{{$profile['identify']}}">
								  </div>
								</div>

								<div class="form-group">
								  <label class="col-sm-2">Phone</label>

								  <div class="col-sm-12">
								    <input type="number" class="form-control" name="phone" placeholder="Your Phone number" disabled="disabled" value="{{$profile['phone']}}">
								  </div>
								</div>
					        </form>
	                	</div>
	                </div>
	            </div>
	        </div>
	        <div class="panel panel-default">
	        	<div class="panel-heading">
	        		Step 2: Provide Your ID Image <span class="badge"> Success </span>
	        	</div>
	        	<div class="panel-body">
	        		<div class="form-group">
						<label class="col-sm-12">Front Image</label>

						<div class="col-sm-12">
							<img src="{{$path.'/'.$kyc_image->front}}" class="img-thumbnail">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-12">Back Image</label>

						<div class="col-sm-12">
							<img src="{{$path.'/'.$kyc_image->back}}" class="img-thumbnail">
						</div>
					</div>
	        	</div>
	        </div>
	        @else
	        <div class="panel panel-green text-center">
	        	<div class="panel-heading">
	        		<h2>CONGRATULATIONS!!! Your KYC have been verified</h2>
	        	</div>
	        	<div class="panel-body">
	        		<h3>Thank you for your time and effor on our KYC Process</h3>
	        	</div>
	        </div>
	        @endif
        </div>
	</div>
</div>
@endsection