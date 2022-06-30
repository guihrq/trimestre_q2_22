<?php
// Template Name: Single Display
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<section class="container produto_item animar-interno">
			<div class="grid-11">
				<img src="<?php the_field('foto_produto_1'); ?>" alt="Hidden <?php the_title(); ?>">
				<h2><?php the_title(); ?></h2>
			</div>
			<div class="grid-5 produto_icone"><img src="<?php the_field('icone_produto'); ?>" alt="Icone <?php the_title(); ?>"></div>
			<div class="grid-8"><img src="<?php the_field('foto_produto_2'); ?>" alt="Hidden <?php the_title(); ?>"></div>
			<div class="grid-8 produto_info">
				<?php the_content(); ?>
			</div>
		</section>

		<?php include(TEMPLATEPATH . "/includes/produtos-orcamento.php"); ?>
		
<?php endwhile; else: endif; ?>

<?php get_footer(); ?>