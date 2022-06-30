<?php
// Template Name: Display
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<?php 

			$args = array (
				'post_type' => 'display',
				'order' => 'ASC'
			);
			$the_query = new WP_Query ($args);

		?>

		<?php if ( $the_query->have_posts() ) : while ($the_query->have_posts() ) : $the_query->the_post(); ?>


			<section class="">
				<a href="<?php the_permalink(); ?>">
					<h2><?php the_title(); ?></h2>
				</a>
			</section>

		<?php endwhile; else: endif; ?>
		
		<?php wp_reset_query(); wp_reset_postdata(); ?>	

<?php endwhile; else: endif; ?>

<?php get_footer(); ?>