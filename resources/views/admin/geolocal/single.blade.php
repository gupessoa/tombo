@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="header  d-flex flex-column justify-content-between align-items-center mt-5">
            <div class="d-flex justify-content-between w-100 mb-3">
                <div>
                    <h1 class="h2 d-block mb-0 tiny-title">{{$geolocal->nome}}</h1>
                </div>
                <div class="btn-toolbar flex-column align-content-center justify-content-center">
                    <a class="btn  btn-primary" href="{{ route('admin.geolocals.index') }}">Voltar</a>
                </div>
            </div>
        </div>
        <div class="list mt-5">
            <h2>Movimentos</h2>
            <hr>
            <table class="table table-responsive table-stripedtable-sm">
                <thead>
                    <tr class="border-bottom-white">
                        <th class="">#</th>
                        <th class="text-center">Nome</th>
                        <th class="text-center">Data Inicial</th>
                        <th class="text-center">Data Final</th>
                        <th class="text-center">Opções</th>
                    </tr>
                </thead>
                <tbody>
                @if(count($geolocal->movimentos()->get()) > 0)
                    @foreach($geolocal->movimentos()->get() as $movimento)
                        <tr>
                            <td>1</td>
                            <td class="text-center">{{ $movimento->nome }}</td>
                            <td class="text-center">{{ $movimento->data_inicial }}</td>
                            <td class="text-center">{{ $movimento->data_final }}</td>
                            <td class="text-center">
                                <a href="{{ route('admin.movimentos.show', $movimento->id) }}" class="btn btn-sm btn-primary"> + Detalhes</a>
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

