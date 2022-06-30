<?php get_header(); ?>

<div>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		<article class="">
			<h2 class=""><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
		</article>

	<?php endwhile; ?>

		<div class="">
			<?php next_posts_link( '← Posts Antigos' ); ?>
			<?php previous_posts_link( 'Posts Novos →' ); ?>
		</div>

	<?php else: endif; ?>

</div>



<?php get_footer(); ?>