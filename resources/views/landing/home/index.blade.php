@extends('layouts.web')

@section('content')
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

            <!-- Penjelasan Fitur -->
            <section class="features py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 text-center" data-aos="fade-in" data-aos-delay="0">
                            <div class="py-5">
                                <h4 class="element-title text-capitalize my-3">100% Murni & Alami</h4>
                                <p>RA Honey adalah madu murni berkualitas tinggi dari nektar akasia Riau, tanpa campuran
                                    bahan
                                    kimia.</p>
                            </div>
                        </div>
                        <div class="col-md-3 text-center" data-aos="fade-in" data-aos-delay="300">
                            <div class="py-5">
                                <h4 class="element-title text-capitalize my-3">Rasa & Aroma Khas</h4>
                                <p>Rasakan kelezatan madu dengan rasa manis lembut dan aroma floral alami yang menyegarkan.
                                </p>
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
                                <p>Meningkatkan daya tahan tubuh, sumber energi alami, dan mendukung gaya hidup sehat Anda.
                                </p>
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
                                    <img src="{{ asset('kaira/images/single-image-2.jpg') }}" alt="collection"
                                        class="product-image img-fluid">
                                </div>
                            </div>
                            <div class="col-md-6 column-container bg-white">
                                <div class="collection-content p-4 m-0 m-md-4">
                                    <h3 class="element-title text-uppercase">RA Honey – Madu Murni Pilihan Anda</h3>
                                    <p>Rasakan kelezatan dan manfaat alami RA Honey, madu murni dari nektar bunga akasia di
                                        hutan Riau.
                                        Diproduksi secara alami tanpa bahan tambahan, RA Honey hadir untuk mendukung
                                        kesehatan
                                        Anda dengan rasa
                                        manis yang lembut, aroma floral khas, dan nutrisi alami yang terjaga. Jadikan RA
                                        Honey
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
        @endsection
