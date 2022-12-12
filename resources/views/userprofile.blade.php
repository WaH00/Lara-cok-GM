@extends('layouts.mainlayout')

@section('main-structure')

    <div class="container mt-5 p-2">
        <div class="d-flex justify-content-center">
            <form class="bg-image10 rounded">
                <div class="row bg-glass2 m-2">
                    <div class="d-flex justify-content-center mt-3">
                        <img src="../assets/background-image/background1.png" alt="" class="userphoto">
                    </div>
                    <div class="col mt-3 ms-3 me-3">
                        <div class="m-3">
                            <label for="pass" class="form-label text-light">Full Name (nama lengkap)</label>
                            <div class="input-group">
                                <input type="text" name="" id="" class="form-control"  disabled>
                            </div>
                        </div>
                        <div class="m-3">
                            <label for="pass" class="form-label text-light">Email Address</label>
                            <div class="input-group">
                                <input type="text" name="" id="" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="mt-3 ms-3 me-3">
                            <label for="email" class="form-label text-light">Nomor Telepon</label>
                            <div class="input-group">
                                <input type="text" name="" id="" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="scroll-address m-3" >
                            <div class="border mb-2">
                                <div class="text-light d-flex justify-content-center bg-success">
                                    <p class="fs-5 m-0">Home</p>
                                </div>
                                <div class="m-1 mb-0 text-light">
                                    <p class="mb-1"><strong>Detail: </strong> JALAN ANAK SEHAT</p>
                                </div>
                            </div>    
                        </div>
                    </div>
                    <div class="col mt-3 ms-3 me-3">
                        <div class="mt-3 ms-3 me-3">
                            <label for="email" class="form-label text-light">New Password</label>
                            <div class="input-group">
                                <input type="text" name="" id="" class="form-control" >
                            </div>
                        </div>
                        <div class="m-3">
                            <label for="pass" class="form-label text-light">Confirm New Password</label>
                            <div class="input-group">
                                <input type="text" name="" id="" class="form-control">
                            </div>
                        </div>
                        <div class="m-3">
                            <label for="pass" class="form-label text-light">Alamat Baru</label>
                            <div class="input-group">
                                <input type="text" name="" id="" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection 