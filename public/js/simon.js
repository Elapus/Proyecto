var nivel = 1
var nivelmax = 10

var // ->php
var arrjuego  = secuenciaColor 
var arrusuario = []

var numnivel = document.getElementById ('nivel');  

var btn = document.getElementById('1');
var btn = document.getElementById('2');
var btn = document.getElementById('3');
var btn = document.getElementById('4');
var btn = document.getElementById('5');
var btn = document.getElementById('6');

function inicio() {
    mostrarSecuencia()
}
function mostrarSecuencia(){
    if (nivel < nivelmax) {
        numnivel.innerText='Nivel ' + nivel
        nivel = nivel + 1
    }else{
        setTimeout(()=>{
            numnivel.innerText="fin del juego"
            location.reload();
        },10000) 
    }
    
    fetch('http://127.0.0.1:8000/api/simon/')
    .then((response)=>response.json())
    .then((data)=>{secuenciaColor = data.color;
        secuenciaColor=data.color
    })
    console.log(secuenciaColor)
    iluminar()
}

function iluminar(){
    
}

// function validar(){
//     if (btn === secuenciaColor) {
        
//     }else {
//         alert("patron no coincide")
//     }
    
// }

//----//--//----//--//----//--//----//--//----//--//----//--

//----//--//----//--//----//--//----//--//----//--//----//--


    
//----//--//----//--//----//--//----//--//----//--//----//--
//ilumionarbotones
    // siguentecolor.classList.add('active')
    // setTimeout(()=>{
    //     siguentecolor.classList.remove('active')
    // },400)
//----//--//----//--//----//--//----//--//----//--//----//--



// var secuJuego;
// if (secuJuego === undefined) {
//   alert("no hay nada");
// } else {
//   alert("exito si hay contenido");
// }
