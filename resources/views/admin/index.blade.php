@extends('admin.layout')
@section('content-header')
<div class="row mb-2">
  <div class="col-sm-6">
    <h1 class="m-0 text-dark">Dashboard</h1>
  </div><!-- /.col -->
</div>
@stop
@section('content')
<!-- Page 1 HTML -->
<div class="row">
  <div class="col-lg-12">
    <div class="card card-info collapsed-card">
      <div class="card-header no-border">
        <h3 class="card-title">Page 1</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-plus"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <form class="form-horizontal" action="{{url('admin/homepage/data_without_url')}}" method="post">
          {!!csrf_field()!!}
          <input type="hidden" name="section" value="social">
            <div class="form-group">
              <label class="col-sm-2 control-label">Title line 1</label>

              <div class="col-sm-12">
                <input type="text" class="form-control" name="title1" value="{{$page1[0]->content}}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Title line 2</label>

              <div class="col-sm-12">
                <input type="text" class="form-control" name="title2" value="{{$page1[1]->content}}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Description</label>

              <div class="col-sm-12">
                <input type="text" class="form-control" name="description" value="{{$page1[2]->content}}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Link Video</label>

              <div class="col-sm-12">
                <input type="text" class="form-control" name="linkvideo" value="{{$page1[3]->content}}">
              </div>
            </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-info">Save</button>
          </div>
          <!-- /.card-footer -->
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Social -->
<div class="row">
  <div class="col-lg-12">
    <div class="card card-info collapsed-card">
      <div class="card-header no-border">
        <h3 class="card-title">Social Links</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-plus"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <form class="form-horizontal" action="{{url('admin/homepage/data_without_url')}}" method="post">
          {!!csrf_field()!!}
          <input type="hidden" name="section" value="social">
            <div class="form-group">
              <label>Reddit:</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-reddit"></i></span>
                </div>
                <input type="text" name="reddit" class="form-control" value="{{$social[0]->content}}">
              </div>
            </div>
            <div class="form-group">
              <label>Telegram:</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-telegram"></i></span>
                </div>
                <input type="text" name="telegram" class="form-control" value="{{$social[0]->content}}">
              </div>
            </div>
            <div class="form-group">
              <label>Twitter:</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-twitter"></i></span>
                </div>
                <input type="text" name="twitter" class="form-control" value="{{$social[0]->content}}">
              </div>
            </div>
            <div class="form-group">
              <label>Bitcointalk:</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-bitcoin"></i></span>
                </div>
                <input type="text" name="bitcointalk" class="form-control" value="{{$social[0]->content}}">
              </div>
            </div>
            <div class="form-group">
              <label>Medium:</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-medium"></i></span>
                </div>
                <input type="text" name="medium" class="form-control" value="{{$social[0]->content}}">
              </div>
            </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-info">Save</button>
          </div>
          <!-- /.card-footer -->
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Page 2 -->
<div class="row">
  <div class="col-lg-12">
    <div class="card card-info collapsed-card">
      <div class="card-header no-border">
        <h3 class="card-title">Page 2</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-plus"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <form class="form-horizontal" action="{{url('admin/homepage/page2')}}" method="post" enctype="multipart/form-data">
          {!!csrf_field()!!}
            <div class="form-group">
              <label>Title1:</label>
              <div class="input-group">
                <input type="text" name="title1" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label>Description1:</label>
              <div class="input-group">
                <input type="text" name="description1" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label>Title2:</label>
              <div class="input-group">
                <input type="text" name="title2" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label>Description2:</label>
              <div class="input-group">
                <input type="text" name="description2" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label>Whitepaper:</label>
              <div class="input-group">
                <input type="text" name="whitepaper" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label>Image1:</label>
              <div class="input-group">
                <input type="file" name="image1" class="form-control" accept='image/*'>
              </div>
               @if ($errors->has('image1'))
                    <span class="help-block" style="color:red;">
                        <strong>{{ $errors->first('image1') }}</strong>
                    </span>
               @endif
            </div>
            <div class="form-group">
              <label>Image2:</label>
              <div class="input-group">
                <input type="file" name="image2" class="form-control" accept='image/*'>
              </div>
              @if ($errors->has('image2'))
                    <span class="help-block" style="color:red;">
                        <strong>{{ $errors->first('image2') }}</strong>
                    </span>
               @endif
            </div>
            <div class="form-group">
              <label>Image3:</label>
              <div class="input-group">
                <input type="file" name="image3" class="form-control" accept='image/*'>
              </div>
              @if ($errors->has('image3'))
                    <span class="help-block" style="color:red;">
                        <strong>{{ $errors->first('image3') }}</strong>
                    </span>
               @endif
            </div>
            <div class="form-group">
              <label>Image4:</label>
              <div class="input-group">
                <input type="file" name="image4" class="form-control" accept='image/*'>
              </div>
              @if ($errors->has('image4'))
                    <span class="help-block" style="color:red;">
                        <strong>{{ $errors->first('image4') }}</strong>
                    </span>
               @endif
            </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-info">Save</button>
          </div>
          <!-- /.card-footer -->
        </form>
      </div>
    </div>
  </div>
</div>
@stop