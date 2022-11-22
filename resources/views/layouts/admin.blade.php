<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <title>Arte in Loco</title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700"/>
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20,100,1,200" rel="stylesheet" />
    <!-- CSS Files -->
    @vite('resources/sass/admin/app.scss')
    @stack('css')
</head>
<body class="g-sidenav-show  bg-gray-100">
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0   fixed-start    bg-gradient-dark"
       id="sidenav-main">
    <div class="sidenav-header text-center">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
           aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="#">
            <span class="ms-1 font-weight-bold text-white text-center">Arte In Loco</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            @auth
                <li class="nav-item mb-2 mt-0">
                        <a data-bs-toggle="collapse" href="#ProfileNav" class="nav-link text-white" aria-controls="ProfileNav"
                           role="button" aria-expanded="false">
                            <span class="nav-link-text ms-2 ps-1">{{ \Illuminate\Support\Facades\Auth::user()->name }}</span>
                        </a>
                    <div class="collapse" id="ProfileNav">
                        <ul class="nav ">
                            <li class="nav-item">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <div class="text-center"><button type="submit" class="nav-link text-white border-0 text-center">Logout</button></div>
                                </form>
    {{--                            <a class="" href="./pages/authentication/signin/basic.html">--}}
    {{--                                <span class="sidenav-mini-icon"> L </span>--}}
    {{--                                <span class="sidenav-normal  ms-3  ps-1"> Logout </span>--}}
    {{--                            </a>--}}
                            </li>
                        </ul>
                    </div>
                </li>
            @endauth
            <hr class="horizontal light mt-0">
            <li class="nav-item mt-3">
                <h6 class="ps-4  ms-2 text-uppercase text-xs font-weight-bolder text-white">PAGES</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.home') }}">
                    <i class="material-icons-round">home</i>
                    <span class="nav-link-text ms-2 ps-1">Home</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.obras.index') }}">
                    <i class="material-icons-round">image</i>
                    <span class="nav-link-text ms-2 ps-1">Obras</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.artistas.index') }}">
                    <i class="material-icons-round">palette</i>
                    <span class="nav-link-text ms-2 ps-1">Artistas</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.museus.index') }}">
                    <i class="material-icons-round">museum</i>
                    <span class="nav-link-text ms-2 ps-1">Museus</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.grupos.index') }}">
                    <i class="material-icons-round">group</i>
                    <span class="nav-link-text ms-2 ps-1">Grupos</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.eras.index') }}">
                    <i class="material-icons-round">calendar_month</i>
                    <span class="nav-link-text ms-2 ps-1">Eras</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.geolocals.index') }}">
                    <i class="material-icons-round">public</i>
                    <span class="nav-link-text ms-2 ps-1">Geolocalização</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.movimentos.index') }}">
                    <i class="material-icons-round">dataset</i>
                    <span class="nav-link-text ms-2 ps-1">Movimentos</span>
                </a>
            </li>
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" href="">--}}
{{--                    <i class="material-icons-round">settings</i>--}}
{{--                    <span class="nav-link-text ms-2 ps-1">Configurações</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a data-bs-toggle="collapse" href="#pagesConfig" class="nav-link text-white active"--}}
{{--                   aria-controls="pagesConfig" role="button" aria-expanded="false">--}}
{{--                    <i class="material-icons-round opacity-10">dashboard</i>--}}
{{--                    <span class="nav-link-text ms-2 ps-1">Páginas</span>--}}
{{--                </a>--}}
{{--                <div class="collapse show" id="pagesConfig">--}}
{{--                    <ul class="nav ">--}}
{{--                        <li class="nav-item active">--}}
{{--                            <a class="nav-link text-white active" href="{{ route('admin.pages.index', 1) }}">--}}
{{--                                <span class="sidenav-mini-icon"> A </span>--}}
{{--                                <span class="sidenav-normal  ms-2  ps-1"> Analytics </span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </li>--}}
        </ul>
    </div>

</aside>

<main class="main-content border-radius-lg ">
    <!-- Navbar -->

    <nav class="navbar navbar-main navbar-expand-lg position-sticky p-4 shadow-none mx-0 z-index-sticky" id="navbarBlur"
         data-scroll="true">
        <div class="container-fluid py-1 px-3">
            <div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none ">
                <a href="javascript:;" class="nav-link text-body p-0">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </a>
            </div>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <ul class="navbar-nav  justify-content-end w-100">
                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item dropdown pe-2">
                        <a href="javascript:;" class="nav-link text-body p-0 position-relative" id="contaBtn" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="material-icons me-sm-1">
                                account_circle
                            </i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end p-2 me-sm-n4" aria-labelledby="contaBtn">
                            <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex align-items-center py-1">
                                        <span class="material-icons">email</span>
                                        <div class="ms-2">
                                            <form action="{{ route('logout') }}" method="POST">
                                                @csrf
{{--                                                <h6 class="text-sm font-weight-normal my-auto">Logout</h6>--}}
                                                <div class="text-center"><button type="submit" class="dropdown-item border-radius-md">Logout</button></div>
                                            </form>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
{{--                    <li class="nav-item dropdown pe-2">--}}
{{--                        <a href="javascript:;" class="nav-link text-body p-0 position-relative" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                            <i class="material-icons cursor-pointer">--}}
{{--                                notifications--}}
{{--                            </i>--}}

{{--                            <span--}}
{{--                                class="position-absolute top-5 start-100 translate-middle badge rounded-pill bg-danger border border-white small py-1 px-2">--}}
{{--                  <span class="small">11</span>--}}
{{--                  <span class="visually-hidden">unread notifications</span>--}}
{{--                </span>--}}
{{--                        </a>--}}

{{--                        <ul class="dropdown-menu dropdown-menu-end p-2 me-sm-n4" aria-labelledby="dropdownMenuButton">--}}
{{--                            <li class="mb-2">--}}
{{--                                <a class="dropdown-item border-radius-md" href="javascript:;">--}}
{{--                                    <div class="d-flex align-items-center py-1">--}}
{{--                                        <span class="material-icons">email</span>--}}
{{--                                        <div class="ms-2">--}}
{{--                                            <h6 class="text-sm font-weight-normal my-auto">--}}
{{--                                                Check new messages--}}
{{--                                            </h6>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="mb-2">--}}
{{--                                <a class="dropdown-item border-radius-md" href="javascript:;">--}}
{{--                                    <div class="d-flex align-items-center py-1">--}}
{{--                                        <span class="material-icons">podcasts</span>--}}
{{--                                        <div class="ms-2">--}}
{{--                                            <h6 class="text-sm font-weight-normal my-auto">--}}
{{--                                                Manage podcast session--}}
{{--                                            </h6>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a class="dropdown-item border-radius-md" href="javascript:;">--}}
{{--                                    <div class="d-flex align-items-center py-1">--}}
{{--                                        <span class="material-icons">shopping_cart</span>--}}
{{--                                        <div class="ms-2">--}}
{{--                                            <h6 class="text-sm font-weight-normal my-auto">--}}
{{--                                                Payment successfully completed--}}
{{--                                            </h6>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <div class="container-fluid py-4 h-100 w-100">
        @yield('content')
    </div>

    <footer class="footer py-4  ">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between text-center">
                <div class=" mb-lg-0 mb-4">
                    <div class="copyright text-center text-sm text-muted text-lg-start">
                        ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        ,
                        made with <i class="fa fa-heart"></i> by
                        <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                        for a better web.
                    </div>
                </div>
            </div>
        </div>
    </footer>

</main>
@vite('resources/js/admin/core/bootstrap.bundle.min.js')
@vite('resources/js/admin/plugins/perfect-scrollbar.min.js')
@vite('resources/js/admin/plugins/smooth-scrollbar.min.js')
{{--@vite('resources/js/admin/plugins/jkanban/jkanban.js')--}}
@vite('resources/js/admin/plugins/dragula/dragula.js')
@vite('resources/js/admin/material-dashboard.js')
@stack('js')
</body>

</html>
