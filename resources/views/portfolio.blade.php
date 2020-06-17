@extends('layout.app')
@section('title','Portfolio')

@section('content')
<div class="container">
    <section id="about-header">
    <div class="row">
        <div class="col-md-5 about-des">
            <h3>Our Projects</h3>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its 
            layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 
            'Content here, content here', making it look like readable English.</p>
        </div>
        <div class="col-md-7 about-img">
            <img src="{{asset('images/portfolio.png')}}" alt="">
        </div>
    </div>
    </section>
    <section id="services">
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
    </section>
</div>
@endsection()