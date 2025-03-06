"use strict";

function gelatinizar(elemento) {
  for (var i = 0; i < elemento.length; i++) {
    elemento[i].addEventListener("mouseenter", function () {
      this.classList.add("elastic");
    });

    elemento[i].addEventListener("animationend", function () {
      this.classList.remove("elastic");
    });
  }
}

// ------------ FUNCIONES PARA LEER ------------ \\

  function playTextFromFile(filePath) {
    fetch(filePath)
      .then(response => response.text())
      .then(text => {
        const utterance = new SpeechSynthesisUtterance(text);
        speechSynthesis.speak(utterance);
      })
      .catch(error => console.error('Error al leer el archivo:', error));
  }
  
  function cancelar_sonido() {
    window.speechSynthesis.cancel();
  }
  

// ------------ MOSTRAR DIV ------------ \\


let clic = 1;

function mostrarDiv(){
  /* Si al hacer click sobre la div, la variable clic está en 1, la altura cambiará a 100px */
  if(clic==1){
    document.getElementById("servicios").style.height = "100px"; /* Se selecciona */
    clic = clic + 1; /* Se cambia */
  } else {
    /* Si se hace click a la div y el valor de la variable clic es CUALQUIER OTRO de 1, su altura se devuelve a cero */
    document.getElementById("servicios").style.height = "0"; /* Se selecciona */
    clic = 1; /* La variable vuelve a su valor original, para estar lista para una próxima presionada */
  }
}

function mostrarRepositorios(){
  if(clic==1){
    document.getElementById("repositorios").style.height = "70px";
    clic = clic + 1;
  } else {
    document.getElementById("repositorios").style.height = "0";
    clic = 1;
  }
}