@extends('layouts.default')
@section('title', 'Home page')
@section('main-content')
    <div class="text-center">
        <div class="word p-20"></div>
        <h1>Always New and Creative</h1>
        <p class="animate-charcter">AQUARIOUS</p>
    </div>
    <section class="container slider">
        <h2>Talk to us and get your
            project moving!</h2>
        <p>This is exactly what will happen after you submit your form:</p>
        <div id="carouselExampleCaptions" class="carousel slide pb-5">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>

              
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://www.theaquarious.com/assets/images/step_i-01.webp" class="d-block w-100" alt="...">
                
              </div>
              <div class="carousel-item">
                <img src="https://www.theaquarious.com/assets/images/step_ii-01.webp" class="d-block w-100" alt="...">
               
              </div>
              <div class="carousel-item">
                <img src="https://www.theaquarious.com/assets/images/step_iii-01.webp" class="d-block w-100" alt="...">
                
              </div>
              <div class="carousel-item">
                <img src="https://www.theaquarious.com/assets/images/step_iv-01.webp" class="d-block w-100" alt="...">
                {{-- <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div> --}}
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        
    </section>
@endsection
