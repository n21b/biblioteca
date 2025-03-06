<nav>
    <h2 class="outline">Menú de navegación principal</h2>
    <section id="menu">
        <h2 class="outline">Menú quiénes somos, preguntas frecuentes y reglamento oficial</h2>
        <ul>
            <?php
                /* Si la variable $nombre_pagina no es ... muestra ... sino, no muestres nada (null) */
                echo ($nombre_pagina != "index" ? '<li><a href="index.php">Inicio</a></li>' : null);
                echo ($nombre_pagina != "quienes_somos" ? '<li><a href="quienes_somos.php">Quiénes somos</a></li>' : null);
                echo ($nombre_pagina != "canje_y_donacion" ? '<li><a href="faq.php">Preguntas frecuentes</a></li>' : null);
            ?>
            <li><a href="../doc/Reglamento_oficial.pdf" target="_blank">Reglamento oficial</a></li>
            <li><a href="http://www.intranet.uantof.cl/siac/gbiblio.asp" target="_blank">Sistema de Gestión de Calidad</a></li>
            <?php
                echo ($nombre_pagina != "multas" ? '<li><a href="multas.php" target="_blank">Valores multa</a></li>' : null);
            ?>
        </ul>
    </section>

    <section id="catalogo">
        <h2 class="outline">Menú catálogo, renovación online, búsqueda simultánea, recursos digitales contratados por la universidad y recursos de acceso abierto </h2>

        <ul>
            <li><a href="http://janium.uantof.cl/opac" target="_blank">Catálogo</a></li>
            <li><a href="recursos_digitales.php" target="_blank">Recursos digitales</a></li>
            <li><a href="recursos_digitales_free.php" target="_blank">Recursos de acceso abierto</a></li>
        </ul>

        <section id="zona-descubridor">
            <form action="https://itms.libsteps.com/UA/" method="post" target="_blank">
                <input type="hidden" name="m" value="direct">
                <input type="hidden" name="charset" value="utf-8">
                <input type="hidden" name="userid" value="">
                <input type="hidden" name="dbGroup" value="0" checked><label for="dbG1"></label>
                Descubridor &nbsp; <input id="campo_descubridor" type="text" name="text1" value="" placeholder="Ingrese tema"> &nbsp;
                <button id="submit_descubridor" type="submit" value=""></button>
            </form>

            <div class="popup" id="popup">
                <p>Búsqueda simultánea en todos los recursos.</p>
            </div>
        </section><!-- Fin zona-descubridor -->
    
    </section>


    <script defer>
        const descubridor = document.querySelector("#descubridor");
        const popup = document.querySelector("#popup");

        descubridor.addEventListener("mouseenter", ()=>{
            popup.style.opacity = 1;
        });

        descubridor.addEventListener("mouseleave", ()=>{
            popup.style.opacity = 0;
        });
    </script>





</nav>