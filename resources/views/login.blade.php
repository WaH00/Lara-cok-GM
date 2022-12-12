@extends('layouts.mainlayout')

@section('main-structure')

    <div class="container">
        <div class="d-flex justify-content-center">
            <form class="form-design bg-image8 rounded form-design mt-5">
                <div class="row bg-glass2 m-2">
                    <div class="d-flex justify-content-center mt-3">
                        <h1 class="text-light"> LOGIN </h1>
                    </div>    
                    <hr>
                    <div class="col ms-3">
                        <div class="mt-3 ms-3 me-3">
                            <label for="email" class="form-label text-light">Email Address</label>
                            <div class="input-group">
                                <input type="text" name="" id="" class="form-control">
                            </div>
                        </div>
                        <div class="mt-3 ms-3 me-3">
                            <label for="email" class="form-label text-light">Password</label>
                            <div class="input-group">
                                <input type="text" name="" id="" class="form-control">
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