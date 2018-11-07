@extends('admin.layout', ['brandName' => $brand['brandName']->content, 'brandImg' => $brand['brandImg']->content])
@section('content-header')
<div class="row mb-2">
  <div class="col-sm-6">
    <h1 class="m-0 text-dark">Homepage Config</h1>
  </div><!-- /.col -->
</div>
@stop
@section('content')
<!-- Page 1 HTML -->
<div class="row">
  <div class="col-lg-12">
    <div class="card card-info collapsed-card">
      <div class="card-header no-border">
        <h3 class="card-title">Brand Config</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-plus"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <form class="form-horizontal" action="{{url('admin/homepage/brand')}}" method="post" enctype="multipart/form-data">
          {!!csrf_field()!!}
            <div class="form-group">
              <label class="col-sm-2 control-label">Brand Name</label>

              <div class="col-sm-12">
                <input type="text" class="form-control" name="brandName" value="{{$brand['brandName']->content}}">
              </div>
            </div>
            <div class="form-group">
              <label>Brand Image:</label>
              <p>Logo must be 300x370</p>
              <div class="input-group col-sm-6">
                <input type="file" name="brandImg" class="form-control" accept='image/*'>
              </div>
               @if ($errors->has('brandImg'))
                    <span class="help-block" style="color:red;">
                        <strong>{{ $errors->first('brandImg') }}</strong>
                    </span>
               @endif
            </div>
            <div class="form-group">
              <label>Preview Brand Image:</label>
              <div class="col-sm-2">
                 <img class="img-thumbnail img-fluid" src="{{asset('page/images/brand').'/'.$brand['brandImg']->content}}" alt="brandImg">
               </div>
            </div>
            <div class="form-group">
              <label>Telegram China Link:</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-telegram"></i>&nbsp China</span>
                </div>
                <input type="text" name="telegramChina" class="form-control" value="{{$brand['telegramChina']->content}}">
              </div>
            </div>
            <div class="form-group">
              <label>Telegram Global Link:</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-telegram"></i>&nbsp Global</span>
                </div>
                <input type="text" name="telegramGlobal" class="form-control" value="{{$brand['telegramGlobal']->content}}">
              </div>
            </div>
            <div class="form-group">
              <label>Telegram Korea Link:</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-telegram"></i>&nbsp Korea</span>
                </div>
                <input type="text" name="telegramKorea" class="form-control" value="{{$brand['telegramKorea']->content}}">
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
</div><!-- Page 1 HTML -->
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
        <form class="form-horizontal" action="{{url('admin/homepage/page1')}}" method="post" enctype="multipart/form-data">
          {!!csrf_field()!!}
          <input type="hidden" name="section" value="page1">
            <div class="form-group">
              <label class="col-sm-2 control-label">Title line 1</label>

              <div class="col-sm-12">
                <input type="text" class="form-control" name="title1" value="{{$page1['title1']->content}}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Title line 2</label>

              <div class="col-sm-12">
                <input type="text" class="form-control" name="title2" value="{{$page1['title2']->content}}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Description</label>

              <div class="col-sm-12">
                <input type="text" class="form-control" name="description" value="{{$page1['description']->content}}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Link Video</label>

              <div class="col-sm-12">
                <input type="text" class="form-control" name="linkvideo" value="{{$page1['linkvideo']->content}}">
              </div>
            </div>
            <div class="form-group">
              <label>Background Image:</label>
              <p>Background Image must be 800x600</p>
              <div class="input-group col-sm-6">
                <input type="file" name="background" class="form-control" accept='image/*'>
              </div>
               @if ($errors->has('background'))
                    <span class="help-block" style="color:red;">
                        <strong>{{ $errors->first('background') }}</strong>
                    </span>
               @endif
            </div>
            <div class="form-group">
              <label>Preview Background Image:</label>
              <div class="col-sm-2">
                 <img class="img-thumbnail img-fluid" src="{{asset('page/images/page1').'/'.$page1['background']->content}}" alt="background">
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
        <form class="form-horizontal" action="{{url('admin/homepage/page1')}}" method="post">
          {!!csrf_field()!!}
          <input type="hidden" name="section" value="social">
            <div class="form-group">
              <label>Facebook:</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-facebook-official"></i></span>
                </div>
                <input type="text" name="facebook" class="form-control" value="{{$social['facebook']->content}}">
              </div>
            </div>
            <div class="form-group">
              <label>Reddit:</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-reddit"></i></span>
                </div>
                <input type="text" name="reddit" class="form-control" value="{{$social['reddit']->content}}">
              </div>
            </div>
            <div class="form-group">
              <label>Telegram:</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-telegram"></i></span>
                </div>
                <input type="text" name="telegram" class="form-control" value="{{$social['telegram']->content}}">
              </div>
            </div>
            <div class="form-group">
              <label>Twitter:</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-twitter"></i></span>
                </div>
                <input type="text" name="twitter" class="form-control" value="{{$social['twitter']->content}}">
              </div>
            </div>
            <div class="form-group">
              <label>Bitcointalk:</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-bitcoin"></i></span>
                </div>
                <input type="text" name="bitcointalk" class="form-control" value="{{$social['bitcointalk']->content}}">
              </div>
            </div>
            <div class="form-group">
              <label>Medium:</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-medium"></i></span>
                </div>
                <input type="text" name="medium" class="form-control" value="{{$social['medium']->content}}">
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
                <input type="text" name="title1" class="form-control" value="{{$page2['title1']->content}}">
              </div>
            </div>
            <div class="form-group">
              <label>Description1:</label>
              <div class="input-group">
                <input type="text" name="description1" class="form-control" value="{{$page2['description1']->content}}">
              </div>
            </div>
            <div class="form-group">
              <label>Title2:</label>
              <div class="input-group">
                <input type="text" name="title2" class="form-control" value="{{$page2['title2']->content}}"> 
              </div>
            </div>
            <div class="form-group">
              <label>Description2:</label>
              <div class="input-group">
                <input type="text" name="description2" class="form-control" value="{{$page2['description2']->content}}">
              </div>
            </div>
            <div class="form-group">
              <label>Whitepaper:</label>
              <div class="input-group">
                <input type="text" name="whitepaper" class="form-control" value="{{$page2['whitepaper']->content}}">
              </div>
            </div>
            <div class="form-group">
              <label>Image1:</label>
              <p>Image 1 must be 800x600</p>
              <div class="input-group col-sm-6">
                <input type="file" name="image1" class="form-control" accept='image/*'>
              </div>
               @if ($errors->has('image1'))
                    <span class="help-block" style="color:red;">
                        <strong>{{ $errors->first('image1') }}</strong>
                    </span>
               @endif
            </div>
            <div class="form-group">
              <label>Preview Image 1:</label>
              <div class="col-sm-2">
                 <img class="img-thumbnail img-fluid" src="{{asset('page/images/page2').'/'.$page2['image1']->content}}" alt="Image 1">
               </div>
            </div>
            <!-- Image 2 -->
            <div class="form-group">
              <label>Image2:</label>
              <p>Image 2 must be 800x600</p>
              <div class="input-group col-sm-6">
                <input type="file" name="image2" class="form-control" accept='image/*'>
              </div>
              @if ($errors->has('image2'))
                    <span class="help-block" style="color:red;">
                        <strong>{{ $errors->first('image2') }}</strong>
                    </span>
               @endif
            </div>
            <div class="form-group">
              <label>Preview Image 2:</label>
              <div class="col-sm-2">
                 <img class="img-thumbnail img-fluid" src="{{asset('page/images/page2').'/'.$page2['image2']->content}}" alt="Image 2">
               </div>
            </div>
            <!-- Image 3 -->
            <div class="form-group">
              <label>Image3:</label>
              <p>Image 3 must be 800x600</p>
              <div class="input-group col-sm-6">
                <input type="file" name="image3" class="form-control" accept='image/*'>
              </div>
              @if ($errors->has('image3'))
                    <span class="help-block" style="color:red;">
                        <strong>{{ $errors->first('image3') }}</strong>
                    </span>
               @endif
            </div>
            <div class="form-group">
              <label>Preview Image 3:</label>
              <div class="col-sm-2">
                 <img class="img-thumbnail img-fluid" src="{{asset('page/images/page2').'/'.$page2['image3']->content}}" alt="Image 3">
               </div>
            </div>
            <!-- Image 4 -->
            <div class="form-group">
              <label>Image4:</label>
              <p>Image 4 must be 800x600</p>
              <div class="input-group col-sm-6">
                <input type="file" name="image4" class="form-control" accept='image/*'>
              </div>
              @if ($errors->has('image4'))
                    <span class="help-block" style="color:red;">
                        <strong>{{ $errors->first('image4') }}</strong>
                    </span>
               @endif
            </div>
            <div class="form-group">
              <label>Preview Image 4:</label>
              <div class="col-sm-2">
                 <img class="img-thumbnail img-fluid" src="{{asset('page/images/page2').'/'.$page2['image4']->content}}" alt="Image 4">
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
<!-- Page 3 -->
<div class="row">
  <div class="col-lg-12">
    <div class="card card-info collapsed-card">
      <div class="card-header no-border">
        <h3 class="card-title">Page 3</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-plus"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <form class="form-horizontal" action="{{url('admin/homepage/page3')}}" method="post"  enctype="multipart/form-data">
          {!!csrf_field()!!}
          <!-- Part 1 -->
            <div class="form-group">
              <label class="col-sm-2 control-label">Logo 1:</label>
              <p>Logo 1 must be 420x350</p>
              <div class="input-group col-sm-12">
                <input type="file" name="logo1" class="form-control" accept='image/*'>
              </div>
               @if ($errors->has('logo1'))
                    <span class="help-block" style="color:red;">
                        <strong>{{ $errors->first('logo1') }}</strong>
                    </span>
               @endif
            </div>
            <div class="form-group">
              <label>Preview Logo 1:</label>
              <div class="col-sm-2">
                 <img class="img-thumbnail img-fluid" src="{{asset('page/images/page3').'/'.$page3['logo1']->content}}" alt="Logo 1">
               </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Title line 1</label>

              <div class="col-sm-12">
                <input type="text" class="form-control" name="title1" value="{{$page3['title1']->content}}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Description 1</label>

              <div class="col-sm-12">
                <input type="text" class="form-control" name="description1" value="{{$page3['description1']->content}}">
              </div>
            </div>
            <!-- Part 2 -->
            <div class="form-group">
              <label class="col-sm-2 control-label">Logo 2:</label>
              <p>Logo 2 must be 420x350</p>
              <div class="input-group col-sm-12">
                <input type="file" name="logo2" class="form-control" accept='image/*'>
              </div>
               @if ($errors->has('logo2'))
                    <span class="help-block" style="color:red;">
                        <strong>{{ $errors->first('logo2') }}</strong>
                    </span>
               @endif
            </div>
            <div class="form-group">
              <label>Preview Logo 2:</label>
              <div class="col-sm-2">
                 <img class="img-thumbnail img-fluid" src="{{asset('page/images/page3').'/'.$page3['logo2']->content}}" alt="Logo 2">
               </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Title line 2</label>

              <div class="col-sm-12">
                <input type="text" class="form-control" name="title2"  value="{{$page3['title2']->content}}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Description 2</label>

              <div class="col-sm-12">
                <input type="text" class="form-control" name="description2"  value="{{$page3['description2']->content}}">
              </div>
            </div>
            <!-- Part 3 -->
            <div class="form-group">
              <label class="col-sm-2 control-label">Logo 3:</label>
              <div class="input-group col-sm-12">
                <input type="file" name="logo3" class="form-control" accept='image/*'>
              </div>
               @if ($errors->has('logo3'))
                    <span class="help-block" style="color:red;">
                        <strong>{{ $errors->first('logo3') }}</strong>
                    </span>
               @endif
            </div>
            <div class="form-group">
              <label>Preview Logo 3:</label>
              <p>Logo 3 must be 420x350</p>
              <div class="col-sm-2">
                 <img class="img-thumbnail img-fluid" src="{{asset('page/images/page3').'/'.$page3['logo3']->content}}" alt="Logo 3">
               </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Title line 3</label>

              <div class="col-sm-12">
                <input type="text" class="form-control" name="title3" value="{{$page3['title3']->content}}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Description 3</label>

              <div class="col-sm-12">
                <input type="text" class="form-control" name="description3" value="{{$page3['description3']->content}}">
              </div>
            </div>
            <!-- Part 4 -->
            <div class="form-group">
              <label class="col-sm-2 control-label">Logo 4:</label>
              <p>Logo 4 must be 420x350</p>
              <div class="input-group col-sm-12" >
                <input type="file" name="logo4" class="form-control" accept='image/*'>
              </div>
               @if ($errors->has('logo4'))
                    <span class="help-block" style="color:red;">
                        <strong>{{ $errors->first('logo4') }}</strong>
                    </span>
               @endif
            </div>
            <div class="form-group">
              <label>Preview Logo 4:</label>
              <div class="col-sm-2">
                 <img class="img-thumbnail img-fluid" src="{{asset('page/images/page3').'/'.$page3['logo4']->content}}" alt="Logo 4">
               </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Title line 4</label>

              <div class="col-sm-12">
                <input type="text" class="form-control" name="title4" value="{{$page3['title4']->content}}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Description 4</label>

              <div class="col-sm-12">
                <input type="text" class="form-control" name="description4" value="{{$page3['description4']->content}}">
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
<!-- Page 4 -->
<div class="row">
  <div class="col-lg-12">
    <div class="card card-info collapsed-card">
      <div class="card-header no-border">
        <h3 class="card-title">Page 4</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-plus"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <form class="form-horizontal" action="{{url('admin/homepage/page4')}}" method="post"  enctype="multipart/form-data">
          {!!csrf_field()!!}
            <div class="form-group">
              <label class="col-sm-2 control-label">Timeline Image:</label>
              <p>Timeline Image must be 1000x350</p>
              <div class="input-group col-sm-12">
                <input type="file" name="timeline" class="form-control" accept='image/*'>
              </div>
               @if ($errors->has('timeline'))
                    <span class="help-block" style="color:red;">
                        <strong>{{ $errors->first('timeline') }}</strong>
                    </span>
               @endif
            </div>
            <div class="form-group">
              <label>Preview Timeline image:</label>
              <div class="col-sm-6">
                 <img class="img-thumbnail img-fluid"  alt="Timeline" src="{{asset('page/images/page4').'/'.$page4['timeline']->content}}">
               </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Title</label>

              <div class="col-sm-12">
                <input type="text" class="form-control" name="title" value="{{$page4['title']->content}}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Description</label>

              <div class="col-sm-12">
                <input type="text" class="form-control" name="description" value="{{$page4['description']->content}}">
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
<!-- Page 5 -->
<div class="row">
  <div class="col-lg-12">
    <div class="card card-info collapsed-card">
      <div class="card-header no-border">
        <h3 class="card-title">Page 5</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-plus"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <form class="form-horizontal" action="{{url('admin/homepage/page5')}}" method="post"  enctype="multipart/form-data">
          {!!csrf_field()!!}
            <div class="form-group">
              <label class="col-sm-2 control-label">Title</label>

              <div class="col-sm-12">
                <input type="text" class="form-control" name="title" value="{{$page5['title']->content}}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Description</label>

              <div class="col-sm-12">
                <input type="text" class="form-control" name="description" value="{{$page5['description']->content}}">
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
            <h3 class="card-title">Advisors List</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#advisorModal"><i class="fa fa-plus"></i></button>
          </button>
            </div>
          </div>
          <div class="card-body">
            <table class="table table-striped" id="table_advisor">
              <tbody>
                <tr>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Description</th>
                  <th style="width: 20%;">Image</th>
                  <th>Link Social</th>
                  <th>Action</th>
                </tr>
                @foreach ($page5['advisor'] as $advisor)
                <tr id="advisor{{$advisor->id}}">
                  <td>{{$advisor->name}}</td>
                  <td>{{$advisor->position}}</td>
                  <td>{{$advisor->description}}</td>
                  <td><img class="img-thumbnail img-fluid"  alt="Avatar" src='{{asset("page/images/page5")."/".$advisor->avatar }}'></td>
                  <td>{{$advisor->link}}</td>
                  <td style="vertical-align: middle;">
                    <div style="margin: auto; text-align: center;">
                      <button type="button" class="btn btn-success" onclick="editAdvisor({{$advisor->id}})">Edit</button>
                      <button type="button" class="btn btn-danger" onclick="deleteAdvisor({{$advisor->id}})">Delete</button>
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
<!-- Page 6 -->
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
                <input type="text" class="form-control" name="title" value="{{$page6['title']->content}}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Description</label>

              <div class="col-sm-12">
                <input type="text" class="form-control" name="description" value="{{$page6['description']->content}}">
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
<!-- Modal Page 5 -->
<div id="advisorModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="display: block;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add New Advisor</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" enctype="multipart/form-data" id="formAdvisor">
          {!!csrf_field()!!}
          <div class="form-group">
            <label class="col-sm-2 control-label">Name</label>

            <div class="col-sm-12">
              <input type="text" class="form-control" name="name">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Position</label>

            <div class="col-sm-12">
              <input type="text" class="form-control" name="position">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Description</label>

            <div class="col-sm-12">
              <input type="text" class="form-control" name="description">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-4 control-label">Link Social</label>

            <div class="col-sm-12">
              <input type="text" class="form-control" name="link">
            </div>
          </div>

          <div class="form-group">
              <label class="col-sm-2 control-label">Avatar:</label>
              <div class="input-group col-sm-12">
                <input type="file" name="avatar" class="form-control" accept='image/*'>
              </div>
               @if ($errors->has('avatar'))
                    <span class="help-block" style="color:red;">
                        <strong>{{ $errors->first('avatar') }}</strong>
                    </span>
               @endif
            </div>
      </div>
      </form>
      <div class="modal-footer">
        <button class="btn btn-default" id="createAdvisor" data-dismiss="modal">Submit</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div id="advisorModalEdit" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="display: block;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Advisor</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" enctype="multipart/form-data" id="formEditAdvisor">
          {!!csrf_field()!!}
          <div class="form-group">
            <label class="col-sm-2 control-label">Name</label>

            <div class="col-sm-12">
              <input type="text" class="form-control" name="name" id="advisorName">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Position</label>

            <div class="col-sm-12">
              <input type="text" class="form-control" name="position" id="advisorPosition">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Description</label>

            <div class="col-sm-12">
              <input type="text" class="form-control" name="description" id="advisorDescription">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Link Social</label>

            <div class="col-sm-12">
              <input type="text" class="form-control" name="link">
            </div>
          </div>
          <div class="form-group">
              <label class="col-sm-2 control-label">Avatar:</label>
              <div class="col-sm-2">
                 <img class="img-thumbnail img-fluid" alt="Avatar" id="advisorAvatar">
               </div>
              <div class="input-group col-sm-12">
                <input type="file" name="avatar" class="form-control" accept='image/*'>
              </div>
               @if ($errors->has('avatar'))
                    <span class="help-block" style="color:red;">
                        <strong>{{ $errors->first('avatar') }}</strong>
                    </span>
               @endif
            </div>
      </div>
      </form>
      <div class="modal-footer">
        <button class="btn btn-default" data-dismiss="modal" id="submitEditAdvisor">Submit</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- End Modal Page 5 -->
<!-- Modal Page 6 -->
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
              <label class="col-sm-4 control-label">Partner's Image:</label>
              <div class="input-group col-sm-12">
                <input type="file" name="imageP" class="form-control" accept='image/*'>
              </div>
               @if ($errors->has('imageP'))
                    <span class="help-block" style="color:red;">
                        <strong>{{ $errors->first('imageP') }}</strong>
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
              <input type="text" class="form-control" name="link" id="partnerLink">
            </div>
          </div>
          <div class="form-group">
              <label class="col-sm-4 control-label">Partner's Image:</label>
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
<!-- End Modal Page 6 -->
<!-- Script for Page 5 -->
<script>
$(document).ready(function(){
  $("#createAdvisor").click(function(){
    var data = new FormData();
    $.ajax({
      url:"{{url('admin/homepage/page5/advisor')}}",
      data:new FormData($("#formAdvisor")[0]),
      dataType:'json',
      async:false,
      type:'post',
      processData: false,
      contentType: false,
      success:function(response){
        console.log(response.data);
        res = response.data;
        $("#table_advisor").find('tbody').append("<tr id='advisor"+res.id+"'><td>"+res.name+"</td><td>"+res.position+"</td>"+"<td>"+res.description+"</td>"+'<td><img class="img-thumbnail img-fluid"  alt="Timeline" src="{{asset("page/images/page5")}}'+'/'+res.avatar+'"></td>'+"<td>"+res.link+"</td>"+"<td style='vertical-align: middle;'> <div style='margin: auto; text-align: center;'><button type='button' class='btn btn-success' onclick='editAdvisor("+res.id+")'>Edit</button> <button type='button' class='btn btn-danger' onclick='deleteAdvisor("+res.id+")'>Delete</button></div></td><tr>");
      },
    });
  });
});
// Edit Form
function editAdvisor(id){
  $.ajax({
    url:"{{url('admin/homepage/page5/advisor')}}/"+id,
    type: 'get',
    processData: false,
    contentType: false,
    success:function(response){
      var res = response.data;
      $("#advisorName").val(res.name);
      $("#advisorPosition").val(res.position);
      $("#advisorDescription").val(res.description);
      $("#advisorAvatar").attr('src','{{asset("page/images/page5")}}/'+res.avatar);
      $("#submitEditAdvisor").attr('onclick','updateAdvisor('+res.id+')');
      $("#advisorModalEdit").modal('show');
    },
  });
};
// Update Advisor
function updateAdvisor(id){
  $.ajax({
      url:"{{url('admin/homepage/page5/advisor')}}/"+id,
      data:new FormData($("#formEditAdvisor")[0]),
      dataType:'json',
      async:false,
      type:'post',
      processData: false,
      contentType: false,
      success:function(response){
        res = response.data;
        $("#table_advisor").find('#advisor'+id).html("<td>"+res.name+"</td><td>"+res.position+"</td>"+"<td>"+res.description+"</td>"+'<td><img class="img-thumbnail img-fluid"  alt="Timeline" src="{{asset("page/images/page5")}}'+'/'+res.avatar+'"></td>'+"<td>"+res.link+"</td>"+"<td style='vertical-align: middle;'> <div style='margin: auto; text-align: center;'><button type='button' class='btn btn-success' onclick='editAdvisor("+id+")'>Edit</button> <button type='button' class='btn btn-danger' onclick='deleteAdvisor("+id+")'>Delete</button></div></td>");
      },
  });
};
function deleteAdvisor(id){
  $.ajax({
      url:"{{url('admin/homepage/page5/advisor')}}/"+id+"/delete",
      dataType:'json',
      async:false,
      type:'get',
      processData: false,
      contentType: false,
      success:function(response){
        console.log(response);
        $("#table_advisor").find('#advisor'+id).html(" ");
      },
  });
}
</script>
<!-- Script for page 6 -->
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
        $("#table_partner").find('tbody').append("<tr id='partner"+res.id+"'><td>"+res.name+"</td><td>"+res.link+"</td>"+'<td><img class="img-thumbnail img-fluid"  alt="Timeline" src="{{asset("page/images/page6")}}'+'/'+res.image+'"></td>'+"<td style='vertical-align: middle;'> <div style='margin: auto; text-align: center;'><button type='button' class='btn btn-success' onclick='editPartner("+res.id+")'>Edit</button> <button type='button' class='btn btn-danger' onclick='deletePartner("+res.id+")'>Delete</button></div></td><tr>");
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
        $("#table_partner").find('#partner'+id).html("<td>"+res.name+"</td><td>"+res.link+"</td>"+'<td><img class="img-thumbnail img-fluid"  alt="Timeline" src="{{asset("page/images/page6")}}'+'/'+res.image+'"></td>'+"</td>"+"<td style='vertical-align: middle;'> <div style='margin: auto; text-align: center;'><button type='button' class='btn btn-success' onclick='editPartner("+id+")'>Edit</button> <button type='button' class='btn btn-danger' onclick='deletePartner("+id+")'>Delete</button></div></td>");
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
@stop