
@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="header  d-flex flex-column justify-content-between align-items-center mt-5">
            <div class="d-flex justify-content-between w-100 mb-3">
                <div class="titulo">
                    <h1 class="h3 mb-0 d-block">grupos</h1>
                    <h2 class="fs-6 text-center text-uppercase text-secondary text-lead font-weight-bolder opacity-7" style="letter-spacing: 3px;">
                        Editar Grupo</h2>
                </div>
                <div class="btn-toolbar row ">
                    <a class="btn btn-sm btn-primary d-block" href="{{ route('admin.grupos.index') }}" style="height: fit-content ;">Voltar</a>
                </div>
            </div>
        </div>
        <div class="list mt-5">
            <form action="{{ route('admin.grupos.update', $grupo->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">Nome</label>
                            <input type="text" name="nome" id="nome" class="form-control" value="{{ old('nome') ?? $grupo->nome }}">
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-sm btn-primary d-block">Salvar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
