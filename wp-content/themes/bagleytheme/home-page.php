<?php

/*
	Template Name: Home Page
*/

get_header();  ?>
<div class="main">



  <!-- about begins -->
  	    <?php // Start the loop ?>
  	    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

  	      
  	      <section class="wrapperImg">
  	      	<div class="about-picture">
  	      		<div class="image">
  	      		<h2><?php the_field('headline') ?></h2>
  				<h3><?php the_field('subhead') ?></h3>
  				<div class="social-icons-top">
					<a href="#"><i class="fa fa-facebook-official fa-2x"></i></a>
					<a href="#"><i class="fa fa-instagram fa-2x"></i></a>
					<a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
					<a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
					<a href="#"><i class="fa fa-github-square fa-2x"></i></a>
					<a href="#"><i class="fa fa-medium fa-2x"></i></a>
				</div>

  	      		<img src="<?php bloginfo('template_directory') ?>/img/me_2.jpg" " alt="">
  	      		</div>
  	      		
  	      	

  	      		    <!-- <div class="animated infinite pulse down-arrow">
  	      		    	<i class="fa fa-chevron-down fa-5x"></i>
  	      		    </div> -->

  	      	</div>
  	      </section>

  	      <section  class="wrapperImg padding">
  	      	
  			<div id="#about" class="about-me">
  				<h2><?php the_field('headline_two') ?></h2>
  				<p><?php the_field('paragraph') ?></p>

  			</div>

  	      </section>

  	    <?php endwhile; // end the loop?>
  	  

  
     <section id="#portfolio" class="items orange padding">
	<div class="wrapper portfolio">
		<h3>Portfolio</h3>
	</div>
     <?php 
     	if(have_posts()){
     		while(have_posts()){
     			the_post();
     			?>

     			<div class="wrapper flex ">
				
     				<?php  
     				$portolioArgs = array('post_type' => 'portfolio');
     				$portfolioQuery = new WP_Query($portolioArgs);

     				if($portfolioQuery->have_posts()){
     					while($portfolioQuery->have_posts()){
     						$portfolioQuery->the_post();
     						?>

     							<div class="portfolio-items">
     							
     								<div id="portfolio" class="portfolio-content">

     									<?php while( has_sub_field('images') ): ?>
     									  <?php $image = get_sub_field('image'); ?>
     									 	<img src="<?php echo $image['url'] ?>">
     									<?php endwhile; ?>

     									<h4><?php the_title(); ?></h4>
     									<p><?php the_field('short_desc'); ?></p>
     									<?php the_field('live_link'); ?>
     								</div>
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
</section>
    <section id="#contact" class="contact padding">
		<div class="wrapper">
		<h3>Contact</h3>
			<?php the_content(); ?>
		</div>
	</section>



</div> <!-- /.main -->

<?php get_footer(); ?>