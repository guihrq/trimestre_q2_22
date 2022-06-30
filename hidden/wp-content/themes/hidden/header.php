<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title><?php bloginfo('name'); ?><?php wp_title('-'); ?><?php the_field('title_seo'); ?></title>
		<meta name="description" content="<?php bloginfo('name'); ?><?php wp_title('-'); ?><?php the_field('description_seo'); ?>">

		<meta property="og:type" content="website"/>
		<meta property="og:title" content="<?php bloginfo('name'); ?><?php wp_title('-'); ?><?php the_field('title_seo'); ?>"/>
		<meta property="og:description" content="<?php bloginfo('name'); ?><?php wp_title('-'); ?><?php the_field('title_seo'); ?>"/>
		<meta property="og:url" content="<?php bloginfo('url') ?>"/>
		<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/og-image.png"/>

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">

		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">

		<!-- Inicio Wordpress Header -->
		<?php wp_head(); ?>
		<!-- Final Wordpress Header -->
	</head>
	<body>

		<?php include(TEMPLATEPATH . "/includes/modal.php"); ?>

		<header class="header">
			<div class="container">
				<nav class="navbar navbar-expand-sm bg-light fixed-top py-3 box-shadow">
					<div class="container-fluid">
						<a href="/home/" class="navbar-brand">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/hidden-logo.svg" alt="Hidden">
						</a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>

						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ms-auto">
							  
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
									<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
										<li><a class="dropdown-item" href="/exhibit1">Exhibit 1</a></li>
										<li><a class="dropdown-item" href="/exhibit2">Exhibit 2</a></li>
										<li><hr class="dropdown-divider"></li>
										<li><a class="dropdown-item" href="/exhibit3">Exhibit 3</a></li>
									</ul>
								</li>

								<li class="nav-item">
									<a class="nav-link" href="/home">Home</a>
								</li>

								<li class="nav-item">
									<a class="nav-link" href="/blog">Blog</a>
								</li>

								<li class="nav-item">
									<a class="nav-link" href="/display">Display</a>
								</li>

								<li class="nav-item me-3">
									<a class="nav-link" href="/display" data-bs-toggle="modal" data-bs-target="#modalLogin">Login</a>
								</li>

								<li class="nav-item">
									<a class="btn btn-outline-primary me-2" href="#inscricao">Inscreva-se</a>
								</li>
							  
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</header>