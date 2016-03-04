<footer>
  <div class="wrapper">

  	<div class="footerL">

		
		<?php  dynamic_sidebar( 'footer-widget-area' ); ?>

    	<p>&copy; Susan Lee <?php echo date('Y'); ?></p>

  	</div>

  	<div class="footerR">
  		<h2>Voyage</h2>
  		<p>483 Queen St W, <br>
  		   Toronto, ON M1M 2A1</p>
  		<p>info@voyage.com</p>
  	</div>

  </div>
</footer>

<script>
// scripts.js, plugins.js and jquery are enqueued in functions.php
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>