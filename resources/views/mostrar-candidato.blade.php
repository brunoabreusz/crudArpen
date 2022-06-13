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

        div {
            background-color: #fff;
            border-radius: 10px;
            padding: 40px;
            width: 600px;
            display: inline-block;
            position: relative;
            margin-top: 100px;
        }

        button {
            color: white;
            padding: 10px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            background-color: rgb(14, 198, 88);
        }

        #edit{
            background: yellow;
        }
        #delet{
            background: red;
        }


    </style>
    
</head>

<body>
    <br />

  
    <img src="http://teste.arpenium.com.br/images/logo.png?522ad2ff22af4a9ba9a170f82c634d06" alt="Minha Figura">  
    <br />
    <button href="">Home</button>
    <br />
    
    <div id="candidatos">
    <hr>
    @foreach($u as $u)

    <p>ID: {{$u->id}} <br/> Nome: {{$u->name}} <br/> Email: {{$u->email}} <br/> Telefone: {{$u->telefone}}</p>
    <button id="edit">Editar</button>    <button id="delet">Deletar</button>
    <hr>

    @endforeach


    </div>

</body>

</html>
