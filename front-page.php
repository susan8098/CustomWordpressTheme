<?php

/*
	Template Name: Full Page, No Sidebar
*/

get_header();  ?>

<div class="main">
  <div class="wrapper">
  	<div class="latestPost" style="background-image: url(<?php echo hackeryou_get_thumbnail_url($post) ?>); height: 500px">
  		
  	</div>

  	<?php
  		$args = array('numberposts' => '1');
  	    $recent_posts = wp_get_recent_posts($args);
  	    foreach( $recent_posts as $recent ) {
  	    	echo '<li><a href="' . get_permalink($recent["ID"]) . '">' . $recent["post_title"].'</a> </li>';
  	    }
  	?>

  

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>

    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>