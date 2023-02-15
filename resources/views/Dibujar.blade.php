<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="/js/canvas.js" type="text/javascript" defer></script>
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
                width: 30%;
                padding-left: 10px;
                margin-top: 1%;
                padding-top: 5px;
                background: hsl(175, 67%, 41%);
                border: 1px solid black;
                border-radius: 30px;
            }
            input{
                background-color: rgb(177, 174, 174);
                border-radius: 30px;
            }
            .title{
                background-color: rgba(177, 0, 177, 0.678); 
                border: 1px solid black;
                border-radius: 30px;
            }
            #lienzo{
                /* width: 1000px;
                height: 400px; */
                padding-left: 10px;
                margin-top: 1%;
                padding-top: 5px;
                background: hsla(0, 0%, 100%, 0.575);
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
            <br>
            <div class="title">Dibujar</div>
            <br>
            <button id="circulo" class="circulo" onclick="circulo()">Ciculos</button>
            <button id="triangulo" class="triangulo" onclick="triangulo()">Triangulos</button>
            <button id="cuadrado" class="cuadrado" onclick="cuadrado()">Cuadrados</button>
            <button id="cartesiano" class="cartesiano" onclick="cartesiano()">Cartesiano</button>
            <br><br>
            <a href="{{route('inicio')}}"><button class="btn btn-outline-warning rounded-pill ">Regresar</button></a>
            <button class="btn btn-outline-danger rounded-pill " onclick="limpiar()">Limpiar</button>
            <br>
            <br>         
        </div>
        <canvas id="lienzo" width="1000" height="400"> </canvas>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></>
    </body>
</html>