@extends('fronted.layouts.master')
@section('content')
    <div class="breadcumb-area">
        <!-- breadcumb content -->
        <div class="breadcumb-content">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <nav aria-label="breadcrumb" class="breadcumb--con text-center">
                            <h2 class="w-text title wow fadeInUp" data-wow-delay="0.2s">Pricing</h2>
                            <ol class="breadcrumb justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                                <li class="breadcrumb-item"><a href="{{ '/' }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Pricing</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>


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
                <div class="col-lg-4 col-md-6">
                    <div class="single_price_table_content text-center wow fadeInUp" data-wow-delay="0.2s">
                        <div class="price_table_text">
                            <h5>Begginer</h5>
                            <h1>Free</h1>
                            <p>Always</p>
                        </div>
                        <div class="table_text_details">
                            <p>250GB Bandwidth</p>
                            <p>08 Email Account</p>
                            <p>Unlimited Database </p>
                            <p>10GB Free Disk </p>
                            <p>24/7 Support</p>
                        </div>
                        <div class="table_btn mt-50">
                            <a href="#" class="btn info-btn">Start</a>
                        </div>
                    </div>
                </div>
                <!-- Single Table -->
                <div class="col-lg-4 col-md-6">
                    <div class="single_price_table_content active text-center wow fadeIn" data-wow-delay="0.3s">
                        <div class="price_table_text">
                            <h5>Business</h5>
                            <h1>$24.99</h1>
                            <p>Per Month</p>
                        </div>
                        <div class="table_text_details">
                            <p>250GB Bandwidth</p>
                            <p>08 Email Account</p>
                            <p>Unlimited Database </p>
                            <p>10GB Free Disk </p>
                            <p>24/7 Support</p>
                        </div>
                        <div class="table_btn mt-50">
                            <a href="#" class="btn info-btn">Start</a>
                        </div>
                    </div>
                </div>
                <!-- Single Table -->
                <div class="col-lg-4 col-md-6">
                    <div class="single_price_table_content text-center wow fadeInUp" data-wow-delay="0.4s">
                        <div class="price_table_text">
                            <h5>professional</h5>
                            <h1>$84.99</h1>
                            <p>Per Month</p>
                        </div>
                        <div class="table_text_details">
                            <p>250GB Bandwidth</p>
                            <p>08 Email Account</p>
                            <p>Unlimited Database </p>
                            <p>10GB Free Disk </p>
                            <p>24/7 Support</p>
                        </div>
                        <div class="table_btn mt-50">
                            <a href="#" class="btn info-btn">Start</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
