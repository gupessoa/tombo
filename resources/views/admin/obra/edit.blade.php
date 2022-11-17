@extends('layouts.admin')
@push('css')
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
            <form action="{{ route('admin.obras.store') }}" method="POST">
                @csrf
                @method('POST')
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">Nome</label>
                            <input type="text" name="nome" id="nome" class="form-control" required value="{{ old('nome') ?? $obra->nome }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">Nome Estrangeiro</label>
                            <input type="text" name="nome_outro" id="nome_outro" class="form-control" value="{{ old('nome_outro') ?? $obra->nome_outro }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">Data</label>
                            <input type="number" step="1"  min="-5000000" max="2022" name="data" id="data" class="form-control" required value="{{ old('data') ?? $obra->data }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">Tipo</label>
                            <input type="text" name="tipo" id="tipo" class="form-control" value="{{ old('tipo') ?? $obra->tipo }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">Tamanho</label>
                            <input type="text" name="tamanho" id="tamanho" class="form-control" value="{{ old('tamanho') ?? $obra->tamanho }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="input-group input-group-static">
                            <label for="movimentos" class="ms-0">Artista</label>
                            <select class="form-control artista" name='artista' id="artista">
                                @foreach($artistas as $artista)
                                    <option value="{{$artista->id}}" {{ $artista->id == $obra->artista_id ? 'selected' : ''}}>{{ $artista->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="input-group input-group-static">
                            <label for="grupos" class="ms-0">Local / Museu</label>
                            <select class="form-control local" name='local' id="local">
                                @foreach($museus as $museu)
                                    <option value="{{$museu->id}}" {{ $museu->id == $obra->museu_id ? 'selected' : ''}}>{{ $museu->nome }}</option>
                                @endforeach
                            </select>
                        </div>
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
        });
    </script>
@endpush
