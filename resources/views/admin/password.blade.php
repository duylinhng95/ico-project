@extends('admin.layout', ['brandName' => $brand['brandName']->content, 'brandImg' => $brand['brandImg']->content])
@section('content-header')
<div class="row mb-2">
  <div class="col-sm-6">
    <h1 class="m-0 text-dark">Change Password</h1>
  </div><!-- /.col -->
</div>
@endsection
@section('content')
<div class="row">
	<div class="col-lg-6 offset-lg-2">
		<div class="card">
			<div class="card-body">
				<form class="form-horizontal" method="post" action="{{url('/admin/password')}}">
		        	{!!csrf_field()!!}
		        	<div class="form-group">
						<label class="col-sm-4 control-label">Old Password</label>
						<div class="col-sm-12">
							<input type="password" class="form-control" name="oldPassword">
							@if ($errors->has('oldPassword'))
								<span class="help-block" style="color:red;">
									<strong>{{ $errors->first('oldPassword') }}</strong>
								</span>
							@endif
						</div>
					</div>
		        	<div class="form-group">

						<label class="col-sm-4 control-label">New Password</label>
						<div class="input-group col-sm-12">
							<input type="password" name="newPassword" class="form-control">
						</div>
						@if ($errors->has('newPassword'))
							<span class="help-block" style="color:red;">
								<strong>{{ $errors->first('newPassword') }}</strong>
							</span>
						@endif

					</div>
					<div class="form-group">
						<label class="col-sm-4 control-label">Confirm New Password</label>
                       	<div class="input-group col-sm-12">
                       		<input type="password" class="form-control" id="confirm_password" name="newPassword_confirmation"  required>
                      	</div>
                    </div>
                    <div class="col-sm-4 offset-sm-5">
                    	<button type="submit" class="btn btn-primary">Submit</button>
                    </div>
		        </form>
			</div>
		</div>
	</div>
</div>
@endsection