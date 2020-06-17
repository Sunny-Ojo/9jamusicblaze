<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Poca - Podcast &amp; Audio Template">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>9jamusicblaze | Videos category</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:500,600,700,800,800i|Titillium+Web" rel="stylesheet">

  <!-- Core Stylesheet -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
</head>

<body>
  <!-- Preloader -->
  <div id="preloader">
    <div class="preloader-thumbnail">
      <img src="./img/core-img/preloader.png" alt="">
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area">
    <!-- Main Header Start -->
    <div class="main-header-area">
      <div class="classy-nav-container breakpoint-off">
        <!-- Classy Menu -->
        <nav class="classy-navbar justify-content-between" id="pocaNav">

          <!-- Logo -->
          <a class="nav-brand" href="/" style="color:white">9jamusicblaze</a>

          <!-- Navbar Toggler -->
          <div class="classy-navbar-toggler">
            <span class="navbarToggler"><span></span><span></span><span></span></span>
          </div>

          <!-- Menu -->
          <div class="classy-menu">

            <!-- Menu Close Button -->
            <div class="classycloseIcon">
              <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
            </div>

            <!-- Nav Start -->
            <div class="classynav">
              <ul id="nav">
                <li class="current-item"><a href="/">Home</a></li>

                <li><a href="./about.html">About</a></li>
                @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="" class="nav-link " href="#" role="button" data-toggle="" aria-haspopup="" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown">
                                    <a class="" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </ul>
                            </li>
                        @endguest
              </ul>



            </div>
            <!-- Nav End -->
          </div>
        </nav>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- ***** Welcome Area Start ***** -->
  <section class="welcome-area">
    <!-- Welcome Slides -->
    <div class="welcome-slides owl-carousel">

      <!-- Single Welcome Slide -->
      <div class="welcome-welcome-slide bg-img bg-overlay" style="background-image: url({{ asset('img/bg-img/newbg.jpg') }});">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12">
              <!-- Welcome Text -->
              <div class="welcome-text">
                <h2 data-animation="fadeInUp" data-delay="100ms" class="mt-xs-5 text-success text-center mb-15">9<span class="text-white">j</span>a<span class="text-warning">musicblaze </span> | <span class="text-white">Home</span></h2>
                <div data-animation="fadeInUp" data-delay="300ms" class="text-center">
                   <a href="" class="text-center" style="padding:7px; margin:0;border-radius:15px;background-color:lightcyan; font-size:18px;width:100px;">Music</a>
                   <a href="" class="text-center" style="padding:7px; margin:0;border-radius:15px;background-color:lightcyan; font-size:18px;width:100px;">Videos</a>
                   <a href="" class="text-center" style="padding:7px; margin:0;border-radius:15px;background-color:lightcyan; font-size:18px;width:200px;">Songs Promotion </a>
                   <a href="" class="text-center music" style="padding:7px; margin-left:3px;border-radius:15px;background-color:lightcyan; font-size:18px;width:100px;">Latest</a>
                <a href="{{route('songs.create')}}" class="text-center music" style="padding:7px; margin-left:3px;border-radius:15px;background-color:lightcyan; font-size:18px;width:200px;">Upload Song</a>

                </div>
                 <div class="top-search-area mt-4 text-center">
                <form action="index.html" method="post" style="width:100%;background-color:white">
                  <input type="search" name="top-search-bar" class="form-control" placeholder="Search anything you want...">
                  <button type="submit"><i class="fa fa-search float-right text-dark" style="text-align:right" aria-hidden="true"></i></button>
                </form>
              </div>

              </div>
              <!-- Welcome Music Area -->
              <div class="poca-music-area mt-100 d-flex align-items-center flex-wrap" data-animation="fadeInUp" data-delay="900ms">
          @foreach ($song as $item)
@endforeach       <div class="poca-music-thumbnail">

                  <img src="/storage/cover_images/{{$item->cover_img}}" alt="">
                </div>
                <div class="poca-music-content">
                    <h1 class="text-center text-success">Best Promoted song</h1>
                  <span class="music-published-date">{{ Now() }}</span>


                <h2>{{ $item->name }} - {{$item->artist}}</h2>
                  <div class="music-meta-data">
                    <p>By: <b  class="music-author">{{$item->posted_by}}</b> | Category: <b  class="music-catagory">{{$item->category}}</b> </p>
                  </div>
                  <!-- Music Player -->
                  <div class="poca-music-player">
                    <audio preload="auto" controls>
                    <source src="/storage/songs/{{$item->song}}">
                    </audio>
                  </div>
                  <!-- Likes, Share & Download -->
                  <div class="likes-share-download d-flex align-items-center justify-content-between">
                    <a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Like (29)</a>
                    <div>
                      <a href="#" class="mr-4"><i class="fa fa-share-alt" aria-hidden="true"></i> Share(04)</a>
                      <a href="#"><i class="fa fa-download" aria-hidden="true"></i> Download (12)</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
 <!-- Single Welcome Slide -->
      <div class="welcome-welcome-slide bg-img bg-overlay" style="background-image: url(img/bg-img/2.jpg);">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12">
              <!-- Welcome Text -->
              <div class="welcome-text">
                <h2 data-animation="fadeInUp" data-delay="100ms">Listen Now</h2>
                <h5 data-animation="fadeInUp" data-delay="300ms">Please schedule a podcast post, to make it visible here.</h5>
                <div class="welcome-btn-group">
                  <a href="#" class="btn poca-btn m-2 ml-0 active" data-animation="fadeInUp" data-delay="500ms">Subscribe with iTunes</a>
                  <a href="#" class="btn poca-btn btn-2 m-2" data-animation="fadeInUp" data-delay="700ms">Subscribe with RSS</a>
                </div>
              </div>
              <!-- Welcome Music Area -->
              <div class="poca-music-area mt-100 d-flex align-items-center flex-wrap" data-animation="fadeInUp" data-delay="900ms">
                <div class="poca-music-thumbnail">
                  <img src="{{ asset('/img/bg-img/4.jpg') }}" alt="">
                </div>
                <div class="poca-music-content">
                  <span class="music-published-date">December 8, 2018</span>
                  <h2>Episode 202 - The Last Blockbuster</h2>
                  <div class="music-meta-data">
                    <p>By <a href="#" class="music-author">Admin</a> | <a href="#" class="music-catagory">Tutorials</a> | <a href="#" class="music-duration">00:02:56</a></p>
                  </div>
                  <!-- Music Player -->
                  <div class="poca-music-player">
                    <audio preload="auto" controls>
                      <source src="audio/dummy-audio.mp3">
                    </audio>
                  </div>
                  <!-- Likes, Share & Download -->
                  <div class="likes-share-download d-flex align-items-center justify-content-between">
                    <a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Like (29)</a>
                    <div>
                      <a href="#" class="mr-4"><i class="fa fa-share-alt" aria-hidden="true"></i> Share(04)</a>
                      <a href="#"><i class="fa fa-download" aria-hidden="true"></i> Download (12)</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Single Welcome Slide -->
      <div class="welcome-welcome-slide bg-img bg-overlay" style="background-image: url(img/bg-img/3.jpg);">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12">
              <!-- Welcome Text -->
              <div class="welcome-text">
                <h2 data-animation="fadeInUp" data-delay="100ms">Discover Today</h2>
                <h5 data-animation="fadeInUp" data-delay="300ms">Please schedule a podcast post, to make it visible here.</h5>
                <div class="welcome-btn-group">
                  <a href="#" class="btn poca-btn m-2 ml-0 active" data-animation="fadeInUp" data-delay="500ms">Subscribe with iTunes</a>
                  <a href="#" class="btn poca-btn btn-2 m-2" data-animation="fadeInUp" data-delay="700ms">Subscribe with RSS</a>
                </div>
              </div>
              <!-- Welcome Music Area -->
              <div class="poca-music-area mt-100 d-flex align-items-center flex-wrap" data-animation="fadeInUp" data-delay="900ms">
                <div class="poca-music-thumbnail">
                  <img src="{{ asset('/img/bg-img/4.jpg') }}" alt="">
                </div>
                <div class="poca-music-content">
                  <span class="music-published-date">December 7, 2018</span>
                  <h2>Episode 201 - The Last Blockbuster</h2>
                  <div class="music-meta-data">
                    <p>By <a href="#" class="music-author">Admin</a> | <a href="#" class="music-catagory">Tutorials</a> | <a href="#" class="music-duration">00:02:56</a></p>
                  </div>
                  <!-- Music Player -->
                  <div class="poca-music-player">
                    <audio preload="auto" controls>
                      <source src="audio/dummy-audio.mp3">
                    </audio>
                  </div>
                  <!-- Likes, Share & Download -->
                  <div class="likes-share-download d-flex align-items-center justify-content-between">
                    <a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Like (29)</a>
                    <div>
                      <a href="#" class="mr-4"><i class="fa fa-share-alt" aria-hidden="true"></i> Share(04)</a>
                      <a href="#"><i class="fa fa-download" aria-hidden="true"></i> Download (12)</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- ***** Welcome Area End ***** -->

  <!-- ***** Latest Episodes Area Start ***** -->
  <section class="poca-latest-epiosodes section-padding-80">
    <div class="container">
      <div class="row">
        <!-- Section Heading -->
        <div class="col-12">
          <div class="section-heading text-center">
            <h2>Latest Releases</h2>
            <div class="line"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="modal fade" id="modal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-Header text-center"><h4 class="text-primary">Welcome to 9jamusicblaze official website, <br>What would you like to do today?</h4></div>
                            <div class="modal-body text-center">
                                <ul class="list-group">
                                <li class="list-group-item"><a href="{{route('songs.index')}}">Download Songs</a></li>
                                    <li class="list-group-item"><a href="">Download Videos</a></li>
                                <li class="list-group-item"><a href="{{route('songs.create')}}">Upload Songs</a></li>
                                    <li class="list-group-item"><a href="">Promote Songs</a></li>
                                    <li class="list-group-item"><a href="">See latest songs and videos</a></li>
                                </ul>
                            </div>
                            <div class="modal-footer"><a data-dismiss="modal" class="btn btn-success text-white">Close</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Projects Menu -->
    <div class="container">
      <div class="poca-projects-menu mb-30 wow fadeInUp" data-wow-delay="0.3s">
        <div class="text-center portfolio-menu">
          <button class="btn " data-filter=".entre"><a href="/">Music</a></button>
        <button class="btn active" data-filter=".media"><a href="{{route('videos.index')}}">Videos</a></button>
          <button class="btn" data-filter=".tech"><a href="{{route('news.index')}}">News</a></button>
          <button class="btn" data-filter=".tutor"><a href="{{route('songs.promote')}}">Promote Songs</a></button>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row poca-portfolio">

        <!-- Single gallery Item -->
        <div class="col-12 col-md-6 single_gallery_item entre wow fadeInUp" data-wow-delay="0.2s">
          <!-- Welcome Music Area -->
          <div class="poca-music-area style-2 d-flex align-items-center flex-wrap">
            <div class="poca-music-thumbnail">
              <img src="{{ asset('/img/bg-img/5.jpg') }}" alt="">
            </div>
            <div class="poca-music-content text-center">
              <span class="music-published-date mb-2">December 9, 2018</span>
              <h2>Episode 201 - You Don’t Know Squat!</h2>
              <div class="music-meta-data">
                <p>By <a href="#" class="music-author">Admin</a> | <a href="#" class="music-catagory">Tutorials</a> | <a href="#" class="music-duration">00:02:56</a></p>
              </div>
              <!-- Music Player -->
              <div class="poca-music-player">
                <audio preload="auto" controls>
                  <source src="audio/dummy-audio.mp3">
                </audio>
              </div>
              <!-- Likes, Share & Download -->
              <div class="likes-share-download d-flex align-items-center justify-content-between">
                <a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Like (29)</a>
                <div>
                  <a href="#" class="mr-4"><i class="fa fa-share-alt" aria-hidden="true"></i> Share(04)</a>
                  <a href="#"><i class="fa fa-download" aria-hidden="true"></i> Download (12)</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Single gallery Item -->
        <div class="col-12 col-md-6 single_gallery_item entre tutor wow fadeInUp" data-wow-delay="0.2s">
          <!-- Welcome Music Area -->
          <div class="poca-music-area style-2 d-flex align-items-center flex-wrap">
            <div class="poca-music-thumbnail">
              <img src="{{ asset('/img/bg-img/6.jpg') }}" alt="">
            </div>
            <div class="poca-music-content text-center">
              <span class="music-published-date mb-2">December 9, 2018</span>
              <h2>Episode 202 - I Want A New Judge!</h2>
              <div class="music-meta-data">
                <p>By <a href="#" class="music-author">Admin</a> | <a href="#" class="music-catagory">Tutorials</a> | <a href="#" class="music-duration">00:02:56</a></p>
              </div>
              <!-- Music Player -->
              <div class="poca-music-player">
                <audio preload="auto" controls>
                  <source src="audio/dummy-audio.mp3">
                </audio>
              </div>
              <!-- Likes, Share & Download -->
              <div class="likes-share-download d-flex align-items-center justify-content-between">
                <a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Like (29)</a>
                <div>
                  <a href="#" class="mr-4"><i class="fa fa-share-alt" aria-hidden="true"></i> Share(04)</a>
                  <a href="#"><i class="fa fa-download" aria-hidden="true"></i> Download (12)</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Single gallery Item -->
        <div class="col-12 col-md-6 single_gallery_item media wow fadeInUp" data-wow-delay="0.2s">
          <!-- Welcome Music Area -->
          <div class="poca-music-area style-2 d-flex align-items-center flex-wrap">
            <div class="poca-music-thumbnail">
              <img src="{{ asset('/img/bg-img/7.jpg') }}" alt="">
            </div>
            <div class="poca-music-content text-center">
              <span class="music-published-date mb-2">December 9, 2018</span>
              <h2>Episode 203 - The Last Blockbuster</h2>
              <div class="music-meta-data">
                <p>By <a href="#" class="music-author">Admin</a> | <a href="#" class="music-catagory">Tutorials</a> | <a href="#" class="music-duration">00:02:56</a></p>
              </div>
              <!-- Music Player -->
              <div class="poca-music-player">
                <audio preload="auto" controls>
                  <source src="audio/dummy-audio.mp3">
                </audio>
              </div>
              <!-- Likes, Share & Download -->
              <div class="likes-share-download d-flex align-items-center justify-content-between">
                <a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Like (29)</a>
                <div>
                  <a href="#" class="mr-4"><i class="fa fa-share-alt" aria-hidden="true"></i> Share(04)</a>
                  <a href="#"><i class="fa fa-download" aria-hidden="true"></i> Download (12)</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Single gallery Item -->
        <div class="col-12 col-md-6 single_gallery_item media wow fadeInUp" data-wow-delay="0.2s">
          <!-- Welcome Music Area -->
          <div class="poca-music-area style-2 d-flex align-items-center flex-wrap">
            <div class="poca-music-thumbnail">
              <img src="{{ asset('/img/bg-img/8.jpg') }}" alt="">
            </div>
            <div class="poca-music-content text-center">
              <span class="music-published-date mb-2">December 9, 2018</span>
              <h2>Episode 204 - The Last Blockbuster</h2>
              <div class="music-meta-data">
                <p>By <a href="#" class="music-author">Admin</a> | <a href="#" class="music-catagory">Tutorials</a> | <a href="#" class="music-duration">00:02:56</a></p>
              </div>
              <!-- Music Player -->
              <div class="poca-music-player">
                <audio preload="auto" controls>
                  <source src="audio/dummy-audio.mp3">
                </audio>
              </div>
              <!-- Likes, Share & Download -->
              <div class="likes-share-download d-flex align-items-center justify-content-between">
                <a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Like (29)</a>
                <div>
                  <a href="#" class="mr-4"><i class="fa fa-share-alt" aria-hidden="true"></i> Share(04)</a>
                  <a href="#"><i class="fa fa-download" aria-hidden="true"></i> Download (12)</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Single gallery Item -->
        <div class="col-12 col-md-6 single_gallery_item tech tutor wow fadeInUp" data-wow-delay="0.2s">
          <!-- Welcome Music Area -->
          <div class="poca-music-area style-2 d-flex align-items-center flex-wrap">
            <div class="poca-music-thumbnail">
              <img src="{{ asset('/img/bg-img/9.jpg') }}" alt="">
            </div>
            <div class="poca-music-content text-center">
              <span class="music-published-date mb-2">December 9, 2018</span>
              <h2>Episode 205 - See Ya In Three!</h2>
              <div class="music-meta-data">
                <p>By <a href="#" class="music-author">Admin</a> | <a href="#" class="music-catagory">Tutorials</a> | <a href="#" class="music-duration">00:02:56</a></p>
              </div>
              <!-- Music Player -->
              <div class="poca-music-player">
                <audio preload="auto" controls>
                  <source src="audio/dummy-audio.mp3">
                </audio>
              </div>
              <!-- Likes, Share & Download -->
              <div class="likes-share-download d-flex align-items-center justify-content-between">
                <a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Like (29)</a>
                <div>
                  <a href="#" class="mr-4"><i class="fa fa-share-alt" aria-hidden="true"></i> Share(04)</a>
                  <a href="#"><i class="fa fa-download" aria-hidden="true"></i> Download (12)</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Single gallery Item -->
        <div class="col-12 col-md-6 single_gallery_item tech wow fadeInUp" data-wow-delay="0.2s">
          <!-- Welcome Music Area -->
          <div class="poca-music-area style-2 d-flex align-items-center flex-wrap">
            <div class="poca-music-thumbnail">
              <img src="{{ asset('/img/bg-img/10.jp') }}g" alt="">
            </div>
            <div class="poca-music-content text-center">
              <span class="music-published-date mb-2">December 9, 2018</span>
              <h2>Episode 206 - Let’s Get This Party Started!</h2>
              <div class="music-meta-data">
                <p>By <a href="#" class="music-author">Admin</a> | <a href="#" class="music-catagory">Tutorials</a> | <a href="#" class="music-duration">00:02:56</a></p>
              </div>
              <!-- Music Player -->
              <div class="poca-music-player">
                <audio preload="auto" controls>
                  <source src="audio/dummy-audio.mp3">
                </audio>
              </div>
              <!-- Likes, Share & Download -->
              <div class="likes-share-download d-flex align-items-center justify-content-between">
                <a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Like (29)</a>
                <div>
                  <a href="#" class="mr-4"><i class="fa fa-share-alt" aria-hidden="true"></i> Share(04)</a>
                  <a href="#"><i class="fa fa-download" aria-hidden="true"></i> Download (12)</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
              <div class="col-md-4 col-lg-4"><img src="{{ asset('img/bg-img/26.jpg') }}" alt="">
                <p>New song <a href="" class="float-right text-primary">Download</a></p>
             <div class="poca-music-player">
                    <audio preload="auto" controls>
                      <source src="audio/dummy-audio.mp3">
                    </audio>
                  </div>
            </div>
    <div class="col-md-4 col-lg-4"><img src="{{ asset('img/bg-img/26.jpg') }}" alt="">
        <p>New song <a href="" class="float-right text-primary">Download</a></p>
     <div class="poca-music-player">
                    <audio preload="auto" controls>
                      <source src="audio/dummy-audio.mp3">
                    </audio>
                  </div>
    </div>
    <div class="col-md-4 col-lg-4"><img src="{{ asset('img/bg-img/26.jpg') }}" alt="">
        <p>New song <a href="" class="float-right text-primary">Download</a></p>
     <div class="poca-music-player">
                    <audio preload="auto" controls>
                      <source src="audio/dummy-audio.mp3">
                    </audio>
                  </div>
    </div>

        </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <a href="#" class="btn poca-btn mt-70">Load All Songs</a>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Latest Episodes Area End ***** -->

  <!-- ***** Featured Guests Area Start ***** -->
  <section class="featured-guests-area">
    <div class="container">
      <div class="row">
        <!-- Section Heading -->
        <div class="col-12">
          <div class="section-heading text-center">
            <h2>Best Rated Artists This Year</h2>
            <div class="line"></div>
          </div>
        </div>
      </div>

      <div class="row justify-content-around">
        <!-- Single Featured Guest -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="single-featured-guest mb-80">
            <img src="{{ asset('img/bg-img/25.jpg') }}" alt="">
            <div class="guest-info">
              <h5>Alfred Day</h5>
              <span>PRODUCER</span>
            </div>
          </div>
        </div>

        <!-- Single Featured Guest -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="single-featured-guest mb-80">
            <img src="{{ asset('img/bg-img/26.jpg') }}" alt="">
            <div class="guest-info">
              <h5>Jayden White</h5>
              <span>DRUMMER</span>
            </div>
          </div>
        </div>

        <!-- Single Featured Guest -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="single-featured-guest mb-80">
            <img src="{{ asset('img/bg-img/27.jpg') }}" alt="">
            <div class="guest-info">
              <h5>Vincent Reid</h5>
              <span>ENTREPRENEUR</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Featured Guests Area End ***** -->

  <!-- ***** Newsletter Area Start ***** -->
  <section class="poca-newsletter-area bg-img bg-overlay pt-50 jarallax" style="background-image: url({{ asset('img/bg-img/15.jpg') }});">
    <div class="container">
      <div class="row align-items-center">
        <!-- Newsletter Content -->
        <div class="col-12 col-lg-6">
          <div class="newsletter-content mb-50">
            <h2>Sign Up To Newsletter</h2>
            <h6>Subscribe to receive info on our latest news and episodes</h6>
          </div>
        </div>
        <!-- Newsletter Form -->
        <div class="col-12 col-lg-6">
          <div class="newsletter-form mb-50">
            <form action="#" method="post">
              <input type="email" name="nl-email" class="form-control" placeholder="Your Email">
              <button type="submit" class="btn">Subscribe</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Newsletter Area End ***** -->

  <!-- ***** Footer Area Start ***** -->
  <footer class="footer-area section-padding-80-0">
    <div class="container">
      <div class="row justify-content-center">

        <!-- Single Footer Widget -->
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="single-footer-widget mb-80">
            <!-- Widget Title -->
            <h4 class="widget-title">About Us</h4>

            <p>We are an online music website that exists to help you get access to newly released songs, videos, download  promote your contents.</p>
            <div class="copywrite-content">
              <p>&copy;

<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
          </div>
        </div>

        <!-- Single Footer Widget -->
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="single-footer-widget mb-80">
            <!-- Widget Title -->
            <h4 class="widget-title">Useful Links</h4>

            <!-- Catagories Nav -->
            <nav>
              <ul class="catagories-nav">
                <li><a href="#">Promote Songs</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms and Conditions</a></li>
              </ul>
            </nav>
          </div>
        </div>

        <!-- Single Footer Widget -->

        <!-- Single Footer Widget -->
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="single-footer-widget mb-80">
            <!-- Widget Title -->
            <h4 class="widget-title">Follow Us</h4>
            <p>Follow us on our social media platforms in order to get latest stuffs from us.</p>
            <!-- Social Info -->
            <div class="footer-social-info">
              <a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>
            </div>

          </div>
        </div>

      </div>
    </div>
  </footer>
  <!-- ***** Footer Area End ***** -->

  <!-- ******* All JS ******* -->
  <!-- jQuery js -->
  <script src="{{asset('js1/jquery.min.js')}}"></script>
  <!-- Popper js -->
  <script src="{{asset('js1/popper.min.js')}}"></script>
  <!-- Bootstrap js -->
  <script src="{{asset('js1/bootstrap.min.js')}}"></script>
  <!-- All js -->
  <script src="{{asset('js1/poca.bundle.js')}}"></script>
  <!-- Active js -->
  <script src="{{asset('js1/default-assets/active.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script>


@if (Session::has('success'))
                    toastr.success("{{ Session::get('success') }}");

                          @endif
</script>
</body>

</html>
