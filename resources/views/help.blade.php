@extends('layouts.mainlayout')

@section('main-structure')

    <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/help-image/help-1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="image/help-image/help-2.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-success"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching"
            data-bs-slide="next">
            <span class="carousel-control-next-icon bg-success"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

@endsection 