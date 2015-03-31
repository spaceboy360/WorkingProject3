<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      
      

     <?php the_content(); ?>
      <p>
      	 

           

       
       <div class="container setwidth">
           
                  
                         <h1><?php the_title(); ?></h1>
                              
                  <div class="col-xs-6 ">
                        <img class="img-responsive" src="<?php the_field('subthumbnail');?>" alt="">
                  </div>

        <div class="col-xs-6">
            <?php the_field('subfoodtext'); ?>
            <a href="<?php bloginfo('url');?>/home/" class="btn btn-primary btn-sm down88 margin2">Go Back</a>
        </div>

      </div>



      

      <div class="col-xs-6">
      	<img class="img-responsive" src="<?php the_field("image");?>" alt="">
      </div>

      </p>

  <?php comments_template(); ?>

	<?php endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

<?php get_footer(); ?>