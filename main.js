//capturar botones
const btnPiedra=document.querySelector("#piedra");
const btnPapel=document.querySelector("#papel");
const btnTijera=document.querySelector("#tijera");
let inputPiedra=document.querySelector("#inputPiedra");
let inputPapel=document.querySelector("#inputPapel");
let inputTijera=document.querySelector("#inputTijera");

//funciones de los botones
///piedra
function clickPiedra(){
  btnPiedra.style.border="solid black 1px"
  btnPapel.style.border="solid white 1px"
  btnTijera.style.border="solid white 1px"
  inputPiedra.value="1";
  inputPapel.value="0" ;
  inputTijera.value="0";
  
  
  
} 
///Papel
function clickPapel(){
  btnPiedra.style.border="solid white 1px"
  btnPapel.style.border="solid black 1px"
  btnTijera.style.border="solid white 1px"
  inputPiedra.value="0";
  inputPapel.value="1" ;
  inputTijera.value="0";
  
} 
///Tijera
function clickTijera(){
  btnPiedra.style.border="solid white 1px"
  btnPapel.style.border="solid white 1px"
  btnTijera.style.border="solid black 1px"
  inputPiedra.value="0";
  inputPapel.value="0" ;
  inputTijera.value="1";
} 
////eventos de los botones
btnPiedra.addEventListener('click', clickPiedra);
btnPapel.addEventListener('click', clickPapel);
btnTijera.addEventListener('click', clickTijera);
