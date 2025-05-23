<!-- Topbar Start -->
<div class="container-fluid bg-light d-none d-lg-block">
    <div class="row align-items-center top-bar">
        <div class="col-lg-3 col-md-12 text-center text-lg-start">
            <a href="/" class="navbar-brand m-0 p-0">
                {{-- <h1 class="text-primary m-0">{{ env('APP_NAME') }}</h1> --}}
                <img width="200" src="{{ asset(env('APP_LOGO')) }}" alt="{{ env('APP_NAME') }}">
            </a>
        </div>
        <div class="col-lg-9 col-md-12 text-end">
            <div class="h-100 d-inline-flex align-items-center me-4">
                <i class="fa fa-map-marker-alt text-primary me-2"></i>
                <p class="m-0">{{ env('APP_ADDRESS') }}</p>
            </div>
            <div class="h-100 d-inline-flex align-items-center me-4">
                <i class="far fa-envelope-open text-primary me-2"></i>
                <p class="m-0">{{ env('APP_EMAIL') }}</p>
            </div>
            <div class="h-100 d-inline-flex align-items-center">
                <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i
                        class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i
                        class="fab fa-twitter"></i></a>
                <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i
                        class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-sm-square bg-white text-primary me-0" href=""><i
                        class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->
