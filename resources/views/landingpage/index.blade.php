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


</head>

<body>

  <header>
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="{{ asset('landing-page/resources/img/logo.png') }}" alt=" logo" class="logo">
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
              <a class="btn red-button" href="#"> <em>Login</em> </a>
              <div class="list-button">
                <div class="icon-link">
                  <a href="#"><img src="{{ asset('landing-page/resources/img/IconLink01.png') }}" alt="Icon link description" class="icon-circle-button" /></a>
                </div>
                <div class="icon-link">
                  <a href="#"><img src="{{ asset('landing-page/resources/img/IconLink02.png') }}" class="icon-circle-button" alt="Icon link description" /></a>
                </div>
                <div class="icon-link">
                  <a href="#"><img src="{{ asset('landing-page/resources/img/IconLink03.png') }}" class="icon-circle-button" alt="Icon link description" /></a>
                </div>
                <div class="icon-link">
                  <a href="#"><img src="{{ asset('landing-page/resources/img/IconLink04.png') }}" class="icon-circle-button" alt="Icon link description" /></a>
                </div>
                <div class="icon-link">
                  <a href="#"><img src="{{ asset('landing-page/resources/img/IconLink05.png') }}" class="icon-circle-button" alt="Icon link description" /></a>
                </div>
              </div>
            </div>

          </div>

        </div>
        <div class=" clear-padding col-lg-6 col-md-6 col-sm-12">

          <div class="play-icon-box">
            <a href="#">
              <img class="img-fluid play-icon" src="{{ asset('landing-page/resources/img/play_icon.png') }}" alt="play">
            </a>
          </div>
          <div class="header-bg">


            <img class=" img-fluid clip-polygon" src="{{ asset('landing-page/resources/img/header-right-image.png') }}" alt="ico thumbnail video">


          </div>

        </div>
      </div>


    </div>
  </header>
  <section class="whois-section js--whois-section">
    <div class="row">
      <div class="container section-heading">
        <h2>Who is ABC project?</h2>

        <p class="heading-brief">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam </p>
      </div>

    </div>
    <div class="container">
      <div class="row relative-postion fluid-width ">
        <div class="col-lg-12 col-md-12 col-sm-12 fade-effect-left remove-padding-col">
          <div class="left-info-box">
            <div class="center-content-align">
              <h3>Get more familiar with our projects</h3>
              <p>Lorem ipsum dolor sit amet, consec</p>
              <a href="#" class="btn red-button">Whitepaper</a>
              <a href="#" class="btn red-button">Annoucement</a>
            </div>

          </div>

        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 fade-effect-right remove-padding-col">
          <div class="slider-box">
            <div class="overlay-effect">
            </div>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="{{ asset('landing-page/resources/img/slide1.png') }}" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ asset('landing-page/resources/img/slide1.png') }}" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ asset('landing-page/resources/img/slide1.png') }}" alt="Third slide">
                </div>
              </div>

            </div>

          </div>

        </div>


      </div>
    </div>

  </section>
  <section class="features-section js--features-section">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="feature-box">
          <div class="icon-circle-box">
            <a href="#"><img src="{{ asset('landing-page/resources/img/feature-icon-01.png') }}" alt="Icon link description" class="icon" /></a>
          </div>
          <h3>Lorem ipsum</h3>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
            sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
        </div>

      </div>

      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="feature-box">
          <div class="icon-circle-box">
            <a href="#"><img src="{{ asset('landing-page/resources/img/feature-icon-02.png') }}" alt="Icon link description" class="icon" /></a>
          </div>
          <h3>Lorem ipsum</h3>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
            sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="feature-box">
          <div class="icon-circle-box circle-box-white">
            <a href="#"><img src="{{ asset('landing-page/resources/img/feature-icon-03.png') }}" alt="Icon link description" class="icon" /></a>
          </div>
          <h3>Lorem ipsum</h3>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
            sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="feature-box">
          <div class="icon-circle-box">
            <a href="#"><img src="{{ asset('landing-page/resources/img/feature-icon-04.png') }}" alt="Icon link description" class="icon" /></a>
          </div>
          <h3>Lorem ipsum</h3>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
            sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
        </div>
      </div>
    </div>
  </section>
  <section class="timeline-section js--timeline-section">

    <div class="container section-heading">
      <h2>Our timelines</h2>
      <p class="heading-brief">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam </p>
      <img src="{{ asset('landing-page/resources/img/timeline-big-image.png') }}" alt="timeline" class="img-fluid">
    </div>


  </section>
  <section class="advisor-section js--advisor-section">
    <div class="container-fluid">
      <h2>
        Advisor
      </h2>
      <p class="heading-brief text-white">
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
      </p>

    </div>
    <div id="myCarousel" class="carousel slide" data-interval="false">
      <div class="carousel-inner row w-100 mx-auto fluid-slide">
        <div class="carousel-item col-md-4 active">
          <div class="card">
            <img class="card-img-top img-fluid" src="{{ asset('landing-page/resources/img/advisor-avatar-01.png') }}" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Card 1</h4>
              <p class="card-subtitle"> Customer Services Manager</p>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                additional content. This content is a little bit longer.</p>

            </div>
          </div>
        </div>
        <div class="carousel-item col-md-4 ">
          <div class="card">
            <img class="card-img-top img-fluid" src="{{ asset('landing-page/resources/img/advisor-avatar-02.png') }}" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Card 2</h4>
              <p class="card-subtitle"> Customer Services Manager</p>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                additional content. This content is a little bit longer.</p>

            </div>
          </div>
        </div>
        <div class="carousel-item col-md-4 ">
          <div class="card">
            <img class="card-img-top img-fluid" src="{{ asset('landing-page/resources/img/advisor-avatar-03.png') }}" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Card 3</h4>
              <p class="card-subtitle"> Customer Services Manager</p>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                additional content. This content is a little bit longer.</p>

            </div>
          </div>
        </div>
        <div class="carousel-item col-md-4 ">
          <div class="card">
            <img class="card-img-top img-fluid" src="{{ asset('landing-page/resources/img/advisor-avatar-01.png') }}" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Card 4</h4>
              <p class="card-subtitle"> Customer Services Manager</p>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                additional content. This content is a little bit longer.</p>

            </div>
          </div>
        </div>

        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <div class="control-prev-icon">
            <img src="{{ asset('landing-page/resources/img/carousel-icon-prev.png') }}" class="control-icon" alt="prev">
          </div>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <div class="control-next-icon">
            <img src="{{ asset('landing-page/resources/img/carousel-icon-next.png') }}" class="control-icon" alt="prev">
          </div>
          <span class="sr-only">Next</span>
        </a>
      </div>

    </div>
  </section>
  <section class="partners-section js--partners-section">
    <div class="container">
      <h2>
        The partner
      </h2>
      <p class="heading-brief">
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
      </p>
      <div class="row first-row">
        <div class="col-lg-3 col-md-6 col-sm-12">

          <figure class="figure">
            <a href="#"><img src="{{ asset('landing-page/resources/img/header_bg.jpg') }}" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure."></a>

            <figcaption class="figure-caption text-center">A caption for the above image.</figcaption>
          </figure>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">

          <figure class="figure">
            <a href="#"><img src="{{ asset('landing-page/resources/img/header_bg.jpg') }}" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure."></a>

            <figcaption class="figure-caption text-center">A caption for the above image.</figcaption>
          </figure>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">

          <figure class="figure">
            <a href="#"><img src="{{ asset('landing-page/resources/img/header_bg.jpg') }}" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure."></a>

            <figcaption class="figure-caption text-center">A caption for the above image.</figcaption>
          </figure>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">

          <figure class="figure">
            <a href="#"><img src="{{ asset('landing-page/resources/img/header_bg.jpg') }}" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure."></a>

            <figcaption class="figure-caption text-center">A caption for the above image.</figcaption>
          </figure>
        </div>

      </div>
      <div class="row second-row">
        <div class="col-lg-3 col-md-6 col-sm-12">

          <figure class="figure">
            <a href="#"><img src="{{ asset('landing-page/resources/img/header_bg.jpg') }}" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure."></a>

            <figcaption class="figure-caption text-center">A caption for the above image.</figcaption>
          </figure>

        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">

          <figure class="figure">
            <a href="#"><img src="{{ asset('landing-page/resources/img/header_bg.jpg') }}" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure."></a>

            <figcaption class="figure-caption text-center">A caption for the above image.</figcaption>
          </figure>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">

          <figure class="figure">
            <a href="#"><img src="{{ asset('landing-page/resources/img/header_bg.jpg') }}" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure."></a>

            <figcaption class="figure-caption text-center">A caption for the above image.</figcaption>
          </figure>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">

          <figure class="figure">
            <a href="#"><img src="{{ asset('landing-page/resources/img/header_bg.jpg') }}" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure."></a>

            <figcaption class="figure-caption text-center">A caption for the above image.</figcaption>
          </figure>
        </div>
      </div>



    </div>

  </section>
  <footer>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12">
          <img class="img-fluid footer-logo" src="{{ asset('landing-page/resources/img/logo.png') }} " alt="logo">
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
          <h2 class="footer-heading">Social</h2>
          <ul class="footer-list">
            <li>Facebook</li>
            <li>Twitter</li>
            <li>Reddit</li>
            <li>Medium</li>
            <li>Bitcointal</li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
          <h2 class="footer-heading">Community</h2>
          <ul class="footer-list">
            <li>Telegram Channel</li>
            <li>Telegram China </li>
            <li>Telegram Global</li>
            <li>Telegram Korea</li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
          <h2 class="footer-heading">About us</h2>
          <ul class="footer-list">
            <li>Contact</li>
            <li>Annoucement</li>


          </ul>
        </div>
      </div>
    </div>
  </footer>
  <script src="{{ asset('landing-page/vendors/js/jquery.min.js') }}"></script>
  <script src="{{ asset('landing-page/vendors/js/jquery.waypoints.min.js') }}"></script>
 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <!-- <script src="vendors/js/bootstrap.bundle.min.js"></script> -->


  <script src="resources/js/scripts.js"></script>
</body>

</html>