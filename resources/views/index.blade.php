@extends('layouts.homepage')
@section('judul')
Beranda
@endsection
@section('konten')
<div id="slider" class="inspiro-slider slider-fullscreen dots-creative" data-height-xs="360">
    <!-- Slide 1 -->
    <div class="slide kenburns" data-bg-parallax="images/parallax/3.jpg">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="slide-captions text-light">
                <!-- Captions -->
                <span data-animate="fadeInUp" data-animate-delay="300" class="strong"><a href="#" class="business"><span class="business">Let's Do This</span></a>
                </span>
                <h1 data-animate="fadeInUp" data-animate-delay="600">We’re Polo, A Creative<br>Startup Based in Melburne</h1>
                <div data-animate="fadeInUp" data-animate-delay="900">
                    <button type="button" class="btn btn-roundeded btn-reveal btn-reveal-left"><span>Learn More</span><i class="icon-chevron-right"></i></button>
                </div>
                <!-- end: Captions -->
                <div class="row" style="padding-top:14%;">
                    <div class="col-lg-3" data-animate="fadeInUp" data-animate-delay="1200">
                        <h4>Highly Customizable</h4>
                        <p>Nulla varius consequat magna, id molestie ipsum volutpat quis. A true story, that never been told!.</p>
                    </div>
                    <div class="col-lg-3" data-animate="fadeInUp" data-animate-delay="1500">
                        <h4>Clean Code</h4>
                        <p>Nulla varius consequat magna, id molestie ipsum volutpat quis. A true story, that never been told!.</p>
                    </div>
                    <div class="col-lg-3" data-animate="fadeInUp" data-animate-delay="1800">
                        <h4>Heavily Awarded</h4>
                        <p>Nulla varius consequat magna, id molestie ipsum volutpat quis. A true story, that never been told!.</p>
                    </div>
                    <div class="col-lg-3" data-animate="fadeInUp" data-animate-delay="2100">
                        <h4>Fast Performance</h4>
                        <p>Nulla varius consequat magna, id molestie ipsum volutpat quis. A true story, that never been told!.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end: Slide 1 -->
</div>
@endsection