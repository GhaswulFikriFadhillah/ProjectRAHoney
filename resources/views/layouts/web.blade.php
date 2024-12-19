<!DOCTYPE html>
<html lang="en">

<head>
    <title>RA Honey - 100% Murni</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="TemplatesJungle">
    <meta name="keywords" content="ecommerce,fashion,store">
    <meta name="description" content="Bootstrap 5 Fashion Store HTML CSS Template">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('kaira/css/vendor.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('kaira/style.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Marcellus&display=swap" rel="stylesheet">
</head>

<body class="homepage">
    <nav class="navbar navbar-expand-lg bg-light text-uppercase fs-6 p-3 border-bottom align-items-center">
        <div class="container-fluid">
            <div class="row justify-content-between align-items-center w-100">
                <div class="col-auto">
                    <a href="/landing">
                        <img src="{{ asset('kaira/images/logoRAHoney.png') }}" alt="logo">
                    </a>
                </div>
                <div class="col-auto">
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 gap-1 gap-md-5 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link" href="/landing">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/products/index">Product</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/tracking">Tracking</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/login">Login</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer id="footer" class="mt-5">
        <div class="container">
            <div class="row d-flex flex-wrap justify-content-between py-5">
                <div class="col-md-6 col-sm-6">
                    <div class="footer-menu footer-menu-001">
                        <div class="footer-intro mb-4">
                            <a href="/landing">
                                <img src="{{ asset('kaira/images/logoRAHoney.png') }}" alt="logo">
                            </a>
                        </div>
                        <p>RA Honey – Madu Murni Nektar Hutan Akasia Riau adalah madu alami berkualitas tinggi yang dihasilkan oleh lebah Apis mellifera dari nektar bunga akasia di hutan tropis Riau.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu footer-menu-002">
                        <h5 class="widget-title text-uppercase mb-4">Quick Links</h5>
                        <ul class="menu-list list-unstyled text-uppercase border-animation-left fs-6">
                            <li class="menu-item">
                                <a href="/landing">Home</a>
                            </li>
                            <li class="menu-item">
                                <a href="products.index">Product</a>
                            </li>
                            <li class="menu-item">
                                <a href="tracking.index">Tracking</a>
                            </li>
                            <li class="menu-item">
                                <a href="/login">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-top py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 text-end">
                        <p>© Copyright 2022 Kaira. All rights reserved. Design by <a href="https://templatesjungle.com" target="_blank">TemplatesJungle</a> Distribution By <a href="https://themewagon.com" target="blank">ThemeWagon</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('kaira/js/jquery.min.js') }}"></script>
    <script src="{{ asset('kaira/js/plugins.js') }}"></script>
    <script src="{{ asset('kaira/js/SmoothScroll.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="{{ asset('kaira/js/script.min.js') }}"></script>
</body>

</html>
