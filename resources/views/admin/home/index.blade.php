@extends('layouts.admin')
@section('content')
    @php
        $user = \Illuminate\Support\Facades\Auth::guard('admin')->user()
    @endphp
    <div class="home  d-flex flex-column align-items-center mt-5">
        <div class="d-flex flex-column justify-content-between w-100 mb-3">
            <p class="h4 d-block font-weight-light">Seja bem vindo,
                        <span class="h2 font-weight-bolder">{{ $user->name }}</p>
            <p class="text-dark mt-3">Este é o módulo administrativo do seu site. <br>Em caso de dúvidas e/ou bugs do sistema, entre em contato com o suporte através do e-mail: suporte@codnome.com.br. <br>Entraremos em contato assim que possível.</p>
        </div>
    </div>
@endsection
@push('js')
    <script></script>
@endpush
