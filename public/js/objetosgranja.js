var lienzo = document.getElementById("lienzo")
var modelo = lienzo.getContext("2d")

//---//---//---//---//---//---//---//---//---
var vaca = new Image();
vaca.src = "/storage/Img/vaca.png"

var gallina = new Image();
gallina.src = "/storage/Img/gallina.png"

var oveja = new Image();
oveja.src = "/storage/Img/oveja.png"

var cerdo = new Image();
cerdo.src = "/storage/Img/cerdo.png"
//---//---//---//---//---//---//---//---//---

function vacas(){
    alert("Ha insertado una nueva vaca")
    modelo.drawImage(vaca,50,50)
}
//---//---//---//---//---//---//---//---//---

function gallinas(){
    alert("Ha insertado una nueva gallina")

    modelo.drawImage(gallina, 100, 100)
}
//---//---//---//---//---//---//---//---//---

function ovejas(){
    alert("Ha insertado una nueva oveja")
    modelo.drawImage(oveja, 150, 150)
}
//---//---//---//---//---//---//---//---//---

function cerdos(){
    alert("Ha insertado un nuevo cerdo")
    modelo.drawImage(cerdo, 200,200)
}
//---//---//---//---//---//---//---//---//---

function limpiar(){
    location.reload()
}
//---//---//---//---//---//---//---//---//---
