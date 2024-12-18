<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title', 'RA Honey - Bootstrap 5 Fashion Store')</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="author" content="TemplatesJungle">
  <meta name="keywords" content="ecommerce,fashion,store">
  <meta name="description" content="Bootstrap 5 Fashion Store HTML CSS Template">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/vendor.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Marcellus&display=swap"
    rel="stylesheet">
</head>

<body>
  @yield('content')

  <footer id="footer" class="mt-5">
    <div class="container">
      <div class="row d-flex flex-wrap justify-content-between py-5">
        <div class="col-md-3 col-sm-6">
          <div class="footer-menu footer-menu-001">
            <div class="footer-intro mb-4">
              <a href="{{ route('home') }}">
                <img src="{{ asset('images/main-logo.png') }}" alt="logo">
              </a>
            </div>
            <p>Gravida massa volutpat aenean odio. Amet, turpis erat nullam fringilla elementum diam in.</p>
            <div class="social-links">
              <ul class="list-unstyled d-flex flex-wrap gap-3">
                <li><a href="#" class="text-secondary">Facebook</a></li>
                <li><a href="#" class="text-secondary">Twitter</a></li>
                <li><a href="#" class="text-secondary">YouTube</a></li>
                <li><a href="#" class="text-secondary">Pinterest</a></li>
                <li><a href="#" class="text-secondary">Instagram</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="footer-menu footer-menu-002">
            <h5 class="widget-title text-uppercase mb-4">Quick Links</h5>
            <ul class="menu-list list-unstyled text-uppercase border-animation-left fs-6">
              <li class="menu-item"><a href="{{ route('home') }}" class="item-anchor">Home</a></li>
              <li class="menu-item"><a href="{{ route('about') }}" class="item-anchor">About</a></li>
              <li class="menu-item"><a href="{{ route('services') }}" class="item-anchor">Services</a></li>
              <li class="menu-item"><a href="{{ route('contact') }}" class="item-anchor">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="border-top py-4">
      <div class="container">
        <div class="row">
          <div class="col-md-6 d-flex flex-wrap">
            <div class="shipping"><span>We ship with:</span></div>
            <div class="payment-option"><span>Payment Option:</span></div>
          </div>
          <div class="col-md-6 text-end">
            <p>© Copyright 2024 RA Honey. All rights reserved.</p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/plugins.js') }}"></script>
  <script src="{{ asset('js/SmoothScroll.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="{{ asset('js/script.min.js') }}"></script>
</body>
</html>
