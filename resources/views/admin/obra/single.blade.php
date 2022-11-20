@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="header  d-flex flex-column justify-content-between align-items-center mt-5">
            <div class="d-flex justify-content-between w-100 mb-3">
                <div>
                    <h1 class="h2 d-block mb-0 tiny-title">{{$obra->nome}}</h1>
                </div>
                <div class="btn-toolbar flex-column align-content-center justify-content-center">
                    <a class="btn  btn-primary" href="{{ route('admin.obras.index') }}">Voltar</a>
                </div>
            </div>
        </div>
        <div class="list mt-5">
            <h1 class="h5">Detalhes</h1>
            <div class="row">
                <div class="img col-5">
                    <img src="{{ asset('storage/'.$obra->image->image) }}" alt="{{$obra->nome}}" class="img-fluid">
                </div>
                <div class="detalhes col-7">
                    <p>Artista: {{$obra->artista->nome}} </p>
                    <p>Data: {{$obra->data }}</p>
                    <p>Tipo: {{$obra->tipo }}</p>
                    <p>Tamanho: {{$obra->tamanho }}</p>
                    <p>Onde se encontra: {{$obra->museu->nome }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection

