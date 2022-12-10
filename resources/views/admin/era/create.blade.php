@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="header  d-flex flex-column justify-content-between align-items-center mt-5">
            <div class="d-flex justify-content-between w-100 mb-3">
                <div class="titulo">
                    <h1 class="h3 mb-0 d-block">Eras</h1>
                    <h2 class="fs-6 text-center text-uppercase text-secondary text-lead font-weight-bolder opacity-7" style="letter-spacing: 3px;">
                        Adicionar Nova Era</h2>
                </div>
                <div class="btn-toolbar row">
                    <a class="btn btn-primary d-block" href="{{ route('admin.eras.index') }}" style="height: fit-content ;">Voltar</a>
                </div>
            </div>
        </div>
        <div class="list mt-5">
            <form action="{{ route('admin.eras.store') }}" method="POST">
                @csrf
                @method('POST')
                <div class="row">
                    <div class="col-md-4">
                        <div class="input-group input-group-outline my-3">
                            <label class="input-group-text">Nome</label>
                            <input type="text" name="nome" id="nome" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group input-group-outline my-3">
                            <label class="input-group-text">Data Inicial</label>
                            <input type="number" step="1"  min="-5000000" max="2022" name="data_inicial" id="data_inicial" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group input-group-outline my-3">
                            <label class="input-group-text">Data Final</label>
                            <input type="number" step="1"  min="-5000000" max="2022" name="data_final" id="data_final" class="form-control">
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
