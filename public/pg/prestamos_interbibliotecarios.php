<?php $nombre_pagina = "prestamos_interbibliotecarios"; ?>
<?php include '../../include/layout/head.php';?>
</head>
<body><h1 class="outline">Préstamos interbibliotecarios. Biblioteca Universidad de Antofagasta</h1>
<div id="container">
  <?php include '../../include/layout/header.php';?>
  <main id="contenido">
    <style>
      .prestamo {
        margin: 0 auto;
        width: 80%;
      }

      .prestamo p {
        display: block;
        text-align: center;
        width: 80%;
      }

      .ygol {
        margin: 0 auto;
        width: 60%;
      }

      article + .prestamo {margin-top:50px;}
    </style>

    <section class="prestamo"><h2>Préstamos interbibliotecarios</h2>
      <article><h3>USUARIOS UA</h3>
      <p>Para nuestros usuarios que necesiten material bibliográfico desde otras instituciones.</p>
        <article>
          <h4 class="ygh4">Préstamos con instituciones que se encuentran <strong>EN</strong> la región</h4>
          <ol class="ygol">
            <li>Solicitar formulario de PIB con bibliotecario encargado.</li>
            <li>Concurrir personalmente con formulario y credencial a la biblioteca propietaria.</li>
          </ol>
        </article>

        <article>
          <h4 class="ygh4">Préstamos con instituciones que se encuentran <strong>FUERA</strong> de la región</h4>
          <ol class="ygol">
            <li>Cancelar mediante depósito en el banco el costo de envío del material.</li>
            <li>Indicar título y autor del libro solicitado, indicar biblioteca propietaria del ítem y campus si fuese necesario.</li>
          </ol>
        </article>
      </article>

      <article class="prestamo"><h3>USUARIOS EXTERNOS</h3>
        <p>Para usuarios externos que necesiten material bibliográfico de nuestras colecciones.</p>
        <article>
          <h4 class="ygh4">Préstamos con instituciones que se encuentran <strong>EN</strong> la región.</h4>
          <ul class="ygul">
            <li>El PIB es exclusivo de las casas centrales de las universidades.</li>
            <li>Las condiciones de préstamos serán las detalladas en el artículo 6 del Reglamento de Biblioteca.</li>
            <li>El usuario deberá concurrir personalmente hasta la biblioteca con su formulario de PIB y su credencial o cédula de identidad.</li>
          </ul>
        </article>
        <article>
          <h4 class="ygh4">Préstamos con instituciones que se encuentran <strong>FUERA</strong> de la Región.</h4>
          <ul class="ygul">
            <li>El préstamo deberá ser gestionado por el bibliotecario encargado de su institución.</li>
            <li>El préstamo se hará por un plazo de 30 días.</li>
            <li>El costo de traslado será de cargo y responsabilidad del usuario que solicita el PIB.</li>
            <li>Es responsabilidad del usuario el realizar la devolución en la fecha estipulada, teniendo en consideración el tiempo de traslado.</li>
          </ul>
        </article>
      </article>

    </section>
  </main>
  <?php include '../../include/layout/footer.php';?>
</div><!-- Fin "container" -->
<script src="../js/funciones_index.js" async></script>
</body>
</html>
