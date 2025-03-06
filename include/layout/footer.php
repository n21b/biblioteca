<footer id="footer">
	<section id="rrss"><h2 class="outline">Redes sociales de Biblioteca</h2>
			<a href="mailto:biblioteca@uantof.cl" target="_blank"><img loading="lazy" src="../svg/mail_blanco.svg" alt="Correo Biblioteca UA" title="Correo Biblioteca UA"></a>
			<a href="tel:+56552637204"><img loading="lazy" src="../svg/celular_blanco.svg" alt="Llamar a Biblioteca UA" title="Llamar a Biblioteca UA"></a>
			<a href="https://www.facebook.com/bibliotecauantofagasta/" target="_blank"><img loading="lazy" src="../svg/facebook_blanco.svg" alt="facebook Biblioteca UA" title="facebook Biblioteca UA"></a>
			<a href="https://twitter.com/Biblioteca_UA" target="_blank"><img loading="lazy" src="../svg/twitter_blanco.svg" alt="twitter Biblioteca UA" title="twitter Biblioteca UA"></a>
			<a href="https://www.instagram.com/bibliotecauantofagasta/?hl=es-la" target="_blank"><img loading="lazy" src="../svg/instagram_blanco.svg" alt="Instagram Biblioteca UA" title="Instagram Biblioteca UA"></a>
			<a href="https://wa.me/message/W52CE3RJFVVOH1" target="_blank"><img loading="lazy" src="../svg/whatsapp_blanco.svg" alt="Grupo Whatsapp Biblioteca UA" title="Grupo Whatsapp Biblioteca UA"></a>
			<a href="https://www.youtube.com/channel/UCQY5FqN--Vb_HcKGe7fx8Mg" target="_blank"><img loading="lazy" src="../svg/youtube_white.svg" alt="Canal de YouTube Biblioteca UA" title="Canal de YouTube Biblioteca UA"></a>
			<a href="https://www.linkedin.com/in/biblioteca-universidad-de-antofagasta-01570a274" target="_blank"><img loading="lazy" src="../svg/linkedin-blanco.svg" alt="LinkedIn Biblioteca UA" title="LinkedIn Biblioteca UA"></a>
	</section>
	<img id="chungungo_footer" src="../img/chungunguito_RRSS.png">
	<p>Universidad de Antofagasta • Chile • <?php echo date("Y");?></p>

	<script src="../js/funciones.js"></script>
	<script>
		var chungungo_footer = document.querySelector("#chungungo_footer");
		var footer = document.querySelector("#footer");
		var rrss = document.querySelector("#rrss").childNodes;

		footer.addEventListener("mouseenter", function () {
			chungungo_footer.classList.add("chungungo_salir");
		});

		footer.addEventListener("mouseleave", function () {
			chungungo_footer.classList.replace("chungungo_salir", "chungungo_entrar");
		});

		/* La transición la termina el objeto, por eso es a él al que se le pone transitionend */
		chungungo_footer.addEventListener("transitionend", function () {
			chungungo_footer.classList.remove("chungungo_entrar");
		});

		gelatinizar(rrss);
	</script>
	
</footer>