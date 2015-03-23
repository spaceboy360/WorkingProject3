<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      
      

     <?php the_content(); ?>
      <p>
      	 

           

       
       <span class="container setwidth">
           
                  <span class="col-xs-6 ">
                         <h1><?php the_title(); ?></h1>
                              <?php echo get_the_date(); ?> by <?php the_author(); ?>
                        <img class="img-responsive" src="<?php the_field('thumbnail');?>" alt="">
                  </span>
      </span>



      <a href="<?php bloginfo('url');?>/home/" class="btn btn-primary btn-sm margin2">Go Back</a>

      <span class="col-xs-6">
      	<img class="img-responsive" src="<?php the_field("image");?>" alt="">
      </span>

      </p>

	<?php endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

<?php get_footer(); ?>