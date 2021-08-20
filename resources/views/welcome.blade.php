<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

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

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        
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
                        <ul class="nav navbar-nav d-flex justify-content-between mx-xl-4 text-center text-dark">
                            <li class="nav-item">
                                <a class="nav-link btn-outline-primary rounded-pill px-4" href="index.html">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn-outline-primary rounded-pill px-4" href="#Nosotros">Nosotros</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn-outline-primary rounded-pill px-4" href="#Servicios">Servicios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn-outline-primary rounded-pill px-4" href="#Contacto">Contacto</a>
                            </li>
                        </ul>
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
        <!-- Close Header -->


        <!-- Start Banner Hero -->
        <div class="banner-wrapper bg-light">
            <div id="index_banner" class="banner-vertical-center-index container-fluid pt-5">

                <!-- Start slider -->
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">

                            <div class="py-5 row d-flex align-items-center">
                                <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5">
                                    <h1 class="banner-heading h1 text-secondary display-3 mb-0 pb-5 mx-0 px-0 light-300 typo-space-line">
                                        Vamos a tu  <strong>Empresa</strong>
                                      <br> Recolección de Muestras
                                  </h1>
                                    <p class="banner-body text-muted py-3 mx-0 px-0">
                                        ATENCIÓN A DOMICILIO, Servicio Único para tu Paciente, Familia y Personal de Trabajo.
                                  </p>
                                    <a class="banner-button btn rounded-pill btn-outline-primary btn-lg px-4" href="https://wa.me/584243437606" target="_blank" role="button">Escribenos</a>
                                </div>
                            </div>

                        </div>
                        <div class="carousel-item">

                            <div class="py-5 row d-flex align-items-center">
                                <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5">
                                    <h1 class="banner-heading h1 text-secondary display-3 mb-0 pb-3 mx-0 px-0 light-300">
                                        Laboratorio Clínico <b>Especializado</b>
                                    </h1>
                                    <p class="banner-body text-muted py-3">
                                        Perfil 20, Perfil Tiroideo, Perfil Prenatal, Perfil Preoperatorio, Perfil Neonatal, Perfil Prostático, Perfil Hormonal Femenino, Perfil General, Perfil Lipídico, Perfil Reumático, Perfil Renal, Perfil Electrolito
                                    </p>
                                    <a class="banner-button btn rounded-pill btn-outline-primary btn-lg px-4" href="https://wa.me/584243437606" target="_blank" role="button">Escribenos</a>
                                </div>
                            </div>

                        </div>
                        <div class="carousel-item">

                            <div class="py-5 row d-flex align-items-center">
                                <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5">
                                    <h1 class="banner-heading h1 text-secondary display-3 mb-0 pb-3 mx-0 px-0 light-300">
                                        <b>Si Vas a Viajar</b> Prueba para COVID-19
                                    </h1>
                                    <p class="banner-body text-muted py-3">
                                        <b>Entrega Inmediata</b>
                                    </p>
                                    <a class="banner-button btn rounded-pill btn-outline-primary btn-lg px-4" href="https://wa.me/584243437606" target="_blank" role="button">Escribenos</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <a class="carousel-control-prev text-decoration-none" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                        <i class='bx bx-chevron-left'></i>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next text-decoration-none" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                        <i class='bx bx-chevron-right'></i>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
                <!-- End slider -->

            </div>
        </div>
        <!-- End Banner Hero -->



        <!-- Start Service -->
        <section id="Nosotros" class="service-wrapper py-3">
            <div class="container-fluid pb-3">
                <div class="row">
                    <h2 class="h2 text-center col-12 py-5 semi-bold-600">Laboratorio HemoSalud C.A.</h2>
                    <div class="service-header col-2 col-lg-3 text-end light-300">
                        <i class='bx bxs-flask h3 mt-1'></i>
                    </div>
                    <div class="service-heading col-10 col-lg-9 text-start float-end light-300">
                        <h2 class="h3 pb-4 typo-space-line">Especializado</h2>
                    </div>
                </div>
                <p class="service-footer col-10 offset-2 col-lg-9 offset-lg-3 text-start pb-3 text-muted px-2"><font color="#ffffff">
                    Fue fundado en el 2012 con el objetivo único de desarrollar pruebas de diagnóstico para la comunidad médica y los pacientes. Establecido en Maracay, Estado Aragua.
                </p>
            </div>

            <div class="service-tag py-5 bg-secondary">
                <div class="col-md-12">
                    <ul class="nav d-flex justify-content-center">
                        <li class="nav-item mx-lg-4">
                            <a class="filter-btn nav-link btn-outline-primary active shadow rounded-pill text-light px-4 light-300" href="#" data-filter=".project">Todos</a>
                        </li>
                        <li class="nav-item mx-lg-4">
                            <a class="filter-btn nav-link btn-outline-primary rounded-pill text-light px-4 light-300" href="#" data-filter=".graphic">Examenes</a>
                        </li>
                        <li class="filter-btn nav-item mx-lg-4">
                            <a class="filter-btn nav-link btn-outline-primary rounded-pill text-light px-4 light-300" href="#" data-filter=".ui">Especiales</a>
                        </li>
                        <li class="nav-item mx-lg-4">
                            <a class="filter-btn nav-link btn-outline-primary rounded-pill text-light px-4 light-300" href="#" data-filter=".branding">Información</a>
                        </li>
                    </ul>
                </div>
            </div>

        </section>

        <section id="Servicios" class="container overflow-hidden py-5">
            <div class="row gx-5 gx-sm-3 gx-lg-5 gy-lg-5 gy-3 pb-3 projects">

                <!-- Start Recent Work -->
                <div class="col-xl-3 col-md-4 col-sm-6 project ui branding">
                    <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                        <img class="service card-img" src="./assets/img/services-01.jpg" alt="Card image">
                        <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="service-work-content text-left text-light">
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </a>
                </div><!-- End Recent Work -->

                <!-- Start Recent Work -->
                <div class="col-xl-3 col-md-4 col-sm-6 project ui graphic">
                    <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                        <img class="card-img" src="./assets/img/services-02.jpg" alt="Card image">
                        <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="service-work-content text-left text-light">
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </a>
                </div><!-- End Recent Work -->

                <!-- Start Recent Work -->
                <div class="col-xl-3 col-md-4 col-sm-6 project branding">
                    <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                        <img class="card-img" src="./assets/img/services-03.jpg" alt="Card image">
                        <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="service-work-content text-left text-light">
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </a>
                </div><!-- End Recent Work -->

                <!-- Start Recent Work -->
                <div class="col-xl-3 col-md-4 col-sm-6 project ui graphic">
                    <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                        <img class="card-img" src="./assets/img/services-04.jpg" alt="Card image">
                        <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="service-work-content text-left text-light">
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </a>
                </div><!-- End Recent Work -->

                <!-- Start Recent Work -->
                <div class="col-xl-3 col-md-4 col-sm-6 project ui graphic">
                    <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                        <img class="card-img" src="./assets/img/services-05.jpg" alt="Card image">
                        <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="service-work-content text-left text-light">
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </a>
                </div><!-- End Recent Work -->

                <!-- Start Recent Work -->
                <div class="col-xl-3 col-md-4 col-sm-6 project branding">
                    <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                        <img class="card-img" src="./assets/img/services-06.jpg" alt="Card image">
                        <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="service-work-content text-left text-light">
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </a>
                </div><!-- End Recent Work -->

                <!-- Start Recent Work -->
                <div class="col-xl-3 col-md-4 col-sm-6 project branding">
                    <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                        <img class="card-img" src="./assets/img/services-07.jpg" alt="Card image">
                        <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="service-work-content text-left text-light">
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </a>
                </div><!-- End Recent Work -->

                <!-- Start Recent Work -->
                <div class="col-xl-3 col-md-4 col-sm-6 project ui graphic branding">
                    <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                        <img class="card-img" src="./assets/img/services-08.jpg" alt="Card image">
                        <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="service-work-content text-left text-light">
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </a>
                </div><!-- End Recent Work -->

            </div>
        </section>
        <!-- End Service -->






        <!-- Start View Work -->
        <section class="bg-secondary">
            <div class="container py-5">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-2 col-12 text-light align-items-center">
                        <i class='display-1 bx bx-dna bx-lg'></i>
                    </div>
                    <div class="col-lg-7 col-12 text-light pt-2">
                        <h3 class="h4 light-300">Especialistas para Prevenir el COVID-19</h3>
                        <p class="light-300">Emergencia-Rutina-Especiales-Hisopados-Servicio a Domicilio-Servicio Ocupacional "Empresas".</p>
                    </div>
                    <div class="col-lg-3 col-12 pt-4">
                        <a href="#" class="btn btn-primary rounded-pill btn-block shadow px-4 py-2">Conocer más</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End View Work -->

        <!-- Start Recent Work -->
        <section class="py-5 mb-5">
            <div class="container">
                <div class="recent-work-header row text-center pb-5">
                    <h2 class="col-md-6 m-auto h2 semi-bold-600 py-5">Cuidamos Tu Salud</h2>
                </div>
                <div class="row gy-5 g-lg-5 mb-4">

                    <!-- Start Recent Work -->
                    <div class="col-md-4 mb-3">
                        <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
                            <img class="recent-work-img card-img" src="./assets/img/recent-work-01.jpg" alt="Card image">
                            <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                                <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                    <h3 class="card-title light-300"></h3>
                                    <p class="card-text"></p>
                                </div>
                            </div>
                        </a>
                    </div><!-- End Recent Work -->

                    <!-- Start Recent Work -->
                    <div class="col-md-4 mb-3">
                        <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
                            <img class="recent-work-img card-img" src="./assets/img/recent-work-02.jpg" alt="Card image">
                            <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                                <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                    <h3 class="card-title light-300"></h3>
                                    <p class="card-text"></p>
                                </div>
                            </div>
                        </a>
                    </div><!-- End Recent Work -->

                    <!-- Start Recent Work -->
                    <div class="col-md-4 mb-3">
                        <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
                            <img class="recent-work-img card-img" src="./assets/img/recent-work-03.jpg" alt="Card image">
                            <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                                <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                    <h3 class="card-title light-300"></h3>
                                    <p class="card-text"></p>
                                </div>
                            </div>
                        </a>
                    </div><!-- End Recent Work -->

                    <!-- Start Recent Work -->
                    <div class="col-md-4 mb-3">
                        <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
                            <img class="recent-work-img card-img" src="./assets/img/recent-work-04.jpg" alt="Card image">
                            <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                                <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                    <h3 class="card-title light-300"></h3>
                                    <p class="card-text"></p>
                                </div>
                            </div>
                        </a>
                    </div><!-- End Recent Work -->

                    <!-- Start Recent Work -->
                    <div class="col-md-4 mb-3">
                        <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
                            <img class="recent-work-img card-img" src="./assets/img/recent-work-05.jpg" alt="Card image">
                            <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                                <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                    <h3 class="card-title light-300"></h3>
                                    <p class="card-text"></p>
                                </div>
                            </div>
                        </a>
                    </div><!-- End Recent Work -->

                    <!-- Start Recent Work -->
                    <div class="col-md-4 mb-3">
                        <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
                            <img class="recent-work-img card-img" src="./assets/img/recent-work-06.jpg" alt="Card image">
                            <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                                <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                    <h3 class="card-title light-300"></h3>
                                    <p class="card-text"></p>
                                </div>
                            </div>
                        </a>
                    </div><!-- End Recent Work -->

                </div>
            </div>
        </section>
        <!-- End Recent Work -->



        <!-- Start Footer -->
        <footer id="Contacto" class="bg-secondary pt-4">
            <div class="container">
                <div class="row py-4">

                    <div class="col-lg-3 col-12 align-left">
                        <a class="navbar-brand" href="index.html">
                            <i class='bx bxs-flask bx-sm bx-tada-hover bx-sm text-light'></i>
                            <span class="text-dark h4">HemoSalud</span> <span class="text-primary h4"</span>
                        </a>
                        <p class="text-light my-lg-4 my-2">
                            Av. Constitución con Calle Unión
                            en la Antigua Clínica Virgen de Betania Maracay
                            Edo. Aragua
                        </p>
                        <ul class="list-inline footer-icons light-300">
                            <li class="list-inline-item m-0">
                                <a class="text-light" target="_blank" href="https://m.facebook.com/labhemosalud-102750811521366/?ref=page_internal&__tn__=C-R">
                                    <i class='bx bxl-facebook bx-md bx-tada-hover text-primary'></i>
                                </a>
                            </li>
                            <li class="list-inline-item m-0">
                                <a class="text-light" target="_blank" href="https://www.instagram.com/labhemosalud/?hl=es">
                                    <i class='bx bxl-instagram bx-md bx-tada-hover text-primary' ></i>
                                </a>
                            </li>
                            <li class="list-inline-item m-0">
                                <a class="text-light" target="_blank" href="https://wa.me/584243437606">
                                    <i class='bx bxl-whatsapp bx-md bx-tada-hover text-primary'></i>
                                </a>
                            </li>
                            <li class="list-inline-item m-0">
                                <a class="text-light" target="_blank" href="https://www.waze.com/es/live-map/directions/venezuela/aragua/maracay/laboratorio-hemosalud?utm_campaign=waze_website&utm_medium=website_footer&utm_source=waze_website&to=place.ChIJtV8wlfA9gI4RQRiKjxt9XGs">
                                    <i class='bx bx-navigation bx-md bx-tada-hover text-primary'></i>
                                </a>
                            </li>
                            <li class="list-inline-item m-0">
                                <a class="text-light" target="_blank" href="https://www.google.com/maps/place/Laboratorio+Hemosalud/@10.2507436,-67.6163663,15z/data=!4m5!3m4!1s0x0:0x6b5c7d1b8f8a1841!8m2!3d10.2507436!4d-67.6163663">
                                    <i class='bx bx-map bx-md bx-tada-hover text-primary'></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                        <h3 class="h4 pb-lg-3 text-light light-300"></h2>
                            <ul class="list-unstyled text-light light-300">
                                <li class="pb-2">
                                    <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light" href="index.html">Inicio</a>
                                </li>
                                <li class="pb-2">
                                    <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#Nosotros">Nosotros</a>
                                </li>
                                <li class="pb-2">
                                    <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#Servicios">Servicios</a>
                                </li>
                                <li class="pb-2">
                                    <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#Contacto">Contacto</a>
                                </li>
                            </ul>
                    </div>

                    <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                        <h2 class="h4 pb-lg-3 text-light light-300">Contactanos al:</h2>
                        <ul class="list-unstyled text-light light-300">
                            <li class="pb-2">
                                <i class='bx-fw bx bx-phone bx-xs'></i><a class="text-decoration-none text-light py-1" href="tel:584243437606">+58-424-343.76.06</a>
                            </li>
                            <li class="pb-2">
                                <i class='bx-fw bx bx-mail-send bx-xs'></i><a class="text-decoration-none text-light py-1" href="mailto:hemosalud86@gmail.com">hemosalud86@gmail.com</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="w-100 bg-primary py-3">
                <div class="container">
                    <div class="row pt-2">
                        <div class="col-lg-6 col-sm-12">
                            <p class="text-lg-start text-center text-light light-300">
                                © Copyright 2021 HemoSalud,C.A.
                            </p>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <p class="text-lg-end text-center text-light light-300">
                                Designed by <a rel="sponsored" class="text-decoration-none text-light" href="https://wa.me/584121366562" target="_blank"><strong>Emiro Atencio</strong></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </footer>
        <!-- End Footer -->



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
