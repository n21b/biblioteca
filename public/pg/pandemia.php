<?php $nombre_pagina = "pandemia"; ?>
<?php include '../../include/layout/head.php';?>
    <link rel="stylesheet" href="../css/tablas.css">
</head>
<body>
<div id="container">
    <?php include '../../include/layout/header.php';?>

    <main id="contenido">

    <h2>Protocolo de apertura segura</h2>

    <h3>Medidas implementadas</h3>

    <p>Para garantizar una apertura segura, durante la primera semana, se recibirá el material en préstamo de los usuarios.
        Si tiene un material, solicita tu hora para la devolución.</p>

    <style>
        .centrado figure img{
            margin: 0 auto;
        }

        .centrado p {
            text-align: center;
        }

        table img {
            max-width: none !important;
        }
        
    </style>

    <table class="centrado">
        <tr><td><a href="https://forms.office.com/Pages/ResponsePage.aspx?id=snownTLjw0OTqj5ySP_nfXToHUf00htBgwsjs7STbBFUNkJPMkgzSzVQWlc2TUxVT0lTS09OMzlYMi4u"><figure><img src="../img/zonas/formulario_pandemia.webp" alt=""></figure></a></td><td><figure style="cursor: pointer;" onclick="window.location.href='../doc/protocolo.pdf'"><img src="../img/zonas/virus.webp" alt=""></figure></td></tr>
        <tr><td><p>Formulario solicitud<br>de entrega de material pendiente</p></td><td><p>Protocolo de atención</p></td></tr>
    </table>

    <h3>Sistemas de préstamo pickup</h3>

    <p>En situación de pandemia, la solicitud de libros físicos se debe realizar mediante pickup.</p>

    <p>La entrega de los pedidos de material serán entregados en la entrada norte de Biblioteca (frente a la Plaza de la Reforma).</p>

    <p>Sigue los siguientes pasos para solicitar tu material.</p>

    <table>
        <tr>
            <td>
                <figure><a href="http://janium.uantof.cl/opac"><img src="../img/zonas/lupa.webp" alt=""></a></figure>
            </td>
            <td>1) Busca el material en el <a href="http://janium.uantof.cl/opac">catálogo</a> de Biblioteca

            </td>
        </tr>
        <tr>
            <td>
            <figure><a href="https://forms.office.com/Pages/ResponsePage.aspx?id=snownTLjw0OTqj5ySP_nfXToHUf00htBgwsjs7STbBFUNkJPMkgzSzVQWlc2TUxVT0lTS09OMzlYMi4u"><img src="../img/zonas/formulario_pandemia.webp" alt=""></a></figure>
            </td>
            <td>2) Completa el <a href="https://forms.office.com/Pages/ResponsePage.aspx?id=snownTLjw0OTqj5ySP_nfXToHUf00htBgwsjs7STbBFUNkJPMkgzSzVQWlc2TUxVT0lTS09OMzlYMi4u">formulario de solicitud</a>. Anota los datos de los materiales que necesitas.

            </td>
        </tr>
        <tr>
            <td>
            <figure><img src="../img/zonas/libros.webp" alt="Retiro de material" title="Retiro de material"></figure>
            </td>
            <td>
                3) Retiro del material. Espera el correo de Biblioteca con la fecha y hora asignada para el retiro de material.
            </td>
        </tr>
    </table>

    </main>
    <?php include '../../include/layout/footer.php';?>
</div><!-- Fin "container" -->
<script src="../js/funciones_index.js" async></script>
</body>
</html>
