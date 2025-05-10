@extends('layouts.master')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 py-5">
        <div class="container">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Report Abuse</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Report Abuse</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Coming Soon Start -->
    <div class="container-xxl py-5">
        <div class="container text-center">
            <h6 class="text-secondary text-uppercase">Stay Tuned</h6>
            <h1 class="mb-4">Our Child Abuse Reporting System is Coming Soon</h1>
            <p class="mb-4">
                We are working hard to create a safe space for you to report incidents of child abuse. Stay tuned as we get
                closer to launch. Our platform will provide a secure, anonymous, and confidential way to ensure that
                children are protected.
            </p>
            <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i>Safe and anonymous reporting</p>
            <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i>Access to expert support and
                resources</p>
            <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i>Quick response and follow-up</p>

            <div class="bg-primary d-flex align-items-center p-4 mt-5 justify-content-center">
                <p class="fs-5 fw-medium mb-2 text-white">Have Questions?</p>
                <h3 class="m-0 text-secondary">Call us at: {{ env('APP_PHONE') }}</h3>
            </div>
        </div>
    </div>
    <!-- Coming Soon End -->
@endsection
