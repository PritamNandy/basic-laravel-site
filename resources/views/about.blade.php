@extends('layout.app')
@section('title','About')
@section('content')
<div class="container">
    <section id="about-header">
    <div class="row">
        <div class="col-md-5 about-des">
            <h3>About Us</h3>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its 
            layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 
            'Content here, content here', making it look like readable English.</p>
        </div>
        <div class="col-md-7 about-img">
            <img src="{{asset('images/about-us.png')}}" alt="">
        </div>
    </div>
    </section>
    <section id="full-description">
    <div class="row">
        <div class="col-md-12">
        <h3>Who We Are?</h3>
        <hr>
        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by 
            injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem 
            Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators 
            on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
            <p> It 
            uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum 
            which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or 
            non-characteristic words etc.</p>
        </div>
    </div>
    </section>
</div>
@endsection()