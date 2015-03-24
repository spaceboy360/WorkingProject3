<?php get_header();
/*
Template Name: Search Page
*/
?>

<div class="container setwidth">
  <?php 

if(isset($_GET['search']))
    {
      $search = $_GET['search'];
    }
else 
    {
     $search = null;
    }


 $mainargs = array(
            'post_type'       =>'mainfood',
            'orderby'         =>'rand',
            // 'posts_per_page'  => '6',
            
           's'           => $search
            );
          
          // WP LOOP
          $mainfood = new WP_Query( $mainargs ); ?>
          
          <?php if ($mainfood->have_posts()) : while ($mainfood->have_posts()) : $mainfood->the_post(); ?>

  <div class="col-xs-6 down4">    
      <a href="<?php the_permalink();?>">
          <img class="img-responsive" src="<?php the_field('thumbnail');?>" alt="">                       
      </a>    
  </div>

  <div class="col-xs-6">
            <?php the_field('thumbnailtext'); ?>
            <a href="<?php bloginfo('url');?>/home/" class="btn btn-primary btn-sm margin2 down88">Go Back</a>
  </div>

   <?php endwhile; else: ?>
      
    <p>Sorry, no food matched your criteria.</p>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>

    <!-- Other sub food -->

    

</div>


<?php get_footer(); ?>

