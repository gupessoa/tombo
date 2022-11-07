<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Tombo</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20,100,1,200"
              rel="stylesheet"/>

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
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div
                            class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
                            <div
                                class="position-relative h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center"
                                style="background-image: url('{{asset('images/museum-1.jpg')}}'); background-size: cover; background-position: center;"
                                loading="lazy"></div>
                        </div>
                        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
                            <div class="card card-plain">
                                <div class="card-header text-center">
                                    <h4 class="font-weight-bolder">Login</h4>
                                    <p class="mb-0">Digite seu e-mail e senha para entrar</p>
                                </div>
                                <div class="card-body mt-2">
                                    <form role="form" action="{{ route('login') }}" method="POST">
                                        @csrf
                                        @method('POST')
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control">
                                        </div>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">Senha</label>
                                            <input type="password" class="form-control">
                                        </div>
                                        <div class="form-check form-switch d-flex align-items-center mb-3">
                                            <input class="form-check-input" type="checkbox" id="rememberMe">
                                            <label class="form-check-label mb-0 ms-3" for="rememberMe">Lembrar-me</label>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Entrar </button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto">
                                        Não tem uma conta?
                                        <a href="{{ route('register') }}" class="text-primary text-gradient font-weight-bold">Cadastrar</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
    </body>
</html>
