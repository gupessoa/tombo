@extends('layouts.app')
@section('content')
    <section class="page-title py-4">
        <div class="container">
            <h2 class="text-center">Contato</h2>
        </div>
    </section>
    <section class="container m-auto row my-5 py-5">
        <div class="texto col-6">
            <h4 class="mb-5">I feel that I never was</h4>
            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I
                enjoy with my whole heart. I am alone, and feel the charm of existence in this spot.</p>
            <p>I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I
                neglect my talents.</p>
            <a href="#">info@hello.com</a>
        </div>
        <form action="#" class="col-6">
            <div class=" input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nome:</span>
                <input type="text" class="form-control" id="nome" aria-label="Nome" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Email:</span>
                <input type="email" class="form-control" id="email" aria-label="Email" aria-describedby="basic-addon1">
            </div>
            <div class=" input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Telefone:</span>
                <input type="tel" class="form-control" id="tel" aria-label="Telefone" aria-describedby="basic-addon1">
            </div>
            <div class=" input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Assunto:</span>
                <input type="text" class="form-control" id="assunto" aria-label="Assunto"
                       aria-describedby="basic-addon1">
            </div>
            <div class="input-group">
                <span class="input-group-text">Mensagem: </span>
                <textarea class="form-control" aria-label="With textarea" rows="5"></textarea>
            </div>
        </form>
    </section>
@endsection
