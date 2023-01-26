const nivel=document.getElementById('nivel');
const botones=document.getElementsByClassName('boton');
const iniciojuego=document.getElementById('inicio');

class Simon{
    constructor(botones,iniciojuego,nivel){
        this.nivel=0;
        this.userPosition=0;
        this.rondas=10;
        this.sequence=[];
        this.speed= 1000;
        this.blockButtons=true;
        this.buttons=Array.from(botones);
        this.display = {
            iniciojuego,
            nivel
        }
    }
    init(){
        this.display.iniciojuego.onclick=()=> this.inicio();
    }
    inicio(){
        this.display.iniciojuego.disabled = true;
        this.updateNivel(0);
        this.userPosition=0;
        this.sequence=this.crearsecuencia();
        this.buttons.forEach((element, i)=>{
            element.classList.remove('winner');
            element.onclick=()=>this.buttonClick(i);  
        });
        this.showsecuencia();
    }

    updateNivel(value){
        this.nivel=value;
        this.display.nivel.textContent = 'Nivel' + $this.nivel; 
    }
    crearSequence(){
        return Array.from
    }
        
}
    // getRandomColor(){
        
    // }
    // buttonClick(value){
        
    // }
    // validateChonsenColor(value){
        
    // }
    // fin(){
        
    // }
    // showsecuencia(){
        
    // }
    // toggleButtonStyle(button){
        
    // }
    // reinicio(){
        
    // }
    // ganar(){
        
    // }
const simon = new Simon(botones, iniciojuego, nivel);
simon.init();
