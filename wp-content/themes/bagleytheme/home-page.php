<?php

/*
	Template Name: Home Page
*/

get_header();  ?>
<div class="main">
  <div class="container">
  	

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>
      <section class="summary wrapper">
	      <div class="bio">
	     	<p><?php the_field('bio') ?></p>
	     </div>
     </section>
     <section class="items wrapper">
     	
		<div class="item">
			<img src="http://www.fillmurray.com/200/200" alt="">
			<h2>Lorem</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, ipsa.</p>
			<a href="#">View it Live</a>
		</div>
		<div class="item">
			<img src="http://www.fillmurray.com/200/200" alt="">
			<h2>Lorem</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, ipsa.</p>
			<a href="#">View it Live</a>
		</div>
		<div class="item">
			<img src="http://www.fillmurray.com/200/200" alt="">
			<h2>Lorem</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, ipsa.</p>
			<a href="#">View it Live</a>
		</div>
     </section>
	
    <?php endwhile; // end the loop?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>