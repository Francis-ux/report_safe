@extends('layouts.master')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 py-5">
        <div class="container">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

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
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Trauma Assistance
                            </p>
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
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Online Campaigns
                            </p>
                            
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
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Transparent Case
                                Handling</p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Regular Updates
                            </p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
@endsection
