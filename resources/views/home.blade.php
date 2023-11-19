@extends('layouts.default')
@section('title', 'Home page')
@section('main-content')
    <div class="text-center">
        <div class="word p-20"></div>
        <h1>Always New and Creative</h1>
        <p class="animate-charcter">OPSMONSTERS</p>
    </div>

    {{-- Slider panel --}}
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

    {{-- Why choose panel --}}
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
          <div class="col-6">
            {{-- <div class="p-3 border bg-light">Row column</div> --}}
            <div class="col box-wrapper">
              <img src="https://www.theaquarious.com/assets/icons/why-chosse-ico1.svg" alt="" height="80px" width="80px">
              <h3>12+ Years of Experience</h3>
              <p>A diverse blend of work experience in different industries</p>
            </div>
          </div>
          <div class="col-6">
            <div class="col box-wrapper">
              <img src="https://www.theaquarious.com/assets/icons/why-chosse-ico2.svg" alt="" height="80px" width="80px">
              <h3>Certified Developers</h3>
              <p>A diverse blend of work experience in different industries</p>
            </div>
          </div>
          <div class="col-6">
            <div class="col box-wrapper box-align">
              <img src="https://www.theaquarious.com/assets/icons/why-chosse-ico3.svg" alt="" height="80px" width="80px">
              <h3>6 Months warranty</h3>
              <p>Free bug solving post project delivery, without any extra charges</p>
            </div>          </div>
          <div class="col-6">
            <div class="col box-wrapper box-align">
              <img src="https://www.theaquarious.com/assets/icons/why-chosse-ico4.svg" alt="" height="80px" width="80px">
              <h3>Milestone wise payment</h3>
              <p>Pay gradually as you see your dream project coming to life</p>
            </div>          </div>
          <div class="col-6">
            <div class="col box-wrapper box-align">
              <img src="https://www.theaquarious.com/assets/icons/why-chosse-ico5.svg" alt="" height="80px" width="80px">
              <h3>Penalty on Missed Deadline</h3>
              <p>Didn’t meet your deadline? Don’t worry, we pay the price!</p>
            </div>          </div>
          <div class="col-6">
            <div class="col box-wrapper box-align">
              <img src="https://www.theaquarious.com/assets/icons/why-chosse-ico6.svg" alt="" height="80px" width="80px">
              <h3>Agile/DevOPS Methodology</h3>
              <p>Constant communication and flexible development for fast and continued design and
                development
              </p>
            </div>     
          </div>
        </div>
      </div>
    </section>

    {{-- Manage project panel --}}
    <section class="manage-project-panel">
      <div class="container">

        <div class="row">

          <div class="col-12">
            <h2>
              Let us
              <br>manage your projects <br>
              end-to-end
            </h2>
          </div>

          <div class="col-12">
            <h4 class="mt-5">We can build your product end to end</h4>
            <div class="list-panel">
              <ul>
                <li class="d-flex mt-3">
                  <img class="align-self-start" src="https://www.theaquarious.com/assets/icons/blue-bullet.svg" alt="bullet-icon">
                  <p class="listbox">Get us onboard to plan, design, develop, test and deploy your product with
                    100% transparency. </p>  
                </li>
                <li class="d-flex">
                  <img class="align-self-start" src="https://www.theaquarious.com/assets/icons/blue-bullet.svg" alt="bullet-icon">
                  <p class="listbox">Project-centric plan and pricing.</p>
                </li>
                <li class="d-flex">
                  <img class="align-self-start" src="https://www.theaquarious.com/assets/icons/blue-bullet.svg" alt="bullet-icon">
                  <p class="listbox">Works best for startups, businesses and enterprises.</p>
                </li>
              </ul>
          </div>

        </div>

        <div class="row">
          <div>
            <a href="enquiry">
              <button class="start-project-btn bg-warning">                
                <span class="text-dark">Start Your Project 
                  <img src="https://www.theaquarious.com/assets/icons/button-arrow.svg" alt="arrow" width="25px">
                </span>
              </button>
            </a>
          </div>
        </div>
      </div> 
    </section>

    {{-- Industry panel --}}
    <section class="industry-panel">

        <div class="waviy pt-5 ps-5">
          <span style="--i:1">I</span>
          <span style="--i:1">n</span>
          <span style="--i:2">d</span>
          <span style="--i:3">u</span>
          <span style="--i:4">s</span>
          <span style="--i:5">t</span>
          <span style="--i:6">r</span>
          <span style="--i:7">y</span>
        </div>

       <div class="container text-center">
          <h2 class="heading-two">We work for</h2>
          <p class="para-desc">
            Do you have a website in mind? Then, we’re here for you! We work around the clock to transform your
            ideas into reality
          </p>

          <div class="row">
            {{-- First row --}}
            <div class="col-4">
              <div class="icon_box">
                <img src="https://www.theaquarious.com/assets/icons/Chat-App.svg" alt="Chat app">
                <p class="fs-5">Chat App</p>
            </div>
            </div>
              <div class="col-4">
                <div class="icon_box">
                  <img src="https://www.theaquarious.com/assets/icons/Fitness-App.svg" alt="Fitness app">
                  <p class="fs-5">Fitness App</p>
                </div>
              </div>
            <div class="col-4">
              <div class="icon_box">
                <img src="https://www.theaquarious.com/assets/icons/Dating-App.svg" alt="Dating app">
                <p class="fs-5">Dating App</p>
              </div>
            </div>
            {{-- Second row --}}
            <div class="col-4 mt-4">
              <div class="icon_box">
                <img src="https://www.theaquarious.com/assets/icons/Job-Portal.svg" alt="Chat app">
                <p class="fs-5">Job Portal</p>
            </div>
            </div>
              <div class="col-4 mt-4">
                <div class="icon_box">
                  <img src="https://www.theaquarious.com/assets/icons/Learning-App.svg" alt="Fitness app">
                  <p class="fs-5">Learning App</p>
                </div>
              </div>
            <div class="col-4 mt-4">
              <div class="icon_box">
                <img src="https://www.theaquarious.com/assets/icons/Multiple-Vendors.svg" alt="Dating app">
                <p class="fs-5">Multiple Vendors</p>
              </div>
            </div>

            {{-- Third row --}}
            <div class="col-4 mt-4">
              <div class="icon_box">
                <img src="https://www.theaquarious.com/assets/icons/Online-Grocery.svg" alt="Chat app">
                <p class="fs-5">Online Grocery</p>
            </div>
            </div>
              <div class="col-4 mt-4">
                <div class="icon_box">
                  <img src="https://www.theaquarious.com/assets/icons/Travel&Tourisim.svg" alt="Fitness app">
                  <p class="fs-5">Cab Service</p>
                </div>
              </div>
            <div class="col-4 mt-4">
              <div class="icon_box">
                <img src="https://www.theaquarious.com/assets/icons/Path-240.svg" alt="Dating app">
                <p class="fs-5">Travel & Tourisim</p>
              </div>
            </div>

            {{-- Fourth row --}}
            <div class="col-4 mt-4">
              <div class="icon_box">
                <img src="https://www.theaquarious.com/assets/icons/Real-Estate.svg" alt="Chat app">
                <p class="fs-5">Real Estate</p>
            </div>
            </div>
              <div class="col-4 mt-4">
                <div class="icon_box">
                  <img src="https://www.theaquarious.com/assets/icons/Food-Delivery-App.svg" alt="Fitness app">
                  <p class="fs-5">Food Delivery App</p>
                </div>
              </div>
            <div class="col-4 mt-4">
              <div class="icon_box">
                <img src="https://www.theaquarious.com/assets/icons/Product-Management.svg" alt="Dating app">
                <p class="fs-5">Product Management</p>
              </div>
            </div>

         </div>
       </div>
    </section>

    {{-- Hire us panel --}}
    <section class="hireus-panel">
      <div class="container">
        <h2 class="mb-5">
          Hire us as your dedicated team
        </h2>
        <img class="img-fluid text-center" src="https://www.theaquarious.com/assets/images/hire.webp" alt="Hire employees" width="1200px" height="auto">
        <h4 class="mt-4 mb-4">We'll deploy a skilled team to build your product.</h4>
        
        <div class="col-12">
          <div class="list-panel">
            <ul>
              <li class="d-flex mt-3">
                <img class="align-self-start" src="https://www.theaquarious.com/assets/icons/blue-bullet.svg" alt="bullet-icon">
                <p class="listbox">
                  Time-centric pricing.
                </p>  
              </li>
              <li class="d-flex">
                <img class="align-self-start" src="https://www.theaquarious.com/assets/icons/blue-bullet.svg" alt="bullet-icon">
                <p class="listbox">
                  Works best for freelancers, business consultants and agencies with already
                  set processes.
                </p>
              </li>
            </ul>
        </div>

        <div class="row">
          <div>
            <a href="enquiry">
              <button class="start-project-btn bg-secondary.bg-gradient">                
                <span class="text-dark">
                  Know More
                  <img src="https://www.theaquarious.com/assets/icons/button-arrow.svg" alt="arrow" width="25px">
                </span>
              </button>
            </a>
          </div>
        </div>
      </div> 
    </section>

    {{-- client panel  --}}
    <section class="client-panel">
        <div class="waviy pt-5 ps-5">
          <span style="--i:1">C</span>
          <span style="--i:1">l</span>
          <span style="--i:2">i</span>
          <span style="--i:3">e</span>
          <span style="--i:4">n</span>
          <span style="--i:5">t</span>
          <span style="--i:6">e</span>
          <span style="--i:7">l</span>
          <span style="--i:7">e</span>
        </div>
        <div class="container">
          <h3>We work with great people</h3>

          {{-- National module --}}

          <div class="national">
            <h3>INDIA</h3>
            <ul data-aos="fade-up" class="aos-init aos-animate">
              <li class="client_logo_box">
                <img src="https://www.theaquarious.com/assets/images/logo1-n.jpg" alt="fun corp logo">
              </li>

              <li class="client_logo_box">
                <img src="https://www.theaquarious.com/assets/images/logo2-n.jpg" alt="Tinplate">
              </li>

              <li class="client_logo_box">
                <img src="https://www.theaquarious.com/assets/images/logo3-n.jpg" alt="Texmaco rail and engineering logo">
              </li>

              <li class="client_logo_box">
                <img src="https://www.theaquarious.com/assets/images/logo4-n.jpg" alt="esntls logo">
              </li>

              <li class="client_logo_box">
                <img src="https://www.theaquarious.com/assets/images/logo5-n.jpg" alt="Graphite india ltd logo">
              </li>

              <li class="client_logo_box">
                <img src="https://www.theaquarious.com/assets/images/logo6-n.jpg" alt="Jalan group logo">
              </li>

              <li class="client_logo_box ex-margin-90">
                <img src="https://www.theaquarious.com/assets/images/logo7-n.jpg" alt="mani group logo">
              </li>

              <li class="client_logo_box">
                <img src="https://www.theaquarious.com/assets/images/logo8-n.jpg" alt="gkw logo">
              </li>
            </ul>
          </div>

          {{-- International module --}}

          <div class="international">
            <h3>International</h3>
            <ul data-aos="fade-up" class="aos-init aos-animate">
              <li class="client_logo_box">
                <img src="https://www.theaquarious.com/assets/images/logo1-i.jpg" alt="fun corp logo">
              </li>

              <li class="client_logo_box">
                <img src="https://www.theaquarious.com/assets/images/logo2-i.jpg" alt="Tinplate">
              </li>

              <li class="client_logo_box">
                <img src="https://www.theaquarious.com/assets/images/logo3-i.jpg" alt="Texmaco rail and engineering logo">
              </li>

              <li class="client_logo_box">
                <img src="https://www.theaquarious.com/assets/images/logo4-i.jpg" alt="esntls logo">
              </li>

              <li class="client_logo_box">
                <img src="https://www.theaquarious.com/assets/images/logo5-i.jpg" alt="Graphite india ltd logo">
              </li>

              <li class="client_logo_box">
                <img src="https://www.theaquarious.com/assets/images/logo6-i.jpg" alt="Jalan group logo">
              </li>

              <li class="client_logo_box ex-margin-90">
                <img src="https://www.theaquarious.com/assets/images/logo7-i.jpg" alt="mani group logo">
              </li>

              <li class="client_logo_box">
                <img src="https://www.theaquarious.com/assets/images/logo8-i.jpg" alt="gkw logo">
              </li>
              <li class="client_logo_box">
                <img src="https://www.theaquarious.com/assets/images/logo9-i.jpg" alt="gkw logo">
              </li>
            </ul>
          </div>

        </div>
    </section>

    {{-- Solutions panel --}}
    <section class="solution-panel">
      <div class="waviy pt-5 ps-5">
        <span style="--i:1">S</span>
        <span style="--i:1">o</span>
        <span style="--i:2">l</span>
        <span style="--i:3">u</span>
        <span style="--i:4">t</span>
        <span style="--i:5">i</span>
        <span style="--i:6">o</span>
        <span style="--i:7">n</span>
        <span style="--i:7">s</span>
      </div>
      <div class="container">
        <h2 class="heading-two text-center">What we do best</h2>
          <p class="para-desc text-center">
            Seeking the best for your website needs? Look no further! We offer you utmost satisfaction when it comes
            to best-in-class web technology services and solutions.
          </p>

          <div class="row">
            {{-- First row --}}
            <div class="col-6">
              <div class="icon_box">
                <img src="https://www.theaquarious.com/assets/icons/uiux-ico.svg" alt="Education and learning">
                <div class="img-dxc">
                    <h6>UI / UX Design</h6>
                    <p>Your design, your way! We customize our services to suit your tastes to the tee</p>
                </div>
              </div>
            </div>

            <div class="col-6">
              <div class="icon_box">
                <img src="https://www.theaquarious.com/assets/icons/web-mob-ico.svg" alt="Mobile app developer">
                <div class="img-dxc">
                    <h6>Web &amp; Mobile App Development</h6>
                    <p>Multiple requirements? We’ll support all your needs in an organized manner. </p>
                </div>
              </div>
            </div>

            {{-- Second row --}}

            <div class="col-6 mt-4">
              <div class="icon_box">
                <img src="https://www.theaquarious.com/assets/icons/api-ico.svg" alt="API development">
                <div class="img-dxc">
                    <h6>API Development</h6>
                    <p>Worried about your application? Don’t fret! Our dedicated developers are here to get the
                        job done. </p>
                </div>
              </div>
            </div>

            <div class="col-6 mt-4">
              <div class="icon_box">
                  <img src="https://www.theaquarious.com/assets/icons/upgrades-ico.svg" alt="Upgrades and updates">
                  <div class="img-dxc">
                      <h6>Maintenance &amp; Upgrades</h6>
                      <p>Project Complete? We’re still here. You can contact us for post-service requirements at
                          any time.</p>
                  </div>
              </div>
            </div>

            {{-- Third row --}}

            <div class="col-6 mt-4">
              <div class="icon_box">
                <img src="https://www.theaquarious.com/assets/icons/quality-ico.svg" alt="Quality Assurance">
                <div class="img-dxc">
                    <h6>Quality Assurance</h6>
                    <p>We take pride in our work. We work till your project is even better than you expect!</p>
                </div>
              </div>
            </div>

            <div class="col-6 mt-4">
              <div class="icon_box">
                <img src="https://www.theaquarious.com/assets/icons/business-ico.svg" alt="Graph and stats">
                <div class="img-dxc">
                    <h6>Business Analysis</h6>
                    <p>We analyse your business concerns and offer solutions to meet your needs.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="let-talk">
              <a href="enquiry">
                <button style="background-color: #B1D4E0;" class="start-project-btn">                
                  <span class="text-dark">
                    Know More
                    {{-- <img src="https://www.theaquarious.com/assets/icons/button-arrow.svg" alt="arrow" width="25px"> --}}
                  </span>
                </button>
              </a>
            </div>
          </div>

      </div>
    </section>

    {{-- vedio panel --}}

    {{-- <section class="vedio-panel">
      <div class="ratio ratio-16x9">
        <iframe src="https://www.theaquarious.com/assets/images/business-video.mp4" title="YouTube video" allowfullscreen></iframe>
      </div>
    </section> --}}


    {{-- Our Technology panel --}}
    <section class="ourtech-panel">
      <div class="container text-center">
        <h2>Our Technology Expertise</h2>

        <div class="row">

          {{-- First row --}}
          <div class="col-4">
            <div class="exp-bx aos-init" data-aos="flip-up">
              <img src="https://www.theaquarious.com/assets/icons/ode-angular.svg" alt="Angular logo">
              <h4>Angular</h4>
            </div>
          </div>

          <div class="col-4">
            <div class="exp-bx aos-init" data-aos="flip-up">
              <img src="https://www.theaquarious.com/assets/icons/ode-flutter.svg" alt="Flutter logo">
              <h4>Flutter</h4>
            </div>
          </div>

          <div class="col-4">
            <div class="exp-bx aos-init" data-aos="flip-up">
              <img src="https://www.theaquarious.com/assets/icons/ode-kotlin.svg" alt="Angular logo">
              <h4>Angular</h4>
            </div>
          </div>

        </div>
      </div>
    </section>
@endsection
