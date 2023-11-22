@extends('layouts.default')
@section('title', 'Home page')
@section('main-content')

{{-- Banner section --}}
    <section class="enquiry-banner">
        <div class="container">
            <div class="container">
                <div class="inner-heading">
                    <h1>
                        SUBMIT QUERY <span>Don’t leave confused. Seek a free consultation!</span>
                    </h1>
                </div>
            </div>
        </div>
    </section>

    {{-- Enquiry main section --}}
    
    <section class="enquiry-main">
        <div class="container">
            <div class="row">
                <div class="col-md-6 query-form">
                    <div class="enq-left">
                        <div class="title-st2">
                            <h3>
                                QUERY <span>FORM
                                </span></h3>
                        </div>
                        <p>If you are tingling to transform your ideas into reality, come down to our office and we can
                            discuss your vision over a cup of coffee. You can also email us and expect a reply within 6
                            hours. We are here, waiting to hear about your dreams. </p>

                    </div>
                </div>
                <div class="col-md-6 query-form">
                    <div class="enq-right">
                        <img class="e-erro" src="https://www.theaquarious.com/assets/images/enquiry-arrow.svg" alt="arrow button">
                        <form action="" class="contact-us" id="enqueryCall">
                            <div class="form-group">
                                <label>YOUR NAME*</label>
                                <input type="text" class="form-control" placeholder="Jonathon Smith" required="" name="name">
                            </div>

                            <div class="form-group">
                                <label>YOUR EMAIL*</label>
                                <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="form-control" placeholder="johnsmith@example.com" required="" name="email">
                            </div>

                            <div class="form-group">
                                <label> YOUR PHONE NUMBER* </label>
                                <input required="" id="phone" type="tel" name="phone" pattern="[0-9][0-9]{9}" placeholder="9647568345">
                                <span id="valid-msg" class="hide">Valid</span>
                                <span id="error-msg" class="hide">Invalid number</span>
                            </div>

                            <div class="form-group">
                                <label>YOUR MESSAGE*</label>
                                <textarea class="form-control" placeholder="Message" rows="3" name="message" required=""></textarea>
                            </div>

                            <button class="btn btn-3 hover-border-3" type="submit"> <span>Send now</span> </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection