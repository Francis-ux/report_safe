@extends('layouts.master')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 py-5">
        <div class="container">
            <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase">About {{ env('APP_NAME') }}</h6>
                    <h1 class="mb-4">Committed to Protecting Children and Giving Them a Voice</h1>
                    <p class="mb-4">
                        {{ env('APP_NAME') }} is a trusted child abuse reporting platform designed to offer a safe, anonymous, and
                        secure way to report incidents of abuse. Our mission is to protect vulnerable children, empower
                        communities, and ensure authorities respond effectively.
                    </p>
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
                            style="object-fit: cover; padding: 0 0 50px 100px;" alt="Child Protection">
                        <img class="position-absolute start-0 bottom-0 img-fluid bg-white pt-2 pe-2 w-50 h-50"
                            src="/assets/img/about-2.jpg" style="object-fit: cover;" alt="Safe Reporting">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
@endsection
