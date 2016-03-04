<?php

/*
	Template Name: Full Page, No Sidebar
*/

get_header();  ?>

<div class="homeMain">
  <div class="wrapper">

  	<?php
  		$args = array('posts_per_page' => '1');
      $recent_posts = new WP_Query($args);
      while($recent_posts->have_posts()) {
        $recent_posts->the_post();
        ?>
  	     
        <a href=" <?php the_permalink() ?> " class="homeHero">
          <div class="latestPost" style="background-image: url('<?php echo hackeryou_get_thumbnail_url($post) ?>') ; background-size: cover;">

            <h2> <?php the_title() ?></h2>

            <p> <?php the_date(); ?> </p>

          </div>
        </a>

        <?php
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