
<?php get_header(); ?>

<section class="blog">
  <div class="wrapper">

  	<div class="innerWrapper">
  		
	  	<?php // Start the loop ?>
	 
  		<?php
  		$args = array('posts_per_page' => '4');
  	    $recent_posts = new WP_Query($args);
  	    while($recent_posts->have_posts()) {
  	      $recent_posts->the_post();
  	      ?>

		  	<div class="post">

				<!-- Showing blog title and time -->
				<h2><a href=" <?php the_permalink() ?> "> <?php the_title(); ?> </a> </h2>
			  	<h5> <?php the_time('F j Y'); ?> </h5>
				
				<!-- Thumbnail Photo -->
			  	<div class="featuredPhoto" style="background-image: url('<?php echo hackeryou_get_thumbnail_url($post) ?>') ; background-size: cover; background-position: center;"></div>

			  	<p> <?php the_excerpt(); ?> </p>

		  	</div>
		 
	       	<?php

	     }
	 	?>

		  	<?php echo do_shortcode('[ajax_load_more]');?>

	    <?php //get_template_part( 'loop', 'index' );	?>
	
  	</div> <!-- .innerWrapper -->	

  </div> <!-- /.wrapper -->
</section> <!-- /.blog -->

<?php get_footer(); ?>