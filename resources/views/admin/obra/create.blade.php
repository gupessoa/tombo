@extends('layouts.admin')
@push('css')
    <style>
        #picture_input {
            display: none;
        }

        .picture {
            width: 400px;
            aspect-ratio: 16/9;
            background: #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #aaa;
            border: 2px dashed currentcolor;
            cursor: pointer;
            font-family: sans-serif;
            transition: color 300ms ease-in-out, background 300ms ease-in-out;
            outline: none;
            overflow: hidden;
        }

        .picture:hover {
            color: #777;
            background: #ccc;
        }

        .picture:active {
            border-color: turquoise;
            color: turquoise;
            background: #eee;
        }

        .picture:focus {
            color: #777;
            background: #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        .picture_img {
            max-width: 100%;
        }

    </style>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
       <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
       <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endpush
@section('content')
    <div class="container">
        <div class="header  d-flex flex-column justify-content-between align-items-center mt-5">
            <div class="d-flex justify-content-between w-100 mb-3">
                <div class="titulo">
                    <h1 class="h3 mb-0 d-block">Obras</h1>
                    <h2 class="fs-6 text-center text-uppercase text-secondary text-lead font-weight-bolder opacity-7" style="letter-spacing: 3px;">
                        Adicionar Nova Obra</h2>
                </div>
                <div class="btn-toolbar row ">
                    <a class="btn btn-sm btn-primary d-block" href="{{ route('admin.obras.index') }}" style="height: fit-content ;">Voltar</a>
                </div>
            </div>
        </div>
        <div class="list mt-5">
            <form action="{{ route('admin.obras.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">Nome</label>
                            <input type="text" name="nome" id="nome" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">Nome Estrangeiro</label>
                            <input type="text" name="nome_outro" id="nome_outro" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">Data</label>
                            <input type="number" step="1"  min="-5000000" max="2022" name="data" id="data" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">Tipo</label>
                            <input type="text" name="tipo" id="tipo" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">Tamanho</label>
                            <input type="text" name="tamanho" id="tamanho" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="input-group input-group-static">
                            <label for="movimentos" class="ms-0">Artista</label>
                            <select class="form-control artista" name='artista' id="artista">
                                @foreach($artistas as $artista)
                                    <option value="{{$artista->id}}">{{ $artista->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="input-group input-group-static">
                            <label for="grupos" class="ms-0">Local / Museu</label>
                            <select class="form-control local" name='local' id="local">
                                @foreach($museus as $museu)
                                    <option value="{{$museu->id}}">{{ $museu->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="mt-4 d-flex justify-content-center">
                    <label class="picture" for="picture_input" tabIndex="0">
                        <span class="picture_image">Click e selecione sua imagem.</span>
                    </label>
                    <input type="file" name="imagem" id="picture_input" accept="image/*">
                </div>
                <div class="d-flex justify-content-end mt-3">
                    <button type="submit" class="btn btn-sm btn-primary d-block">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $(document).ready(function() {
            $('.artista').select2({
                maximumSelectionLength: 3,
                placeholder: 'Selecione o(a) artista'
            });
            $('.local').select2({
                maximumSelectionLength: 2,
                placeholder: 'Selecione o local/museu'
            });

            const inputFile = document.querySelector("#picture_input");
            const pictureImage = document.querySelector(".picture_image");
            const pictureImageTxt = "Clique e selecione uma imagem";
            pictureImage.innerHTML = pictureImageTxt;

            inputFile.addEventListener("change", function (e) {
                const inputTarget = e.target;
                const file = inputTarget.files[0];

                if (file) {
                    const reader = new FileReader();

                    reader.addEventListener("load", function (e) {
                        const readerTarget = e.target;

                        const img = document.createElement("img");
                        img.src = readerTarget.result;
                        img.classList.add("picture_img");

                        pictureImage.innerHTML = "";
                        pictureImage.appendChild(img);
                    });

                    reader.readAsDataURL(file);
                } else {
                    pictureImage.innerHTML = pictureImageTxt;
                }
            });
        });
    </script>
@endpush
