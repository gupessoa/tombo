@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="header  d-flex flex-column justify-content-between align-items-center mt-5">
            <div class="d-flex justify-content-between w-100 mb-3">
                <div>
                    <h1 class="h2 d-block mb-0 tiny-title">Configurações de Páginas</h1>
                </div>
                <div class="flex-column align-content-center justify-content-center">
{{--                    <a class="btn  btn-primary" href="{{ route('admin.pages.create') }}">+ Confoguração de Página</a>--}}
                </div>
            </div>
        </div>

{{--        <ul class="nav nav-tabs" id="myTab" role="tablist">--}}
{{--            @foreach($pages as $page)--}}
{{--                <li class="nav-item" role="presentation">--}}
{{--                    <button class="nav-link {{ $page->title == "Home" ? 'active': ''}}" id="{{substr($page->url, 1, -1)}}-tab" data-bs-toggle="tab" data-bs-target="#{{substr($page->url, 1, -1)}}" type="button" role="tab" aria-controls="{{substr($page->url, 1, -1)}}" aria-selected="true">{{$page->title}}</button>--}}
{{--                </li>--}}
{{--            @endforeach--}}
{{--        </ul>--}}
{{--        <div class="tab-content" id="myTabContent">--}}
{{--            @foreach($pages as $page)--}}
{{--                <div class="tab-pane tab-painel fade show {{ $page->title == "Home" ? 'active': ''}} " id="{{substr($page->url, 1, -1)}}" role="tabpanel" aria-labelledby="{{substr($page->url, 1, -1)}}-tab">{{$page->title}}</div>--}}
{{--            @endforeach--}}
{{--        </div>--}}
    </div>
@endsection
