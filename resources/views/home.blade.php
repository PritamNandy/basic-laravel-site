@extends('layout.app')
@section('title','Home')

@section('content')
<style>
    .col-md-12 {
        padding: 0px;
    }
</style>
<div class="container" style="max-width: 100% !important;">
    <div class="row">
        <div class="col-md-12">
            <div class="home-background" style="background-image: url('{{asset('images/home-bg.jpg')}}');">
                <div class="cover-text">
                    <h1>Welcome to Laravel</h1>
                    <p>We develop beautiful web application for you.</p>
                    <button class="btn btn-primary">Learn More</button>
                </div>
            </div>
        </div>
    </div>
</div>
<section id="services">
    <div class="container">
    <div class="row">
        <div class="col-md-12">
        <h3>Who We Offer?</h3>
        <hr>
        </div>
        <div class="col-md-4">
            <div class="service">
                <img src="{{asset('images/website.png')}}" alt="">
                <h5>Website Development</h5>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="service">
                <img src="{{asset('images/web-application.png')}}" alt="">
                <h5>Web App Development</h5>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="service">
                <img src="{{asset('images/mobile-app.png')}}" alt="">
                <h5>Mobile Development</h5>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
            </div>
        </div>
    </div>
    </div>
    </section>
    <section id="services">
    <div class="container">
    <div class="row">
        <div class="col-md-12">
        <h3>Who We Offer?</h3>
        <hr>
        </div>
        <div class="col-md-3">
        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{asset('images/pf.png')}}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Web App</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go 2 Link</a>
        </div>
        </div>
        </div>
        <div class="col-md-3">
        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{asset('images/pf.png')}}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Web App</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go 2 Link</a>
        </div>
        </div>
        </div>
        <div class="col-md-3">
        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{asset('images/pf.png')}}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Web App</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go 2 Link</a>
        </div>
        </div>
        </div>
        <div class="col-md-3">
        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{asset('images/pf.png')}}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Web App</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go 2 Link</a>
        </div>
        </div>
        </div>
        <div class="col-md-3">
        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{asset('images/pf.png')}}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Web App</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go 2 Link</a>
        </div>
        </div>
        </div>
        <div class="col-md-3">
        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{asset('images/pf.png')}}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Web App</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go 2 Link</a>
        </div>
        </div>
        </div>
    </div>
    </div>
    </section>
<section id="contact-us">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center mb-5">
                <h3>Contact Us</h3>
                <hr>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <input class="form-control" type="text" placeholder="First Name">
                </div>
                <div class="col-md-6 mb-3">
                    <input class="form-control" type="text" placeholder="Last Name">
                </div>
                <div class="col-md-12 mb-3">
                    <input class="form-control" type="text" placeholder="Email">
                </div>
                <div class="col-md-12 mb-3">
                    <textarea class="form-control" name="" id="" cols="30" rows="10">Enter Your Query</textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <button class="btn btn-info">Send</button>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h4>Our Address</h4>
            <p>Bashundhara Main Gate, Baridhara, Dhaka</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.0902272749313!2d90.43134681493433!3d23.815390384557357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c791dfd6ec8d%3A0x93bf24153097bb8b!2sHeyDev!5e0!3m2!1sen!2sbd!4v1592416229845!5m2!1sen!2sbd" width="100%" height="340px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
</div>
</section>
@endsection