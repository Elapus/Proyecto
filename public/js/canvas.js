// var lienzo = document.querySelector("canvas")
// var modelo = lienzo.getContext("2d")
// modelo.fillStyle = "black"
// modelo.fillRect(100,50,100,50)

const lienzo = document.getElementById("lienzo")
const modelo = lienzo.getContext("2d")

let iniX
let iniY

function dibujar(ubiX, ubiY){
    modelo.beginPath()
    modelo.moveTo(iniX,iniY)
    modelo.lineWidth = 1 
    modelo.strokeStyle = "#000"
    modelo.lineCap = "round"
    modelo.lineJoin = "round"
    modelo.lineTo(ubiX, ubiY)
    modelo.stroke()

    iniX = ubiX
    iniY = ubiY
}

function mouseDown (evt){
    iniX = evt.offsetX
    iniY = evt.offsetY
    dibujar(iniX,iniY)
    lienzo.addEventListener("mousemove", mouseMoving)
}

function mouseMoving(evt){
    dibujar(evt.offsetX, evt.offsetY)
}

function mouseUp(){
    lienzo.removeEventListener("mousemove", mouseMoving)
}

lienzo.addEventListener("mousedown", mouseDown)
lienzo.addEventListener("mouseup", mouseUp)

function triangulo() {
    modelo.beginPath()
    modelo.moveTo(300,350)
    modelo.lineTo(400,150)  
    modelo.lineTo(500,350)
    modelo.lineTo(300,350)
    modelo.stroke()
}

function circulo() { 
    modelo.arc(550,200,100,0,2 * Math.PI,true)
    modelo.stroke()   
}

function cuadrado() {
    modelo.beginPath()
    modelo.moveTo(700,50)
    modelo.lineTo(950,50)
    modelo.lineTo(950,300)
    modelo.lineTo(700,300)
    modelo.lineTo(700,50)
    modelo.stroke()
}

function cartesiano() {
    modelo.beginPath()
    modelo.moveTo(100,175)
    modelo.lineTo(400,175)
    modelo.stroke()

    modelo.beginPath()
    modelo.moveTo(250,50)
    modelo.lineTo(250,300)
    modelo.stroke()

//---//---//---//---//---//---//
//izquiera superiror
    modelo.beginPath()
    modelo.moveTo(230,175)
    modelo.lineTo(250, 50)
    modelo.stroke()
    
    modelo.beginPath()
    modelo.moveTo(210,175)
    modelo.lineTo(250, 70)
    modelo.stroke()

    modelo.beginPath()
    modelo.moveTo(190,175)
    modelo.lineTo(250, 90)
    modelo.stroke()

    modelo.beginPath()
    modelo.moveTo(170,175)
    modelo.lineTo(250, 110)
    modelo.stroke()

    modelo.beginPath()
    modelo.moveTo(150,175)
    modelo.lineTo(250, 130)
    modelo.stroke()

    modelo.beginPath()
    modelo.moveTo(130,175)
    modelo.lineTo(250, 150)
    modelo.stroke()

    modelo.beginPath()
    modelo.moveTo(110,175)
    modelo.lineTo(250, 170)
    modelo.stroke()
//---//---//---//---//---//---//
//derecha superiror
    modelo.beginPath()
    modelo.moveTo(390,175)
    modelo.lineTo(250, 170)
    modelo.stroke()

    modelo.beginPath()
    modelo.moveTo(370,175)
    modelo.lineTo(250, 150)
    modelo.stroke()

    modelo.beginPath()
    modelo.moveTo(350,175)
    modelo.lineTo(250, 130)
    modelo.stroke()

    modelo.beginPath()
    modelo.moveTo(330,175)
    modelo.lineTo(250, 110)
    modelo.stroke()

    modelo.beginPath()
    modelo.moveTo(310,175)
    modelo.lineTo(250, 90)
    modelo.stroke()

    modelo.beginPath()
    modelo.moveTo(290,175)
    modelo.lineTo(250, 70)
    modelo.stroke()

    modelo.beginPath()
    modelo.moveTo(270,175)
    modelo.lineTo(250,50)
    modelo.stroke()
//---//---//---//---//---//---//
//izquiera inferior 
modelo.beginPath()
    modelo.moveTo(130,175)
    modelo.lineTo(250, 190)
    modelo.stroke()
    
    modelo.beginPath()
    modelo.moveTo(150,175)
    modelo.lineTo(250, 210)
    modelo.stroke()

    modelo.beginPath()
    modelo.moveTo(170,175)
    modelo.lineTo(250, 230)
    modelo.stroke()

    modelo.beginPath()
    modelo.moveTo(190,175)
    modelo.lineTo(250, 250)
    modelo.stroke()

    modelo.beginPath()
    modelo.moveTo(210,175)
    modelo.lineTo(250, 270)
    modelo.stroke()

    modelo.beginPath()
    modelo.moveTo(230,175)
    modelo.lineTo(250, 290)
    modelo.stroke()
//---//---//---//---//---//---//
//derecha inferior 
    modelo.beginPath()
    modelo.moveTo(390,175)
    modelo.lineTo(250, 190)
    modelo.stroke()
    
    modelo.beginPath()
    modelo.moveTo(370,175)
    modelo.lineTo(250, 210)
    modelo.stroke()
    
    modelo.beginPath()
    modelo.moveTo(330,175)
    modelo.lineTo(250, 230)
    modelo.stroke()
    
    modelo.beginPath()
    modelo.moveTo(310,175)
    modelo.lineTo(250, 250)
    modelo.stroke()
    
    modelo.beginPath()
    modelo.moveTo(290,175)
    modelo.lineTo(250, 270)
    modelo.stroke()
    
    modelo.beginPath()
    modelo.moveTo(270,175)
    modelo.lineTo(250, 290)
    modelo.stroke()
}

function limpiar() {
    location.reload()
}