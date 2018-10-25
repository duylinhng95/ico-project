@extends('admin.layout', ['brandName' => $brand['brandName']->content, 'brandImg' => $brand['brandImg']->content])
@section('content-header')
<div class="row mb-2">
  <div class="col-sm-6">
    <h1 class="m-0 text-dark">User</h1>
  </div><!-- /.col -->
</div>
@endsection
@section('content')
<div class="row">
	<div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">User List</h3>
            <div class="card-tools">
            	<a href="{{url('admin/user/export')}}" class="btn btn-success">Export to Excel</a>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <table class="table table-striped" id="table_user">
            	<thead>
            		<tr>
		                <th>Name</th>
		                <th>Email</th>
		                <th>Verify Status</th>
		                <th>KYC Status</th>
	             	</tr>
            	</thead>
              	<tbody>
	             	@foreach($users as $user)
	             	<tr>
	             		<td>{{$user->name}}</td>
	             		<td>{{$user->email}}</td>
	             		<td>{{$user->verify_token ? 'Not Verified' : 'Verified'}}</td>
	             		<td>{{$user->is_kyc ? 'Yes' : 'No'}}</td>
	             	</tr>
	             	@endforeach
            	</tbody>
        	</table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
</div>
<script type="text/javascript">
	function exportExcel(){
		$.ajax({
			type:"GET",
			url: "{{url('admin/user/export')}}",
			success: function (response){
				console.log(response);
			},
		});
	}
</script>
@endsection