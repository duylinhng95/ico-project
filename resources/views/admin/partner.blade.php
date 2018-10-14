<div class="row">
  <div class="col-lg-12">
    <div class="card card-info collapsed-card">
      <div class="card-header no-border">
        <h3 class="card-title">Page 6</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-plus"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <form class="form-horizontal" action="{{url('admin/homepage/page6')}}" method="post"  enctype="multipart/form-data">
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
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-info">Save</button>
          </div>
          <!-- /.card-footer -->
        </form>
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Partners List</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#partnerModal"><i class="fa fa-plus"></i></button>
          </button>
            </div>
          </div>
          <div class="card-body">
            <table class="table table-striped" id="table_partner">
              <tbody>
                <tr>
                  <th>Name</th>
                  <th>Link</th>
                  <th style="width: 20%;">Image</th>
                  <th>Action</th>
                </tr>
                @foreach ($page6['partner'] as $partner)
                <tr id="partner{{$partner->id}}">
                  <td>{{$partner->name}}</td>
                  <td>{{$partner->link}}</td>
                  <td><img class="img-thumbnail img-fluid"  alt="Timeline" src='{{asset("page/images/page6")."/".$partner->image }}'></td>
                  <td style="vertical-align: middle;">
                    <div style="margin: auto; text-align: center;">
                      <button type="button" class="btn btn-success" onclick="editPartner({{$partner->id}})">Edit</button>
                      <button type="button" class="btn btn-danger" onclick="deletePartner({{$partner->id}})">Delete</button>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<div id="partnerModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="display: block;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add New Partner</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" enctype="multipart/form-data" id="formPartner">
          {!!csrf_field()!!}
          <div class="form-group">
            <label class="col-sm-2 control-label">Name</label>

            <div class="col-sm-12">
              <input type="text" class="form-control" name="name">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Link</label>

            <div class="col-sm-12">
              <input type="text" class="form-control" name="link">
            </div>
          </div>
          <div class="form-group">
              <label class="col-sm-2 control-label">Partner Image:</label>
              <div class="input-group col-sm-12">
                <input type="file" name="image" class="form-control" accept='image/*'>
              </div>
               @if ($errors->has('image'))
                    <span class="help-block" style="color:red;">
                        <strong>{{ $errors->first('image') }}</strong>
                    </span>
               @endif
            </div>
      </div>
      </form>
      <div class="modal-footer">
        <button class="btn btn-default" id="createPartner" data-dismiss="modal">Submit</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div id="partnerModalEdit" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="display: block;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Partner</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" enctype="multipart/form-data" id="formEditPartner">
          {!!csrf_field()!!}
          <div class="form-group">
            <label class="col-sm-2 control-label">Name</label>

            <div class="col-sm-12">
              <input type="text" class="form-control" name="name" id="partnerName">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Link</label>

            <div class="col-sm-12">
              <input type="text" class="form-control" name="position" id="partnerLink">
            </div>
          </div>
          <div class="form-group">
              <label class="col-sm-2 control-label">Partner's Image:</label>
              <div class="col-sm-2">
                 <img class="img-thumbnail img-fluid" alt="Image" id="partnerImage">
               </div>
              <div class="input-group col-sm-12">
                <input type="file" name="image" class="form-control" accept='image/*'>
              </div>
               @if ($errors->has('image'))
                    <span class="help-block" style="color:red;">
                        <strong>{{ $errors->first('image') }}</strong>
                    </span>
               @endif
            </div>
      </div>
      </form>
      <div class="modal-footer">
        <button class="btn btn-default" data-dismiss="modal" id="submitEditPartner">Submit</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



<script>
  $(document).ready(function(){
  $("#createPartner").click(function(){
    $.ajax({
      url:"{{url('admin/homepage/page6/partner')}}",
      data:new FormData($("#formPartner")[0]),
      dataType:'json',
      async:false,
      type:'post',
      processData: false,
      contentType: false,
      success:function(response){
        console.log(response.data);
        res = response.data;
        $("#table_partner").find('tbody').append("<tr id='partner"+res.id+"'><td>"+res.name+"</td><td>"+res.link+"</td>"+'<td><img class="img-thumbnail img-fluid"  alt="Timeline" src="{{asset("page/images/page5")}}'+'/'+res.avatar+'"></td>'+"<td style='vertical-align: middle;'> <div style='margin: auto; text-align: center;'><button type='button' class='btn btn-success' onclick='editPartner("+res.id+")'>Edit</button> <button type='button' class='btn btn-danger' onclick='deletePartner("+res.id+")'>Delete</button></div></td><tr>");
      },
    });
  });
});
// Edit Form
function editPartner(id){
  $.ajax({
    url:"{{url('admin/homepage/page6/partner')}}/"+id,
    type: 'get',
    processData: false,
    contentType: false,
    success:function(response){
      var res = response.data;
      $("#partnerName").val(res.name);
      $("#partnerLink").val(res.link);
      $("#partnerImage").attr('src','{{asset("page/images/page6")}}/'+res.image);
      $("#submitEditPartner").attr('onclick','updatePartner('+res.id+')');
      $("#partnerModalEdit").modal('show');
    },
  });
};
// Update Partner
function updatePartner(id){
  $.ajax({
      url:"{{url('admin/homepage/page6/partner')}}/"+id,
      data:new FormData($("#formEditPartner")[0]),
      dataType:'json',
      async:false,
      type:'post',
      processData: false,
      contentType: false,
      success:function(response){
        res = response.data;
        $("#table_partner").find('#partner'+id).html("<td>"+res.name+"</td><td>"+res.link+"</td>"+'<td><img class="img-thumbnail img-fluid"  alt="Timeline" src="{{asset("page/images/page5")}}'+'/'+res.avatar+'"></td>'+"</td>"+"<td style='vertical-align: middle;'> <div style='margin: auto; text-align: center;'><button type='button' class='btn btn-success' onclick='editPartner("+id+")'>Edit</button> <button type='button' class='btn btn-danger' onclick='deletePartner("+id+")'>Delete</button></div></td>");
      },
  });
};
function deletePartner(id){
  $.ajax({
    url:"{{url('admin/homepage/page6/partner')}}/"+id+"/delete",
      dataType:'json',
      async:false,
      type:'get',
      processData: false,
      contentType: false,
      success:function(response){
        console.log(response);
        $("#table_partner").find('#partner'+id).html(" ");
      },
  });
}
</script>