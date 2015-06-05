<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link href='http://fonts.googleapis.com/css?family=Hind:700,500|Open+Sans:400,600' rel='stylesheet' type='text/css'>
  
  <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>

  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.3.0/animate.min.css">
  
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">


  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<header>
  <div class="container flexContainer">
  <a href="#"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     width="72px" height="72px" viewBox="0 0 72 72" enable-background="new 0 0 72 72" xml:space="preserve">
  <path fill="#FFFFFF" d="M57.938,43.569c0-3.401-1.066-6.309-3.203-8.725c-2.135-2.416-4.947-3.623-7.939-3.623
    c-0.483,0-0.795,0.047-1.795,0.143V16H35v27.166c0-3.493-0.445-6.218-2.078-8.175c-2.027-2.435-4.518-3.799-7.843-3.869L25.267,31
    H14v11.438v2.226V56h9V42.269c0-1.392,0.356-2.087,1.487-2.087c1.149,0,1.513,0.695,1.513,2.087V56h9h1.442H45h1.822
    c0,0,0.729-0.053,1.678-0.213c0.246-0.039,0.49-0.084,0.729-0.14c0.136-0.028,0.272-0.06,0.41-0.093l-0.012-0.011
    c1.907-0.525,3.596-1.576,5.055-3.179C56.854,49.982,57.938,47.05,57.938,43.569z M48.916,46.084C48.313,46.742,47.61,47,46.745,47
    c-0.664,0-1.416,0-1.745,0v-6.309c1-0.49,1.107-0.438,1.688-0.438c0.823,0,1.621,0.404,2.188,1.062
    c0.567,0.66,0.913,1.475,0.913,2.443C49.79,44.697,49.52,45.424,48.916,46.084z"/>
  </svg></a>


    <?php wp_nav_menu( array(
      'container' => false,
      'theme_locations' => 'primary'
    )); ?>
  </div> <!-- /.container -->
</header><!--/.header-->

