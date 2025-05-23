<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <h4 class="text-light mb-4">Address</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{ env('APP_ADDRESS') }}</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>{{ env('APP_PHONE') }}</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>{{ env('APP_EMAIL') }}</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <h4 class="text-light mb-4">Opening Hours</h4>
                <h6 class="text-light">Monday - Friday:</h6>
                <p class="mb-4">09.00 AM - 09.00 PM</p>
                <h6 class="text-light">Saturday - Sunday:</h6>
                <p class="mb-0">09.00 AM - 12.00 PM</p>
            </div>
            <div class="col-lg-4 col-md-6">
                <h4 class="text-light mb-4">Stay Informed</h4>
                <p>Sign up for our newsletter to receive important updates on child abuse prevention, reporting
                    guidelines, and resources available to help protect children.</p>
                @include('partials.bootstrap_alert')
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <form action="{{ route('newsletter.subscribe') }}" method="post">
                        @csrf
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5 @error('email') is-invalid @enderror"
                            type="email" name="email" placeholder="Your email">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <button type="submit" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Sign
                            Up</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-12 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="{{ env('APP_URL') }}">{{ env('APP_NAME') }}</a>, All Right
                    Reserved.
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
