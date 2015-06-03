<?php

/*
	Template Name: Work page
*/

get_header();  ?>

<div class="main">
  <div class="container">

			
		<?php 
			if(have_posts()){
				while(have_posts()){
					the_post();
					?>

					<div class="wrapper">
						<?php  
						$portolioArgs = array('post_type' => 'portfolio');
						$portfolioQuery = new WP_Query($portolioArgs);

						if($portfolioQuery->have_posts()){
							while($portfolioQuery->have_posts()){
								$portfolioQuery->the_post();
								?>
									<div class="portfolio-items">
										<h4><?php the_title(); ?></h4>
										<h4><?php the_field('name'); ?></h4>
										<h4><?php the_field('short_desc'); ?></h4>
										<h4><?php the_field('long_desc'); ?></h4>
										
										<?php while( has_sub_field('images') ): ?>
										  <?php $image = get_sub_field('image'); ?>
										 <img src="<?php echo $image['sizes']['square'] ?>">
										<?php endwhile; ?>
									</div>	
									
									
								<?php
							}
							// End of while loop
							wp_reset_postdata();
						} // End of custom query


						?>
					</div>

					<?php
				}
			}

		 ?>
  </div> <!-- /.container -->
</div> <!-- /.main -->



<?php get_footer(); ?>