<?php $nombre_pagina = "estadisticas"; ?>
<?php include '../../include/layout/head.php';?>
    <link rel="stylesheet" href="../css/tablas.css">
</head>
<body>
<h1 class="outline">Estadísticas. Biblioteca Universidad de Antofagasta</h1>
<div id="container">
    <?php include '../../include/layout/header.php';?>

    <main id="contenido">

    <style type="text/css">
      .reportes {
        width: 80%;
      }

      .reportes_nombre_facultad, .reportes_docs {
        padding: 5px 10px;
        text-align: center;
      }
    </style>

    <section>
    <h2>Estadísticas por facultad</h2>

    <article><h3 class="outline">Facultad de Ciencias Básicas</h3>
      <table class="reportes">
        <tr><td class="reportes_nombre_facultad">Facultad de <strong>Ciencias Básicas</strong></td></tr>
        <tr><td class="reportes_docs"><a href="../doc/informes/2018/boletin_fac_cs_basicas_2018.pdf">2018</a> ■ <a href="../doc/informes/1_sem_2019/inf_cs_basicas_1sem_2019.pdf">I Sem 2019</a></td></tr>
      </table>
    </article>

    <article>
      <table class="reportes"><h3 class="outline">Facultad de Ciencias de la Salud</h3>
        <tr><td class="reportes_nombre_facultad">Facultad de <strong>Ciencias de la Salud</strong></td></tr>
        <tr><td class="reportes_docs"><a href="../doc/informes/2018/boletin_fac_cs_salud_2018.pdf">2018</a> ■ <a href="../doc/informes/1_sem_2019/inf_cs_salud_1sem_2019.pdf">I Sem 2019</a></td></tr>
      </table>
    </article>

    <article><h3 class="outline">Facultad de Ciencias del Mar y Recursos Biológicos</h3>
      <table class="reportes">
        <tr><td class="reportes_nombre_facultad">Facultad de <strong>Ciencias del Mar y Recursos Biológicos</strong></td></tr>
        <tr><td class="reportes_docs"><a href="../doc/informes/2018/boletin_fac_cs_mar_2018.pdf">2018</a> ■ <a href="../doc/informes/1_sem_2019/inf_cs_mar_1sem_2019.pdf">I Sem 2019</a></td></tr>
      </table>
    </article>
    
    <article><h3 class="outline">Facultad de Ciencias Sociales, Artes y Humanidades</h3>
      <table class="reportes">
        <tr><td class="reportes_nombre_facultad">Facultad de <strong>Ciencias Sociales, Artes y Humanidades</strong></td></tr>
        <tr><td class="reportes_docs"><a href="../doc/informes/2018/boletin_fac_cs_sociales_2018.pdf">2018</a> ■ <a href="../doc/informes/1_sem_2019/inf_cs_sociales_artes_humanidades_1sem_2019.pdf">I Sem 2019</a></td></tr>
      </table>
    </article>

    <article><h3 class="outline">Facultad de Educación</h3>
      <table class="reportes">
        <tr><td class="reportes_nombre_facultad">Facultad de <strong>Educación</strong></td></tr>
        <tr><td class="reportes_docs"><a href="../doc/informes/2018/boletin_fac_cs_educacion_2018.pdf">2018</a> ■ <a href="../doc/informes/1_sem_2019/inf_educacion_1sem_2019.pdf">I Sem 2019</a></td></tr>
      </table>
    </article>

    <article><h3 class="outline">Facultad de Ingeniería</h3>
      <table class="reportes">
        <tr><td class="reportes_nombre_facultad">Facultad de <strong>Ingeniería</strong></td></tr>
        <tr><td class="reportes_docs"><a href="../doc/informes/2018/boletin_fac_cs_ingenieria_2018.pdf">2018</a> ■ <a href="../doc/informes/1_sem_2019/inf_ingenieria_1sem_2019.pdf">I Sem 2019</a></td></tr>
      </table>
    </article>

    <article><h3 class="outline">Facultad de Medicina y Odontología</h3>
      <table class="reportes">
        <tr><td class="reportes_nombre_facultad">Facultad de <strong>Medicina y Odontología</strong></td></tr>
        <tr><td class="reportes_docs"><a href="../doc/informes/2018/boletin_fac_medicina_odontologia_2018.pdf">2018</a> ■ <a href="../doc/informes/1_sem_2019/inf_medicina_odontologia_1sem_2019.pdf">I Sem 2019</a></td></tr>
      </table>
    </article>

    </section>
    </main>
    <?php include '../../include/layout/footer.php';?>
</div><!-- Fin "container" -->
<script src="../js/funciones_index.js" async></script>
</body>
</html>
