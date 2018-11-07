<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{$user->name}} Moderator Panel</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('css/user/sb-admin-2.css')}}" rel="stylesheet">
    <link href="{{asset('/plugins/metisMenu/metisMenu.min.css')}}" rel="stylesheet">

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

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            <div class="sidebar" role="navigation" style="margin-top: 0px !important;">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <div class="text-center" style="background-color: #333333;">
                            <li>
                                <a><img src="{{asset('/page/images/brand')}}/{{$brand->content}}" style="display: inline-block; width: 10vh; height: 10vh; margin: 2vh 0;"></a>
                                <!-- /input-group -->
                            </li>
                        </div>
                        <li>
                            <a href="#"><i class="fa fa-list-ul fa-fw"></i> User List</span></a>
                            <!-- /.nav-second-level -->
                        </li> 
                        <li>
                            <a class="nav-link" href="{{ route('logout') }}"
                                                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();"><i class="fa fa-sign-out-alt fa-fw"></i> Logout</a>
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                {{ csrf_field() }}
                                                            </form>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            @yield('content')
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Custom Theme JavaScript -->
    <script src="{{asset('js/user/sb-admin-2.js')}}"></script>

</body>

</html>
