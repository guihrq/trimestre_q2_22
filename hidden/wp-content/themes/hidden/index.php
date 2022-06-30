<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<h1><?php the_title(); ?></h1>
	<p><?php the_content(); ?></p>

<?php endwhile; else: ?>

	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
	            <div class="error-template mt-3 text-center">
	                <h1>
	                    Oops!</h1>
	                <h2>
	                    404 Não Encontrado</h2>
	                <div class="error-details">
	                    Desculpe, ocorreu um erro. Página não encontrada.
	                </div>
	                <div class="error-actions">
	                    <a href="http://www.jquery2dotnet.com" class="btn btn-primary btn-lg mx-2 my-5"><span class="glyphicon glyphicon-home"></span>
	                        Leve me para o Início </a><a href="/home" class="btn btn-secondary btn-lg"><span class="glyphicon glyphicon-envelope"></span> Suporte </a>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

<?php endif; ?>

<?php get_footer(); ?>