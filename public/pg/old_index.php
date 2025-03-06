<?php $nombre_pagina = "index"; ?>
<?php include '../../include/layout/head.php';?>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>

<div id="container">


    <?php include '../../include/layout/header.php';?>
    <!-- 
        - Indicadores diarios.
        - Cabecera con los SVG.
        - NAV (importado al final)
    -->

    <main>

        <!-- Sección de los botones que rebotan (en donde aparece CHUNGUNGO) -->
        <section id="secciones"><div id="boton_aviso_importante"><img loading="lazy" src="../img/boton_aviso_importante.jpg" alt="Aviso importante" title="Aviso importante"></div><div id="boton_apoyo_aprendizaje"><a href="guias_tematicas.php"><img loading="lazy" src="../img/boton_apoyo_aprendizaje.jpg" alt="Apoyo al aprendizaje" title="Apoyo al aprendizaje"></a></div><div id="boton_cuenta_remota"><a href="cuenta_remota.php"><img loading="lazy" src="../img/boton_cuenta_remota.jpg" alt="Solicitar cuenta remota" title="Solicitar cuenta remota"></a></div><div id="boton_solicitud_dependencias"><a href="https://forms.office.com/Pages/ResponsePage.aspx?id=snownTLjw0OTqj5ySP_nfXToHUf00htBgwsjs7STbBFUQkFWSTZENjhVTDU1REExN0ZOV1JRR1pRNS4u"><img loading="lazy" src="../img/boton_dependencias.jpg" alt="Solicitud de dependencias" title="Solicitud de dependencias"></a></div><div id="boton_monitor_legislativo"><a href="monitor.php"><img loading="lazy" src="../img/boton_monitor_legislativo.jpg" alt="Monitor legislativo" title="Monitor legislativo"></a></div><div id="boton_chungungo"><img loading="lazy" src="../img/chungungo.jpg" alt="Chungungo" title="Chungungo"></div></section>

        <section id="about">
            <ul>
                <li><a href="quienes_somos.php">Quiénes somos</a></li>
                <li><a href="faq.php">Preguntas frecuentes</a></li>
                <li><a href="../doc/Reglamento_oficial.pdf" target="_blank">Reglamento oficial</a></li>
                <li><a href="#">Gestión de calidad</a></li>
            </ul>
        </section>

        <!-- Sección VIDEOS -->

        <h3>Videos de divulgación científica recomendados</h3>
        <section id="videos">
        <!-- Width 320, height 180 -->
            <div class="videoYT">
                <iframe loading="lazy" src="https://www.youtube.com/embed/-qyYrfniefc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                
                <p class="media_titulo">Matemáticas:<br>¿invención o descubrimiento?</p>
                <p class="media_canal">Date un vlog</p>
            </div>
            <div class="videoYT">
                <iframe loading="lazy" src="https://www.youtube.com/embed/QxdiL62OPTQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                
                <p class="media_titulo">¿Podría haber galaxias de antimateria?</p>
                <p class="media_canal">El Robot de Platón</p>
            </div>
            <div class="videoYT">
                <iframe loading="lazy" src="https://www.youtube.com/embed/p3TNNCYCzZw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <p class="media_titulo">Publicaciones científicas.</p>
                <p class="media_canal">Escuela de Pedagogía PUCV</p>
            </div>
        
        </section>

        <!-- Fin sección VIDEOS -->



        <!-- Sección AUDIOCASTS -->
        <h3>Audiocasts científicos</h3>
        <section id="audiocasts">
        
            <div class="audio">
                <audio controls>
                    <source src="../audios/ciencia_cierta_humildad_vista_por_la_ciencia.mp3" type="audio/mpeg">
                </audio>
                    <p class="media_titulo">Humildad vista por la ciencia</p>
                    <p class="media_canal">Ciencia Cierta</p>
            </div>

            <div class="audio">
                <audio controls>
                    <source src="../audios/ciencia_cierta_limite_de_la_longitud.mp3" type="audio/mpeg">
                </audio>
                    <p class="media_titulo">Límite de la longitud</p>
                    <p class="media_canal">Ciencia Cierta</p>
            </div>

            <div class="audio">
                <audio controls>
                    <source src="../audios/inteligencia_artificial_desempleo.mp3" type="audio/mpeg">
                </audio>
                    <p class="media_titulo">Inteligencia artificial y desempleo</p>
                    <p class="media_canal">Días Extraños</p>
            </div>
        </section>
        <!-- Fin #AUDIOCAST -->




        <!-- Sección HORARIOS (Van en azul) -->
        <section id="horarios">
            <article>
                <span class="horarios_1">Biblioteca</span><br>
                <span class="horarios_2">Central</span><br>
                Lunes a jueves 09:00 a 20:00 h.<br>
                Viernes 09:00 a 19:00 h.<br>
                Sábado: 09:00 a 13:00 h.<br>
            </article>

            <hr>

            <article>
                <span class="horarios_1">Biblioteca</span><br>
                <span class="horarios_2">Ciencias Clínicas</span><br>
                Lunes a jueves 09:00 a 20:00 h.<br>
                Viernes 09:00 a 19:00 h.<br>
            </article>

            <hr>

            <article>
                <span class="horarios_1">Biblioteca</span><br>
                <span class="horarios_2">Antropología</span><br>
                Lunes a jueves 09:00 a 13:30 h • 14:00 a 18:00 h.<br>
                Viernes 09:00 a 13:30 h • 14:00 a 17:00 h.<br>
            </article>

            <hr>

            <article>
                <span class="horarios_1">Biblioteca</span><br>
                <span class="horarios_2">Ciencias del Mar</span><br>
                Lunes a jueves 09:00 a 13:30 h • 14:00 a 18:00 h.<br>
                Viernes 09:00 a 13:30 h • 14:00 a 17:00 h.<br>
            </article>
        </section><!-- Fin section #HORARIOS -->


    </main>

        
    <?php include '../../include/layout/footer.php';?>



</div> <!-- Fin div#CONTAINER -->



<script src="../js/funciones_index.js"></script>
</body>
</html>

