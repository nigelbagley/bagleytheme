<footer>
  <div class="container flexContainer flex align">
  
    <p>&copy; Nigel Bagley <?php echo date('Y'); ?></p>
    <!--  <a href="#"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     width="72px" height="72px" viewBox="0 0 72 72" enable-background="new 0 0 72 72" xml:space="preserve">
  <path fill="#FFFFFF" d="M57.938,43.569c0-3.401-1.066-6.309-3.203-8.725c-2.135-2.416-4.947-3.623-7.939-3.623
    c-0.483,0-0.795,0.047-1.795,0.143V16H35v27.166c0-3.493-0.445-6.218-2.078-8.175c-2.027-2.435-4.518-3.799-7.843-3.869L25.267,31
    H14v11.438v2.226V56h9V42.269c0-1.392,0.356-2.087,1.487-2.087c1.149,0,1.513,0.695,1.513,2.087V56h9h1.442H45h1.822
    c0,0,0.729-0.053,1.678-0.213c0.246-0.039,0.49-0.084,0.729-0.14c0.136-0.028,0.272-0.06,0.41-0.093l-0.012-0.011
    c1.907-0.525,3.596-1.576,5.055-3.179C56.854,49.982,57.938,47.05,57.938,43.569z M48.916,46.084C48.313,46.742,47.61,47,46.745,47
    c-0.664,0-1.416,0-1.745,0v-6.309c1-0.49,1.107-0.438,1.688-0.438c0.823,0,1.621,0.404,2.188,1.062
    c0.567,0.66,0.913,1.475,0.913,2.443C49.79,44.697,49.52,45.424,48.916,46.084z"/>
  </svg></a> -->
    <div class="social-icons">
	    <a href="https://www.facebook.com/nigel.bagley" target="_blank"><i class="fa fa-facebook-official fa-2x"></i></a>
	    <a href="https://instagram.com/callmenigel/" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
	    <a href="https://twitter.com/theycallmenigel" target="_blank"><i class="fa fa-twitter-square fa-2x"></i></a>
	    <a href="https://www.linkedin.com/pub/nigel-bagley/51/936/b62" target="_blank"><i class="fa fa-linkedin-square fa-2x"></i></a>
	    <a href="https://github.com/nigelbagley" target="_blank"><i class="fa fa-github-square fa-2x"></i></a>
    </div>
 

  </div>
</footer>

<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<!-- <script src="js/jquery.smooth-scroll.js"></script> -->

<script>
  

  $(function() {
      $('a').smoothScroll({
          offset: -60, /* adds spacing before the section */
          speed: 1000, /* ms, smoother the longer the speed */
          easing: 'swing'
      });
</script>

<?php wp_footer(); ?>

</body>
</html>