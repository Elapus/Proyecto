<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Simondice</title>
        <script type="text/javascript">
                var state = 'press-key';
                var patron = [];
                var nivel = 0;
                
                var title = document.getElementById('mensaje');
                document.addEventListener('keypress',iniciojuego);
                    function iniciojuego(){
                        if (state === 'press-key') {
                            siguienteNivel();
                        }            
                    }
                    function siguenteNivel(){
                        setTimeout(() => {
                            nivel = nivel +1;
                            mensaje.innerText = 'Nivel' + nivel
                        },500)
                    }
        </script>
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
            .titulo {
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
            <div class="titulo" id="title">Simondice</div>
            <br>
            <h2 id="mensaje">Inicio de juego</h2>
                <script type="text/javascript">
                    siguenteNivel();
                </script>
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
{{-- // alert("Listo para juagar");
// alert("poganmos tu memoria a prueba");

// var rojo = document.getElementById('rojo');
// var verde = document.getElementById('verde');
// var azul = document.getElementById('azul');
// var amarillo = document.getElementById('amarillo');
// var morado = document.getElementById('morado');
// var naranja = document.getElementById('naranja');

// var button = [rojo,verde,amarillo,azul,morado,naranja];

// rojo.addEventListener('click',buttonPress);
// verde.addEventListener('click',buttonPress);
// azul.addEventListener('click',buttonPress);
// amarillo.addEventListener('click',buttonPress);
// morado.addEventListener('click',buttonPress);
// naranja.addEventListener('click',buttonPress);

// function startGame (){
//     if (state === 'press-key' || state === 'mejor suerte para la proxima') {
//         Siguenteraound();
//         var indexPlayerPatron = 0;
//     }setTimeout(() => {
//         round = round +1;
//         title.innerText = 'Round' + round;
//         var nextColor = Math.floor(Math.random() * 6);
//         var nextButton = button[nextColor];

//         lightButton(nextButton);
//         patron.push(nextButton);

//         indexPlayerPatron = 0;

//         state = 'waitting-palyer';
// }
// function siguenteround(){
//     state = 'waitting-patron'
//     setTimeout(() => {
//         round = round +1;
//         title.innerText = 'Round' + round;
//         var nextColor = Math.floor(Math.random() * 6);
//         var nextButton = button[nextColor];

//         lightButton(nextButton);
//         patron.push(nextButton);

//         indexPlayerPatron = 0;

//         state = 'waitting-palyer';
//     }, 500);
// }
// function lightButton(nextButton){
//     button.classList.toggle('active');
//     setTimeout(() => {
//         button.classList.toggle('active');
//     }, 200);
// }
// function buttonPress(event){
//     if (state === 'waitting-player') {
//         var button = event.target
//         if (button === patron[indexPlayerPatron]){
//             indexPlayerPatron = indexPlayerPatron +1;
//             lightButton(button)
//             if (indexPlayerPatron === patron.length){
//                 newLevel();
//             }                      
//         }                
//     }else{
//         state = 'mejor suerte para la proxima';
//         title.innerText = 'mejor suerte para la proxima'; 
//     }
// } --}}

