@extends('layouts.mainlayout')

@section('main-structure')

    @include('partials.categorily')
  
    <div class="container mt-2">
        <div class="produk" style="background-color: #a5da81; padding: 5px 10px;">
            <h5 class="text-center" style=" margin-top: 5px">PRODUK SAYUR</h5>
        </div>
        <div class="row row-cols-auto justify-content-center">
            @foreach ($item as $barang)
                <div class="col mt-2 d-flex align-items-stretch" id="1">
                    <div class="card text-center">
                        <img src={{ $barang->photo }} class="card-prod card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-title" id="idProductSayur1">{{ $barang->name }}</h6>
                            <div class="iconP" style="color:#fafa02;">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <p class="card-text mt-2" id="idHargaSayur1">Rp {{ $barang->price }}</p>
                            <a href="/singleProduk/{{$barang->id}}}" class="btn btn-success d-grid" id="idButtonSayur1" onclick="updateItemSayur(this.id, 'idProductSayur1', 'idHargaSayur1', '1')">Beli</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection 