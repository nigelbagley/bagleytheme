<?php

/*
	Template Name: About page
*/

get_header();  ?>

<div class="main">
  <div class="container">

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      
      <?php the_content(); ?>
      <section class="wrapper">
      	<div class="about-picture">
      		<img src="http://www.fillmurray.com/1000/500" alt="">
      		<div class="down-arrow">
      			<i class="fa fa-chevron-down fa-5x"></i>
      		</div>
      	</div>
      </section>

      <section class="wrapper">
      	
		<div class="about-me">
			<h2><?php the_field('headline') ?></h2>
			<h3><?php the_field('subhead') ?></h3>
			<p><?php the_field('paragraph') ?></p>
			<p><?php the_field('paragraph') ?></p>
		</div>


      </section>

    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>