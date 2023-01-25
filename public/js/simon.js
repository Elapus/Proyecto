// alert("Listo para juagar");
// alert("poganmos tu memoria a prueba");
// var state = 'press-key';

// var title = document.getElementById('title');
// var rojo = document.getElementById('rojo');
// var verde = document.getElementById('verde');
// var azul = document.getElementById('azul');
// var amarillo = document.getElementById('amarillo');
// var morado = document.getElementById('morado');
// var naranja = document.getElementById('naranja');

// var button = [rojo,verde,amarillo,azul,morado,naranja];

// document.addEventListener('keypress',startGame);
// rojo.addEventListener('click',buttonPress);
// verde.addEventListener('click',buttonPress);
// azul.addEventListener('click',buttonPress);
// amarillo.addEventListener('click',buttonPress);
// morado.addEventListener('click',buttonPress);
// naranja.addEventListener('click',buttonPress);

// function startGame (){
//     if (state === 'press-key' || state === 'mejor suerte para la proxima') {
//         Siguenteraound();
//         var patron = [];
//         var round = 0;
//         var indexPlayerPatron = 0;
//     }
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
// }

