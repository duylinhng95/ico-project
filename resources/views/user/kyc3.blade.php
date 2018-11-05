@extends('user.layout', ['user' => $user, 'brand' => $brand, 'brandName' => $brandName])
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
            <h1 class="page-header">KYC Panel</h1>
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
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-12">Preview Selfie</label>

								<div class="col-sm-offset-3 col-sm-6">
									<img src="{{asset('/images/kyc/selfie.png')}}" id="selfie" class="img-thumbnail">
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