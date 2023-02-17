<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="/js/objetosgranja.js" type="text/javascript" defer></script>
        <title>Dibujos</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style>
            body{
                text-align: center;
                background-image:url(/storage/Img/granjafondo.jpg);
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover; 
                
            }
            .prin{
                margin: 0px auto;
                width: 95%;
                height: 550px; 
                padding-left: 10px;
                margin-top: 1%;
                padding-top: 5px;
                background: rgba(255, 255, 255, 0.308);
                border: 1px solid black;
                border-radius: 30px;
            }
            #left{
                width: 20%;
                float: left;
            }
            #right{
                width: 80%;
                float: right;
            }
            menu{
                background: hsl(93, 67%, 41%);
            }
            input{
                background-color: rgb(177, 174, 174);
                border-radius: 30px;
            }
            .title{
                background-color: rgba(177, 0, 177, 0.90); 
                border: 1px solid black;
                border-radius: 30px;
            }
            #lienzo{
                /* width: 1000px;
                height: 400px; */
                margin-top: 1%;
                padding-top: 2%;
                background-image:url(/storage/Img/granja.jpg);
                background-size: cover;
                border: 1px solid black;
                border-radius: 30px;
            }
            button{
                background-color: rgba(9, 255, 0, 0.490);
                border: 1px solid black;
            }
            
        </style>
    </head>
    <body>
        <div class="prin container-fluid">
            <div id="left" class="menu">
                <div class="title">Granja</div>
                <br>
                <button onclick="vacas()">Vacas</button>
                <br>
                <br>
                <button onclick="gallinas()">Gallinas</button>
                <br>
                <br>
                <button onclick="ovejas()">Ovejas</button>
                <br>
                <br>
                <button onclick="cerdos()">Cerdos</button>
                <br>
                <br>
            </div>
            <div id="right">
                <canvas id="lienzo" width="1000px" height="490px"></canvas>
            </div>
            <a href="{{route('inicio')}}">
            <button class="btn btn-outline-warning rounded-pill" onclick="limpiar()">Regresar</button></a>
            <button class="btn btn-outline-danger rounded-pill " onclick="limpiar()">Limpiar</button>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></>
    </body>
</html>left