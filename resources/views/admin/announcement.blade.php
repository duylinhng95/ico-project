@extends('admin.layout', ['brandName' => $brand['brandName']->content, 'brandImg' => $brand['brandImg']->content])
@section('content-header')
<div class="row mb-2">
  <div class="col-sm-6">
    <h1 class="m-0 text-dark">Announcements</h1>
  </div><!-- /.col -->
</div>
@stop
@section('content')
<div class="row">
	<div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Announcement List</h3>
            <div class="card-tools">
            	<button class="btn btn-primary" data-target="#modalAnouncement" data-toggle="modal">Add new Announcement</button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <table class="table table-striped" id="table_announcement">
              	<tbody>
	              	<tr>
		                <th>Title</th>
                    <th>Description</th>
		                <th>Link</th>
		                <th>Action</th>
	             	</tr>
	             	@foreach($announcements as $a)
	             	<tr id="announcement{{$a->id}}">
	             		<td> {{$a->title}}</td>
                  <td> {{$a->description}} </td>
	             		<td> {{$a->link}} </td>
	             		<td style="vertical-align: middle; width: 15%;">
		                    <div style="margin: auto; text-align: center;">
		                      <button type="button" class="btn btn-success" onclick="editA({{$a->id}})">Edit</button>
		                      <button type="button" class="btn btn-danger" onclick="deleteA({{$a->id}})">Delete</button>
		                    </div>
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
<!-- Modal Form -->
<div id="modalAnouncement" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="display: block;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add New Announcement</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" enctype="multipart/form-data" id="formAnnouncement">
          {!!csrf_field()!!}
          <div class="form-group">
            <label class="col-sm-2 control-label">Title</label>

            <div class="col-sm-12">
              <input type="text" class="form-control" name="title">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Description</label>

            <div class="col-sm-12">
              <input type="text" class="form-control" name="description">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Link</label>

            <div class="col-sm-12">
              <input type="text" class="form-control" name="link">
            </div>
          </div>
      </div>
      </form>
      <div class="modal-footer">
        <button class="btn btn-default" data-dismiss="modal" onclick="saveAnnouncement()">Submit</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div id="modalEditA" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="display: block;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add New Announcement</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" enctype="multipart/form-data" id="formEdit">
          {!!csrf_field()!!}
          <div class="form-group">
            <label class="col-sm-2 control-label">Title</label>

            <div class="col-sm-12">
              <input type="text" class="form-control" name="title" id="titleA">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Description</label>
            <p>Maximum of 191 characters</p>
            <div class="col-sm-12">
              <input type="text" class="form-control" name="description" id="desA">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Link</label>

            <div class="col-sm-12">
              <input type="text" class="form-control" name="link" id="linkA">
            </div>
          </div>
      </div>
      </form>
      <div class="modal-footer">
        <button class="btn btn-default" data-dismiss="modal" id="submitButton">Submit</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
	function saveAnnouncement(){
		$.ajax({
			url:"{{url('admin/announcement/create')}}",
			data: new FormData($('#formAnnouncement')[0]),
			dataType:'json',
		    async:false,
		    type:'post',
		    processData: false,
		    contentType: false,
		     success:function(response){
		     	res = response.data;
		     	$('#table_announcement').find('tbody').append('<tr id="announcement'+res.id+'"><td>'+res.title+'</td><td>'+res.description+'</td><td>'+res.link+'</td><td style="vertical-align: middle; width: 15%;"><div style="margin: auto; text-align: center;"><button type="button" class="btn btn-success" onclick="editA('+res.id+')">Edit</button><button type="button" class="btn btn-danger" onclick="deleteA('+res.id+')">Delete</button></div></td></tr>')
		     },
		});
	};

	function editA(id){
		$.ajax({
			url:"{{url('admin/announcement/')}}/"+id,
			type: 'get',
			success:function(response){
				res = response.data;
				$("#titleA").val(res.title);
			    $("#linkA").val(res.link);
          $("#desA").val(res.description);
			    $("#submitButton").attr('onclick', "submitEditA("+res.id+")")
			    $("#modalEditA").modal('show');
			},
		});
	}

	function submitEditA(id){
		$.ajax({
			url:"{{url('admin/announcement/edit')}}/"+id,
			data: new FormData($('#formEdit')[0]),
			dataType:'json',
		    async:false,
		    type:'post',
		    processData: false,
		    contentType: false,
		    success:function(response){
		    	res = response.data;
		    	console.log(res);
		    	$('#table_announcement').find('#announcement'+id).html('<td>'+res.title+'</td><td>'+res.description+'</td><td>'+res.link+'</td><td style="vertical-align: middle; width: 15%;"><div style="margin: auto; text-align: center;"><button type="button" class="btn btn-success" onclick="editA('+id+')">Edit</button><button type="button" class="btn btn-danger" onclick="deleteA('+id+')">Delete</button></div></td>')
		    },
		});
	}

	function deleteA(id){
		$.ajax({
			url:"{{url('admin/announcement/delete')}}/"+id,
			type: 'get',
			success:function(response){
				$('#table_announcement').find('#announcement'+id).html('');
			}
		});
	}
</script>
@stop