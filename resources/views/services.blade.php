@extends('layout.app')
@section('title','Services')

@section('content')
<div class="container">
    <section id="about-header">
    <div class="row">
        <div class="col-md-5 about-des">
            <h3>What we do</h3>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its 
            layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 
            'Content here, content here', making it look like readable English.</p>
        </div>
        <div class="col-md-7 about-img">
            <img src="{{asset('images/services.png')}}" alt="">
        </div>
    </div>
    </section>
    <section id="services">
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
    </section>
</div>
@endsection()