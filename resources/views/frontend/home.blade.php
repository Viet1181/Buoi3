@extends('layouts.site')
@section('title', 'Trang chu')
@section('maincontent')



    <div>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="slide carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/slider_1.webp')}}" class="d-block w-100" alt="Slide 1">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/slider_2.webp')}}" class="d-block w-100" alt="Slide 2">
                </div>
                <!-- <div class="carousel-item">
                            <img src="/assets/images/slide3.jpg" class="d-block w-100" alt="Slide 3">
                        </div>
                        <div class="carousel-item">
                            <img src="/assets/images/slide4.jpg" class="d-block w-100" alt="Slide 4">
                        </div> -->
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        
    </div>






@endsection
