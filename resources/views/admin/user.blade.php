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
                    <th>Number of Refs</th>
                    <th>User role</th>
	             	</tr>
            	</thead>
              	<tbody>
	             	@foreach($users as $user)
	             	<tr>
	             		<td>{{$user->name}}</td>
	             		<td>{{$user->email}}</td>
	             		<td>{{$user->verify_token ? 'Not Verified' : 'Verified'}}</td>
                  <td>{{$user->is_kyc ? 'Yes' : 'No'}}</td>
	             		<td>{{$user->countRef}}</td>
                  <td>
                    <select class="form-control" id="selectRole{{$user->id}}" onchange="changeRole({{$user->id}})">
                      <option value = "0">User</option>
                      <option value ="1">Mod</option>
                    </select>
                  </td>
	             	</tr>
	             	@endforeach
            	</tbody>
        	</table>
          </div>
          <!-- /.card-body -->
        </div>
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Mods List</h3>
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
                    <th>User role</th>
                </tr>
              </thead>
                <tbody>
                @foreach($mods as $mod)
                <tr>
                  <td>{{$mod->name}}</td>
                  <td>{{$mod->email}}</td>
                  <td>{{$mod->verify_token ? 'Not Verified' : 'Verified'}}</td>
                  <td>{{$mod->is_kyc ? 'Yes' : 'No'}}</td>
                  <td>
                    <select class="form-control" id="selectRole{{$mod->id}}" onchange="changeRole({{$mod->id}})">
                      <option value ="1">Mod</option>
                      <option value ="0">User</option>
                    </select>
                  </td>
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
  function changeRole(id){
    var user_id = id;
    var role_id = $('#selectRole'+id).val();
    var _token = "{{ csrf_token() }}";
    $.ajax({
        url:"{{url('admin/user/role')}}/"+user_id+"/",
        data: {
          role: role_id,
          _token: _token,
        },
        type:'post',
        success:function(response){
          console.log(response);
          location.reload();
        },
    });
  }
</script>
@endsection