<?php $nombre_pagina = "index"; ?>
<?php include '../../include/layout/head.php';?>
<link rel="stylesheet" href="../css/index.css">
</head>

<body>
    <h1 class="outline">Biblioteca Universidad de Antofagasta</h1>
    <div id="container">
        <?php include '../../include/layout/header.php';?>
        <!-- Indicadores diarios, cabecera con los SVG, NAV (importado al final)-->
        <main>
            <!-- ======================== G E L A T I N A S ======================== -->
            <section id="secciones">
                <h2 class="outline">Botón de acceso a secciones</h2>

                <div id="boton_apoyo_investigacion" class="boton_gelatina">
                    <a href="apoyo_investigacion.php"><img loading="lazy" src="../img/boton-apoyo-investigacion.webp" alt="Apoyo a la investigación y a la publicación" title="Apoyo a la investigación y a la publicación"></a>
                </div>

                <div id="boton_apoyo_aprendizaje" class="boton_gelatina">
                    <a href="apoyo_aprendizaje.php"><img loading="lazy" src="../img/boton-apoyo-aprendizaje.webp" alt="Apoyo al aprendizaje" title="Apoyo al aprendizaje"></a>
                </div>

                <div id="boton-renovacion-online" class="boton_gelatina">
                    <a href="http://janium.uantof.cl/janium-bin/janium_login_opac_surm_lnk.pl"><img loading="lazy" src="../img/boton-renovacion-online.webp" alt="Renovación online" title="Renovación online"></a>
                </div>

                <div id="boton_servicios" class="boton_gelatina" onclick="mostrarDiv()">
                    <a href="javascript:void();"><img loading="lazy" src="../img/boton-servicios.webp" alt="Servicios" title="Servicios"></a>
                </div>

                <div id="boton_solicitud_dependencias" class="boton_gelatina">
                    <a href="actividades.php"><img loading="lazy" src="../img/boton-solicitud-dependencias.webp" alt="Solicitud de dependencias" title="Solicitud de dependencias"></a>
                </div>

                <div id="boton_repositorios" class="boton_gelatina" onclick="mostrarRepositorios()">
                    <a href="javascript:void();"><img loading="lazy" src="../img/boton-repositorios.webp" alt="Repositorios" title="Repositorios"></a>
                </div>

            </section>

        <!-- La div que debe aparecer -->
            <section id="servicios">
                <h2 class="outline">Servicios de Biblioteca</h2>
                <p><a href="https://forms.office.com/r/PETLNNrEjh">Consulta referencista</a> ■ <a href="prestamos_interbibliotecarios.php">Préstamos interbibliotecarios</a> ■  <a href="cuenta_remota.php">Creación de cuenta/Recuperación de contraseña</a><br><a href="javascript:void();">Solicitud de capacitación</a> ■ <a href="javascript:void();">Solicitud de apoyo a asignaturas</a> ■ <a href="https://forms.office.com/r/bbTcpgm6wK">Certificado de No Deuda para titulación</a> ■ <a href="https://forms.office.com/r/kPvmijvscV">Certificado de Retiro y Renuncia</a></p>
            </section>

        <!-- Colocar "javascript:void();" en href impide que al hacer click me envié hacia la parte superior de la página (con # pasa eso) -->

            <section id="repositorios">
                <h2 class="outline">Repositorios institucionales</h2>
                <p><a href="http://bibliodigital.uantof.cl/">Repositorio biblioteca digital</a> ■ <a href="javascript:void();">Repositorio Ciencia Abierta (pronto)</a> ■  <a href="http://desarrollocurricular.uantof.cl/redu/">Repositorio REDU</a></p>
            </section>

            <section id="about">
                <h2 class="outline">Menú canje y donación de material, estadísticas y monitor legislativo</h2>
                <ul>
                    <li><a href="canje_y_donacion.php">Canje y donación</a></li>
                    <li><a href="estadisticas.php">Estadísticas</a></li>
                    <li><a href="monitor.php">Monitor legislativo</a></li>
                </ul>
            </section>
            
            <!-- Sección VIDEOS de YouTube -->
            <br>

            <h3>Videos recomendados</h3>
            <section id="videos">
                <h2 class="outline">Video recomendados</h2>
                <!-- width 320, height 180 -->
                <div class="videoYT">
                <p class="media_canal">Planeta Formación y Universidades</p>
                <iframe src="https://www.youtube.com/embed/ijsrWdObnU0?si=idRi4Mc2wCcQjrr6" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <p class="media_titulo">IA, Educación y futuro</p>
                </div>

                <div class="videoYT">
                <p class="media_canal">UNIR | La Universidad de Internet</p>
                <iframe src="https://www.youtube.com/embed/88ZGFlUHxYk?si=ZIp3cA6LzYAldsu7&amp;controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <p class="media_titulo">La gamificación en el aula</p>
                </div>

                <div class="videoYT">
                <p class="media_canal">TEDx Talks</p>
                <iframe src="https://www.youtube.com/embed/1TQxM3lpCf4?si=682PQdRyryPNbu-p" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <p class="media_titulo">Sobrevivir en el aula</p>
                </div>
            </section><!-- Fin section VIDEOS -->


            <h3>Inteligencias artificiales</h3>
            <section id="ia">
                <section>
                        <figure class="logo-ia"><a href="https://chat.openai.com/" title="ChatGPT" target="_blank"><img src="../svg/logos-ia/chatgpt-logo-white.svg" alt="logo-chatgpt"></a><figcaption>ChatGPT</figcaption></figure>
                        <figure class="logo-ia"><a href="https://gemini.google.com/app?hl=es" title="Google Gemini" target="_blank"><img src="../svg/logos-ia/gemini-logo-white.svg" alt="Logo de Google Gemini"></a><figcaption>Gemini</figcaption></figure>
                        <figure class="logo-ia"><a href="https://copilot.microsoft.com/" title="Microsoft Copilot" target="_blank"><img src="../svg/logos-ia/copilot-logo-white.svg" alt="Logo de Microsoft Copilot"></a><figcaption>Copilot</figcaption></figure>
                        <figure class="logo-ia"><a href="https://claude.ai/" title="Anthropic Claude" target="_blank"><img src="../svg/logos-ia/claude-logo-white.svg" alt="Logo de Anthropic Claude"></a><figcaption>Claude</figcaption></figure>
                        <figure class="logo-ia"><a href="https://www.perplexity.ai/" title="perplexity" target="_blank"><img src="../svg/logos-ia/perplexity-logo-white.svg" alt="Logo de Perplexity"></a><figcaption>Perplexity</figcaption></figure>
                        <figure class="logo-ia"><a href="https://elicit.com/" title="Elicit research assistant. INVESTIGADORES" target="_blank"><img src="../svg/logos-ia/elicit-logo-white.svg" alt="Logo de Elicit"></a><figcaption>Elicit</figcaption></figure>
                        <figure class="logo-ia"><a href="https://www.semanticscholar.org/" title="Semantic Scholar, búsqueda por IA de literatura científica. INVESTIGADORES" target="_blank"><img src="../svg/logos-ia/semantic-scholar-logo-white.svg" alt="Logo de Semantic Scholar"></a><figcaption>Semantic Scholar</figcaption></figure>
                        
                </section>
                <section><p><a href="uso_ia.php">Uso ético de la IA.</a> | <a href="ia.php">Acceso a otras IA por clasificación.</a></p></section>
            </section>

            <h3>Articulaciones</h3>
            <section id="arti">
                <article id="beic" class="logo-ampliar">
                    <a href="https://beic.cl"><img src="../svg/logos-articulaciones/boton-horizontal-beic-white.svg" alt="BEIC"></a>
                </article>

                <article id="cabid" class="logo-ampliar">
                    <a href="http://cabid.cl/"><img src="../svg/logos-articulaciones/boton-horizontal-cabid-white.svg" alt="CABID"></a>
                </article>

                <article id="acacia" class="logo-ampliar">
                    <a href="https://acacia.red/"><img src="../svg/logos-articulaciones/boton-horizontal-acacia-white.svg" alt="Acacia"></a>
                </article>
            </section>

            <!-- Sección HORARIOS (Van en azul) -->
            <section id="horarios">
                <h2 class="outline">Horarios de atención</h2>
                <article>
                    <h3 class="outline">Horario Biblioteca Central</h3>
                    <span class="horarios_1">Biblioteca</span><br>
                    <span class="horarios_2">Central</span><br>
                    <p class="horarios_1">Lunes a JUEVES 08:00 a 20:00 h.<br>
                    Viernes 08:00 a 19:00 h | Sábado 09:00 a 12:30 h</p>
                    <span class="fono_biblioteca">55 2 637 <span class="destaque">707</span></span>
                </article>

                <hr>

                <article>
                    <h3 class="outline">Horario Ciencias Clínicas</h3>
                    <span class="horarios_1">Biblioteca</span><br>
                    <span class="horarios_2">Ciencias Clínicas</span><br>
                    <p class="horarios_1">Lunes a JUEVES 08:00 a 17:00 h.<br>
                    Viernes 08:00 a 16:00 h.</p>
                    <span class="fono_biblioteca">55 2 637 <span class="destaque">084</span></span>
                </article>

                <hr>

                <article>
                    <h3 class="outline">Horario Biblioteca Antropología</h3>
                    <span class="horarios_1">Biblioteca</span><br>
                    <span class="horarios_2">Antropología</span><br>
                    <p class="horarios_1">Lunes a JUEVES 08:00 a 17:00 h.<br>
                    Viernes 08:00 a 16:00 h.</p>
                    <span class="fono_biblioteca">55 2 637 <span class="destaque">846</span></span>
                </article>

                <hr>

                <article>
                    <h3 class="outline">Horario Bibliteca Ciencias del Mar</h3>
                    <span class="horarios_1">Biblioteca</span><br>
                    <span class="horarios_2">Ciencias del Mar</span><br>
                    <p class="horarios_1">Lunes a JUEVES 08:00 a 17:00 h.<br>
                    Viernes 08:00 a 16:00 h.</p>
                    <span class="fono_biblioteca">55 2 637 <span class="destaque">453</span></span>
                </article>
            </section><!-- Fin section #HORARIOS -->
        </main>

        <?php include '../../include/layout/footer.php';?>
    </div> <!-- Fin div#CONTAINER -->
    <script async src="../js/funciones.js"></script>
    <script async>
        const hijo_secciones = document.querySelector("#secciones").childNodes;
        const cards_articulaciones = document.querySelector("#articulaciones").childNodes;
        const boton_servicios = document.querySelector("#boton_servicios");
        const servicios = document.querySelector("#servicios");

        gelatinizar(hijo_secciones);
        gelatinizar(cards_articulaciones);
    </script>
</body>

</html>