		<footer class="bg-dark text-white mt-auto">
			<div class="container py-4">
				<div class="row">
					<div class="col-md-3 col-6">
					<h4 class="h6">PÁGINAS</h4>
					<ul class="list-unstyled">
						<li><a href="/home">Home</a></li>
						<li><a href="/blog">Blog</a></li>
						<li><a href="#inscricao">Inscreva-se</a></li>
					</ul>
				</div>

				<div class="col-md-3 col-6">
					<h4 class="h6">LOCAIS</h4>
					<ul class="list-unstyled">
						<li><a href="#">California</a></li>
						<li><a href="#">Paris</a></li>
						<li><a href="#">Dublin</a></li>
					</ul>
				</div>

				<div class="col-md-4">
					<h4 class="h6">DADOS DE CONTATO</h4>
					<ul class="list-unstyled text-secondary">
						<li><a href="malito:contato@hidden.com.br"></a>contato@hidden.com.br</li>
						<li>21 99999-9999</li>
						<li>De Seg. à Sex. das 8h às 18h</li>
					</ul>
				</div>

				<div class="col-md-2">
					<h4 class="h6">REDES SOCIAIS</h4>
					<ul class="list-unstyled">
						<li><a class="btn btn-outline-secondary btn-sm mb-2 w-100" href="#" style="max-width: 140px">Facebook</a></li>
						<li><a class="btn btn-outline-secondary btn-sm mb-2 w-100" href="#" style="max-width: 140px">Twitter</a></li>
						<li><a class="btn btn-outline-secondary btn-sm mb-2 w-100" href="#" style="max-width: 140px">Youtube</a></li>
					</ul>
				</div>

				</div>
			</div>
			<div class="bg-primary text-center py-3">
				<p class="mb-0"><?php bloginfo('name'); ?> © <?php the_time('Y'); ?>. Alguns direitos reservados.</p>
			</div>
		</footer>

		<!-- JavaScript -->
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.6.0.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/popper.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
		<!-- JavaScript -->

	<!-- Inicio Wordpress Footer -->
	<?php wp_footer(); ?>
	<!-- Final Wordpress Footer -->

	</body>
</html>