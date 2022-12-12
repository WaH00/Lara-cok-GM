@extends('layouts.mainlayout')

@section('main-structure')

    <div class="container mt-5">
        <div class="d-flex justify-content-center">
            <div class="bg-image9">
                <div class="row bg-glass2">
                    <div class="d-flex justify-content-center mt-3">
                        <h1 class="text-light"> Checkout </h1>
                    </div>   
                    <div class="col-6">
                        <div class="">
                            <div class="mt-2 bg-glass2 scroll1 p-1">
                                <table class="table table-borderless">
                                    <thead class="">
                                        <tr class="text-success">
                                            <th scope="col">NO</th>
                                            <th scope="col">NAMA PRODUK</th>
                                            <th scope="col">JUMLAH</th>
                                            <th scope="col">HARGA</th>
                                            <th scope="col">TOTAL</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-light">
                                        <tr class="">
                                            <td>adwad</td>
                                            <td>adwad</td>
                                            <td>adwad</td>
                                            <td>adwad</td>
                                            <td>adwad</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div>
                            <label for="disabledTextInput" class="form-label text-light mt-3 me-3 h5">Nama Pemesan</label>
                            <div class="input-group">
                                <input type="text" id="disabledTextInput" class="form-control" placeholder="ANAK AGUNG NGURAH GEDE DHANANJAYA" disabled> 
                            </div>
                        </div>
                        <div>
                            <label for="disabledTextInput" class="form-label text-light mt-3 me-3 h5">Alamat</label>
                            <div class="input-group">
                                <input type="text" id="disabledTextInput" class="form-control" placeholder="JALAN ANAK BAIK" disabled> 
                            </div>
                        </div>
                        <div class="mt-3 h5">
                            <div class="input-group mb-3">
                                <button class="btn text-light bg-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Order Type</button>
                                <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">DELIVERY</a></li>
                                <li><a class="dropdown-item" href="#">PICK UP</a></li>
                                </ul>
                                <input type="text" class="form-control" aria-label="Text input with dropdown button" disabled>
                            </div>
                        </div>
                        <div class="mt-3 h5">
                            <div class="input-group mb-3">
                                <button class="btn text-light bg-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Payment Method</button>
                                <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">BCA</a></li>
                                <li><a class="dropdown-item" href="#">MANDIRI</a></li>
                                </ul>
                                <input type="text" class="form-control" aria-label="Text input with dropdown button" disabled>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label for="name" class="text-light h5">Bukti Transfer</label>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputGroupFile01">
                            </div>  
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mb-3 mt-3">
                        <a href="#" class="btn btn-success">SUBMIT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 