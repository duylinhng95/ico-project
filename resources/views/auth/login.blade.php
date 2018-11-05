<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login to {{$brand['brandName']->content}}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
    crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">

  <link href="{{ asset('landing-page/resources/css/styles.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landing-page/resources/css/queries.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landing-page/resources/css/login.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landing-page/resources/css/login-queries.min.css') }}" rel="stylesheet">

  

</head>

<body>
  @if (session('status'))
      <div class="alert alert-success">
          {{ session('status') }}
      </div>
  @endif
  <div class="fluid-container w-100">
    <div class="col-md-6 offset-md-3">
      <div class=" login-wrapper">
        <div id="login-box" class="login-box">
            <a href="/">
                <img src="{{asset('page/images/brand').'/'.$brand['brandImg']->content}}" alt="logo" class="img-fluid logo">
             </a>
            <form class="login-form" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email">E-mail address</label>
                <div class="input-wrap">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"  required autofocus >
                    <i class="far fa-user pre-icon"></i>
                            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
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
              
                <button type="submit" class="btn red-button login-button">
                        Login
                    </button>
                <a href="/register" class="option-links">Don’t have an account?</a>
                <a href="{{ route('password.request') }}" class="option-links"> Forgot password?</a>

               
               
            </form>

        </div>
    </div>
    </div>
  </div>

  <script src="{{ asset('landing-page/vendors/js/jquery.min.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>

  
  <!-- <script src="vendors/js/bootstrap.bundle.min.js"></script> -->



</body>

</html>