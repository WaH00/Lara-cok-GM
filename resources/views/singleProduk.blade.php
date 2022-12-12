@extends('layouts.mainlayout')

@section('main-structure')

    <!-- START BREADCRUM -->
    <div class="container">
        <nav aria-label="breadcrumb" style="background-color: #7cf2af ;" class="mt-2">
            <ol class="breadcrumb p-3">
                <li class="breadcrumb-item"><a href="homePage.html" class="text-decoration-none">Home</a></li>
                <li class="breadcrumb-item"><a href="sayurkatepro.html" class="text-decoration-none">Kategori</a></li>
                <li class="breadcrumb-item active" aria-current="page">Produk</li>
            </ol>
        </nav>
    </div>
    <!-- END BREADCRUM -->

    <!-- START Single-Produk -->
    <div class="container">
        <div class="row row-produk">
            <div class="col-lg-5">
                <figure class="figure">
                    <img src={{ $item->photo }}  class="figure-img img-fluid" id="idSglimage1" style="border-radius: 5px; width: 400px;">
                    <figcaption class="figure-caption d-flex justify-content-evenly">
                        <a href="#">
                            <img src={{ $item->photo }} class="figure-img img-fluid" id="idSglimage2"
                                style="border-radius: 5px; width: 70px; height: 70px;">
                        </a>
                        <a href="#">
                            <img src={{ $item->photo }} class="figure-img img-fluid" id="idSglimage3"
                                style="border-radius: 5px; width: 70px; height: 70px;">
                        </a>
                        <a href="#">
                            <img src={{ $item->photo }} class="figure-img img-fluid" id="idSglimage4"
                                style="border-radius: 5px; width: 70px; height: 70px;">
                        </a>
                        <a href="#">
                            <img src={{ $item->photo }} class="figure-img img-fluid" id="idSglimage5"
                                style="border-radius: 5px; width: 70px; height: 70px;">
                        </a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-7">
                <h4 class="fs-1">{{ $item->name }}</h4>
                <div class="border-top border-4 border-dark">{{ $item->Kategori->name}}</div>
                <h3 class="d-flex">
                    <div class="fs-3">Rp. {{ $item->price }}</div>
                </h3>
                <button type="button" class="btn btn-dark"><i class="fas fa-minus" onclick="removeItem();"> </i></button>
                <span class="mx-2" id="quantity">0</span>
                <button type="button" class="btn btn-warning"><i class="fas fa-plus text-white" onclick="addItem();"> </i></button>
                <span class="ms-2">tersisa</span>
                <span id="stockBarang">{{ $item->stock }}</span>

                <div class="btn-produk mt-5">
                    <a href="#" class="btn btn-dark text-white btn-lg me-2 btn-cos"> Masuk Keranjang
                        <i class="fas fa-shopping-cart fs-6 me-2"></i>
                    </a>
                    <a href="#" class="btn btn-warning text-white btn-lg btn-cos">Beli</a>
                </div>
            </div>
        </div>

        <!-- START DESC&REVIEW PRODOK -->
        <div class="row row-produk pt-2">
            <div class="col-12">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="dekripsi-tab" data-bs-toggle="tab"
                            data-bs-target="#dekripsi" type="button" role="tab" aria-controls="dekripsi"
                            aria-selected="true">Deskripsi Produk</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review"
                            type="button" role="tab" aria-controls="review" aria-selected="false">Reviews</button>
                    </li>
                </ul>
                <div class="tab-content p-3" id="myTabContent">
                    <div class="tab-pane fade show active dekripsi" id="dekripsi" role="tabpanel"
                        aria-labelledby="dekripsi-tab">
                        <P>
                            Brokoli Segar dipetik langsung dari Pegunungan Hijau di Bali. </br>
                            Dikemas Dengan Rapi Sehingga Segar Saat Sampai Ditangan Anda </br>
                            </br>
                            </br>
                            </br>
                            </br>
                            </br>
                            -PENJUAL BROKOLI- </br>
                        </P>
                    </div>
                    <div class="tab-pane fade review" id="review" role="tabpanel" aria-labelledby="review-tab">
                        <div class="row">
                            <div class="col-3 col-md-1">
                                <img src="/assets/Profil/prf1.jpg " class="reviw-img rounded-circle">
                            </div>
                            <div class="col">
                                <h5 class="review-name">Penyabun Handal</h5>
                                <p class="review-des">Brokolinya segar dan nikmat Ahhh....</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3 col-md-1">
                                <img src="/assets/Profil/prf2.jpg " class="reviw-img rounded-circle">
                            </div>
                            <div class="col">
                                <h5 class="review-name">Anya Forger</h5>
                                <p class="review-des">A... Anya Brokoli ga suki.. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END DESC&REVIEW PRODOK -->

    </div>
    <!-- END Single-Produk -->

@endsection 