@extends('layouts.app')

@section('content')
<div id="carouselExampleSlidesOnly" class="carousel-home carousel slide " data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('assets/images/Slider1.png') }}" class="d-block w-100" alt="Hero">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/images/Slider2.png') }}" class="d-block w-100" alt="Hero">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/images/Slider3.png') }}" class="d-block w-100" alt="Hero">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/images/Slider4.png') }}" class="d-block w-100" alt="...">
        </div>
    </div>
</div>
@endsection
