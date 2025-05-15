<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="{{ env('APP_KEYWORDS') }}" name="keywords">
        <meta name="description" content="{{ env('APP_DESCRIPTION') }}">
        <meta name="author" content="{{ env('APP_NAME') }}">
        <link rel="icon" href="{{ asset(env('APP_FAVICON')) }}">

        <title>{{ $title }} &mdash; {{ env('APP_TITLE') }}</title>

        <!-- Vendors Style-->
        <link rel="stylesheet" href="/dashboard/resources/css/vendors_css.css">
        <!-- Style-->
        <link rel="stylesheet" href="/dashboard/resources/css/style.css">
        <link rel="stylesheet" href="/dashboard/resources/css/skin_color.css">
    </head>

    <body class="hold-transition theme-primary bg-img  text-primary">
        @include('partials.theme_alert')
        @yield('content')
        <!-- Vendor JS -->
        <script src="/dashboard/resources/js/vendors.min.js"></script>
        <script src="/dashboard/resources/js/pages/chat-popup.js"></script>
        <script src="/dashboard/resources/assets/icons/feather-icons/feather.min.html"></script>

        <script src="/dashboard/resources/js/themes/animated.js"></script>
        <script src="/dashboard/resources/assets/vendor_components/Web-Ticker-master/jquery.webticker.min.js"></script>
        <script src="/dashboard/resources/assets/vendor_components/moment/min/moment.min.html"></script>
        <script src="/dashboard/resources/assets/vendor_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.html">
        </script>

        <!-- Specie Admin Admin App -->
        <script src="/dashboard/resources/js/demo.js"></script>
        <script src="/dashboard/resources/js/template.js"></script>
        <script src="/dashboard/resources/js/pages/dashboard.js"></script>

        <script>
            var myModal = new bootstrap.Modal(document.getElementById('modal-center'), {
                keyboard: false
            })
            myModal.show();
        </script>
        @include('partials.live_chat')
    </body>

</html>
