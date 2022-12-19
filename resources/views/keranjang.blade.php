@extends('layouts.mainlayout')

@section('main-structure')

    <!-- START BREADCRUM -->
    <div class="container">
        <nav aria-label="breadcrumb" style="background-color: #7cf2af ;" class="mt-2">
            <ol class="breadcrumb p-3">
                <li class="breadcrumb-item"><a href="homePage.html" class="text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Keranjang</li>
            </ol>
        </nav>
    </div>
    <!-- END BREADCRUM -->

    <!-- START KERANJANG -->
    <div class="container">
        <div class="row row-produk">
            <div class="col  table-responsive mt-4 mx-3">
                <table class="table">
                    <thead class="table-success">
                        <tr>
                            <th scope="col">HAPUS</th>
                            <th scope="col">GAMBAR</th>
                            <th scope="col">PRODUK</th>
                            <th scope="col">HARGA</th>
                            <th scope="col">JUMLAH</th>
                            <th scope="col">SUB-TOTAL</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle" id="tableBody">
                        @foreach ($cart as $item)
                            <tr>
                                <th scope="row"><a href=""><i class="fa-solid fa-trash text-success fs-4"></i></a></th>
                                <td><img src="{{ $item->barang->photo }}" class="img-cart"></td>
                                <td>{{ $item->barang->name }}</td>
                                <td>Rp.{{ $item->barang->price }}</td>
                                <td>
                                    <button type="button" class="btn btn-dark"><i class="fas fa-minus"> </i></button>
                                    <span class="mx-2">{{ $item->quantity }}</span>
                                    <button type="button" class="btn btn-dark"><i class="fas fa-plus"></i></button>
                                </td>
                                <td>Rp. </td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row row-produk">
            <div class="col table-responsive">
                <table class="table ms-auto text-center table-borderless" id="table-co">
                    <thead class="table-success">
                        <tr>
                            <th scope="col" colspan="2">Total Keranjang Kamu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="fw-bold">Total Harga</td>
                            <td>Rp.666.666.666</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="btn-co d-grid">
                                    <a href="checkout.html" class="btn btn-success btn-sm mx-5">Checkuut</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection 