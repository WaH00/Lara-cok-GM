@extends('layouts.mainlayout')

@section('main-structure')

  <div class="container-fluid bg-dark p-0">
      <div class="d-flex justify-content-center">
        <img src="image/homepage/Homepage1.png" class="about-img" alt="">
        <div class="about-pdiv align-self-center mb-5">
          <div class="d-flex">
            <h1 class="about-title1 display-1 fw-bold" id="aboutTitle">GREEN MARKET</h1>
            <h1 class="about-title2 display-1 fw-bold" id="aboutTitle">GREEN MARKET</h1>
          </div>
            <h1 class="about-p fw-bold">SELAMAT DATANG</h1>
          <div class="justify-content-center">
            <a href="#product" class="btn btn-success">PRODUCT</a>
            <a href="#aboutdiv" class="btn btn-success">ABOUT</a>
          </div>
        </div>
      </div>
  </div>

  <!-- START CAROUSEL-->
  <div class="container d-flex mt-5 p-4 bg-image5" id="aboutdiv">
    <div class="row bg-glass p-4">
      <div id="carouselExampleIndicators" class="carousel slide col-sm-6" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="d-flex justify-content-center">
                <img src="image/carousel/ast1.jpg" class="d-block img-fluid" alt="...">
            </div>
          </div>
          <div class="carousel-item">
            <div class="d-flex justify-content-center">
                <img src="image/carousel/ast2.jpg" class="d-block img-fluid" alt="...">
            </div>
          </div>
          <div class="carousel-item">
            <div class="d-flex justify-content-center">
                <img src="image/carousel/ast3.jpg" class="d-block img-fluid" alt="...">
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div class="col-sm-6 text-center pt-4">
        <h1 class="text-center ">GREEN MARKET</h1>
        <p class="text-center fs-6">
            Green market adalah platform belanja bahan makanan online di Bali 
            yang menyajikan pilihan sayur-sayuran, buah-buahan, daging dan rempah-rempah. 
            Green Market diluncurkan pada tahun 2022, Green Market merupakan sebuah platform 
            yang disesuaikan untuk tiap wilayah dan menyediakan pengalaman berbelanja bahan 
            makanan online yang mudah, aman, dan cepat bagi pelanggan melalui dukungan 
            pembayaran dan logistik yang kuat.
        </p>
      </div>
    </div>  
  </div>

  <div class="container d-flex mt-5 p-4 bg-image6" id="aboutdiv">
    <div class="row bg-glass p-4">
      <div class="col-sm-6 text-center pt-4">
        <h1 class="text-center ">TUJUAN</h1>
        <p class="text-center fs-6">
          Tujuan dari web Green Market adalah untuk memudahkan masyarakat untuk 
          dapat membeli kebutuhan makanan seperti sayur-sayuran, daging, buah-buahan 
          dan rempah-rempah tanpa harus kesulitan untuk keluar rumah. Dengan adanya 
          Green Market masyarakat dapat mengifiensi waktu dan tenaga dan hanya perlu memesan 
          melalui website dan barang yang dipesan siap diantarkan ke lokasi masing-masing 
          pemesan sehingga lebih praktis dan fleksibel
        </p>
      </div>
    </div>  
  </div>
  <!-- END CAROUSEL-->

  <div class="container mt-5">
    <div class="bg-image1 rounded p-0" id="product">
      <a href="sayurkatepro.html" class="text-decoration-none">
        <div class=" overflow-hidden d-flex rounded justify-content-center">
          <p class="fw-bold text-light display-4 mt-4 mb-4">PRODUCT</p>
        </div>
      </a>
    </div>
    <div class="row">
      <div class="col-6 p-2">
        <div class="bg-image1 rounded p-0">
          <a href="sayurkatepro.html" class="text-decoration-none">
            <div class="bg-glass1 overflow-hidden d-flex rounded justify-content-center">
              <p class="fw-bold text-light display-4 mt-4 mb-4">SAYUR</p>
            </div>
          </a>
        </div>
      </div>
      <div class="col-6 p-2">
        <div class="bg-image2 rounded p-0">
          <a href="buahkatepro.html" class="text-decoration-none">
            <div class="bg-glass1 overflow-hidden d-flex rounded justify-content-center">
              <p class="fw-bold text-light display-4 mt-4 mb-4">BUAH</p>
            </div>
          </a>
        </div>
      </div>
      <div class="col-6 p-2">
        <div class="bg-image3 rounded p-0">
          <a href="rempahkatpro.html" class="text-decoration-none">
            <div class="bg-glass1 overflow-hidden d-flex rounded justify-content-center">
              <p class="fw-bold text-light display-4 mt-4 mb-4">REMPAH</p>
            </div>
          </a>
        </div>
      </div>
      <div class="col-6 p-2">
        <div class="bg-image4 rounded p-0">
          <a href="dagingkatepro.html" class="text-decoration-none">
            <div class="bg-glass1 overflow-hidden d-flex rounded justify-content-center">
              <p class="fw-bold text-light display-4 mt-4 mb-4">DAGING</p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- END PRODUK-->
@endsection 
  