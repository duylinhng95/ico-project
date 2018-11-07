@extends('user.layout', ['user' => $user, 'brand' => $brand, 'brandName' => $brandName])
@section('header')
	KYC
@endsection
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2">
            <h1 class="page-header">KYC VERIFICATION</h1>
            <div class="panel panel-default">
	            <div class="panel-body">
	            	<form class="form-horizontal" action="{{url('user/kyc/1')}}" method="post" enctype="multipart/form-data">
	            	<div class="panel panel-default">
	            		<div class="panel-heading text-center">
			                <h1>Account Verification Process</h1>
			            </div>

	            		<div class="panel-body">
	            			<h3 style="font-weight: bold;" class="text-center">Please upload your ID card in both side. The photo should be bright and clear, and all corners of your document must be visible.</h3>
							{!!csrf_field()!!}
							<input type="hidden" name="id" value="{{$user->id}}">
							<div class="row">
								<div class="form-group">
									<label class="col-sm-12">Front Image</label>

									<div class="col-sm-12">
										<input type="file" class="form-control" name="front" id="frontInput">
										@if ($errors->has('front'))
						                    <span class="help-block" style="color:red;">
						                        <strong>{{ $errors->first('front') }}</strong>
						                    </span>
						               @endif
									</div>
								</div>
							</div>
							<div class="row">
								<div class="form-group">
									<label class="col-sm-12">Preview Front Image</label>
									<div class="col-sm-6">
										<img id="frontPrev" class="img-fluid img-thumbnail" style="max-width: 100%; max-height: 290px;">
									</div>
									<div class="col-sm-6">
										<img src="{{asset('/images/kyc/id_front.png')}}" class="img-thumbnail" style=" max-height: 290px;">
									</div>
								</div>
							</div>	
							
							<div class="row">
								<div class="form-group">
									<label class="col-sm-12">Back Image</label>

									<div class="col-sm-12">
										<input type="file" class="form-control" name="back" id="backInput">
										@if ($errors->has('back'))
						                    <span class="help-block" style="color:red;">
						                        <strong>{{ $errors->first('back') }}</strong>
						                    </span>
						               @endif
									</div>
								</div>
							</div>
							<div class="row">
								<div class="form-group">
									<label class="col-sm-12">Preview Back Image</label>
									<div class="col-sm-6">
										<img id="backPrev" class="img-fluid img-thumbnail" style="max-width: 100%; max-height: 290px;">
									</div>
									<div class="col-sm-6">
										<img src="{{asset('/images/kyc/id_back.png')}}"  class="img-thumbnail" style=" max-height: 290px;">
									</div> 
								</div>
							</div>					
	            		</div>
	            	</div>
	            </div>
	            <div class="panel-footer">
	            	<div class="card-footer text-center">
						<button type="submit" class="btn-lg btn-info">Next</button>
					</div>
	            </div>
	            </form>
	        </div>
        </div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
	function readURL(input) {

	  if (input.files && input.files[0]) {
	    var reader = new FileReader();

	    reader.onload = function(e) {
	      $('#frontPrev').attr('src', e.target.result);
	    }

	    reader.readAsDataURL(input.files[0]);
	  };
	};

	function readURL1(input) {

	  if (input.files && input.files[0]) {
	    var reader = new FileReader();

	    reader.onload = function(e) {
	      $('#backPrev').attr('src', e.target.result);
	    }

	    reader.readAsDataURL(input.files[0]);
	  };
	};

	function readURL2(input) {

	  if (input.files && input.files[0]) {
	    var reader = new FileReader();

	    reader.onload = function(e) {
	      $('#selfie').attr('src', e.target.result);
	    }

	    reader.readAsDataURL(input.files[0]);
	  };
	};

	$("#frontInput").change(function() {
	  readURL(this);
	});
	$("#backInput").change(function() {
	  readURL1(this);
	});
	$("#selfieInput").change(function() {
	  readURL2(this);
	});
</script>
@endsection