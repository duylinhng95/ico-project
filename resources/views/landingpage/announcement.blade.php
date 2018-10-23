<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ICO Project</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
    crossorigin="anonymous">
  <!-- <link rel="stylesheet" type="text/css" href="vendors/css/bootstrap-reboot.min.css"> -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
  <link href="{{ asset('landing-page/resources/css/styles.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landing-page/resources/css/queries.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landing-page/resources/css/announcement.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landing-page/resources/css/announcement-queries.min.css') }}" rel="stylesheet">
 
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="landing-page/resources/img/logo.png" alt=" logo" class="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/#timeline-section">Roadmap</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/#advisor-section">Team</a>
            </li>
            <li class="nav-item">
              <!-- Button trigger Announcement modal -->

              <a class="nav-link" href="#" data-toggle="modal" data-target="#annoucementModal">Annoucement</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Whitepaper</a>
            </li>

          </ul>
        </div>
      </div>

    </nav>
  </header>
  <div class="container">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">

          <a href="#">
            <img src="landing-page/resources/img/logo.png" alt=" logo" class="logo">
          </a>
          <h5 class="modal-title" id="annoucementModalTitle">Annoucement</h5>

        </div>
        <div class="modal-body">
          <div class="announcement-list">
            <div class="annoucement-item">
              <h6>News</h6>
              <p>Lorem ipsum dolor sit amet, lorem ipsum</p>
              <span class="time"> 40m ago </span>
              <i class="far fa-comment"> 0</i>
            </div>
            <div class="annoucement-item">
              <h6>News</h6>
              <p>Lorem ipsum dolor sit amet, lorem ipsum</p>
              <span class="time"> 40m ago </span>
              <i class="far fa-comment"> 0</i>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>



  <footer>
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12">
          <img class="img-fluid footer-logo" src="/landing-page/resources/img/logo.png" alt="logo">
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
          <h2 class="footer-heading">Social</h2>
          <ul class="footer-list">
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Reddit</a></li>
            <li><a href="#">Medium</a></li>
            <li><a href="#">Bitcointal</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
          <h2 class="footer-heading">Community</h2>
          <ul class="footer-list">
            <li><a href="#">Telegram Channel</a></li>
            <li><a href="#">Telegram China</a></li>
            <li><a href="#">Telegram Global</a></li>
            <li><a href="#">Telegram Korea</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
          <h2 class="footer-heading">About us</h2>
          <ul class="footer-list">
            <li><a href="#">Contact</a></li>
            <li><a href="#">Annoucement</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <script src="{{ asset('landing-page/vendors/js/jquery.min.js') }}"></script>
 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>

 <script src="{{ asset('landing-page/resources/js/scripts.js') }}"></script>

</body>

</html>