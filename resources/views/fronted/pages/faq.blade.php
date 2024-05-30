@extends('fronted.layouts.master')
@section('content')
    <div class="breadcumb-area">
        <!-- breadcumb content -->
        <div class="breadcumb-content">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <nav aria-label="breadcrumb" class="breadcumb--con text-center">
                            <h2 class="w-text title wow fadeInUp" data-wow-delay="0.2s">FAQ Questions</h2>
                            <ol class="breadcrumb justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                                <li class="breadcrumb-item"><a href="{{ '/' }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">FAQ</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Welcome Area End ##### -->

    <div class="faq-timeline-area transparent section-padding-100-85" id="faq">
        <div class="container">
            <div class="section-heading text-center">
                <div class="top-sec-h wow fadeInUp" data-wow-delay="0.2s">FAQ Questions</div>
                <h2 class="d-blue bold fadeInUp" data-wow-delay="0.3s"> Frequently Questions</h2>
                <p class="fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis
                    accumsan nisi Ut ut felis congue nisl hendrerit commodo.</p>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6 offset-lg-0 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
                    <img src="{{ asset('assets/fronted/img/core-img/about3.png') }}" alt=""
                        class="center-block img-responsive">
                </div>
                <div class="col-12 col-lg-6 col-md-12">
                    <div class="info-faq-area mt-s ">

                        <dl style="margin-bottom:0">
                            @forelse ($faqs as $faq)
                                <dt class="wave fadeInUp" data-wow-delay="0.2s">{{ $faq->question }}</dt>
                                <dd class="fadeInUp" data-wow-delay="0.3s">
                                    <p>{!! $faq->answer !!}</p>
                                </dd>
                            @empty
                                No Content Found
                            @endforelse

                        </dl>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
