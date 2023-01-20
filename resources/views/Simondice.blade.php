<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Simondice</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style>
            body{
                text-align: center;
                background-image: url(/storage/Img/simon.jpg);
                background-size: cover;
            }
            .prin{
                margin: 0px auto;
                width: 40%;
                height: 100%;
                padding-left: 10px;
                margin-top: 3%;
                padding-top: 5px;
                background: hsl(175, 67%, 41%);
                border-radius: 30px;
            }
            input{
                background-color: rgb(177, 174, 174);
                border-radius: 30px;
            }
            .title{
                background-color: rgba(177, 0, 177, 0.678); 
                border-radius: 30px;
            }
            button.rojo{
                width: 100px;
                height: 100px;
                margin: 30px;
                border-radius: 30px;
                border-color: black;
                border-width: 10px;
                background-color: red;
            }
            button:active.rojo{
                box-shadow: 0px 0px 100px red;
            }
            .verde{
                width: 100px;
                height: 100px;
                margin: 30px;
                border-radius: 30px;
                border-color: black;
                border-width: 10px;
                background-color: green;
            } button:active.verde{
                box-shadow: 0px 0px 100px green;
            }
            .azul{
                width: 100px;
                height: 100px;
                margin: 30px;
                border-radius: 30px;
                border-color: black;
                border-width: 10px;
                background-color: blue;
            } button:active.azul{
                box-shadow: 0px 0px 100px blue;
            }
            .amarillo{
                width: 100px;
                height: 100px;
                margin: 30px;
                border-radius: 30px;
                border-color: black;
                border-width: 10px;
                background-color: yellow;
            } button:active.amarillo{
                box-shadow: 0px 0px 100px yellow;
            }
            .morado{
                width: 100px;
                height: 100px;
                margin: 30px;
                border-radius: 30px;
                border-color: black;
                border-width: 10px;
                background-color: #550d99;
            } button:active.morado{
                box-shadow: 0px 0px 100px #550d99;
            }
            .naranja{
                width: 100px;
                height: 100px;
                margin: 30px;
                border-radius: 30px;
                border-color: black;
                border-width: 10px;
                background-color: #ff5100;
            } button:active.naranja{
                box-shadow: 0px 0px 100px #ff5100;
            }
        </style>
    </head>
    <body>
        <div class="prin container-fluid">
            <br>
            <div class="title">Simondice</div>
            <br>
            <br>
            <button class="rojo"></button>
            <button class="verde"></button>
            <button class="azul"></button>
            <button class="amarillo"></button>
            <button class="morado"></button>
            <button class="naranja"></button>       
            <br>
            <br>
            <a href="{{route('inicio')}}"><button class="btn btn-outline-warning rounded-pill ">Regresar</button></a>
            <a href="{{route('simondice')}}"><button class="btn btn-outline-danger rounded-pill ">Desacer</button></a>
            <br>
            <br>         
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>