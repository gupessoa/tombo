@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="header  d-flex flex-column justify-content-between align-items-center mt-5">
            <div class="d-flex justify-content-between w-100 mb-3">
                <div>
                    <h1 class="h2 d-block mb-0 tiny-title">{{$movimento->nome}}</h1>
                    <p class="h6 mb-0 tiny-title font-weight-light">Era {{$movimento->era->nome}} - {{$movimento->data_inicial}}/{{$movimento->data_final }}</p>
                </div>
                <div class="btn-toolbar flex-column align-content-center justify-content-center">
                    <a class="btn  btn-primary" href="{{ route('admin.movimentos.index') }}">Voltar</a>
                </div>
            </div>
        </div>
        <div class="list mt-5">
            <h2>Artistas</h2>
            <hr>
            <table class="table table-responsive table-stripedtable-sm">
                <thead>
                    <tr class="border-bottom-white">
                        <th class="">#</th>
                        <th class="text-center">Nome</th>
                        <th class="text-center">Grupos</th>
                        <th class="text-center">Opções</th>
                    </tr>
                </thead>
                <tbody>
                @if( count($movimento->artistas()->get()) > 0)
                    <tr>
                        @foreach($movimento->artistas()->get() as $artista)
                            <td>{{ $artista->id }}</td>
                            <td class="text-center">{{ $artista->nome }}</td>
                            <td class="text-center">
                                @foreach($artista->grupos()->get() as $grupo)
                                    <small class="btn btn-success btn-sm">{{ $grupo->nome }}</small>
                                @endforeach
                            </td>
                            <td class="text-center">
                                <a href="" class="btn btn-sm btn-primary"> + Detalhes</a>
                            </td>
                        @endforeach
                    </tr>
                @else
                   <tr><td colspan="5" class="text-center"> Nenhum Artista Relacionado ao movimento</td></tr>
                @endif

                </tbody>
            </table>
        </div>
    </div>
@endsection

