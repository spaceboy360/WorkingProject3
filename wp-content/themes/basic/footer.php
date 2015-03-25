	<div id="footer">
		<?php wp_footer(); ?>
	</div>
      
	<div class="row white">
		<div class="container footer setwidth container-padding">
			<div class="col-xs-12">
				<h2 class="footertype1">The Chefs</h2>
				<br>
				<br>
			</div>

		
  <?php $args = array(
            'post_type'       =>'chef',
            'orderby'         =>'title',
            // 'posts_per_page'  => '6',
            );
          
          // WP LOOP
          $chef = new WP_Query( $args ); ?>
          
          <?php if ($chef->have_posts()) : while ($chef->have_posts()) : $chef->the_post(); ?>

  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 space5">    
      
   
	<a class="box" data-toggle="modal" data-target="#m<?php the_id();?>" href="<?php the_field('link');?> " target="_blank">
			<div class="content center88">
			
			 <!-- <p><?php the_field('hovertext');?></p>  -->
			</div>
		
			<div class="bg">
				<img src="<?php the_field('person');?>" alt="">
			</div>

			<div class="content center88">
				<h3 class="centercontent"><?php the_field('hovertitle');?></h3>
				<!-- <p><?php the_field('hovertext');?></p> -->
			</div>
	</a>




					<div class="modal fade" id="m<?php the_id();?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						      </div>
						      <div class="modal-body gray2">
						      		<div class="well size8">

  									<a class="box" href="<?php the_field('link');?> " target="_blank">
										<div class="content center88">
											<h3 class="centercontent"><?php the_field('hovertitle');?></h3>
											<!-- <p><?php the_field('hovertext');?></p> -->
										</div>
										
										<div class="bg">
											<img src="<?php the_field('person');?>" alt="">
										</div>
									</a>
									<?php the_field('hovertext');?>
    										
									</div>
						      </div>
						    </div>
						  </div>
						</div>






        

	
                           

      		  



  </div>

   <?php endwhile; else: ?>
      
    <p>Sorry, no food matched your criteria.</p>
    <?php endif; ?>


		</div>
		

		<div class="well noborder4">
				<div class="container squeeze">
					<div class="col-xs-3">
						<a target="_blank" href="http://www.google.com">
						<img class="img-responsive center3" src="<?php bloginfo('template_directory'); ?>/images/contact1.png" alt="logo"></a>
					</div>
					<div class="col-xs-3">
						<a target="_blank" href="">
						<img class="img-responsive center3" src="<?php bloginfo('template_directory'); ?>/images/contact2.png" alt="logo"></a>
					</div>
					<div class="col-xs-3">
						<a target="_blank" href="">
						<img class="img-responsive center3" src="<?php bloginfo('template_directory'); ?>/images/contact3.png" alt="logo"></a>
					</div>
					<div class="col-xs-3">
						<a target="_blank" href="">
						<img class="img-responsive center3" src="<?php bloginfo('template_directory'); ?>/images/contact4.png" alt="logo"></a>
					</div>
				</div>
			<div class="col-xs-12 center2 finalfont">
				<a href="mailto:Contact@Chefstable.com" class="btn center2">Contact@Chefstable.com</a>
			</div>

			<div class="col-xs-12 center2b finalfont">
				<p>Copyright 2015 Chefstable.com</p>
			</div>
		</div>
		
	</div>



</div><!-- x content -->
</body>
</html>