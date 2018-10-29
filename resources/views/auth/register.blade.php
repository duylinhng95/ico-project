<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Register to {{$brand['brandName']->content}}</title>
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
                
    <div  id="register-box" class="login-box register " style="max-width: 750px;">
        <a href="/">
            <img src="{{asset('page/images/brand').'/'.$brand['brandImg']->content}}" alt="logo" class="img-fluid logo">
         </a>
        <form class="login-form" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
            <input type="hidden" name="referral_id" value={{$referral_id}}>
       
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="input-wrap">
                <label for="email">E-mail address</label>

                <input  class="form-control"
                        id="email"  value="{{ old('email') }}" required autofocus name="email">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                        <i class="far fa-envelope pre-icon"></i>
                </div>
                <p class="margin-top-40">
                    Read and Agree to the eCoinomic general terms and conditions for users acquiring eCoinomic tokens. Tick all the four columns if you fulfil all four of them and press 'Register'.
                </p>
                <p class="margin-top-40">
                    If you do not fulfil either one of them, please do not support the token sale.
                </p>
                <div class="checkbox-wrapper">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="agree-1">
                        <label class="form-check-label" for="agree-1">I have read and agree to <a href="#" class="red-link">the terms & conditions</a>.</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="agree-2">
                        <label class="form-check-label" for="agree-2">I am not a US or Singaporean person as defined in <a href="#">the terms & conditions</a>.</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="agree-3">
                        <label class="form-check-label" for="agree-3">I am not a politically exposed person (PEP) or conflicted from entering this token subscription for any reason.</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="agree-4">
                        <label class="form-check-label" for="agree-4">I am not a person under the age of 18 years. We do not permit individuals under the age of 18 to purchase and use CNC token. If we become aware that a child under the age of 18 has provided us with personal information, we will delete such information from our files immediately and block its access to our Website and products.</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="agree-5">
                        <label class="form-check-label" for="agree-5">I agree to the collection, recording, systematization, analysis, use, cross-border transfer, receipt, processing, storage, transformation (updating/clarification), deletion (after expiry of the storage period) of personal data which I have provided.</label>
                    </div>
                </div>
            </div>

            <button type="submit" class="red-button sign-up-button">
                            Register
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