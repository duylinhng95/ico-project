@extends('user.layout', ['user' , $user])
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
            <h1 class="page-header">KYC Panel</h1>
            <div class="panel panel-default">
	            <div class="panel-heading">
	                Step 2: Provide your ID card Image
	            </div>
	            <div class="panel-body">
	            	<p style="font-weight: bold;">Please provide your ID card Image.</p>
	            	<div class="panel panel-default">
	            		<div class="panel-body">
	            			<form class="form-horizontal" action="{{url('user/kyc/2')}}" method="post" enctype="multipart/form-data">
								{!!csrf_field()!!}
								<input type="hidden" name="id" value="{{$user->id}}">
								<div class="form-group">
									<label class="col-sm-12">Front Image</label>

									<div class="col-sm-12">
										<input type="file" class="form-control" name="front" id="frontInput">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-12">Preview Front Image</label>

									<div class="col-sm-12">
										<img src="#" id="frontPrev" class="img-thumbnail">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-12">Back Image</label>

									<div class="col-sm-12">
										<input type="file" class="form-control" name="back" id="backInput">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-12">Preview Back Image</label>

									<div class="col-sm-12">
										<img src="#" id="backPrev" class="img-thumbnail">
									</div>
								</div>
								<div class="card-footer">
									<button type="submit" class="btn btn-info pull-right">Save</button>
								</div>
					        </form>
	            		</div>
	            	</div>
	            </div>
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

	$("#frontInput").change(function() {
	  readURL(this);
	});
	$("#backInput").change(function() {
	  readURL1(this);
	});
</script>
@endsection