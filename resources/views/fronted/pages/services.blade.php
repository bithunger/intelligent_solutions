@extends('fronted.layouts.master')
@section('content')
    <div class="breadcumb-area">
        <!-- breadcumb content -->
        <div class="breadcumb-content">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <nav aria-label="breadcrumb" class="breadcumb--con text-center">
                            <h2 class="w-text title wow fadeInUp" data-wow-delay="0.2s">Services</h2>
                            <ol class="breadcrumb justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                                <li class="breadcrumb-item"><a href="{{ '/' }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Services</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="our_services_area section-padding-100-0 " id="services">
        <div class="container">

            <div class="section-heading text-center">
                <div class="top-sec-h justify-content-center fadeInUp" data-wow-delay="0.2s">Our Services</div>
                <h2 class="d-blue bold fadeInUp" data-wow-delay="0.3s">Our Special Services</h2>
                <p class="fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                    quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.</p>
            </div>
            <div class="row">
                @forelse ($services as $service)
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Content -->
                        <div class="service_single_content text-center mb-100 wow fadeInUp" data-wow-delay="0.2s">
                            <!-- Icon -->
                            <div class="service_icon max">
                                <img src="{{ asset($service->image) }}" alt="">
                            </div>

                            <h6 class="d-blue bold">{{ $service->title }}</h6>

                            <p>{!! Str::limit(strip_tags($service->description), 200) !!}</p>
                            <a class="btn info-btn mt-20 fadeInUp" data-wow-delay="0.6s"
                                href="{{ route('service.details', $service->id) }}">Read More</a>
                        </div>
                    </div>
                @empty
                    No Content Found
                @endforelse
            </div>
        </div>
    </section>
@endsection
