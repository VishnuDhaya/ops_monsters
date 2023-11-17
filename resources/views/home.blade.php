@extends('layouts.default')
@section('title', 'Home page')
@section('main-content')
    <div class="text-center">
        <div class="word p-20"></div>
        <h1>Always New and Creative</h1>
        <p class="animate-charcter">OPSMONSTERS</p>
    </div>
    <section class="container slider">
        <h2>Talk to us and get your
            project moving!</h2>
        <p>This is exactly what will happen after you submit your form:</p>
        <div id="carouselExampleIndicators" class="carousel slide pb-5">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>

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
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        
    </section>
    <section class="whychoose-panel">
      <div class="container">
        <div class="whychoose-toppanel">
            <h2>Why Choose OPSMONSTERS</h2>
            <p class="pb-3">
              Elevating customer experience in every creation, we have been building and launching websites,
              <br>
              mobile apps and brands across 25 countries. 
            </p>
        </div>

        <div class="row row-cols-2 row-cols-lg-5 g-4 g-lg-3 pt-5">
          <div class="col">
            {{-- <div class="p-3 border bg-light">Row column</div> --}}
            <div class="col box-wrapper">
              <img src="https://www.theaquarious.com/assets/icons/why-chosse-ico1.svg" alt="" height="80px" width="80px">
              <h4>12+ Years of Experience</h4>
              <p>A diverse blend of work experience in different industries</p>
            </div>
          </div>
          <div class="col">
            <div class="col box-wrapper">
              <img src="https://www.theaquarious.com/assets/icons/why-chosse-ico2.svg" alt="" height="80px" width="80px">
              <h4>Certified Developers</h4>
              <p>A diverse blend of work experience in different industries</p>
            </div>
          </div>
          <div class="col">
            <div class="col box-wrapper">
              <img src="https://www.theaquarious.com/assets/icons/why-chosse-ico3.svg" alt="" height="80px" width="80px">
              <h4>6 Months warranty</h4>
              <p>Free bug solving post project delivery, without any extra charges</p>
            </div>          </div>
          <div class="col">
            <div class="col box-wrapper">
              <img src="https://www.theaquarious.com/assets/icons/why-chosse-ico4.svg" alt="" height="80px" width="80px">
              <h4>Milestone wise payment</h4>
              <p>Pay gradually as you see your dream project coming to life</p>
            </div>          </div>
          <div class="col">
            <div class="col box-wrapper">
              <img src="https://www.theaquarious.com/assets/icons/why-chosse-ico5.svg" alt="" height="80px" width="80px">
              <h4>Penalty on Missed Deadline</h4>
              <p>Didn’t meet your deadline? Don’t worry, we pay the price!</p>
            </div>          </div>
          <div class="col">
            <div class="col box-wrapper">
              <img src="https://www.theaquarious.com/assets/icons/why-chosse-ico6.svg" alt="" height="80px" width="80px">
              <h4>Agile/DevOPS Methodology</h4>
              <p>Constant communication and flexible development for fast and continued design and
                development
              </p>
            </div>     
          </div>
        </div>

        {{-- <div class="row pt-5 gx-4">
          <div class="col box-wrapper box-1 bg-primary">
            <img src="https://www.theaquarious.com/assets/icons/why-chosse-ico1.svg" alt="" height="80px" width="80px">
            <h3>12+ Years of Experience</h3>
            <p>A diverse blend of work experience in different industries</p>
          </div>
          <div class="col box-wrapper box-2 bg-secondary">
            <img src="https://www.theaquarious.com/assets/icons/why-chosse-ico1.svg" alt="" height="80px" width="80px">
            <h3>12+ Years of Experience</h3>
            <p>A diverse blend of work experience in different industries</p>
          </div>
        </div> --}}
      </div>
    </section>
@endsection
