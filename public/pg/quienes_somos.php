<?php $nombre_pagina = "quienes_somos"; ?>
<?php include '../../include/layout/head.php';?>
    <!-- <link rel="stylesheet" href="../css/tablas.css"> -->
</head>
<body>
<h1 class="outline">Quiénes somos. Biblioteca Universidad de Antofagasta</h1>
<div id="container">
    <?php include '../../include/layout/header.php';?>

    <main id="contenido">
      <article><h2>¿Quiénes somos?</h2>
        <div class="icons-sound">
            <img src="../../public/svg/sound-on.svg" onclick="playTextFromFile('../../public/textos-leer/quienes.txt')" alt="Leer quiénes somos" title="Leer quiénes somos">
            <img src="../../public/svg/sound-off.svg" onclick="cancelar_sonido()">
        </div>

        <p>
        El Servicio de Bibliotecas y Recursos de Apoyo al Aprendizaje es una unidad dependiente de la Vicerrectoría Académica. Se relaciona con las diferentes facultades mediante la entrega de colecciones y servicios diferenciados. Está orientado a satisfacer las necesidades y demandas de información de los docentes, investigadores, estudiantes, autoridades universitarias y del público en general que recurre al servicio. El Servicio de Biblioteca y Recursos de Aprendizaje tiene los siguientes objetivos: </p>

        <ul class="ygul">
          <li>Brindar acceso oportuno y eficaz a diferentes fuentes de información, en soportes físicos o digitales, a la comunidad universitaria.</li>
          <li>Proveer el acceso a recursos de información digital, a través del fortalecimiento e incorporación de nuevos recursos digitales, por suscripción y de acceso abierto.</li>
          <li>Difundir los recursos y servicios que ofrece Biblioteca a la comunidad universitaria mediante sus canales de comunicación.</li>
          <li>Fortalecer el desarrollo de colecciones mediante su proceso de adquisición bibliográfica.</li>
          <li>Preservar y dar acceso al conocimiento generado por la Universidad de Antofagasta, a través de la gestión de la colección de tesis, apuntes y cibertesis.</li>
          <li>Fomentar el uso de las tecnologías para la recuperación de información, mediante su servicio de capacitación que busca desarrollar en sus usuarios habilidades informacionales.</li>
          <li>Apoyar la investigación y producción científica de la institución, mediante el acceso a información y apoyo con su servicio de referencia.</li>
          <li>Fomentar el respeto los derechos de propiedad intelectual difundiendo el uso ético de la información.</li>
          <li>Vincularse con el medio mediante convenios interbibliotecarios que permitan el intercambio de información con las universidades pertenecientes al consejo de rectores, liceos y colegios.</li>
          <li>Fomentar la cultura en la comunidad universitaria generando espacios físicos o virtuales que permitan la realización de actividades vinculadas a su quehacer.</li>
          <br>
        </ul>
      </article>

      <article><h3 class="pestana">Misión</h3>
        <div class="oculta">

        <div class="icons-sound">
            <img src="../../public/svg/sound-on.svg" onclick="playTextFromFile('../../public/textos-leer/mision.txt')" alt="Leer Misión" title="Leer Misión">
            <img src="../../public/svg/sound-off.svg" onclick="cancelar_sonido()">
        </div>

        <p id="mision">
          Somos el Servicio de Biblioteca y Recursos de Apoyo al Aprendizaje de la Universidad de Antofagasta, que proporciona asistencia inclusiva y de calidad a la docencia e investigación en concordancia con el proyecto educativo institucional, gestionando el acceso a la información bibliográfica en diferentes soportes, aplicando tecnologías de información y comunicación, para satisfacer las necesidades de información, tecnología y nuevas fuentes de conocimiento de la comunidad universitaria, regional e internacional, contando, para ello, con un equipo multidisciplinar y calificado.
        </p>
        <br>
      </div>
      </article><!-- Cierre article Misión -->

        <article><h3 class="pestana">Visión</h3>
            <div class="oculta">
            <div class="icons-sound">
                <img src="../../public/svg/sound-on.svg" onclick="playTextFromFile('../../public/textos-leer/vision.txt')" alt="Leer visión" title="Leer visión">
                <img src="../../public/svg/sound-off.svg" onclick="cancelar_sonido()">
            </div>

                <p id="vision">Ser un referente de acceso a la información en la zona norte de Chile, optimizando y ampliando nuestros recursos y servicios tecnológicos bibliográficos para la comunidad universitaria, regional, nacional e internacional, comprometidos con la calidad en la entrega de atención al usuario.</p>
                <br>
            </div>
        </article>

        <article><h3 class="pestana">Estructura organizacional y organigrama</h3>
        <div class="oculta">
        <div class="icons-sound">
                <img src="../../public/svg/sound-on.svg" onclick="playTextFromFile('../../public/textos-leer/estructura.txt')" alt="Leer estructura" title="Leer estructura">
                <img src="../../public/svg/sound-off.svg" onclick="cancelar_sonido()">
            </div>

            <p>La estructura del Servicio de Biblioteca y Recursos de Apoyo al Aprendizaje considera las siguientes áreas que se identifican a continuación:</p>

            <ul class="ygul">
                <li>Área de Adquisición Bibliográfica: su propósito es la gestión de colecciones mediante la adquisición de recursos bibliográficos físicos y digitales.</li>
                <li>Área de Procesos Técnicos: encargada del proceso de clasificación, catalogación y procesamiento físico del material que pasa a circulación.</li>
                <li>Área de Circulación: encargada de recibir el material catalogado, ordenarlo en las estanterías abiertas, ejecutar los préstamos y devoluciones de los materiales.</li>
                <li>Área de Gestión de TIC: encargada de administrar los préstamos de tecnologías, administración de cuentas los usuarios y asesorar en el acceso a recursos digitales.</li>
                <li>Área de Soporte Web, Informática y Comunicaciones: encargada de la mantención y actualización del sitio <em>web</em> y canales de comunicación.</li>
            </ul>
            <p>El funcionamiento del Servicio de Biblioteca y Recursos de Apoyo al Aprendizaje, está normado por el Reglamento de Biblioteca Decreto Exento N°1460 año 2019, donde se definen los usuarios del sistema, sistema de préstamo, la consulta de libros y material audiovisual así como las sanciones.</p>
            <p class="p_normal">Las bibliotecas se encuentran ubicadas en el Campus Coloso, con excepción de la Biblioteca de Ciencias Clínicas que está inserta en el campus de Área Clínica.</p>
            <br>
        </div>
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
