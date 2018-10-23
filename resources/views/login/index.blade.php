<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
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
    <div class="row login-wrapper">
      <div class="col-lg-6 col-md-12 col-sm-12 left-side show ">

                    <div id="login-box" class="login-box">
                        <h2 class="welcome-title">
                            Welcome back, Please login to your account
                        </h2>
                        <form class="login-form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email address" required autofocus >
                                    @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif

                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input id="password" type="password" class="form-control" name="password" 
                                        placeholder="Password"required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                            

                            </div>
                            <a href="{{ route('password.request') }}" class="forgot-psw"> Forgot password?</a>
                            <button type="submit" class="btn red-button login-button">
                                    Login
                                </button>
                          
                            <a href="#"  class="btn red-button sign-up-button">Sign Up</a>
                            <p class="agree-text">
                                By signing up, you agree to ICO's
                            </p>
                            <p class="term-text">
                                Terms and Conditions & Privacy Policy
                            </p>
                        </form>


                    </div>
          <div  id="register-box" class="login-box register hide">
              <h2 class="welcome-title">
                  Let join in us!
              </h2>
              <form class="login-form" method="POST" action="{{ route('register') }}">
                 {{ csrf_field() }}
                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                      <input  class="form-control"
                             id="usr"  placeholder="Email" value="{{ old('name') }}" required autofocus>
                             @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                  </div>
                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                      <input type="password" name="password_user" class="form-control"  id="password_user"
                             placeholder="Password" required>
                             @if ($errors->has('password_user'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_user') }}</strong>
                                    </span>
                                @endif
                  </div>
                  <div class="form-group">
                      <input type="password" placeholder="Confirm Password" class="form-control" id="confirm_password" name="password_confirmation"  required>
                  </div>
                  <p class="agree-text">
                      I accept the <span class="term-text">
                Terms and Conditions & Privacy Policy
                </span>
                  </p>
                  <a href="#"  class="btn red-button login-button">Back</a>
                  <button type="submit" class="red-button sign-up-button">
                                    Register
                                </button>


            </form>

          </div>





      </div>
      <div class="col-lg-6 col-md-12 col-sm-12 right-side">
        <img src="landing-page/resources/img/logo.png" alt="logo" class="img-fluid logo">
      </div>
    </div>
  </div>

  <script src="{{ asset('landing-page/vendors/js/jquery.min.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <script src="{{ asset('landing-page/resources/js/login/loginpage.js') }}"></script>
  
  <!-- <script src="vendors/js/bootstrap.bundle.min.js"></script> -->



</body>

</html>