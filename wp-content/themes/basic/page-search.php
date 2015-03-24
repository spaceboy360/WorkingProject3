<?php get_header();
/*
Template Name: Search Page
*/
?>

<div class="row gray2 spaces">
	<div class="container setwidth">

		<div class="col-xs-12">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		  	<h1><?php the_title(); ?></h1>
		 	<?php the_content(); ?>

			 <?php endwhile; else: ?>
			    <p>Sorry, no pages matched your criteria.</p>
			<?php endif; ?>

		</div>

	</div>
</div>

<?php get_footer(); ?>

