@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="header  d-flex flex-column justify-content-between align-items-center mt-5">
            <div class="d-flex justify-content-between w-100 mb-3">
                <div>
                    <h1 class="h2 d-block mb-0 tiny-title">Museus</h1>
                </div>
                <div class="flex-column align-content-center justify-content-center">
                    <a class="btn  btn-primary" href="{{ route('admin.museus.create') }}">+ Museu</a>
                </div>
            </div>
        </div>
        <div class="ms-md-auto pe-md-3 d-flex align-items-center justify-content-end">
           <form action="{{ route('admin.museus.index') }}" method="GET" class="form">
               @csrf
               @method('GET')
               <div class="input-group flex-nowrap">
                   <input type="text" class="form-control" name="search" placeholder="Procurar">
                   <span class="input-group-text" id="addon-wrapping">
                        <i class="material-symbols-outlined">search</i>
                    </span>
               </div>
           </form>
        </div>
        <div class="mt-5 text-dark">
            @if(session()->get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session()->get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
                <table class="table table-responsive table-stripedtable-sm">
                    <thead>
                        <tr class="border-bottom-white">
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nome</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Cidade</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pais</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Obras</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Opções</th>
                        </tr>
                    </thead>
                    <tbody>
{{--                    {{dd($museus)}}--}}
                        @if($museus->total())
                            @foreach($museus as $museu)
                                <tr>
                                    <td class="align-middle">{{ $museu->nome }}</td>
                                    <td class="align-middle">{{ $museu->cidade }}</td>
                                    <td class="align-middle">{{ $museu->pais }}</td>
                                    <td class="text-center align-middle"> {{ $museu->obras_count }}</td>
                                    <td class="d-flex justify-content-center gap-1 align-middle">
                                        <div class="d-none d-md-table-cell">
                                            <a href="{{ route('admin.museus.edit', $museu) }}" class="btn btn-primary m-0 btn-sm d-flex align-items-center gap-1">
                                                <span class="material-symbols-outlined">edit</span>
                                               <span>Editar</span>
                                            </a>
                                        </div>
                                        <div class="d-md-none d-table-cell">
                                            <a href="{{ route('admin.museus.edit', $museu) }}" class="btn btn-primary m-0 btn-sm d-flex">
                                                <span class="material-symbols-outlined">edit</span>
                                            </a>
                                        </div>
                                        <form class="ms-2" action="{{ route('admin.museus.destroy', $museu->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="d-none d-md-inline-flex btn btn-sm btn-danger border-0 ml-2 align-items-center gap-1" type="submit">
                                                <span class="material-symbols-outlined">delete</span>
                                                <span>Excluir</span>
                                            </button>
                                            <div> </div>
                                            <button class="d-md-none d-table-cell btn btn-sm btn-danger border-0 ml-2 d-flex gap-1" type="submit">
                                                <span class="material-symbols-outlined">delete</span>
                                            </button>
                                        </form>
                                        <div class="d-none d-md-table-cell">
                                            <a href="{{ route('admin.museus.show', $museu->id) }}" class="btn btn-primary m-0 btn-sm btn_detalhes d-flex align-items-center gap-1" > <!-- data-index="" data-bs-toggle="modal" data-bs-target="#modalDetalhes" -->
                                                <span class="material-symbols-outlined">visibility</span>
                                                <span>Detalhes</span>
                                            </a>
                                        </div>
                                        <div class="d-md-none d-table-cell">
                                            <a href="{{ route('admin.museus.show', $museu->id) }}" class="btn btn-primary m-0 btn_detalhes btn-sm d-flex align-items-center gap-1">
                                                <span class="material-symbols-outlined">visibility</span>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr><td colspan="5" class="text-center">Nenhum registro cadastrado no sistema.</td></tr>
                        @endif
                    </tbody>
                </table>
            {{ $museus->links() }}
        </div>
    </div>
@endsection
