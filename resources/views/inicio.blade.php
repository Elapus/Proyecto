<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Inicio</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style>
            body{
                text-align: center;
                background-image: url(/storage/Img/fondo.jpg);
                background-size: cover;
            }
            .prin{
                margin: 0px auto;
                width: 25%;
                height: auto;
                padding-left: 10px;
                margin-top: 10%;
                padding-top: 5px;
                background: hsla(207, 100%, 30%, 0.89);
                border-radius: 30px;
            }
        </style>
    </head>
    <body>
        <div class="prin container-fluid">
            <div>Problemas
                <br>
                <div>
                    <a href="{{route('fibonacci')}}"><button class="btn btn-outline-dark rounded-pill">Fibonacci</button></a>
                </div>
                <br>
                <div>
                    <a href="{{route('factorial')}}"><button class="btn btn-outline-dark rounded-pill">Factorial</button></a>
                </div>
                <br>
                <div>
                    <a href="{{route('polindromo')}}"><button class="btn btn-outline-dark rounded-pill">Palindromos</button></a>
                </div>
                <br>
                <div>
                    <a href="{{route('simondice')}}"><button class="btn btn-outline-dark rounded-pill">Simondice</button></a>
                </div>
                <br>
                <div>
                    <a href="{{route('dibujar')}}"><button class="btn btn-outline-dark rounded-pill">Dibujar</button></a>
                </div>
                <br>
                <div>
                    <a href="{{route('granja')}}"><button class="btn btn-outline-dark rounded-pill">Granja</button></a>
                </div>
                <br>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
