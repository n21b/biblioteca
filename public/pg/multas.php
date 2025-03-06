<?php $nombre_pagina = "multas"; ?>
<?php include '../../include/layout/head.php';?>
    <link rel="stylesheet" href="../css/tablas.css">
</head>
<body>
<div id="container">
    <?php include '../../include/layout/header.php';?>

    <main id="contenido">

    <h2>Multas</h2>

    <p>
        Para todos los usuario que no de devuelven el material en la fecha indicada y no generen renovación del material en su cuenta, el sistema, de forma automática, genera 2 tipos de multas: monetaria y suspensión. Cada usuario podrá decidir si pagar la multa o quedar suspendido.
    </p>
    <br>
    <h3>Valores de multa monetaria</h3>
    <table>
      <tr><td>Alta demanda</td><td>$1 000</td></tr>
      <tr><td>General</td><td>$300</td></tr>
      <tr><td>Equipamiento TIC (tablets, calculadoras...)</td><td>$1 000</td></tr>
      <tr><td>Tesis</td><td>$1 000</td></tr>
      <tr><td>Obra literaria</td><td>$300</td></tr>
      <tr><td>Apunte</td><td>$300</td></tr>
      <tr><td>llave casillero</td><td>$300</td></tr>
      <tr><td>Referencia</td><td>$300/h</td></tr>
      <tr><td>Recurso pedagógico</td><td>$300</td></tr>
    </table>

    <h3>Suspensión o multa administrativa por retraso de material</h3>
    <p>
      En el caso que el usuario opte por la suspensión o multa administrativa quedará exento del pago monetario y deberá cumplir la suspensión de acuerdo a lo establecido en la siguiente tabla:
    </p>
    <table>
      <tr><td>Alta demanda</td><td>1 día</td><td>5 días hábiles de suspensión por día de atraso.</td></tr>
      <tr><td>CD</td><td>1 día</td><td>5 días hábiles de suspensión por día de atraso.</td></tr>
      <tr><td>Apuntes</td><td>15 días</td><td>3 días hábiles de suspensión por día de atraso.</td></tr>
      <tr><td>Tablet</td><td>3 días</td><td>5 días hábiles de suspensión por día de atraso.</td></tr>
      <tr><td>Revistas/Tesis</td><td>1 día</td><td>5 días hábiles de suspensión por día de atraso.</td></tr>
      <tr><td>General/Batería</td><td>3 días</td><td>3 días hábiles de suspensión por día de atraso.</td></tr>
      <tr><td>Obra literaria</td><td>15 días</td><td>3 días hábiles de suspensión por día de atraso.</td></tr>
      <tr><td>Llave de casillero</td><td>6 horas</td><td>3 días hábiles de suspensión por día de atraso.</td></tr>
      <tr><td>Calculadora/Audífono</td><td>Por día hábil</td><td>3 días hábiles de suspensión por día de atraso.</td></tr>
    </table>

    </main>
    <?php include '../../include/layout/footer.php';?>
</div><!-- Fin "container" -->
<script src="../js/funciones_index.js" async></script>
</body>
</html>
