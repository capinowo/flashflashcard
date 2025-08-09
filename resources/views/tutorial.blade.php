@extends('layouts.app')

@section('content')

<style>
    .carousel-inner img {
        width: 100%;
        border-radius: 1.5rem;
    }

    .exit-button {
        position: absolute;
        top: 10px;
        right: 10px;
        background: white;
        border: none;
        color: #F07D65;
        font-weight: bold;
        border-radius: 10px;
        padding: 6px 12px;
        z-index: 10;
    }

    .tutorial-container {
        position: relative;
        width: 100%;
        height: 100%;
        cursor: pointer;
    }
</style>

{{-- Tombol Exit --}}
<a href="/" class="exit-button">Exit</a>

{{-- Carousel --}}
<div id="tutorialCarousel" class="carousel slide tutorial-container" data-bs-touch="true" data-bs-interval="false">
    <div class="carousel-inner" onclick="nextSlide()">
        <div class="carousel-item active">
            <img src="{{ asset('images/tutorial/slide1.png') }}" class="d-block w-100" alt="Tutorial Slide 1">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/tutorial/slide2.png') }}" class="d-block w-100" alt="Tutorial Slide 2">
        </div>
    </div>
</div>

{{-- Script untuk slide otomatis saat di-tap --}}
<script>
    function nextSlide() {
        const carousel = document.querySelector('#tutorialCarousel');
        const carouselInstance = bootstrap.Carousel.getInstance(carousel) || new bootstrap.Carousel(carousel);
        carouselInstance.next();
    }
</script>

@endsection
