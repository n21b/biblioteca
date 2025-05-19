<?php $nombre_pagina = "ia"; ?>
<?php include '../../include/layout/head.php';?>
    <link rel="stylesheet" href="../css/tablas.css">
</head>
<body>
<h1 class="outline">Quiénes somos. Biblioteca Universidad de Antofagasta</h1>
<div id="container">
    <?php include '../../include/layout/header.php';?>
    <main id="contenido">
      <article>
            
      <h3>Chatbots y asistentes</h3>
      <ul class="punteo_01">
        <li><a href="https://www.chatpdf.com/" target="_blank">ChatPDF</a></li>
        <li><a href="https://pdf.ai/" target="_blank">PDF AI</a>: Para usar con PDFs.</li>
        <li><a href="https://www.humata.ai/" target="_blank">Humata</a>: Para resumir y analizar PDFs.</li>
        <li><a href="https://chromewebstore.google.com/detail/youtube-summary-with-chat/nmmicjeknamkfloonkhhcjmomieiodli?pli=1" target="_blank">YouTube summary</a> (Extensión Chrome).</li>
        <li><a href="https://askyourpdf.com/" target="_blank">Ask your PDF</a>: Trabaja con PDFs.</li>
      </ul>
      <br>

      <h3>Creación de contenidos</h3>
      <ul class="punteo_01">
        <li><a href="https://www.canva.com/es_es/" target="_blank">Canva</a>: Diseño práctico.</li>
        <li><a href="https://www.heygen.com/" target="_blank">HeyGen</a>: Crea audio y avatares para presentaciones.</li>
        <li><a href="https://www.slidesai.io/" target="_blank">Slides AI</a>: Creador de presentaciones.</li>
        <li><a href="https://generated.photos/faces" target="_blank">Generated faces</a>: Generador de caras aleatorias.</li>
        <li><a href="https://www.imagine.art/" target="_blank">Imagine</a>: Texto a imagen con un generador de arte IA.</li>
      </ul>
      <br>

      <h3>Herramientas para textos</h3>
      <ul class="punteo_01">
        <li><a href="https://quillbot.com/" target="_blank">Quillbot</a>: Herramienta para parafrasear.</li>
        <li><a href="https://ttsmaker.com/es" target="_blank">TTSMaker</a>: Texto a voz.</li>
        <li><a href="https://www.deepl.com/es/translator" target="_blank">DeepL</a>: Traductor de idiomas.</li>
      </ul>
      <br>

      <h3>Educación y capacitación</h3>
      <ul class="punteo_01">
        <li><a href="https://www.guidde.com/" target="_blank">Guidde</a>: Múltiple creación de contenidos, documentos, voz...</li>
        <li><a href="https://curipod.com/" target="_blank">Curipod</a>: Planificador de lecciones referente a cualquier tópico.</li>
        <li><a href="https://scribehow.com/" target="_blank">Scribe</a>: Creador de manuales paso a paso.</li>
        <li><a href="https://www.conker.ai/" target="_blank">Conker</a>: Creación y evaluación de pruebas especial para la sala de clases.</li>
        <li><a href="https://www.questionwell.org/" target="_blank">QuestionWell</a>: Asistente de profesores para generar documentos de evaluación.</li>
      </ul>
      <br>

      <h3>Investigación científica</h3>
      <ul class="punteo_01">
      <li><a href="https://easywithai.com/ai-research-tools/scispace/" target="_blank">SciSpace Copilot</a>: Asistente de investigación científica.</li>
      <li><a href="https://www.litmaps.com/" target="_blank">Litmaps</a>: Navegador personal de literatura.</li>
      <li><a href="https://consensus.app/search/">Consensus</a>: Encuentre respuestas en cualquier tópico de búsqueda.</li>
      <li><a href="https://jenni.ai/">jenni</a>: Motor de asistencia IA para papers</li>
      </ul>
      <br>

      <h3>Trabajo y productividad</h3>
      <ul class="punteo_01">
        <li><a href="https://play.google.com/store/apps/details?id=co.appnation.geniechat" target="_blank">GPT Genie</a>: Chat multimodal.</li>
        <li><a href="https://speechnotes.co/es/" target="_blank">Speechnotes</a>: Toma notas de lo que les vas diciendo (se necesita micrófono).</li>
        <li><a href="https://krisp.ai/" target="_blank">Krisp</a>: Asistente para reuniones y llamadas.</li>
        <li><a href="https://chromewebstore.google.com/detail/scribbl-ai-meeting-notes/kmjmlilenakedodldceipdnmmnfkahni" target="_blank">Scribbl</a> (extensión Chrome): Graba, transcribe y genera resúmenes de reuniones a través de Google Meet.</li>
        <li><a href="https://chromewebstore.google.com/detail/voice-control-for-chatgpt/eollffkcakegifhacjnlnegohfdlidhn" target="_blank">Voice Control for ChatGPT</a> (extensión Chrome): Permite establecer comunicación vía comandos de voz con ChatGPT (micrófono).</li>
        <li><a href="https://support.microsoft.com/es-es/office/transcribir-las-grabaciones-7fc2efec-245e-45f0-b053-2a97531ecf57" target="_blank">Office 365 transcriptor de archivo de audio a texto</a> (Manual).</li>
      </ul>
      <br>

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
