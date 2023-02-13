<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Dibujos</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style>
            body{
                text-align: center;
                background-image:url(/storage/Img/dibujo.jpg);
                background-repeat: no-repeat;
                background-attachment: fixed;
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
        </style>
    </head>
    <body>
        <div class="prin container-fluid">
            <br>
            <div class="title">Dibujar</div>
           <br>
            <a href="{{route('inicio')}}"><button class="btn btn-outline-warning rounded-pill ">Regresar</button></a>
            <a href="{{route('fibonacci')}}"><button class="btn btn-outline-danger rounded-pill ">Desacer</button></a>
            <br>
            <br>         
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>