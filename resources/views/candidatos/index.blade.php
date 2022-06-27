@extends('template.styles')
@section('content')
    <br />
    <img src="http://teste.arpenium.com.br/images/logo.png?522ad2ff22af4a9ba9a170f82c634d06" alt="Minha Figura">
    <br /><br />
    <a id="home" href="/create">Cadastrar um novo candidato</a>
    <br />
        
    <div id="candidatos">
        
        @foreach ($usuarios as $usuarios)
            <p>ID: {{ $usuarios->id }} <br /> Nome: {{ $usuarios->name }} <br /> Email: {{ $usuarios->email }} <br />
                Telefone: {{ $usuarios->telefone }}</p>
            <a id="editar" href="/editar-candidato/{{ $usuarios->id }}">Editar</a>
            <a id="deletar" href="/excluir-candidato/{{ $usuarios->id }}">Deletar</a>
            <br /> <br />
            
        @endforeach
        
    </div>
@endsection
