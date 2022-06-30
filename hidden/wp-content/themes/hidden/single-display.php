<?php
// Template Name: Single Display
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		
<?php endwhile; else: endif; ?>

<?php get_footer(); ?>