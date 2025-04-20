<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Horizons Travel</title>
  <meta name="author" content="vecuro">
  <meta name="description" content="Travolo -  Travel Agency & Tour Booking HTML Template">
  <meta name="keywords" content="Travolo -  Travel Agency & Tour Booking HTML Template">
  <meta name="robots" content="INDEX,FOLLOW">

  <!-- Mobile Specific Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicons - Place favicon.ico in the root directory -->
  <link rel="icon" type="image/png" href="{{ asset('assets/img/logo4.png') }}">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">

  <!--==============================
	  Google Fonts
	============================== -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <!--==============================
	    All CSS File
	============================== -->
  <!-- Bootstrap -->
  <!-- <link rel="stylesheet" href="assets/css/app.min.css"> -->
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
  <!-- Fontawesome Icon -->
  <link rel="stylesheet" href="{{asset('assets/css/fontawesome.min.css') }}">
  <!-- Magnific Popup -->
  <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.min.css') }}">
  <!-- Slick Slider -->
  <link rel="stylesheet" href="{{asset('assets/css/slick.min.css') }}">
  <!-- Theme Custom CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/style.css') }}">
</head>

<body>

  <!--********************************
  Code Start From Here 
	******************************** -->

  <!--==============================
    Mobile Menu
  ============================== -->
  <div class="vs-menu-wrapper">
    <div class="vs-menu-area text-center">
      <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
      <div class="mobile-logo">
        <a href="/"><img src="{{ asset('assets/img/logo1.png') }}" alt="Travolo"></a>
      </div>
      <div class="vs-mobile-menu">
        <ul>
          <li class="menu">
            <a href="/">Home</a>
          </li>
          <li class="menu">
            <a href="/#about">About us</a>
          </li>
          <li class="menu">
            <a href="/#services">Our Services</a>
          </li>
          <li class="menu">
            <a href="/client/hotels">Hotels</a>
          </li>
          <li>
            <a href="/contact">Contact</a>
          </li>
          </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <!--==============================
    Sidemenu
  ============================== -->
  <div class="sidemenu-wrapper offcanvas-wrapper d-none d-lg-block">
    <div class="sidemenu-content">
      <button class="closeButton sideMenuCls">
        <i class="far fa-times"></i>
      </button>
      <div class="widget">
        <div class="vs-widget-about">
          <div class="footer-logo">
            <a href="/"><img src="{{ asset('assets/img/logo1.png') }}" alt="Travolo"></a>
          </div>
          <p class="footer-text">
            Ut tellus dolor, dapibus eget, elementum ifend cursus eleifend,
            elit. Aenea ifen dn tor wisi Aliquam er at volutpat. Dui ac tui
            end cursus eleifendrpis.
          </p>
          <div class="info-social style2">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--==============================
    Cart Side bar
  ============================== -->
  <div class="sideCart-wrapper offcanvas-wrapper d-none d-lg-block">
    <div class="sidemenu-content">
      <button class="closeButton border-theme bg-theme-hover sideMenuCls"><i class="far fa-times"></i></button>
      <div class="widget widget_shopping_cart">
        <h3 class="widget_title">Shopping cart</h3>
        <div class="widget_shopping_cart_content">
          <ul class="cart_list">
            <li class="mini_cart_item">
              <a href="shop.html" class="remove"><i class="fal fa-trash-alt"></i></a> <a href="shop.html"><img
                  src="assets/img/products/p-1-1.png" alt="Cart Image" />Modern Cow Boy Hat</a>
              <span class="quantity">
                1 × <span class="amount"><span>$</span>100.00</span>
              </span>
            </li>
            <li class="mini_cart_item">
              <a href="shop.html" class="remove"><i class="fal fa-trash-alt"></i></a> <a href="shop.html"><img
                  src="assets/img/products/p-1-2.png" alt="Cart Image" />Cat Eye Sunglasses</a>
              <span class="quantity">
                1 × <span class="amount"><span>$</span>10.00</span>
              </span>
            </li>
          </ul>
          <div class="total">
            <strong>Subtotal:</strong> <span class="amount"><span>$</span>110.00</span>
          </div>
          <div class="buttons">
            <a href="cart.html" class="vs-btn style4">View cart</a>
            <a href="checkout.html" class="vs-btn style4">Checkout</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--==============================
    Popup Search Box
  ============================== -->
  <div class="popup-search-box d-none d-lg-block  ">
    <button class="searchClose"><i class="fal fa-times"></i></button>
    <form action="#">
      <input type="text" class="border-theme" placeholder="What are you looking for">
      <button type="submit"><i class="fal fa-search"></i></button>
    </form>
  </div>

  <!--==============================
    Header Area
  ==============================-->
  <header class="vs-header header-layout2">
    <div class="header-top">
      <div class="container">
        <div class="row justify-content-between align-items-center">
          <div class="col d-none d-lg-block">
            <ul class="header-contact">
              <li><i class="fas fa-envelope"></i> <a href="mailto:info@travolo.com">contact@horizons-travel.com</a>
              </li>
              <li><i class="fas fa-phone-alt"></i> <a href="tel:21622100200">+216 22 100 200</a></li>
            </ul>
          </div>
          <div class="col-auto">
            <div class="header-social">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-google"></i></a>
            </div>
          </div>
          <div class="col-auto">
            <a class="vs-btn style2 " href="/login">Login</a>
          </div>
        </div>
      </div>
    </div>
    <div class="sticky-wrapper">
      <div class="sticky-active">
        <div class="container position-relative z-index-common">
          <div class="row align-items-center justify-content-between">
            <div class="col-auto">
              <div class="vs-logo">
                <a href="/"><img src="{{ asset('assets/img/logo1.png') }}" width="170px" alt="logo"></a>
              </div>
            </div>
            <div class="col text-end text-xl-center">
              <nav class="main-menu  menu-style1 d-none d-lg-block">
                <ul>
                  <li class="menu">
                    <a href="/">Home</a>
                  </li>

                  <li class="menu">
                    <a href="/#about">About us</a>
                  </li>


                  <li class="menu">
                    <a href="/#services">Our Services</a>
                  </li>

                  <li class="menu">
                    <a href="/client/hotels">Hotels</a>
                  </li>
               
                  <li>
                    <a href="/contact">Contact</a>
                  </li>
                </ul>
              </nav>
              <button class="vs-menu-toggle d-inline-block d-lg-none"><i class="fal fa-bars"></i></button>
            </div>
            <div class="col-auto d-none d-xl-block">
              <div class="header-btns">
                <button class="sideMenuToggler"><i class="fal fa-bars"></i></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  @yield('Content')

  <footer class="footer-wrapper footer-layout1 shape-mockup-wrap">
    <div class="shape-mockup d-none d-xl-block jump z-index-negative" data-top="20%" data-left="0%">
      <img src="{{asset('assets/img/shape/tree-left.png')}}" alt="svg">
    </div>
    <div class="shape-mockup d-none d-xl-block jump z-index-negative" data-top="20%" data-right="0%">
      <img src="{{asset('assets/img/shape/tree-right.png')}}" alt="svg">
    </div>
    <div class="container ">
      <div class="footer-newsletter2 space-top">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="newsletter-style2">
              <div class="newsletter-img">
                <img src="{{asset('assets/img/shape/call.png')}}" alt="image">
              </div>
              <h3 class="newsletter-text">Call Us 24/7</h3>
              <a href="tel:+8801234567890">+216 22 100 200</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="newsletter-style2">
              <div class="newsletter-img">
                <img src="{{asset('assets/img/shape/share.png')}}" alt="image">
              </div>
              <h3 class="newsletter-text">Subscribe</h3>
              <a href="#">Sign up for daily update</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <form class="form-group">
              <input type="email" class="form-control" placeholder="Enter your email">
              <button class="vs-btn style4" type="submit">Subscribe</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="widget-area2">
      <div class="container">
        <div class="row g-5 justify-content-between">
          <div class="col-md-6 col-xl-3">
            <div class="widget footer-widget">
              <div class="vs-widget-about">
                <div class="footer-logo">
                  <a href="/"><img src="{{ asset('assets/img/logowhite.png') }}" alt="Travolo" class="logo" /></a>
                </div>
                <p class="footer-text">Travel Agency</p>
                <div class="social-style1">
                  <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                  <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                  <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-2">
            <div class="widget widget_nav_menu footer-widget">
              <h3 class="widget_title">Useful Links</h3>
              <div class="menu-all-pages-container">
                <ul class="menu">
                  <li><a href="/"><i class="far fa-angle-right"></i> Home</a></li>
                  <li><a href="destinations.html"><i class="far fa-angle-right"></i> Destinations</a></li>
                  <li><a href="tours.html"><i class="far fa-angle-right"></i> Tour</a></li>
                  <li><a href="shop.html"><i class="far fa-angle-right"></i> Shop</a></li>
                  <li><a href="blog.html"><i class="far fa-angle-right"></i> Blog</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-2">
            <div class="widget widget_nav_menu footer-widget footer-contact">
              <h3 class="widget_title">Contact</h3>
              <div class="menu-all-pages-container">
                <ul class="menu">
                  <li><a href="#"><i class="fas fa-map-marker-alt"></i>Sfax , Tunisia</a></li>
                  <li><a href="#"><i class="fas fa-envelope"></i> contact@horizons-travel.com</a></li>
                  <li><a href="#"><i class="fas fa-phone-alt"></i> +216 22 100 200</a></li>
                </ul>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="container">
      <div class="copyright-wrap">
        <div class="row justify-content-between align-items-center">
          <div class="col-lg-auto">
            <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> <script>document.write(new Date().getFullYear())</script> <a href="/">HORIZONS TRAVEL</a>.
              All Rights Reserved By <a href="https://iit.tn/">IIT</a></p>
          </div>
          <div class="col-auto d-none d-lg-block">
            <div class="copyright-menu">
              <ul class="list-unstyled">
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Terms & Conditions</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- ********************************
    Code Ends Here 
	********************************* -->

  <!-- Scroll To Top -->
  <a href="#" class="scrollToTop scroll-btn"><i class="far fa-arrow-up"></i></a>

  <!-- ==============================
    All Js File
  ================================ -->
  <!-- Jquery -->
  <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
  <!-- Slick Slider -->
  <script src="{{ asset('assets/js/slick.min.js') }}"></script>
  <!-- Bootstrap -->
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <!-- Magnific Popup -->
  <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
  <!-- jquery Ui -->
  <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
  <!-- Circle Progress -->
  <script src="{{ asset('assets/js/circle-progress.min.js') }}"></script>
  <!-- isotope -->
  <script src="{{ asset('assets/js/imagesLoaded.js') }}"></script>
  <script src="{{ asset('assets/js/isotope.js') }}"></script>
  <!-- Wow.js -->
  <script src="{{ asset('assets/js/wow.min.js') }}"></script>
  <!-- Main Js File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>