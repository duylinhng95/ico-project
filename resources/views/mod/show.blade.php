<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{$user->name}}</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('css/user/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
    crossorigin="anonymous">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
        <!-- jQuery -->
    <script rel="javascript" type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</head>

<body style="background-color: white;">

    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">KYC Panel</h1>
            <div class="text-center">
                <button class="btn-lg btn-success" onclick="verifyUser({{$user->id}})"> Verify KYC for User</button>
            </div>
            <p style="font-weight: bold;">Thank you for filling your information. This information will be saved and can't be changed. If you want to change please contact to Moderator</p>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Step 1: Provide your information <span class="badge"> Success </span>
                </div>
                <div class="panel-body">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-sm-2">Email</label>

                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" name="email" value="{{$user->email}}" disabled="disabled">
                                    </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-2">Address</label>

                                  <div class="col-sm-12">
                                    <input type="text" class="form-control" name="address" placeholder="Your Address" disabled="disabled" value="{{$profile['address']}}">
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label class="col-sm-2">Country</label>

                                  <div class="col-sm-12">
                                    <select name="country" class="form-control">
                                        <option value="" disabled selected>{{$profile['country']}}</option>
                                    </select>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label class="col-sm-2">City</label>

                                  <div class="col-sm-12">
                                    <input type="text" class="form-control" name="city" placeholder="Your City"disabled="disabled" value="{{$profile['city']}}">
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label class="col-sm-6">Your Identify Card</label>

                                  <div class="col-sm-12">
                                    <input type="text" class="form-control" name="Identify" placeholder="Provide your identify card number" disabled="disabled" value="{{$profile['identify']}}">
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label class="col-sm-2">Phone</label>

                                  <div class="col-sm-12">
                                    <input type="number" class="form-control" name="phone" placeholder="Your Phone number" disabled="disabled" value="{{$profile['phone']}}">
                                  </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Step 2: Provide Your ID Image <span class="badge"> Success </span>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-12">Front Image</label>

                        <div class="col-sm-12">
                            <img src="{{$path.'/'.$kyc_image->front}}" class="img-thumbnail">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">Back Image</label>

                        <div class="col-sm-12">
                            <img src="{{$path.'/'.$kyc_image->back}}" class="img-thumbnail">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- /#wrapper -->
    <script type="text/javascript">
        function verifyUser(id){
            $.ajax({
                url: "{{url('mod/kyc')}}/"+id,
                type: "get",
                success: function(response){
                    window.close();
                }
            })
        }
    </script>
    <!-- Custom Theme JavaScript -->
    <script src="{{asset('js/user/sb-admin-2.js')}}"></script>

</body>

</html>
