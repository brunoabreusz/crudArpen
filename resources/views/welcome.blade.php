<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="imagex/png" href="https://findicons.com/files/icons/2181/34al_volume_3_2_se/24/001_54.png">
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
            width:100%;
        }

        h3{
            color: #00ff;
        }

        form{
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
            padding: 10px 10px ;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            background-color: rgb(14, 198, 88);  
        } 
 
        
        
        #arpen{
            width:100px;
        }


    </style>
</head>

<body>
<br/>
<br/>
<br/>
<img src="http://teste.arpenium.com.br/images/logo.png?522ad2ff22af4a9ba9a170f82c634d06" alt="Minha Figura">
<br/>
    <form action="/cadastrar-candidato" method="POST">
        {{-- <img id="arpen" src="https://media-exp2.licdn.com/dms/image/C4D0BAQE4c2W71SJ4BQ/company-logo_200_200/0/1583865939994?e=1662595200&v=beta&t=np_1Ix5qFD8NMCw8qAaivuABR5FEAzoPl7CKCLZVmKw" alt="Minha Figura">
        <br/> --}}
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

        <button>Enviar cadastro</button>
    </form>

</body>

</html>
