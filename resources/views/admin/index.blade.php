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
        <form class="form-horizontal">
            <div class="form-group">
              <label class="col-sm-2 control-label">Title line 1</label>

              <div class="col-sm-12">
                <input type="text" class="form-control" name="title1">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Title line 2</label>

              <div class="col-sm-12">
                <input type="text" class="form-control" name="title2">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Description</label>

              <div class="col-sm-12">
                <input type="text" class="form-control" name="description">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Link Video</label>

              <div class="col-sm-12">
                <input type="text" class="form-control" name="linkvideo">
              </div>
            </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-info">Sign in</button>
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
      <div class="card-body" style="display: block;">
        <form class="form-horizontal">
            <div class="form-group">
              <label>Reddit:</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-reddit"></i></span>
                </div>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label>Telegram:</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-telegram"></i></span>
                </div>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label>Twitter:</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-twitter"></i></span>
                </div>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label>Bitcointalk:</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-bitcoin"></i></span>
                </div>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label>Medium:</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-medium"></i></span>
                </div>
                <input type="text" class="form-control">
              </div>
            </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-info">Sign in</button>
            <button type="submit" class="btn btn-default float-right">Cancel</button>
          </div>
          <!-- /.card-footer -->
        </form>
      </div>
    </div>
  </div>
</div>
@stop