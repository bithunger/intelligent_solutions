@extends('fronted.layouts.master')

@section('content')
    <div class="breadcumb-area">
        <div class="breadcumb-content">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <nav aria-label="breadcrumb" class="breadcumb--con text-center">
                            <h2 class="w-text title wow fadeInUp" data-wow-delay="0.2s">About us</h2>
                            <ol class="breadcrumb justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                                <li class="breadcrumb-item"><a href="{{ '/' }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="about-us-area section-padding-0-0">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 col-sm-12">
                    <div class="welcome-meter mt-s wow fadeInUp" data-wow-delay="0.7s">
                        <img src="{{ asset($about->about_image) }}" class="doted" alt="">
                    </div>
                </div>

                <div class="col-12 col-lg-6 offset-lg-0 col-md-10 offset-md-1">
                    <div class="who-we-contant mt-s">
                        <div class="top-sec-h fadeInUp" data-wow-delay="0.2s">Creative Solutions</div>
                        <h4 class="bl-text fadeInUp" data-wow-delay="0.3s">{{ $about->about_title }}</h4>
                        <p class="fadeInUp" data-wow-delay="0.4s">{!! $about->about_description !!}</p>

                        {{-- <a class="btn info-btn mt-30 fadeInUp" data-wow-delay="0.6s" href="#">Read More</a> --}}
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="about-us-area section-padding-100-0">

        <div class="container">
            <div class="row align-items-center">

                <div class="col-12 col-lg-6 offset-lg-0 col-md-10 offset-md-1">
                    <div class="who-we-contant">
                        <div class="top-sec-h fadeInUp" data-wow-delay="0.2s">Cloud & Cyber Security</div>
                        <h4 class="bl-text fadeInUp" data-wow-delay="0.3s">{{ $about->mission_title }}</h4>
                        <p class="fadeInUp" data-wow-delay="0.4s"{!! $about->mission_description !!}</p>
                            {{-- <p class="fadeInUp" data-wow-delay="0.5s">Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Nemo quo laboriosam, dolorum ducimus aliquam consequuntur dolor sit amet, consectetur
                            adipisicing elit. Nemo quo laboriosam, dolorum ducimus!</p>

                        <a class="btn info-btn mt-30 fadeInUp" data-wow-delay="0.6s" href="#">Read More</a> --}}
                    </div>
                </div>

                <div class="col-12 col-lg-6 col-sm-12">
                    <div class="welcome-meter mt-s wow fadeInUp" data-wow-delay="0.7s">
                        <img src="{{ asset($about->mission_image) }}" class="doted" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="about-us-area trial-bg section-padding-100 clearfix">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 col-sm-12">
                    <img src="{{ asset('assets/fronted/img/core-img/trial.png') }}" alt="">
                </div>
                <div class="col-12 col-lg-6 col-sm-12">
                    <div class="who-we-contant mt-s">
                        <div class="top-sec-h wow fadeInUp" data-wow-delay="0.2s">Free Trial</div>
                        <h4 class="w-text fadeInUp" data-wow-delay="0.3s">Get started with a free trail</h4>
                        <p class="w-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore cum dolore
                            temporibus esse explicabo magni excepturi.</p>
                        {{-- <form action="{{ route('') }}"></form> --}}
                        <div class="subscribe-section has-shadow mt-30">
                            <div class="input-wrapper">
                                <i class="fa fa-home"></i>
                                <input type="email" placeholder="Enter your Email">
                            </div>
                            <button type="submit" class="btn info-btn mt-30 mt-sm-15 ml-15">subscribe</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
