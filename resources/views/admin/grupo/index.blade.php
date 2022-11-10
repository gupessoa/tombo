@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="header  d-flex flex-column justify-content-between align-items-center mt-5">
            <div class="d-flex justify-content-between w-100 mb-3">
                <div>
                    <h1 class="h2 d-block mb-0 tiny-title">Grupos</h1>
                </div>
                <div class="flex-column align-content-center justify-content-center">
                    <a class="btn  btn-primary" href="{{ route('admin.grupos.create') }}">+ Grupo</a>
                </div>
            </div>
        </div>
        <div class="ms-md-auto pe-md-3 d-flex align-items-center justify-content-end">
           <form action="{{ route('admin.grupos.index') }}" method="GET" class="form">
               @csrf
               @method('GET')
               <div class="input-group input-group-dynamic">
                   <label class="form-label">Procurar</label>
                   <input type="text" class="form-control" name="search">
                   <span class="input-group-btn">
                       <button type="submit" class="btn rounded-circle btn-sm btn-primary search">
                           <i class="material-icons">search</i>
                       </button>
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
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Opções</th>
                        </tr>
                    </thead>
                    <tbody>
{{--                    {{dd($museus)}}--}}
                        @if($grupos->total())
                            @foreach($grupos as $grupo)
                                <tr>
                                    <td class="">{{ $grupo->nome }}</td>
                                    <td class="d-flex justify-content-center gap-1">
                                        <div class="d-none d-md-table-cell">
                                            <a href="{{ route('admin.grupos.edit', $grupo) }}" class="btn btn-primary m-0 btn-sm d-flex align-items-center gap-1">
                                                <span class="material-symbols-outlined">edit</span>
                                               <span>Editar</span>
                                            </a>
                                        </div>
                                        <div class="d-md-none d-table-cell">
                                            <a href="{{ route('admin.grupos.edit', $grupo) }}" class="btn btn-primary m-0 btn-sm d-flex">
                                                <span class="material-symbols-outlined">edit</span>
                                            </a>
                                        </div>
                                        <form class="ms-2" action="{{ route('admin.grupos.destroy', $grupo->id)}}" method="POST">
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
                                            <a href="{{ route('admin.grupos.show', $grupo->id) }}" class="btn btn-primary m-0 btn-sm btn_detalhes d-flex align-items-center gap-1" > <!-- data-index="" data-bs-toggle="modal" data-bs-target="#modalDetalhes" -->
                                                <span class="material-symbols-outlined">visibility</span>
                                                <span>Detalhes</span>
                                            </a>
                                        </div>
                                        <div class="d-md-none d-table-cell">
                                            <a href="{{ route('admin.grupos.show', $grupo->id) }}" class="btn btn-primary m-0 btn_detalhes btn-sm d-flex align-items-center gap-1">
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
            {{ $grupos->links() }}
        </div>
    </div>
@endsection
