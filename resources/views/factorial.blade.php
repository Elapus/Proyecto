<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Factorial</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style>
            body{
                text-align: center;
                background-image: url(/storage/Img/fact.jpg);
                background-size: auto;
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
        </style>
    </head>
    <body>
        <div class="prin container-fluid">
            <form action="" method="POST">
            @csrf 
                <div>Factorial
                    <br>
                    <br>
                    <label for="num">Digite el numero a factorizar</label>
                    <br>
                    <input class="rounded-pill" type="text" id="factorial" name="factorial" placeholder="# a factorizar" autofocus>
                    <br>
                    <br>
                    <input class="btn btn-outline-success rounded-pill " type="submit" value="Resultados">
                </div>
                 <label for="">El factorial de:</label>
            @isset($valor, $resultado)
            {{$valor}}
            <br>
            es: 
            {{$resultado}}
            @endisset
            </form>
            <br>
           
            <br>
            <br>
            <a href="{{route('inicio')}}"><button class="btn btn-outline-warning rounded-pill ">Regresar</button></a>
            <a href="{{route('factorial')}}"><button class="btn btn-outline-danger rounded-pill ">Desacer</button></a>
            <br>
            <br>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>