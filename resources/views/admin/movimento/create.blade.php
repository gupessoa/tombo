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
                    <h1 class="h3 mb-0 d-block">Movimentos</h1>
                    <h2 class="fs-6 text-center text-uppercase text-secondary text-lead font-weight-bolder opacity-7" style="letter-spacing: 3px;">
                        Adicionar Novo Movimento</h2>
                </div>
                <div class="btn-toolbar row ">
                    <a class="btn btn-primary d-block" href="{{ route('admin.movimentos.index') }}" style="height: fit-content ;">Voltar</a>
                </div>
            </div>
        </div>
        <div class="list mt-5">
            <form action="{{ route('admin.movimentos.store') }}" method="POST">
                @csrf
                @method('POST')
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group input-group-outline my-3">
                            <label class="input-group-text">Nome</label>
                            <input type="text" name="nome" id="nome" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3">
                            <label class="input-group-text">Data Inicial</label>
                            <input type="number" step="1"  min="-5000000" max="2022" name="data_inicial" id="data_inicial" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3">
                            <label class="input-group-text">Data Final</label>
                            <input type="number" step="1"  min="-5000000" max="2022" name="data_final" id="data_final" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3">
                            <select id="id_era" class="form-control" name="id_era">
                                @foreach($eras as $era)
                                    <option value="{{ $era->id }}">{{ $era->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3">
                            <select id="geolocal" class="form-control" name="geolocal[]" multiple="multiple">
                                @foreach($geolocals as $geo)
                                    <option value="{{ $geo->id }}">{{ $geo->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary d-block">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $(document).ready(function() {
            $('#id_era').select2({
                placeholder: 'Selecione uma Era'
            });
            $('#geolocal').select2({
                placeholder: 'Selecione uma Geolocalização'
            });
        });
    </script>
@endpush
