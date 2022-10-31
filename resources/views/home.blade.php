@extends('layouts.app')
@section('content')
    <section class="container-fluid hl-header bg-light">
        <div class=" container p-5 mb-4">
            <div class="container-fluid py-5">
                <h1 class="h3 fw-bold">Arte e Alma</h1>
                <p class="col-md-8">A arte é uma ação da alma, não do intelecto.</p>
            </div>
        </div>
    </section>
    <section class="container my-5 pt-5">
        <h1 class="fw-light h3">Novas Obras</h1>
        <div class="row">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner mb-4">
                    <div class="carousel-item active">
                        <div class="page-header min-vh-50 m-3 border-radius-xl"
                             style="background-image: url({{asset('images/monalisa.jpg')}});">
                            <span class="mask bg-gradient-dark"></span>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 my-auto">
                                        <h4 class="text-white mb-0 fadeIn1 fadeInBottom">Leonardo da Vinci</h4>
                                        <h1 class="text-white fadeIn2 fadeInBottom">Mona Lisa</h1>
                                        <p class="lead text-white opacity-8 fadeIn3 fadeInBottom">Pintura em óleo sobre
                                            madeira pintado pelo renascentista italiano Leonardo da Vinci entre os anos
                                            1503 e 1506.</p>
                                    </div>
                                    <div class="col-lg-6 d-flex justify-content-center">
                                        <img class="img-thumbnai" width="200px" src="{{asset('images/monalisa.jpg')}}"
                                             alt="Monalisa">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="page-header min-vh-50 m-3 border-radius-xl"
                             style="background-image: url('{{asset('images/noite_estrelada.jpg')}}');">
                            <span class="mask bg-gradient-dark"></span>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 my-auto">
                                        <h4 class="text-white mb-0 fadeIn1 fadeInBottom">Noite Estrelada</h4>
                                        <h1 class="text-white fadeIn2 fadeInBottom">Vincent van Gogh</h1>
                                        <p class="lead text-white opacity-8 fadeIn3 fadeInBottom">Pintura em óleo sobre
                                            madeira pintado pelo renascentista italiano entre os anos 1503 e 1506.</p>
                                    </div>
                                    <div class="col-lg-6 d-flex justify-content-center">
                                        <img class="img-thumbnai" width="200px" src="{{asset('images/noite_estrelada.jpg')}}"
                                             alt="Noite Estrelada">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="page-header min-vh-50 m-3 border-radius-xl"
                             style="background-image: url('{{asset('images/aonda.jpg')}}');">
                            <span class="mask bg-gradient-dark"></span>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 my-auto">
                                        <h4 class="text-white mb-0 fadeIn1 fadeInBottom">A Onda</h4>
                                        <h1 class="text-white fadeIn2 fadeInBottom">Katsushika Hokusai</h1>
                                        <p class="lead text-white opacity-8 fadeIn3 fadeInBottom">Pintura em óleo sobre
                                            madeira pintado pelo renascentista italiano entre os anos 1503 e 1506.</p>
                                    </div>
                                    <div class="col-lg-6 d-flex justify-content-center">
                                        <img class="img-thumbnai" width="200px" src="{{asset('images/aonda.jpg')}}"
                                             alt="A Onda">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="min-vh-50 position-absolute w-100 top-0">
                    <!-- <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon position-absolute bottom-50" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a> -->
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon position-absolute bottom-50" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="container  py-2">
        <h1 class="fw-light mt-3 h3">Arte no Mundo</h1>
        <div class="row">
            <div class="col-lg-6 col-sm-12 order-sm-first text-justify">
                <p>Enta a arte separada geograficamente. Existem muitas variações disponíveis de passagens de Lorem
                    Ipsum, mas a maioria sofreu algum tipo de alteração, seja por inserção de passagens com humor,
                    ou palavras aleatórias que não parecem nem um pouco convincentes. edefinidos conforme
                    necessário, fazendo deste o primeiro gerador de Lorem Ipsum autêntico da internet. Ele usa um
                    dicionário com mais de 200 palavras.</p>
                <p>Enta a arte separada geograficamente. Existem muitas variações disponíveis de passagens de Lorem
                    Ipsum, mas a maioria sofreu algum tipo de alteração, seja por inserção de passagens com humor,
                    ou palavras aleatórias que não parecem nem um pouco convincentes. edefinidos conforme
                    necessário, fazendo deste o primeiro gerador de Lorem Ipsum autêntico da internet. Ele usa um
                    dicionário com mais de 200 palavras.</p>
                <p>Enta a arte separada geograficamente. Existem muitas variações disponíveis de passagens de Lorem
                    Ipsum, mas a maioria sofreu algum tipo de alteração</p>
            </div>
            <div class="col-lg-6 col-sm-12 order-sm-last">
                <img src="{{asset('images/map_word.png')}}" alt="">
            </div>
        </div>
    </section>
    <section class="container my-5 pb-5">
        <h1 class="fw-light h3">Novos Artistas</h1>
        <div class="row">
            <div class="col-12 col-lg-2 col-md-4 col-sm-5 px-sm-1 pe-3">
                <div class="card shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="175"
                         xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                         preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"></rect>
                        <text x="50%" y="50%" fill="#eceeef"
                              dy=".3em">Thumbnail
                        </text>
                    </svg>
                    <div class="card-body text-center">
                        <div class="d-flex d-flex justify-content-center">
                            <h3 class="text-center h4">
                                <a href="obra.html" class="text-decoration-none link-secondary">
                                    Artista 1
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-2 col-md-4 col-sm-5 px-sm-1 pe-3">
                <div class="card shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="175"
                         xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                         preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"></rect>
                        <text x="50%" y="50%" fill="#eceeef"
                              dy=".3em">Thumbnail
                        </text>
                    </svg>
                    <div class="card-body text-center">
                        <div class="d-flex d-flex justify-content-center">
                            <h3 class="text-center h4">
                                <a href="obra.html" class="text-decoration-none link-secondary">
                                    Artista 1
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-2 col-md-4 col-sm-5 px-sm-1 pe-3">
                <div class="card shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="175"
                         xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                         preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"></rect>
                        <text x="50%" y="50%" fill="#eceeef"
                              dy=".3em">Thumbnail
                        </text>
                    </svg>
                    <div class="card-body text-center">
                        <div class="d-flex d-flex justify-content-center">
                            <h3 class="text-center h4">
                                <a href="obra.html" class="text-decoration-none link-secondary">
                                    Artista 1
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-2 col-md-4 col-sm-5 px-sm-1 pe-3">
                <div class="card shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="175"
                         xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                         preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"></rect>
                        <text x="50%" y="50%" fill="#eceeef"
                              dy=".3em">Thumbnail
                        </text>
                    </svg>
                    <div class="card-body text-center">
                        <div class="d-flex d-flex justify-content-center">
                            <h3 class="text-center h4">
                                <a href="obra.html" class="text-decoration-none link-secondary">
                                    Artista 1
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-2 col-md-4 col-sm-5 px-sm-1 pe-3">
                <div class="card shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="175"
                         xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                         preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"></rect>
                        <text x="50%" y="50%" fill="#eceeef"
                              dy=".3em">Thumbnail
                        </text>
                    </svg>
                    <div class="card-body text-center">
                        <div class="d-flex d-flex justify-content-center">
                            <h3 class="text-center h4">
                                <a href="obra.html" class="text-decoration-none link-secondary">
                                    Artista 1
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-2 col-md-4 col-sm-5 px-sm-1 pe-3">
                <div class="card shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="175"
                         xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                         preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"></rect>
                        <text x="50%" y="50%" fill="#eceeef"
                              dy=".3em">Thumbnail
                        </text>
                    </svg>
                    <div class="card-body text-center">
                        <div class="d-flex d-flex justify-content-center">
                            <h3 class="text-center h4">
                                <a href="obra.html" class="text-decoration-none link-secondary">
                                    Artista 1
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid hl-footer bg-light">
        <div class=" container p-5 mb-4">
            <div class="container-fluid py-5">
                <div>
                    <h1 class="h3 fw-bold">Amor e Arte</h1>
                    <blockquote>
                        Só o amor e arte tornam a existência tolerável.
                        <br><cite>- William Maugham</cite>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('js')
    <script></script>
@endpush
