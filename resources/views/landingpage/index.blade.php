<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ICO Project</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('landing-page/vendors/css/bootstrap-reboot.min.css')}}">
  <link rel="stylesheet" href="{{ asset('landing-page/vendors/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('landing-page/resources/css/styles.css')}}">
  <link rel="stylesheet" href="{{ asset('landing-page/resources/css/queries.css')}}">
 

</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg fixed-top  ">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
       
          <img src=" {{ asset('landing-page/resources/img/logo.png')}}" alt=" logo" class="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Roadmap</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Annoucement</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Whitepaper</a>
            </li>

          </ul>
        </div>
      </div>

    </nav>
    <div class="intro-text-box">

      <div class="row">
        <div class="clear-padding col-lg-6 col-md-6 col-sm-12 ">
          <div class="container">
            <div class="intro">
              <h1>ICO
                <br><span>PROJECT NAME</span> </h1>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
              <a class="btn login-button" href="#"> <em>Login</em> </a>
              <div class="list-button">
                <div class="icon-link">
                  <a href="#"><img src=" {{ asset('landing-page/resources/img/IconLink01.png')}}" alt="Icon link description" class="icon-circle-button" /></a>
                </div>
                <div class="icon-link">
                  <a href="#"><img src=" {{ asset('landing-page/resources/img/IconLink02.png')}}" class="icon-circle-button" alt="Icon link description" /></a>
                </div>
                <div class="icon-link">
                  <a href="#"><img src=" {{ asset('landing-page/resources/img/IconLink03.png')}}" class="icon-circle-button" alt="Icon link description" /></a>
                </div>
                <div class="icon-link">
                  <a href="#"><img src=" {{ asset('landing-page/resources/img/IconLink04.png')}}" class="icon-circle-button" alt="Icon link description" /></a>
                </div>
                <div class="icon-link">
                  <a href="#"><img src=" {{ asset('landing-page/resources/img/IconLink05.png')}}" class="icon-circle-button" alt="Icon link description" /></a>
                </div>
              </div>
            </div>

          </div>

        </div>
        <div class=" clear-padding col-lg-6 col-md-6 col-sm-12">
          <img class="img-fluid header-bg" src=" {{ asset('landing-page/resources/img//background.png')}}" alt="ico thumbnail video">

        </div>
      </div>


    </div>
  </header>
  <section class="whois-section">
    <div class="row">
      <h2>Who is ABC project?</h2>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam </p>
    </div>

  </section>
  <footer>

  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <script src="{{asset('landing-page/vendors/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('landing-page/vendors/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('landing-page/vendors/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('landing-page/resources/js/scripts.js')}}"></script>

</body>

</html>