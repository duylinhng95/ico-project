@extends('user.layout', ['user' => $user, 'brand' => $brand, 'brandName' => $brandName])
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
            <h1 class="page-header">KYC Panel</h1>
            <div class="panel panel-default">
	            <div class="panel-body">
	            	<form class="form-horizontal" action="{{url('user/kyc/1')}}" method="post" enctype="multipart/form-data">
	            	<div class="panel panel-default">
	            		<div class="panel-heading text-center">
			                <h1>Proof of identity</h1>
			            </div>

	            		<div class="panel-body">
	            			<h3 style="font-weight: bold;" class="text-center">Please upload your ID card in both side. The photo should be bright and clear, and all corners of your document must be visible.</h3>
							{!!csrf_field()!!}
							<input type="hidden" name="id" value="{{$user->id}}">
							<div class="row">
								<div class="form-group col-sm-6">
									<label class="col-sm-12">Front Image</label>

									<div class="col-sm-12">
										<input type="file" class="form-control" name="front" id="frontInput">
									</div>
								</div>
								<div class="form-group col-sm-6">
									<label class="col-sm-12">Preview Front Image</label>

									<div class="col-sm-12">
										<img src="{{asset('/images/kyc/id_front.png')}}" id="frontPrev" class="img-thumbnail">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-sm-6">
									<label class="col-sm-12">Back Image</label>

									<div class="col-sm-12">
										<input type="file" class="form-control" name="back" id="backInput">
									</div>
								</div>
								<div class="form-group col-sm-6">
									<label class="col-sm-12">Preview Back Image</label>

									<div class="col-sm-12">
										<img src="{{asset('/images/kyc/id_back.png')}}" id="backPrev" class="img-thumbnail">
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