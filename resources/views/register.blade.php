@extends('layouts.mainlayout')

@section('main-structure')

    <div class="container">
        <div class="d-flex justify-content-center">
            <form class="bg-image8 rounded mt-5" method="post">
                @csrf
                <div class="row bg-glass2 m-2">
                    <div class="d-flex justify-content-center mt-3">
                        <h1 class="text-light"> REGISTER </h1>
                    </div>    
                    <hr>
                    <div class="col ms-3">
                        <div class="mt-3 ms-3 me-3">
                            <label for="email" class="form-label text-light">Full Name</label>
                            <div class="input-group">
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                        </div>
                        <div class="mt-3 ms-3 me-3">
                            <label for="email" class="form-label text-light">Alamat</label>
                            <div class="input-group">
                                <input type="text" name="adress" id="adress" class="form-control">
                            </div>
                        </div>
                        <div class="mt-3 ms-3 me-3">
                            <label for="email" class="form-label text-light">No Telepon</label>
                            <div class="input-group">
                                <input type="text" name="telp" id="telp" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col me-3">
                        <div class="mt-3 ms-3 me-3">
                            <label for="email" class="form-label text-light">Email Address</label>
                            <div class="input-group">
                                <input type="text" name="email" id="email" class="form-control">
                            </div>
                        </div>
                        <div class="m-3">
                            <label for="pass" class="form-label text-light">Password</label>
                            <div class="input-group">
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                        </div>
                        <div class="m-3">
                            <label for="pass" class="form-label text-light">Confirm Password</label>
                            <div class="input-group">
                                <input type="text" name="confirmpass" id="confirmpass" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="container mt-5">
                        <div class="d-flex justify-content-center mb-2">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                        <div class="d-flex justify-content-center mb-3">
                            <a href="Login.html" class="form-link text-light">Already Have an account? Log in.</a>
                        </div>
                    </div>
                </div>
            </form> 
        </div>
    </div>

@endsection 