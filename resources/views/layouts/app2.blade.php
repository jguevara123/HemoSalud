<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font CSS -->
    <link href="{{ asset('assets/css/boxicon.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Load Tempalte CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

</head>
<body>
    <div id="app">
        
        <!-- Header -->
        <nav id="main_nav" class="navbar navbar-expand-lg navbar-light bg-white shadow">
            <div class="container d-flex justify-content-between align-items-center">
                <a class="navbar-brand h1" href="{{url('/')}}">
                    <i class='bx bxs-flask bx-sm bx-tada-hover text-dark'></i>
                    <span class="text-dark h4">HemoSalud</span> <span class="text-primary h4"></span>
                </a>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler-success" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="navbar-toggler-success">
                    <div class="flex-fill mx-xl-4 mb-2">
                    </div>
                    <div class="navbar align-self-center d-flex">
                        <a class="nav-link" target="_blank" href="https://www.instagram.com/labhemosalud/?hl=es"><i class='bx bxl-instagram bx-sm bx-tada-hover text-primary'></i></a>
                        <a class="nav-link" href="https://wa.me/584243437606" target="_blank"><i class='bx bxl-whatsapp bx-sm bx-tada-hover text-primary'></i></a>

                        @if (Route::has('login'))
                                @auth
                                    <!-- <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a> -->
                                    <a class="nav-link" href="{{ url('/home') }}"><i class='bx bx-user-circle bx-sm bx-tada-hover text-primary'></i></a>
                                @else
                                    <!-- <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a> -->
                                    <a class="nav-link" href="{{ route('login') }}"><i class='bx bx-user-circle bx-sm bx-tada-hover text-primary'></i></a>

                                    {{-- @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                                    @endif --}}
                                @endauth
                        @endif
                    </div>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Load jQuery require for isotope -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <!-- Isotope -->
    <script src="{{ asset('assets/js/isotope.pkgd.js') }}"></script>
    <!-- Page Script -->
    <script>
        $(window).load(function() {
            // init Isotope
            var $projects = $('.projects').isotope({
                itemSelector: '.project',
                layoutMode: 'fitRows'
            });
            $(".filter-btn").click(function() {
                var data_filter = $(this).attr("data-filter");
                $projects.isotope({
                    filter: data_filter
                });
                $(".filter-btn").removeClass("active");
                $(".filter-btn").removeClass("shadow");
                $(this).addClass("active");
                $(this).addClass("shadow");
                return false;
            });
        });
    </script>
    <!-- Templatemo -->
    <script src="{{ asset('assets/js/templatemo.js') }}"></script>
    <!-- Custom -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>
</html>
