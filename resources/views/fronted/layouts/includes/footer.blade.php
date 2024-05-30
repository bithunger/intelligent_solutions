<div class="footer-content-area mt-0">
    <div class="container">
        <div class="row ">
            <div class="col-12 col-lg-4 col-md-6">
                <div class="footer-copywrite-info">
                    <!-- Copywrite -->
                    <div class="copywrite_text fadeInUp" data-wow-delay="0.2s">
                        <div class="footer-logo">
                            <a href="{{ route('index') }}"><img
                                    src="{{ setting('site_logo') != null ? asset(setting('site_logo')) : '' }}"
                                    alt="logo"> </a>
                        </div>
                        <p>{{ setting('site_description') ?? '' }}</p>
                    </div>
                    <!-- Social Icon -->
                    <div class="footer-social-info fadeInUp" data-wow-delay="0.4s">
                        <a href="{{ setting('facebook') ?? '' }}" target="{{ setting('facebook') ? '_blank' : '' }}"><i
                                class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="{{ setting('twitter') ?? '' }}" target="{{ setting('twitter') ? '_blank' : '' }}"> <i
                                class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        <a href="{{ setting('instragram') ?? '' }}"
                            target="{{ setting('instragram') ? '_blank' : '' }}"><i class="fa fa-instagram"
                                aria-hidden="true"></i></a>
                        <a href="{{ setting('linkedin') ?? '' }}" target="{{ setting('linkedin') ? '_blank' : '' }}"><i
                                class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-3 col-md-6">
                <div class="contact_info_area d-sm-flex justify-content-between">
                    <!-- Content Info -->
                    <div class="contact_info mt-x text-center fadeInUp" data-wow-delay="0.3s">
                        <h5>PRIVACY &amp; TOS</h5>
                        <a href="#">
                            <p>Advertiser Agreement</p>
                        </a>
                        <a href="#">
                            <p>Acceptable Use Policy</p>
                        </a>
                        <a href="#">
                            <p>Privacy Policy</p>
                        </a>
                        <a href="#">
                            <p>Technology Privacy</p>
                        </a>
                        <a href="#">
                            <p>Developer Agreement</p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-2 col-md-6 ">
                <!-- Content Info -->
                <div class="contact_info_area d-sm-flex justify-content-between">
                    <div class="contact_info mt-s text-center fadeInUp" data-wow-delay="0.2s">
                        <h5>NAVIGATE</h5>
                        <a href="#">
                            <p>Advertisers</p>
                        </a>
                        <a href="#">
                            <p>Developers</p>
                        </a>
                        <a href="#">
                            <p>Resources</p>
                        </a>
                        <a href="#">
                            <p>Company</p>
                        </a>
                        <a href="#">
                            <p>Connect</p>
                        </a>
                    </div>
                </div>
            </div>


            <div class="col-12 col-lg-3 col-md-6 ">
                <div class="contact_info_area d-sm-flex justify-content-between">
                    <!-- Content Info -->
                    <div class="contact_info mt-s text-center fadeInUp" data-wow-delay="0.4s">
                        <h5>CONTACT US</h5>
                        <p>Mailing Address: {{ setting('site_email') ?? '' }}</p>
                        <p>{{ setting('site_address') ?? '' }}</p>
                        <p>{{ setting('site_phone') ?? '' }}</p>
                        <p>{{ setting('website') ?? '' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
