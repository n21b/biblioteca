<?php $nombre_pagina = "guias_tematicas"; ?>
<?php include '../../include/layout/head.php';?>
    <link rel="stylesheet" href="../css/logos_recursos.css">
</head>
<body>
  <h1 class="outline">Apoyo al aprendizaje. Biblioteca. Universidad de Antofagasta</h1>

<div id="container">
    <?php include '../../include/layout/header.php';?>
    <main id="contenido">
        <section id="guias">
          <h2>Gestión de la información<br>y manuales de normas</h2>

          <p class="pseudo-h4">Recursos por facultad</p>
          <section id="facultades" class="caja_botones"><h3 class="outline">Recursos por facultad</h3>
            <img class="boton_gelatina" onclick="location.href='guias_tematicas_cb.php'" src="../svg/botones_facultades/boton_basicas.svg" alt="Recursos Facultad de Ciencias Básicas" title="Recursos Facultad de Ciencias Básicas">
            <img class="boton_gelatina" onclick="location.href='guias_tematicas_cs.php'"  src="../svg/botones_facultades/boton_salud.svg" alt="Recursos Facultad de Ciencias de la Salud" title="Recursos Facultad de Ciencias de la Salud">
            <img class="boton_gelatina"  onclick="location.href='guias_tematicas_m.php'" src="../svg/botones_facultades/boton_mar.svg" alt="Recursos Facultad de Ciencias del Mar y Recursos Biológicos" title="Recursos Facultad de Ciencias del Mar y Recursos Biológicos">
            <img class="boton_gelatina" onclick="location.href='guias_tematicas_cj.php'" src="../svg/botones_facultades/boton_juridicas.svg" alt="Recursos Facultad de Ciencias Jurídicas" title="Recursos Facultad de Ciencias Jurídicas">
            <img class="boton_gelatina" onclick="location.href='guias_tematicas_csoc.php'" src="../svg/botones_facultades/boton_sociales.svg" alt="Recursos Facultad de Ciencias Sociales, Artes y Humanidades" title="Recursos Facultad de Ciencias Sociales, Artes y Humanidades">
            <img class="boton_gelatina" onclick="location.href='guias_tematicas_fe.php'" src="../svg/botones_facultades/boton_educacion.svg" alt="Recursos Facultad de Educación" title="Recursos Facultad de Educación">
            <img class="boton_gelatina" onclick="location.href='guias_tematicas_fi.php'" src="../svg/botones_facultades/boton_ingenieria.svg" alt="Recursos Facultad de Ingeniería" title="Recursos Facultad de Ingeniería">
            <img class="boton_gelatina" onclick="location.href='guias_tematicas_mo.php'" src="../svg/botones_facultades/boton_medicina.svg" alt="Recursos Facultad de Medicina y Odontología" title="Recursos Facultad de Medicina y Odontología">
          </section>

          <p class="pseudo-h4">Centro de Carreras Técnicas</p>
          <section id="cct" class="caja_botones"><h3 class="outline">Gestores</h3>
            <img class="boton_gelatina" onclick="location.href='cct_administracion.php'" src="../svg/botones-cct/administracion_y_servicios.svg" alt="cct área administración y servicios" title="cct área administración y servicios">
            <img class="boton_gelatina" onclick="location.href='cct_mineria.php'" src="../svg/botones-cct/mineria.svg" alt="cct área Minería" title="cct área Minería">
            <img class="boton_gelatina" onclick="location.href='cct_educacion.php'" src="../svg/botones-cct/educacion.svg" alt="cct área Educación" title="cct área Educación">
            <img class="boton_gelatina" onclick="location.href='cct_salud.php'" src="../svg/botones-cct/salud.svg" alt="cct área Salud" title="cct área Salud">
            
          </section>

          <p class="pseudo-h4">Gestores</p>
          <section id="gestores" class="caja_botones"><h3 class="outline">Gestores</h3>
            <img class="boton_gelatina" onclick="location.href='https://endnote.com/'" src="../svg/botones_facultades/boton_endnote.svg" alt="Gestor EndNote" title="Gestor EndNote">
            <img class="boton_gelatina" onclick="location.href='https://www.mendeley.com/'" src="../svg/botones_facultades/boton_mendeley.svg" alt="Gestor Mendeley" title="Gestor Mendeley">
          </section>

          <p class="pseudo-h4">Manuales</p>
          <section id="manuales" class="caja_botones"><h3 class="outline">Manuales</h3>
            <img class="boton_gelatina" onclick="location.href='../doc/manuales/manual-endnote.pdf'" src="../svg/botones_facultades/endnote.svg" alt="Manual EndNote" title="Manual EndNote">
            <img class="boton_gelatina" onclick="location.href='../doc/manuales/manual-mendeley.pdf'" src="../svg/botones_facultades/mendeley.svg" alt="Manual Mendeley" title="Manual Mendeley">
            <img class="boton_gelatina" onclick="location.href='../doc/manuales/normas-apa.pdf'" src="../svg/botones_facultades/apa.svg" alt="Manual APA" title="Manual APA">
            <img class="boton_gelatina" onclick="location.href='../doc/manuales/citar-derechos-autor.pdf'" src="../svg/botones_facultades/plagio.svg" alt="Manual plagio y uso de la información" title="Manual plagio y uso de la información">
            <img class="boton_gelatina" onclick="location.href='../doc/manuales/normas-vancouver.pdf'" src="../svg/botones_facultades/vancouver.svg" alt="Manual Vancouver" title="Manual Vancouver">
          </section>
      </section><!-- Fin #guias -->
	  
    </main>
        
    <?php include '../../include/layout/footer.php';?>
    <script src="../js/funciones.js" ></script>
    <script>
      const hijo_facultades = document.querySelector("#facultades").childNodes;
      const hijo_gestores = document.querySelector("#gestores").childNodes;
      const hijo_cct = document.querySelector("#cct").childNodes;
      const hijo_manuales = document.querySelector("#manuales").childNodes;
      console.log(hijo_facultades);
      gelatinizar(hijo_facultades);
      gelatinizar(hijo_gestores);
      gelatinizar(hijo_cct);
      gelatinizar(hijo_manuales);
    </script>
</body>
</html>