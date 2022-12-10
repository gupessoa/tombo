<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="{{asset('images/administracao.png')}}">
    <title>Arte in Loco</title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700"/>
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20,100,1,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- CSS Files -->
    @vite('resources/sass/admin/app.scss')
    @stack('css')
</head>
<body class="bg-gray-100">
    <div class="d-flex w-100">
        <nav class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark aside d-inline-block" style="width: 280px;" id="sidebarMenu">
            <a href="{{ route('admin.home') }}" class="mb-3 mb-md-0 text-white text-decoration-none text-center">
                <h1 class="fs-4">Tombo - Admin</h1>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a class="nav-link d-flex align-content-end text-white {{ request()->segment(2) == 'home' ? 'active' : '' }}" href="{{ route('admin.home') }}">
                        <i class="material-icons-round">home</i>
                        <span class="nav-link-text ms-2 ps-1">Home</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-content-end text-white {{ request()->segment(2) == 'obras' ? 'active' : '' }}" href="{{ route('admin.obras.index') }}">
                        <i class="material-icons-round">image</i>
                        <span class="nav-link-text ms-2 ps-1">Obras</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-content-end text-white {{ request()->segment(2) == 'artistas' ? 'active' : '' }}" href="{{ route('admin.artistas.index') }}">
                        <i class="material-icons-round">palette</i>
                        <span class="nav-link-text ms-2 ps-1">Artistas</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-content-end text-white {{ request()->segment(2) == 'museus' ? 'active' : '' }}" href="{{ route('admin.museus.index') }}">
                        <i class="material-icons-round">museum</i>
                        <span class="nav-link-text ms-2 ps-1">Museus</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-content-end text-white {{ request()->segment(2) == 'grupos' ? 'active' : '' }}" href="{{ route('admin.grupos.index') }}">
                        <i class="material-icons-round">group</i>
                        <span class="nav-link-text ms-2 ps-1">Grupos</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-content-end text-white {{ request()->segment(2) == 'eras' ? 'active' : '' }}" href="{{ route('admin.eras.index') }}">
                        <i class="material-icons-round">calendar_month</i>
                        <span class="nav-link-text ms-2 ps-1">Eras</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-content-end text-white {{ request()->segment(2) == 'geolocals' ? 'active' : '' }}" href="{{ route('admin.geolocals.index') }}">
                        <i class="material-icons-round">public</i>
                        <span class="nav-link-text ms-2 ps-1">Geolocalização</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-content-end text-white {{ request()->segment(2) == 'movimentos' ? 'active' : '' }}" href="{{ route('admin.movimentos.index') }}">
                        <i class="material-icons-round">dataset</i>
                        <span class="nav-link-text ms-2 ps-1">Movimentos</span>
                    </a>
                </li>
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link d-flex align-content-end text-white {{ request()->segment(2) == 'obras' ? 'active' : '' }}" href="">--}}
{{--                        <i class="material-icons-round">settings</i>--}}
{{--                        <span class="nav-link-text ms-2 ps-1">Configurações</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a data-bs-toggle="collapse" href="#pagesConfig" class="nav-link text-white active" aria-controls="pagesConfig" role="button" aria-expanded="false">--}}
{{--                        <i class="material-icons-round opacity-10">dashboard</i>--}}
{{--                        <span class="nav-link-text ms-2 ps-1">Páginas</span>--}}
{{--                    </a>--}}
{{--                    <div class="collapse" id="pagesConfig">--}}
{{--                        <ul class="nav flex-column">--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link text-white" href="{{ route('admin.pages.index', 1) }}">--}}
{{--                                    <span class="sidenav-normal  ms-2  ps-1"> Analytics </span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}
            </ul>
            <hr>
            <div class="text-center">
                <button role="button" class="btn btn-warning">Support</button>
            </div>
        </nav>
        <div class="wrap-content container-fluid">
            <header class="p-3 mb-3 border-bottom">
                <div class="container-fluid">
                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                            <span id="menu-btn" role="button">
                                <i class="material-symbols-outlined ">menu</i>
                            </span>


                        <div class="dropdown text-end">
                            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                            </a>
                            <ul class="dropdown-menu text-small align-self-end">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
            <main>
                <div class="container">
                    @yield('content')
                </div>
            </main>
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-4 border-top">
                <div class="col-md-4 d-flex align-items-center">
                    <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
                    </a>
                    <span class="mb-3 mb-md-0 text-muted">© 2022 Company, Inc</span>
                </div>

                <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                    <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
                    <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
                    <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
                </ul>
            </footer>
        </div>
    </div>
</main>
@vite('resources/js/admin/core/bootstrap.bundle.min.js')
@vite('resources/js/admin/app.js')
@stack('js')
</body>

</html>
