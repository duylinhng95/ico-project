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
  <link href="{{ asset('landing-page/resources/css/styles.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landing-page/resources/css/queries.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landing-page/resources/css/login.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landing-page/resources/css/login-queries.min.css') }}" rel="stylesheet">

  

</head>

<body>
  <div class="fluid-container w-100">
    <div class="row login-wrapper">
      <div class="col-lg-6 col-md-6 col-sm-12 left-side show ">

                    <div id="login-box" class="login-box">
                        <h2 class="welcome-title">
                            Welcome back, Please login to your account
                        </h2>
                        <div class="login-form">
                            <div class="form-group ">

                                <input pattern="/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/" class="form-control"
                                       id="usr" title="Please type a valid email" placeholder="Email address" required>

                            </div>
                            <div class="form-group">
                                <input type="password" name="pw" pattern=".{6,}" class="form-control" title="Six or more characters" id="pwd"
                                       placeholder="Password" required>

                            </div>
                            <a href="#" class="forgot-psw"> Forgot password?</a>

                            <a href="#" class="btn red-button login-button">Login</a>
                            <a href="#"  class="btn red-button sign-up-button">Sign Up</a>
                            <p class="agree-text">
                                By signing up, you agree to ICO's
                            </p>
                            <p class="term-text">
                                Terms and Conditions & Privacy Policy
                            </p>
                        </div>


                    </div>
          <div  id="register-box" class="login-box register hide">
              <h2 class="welcome-title">
                  Let join in us!
              </h2>
              <div class="login-form">
                  <div class="form-group ">

                      <input pattern="/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/" class="form-control"
                             id="usr" title="Please type a valid email" placeholder="Email" required>

                  </div>
                  <div class="form-group">
                      <input type="password" name="pw" pattern=".{6,}" class="form-control" title="Six or more characters" id="password"
                             placeholder="Password" required>

                  </div>
                  <div class="form-group">
                      <input type="password" placeholder="Confirm Password" class="form-control" id="confirm_password" required>
                  </div>


                  <p class="agree-text">
                      I accept the <span class="term-text">
                Terms and Conditions & Privacy Policy
              </span>
                  </p>
                  <a href="#"  class="btn red-button login-button">Back</a>
                  <a href="#"  class="btn red-button sign-up-button">Sign Up</a>


              </div>

          </div>





      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 right-side">
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