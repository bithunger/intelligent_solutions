@extends('fronted.layouts.master')
@section('content')
    <section class="hero-section ai2 relative" id="home">
        <div class="overlay"></div>
        <!-- Hero Content -->
        <div class="hero-section-content">

            <div class="container ">
                <div class="row align-items-center">
                    <!-- Welcome Content -->
                    <div class="col-12 col-lg-6 col-md-12">
                        <div class="welcome-content text-left">
                            <div class="promo-section">
                                <h3 class="special-head g-text">Creative Cyber Security Solutions</h3>
                            </div>
                            <h1 class="bold w-text wow fadeInUp" data-wow-delay="0.2s">{{ setting('site_title' ?? '') }}
                            </h1>
                            <p class="wow fadeInUp g-text" data-wow-delay="0.3s">{{ setting('site_description' ?? '') }}
                            </p>
                            <div class="info-btn-group fadeInUp" data-wow-delay="0.4s">
                                <a href="{{ route('about') }}" class="btn info-btn mr-3">get started</a>
                                <a href="{{ route('about') }}" class="btn info-btn"> learn more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-12">
                        <img src="{{ setting('site_image') != null ? asset(setting('site_image')) : '' }}" class="mt-s"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Welcome Area End ##### -->

    <div class="clearfix"></div>

    <div class="parttns no-b">
        <div class="container">
            <div class="row">
                @forelse($brands as $brand)
                    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <a href="{{ $brand->link }}"><img src="{{ asset($brand->image) }}" alt=""></a>
                    </div>
                @empty
                    No Sponser found
                @endforelse

            </div>
        </div>
    </div>

    <section class="features section-padding-0-0">

        <div class="container">
            <div class="section-heading text-center">
                <div class="top-sec-h wow fadeInUp" data-wow-delay="0.2s">Our Features</div>
                <h2 class="d-blue bold wow fadeInUp" data-wow-delay="0.3s">Our core Features</h2>
                <p class="wow fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.</p>
            </div>
            <div class="row align-items-center">
                <div class="service-img-wrapper how col-lg-6 col-md-12 col-sm-12">
                    <div class="image-box">
                        <img src="{{ asset('assets/fronted/img/core-img/about3.png') }}"
                            class="center-block img-responsive phone-img" alt="">
                    </div>
                </div>
                <div class="services-column col-lg-6 col-md-12 col-xs-12">

                    <!--Services Block Four-->
                    @forelse($features as $feature)
                        <div class="services-block-four">
                            <div class="inner-box">
                                <div class="icon-img-box">
                                    <img src="{{ asset($feature->image) }}" alt="">
                                </div>
                                <h3><a href="{{ route('feature.details', $feature->id) }}">{{ $feature->title }}</a></h3>
                                <div class="text">{!! Str::limit(strip_tags($feature->description), 100) !!}</div>

                            </div>
                        </div>
                    @empty
                        No Content found
                    @endforelse

                </div>

            </div>
        </div>
    </section>

    <!-- ##### Our Services Area Start ##### -->
    <section class="our_services_area section-padding-100-0 " id="services">
        <div class="container">

            <div class="section-heading text-center">
                <div class="top-sec-h justify-content-center fadeInUp" data-wow-delay="0.2s">Our Services</div>
                <h2 class="d-blue bold fadeInUp" data-wow-delay="0.3s">Our Special Services</h2>
                <p class="fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                    quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.</p>
            </div>


            <div class="row">
                @forelse($services as $service)
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Content -->
                        <div class="service_single_content text-center mb-100 wow fadeInUp" data-wow-delay="0.2s">
                            <!-- Icon -->
                            <div class="service_icon max">
                                <img src="{{ asset($service->image) }}" alt="">
                            </div>
                            <h6 class="d-blue bold">{{ $service->title }}</h6>
                            <p>{!! Str::limit(strip_tags($service->description), 150) !!}</p>
                            <a class="btn info-btn mt-20 fadeInUp" data-wow-delay="0.6s"
                                href="{{ route('service.details', $service->id) }}">Read More</a>
                        </div>
                    </div>
                @empty
                    No Content found
                @endforelse
            </div>
        </div>
    </section>

    <!-- ##### About Us Area Start ##### -->
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
                        <p class="fadeInUp" data-wow-delay="0.4s">{!! Str::limit(strip_tags($about->about_description), 300) !!}</p>
                        {{-- <p class="fadeInUp" data-wow-delay="0.5s">Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Nemo quo laboriosam, dolorum ducimus aliquam consequuntur!</p> --}}

                        <a class="btn info-btn mt-20 fadeInUp" data-wow-delay="0.6s" href="{{ route('about') }}">Read
                            More</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### About Us Area End ##### -->

    <!-- ##### About Us Area Start ##### -->
    <section class="about-us-area section-padding-100-0">

        <div class="container">
            <div class="row align-items-center">

                <div class="col-12 col-lg-6 offset-lg-0 col-md-10 offset-md-1">
                    <div class="who-we-contant">
                        <div class="top-sec-h fadeInUp" data-wow-delay="0.2s">Cloud & Cyber Security</div>
                        <h4 class="bl-text fadeInUp" data-wow-delay="0.3s">{{ $about->mission_title }}</h4>
                        <p class="fadeInUp" data-wow-delay="0.4s">{!! Str::limit(strip_tags($about->mission_description), 300) !!}</p>
                        {{-- <p class="fadeInUp" data-wow-delay="0.5s">Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Nemo quo laboriosam, dolorum ducimus aliquam consequuntur dolor sit amet, consectetur
                            adipisicing elit. Nemo quo laboriosam, dolorum ducimus!</p> --}}

                        <a class="btn info-btn mt-20 fadeInUp" data-wow-delay="0.6s" href="{{ route('about') }}">Read
                            More</a>
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



    <section class="about-us-area trial-bg section-padding-100 clearfix mt-20">
        <div class="container ">
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
                        <div class="subscribe-section has-shadow mt-30">
                            <div class="input-wrapper">
                                <i class="fa fa-home"></i>
                                <form action="{{ url('subscribe') }}" method="post">
                                    @csrf
                                    <input type="email" name="email" placeholder="Enter your Email">

                            </div>

                            <button type="submit" class="btn info-btn mt-30 mt-sm-15 ml-15">subscribe</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="how section-padding-100-70 relative hex-pat-2">

        <div class="container">

            <div class="section-heading text-center">
                <div class="top-sec-h wow fadeInUp" data-wow-delay="0.2s">Working Steps</div>
                <h2 class="wow fadeInUp d-blue bold" data-wow-delay="0.3s">How it works</h2>
                <p class="wow fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.</p>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content box-shadow text-center mb-100 wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Icon -->
                        <div class="how_icon">
                            <img src="{{ asset('assets/fronted/img/icons/h1.png') }}" class="colored-icon"
                                alt="">
                        </div>
                        <h6>Add Your Security Problem</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla neque quam</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content box-shadow text-center mb-100 wow wow fadeInUp"
                        data-wow-delay="0.3s">
                        <!-- Icon -->
                        <div class="how_icon">
                            <img src="{{ asset('assets/fronted/img/icons/h2.png') }}" class="colored-icon"
                                alt="">
                        </div>
                        <h6>Choose Security Package</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla neque quam</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content box-shadow text-center mb-100 wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Icon -->
                        <div class="how_icon">
                            <img src="{{ asset('assets/fronted/img/icons/h3.png') }}" class="colored-icon"
                                alt="">
                        </div>
                        <h6>Prepare for Security Test</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla neque quam</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="clearfix"></div>


    <!-- ##### pricing Area start ##### -->
    <section class="pricing section-padding-100-70" style="background: #edf6fd" id="pricing">

        <div class="container">
            <div class="section-heading text-center">
                <div class="top-sec-h wow fadeInUp" data-wow-delay="0.2s">Pricing plans</div>
                <h2 class="d-blue bold fadeInUp" data-wow-delay="0.3s">Our Pricing Plans</h2>
                <p class="fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                    quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.</p>
            </div>
            <div class="row no-gutters">
                <!-- Single Table -->
                @forelse($pricings as $pricing)
                    <div class="col-lg-4 col-md-6">
                        <div class="single_price_table_content text-center wow fadeInUp" data-wow-delay="0.2s">
                            <div class="price_table_text">
                                <h5>{{ $pricing->title }}</h5>
                                <h3>{{ $pricing->price }}</h3>
                                <p>{{ $pricing->type }}</p>
                            </div>
                            <div class="table_text_details">
                                <p>{!! Str::limit(strip_tags($pricing->description), 100) !!}</p>
                                {{-- <p>08 Email Account</p>
                                <p>Unlimited Database </p>
                                <p>10GB Free Disk </p>
                                <p>24/7 Support</p> --}}
                            </div>
                            <div class="table_btn mt-50">
                                <a href="#" class="btn info-btn">Start</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <h2>No Content found</h2>
                @endforelse
            </div>
        </div>

    </section>
    <!-- ##### pricing Area End ##### -->

    <!-- ##### Testimonial Area Start ##### -->
    <section class="clients_testimonials_area bg-img section-padding-100" id="test">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <div class="top-sec-h wow fadeInUp" data-wow-delay="0.2s">Our Testimonials</div>
                        <h2 class="d-blue bold bl-text wow fadeInUp" data-wow-delay="0.3s">Loved By Our Clients</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="cotainer-fluid">
            <div class="row justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                <div class="col-12 col-md-10 col-xs-10 offset-xs-1">
                    <div class="client_slides owl-carousel">
                        @forelse($testimonials as $testimonial)
                            <div class="single-testimonial text-center">
                                <!-- Testimonial Image -->
                                <div class="testimonial_image">
                                    <img src="{{ asset($testimonial->image) }}" alt="">
                                </div>
                                <!-- Testimonial Feedback Text -->
                                <div class="testimonial-description">
                                    <div class="testimonial_text">
                                        <p>{!! $testimonial->description !!}</p>
                                    </div>

                                    <!-- Admin Text -->
                                    <div class="admin_text">
                                        <h5>{{ $testimonial->name }}</h5>
                                        <p>{{ $testimonial->designation }}</p>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <h2>No Content Found</h2>
                        @endforelse


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
