<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Poca - Podcast &amp; Audio Template">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>9jamusicblaze | welcome</title>


  <!-- Core Stylesheet -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

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
                <li class="current-item"><a href="./index.html">Home</a></li>

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
              <div class="welcome-text ">
                  <br><br>
                <h2 data-animation="fadeInUp" data-delay="100ms">Upload your songs stress-free.</h2>

              <!-- Welcome Music Area -->
              <br><br>
            @yield('content')
            <br><br>

            <div data-animation="fadeInUp" data-delay="300ms" class="">
                <a href="" class="text-center" style="padding:7px; margin:0;border-radius:15px;background-color:lightcyan; font-size:24px;width:100px;">Music</a>
                <a href="" class="text-center" style="padding:7px; margin:0;border-radius:15px;background-color:lightcyan; font-size:24px;width:100px;">Videos</a>
                <a href="" class="text-center" style="padding:7px; margin:0;border-radius:15px;background-color:lightcyan; font-size:24px;width:200px;">Songs Promotion </a>
                <a href="" class="text-center music" style="padding:7px; margin-left:3px;border-radius:15px;background-color:lightcyan; font-size:24px;width:100px;">Latest</a>
                <a href="{{route('songs.create')}}" class="text-center music" style="padding:7px; margin-left:3px;border-radius:15px;background-color:lightcyan; font-size:24px;width:200px;">Upload Song</a>

             </div>
              <div class="top-search-area mt-4 text-center">
             <form action="index.html" method="post" style="width:80%">
               <input type="search" name="top-search-bar" class="form-control" placeholder="Search anything you want...">
               <button type="submit"><i class="fa fa-search float-right" style="text-align:right" aria-hidden="true"></i></button>
             </form>
           </div>

           </div>
    </div>
  </section>
  <!-- ***** Welcome Area End ***** -->

  <!-- ***** Latest Episodes Area Start ***** -->


  <!-- ***** Newsletter Area Start ***** -->

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
            <h4 class="widget-title">Categories</h4>

            <!-- Catagories Nav -->
            <nav>
              <ul class="catagories-nav">
                <li><a href="#">Entrepreneurship</a></li>
                <li><a href="#">Media</a></li>
                <li><a href="#">Tech</a></li>
                <li><a href="#">Tutorials</a></li>
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

</body>

</html>
