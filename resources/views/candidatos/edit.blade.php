@extends('template.styles')


@section('content')
    <br />
    {{-- <img src="http://teste.arpenium.com.br/images/logo.png?522ad2ff22af4a9ba9a170f82c634d06" alt="Minha Figura"> --}}
    <br />
    <form action="/atualizar-candidato/{{ $candidato->id }}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Nome:</label>
        <input type="text" placeholder="Digite seu nome" name="nome_candidato" value="{{ $candidato->name }}">
        <br /> <br />

        <label for="">E-mail:</label>
        <input type="text" placeholder="Digite seu e-mail" name="email_candidato" value="{{ $candidato->email }}">
        <br /> <br />

        <label for="">Telefone:</label>
        <input type="text" placeholder="Digite seu telefone" name="telefone_candidato"
            value="{{ $candidato->telefone }}">
        <br /> <br />

        <button>Salvar</button>
    </form>
@endsection
