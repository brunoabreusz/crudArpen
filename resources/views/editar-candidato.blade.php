<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="imagex/png"
        href="https://findicons.com/files/icons/2181/34al_volume_3_2_se/24/001_54.png">
    <title>Arpencrud</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #2934ff;
            font-family: 'Nunito', sans-serif;
            font-size: larger;
            text-align: center;
            position: absolute;
            width: 100%;
        }

        h3 {
            color: #00ff;
        }

        form {
            background-color: #fff;
            border-radius: 10px;
            padding: 40px;
            width: 400px;
            display: inline-block;
            position: relative;
            margin-top: 250px
        }

        button {
            color: white;
            padding: 10px;
            text-align: center;
            border-radius: 10px;
            text-decoration: none;
            border: solid;
            font-size: 14px;
            background-color: rgb(14, 198, 88);
        }

    </style>
    
</head>

<body>
    <br />
    {{-- <img src="http://teste.arpenium.com.br/images/logo.png?522ad2ff22af4a9ba9a170f82c634d06" alt="Minha Figura"> --}}
    <br />
    <form action="/atualizar-candidato/{{$candidato->id}}" method="POST">
        @csrf
        @method("PUT")
        <label for="">Nome:</label>
        <input type="text" placeholder="Digite seu nome" name="nome_candidato" value="{{ $candidato->name }}">
        <br /> <br />

        <label for="">E-mail:</label>
        <input type="text" placeholder="Digite seu e-mail" name="email_candidato" value="{{ $candidato->email }}">
        <br /> <br />

        <label for="">Telefone:</label>
        <input type="text" placeholder="Digite seu telefone" name="telefone_candidato" value="{{ $candidato->telefone }}">
        <br /> <br />

        <button>Salvar</button> 
    </form>

</body>

</html>
