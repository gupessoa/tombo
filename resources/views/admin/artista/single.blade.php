@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="header  d-flex flex-column justify-content-between align-items-center mt-5">
            <div class="d-flex justify-content-between w-100 mb-3">
                <div>
                    <h1 class="h2 d-block mb-0 tiny-title">{{$artista->nome}}</h1>
                    <p class="h6 mb-0 tiny-title font-weight-light">{{$artista->ano_nasc}} - {{$artista->ano_morte }}</p>
                </div>
                <div class="btn-toolbar flex-column align-content-center justify-content-center">
                    <a class="btn  btn-primary" href="{{ route('admin.artistas.index') }}">Voltar</a>
                </div>
            </div>
        </div>
        <div class="list mt-5">
            <h2>Obras</h2>
            <hr>
            <table class="table table-responsive table-stripedtable-sm">
                <thead>
                    <tr class="border-bottom-white">
                        <th class="">#</th>
                        <th class="text-center">Nome</th>
                        <th class="text-center">Data</th>
                        <th class="text-center">Local</th>
                        <th class="text-center">Opções</th>
                    </tr>
                </thead>
                <tbody>
                @if(count($artista->obras) > 0)
                    @foreach($artista->obras()->get() as $obra)
                        <tr>
                            <td>{{ $obra->id }}</td>
                            <td class="text-center">{{ $obra->nome }}</td>
                            <td class="text-center">{{ $obra->data }}</td>
                            <td class="text-center">{{ $obra->artista->nome }}</td>
                            <td class="text-center">
                                <a href="{{ route('admin.obras.show', $obra->id) }}" class="btn btn-sm btn-primary"> + Detalhes</a>
                            </td>
                        </tr>
                    @endforeach
                @else
                   <tr><td colspan="5" class="text-center">O cliente não efetuou nenhum pedido.</td></tr>
                @endif

                </tbody>
            </table>
        </div>
    </div>
@endsection

