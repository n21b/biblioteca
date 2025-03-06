<?php $nombre_pagina = "uso-ia"; ?>
<?php include '../../include/layout/head.php';?>
    <link rel="stylesheet" href="../css/tablas.css">
</head>
<body>
<h1 class="outline">Quiénes somos. Biblioteca Universidad de Antofagasta</h1>
<div id="container">
    <?php include '../../include/layout/header.php';?>
    <main id="contenido">
      <article>
        <h3>El uso ético de la IA en la educación universitaria</h3>
        <p>La inteligencia artificial (IA) tiene el potencial de transformar la educación universitaria, mejorando la calidad del aprendizaje, haciéndolo más accesible y personalizado, y preparando a los estudiantes para el futuro. Sin embargo, la IA también plantea desafíos éticos que deben abordarse antes de su adopción generalizada en la educación.</p>
        <br>
        <h4>Desafíos</h4>
        <ul class="ygul">
          <li><strong>Discriminación</strong>: Los sistemas de IA pueden ser sesgados, lo que puede llevar a la discriminación de los estudiantes en función de su raza, género, origen étnico u otras características.</li>
          <li><strong>Privacidad</strong>: Los sistemas de IA suelen recopilar grandes cantidades de datos personales de los estudiantes, lo que plantea riesgos para la privacidad.</li>
          <li><strong>Integridad académica</strong>: Los sistemas de IA pueden utilizarse para generar contenido falso o manipulado, lo que puede amenazar la integridad académica.</li>
        </ul>
        <br>
        <h4>Directrices:</h4>
        <ul class="ygul">
          <li><strong>Transparencia</strong>: Los estudiantes deberían ser informados sobre cómo se utilizan los sistemas de IA en sus cursos.</li>
          <li><strong>Justicia</strong>: Los sistemas de IA deberían ser diseñados para evitar la discriminación.</li>
          <li><strong>Integridad</strong>: Los sistemas de IA deberían ser diseñados para proteger la integridad académica.</li>
        </ul>
        <p>Los profesores deben utilizar los sistemas de IA de forma responsable y crítica, y los estudiantes deberían ser conscientes de los riesgos potenciales de la IA.</p>
        <br>
        <h4>Recomendaciones</h4>
        <ul class="ygul">
          <li>Creación de comités de ética para supervisar el uso de la IA en la educación.</li>
          <li>Ofrecer formación a los profesores sobre el uso ético de la IA.</li>
          <li>Proporcionar a los estudiantes información sobre los riesgos potenciales de la IA.</li>
        </ul>
      </article>
      <br>
      <article>
        <h3>¿Cómo citar IA con APA 7?</h3>
        <p><strong>En el texto</strong>: El nombre de la IA se escribe en cursiva, seguido de los apellidos de los creadores o desarrolladores, si se conocen.</p>
        <p><strong>En la sección de referencia del libro</strong>:</p>
        <hr class="linea-separatoria">
        <p>Si la IA <em>sí tiene</em> nombre de autor:</p>
        <ul class="ygul">
          <li><strong>Autor</strong>: Nombre de la IA, seguido de los apellidos de los creadores o desarrolladores.</li>
          <li><strong>Año</strong>: Año de publicación.</li>
          <li><strong>Título</strong>: Título de la IA.</li>
          <li><strong>Medio</strong>: Medio en el que se publicó la IA.</li>
          <li><strong>URL</strong>: URL de la IA, si está disponible.</li>
        </ul>
        <hr class="linea-separatoria">
        <p>Si la IA <em>no tiene</em> un nombre de autor:</p>
        <ul class="ygul">
          <li><strong>Título</strong>: Título de la IA.</li>
          <li><strong>Año</strong>: Año de publicación.</li>
          <li><strong>Medio</strong>: Medio en el que se publicó la IA.</li>
          <li><strong>URL</strong>: URL de la IA, si está disponible.</li>
        </ul>
        <br>
        <p>Ejemplos:</p>
        <p><strong>En el texto</strong>: «El modelo de aprendizaje automático ChatGPT fue desarrollado por OpenAI.»</p>
        <p><strong>En la lista de referencias</strong>:</p>
        <hr class="linea-separatoria">
        <p><em>Con nombre</em> de autor: ChatGPT, OpenAI (2023). Modelo de lenguaje de código abierto. [Software en línea]. Recuperado de https://chatgpt.com/.</p>
        <hr class="linea-separatoria">
        <p><em>Sin nombre</em> de autor: Modelo de lenguaje de código abierto. OpenAI (2023). [Software en línea]. Recuperado de https://chatgpt.com/.</p>
        <hr class="linea-separatoria">
        <p>Es importante tener en cuenta que las directrices de la APA 7 pueden cambiar con el tiempo. Por lo tanto, siempre es recomendable consultar la guía de estilo más reciente antes de citar una fuente.</p>
      </article>
    </main>
    <?php include '../../include/layout/footer.php';?>
</div><!-- Fin "container" -->
<script>
  'use strict';

  var ventana = document.querySelectorAll(".pestana");
  var subventana = document.querySelector(".oculta");

  for(var i=0; i<ventana.length; i++){
    ventana[i].addEventListener("click", function(){
      if(this.nextElementSibling.className=="oculta"){
        this.nextElementSibling.classList.replace("oculta","activada");
      } else {
        this.nextElementSibling.classList.replace("activada","oculta");
      }
    });
  }

</script>
<script src="../js/funciones.js" async></script>
</body>
</html>
