<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="imagex/png"
        href="https://findicons.com/files/icons/2181/34al_volume_3_2_se/24/001_54.png">
    <title>Arpencrud</title>
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
            text-align: center;
            border-radius: 10px;
            font-size: 14px;
            background-color: rgb(14, 198, 88);
            padding: 10px;
        }

        #candidatos {
            background-color: #fff;
            border-radius: 10px;
            padding: 40px;
            width: 600px;
            display: inline-block;
            position: relative;
            margin-top: 100px;
        }

        #cadastrados {
            color: white;
            padding: 10px;
            text-align: center;
            border-radius: 10px;
            text-decoration: none;
            border: solid;
            font-size: 14px;
            background-color: blue;
        }

        a {
            color: white;
            padding: 10px;
            text-align: center;
            border-radius: 10px;
            text-decoration: none;
            border: solid;
            font-size: 14px;
        }


        #home {
            margin-bottom: 100px;
            background-color: rgb(14, 198, 88);
        }

        #editar {
            background-color: #2934ff;
        }

        #deletar {
            background-color: #8B0000;
        }
    </style>

</head>

<body>
    @yield('content')
</body>

</html>
