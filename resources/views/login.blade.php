@extends('layouts.mainlayout')

@section('main-structure')

    
    <div class="container mb-5 mt-5">
        <div class="container d-flex justify-content-center">
            <div class="d-flex justify-content-center">
                @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">    
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if(session()->has('error'))
                    <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">    
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            </div>
        </div>
        <div class="d-flex justify-content-center mb-5">
            <form class="form-design bg-image8 rounded form-design " method="post" action="/login">
                @csrf
                <div class="row bg-glass2 m-2">
                    <div class="d-flex justify-content-center mt-3">
                        <h1 class="text-light"> LOGIN </h1>
                    </div>    
                    <hr>
                    <div class="col ms-3">
                        <div class="mt-3 ms-3 me-3">
                            <label for="email" class="form-label text-light">Email Address</label>
                            <div class="input-group">
                                <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" autofocus>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mt-3 ms-3 me-3">
                            <label for="password" class="form-label text-light @error('email') is-invalid @enderror" value="{{ old('password') }}">Password</label>
                            <div class="input-group">
                                <input type="text" name="password" id="password" class="form-control" autofocus>
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