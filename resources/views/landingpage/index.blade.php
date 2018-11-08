<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{$brand['brandName']->content}}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
    crossorigin="anonymous">
  <!-- <link rel="stylesheet" type="text/css" href="vendors/css/bootstrap-reboot.min.css"> -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
  
  <link href="{{ asset('landing-page/resources/css/styles.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landing-page/resources/css/custom.css') }}" rel="stylesheet">
  <link href="{{ asset('landing-page/resources/css/queries.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landing-page/resources/css/homepage.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landing-page/resources/css/homepage-queries.min.css') }}" rel="stylesheet">


</head>

<body>

  <header>
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="{{asset('page/images/brand').'/'.$brand['brandImg']->content}}" alt=" logo" class="logo">
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
              <a class="nav-link" href="#timeline-section">Roadmap</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#advisor-section">Team</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/announcement" >Annoucement</a>            
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Whitepaper</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/login" >Login </a>
            </li>
            <li class="center-middle">
              <div class="dropdown show">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-globe"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="/"><img src="{{ asset('landing-page/resources/img/american.png') }}" class="icon-lang" align="middle"></a>
                  <a class="dropdown-item" href="/loc/ko"><img src="{{ asset('landing-page/resources/img/korean.png') }}" class="icon-lang" align="middle"></a>
                  <a class="dropdown-item" href="/loc/zh-CN"><img src="{{ asset('landing-page/resources/img/china.png') }}" class="icon-lang" align="middle"></a>
                </div>
              </div>
             
            </li>
           

          </ul>
        </div>
      </div>

    </nav>
    <!-- Page 1 -->
    <div class="intro-text-box">

      <div class="row">
      <div class="clear-padding col-lg-6 col-md-6 col-sm-12 ml-auto height-full-view">
          <div class="play-icon-box">
            <a onclick='window = window.open("{{$page1['linkvideo']->content}}", "abc", "height=600, width=600"); return false;'>
              <img class="img-fluid play-icon" src="{{ asset('landing-page/resources/img/play_icon.png') }}" alt="play">
            </a>
          </div>
        </div>

        <div class="background-cover">

          <div class="clear-padding col-lg-6 col-md-6 col-sm-12 ">
            <div class="container">
              <div class="intro">
                <h1>{{$page1['title1']->content}}
                  <br><span class="small-text">{{$page1['title2']->content}}</span> </h1>
                <p>{{$page1['description']->content}}</p>
                <a class="btn red-button" href="{{url('/login')}}"> <em>Login</em> </a>
                <!-- Social -->
                <div class="list-button">
                  <div class="icon-link">
                    <a href="{{$social['reddit']->content}}"><img src="{{ asset('landing-page/resources/img/IconLink01.png') }}" alt="Icon link description" class="icon-circle-button" /></a>
                  </div>
                  <div class="icon-link">
                    <a href="{{$social['telegram']->content}}"><img src="{{ asset('landing-page/resources/img/IconLink02.png') }}" class="icon-circle-button" alt="Icon link description" /></a>
                  </div>
                  
                  <div class="icon-link">
                    <a href="{{$social['twitter']->content}}"><img src="{{ asset('landing-page/resources/img/IconLink03.png') }}" class="icon-circle-button" alt="Icon link description" /></a>
                  </div>
                  <div class="icon-link">
                    <a href="{{$social['bitcointalk']->content}}"><img src="{{ asset('landing-page/resources/img/IconLink04.png') }}" class="icon-circle-button" alt="Icon link description" /></a>
                  </div>
                  <div class="icon-link">
                    <a href="{{$social['medium']->content}}"><img src="{{ asset('landing-page/resources/img/IconLink05.png') }}" class="icon-circle-button" alt="Icon link description" /></a>
                  </div>
                  <div class="icon-link">
                    <a href="{{$social['medium']->content}}"><img src="{{ asset('landing-page/resources/img/IconLink06.png') }}" class="icon-circle-button"  alt="Icon link description" /></a>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>
        <div class="below-image col-md-7">
          <img class="img-fluid right-image" src="{{asset('page/images/page1').'/'.$page1['background']->content}}" alt="ico thumbnail video">

        </div>
      </div>


    </div>
  </header>
  <!-- Page 2 -->
  <section class="whois-section js--whois-section">
    <div class="row">
      <div class="container section-heading">
        <h2>{{$page2['title1']->content}}</h2>

        <p class="heading-brief">{{$page2['description1']->content}}</p>
      </div>

    </div>
    <div class="container">
      <div class="row relative-postion fluid-width ">
        <div class="col-lg-12 col-md-12 col-sm-12 fade-effect-left remove-padding-col">
          <div class="left-info-box">
            <div class="center-content-align">
              <h3>{{$page2['title2']->content}}</h3>
              <p>{{$page2['description2']->content}}</p>
              <a href="{{$page2['whitepaper']->content}}" class="btn red-button">Whitepaper</a>
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
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="{{asset('page/images/page2').'/'.$page2['image1']->content}}" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('page/images/page2').'/'.$page2['image2']->content}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('page/images/page2').'/'.$page2['image3']->content}}" alt="Third slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('page/images/page2').'/'.$page2['image4']->content}}" alt="Fourth slide">
                </div>
              </div>

            </div>

          </div>

        </div>


      </div>
    </div>

  </section>
  <!-- Page 3 -->
  <section class="features-section js--features-section">
    <div class="row">
      <div class="offset-lg-1 col-lg-5 col-md-6 col-sm-12">
        <div class="feature-box">
         
            <a href="#"><img src="{{asset('page/images/page3').'/'.$page3['logo1']->content}}" alt="Icon link description" class="icon" /></a>
       
          <h3>{{$page3['title1']->content}}</h3>
          <p>{{$page3['description1']->content}}</p>
        </div>

      </div>

      <div class=" col-lg-5 col-md-6 col-sm-12">
        <div class="feature-box">
            <a href="#"><img src="{{asset('page/images/page3').'/'.$page3['logo2']->content}}" alt="Icon link description" class="icon" /></a>
          <h3>{{$page3['title2']->content}}</h3>
          <p>{{$page3['description2']->content}}</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="offset-lg-1 col-lg-5 col-md-6 col-sm-12">
        <div class="feature-box">
            <a href="#"><img src="{{asset('page/images/page3').'/'.$page3['logo3']->content}}" alt="Icon link description" class="icon" /></a>
          <h3>{{$page3['title3']->content}}</h3>
          <p>{{$page3['description3']->content}}</p>
        </div>
      </div>
      <div class="col-lg-5 col-md-6 col-sm-12">
        <div class="feature-box">
            <a href="#"><img src="{{asset('page/images/page3').'/'.$page3['logo4']->content}}" alt="Icon link description" class="icon" /></a>
          <h3>{{$page3['title4']->content}}</h3>
          <p>{{$page3['description4']->content}}</p>
        </div>
      </div>
    </div>
  </section>
  <section id="timeline-section" class="timeline-section js--timeline-section">

    <div class="container section-heading">
      <h2>{{$page4['title']->content}}</h2>
      <p class="heading-brief">{{$page4['description']->content}}</p>
      <img src="{{asset('page/images/page4').'/'.$page4['timeline']->content}}" alt="timeline" class="img-fluid">
    </div>


  </section>
  <!-- Page 5 -->
  <section id="advisor-section" class="advisor-section js--advisor-section">
    <div class="container-fluid">
      <h2>
        {{$page5['title']->content}}
      </h2>
      <p class="heading-brief text-white">
        {{$page5['description']->content}}
      </p>

    </div>
    <div id="myCarousel" class="carousel slide" data-interval="false" data-ride="carousel">
      <div class="carousel-inner row w-100 mx-auto">
        @foreach ($page5['advisor'] as $k => $advisor)
          @if ($k == 0) 
            <div class="carousel-item col-md-4 active">
            <div class="card">
              <img class="card-img-top img-fluid" src='{{asset("page/images/page5")."/".$advisor->avatar }}' alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">{{$advisor->name}}</h4>
                <p class="card-subtitle">{{$advisor->position}}</p>
                <p class="card-text">
                  {{$advisor->description}}
                </p>
                <div class="social-icons">
                  <ul>
                    <li>
                      <a href="{{$advisor->link}}" target="_blank" alt="linkedin"> <i class="fab fa-linkedin"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          @else
          <div class="carousel-item col-md-4 ">
            <div class="card">
              <img class="card-img-top img-fluid" src='{{asset("page/images/page5")."/".$advisor->avatar }}' alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">{{$advisor->name}}</h4>
                <p class="card-subtitle">{{$advisor->position}}</p>
                <p class="card-text">
                  {{$advisor->description}}
                </p>
                <div class="social-icons">
                  <ul>
                    <li>
                      <a href="#" alt="linkedin"> <i class="fab fa-linkedin"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          @endif
        @endforeach
       
      </div>
      @if(count($page5['advisor']) >3)
      <div class="container-fluid">
        <a class="carousel-control-prev">
            <div class="control-prev-icon">
              <img src="{{ asset('landing-page/resources/img/carousel-icon-prev.png') }}" class="control-icon" alt="prev">
            </div>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next">
            <div class="control-next-icon">
              <img src="{{ asset('landing-page/resources/img/carousel-icon-next.png') }}" class="control-icon" alt="prev">
            </div>
            <span class="sr-only">Next</span>
          </a>
      </div>
      @endif
    </div>  
  </section>
  <!-- End Page 5 -->
  <!-- Page 6 -->
  <section class="partners-section js--partners-section">

    <div class="container">
      <h2>
        {{$page6['title']->content}}
      </h2>
      <p class="heading-brief">
        {{$page6['description']->content}}
      </p>
      @foreach(array_chunk($page6['partner'], 4) as $partners)
        <div class="row first-row">
          @foreach($partners as $partner)
            <div class="col-lg-3 col-md-6 col-sm-12">

            <figure class="figure">
              <a href="{{$partner['link']}}"><img src='{{asset("page/images/page6")."/".$partner["image"] }}' class="figure-img img-fluid rounded" alt="Image1"></a>

              <figcaption class="figure-caption text-center">{{$partner['name']}}</figcaption>
            </figure>
          </div>
          @endforeach
        </div>
      @endforeach
    </div>

  </section>
  <footer>
  <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12">
       <img class="img-fluid footer-logo" src="{{asset('page/images/brand').'/'.$brand['brandImg']->content}} " alt="logo">

        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
          <h2 class="footer-heading">Social</h2>
          <ul class="footer-list">
            <li><a href="{{$social['facebook']->content}}">Facebook</a></li>
            <li><a href="{{$social['twitter']->content}}">Twitter</a></li>
            <li><a href="{{$social['reddit']->content}}">Reddit</a></li>
            <li><a href="{{$social['medium']->content}}">Medium</a></li>
            <li><a href="{{$social['bitcointalk']->content}}">Bitcointalk</a></li>
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
  </footer>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/popper.min.js"></script>
  <script src="{{ asset('landing-page/vendors/js/jquery.min.js') }}"></script>
  <script src="{{ asset('landing-page/vendors/js/jquery.waypoints.min.js') }}"></script>
 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
  
  <!-- <script src="vendors/js/bootstrap.bundle.min.js"></script> -->


  <script src="{{ asset('landing-page/resources/js/scripts.js') }}"></script>
</body>

</html>