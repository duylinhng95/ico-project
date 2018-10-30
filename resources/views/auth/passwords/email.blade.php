<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Reset password </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
    crossorigin="anonymous">
  <!-- <link rel="stylesheet" type="text/css" href="vendors/css/bootstrap-reboot.min.css"> -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
  <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

  <link href="{{ asset('landing-page/resources/css/styles.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landing-page/resources/css/queries.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landing-page/resources/css/login.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landing-page/resources/css/login-queries.min.css') }}" rel="stylesheet">

  

</head>

<body>
  <div class="fluid-container w-100">
    <div class=" login-wrapper">
                
    <div  id="register-box" class="login-box register " style="max-width: 550px;">
        <a href="/">
            <img src="{{asset('page/images/brand').'/'.$brand['brandImg']->content}}" alt="logo" class="img-fluid logo">
         </a>
         @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <form class="login-form" method="POST" action="{{ route('password.email') }}">
            {{ csrf_field() }}
            <p style="text-align: left;">
            Enter your email address and we will send you a link to reset your password.
            </p>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="input-wrap">
                    
                <input  class="form-control"
                        id="email"  value="{{ old('email') }}" required autofocus name="email" placeholder="Email address">
                        @if ($errors->has('email'))
                            <span class="alert-danger">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                        <i class="far fa-envelope pre-icon"></i>
                </div>
              
              
                
            </div>

            <button type="submit" class="red-button sign-up-button">
                            Reset password
                        </button>
            <a href="/login" class="option-links">Not now, sorry...</a>

    </form>

          </div>

      
    </div>
  </div>

  <script src="{{ asset('landing-page/vendors/js/jquery.min.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>

  
  <!-- <script src="vendors/js/bootstrap.bundle.min.js"></script> -->



</body>

</html>