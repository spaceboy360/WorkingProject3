<?php get_header();
/*
Template Name: Home2 Page
*/
?>


<div class="row gray2 down5">
    <div class="container setwidth type1 container-padding-v">

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

        <div class="col-xs-6 down4 ">    
               
                  <a class="box8 exmergencyborderdown1" href="<?php the_permalink();?> ">
                          <div class="content center88">
                            <h1 class="centercontent2"><?php the_field('mainfoodhovertitle');?></h1>
                            <img class="img-responsive" src="<?php the_field('person');?>" alt="">
                            <!-- <p><?php the_field(/*'hovertext'*/);?></p> -->
                          </div>
                          
                          <div class="bg">
                             <img class="img-responsive" src="<?php the_field('thumbnail');?>" alt="">  
                          </div>
                  </a>
        </div>





                        





         <?php endwhile; else: ?>
            
          <p>Sorry, no food matched your criteria.</p>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>

      </div>


  <div class="container setwidth">
  <?php $args = array(
            'post_type'       =>'subfood',
            'orderby'         =>'title',
            // 'posts_per_page'  => '6',
            );
          
          // WP LOOP
          $subfood = new WP_Query( $args ); ?>
          
          <?php if ($subfood->have_posts()) : while ($subfood->have_posts()) : $subfood->the_post(); ?>

  <!-- <div class="col-xs-4 ">     -->
      <!-- <a href="<?php the_permalink();?>"> -->
          <!-- <img class="img-responsive" src="<?php the_field('subthumbnail');?>" alt="">                        -->
      <!-- </a>     -->
  <!-- </div> -->

          <a class="box2" href="<?php the_permalink();?> ">
              <div class="content2 center88">
                <h3 class="centercontent"><?php the_field('foodhovertitle');?></h3>
                <!-- <p><?php the_field('hovertext');?></p> -->
              </div>
              
              <div class="bg">
                <img src="<?php the_field('subthumbnail');?>" alt="">
              </div>
          </a>






   <?php endwhile; else: ?>
      
    <p>Sorry, no food matched your criteria.</p>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
</div>

  

  
    </div>
  </div>


 



<?php get_footer(); ?>

