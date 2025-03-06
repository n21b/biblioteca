'use strict';

var pregunta = document.querySelectorAll(".pregunta");
var respuesta = document.querySelectorAll(".pregunta ~ .respuesta");

respuesta.forEach((item)=>item.style.display = "none");

for(let i=0; i<pregunta.length; i++){

	pregunta[i].addEventListener("click",()=>{

		if(respuesta[i].style.display=="none"){
			respuesta[i].setAttribute('style', 'display: block');
		} else {
			respuesta[i].style.display = "none";
		}
	})
}