@extends('layouts.default')
@section('title', 'Home page')
@section('main-content')

{{-- Banner section --}}
    <section class="aboutus-banner">
        <div class="inner-heading">
            <h1>
                ABOUT OUR COMPANY <span>OPEN SINCE 2012</span>
                <span class="text-uppercase fontweight-normal">web and mobile app development agency in kolkata</span>

            </h1>
        </div>
        <div class="chevron_wrapper">
            <div class="inner">
                <div class="chevron"></div>
                <div class="chevron"></div>
                <div class="chevron"></div>
                <span class="text">Scroll down</span>
            </div>
        </div>
    </section>

    {{-- Bit of history --}}

    <section class="bit-history">
        <div class="container title-panel">
            <h3>A BIT OF HISTORY</h3>
        </div>

        <div class="desc-panel">
            <img data-aos="zoom-in-up" class="nine-gl aos-init" src="https://www.theaquarious.com/assets/images/about-bg-9.svg" alt="background image">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="rw-text text-uppercase">Operating since 2012, we are a web and mobile app development agency in Kolkata with a distinctive, pioneering approach to open-source web and mobile development, software development, e-commerce solutions and more.  </p>
                    </div>
                </div>
            </div>

            <div class="container-fluid g-0">

                
                <div class="row">
                    <div class="col-6">
                        <div class="zigzag-slider-left aos-init aos-animate" data-aos="fade-right" data-aos-duration="500">
                            <img class="img-fluid" src="https://www.theaquarious.com/assets/images/about-history-1.webp" alt="Our history">
                        </div>
                    </div>
                    <div class="col-6 article">
                        <h4 class="text-end">2012</h4>
                        <p class="text-end">In 2012, we started humbly in a makeshift office with two staff members and their laptops. The initial days were rigorous and daunting but nonetheless filled with rays of adventure. We attempted to prove ourselves at every step with our persistent attitude. Though our successes came in gradually, we grew by leaps and bounds as we crossed each milestone. </p>
                    </div>
                    <div class="col-6 article">
                        <h4>2013</h4>
                        <p>As 2013 approached, we finally repositioned ourselves into a proper office as we added more members to our team. With a strong team of eight, things began moving as we gained proper repute in the industry for our efficient work. We started garnering clients and broadening our horizons as we successfully completed each project. At this point, we quickened the pace of our technology development.</p>                        
                    </div>
                    <div class="col-6">
                        <div class="zigzag-slider-right text-end">
                            <img class="img-fluid" src="https://www.theaquarious.com/assets/images/about-history-2.webp" alt="Our history">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="zigzag-slider-left aos-init aos-animate" data-aos="fade-right" data-aos-duration="500">
                            <img class="img-fluid" src="https://www.theaquarious.com/assets/images/about-history-3.webp" alt="Our history">
                        </div>
                    </div>
                    <div class="col-6 article">
                        <h4 class="text-end">2014</h4>
                        <p>In 2014, we got our breakthrough by building our first praiseworthy app in Android and iOS. We were elated as the app was featured in the geographically yearly app to watch out for the list. Our hard work was indeed paying off! We were catering to domestic clients and firmly announced our presence by partnering with a marketing organisation in the U.S. </p>                    
                    </div>
                    <div class="col-6 article">     
                        <h4>2017</h4>
                        <p>As 2017 dawned upon us, we were a strong team of 25 members with offices operating in three countries. Our marketing presence in the U.S. and Australia speaks volumes about our aim to satisfy our client's demands properly. We strive to establish ourselves in IOT and automation in the upcoming years.</p>
                    </div>
                    <div class="col-6">
                        <div class="zigzag-slider-right text-end">
                            <img class="img-fluid" src="https://www.theaquarious.com/assets/images/about-history-4.webp" alt="Our history">
                        </div>
                    </div>
                </div>

                {{-- <div class="zigzag-row ">
                    <div class="d-flex justify-content-between">
                        <div class="zigzag-slider-sec aos-init aos-animate" data-aos="fade-right" data-aos-duration="500">
                            <img class="img-fluid" src="https://www.theaquarious.com/assets/images/about-history-1.webp" alt="Our history">
                        </div>
                        <div class="zigzag-slider-content aos-init aos-animate" data-aos="fade-left" data-aos-duration="500">
                            <div class="article">
                                <h4 class="text-end">2012</h4>
                                <p class="text-end">In 2012, we started humbly in a makeshift office with two staff members and their laptops. The initial days were rigorous and daunting but nonetheless filled with rays of adventure. We attempted to prove ourselves at every step with our persistent attitude. Though our successes came in gradually, we grew by leaps and bounds as we crossed each milestone. </p>
                            </div>
                        </div>
                    </div>
                </div> --}}
{{-- 
                <div class="zigzag-row ">
                    <div class="d-flex justify-content-between">
                        <div class="zigzag-slider-content aos-init aos-animate" data-aos="fade-left" data-aos-duration="500">
                            <div class="article">
                                <h4 class="text-end">2012</h4>
                                <p class="text-end">In 2012, we started humbly in a makeshift office with two staff members and their laptops. The initial days were rigorous and daunting but nonetheless filled with rays of adventure. We attempted to prove ourselves at every step with our persistent attitude. Though our successes came in gradually, we grew by leaps and bounds as we crossed each milestone. </p>
                            </div>
                        </div>
                        <div class="zigzag-slider-sec aos-init aos-animate" data-aos="fade-right" data-aos-duration="500">
                            <img class="img-fluid" src="https://www.theaquarious.com/assets/images/about-history-2.webp" alt="Our history">
                        </div>
                        
                    </div>
                </div> --}}

            </div>

        </div>
    </section>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
        </div>
      </nav>
@endsection