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
        font-size: 1.5em;
        padding: 5px 10px;
        text-align: center;
      }
    </style>

    <section>
      <h2>Reporte estadísticos anuales</h2>

      <article><h3 class="outline">Reportes anuales</h3>
        <table class="reportes">
          <tr><td class="reportes_docs"><a href="../doc/reportes/reportes-biblioteca-2022.pdf">2022</a> • <a href="../doc/reportes/reportes-biblioteca-2023.pdf">2023</a> • <a href="../doc/reportes/reportes-biblioteca-2024.pdf">2024</a></td></tr>
        </table>
      </article>

    </section>
    </main>
    <?php include '../../include/layout/footer.php';?>
</div><!-- Fin "container" -->
<script src="../js/funciones_index.js" async></script>
</body>
</html>
