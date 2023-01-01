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
                    <h1 class="h3 mb-0 d-block">Artistas</h1>
                    <h2 class="fs-6 text-center text-uppercase text-secondary text-lead font-weight-bolder opacity-7" style="letter-spacing: 3px;">
                        Editar Artista</h2>
                </div>
                <div class="btn-toolbar row ">
                    <a class="btn  btn-primary d-block" href="{{ route('admin.artistas.index') }}" style="height: fit-content ;">Voltar</a>
                </div>
            </div>
        </div>
        <div class="list mt-5">
            <form action="{{ route('admin.artistas.update', $artista->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group input-group-outline my-3">
                            <label class="input-group-text">Nome</label>
                            <input type="text" name="nome" id="nome" class="form-control" required value="{{ old('nome') ?? $artista->nome }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3">
                            <label class="input-group-text">Local de Nascimento</label>
                            <input type="text" name="local_nasc" id="local_nasc" class="form-control" value="{{ old('local_nasc') ?? $artista->local_nasc}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3">
                            <label class="input-group-text">Ano de Nascimento</label>
                            <input type="number" step="1"  min="-5000000" max="2022" name="ano_nasc" id="ano_nasc" class="form-control" value="{{ old('ano_nasc') ?? $artista->ano_nasc }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3">
                            <label class="input-group-text">Local de Morte</label>
                            <input type="text" name="local_morte" id="local_morte" class="form-control" value="{{ old('local_morte') ?? $artista->local_morte }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3">
                            <label class="input-group-text">Ano de Morte</label>
                            <input type="number" step="1"  min="-5000000" max="2022" name="ano_morte" id="ano_morte" class="form-control" value="{{ old('ano_morte') ?? $artista->ano_morte }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="input-group input-group-static">
                            <label for="movimentos" class="ms-0">Movimentos</label>
                            <select class="form-control movimentos" name='movimentos[]' id="movimentos" multiple="multiple">
                                <option></option>
                                @foreach($movimentos as $movimento)
                                    <option value="{{$movimento->id}}"
                                        @foreach($artista->movimentos()->get() as $mov)
                                            @if($mov->id == $movimento->id)
                                                selected
                                            @endif
                                        @endforeach
                                    >{{ $movimento->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="input-group input-group-static">
                            <label for="grupos" class="ms-0">Grupos</label>
                            <select class="form-control grupos" name='grupos[]' id="grupos" multiple="multiple">
                                @foreach($grupos as $grupo)
                                    <option value="{{$grupo->id}}"
                                            @foreach($artista->grupos()->get() as $gru)
                                                @if($gru->id == $grupo->id)
                                                    selected
                                                @endif
                                            @endforeach
                                    >{{ $grupo->nome }}</option>
                                @endforeach
                            </select>
                    </div>
                </div>
                </div>
                <div class="d-flex justify-content-end my-4">
                    <button type="submit" class="btn  btn-primary d-block">Atualizar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $(document).ready(function() {
            $('.movimentos').select2({
                maximumSelectionLength: 3,
                placeholder: 'Selecione o(s) movimento(s)'
            });
            $('.grupos').select2({
                maximumSelectionLength: 2,
                placeholder: 'Selecione o(s) grupo(s)'
            });
        });
    </script>
@endpush
