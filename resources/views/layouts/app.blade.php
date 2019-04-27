<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- style tambahan -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
    <link href="{{ asset('ionicons/css/ionicons.min.css') }}" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

</head>

<body>
    <section id="intro" class="clearfix">
        <div class="container">
            <section id="services" class="section-bg">
                <div class="row">
                    @yield('layoutawal')
                </div>
            </section>
            <!-- #services -->

        </div>
    </section>
    <div class="container">
        <div class="footer">
            &copy; Made by love <i class="ion-ios-heart" style="color: red;"></i> <strong>Anthony Santoso</strong>.
            <br>
            Contact me at |
            <a href="https://www.linkedin.com/in/anthonysantoso/">
                <ion-icon name="logo-linkedin"></ion-icon> Anthony Santoso
            </a> |
            <ion-icon name="call"></ion-icon> +628990447413
        </div>
    </div>
</body>

</html>