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
        <form class="login-form" method="POST" action="{{ route('password.request') }}">
            {{ csrf_field() }}
            <input type="hidden" name="token" value="{{ $token }}">

    
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="input-wrap">
                <label for="email">E-mail address</label>
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
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password">Password</label>

                <div class="input-wrap">
                    <input id="password" type="password" class="form-control" name="password" required>
                    <i class="fas fa-lock pre-icon"></i>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif

                </div>
            </div>
            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <label for="password-confirm" >Confirm Password</label>
                <div class="input-wrap">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
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