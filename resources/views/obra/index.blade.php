@extends('layouts.app')
@section('content')
    <section class="page-title py-4">
        <div class="container">
            <h2 class="text-center">{{ $page->title }}</h2>
        </div>
    </section>
    <section class="container content">
        <p class="descripttion w-75 text-center mx-auto mt-5">{{ $page->descricao }}</p>
        <nav aria-label="Page navigation example" class="my-4">
            <ul class="pagination justify-content-center">
                <li class="page-item active"><a class="page-link" href="#">A</a></li>
                <li class="page-item"><a class="page-link" href="#">B</a></li>
                <li class="page-item"><a class="page-link" href="#">C</a></li>
                <li class="page-item"><a class="page-link" href="#">D</a></li>
                <li class="page-item"><a class="page-link" href="#">E</a></li>
                <li class="page-item"><a class="page-link" href="#">F</a></li>
                <li class="page-item"><a class="page-link" href="#">G</a></li>
                <li class="page-item"><a class="page-link" href="#">H</a></li>
                <li class="page-item"><a class="page-link" href="#">I</a></li>
                <li class="page-item"><a class="page-link" href="#">J</a></li>
                <li class="page-item"><a class="page-link" href="#">K</a></li>
                <li class="page-item"><a class="page-link" href="#">L</a></li>
                <li class="page-item"><a class="page-link" href="#">M</a></li>
                <li class="page-item"><a class="page-link" href="#">N</a></li>
                <li class="page-item"><a class="page-link" href="#">O</a></li>
                <li class="page-item"><a class="page-link" href="#">P</a></li>
                <li class="page-item"><a class="page-link" href="#">Q</a></li>
                <li class="page-item"><a class="page-link" href="#">R</a></li>
                <li class="page-item"><a class="page-link" href="#">S</a></li>
                <li class="page-item"><a class="page-link" href="#">T</a></li>
                <li class="page-item"><a class="page-link" href="#">U</a></li>
                <li class="page-item"><a class="page-link" href="#">V</a></li>
                <li class="page-item"><a class="page-link" href="#">W</a></li>
                <li class="page-item"><a class="page-link" href="#">X</a></li>
                <li class="page-item"><a class="page-link" href="#">Y</a></li>
                <li class="page-item"><a class="page-link" href="#">Z</a></li>
            </ul>
        </nav>
        <div class="obras-lista d-flex flex-row flex-wrap">
            <div class="col-12 col-lg-3 col-md-4 col-sm-5 mb-2 pe-2">
                <div class="card shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                         xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                         preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"/>
                        <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                    </svg>
                    <div class="card-body text-center">
                        <div class="d-flex d-flex justify-content-center">
                            <h3 class="text-center">
                                <a href="obra.html" class="text-decoration-none link-secondary">
                                    Obra 1
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-4 col-sm-5 mb-2 pe-2">
                <div class="card shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                         xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                         preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"/>
                        <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                    </svg>
                    <div class="card-body text-center">
                        <div class="d-flex d-flex justify-content-center">
                            <h3 class="text-center">
                                <a href="obra.html" class="text-decoration-none link-secondary">
                                    Obra 2
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-4 col-sm-5 mb-2 pe-2">
                <div class="card shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                         xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                         preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"/>
                        <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                    </svg>
                    <div class="card-body text-center">
                        <div class="d-flex d-flex justify-content-center">
                            <h3 class="text-center">
                                <a href="obra.html" class="text-decoration-none link-secondary">
                                    Obra 3
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-4 col-sm-5 mb-2 pe-2">
                <div class="card shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                         xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                         preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"/>
                        <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                    </svg>
                    <div class="card-body text-center">
                        <div class="d-flex d-flex justify-content-center">
                            <h3 class="text-center">
                                <a href="obra.html" class="text-decoration-none link-secondary">
                                    Obra 4
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-4 col-sm-5 mb-2 pe-2">
                <div class="card shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                         xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                         preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"/>
                        <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                    </svg>
                    <div class="card-body text-center">
                        <div class="d-flex d-flex justify-content-center">
                            <h3 class="text-center">
                                <a href="obra.html" class="text-decoration-none link-secondary">
                                    Obra 5
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-4 col-sm-5 mb-2 pe-2">
                <div class="card shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                         xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                         preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"/>
                        <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                    </svg>
                    <div class="card-body text-center">
                        <div class="d-flex d-flex justify-content-center">
                            <h3 class="text-center">
                                <a href="obra.html" class="text-decoration-none link-secondary">
                                    Obra 6
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-4 col-sm-5 mb-2 pe-2">
                <div class="card shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                         xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                         preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"/>
                        <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                    </svg>
                    <div class="card-body text-center">
                        <div class="d-flex d-flex justify-content-center">
                            <h3 class="text-center">
                                <a href="obra.html" class="text-decoration-none link-secondary">
                                    Obra 7
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-4 col-sm-5 mb-2 pe-2">
                <div class="card shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                         xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                         preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"/>
                        <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                    </svg>
                    <div class="card-body text-center">
                        <div class="d-flex d-flex justify-content-center">
                            <h3 class="text-center">
                                <a href="obra.html" class="text-decoration-none link-secondary">
                                    Obra 8
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-4 col-sm-5 mb-2 pe-2">
                <div class="card shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                         xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                         preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"/>
                        <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                    </svg>
                    <div class="card-body text-center">
                        <div class="d-flex d-flex justify-content-center">
                            <h3 class="text-center">
                                <a href="obra.html" class="text-decoration-none link-secondary">
                                    Obra 9
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-4 col-sm-5 mb-2 pe-2">
                <div class="card shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                         xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                         preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"/>
                        <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                    </svg>
                    <div class="card-body text-center">
                        <div class="d-flex d-flex justify-content-center">
                            <h3 class="text-center">
                                <a href="obra.html" class="text-decoration-none link-secondary">
                                    Obra 10
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-4 col-sm-5 mb-2 pe-2">
                <div class="card shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                         xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                         preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"/>
                        <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                    </svg>
                    <div class="card-body text-center">
                        <div class="d-flex d-flex justify-content-center">
                            <h3 class="text-center">
                                <a href="obra.html" class="text-decoration-none link-secondary">
                                    Obra 11
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-4 col-sm-5 mb-2 pe-2">
                <div class="card shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                         xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                         preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"/>
                        <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                    </svg>
                    <div class="card-body text-center">
                        <div class="d-flex d-flex justify-content-center">
                            <h3 class="text-center">
                                <a href="obra.html" class="text-decoration-none link-secondary">
                                    Obra 12
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <nav aria-label="Page navigation example" class="my-4">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="#">
                        <span class="material-symbols-outlined">
                        arrow_back_ios_new
                        </span>
                    </a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">
                        <span class="material-symbols-outlined">
                        arrow_forward_ios
                        </span>
                    </a>
                </li>
            </ul>
        </nav>
    </section>
@endsection
