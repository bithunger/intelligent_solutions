@extends('fronted.layouts.master')

@section('content')
    <div class="breadcumb-area">
        <!-- breadcumb content -->
        <div class="breadcumb-content">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <nav aria-label="breadcrumb" class="breadcumb--con text-center">
                            <h2 class="w-text title wow fadeInUp" data-wow-delay="0.2s">Service Details</h2>
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
            <div class="row align-items-center mt-30 mb-30">
                <div class="col-12 col-lg-6 col-sm-12 ">
                    <div class="welcome-meter mt-s wow fadeInUp" data-wow-delay="0.7s">
                        <img src="{{ asset($service_details->image) }}" class="doted" alt="">
                    </div>
                </div>

                <div class="col-12 col-lg-6 offset-lg-0 col-md-10 offset-md-1">
                    <div class="who-we-contant mt-s">
                        <div class="top-sec-h fadeInUp" data-wow-delay="0.2s">Creative Solutions</div>
                        <h4 class="bl-text fadeInUp" data-wow-delay="0.3s">{{ $service_details->title }}</h4>
                        <p class="fadeInUp" data-wow-delay="0.4s">{!! $service_details->description !!}</p>


                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
