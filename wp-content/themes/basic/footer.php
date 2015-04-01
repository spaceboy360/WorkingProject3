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
			</div>
	</a>




					<div class="modal fade" id="m<?php the_id();?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						      </div>
						      <div class="modal-body white" id="modal-box">
						      		<div class="white container-content-padding">

  									<a class="box" href="<?php the_field('link');?> " target="_blank">
										<div class="content center88">
											<!-- MODAL: IMAGE HOVER - content/text that appears in the image opacity overlay -->
											<h3 class="text-center">
												<?php the_field('hovertitle');?></h3>
										</div>
										<!-- hover - opacity overlay -->
										<div class="bg">
											<!-- MODAL: image of chef -->
											<img src="<?php the_field('person');?>" alt="" class="image-chef">
										</div>
									

										
									</a>

										<div class="chef-content-text">
											
												<!-- MODAL: content that appears next to the chef profile image -->
												<h3><?php the_field('chef-name');?></h3>
												<p>
													<?php the_field('hovertext');?>
												</p>
												<!-- MODAL: Button - link to chef's website and social media -->
											<div class="container setwidth">
												<a href="<?php the_field('link')?>"><button class="btn-primary">Chef Site</button></a>
											
												<a href="<?php the_field('link-twitter'); ?>" target="_blank"><i class="fa fa-twitter-square fa-2x icons-social-media" style="margin-left:12px;"></i></a>
												<a href="<?php the_field('link-facebook'); ?>" target="_blank"><i class="fa fa-facebook-square fa-2x icons-social-media"></i></a>
													<!-- DISQUIS COMMENTS -->
													
														
		  										
											</div>
										</div>

											
 
									
    										
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
		

		<div class="well noborder4 container-padding">

<!-- SOCIAL MEDIA ICONS - OLD ======================== -->

<!--
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
-->

<!-- SOCIAL MEDIA ICONS - NEW -->
			<div class="col-xs-12 container-social-media text-center">
				 
				 <a href="http://www.twitter.com/_chefstable" target="_blank"> <i class="fa fa-twitter-square fa-3x"></i> </a>
				 <a href="http://www.facebook.com/pages/Chefs-Table/573138929495384" target="_blank"> <i class="fa fa-facebook-square fa-3x"></i> </a>
				 <a href="http://www.pinterest.com/chefs_table" target="_blank"> <i class="fa fa-pinterest-square fa-3x"></i> </a>
				 <a href="http://instagram.com/_chefstable" target="_blank"> <i class="fa fa-instagram fa-3x"></i> </a>

			</div>

			<div class="col-xs-12 center2 finalfont">
				<a href="mailto:contact@chefstable.com" class="btn center2">contact@chefstable.com</a>
			</div>








			<div class="col-xs-12 center2 finalfont">
				<p>© 2015 chefstable.com</p>

			
		</div>

	
		
	</div>






</div><!-- x content -->
</body>
</html>