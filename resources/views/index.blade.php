@extends('layouts.master')

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="/assets/img/carousel-1.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(0, 0, 0, .4);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Protecting the Vulnerable
                                </h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">Report Child Abuse Confidentially
                                </h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">{{ env('APP_NAME') }} provides a secure
                                    platform for
                                    reporting child abuse. Speak out safely, protect lives, and help make a difference
                                    today.</p>
                                <a href="{{ route('report.abuse') }}"
                                    class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Report
                                    Now</a>
                                <a href="{{ route('about') }}"
                                    class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Learn
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="/assets/img/carousel-2.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(0, 0, 0, .4);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Every Report Matters</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">Stand Against Child Abuse</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Join our mission to end child abuse. Your
                                    voice can protect a child and bring justice. All reports remain confidential.</p>
                                <a href="{{ route('report.abuse') }}"
                                    class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Make a
                                    Report</a>
                                <a href="{{ route('contact') }}"
                                    class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Contact
                                    Support</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase">About {{ env('APP_NAME') }}</h6>
                    <h1 class="mb-4">Committed to Protecting Children and Giving Them a Voice</h1>
                    <p class="mb-4">{{ env('APP_NAME') }} is a trusted child abuse reporting platform designed to offer a
                        safe,
                        anonymous, and secure way to report incidents of abuse. Our mission is to protect vulnerable
                        children, empower communities, and ensure authorities respond effectively.</p>
                    <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i>Confidential and
                        anonymous reporting</p>
                    <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i>Secure data handling and
                        privacy-first approach</p>
                    <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i>24/7 access for urgent
                        case reporting</p>
                    <div class="bg-primary d-flex align-items-center p-4 mt-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt fa-2x text-primary"></i>
                        </div>
                        <div class="ms-3">
                            <p class="fs-5 fw-medium mb-2 text-white">Report Abuse Anytime</p>
                            <h3 class="m-0 text-secondary">{{ env('APP_PHONE') }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pt-4" style="min-height: 500px;">
                    <div class="position-relative h-100 wow fadeInUp" data-wow-delay="0.5s">
                        <img class="position-absolute img-fluid w-100 h-100" src="/assets/img/about-1.jpg"
                            style="object-fit: cover; padding: 0 0 50px 100px;" alt="About child protection">
                        <img class="position-absolute start-0 bottom-0 img-fluid bg-white pt-2 pe-2 w-50 h-50"
                            src="/assets/img/about-2.jpg" style="object-fit: cover;" alt="Child safety mission">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Service Start -->
    <div class="container-fluid py-5 px-4 px-lg-0">
        <div class="row g-0">
            <div class="col-lg-3 d-none d-lg-flex">
                <div class="d-flex align-items-center justify-content-center bg-primary w-100 h-100">
                    <h1 class="display-3 text-white m-0" style="transform: rotate(-90deg);">Trusted Platform</h1>
                </div>
            </div>
            <div class="col-md-12 col-lg-9">
                <div class="ms-lg-5 ps-lg-5">
                    <div class="text-center text-lg-start wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="text-secondary text-uppercase">Our Services</h6>
                        <h1 class="mb-5">What {{ env('APP_NAME') }} Offers</h1>
                    </div>
                    <div class="owl-carousel service-carousel position-relative wow fadeInUp" data-wow-delay="0.1s">
                        <div class="bg-light p-4">
                            <div class="d-flex align-items-center justify-content-center border border-5 border-white mb-4"
                                style="width: 75px; height: 75px;">
                                <i class="fa fa-shield-alt fa-2x text-primary"></i>
                            </div>
                            <h4 class="mb-3">Anonymous Reporting</h4>
                            <p>Report abuse cases securely and anonymously without fear of retaliation.</p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Privacy Protected
                            </p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Non-traceable
                                Reports</p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>24/7
                                Accessibility</p>

                        </div>
                        <div class="bg-light p-4">
                            <div class="d-flex align-items-center justify-content-center border border-5 border-white mb-4"
                                style="width: 75px; height: 75px;">
                                <i class="fa fa-user-shield fa-2x text-primary"></i>
                            </div>
                            <h4 class="mb-3">Victim Support</h4>
                            <p>Connect victims with professional counseling and support services for recovery.</p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Trauma
                                Assistance</p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Confidential
                                Support</p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Safe Spaces</p>

                        </div>
                        <div class="bg-light p-4">
                            <div class="d-flex align-items-center justify-content-center border border-5 border-white mb-4"
                                style="width: 75px; height: 75px;">
                                <i class="fa fa-hands-helping fa-2x text-primary"></i>
                            </div>
                            <h4 class="mb-3">Community Awareness</h4>
                            <p>Educating the public to recognize, prevent, and respond to child abuse effectively.</p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Workshops &
                                Seminars</p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>School Outreach
                            </p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Online
                                Campaigns</p>

                        </div>
                        <div class="bg-light p-4">
                            <div class="d-flex align-items-center justify-content-center border border-5 border-white mb-4"
                                style="width: 75px; height: 75px;">
                                <i class="fa fa-balance-scale fa-2x text-primary"></i>
                            </div>
                            <h4 class="mb-3">Legal & Case Follow-up</h4>
                            <p>Track submitted reports and ensure appropriate legal actions are taken.</p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Collaboration
                                with Authorities</p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Transparent
                                Case Handling</p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Regular Updates
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="text-secondary text-uppercase">Testimonials</h6>
                <h1 class="mb-5">What Our Users Say About Our Reporting System</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <div class="testimonial-text bg-light text-center p-4 mb-4">
                        <p class="mb-0">"This platform helped me report an incident quickly and anonymously. I felt safe
                            and supported throughout the process."</p>
                    </div>
                    <img class="bg-light rounded-circle p-2 mx-auto mb-2" src="/assets/img/testimonial-1.jpg"
                        style="width: 80px; height: 80px;">
                    <div class="mb-2">
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                    </div>
                    <h5 class="mb-1">Jane Doe</h5>
                    <p class="m-0">Concerned Citizen</p>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-text bg-light text-center p-4 mb-4">
                        <p class="mb-0">"The reporting process was simple, and I received a prompt response from
                            authorities. This system is truly a lifesaver."</p>
                    </div>
                    <img class="bg-light rounded-circle p-2 mx-auto mb-2" src="/assets/img/testimonial-2.jpg"
                        style="width: 80px; height: 80px;">
                    <div class="mb-2">
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                    </div>
                    <h5 class="mb-1">John Smith</h5>
                    <p class="m-0">Community Advocate</p>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-text bg-light text-center p-4 mb-4">
                        <p class="mb-0">"I was able to report an abusive situation that I witnessed, and I feel good
                            knowing the authorities were notified. Thank you for creating such a safe platform."</p>
                    </div>
                    <img class="bg-light rounded-circle p-2 mx-auto mb-2" src="/assets/img/testimonial-3.jpg"
                        style="width: 80px; height: 80px;">
                    <div class="mb-2">
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                    </div>
                    <h5 class="mb-1">Emily Johnson</h5>
                    <p class="m-0">Witness</p>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-text bg-light text-center p-4 mb-4">
                        <p class="mb-0">"This system allowed me to anonymously report a case of child abuse. I feel
                            empowered knowing that the authorities are now aware and can take action."</p>
                    </div>
                    <img class="bg-light rounded-circle p-2 mx-auto mb-2" src="/assets/img/testimonial-4.jpg"
                        style="width: 80px; height: 80px;">
                    <div class="mb-2">
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                    </div>
                    <h5 class="mb-1">Sarah Lee</h5>
                    <p class="m-0">Concerned Parent</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
