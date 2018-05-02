<?php
/* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials */
?>

		<?php if ( ! is_page(6) ) : ?>
		<footer class="site-footer" role="contentinfo">
			<div class="wrapper">
				<div class="footer-menu">
					<div class="col5">
						<div class="col5-1">
							<ul>
								<li>Sobre o SbS</li>
								<li><a href="http://localhost/hpe/programa">Programa</a></li>
								<li><a href="http://localhost/hpe/produto">Produtos</a></li>
								<li><a href="http://localhost/hpe/premios">Prémios</a></li>
								<li><a href="http://localhost/hpe/campanhas">Campanhas</a></li>
								<li><a href="http://localhost/hpe/noticias">Notícias</a></li>
							</ul>
						</div>
						<div class="col5-2">
							<ul>
								<li>Mantenha-se ligado</li>
								<li><a href="">Facebook</a></li>
								<li><a href="">Twitter</a></li>
								<li><a href="">Youtube</a></li>
							</ul>

						</div>
						<div class="col5-3">
							<ul>
								<li>Parceiros</li>
								<li><a href="">Área pessoal</a></li>
								<li><a href="http://localhost/hpe/contactos">Contacte-nos</a></li>
								<li><a href="">Logout</a></li>
							</ul>
						</div>
						<div class="col5-4">
							<ul>
								<li>Termos e Condições</li>
								<li><a href="http://www8.hp.com/pt/pt/personal-data-rights.html" target="_blank">Direitos dos dados pessoais</a></li>
								<li><a href="https://www.hpe.com/us/en/legal/privacy.html" target="_blank">Privacidade</a></li>
								<li><a href="http://www8.hp.com/pt/pt/privacy/terms-of-use.html" target="_blank">Termos de utilização</a></li>
							</ul>
						</div>
						<div class="col5-5">
						</div>
					</div>
					<p class="hp-copyright">© Copyright 2015-2018 Hewlett Packard Enterprise Development LP. Todos os direitos reservados.<br>Os produtos e os nomes de empresas mencionados são marcas comerciais dos seus respetivos proprietários.</p>
				</div>
			</div>
		</footer>
		<?php endif; ?>

	</div> <!--.site -->

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', '', 'auto');
		ga('send', 'pageview');
	</script>

	<script type="application/ld+json">
		{
		"@context" : "http://schema.org",
		"@type" : "Organization",
		"url": "http://www.hpesidebyside.pt",
		//"logo": "",
		"name": "HPE",
		"brand": "Side by Side",
		}
	</script>

	<?php wp_footer(); ?>
</body>
</html>
