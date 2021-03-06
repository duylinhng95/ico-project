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
	            	<form class="form-horizontal" action="{{url('user/kyc/2')}}" method="post" enctype="multipart/form-data">
	            	<div class="panel panel-default">
	            		<div class="panel-heading text-center">
			                <h1>Selfie with the proof</h1>
			            </div>

	            		<div class="panel-body">
	            			<h3 style="font-weight: bold" class="text-center">Please take a selfie with your document so that it’s clearly visible and does not cover your face.</h3>
							{!!csrf_field()!!}
							<input type="hidden" name="id" value="{{$user->id}}">
							<div class="form-group">
								<label class="col-sm-12">Selfie Image</label>

								<div class="col-sm-12">
									<input type="file" class="form-control" name="selfie" id="selfieInput">
									@if ($errors->has('selfie'))
						                    <span class="help-block" style="color:red;">
						                        <strong>{{ $errors->first('selfie') }}</strong>
						                    </span>
						               @endif
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-12">Preview Selfie</label>
								<div class="col-sm-6">
									<img id="selfie" class="img-thumbnail" style="max-width: 100%; max-height:310px;">
								</div>
								<div class="col-sm-6">
									<img src="{{asset('/images/kyc/selfie.png')}}" class="img-thumbnail" style="max-height:310px;">
								</div>
							</div>						
	            		</div>
	            	</div>
	            </div>
	            <div class="panel-footer">
	            	<div class="card-footer text-center">
						<button type="submit" class="btn btn-info">Save</button>
					</div>
	            </div>
	            </form>
	        </div>
        </div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">

	function readURL2(input) {

	  if (input.files && input.files[0]) {
	    var reader = new FileReader();

	    reader.onload = function(e) {
	      $('#selfie').attr('src', e.target.result);
	    }

	    reader.readAsDataURL(input.files[0]);
	  };
	};
	$("#selfieInput").change(function() {
	  readURL2(this);
	});
</script>
@endsection