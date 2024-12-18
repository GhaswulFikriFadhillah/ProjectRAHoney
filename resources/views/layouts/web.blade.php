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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('kaira/css/vendor.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('kaira/style.css')}}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Marcellus&display=swap"
        rel="stylesheet">
</head>

<body class="homepage">
    <div class="preloader text-white fs-6 text-uppercase overflow-hidden"></div>
    <div class="search-popup">
        <div class="search-popup-container">
            <form role="search" method="get" class="form-group" action="">
                <input type="search" id="search-form" class="form-control border-0 border-bottom"
                    placeholder="Type and press enter" value="" name="s" />
                <button type="submit" class="search-submit border-0 position-absolute bg-white"
                    style="top: 15px;right: 15px;"><svg class="search" width="24" height="24">
                        <use xlink:href="#search"></use>
                    </svg></button>
            </form>
        </div>
    </div>

    <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasCart"
        aria-labelledby="My Cart">
        <div class="offcanvas-header justify-content-center">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg bg-light text-uppercase fs-6 p-3 border-bottom align-items-center">
        <div class="container-fluid">
            <div class="row justify-content-between align-items-center w-100">
                <div class="col-auto">
                    <a class="navbar-brand text-white" href="index.html">
                        <a href="index.html">
                            <img src="{{ asset('kaira/images/logoRAHoney.png')}}" alt="logo">
                        </a>
                    </a>
                </div>

                <div class="col-auto">
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                        aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>

                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 gap-1 gap-md-5 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Product</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Tracking</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Tentang Kami -->
    <section id="billboard" class="bg-light py-5">
        <div class="container">
            <div class="row justify-content-center">
                <h1 class="section-title text-center mt-4" data-aos="fade-up">RA Honey</h1>
                <div class="col-md-8 text-center" data-aos="fade-up" data-aos-delay="300">
                    <p>RA Honey – Madu Murni Nektar Hutan Akasia Riau adalah madu alami berkualitas tinggi yang
                        dihasilkan oleh
                        lebah Apis mellifera dari nektar bunga akasia di hutan tropis Riau. Dengan tekstur kental, rasa
                        manis
                        lembut, dan aroma floral khas, madu ini dipanen secara alami tanpa bahan tambahan, memastikan
                        kemurnian dan
                        keasliannya. Kaya akan nutrisi, RA Honey mendukung kesehatan tubuh, meningkatkan imunitas, dan
                        menjadi
                        sumber energi alami. Diproses dengan metode ramah lingkungan, RA Honey tidak hanya menjaga
                        kualitas
                        produknya, tetapi juga berkontribusi pada keberlanjutan ekosistem hutan akasia. Pilihan sempurna
                        untuk gaya
                        hidup sehat Anda!</p>
                </div>
            </div>

            
            {{-- <!-- Produk Case -->
            <div class="row">
                <div class="swiper main-swiper py-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="swiper-wrapper d-flex border-animation-left">
                        <div class="swiper-slide">
                            <div class="banner-item image-zoom-effect">
                                <div class="image-holder">
                                        <!-- Gambar Produk -->
                                </div>
                                <div class="banner-content py-4">
                                    <h5 class="element-title text-uppercase">
                                        <!-- Nama Produk -->
                                    </h5>
                                    <p>
                                        <!-- Deskripsi Produk -->                                    
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="icon-arrow icon-arrow-left"><svg width="50" height="50" viewBox="0 0 24 24">
                        <use xlink:href="#arrow-left"></use>
                    </svg></div>
                <div class="icon-arrow icon-arrow-right"><svg width="50" height="50" viewBox="0 0 24 24">
                        <use xlink:href="#arrow-right"></use>
                    </svg></div>
            </div>
        </div>
    </section> --}}

    <!-- Penjelasan Fitur -->
    <section class="features py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-center" data-aos="fade-in" data-aos-delay="0">
                    <div class="py-5">
                        <h4 class="element-title text-capitalize my-3">100% Murni & Alami</h4>
                        <p>RA Honey adalah madu murni berkualitas tinggi dari nektar akasia Riau, tanpa campuran bahan
                            kimia.</p>
                    </div>
                </div>
                <div class="col-md-3 text-center" data-aos="fade-in" data-aos-delay="300">
                    <div class="py-5">
                        <h4 class="element-title text-capitalize my-3">Rasa & Aroma Khas</h4>
                        <p>Rasakan kelezatan madu dengan rasa manis lembut dan aroma floral alami yang menyegarkan.</p>
                    </div>
                </div>
                <div class="col-md-3 text-center" data-aos="fade-in" data-aos-delay="600">
                    <div class="py-5">
                        <h4 class="element-title text-capitalize my-3">Diproses Secara Alami</h4>
                        <p>Madu dipanen langsung dari lebah Apis mellifera tanpa melalui pemanasan berlebih, menjaga
                            nutrisi alami.
                        </p>
                    </div>
                </div>
                <div class="col-md-3 text-center" data-aos="fade-in" data-aos-delay="900">
                    <div class="py-5">
                        <h4 class="element-title text-capitalize my-3">Manfaat untuk Kesehatan</h4>
                        <p>Meningkatkan daya tahan tubuh, sumber energi alami, dan mendukung gaya hidup sehat Anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Penjelasana Product dan Button Whatssapp -->
    <section class="collection bg-light position-relative py-5">
        <div class="container">
            <div class="row">
                <div class="title-xlarge text-uppercase txt-fx domino">Collection</div>
                <div class="collection-item d-flex flex-wrap my-5">
                    <div class="col-md-6 column-container">
                        <div class="image-holder">
                            <img src="{{ asset('kaira/images/single-image-2.jpg')}}" alt="collection"
                                class="product-image img-fluid">
                        </div>
                    </div>
                    <div class="col-md-6 column-container bg-white">
                        <div class="collection-content p-4 m-0 m-md-4">
                            <h3 class="element-title text-uppercase">RA Honey – Madu Murni Pilihan Anda</h3>
                            <p>Rasakan kelezatan dan manfaat alami RA Honey, madu murni dari nektar bunga akasia di
                                hutan Riau.
                                Diproduksi secara alami tanpa bahan tambahan, RA Honey hadir untuk mendukung kesehatan
                                Anda dengan rasa
                                manis yang lembut, aroma floral khas, dan nutrisi alami yang terjaga. Jadikan RA Honey
                                pilihan tepat
                                untuk gaya hidup sehat Anda hari ini!</p>
                            <a href="https://wa.me/62895705049191" class="btn btn-dark text-uppercase mt-3">Pesan
                                Sekarang via WhatsApp</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Feedback Rating -->
    <section class="testimonials py-5 bg-light">
        <div class="section-header text-center mt-5">
            <h3 class="section-title">WE LOVE GOOD COMPLIMENT</h3>
        </div>
        <div class="swiper testimonial-swiper overflow-hidden my-5">
            <div class="swiper-wrapper d-flex">
                <!-- Isi Testimoni atau Rating -->
            </div>
        </div>
        <div class="testimonial-swiper-pagination d-flex justify-content-center mb-5"></div>
    </section>

    <footer id="footer" class="mt-5">
        <div class="container">
            <div class="row d-flex flex-wrap justify-content-between py-5">
                <div class="col-md-6 col-sm-6">
                    <div class="footer-menu footer-menu-001">
                        <div class="footer-intro mb-4">
                            <a href="index.html">
                                <img src="{{ asset('kaira/images/logoRAHoney.png')}}" alt="logo">
                            </a>
                        </div>
                        <p>RA Honey – Madu Murni Nektar Hutan Akasia Riau adalah madu alami berkualitas tinggi yang
                            dihasilkan oleh lebah Apis mellifera dari nektar bunga akasia di hutan tropis Riau.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu footer-menu-002">
                        <h5 class="widget-title text-uppercase mb-4">Quick Links</h5>
                        <ul class="menu-list list-unstyled text-uppercase border-animation-left fs-6">
                            <li class="menu-item">
                                <a href="#" class="item-anchor">Home</a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="item-anchor">Product</a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="item-anchor">Tracking</a>
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
                        <p>© Copyright 2022 Kaira. All rights reserved. Design by <a href="https://templatesjungle.com"
                                target="_blank">TemplatesJungle</a> Distribution By <a href="https://themewagon.com"
                                target="blank">ThemeWagon</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('kaira/js/jquery.min.js')}}"></script>
    <script src="{{ asset('kaira/js/plugins.js')}}"></script>
    <script src="{{ asset('kaira/js/SmoothScroll.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="{{ asset('kaira/js/script.min.js')}}"></script>
</body>

</html>
