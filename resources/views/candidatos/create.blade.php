@extends('template.styles')


@section('content')
    <form action="{{ route( 'candidato-store') }}" method="POST">
        @csrf
        <label for="">Nome:</label>
        <input type="text" placeholder="Digite seu nome" name="nome_candidato">
        <br /> <br />

        <label for="">E-mail:</label>
        <input type="text" placeholder="Digite seu e-mail" name="email_candidato">
        <br /> <br />

        <label for="">Telefone:</label>
        <input type="text" placeholder="Digite seu telefone" name="telefone_candidato">
        <br /> <br />

        <div id="button">
            <button>Cadastrar</button>
        </div>
    </form>
@endsection
