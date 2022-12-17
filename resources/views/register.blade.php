@extends('layouts.mainlayout')

@section('main-structure')

    <div class="container ps-5 pe-5">
        <div class="justify-content-center ps-5 pe-5">
            <form class="bg-image8 rounded mt-5 p-2" method="post" action="/register">
                @csrf
                <div class="row bg-glass2 m-2 justify-content-center p-5">
                    <div class="d-flex justify-content-center mt-3">
                        <h1 class="text-light"> REGISTER </h1>
                    </div>    
                    <hr>
                    <div class="col ms-3">
                        <div class="mt-3 ms-3 me-3">
                            <label for="email" class="form-label text-light">Full Name</label>
                            <div class="input-group">
                                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                        </div>
                        <div class="mt-3 ms-3 me-3">
                            <label for="email" class="form-label text-light">Alamat</label>
                            <div class="input-group">
                                <input type="text" name="adress" id="adress" class="form-control @error('adress') is-invalid @enderror" value="{{ old('name') }}">
                                @error('adress')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mt-3 ms-3 me-3">
                            <label for="email" class="form-label text-light">No Telepon</label>
                            <div class="input-group">
                                <input type="text" name="telp" id="telp" class="form-control @error('telp') is-invalid @enderror" value="{{ old('name') }}">
                                @error('telp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col me-3">
                        <div class="mt-3 ms-3 me-3">
                            <label for="email" class="form-label text-light">Email Address</label>
                            <div class="input-group">
                                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('name') }}">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="m-3">
                            <label for="pass" class="form-label text-light">username</label>
                            <div class="input-group">
                                <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('name') }}">
                                @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="m-3">
                            <label for="pass" class="form-label text-light">password</label>
                            <div class="input-group">
                                <input type="text" name="password" id="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('name') }}">
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
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