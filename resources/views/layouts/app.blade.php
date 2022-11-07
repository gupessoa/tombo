<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Tombo</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20,100,1,200" rel="stylesheet" />

        <!-- Icons -->
{{--        <link href="./assets/css/nucleo-icons.css" rel="stylesheet">--}}
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

        <!-- Material Kit-->
{{--        <link type="text/css" href="./assets/css/material-kit-pro.min.css" rel="stylesheet">--}}
{{--        <link rel="stylesheet" href="/assets/css/style.css">--}}
        @vite('resources/sass/app.scss')
        @stack('css')
    </head>
    <body>
        <header>
            <!-- Navbar Light -->
            <nav class="navbar navbar-expand-lg navbar-light bg-white z-index-3 py-3">
                <div class="container">
                    <a class="navbar-brand" href="{{ route('home') }}" rel="tooltip"
                       title="Arte in Loco" data-placement="bottom" target="_blank">
                        Arte in Loco
                    </a>
                    <a href="https://www.creative-tim.com/product/material-design-system-pro#pricingCard"
                       class="btn btn-sm  bg-gradient-primary  btn-round mb-0 ms-auto d-lg-none d-block">Buy Now</a>
                    <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon mt-2">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </span>
                    </button>
                    <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
                        <ul class="navbar-nav navbar-nav-hover mx-auto">
                            <li class="nav-item mx-2">
                                <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                                   href="{{ route('obras') }}">
                                    Obras
                                </a>
                            </li>

                            <li class="nav-item mx-2">
                                <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                                   href="{{ route('artistas') }}">
                                    Artistas
                                </a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                                   href="{{ route('historia') }}">
                                    História e Arte
                                </a>
                            </li>

                            <li class="nav-item mx-2">
                                <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                                   href="{{ route('museus') }}">
                                    Museus
                                </a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                                   href="{{ route('sobre') }}">
                                    Sobre Nós
                                </a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                                   href="{{ route('contato') }}">
                                    Contato
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
        </header>
        <main>
            @yield('content')
        </main>
        <footer class="footer py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-4 mx-auto text-center">
                        <a href="{{ route('obras') }}" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                            Obras
                        </a>
                        <a href="{{ route('artistas') }}" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                            Artistas
                        </a>
                        <a href="{{ route('historia') }}" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                            História e Arte
                        </a>
                        <a href="{{ route('museus') }}" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                            Museus
                        </a>
                        <a href="{{ route('sobre') }}" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                            Sobre Nós
                        </a>
                        <a href="{{ route('contato') }}" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                            Contato
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8 mx-auto text-center mt-1">
                        <p class="mb-0 text-secondary">
                            Copyright ©
                            <script>document.write(new Date().getFullYear())</script>
                            CodNome.com.br
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!--   Core JS Files   -->
        @vite('resources/js/app.js')
        @vite('resources/js/core/bootstrap.bundle.min.js')
        @vite('resources/js/plugins/perfect-scrollbar.min.js')
        @vite('resources/js/plugins/moment.min.js')
        @vite('resources/js/plugins/nouislider.min.js')
        @vite('resources/js/plugins/glidejs.min.js')
        @vite('resources/js/plugins/choices.min.js')
        @vite('resources/js/material-kit-pro.js')
{{--        <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>--}}
{{--        <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>--}}
{{--        <script src="./assets/js/plugins/perfect-scrollbar.min.js" type="text/javascript"></script>--}}
{{--        <script src="./assets/js/plugins/moment.min.js"></script>--}}
{{--        <!-- Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->--}}
{{--        <script src="./assets/js/plugins/nouislider.min.js"></script>--}}
{{--        <!--  Plugin for the Carousel, full documentation here: http://jedrzejchalubek.com/  -->--}}
{{--        <script src="./assets/js/plugins/glidejs.min.js"></script>--}}
{{--        <!--	Plugin for Select, full documentation here: https://joshuajohnson.co.uk/Choices/ -->--}}
{{--        <script src="./assets/js/plugins/choices.min.js" type="text/javascript"></script>--}}
{{--        <!-- Control Center for Material Kit parallax effects, scripts for the example pages etc -->--}}
{{--        <script src="./assets/js/material-kit-pro.min.js" type="text/javascript"></script>--}}
    @stack('js')
    </body>
</html>
