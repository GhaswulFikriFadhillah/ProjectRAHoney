@extends('layouts.web')

@section('content')
    <section class="product-detail py-5">
        <div class="container">
            <div class="row">
                <div class="swiper main-swiper py-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="swiper-wrapper d-flex border-animation-left">
                        <div class="swiper-slide">
                            <div class="banner-item image-zoom-effect">
                                <div class="image-holder">
                                    <img src="{{ $product->image }}" alt="{{ $product->name }}" class="img-fluid">
                                </div>
                                <div class="banner-content py-4">
                                    <h5 class="element-title text-uppercase">
                                        {{ $product->name }}</h5>
                                    <p>{{ $product->description }}</p>
                                    <p><strong>Price: </strong>${{ $product->price }}</p>
                                    {{-- <a href="https://wa.me/62895705049191" class="btn btn-dark">Order Now via WhatsApp</a> --}}
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
    </section>
@endsection
