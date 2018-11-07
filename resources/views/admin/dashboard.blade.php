@extends('admin.layout', ['brandName' => $brand['brandName']->content, 'brandImg' => $brand['brandImg']->content])
@section('content-header')
<div class="row mb-2">
  <div class="col-sm-6">
    <h1 class="m-0 text-dark">User Dashboard</h1>
  </div><!-- /.col -->
</div>
@endsection
@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">
				<button class="btn btn-default" data-toggle="modal" data-target="#addModal">Add New Slide</button>
			</div>
			<div class="card-body">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Name</th>
							<th>Image</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($dashboards as $d)
						<tr>
							<td>{{$d->name}}</td>
							<td><img src="{{asset('/page/images/user/dashboard')}}/{{$d->url}}" class="img-fluid" style="width: 200px; height: 400px;"></td>
							<td><a href="{{url('/admin/user/dashboard/delete')}}/{{$d->id}}" class="btn btn-danger">Delete</a></td>
						</tr>	
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<div id="addModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add Slide</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" enctype="multipart/form-data" id="addForm">
        	{!!csrf_field()!!}
        	<div class="form-group">
				<label class="col-sm-2 control-label">Name</label>
				<div class="col-sm-12">
					<input type="text" class="form-control" name="name">
				</div>
			</div>
        	<div class="form-group">

				<label class="col-sm-2 control-label">Slide:</label>
				<div class="input-group col-sm-12">
					<input type="file" name="image" class="form-control" accept='image/*'>
				</div>
				@if ($errors->has('image'))
					<span class="help-block" style="color:red;">
						<strong>{{ $errors->first('image') }}</strong>
					</span>
				@endif

			</div>
        </form>
      </div>
      <div class="modal-footer">
      	<button type="button" class="btn btn-success" onclick="submit_form()">Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<script type="text/javascript">
	function submit_form(){
		var form = new FormData($("#addForm")[0]);
		$.ajax({
	      url:"{{url('admin/user/dashboard')}}",
	      data: form,
	      dataType:'json',
	      async:false,
	      type:'post',
	      processData: false,
	      contentType: false,
	      success:function(response){
	        console.log(response);
	        $('#addModal').modal('hide');
	      },
	    });
	}
</script>
@endsection