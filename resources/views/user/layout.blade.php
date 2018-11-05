<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{$user->name}} User Panel</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{asset('/plugins/metisMenu/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('css/user/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
    crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand" href="/user/"><img class="img-responsive" src="{{asset('/page/images/brand')}}/{{$brand->content}}" style="max-width: 30px; display:inline-block; margin-right: 15px;">{{$brandName->content}}</a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <div class="text-center">
                            <li>
                                <h4>{{$user->name}}</h4>
                                @if($user->is_profile == 1)
                                <p>KYC is not verified <a href="/user/kyc">Verify KYC</a></p>
                                @else
                                <p>Please include your <a style="color: blue;" href="/user/profile">information</a>
                                @endif
                                <h2>0 <span>YT<span></h2>
                            </li>                            
                        </div>
                        <li>
                            <a href="/user/"><i class="fa fa-tachometer-alt fa-fw"></i> Dashboard</span></a>
                        </li>
                        <li>
                            <a href="/user/profile"><i class="fa fa-user fa-fw"></i> Profile</span></a>
                        </li> 
                        <li>
                            <a href="/user/referral"><i class="fa fa-list-ul fa-fw"></i> Referral</span></a>
                        </li> 
                        <li>
                            <a @if($user->is_profile == 1) href='/user/kyc' @else class="disabled"  @endif><i class="fa fa-user-shield fa-fw"></i> KYC</a>
                        </li>
                        <li>
                            <a href='#' class="disabled"><i class="fa fa-coins fa-fw"></i>Token Sale</a>
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

    <!-- jQuery -->
    <script rel="javascript" type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset('plugins/metisMenu/metisMenu.min.js')}}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{asset('js/user/sb-admin-2.js')}}"></script>

</body>

</html>
