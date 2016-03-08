<?php

/*
	Template Name: Full Page, No Sidebar
*/

get_header();  ?>

<section class="homeMain">

    <?php
      $args = array('posts_per_page' => '1');
      $recent_posts = new WP_Query($args);

      while($recent_posts->have_posts()) {
        $recent_posts->the_post();
        ?>
         
        <a href=" <?php the_permalink() ?> " class="homeHero">
          <div class="latestPost" style="background: url('<?php echo hackeryou_get_thumbnail_url($post) ?>') ; background-size: cover; background-position: center;">

  
            <h1> <?php the_title() ?></h1>

            <p> <?php the_date(); ?> </p>

          </div>
        </a>

        <?php
      }
    ?> <!-- End of displaying the latest hero post -->

    

    <!-- Featured Travel Guides (using Guide Category) -->
    
  <div class="wrapper">
    <div class="subHeader">
      <h3>Featured Adventure</h3>
      <div class="divider"><img src="//localhost:8888/week7_Project/wp-content/themes/voyage/images/divider.png" alt=""></div>
    </div>

    <div class="featuredContainer">
      <!-- Loop getting the Guide Category -->
      <?php query_posts('category_name=Guide&showposts=6');
      while (have_posts()) : the_post();
        // do whatever you want
      ?>
          
        <div class="featuredContainer-post" style="background: linear-gradient(rgba(0, 0, 0, 0), rgba(1, 1, 1, 0.3)), url('<?php echo hackeryou_get_thumbnail_url($post) ?>') ; background-size: cover;">
            
          <div class="featuredContainer-post-text">
            <h2> <?php the_title() ?> </h2>
            <button><a href=" <?php the_permalink(); ?> ">Read Guide </a>  </button>
                  
          </div>
            
        </div>

      <?php endwhile; ?> <!-- end of featured posts -->
   
    </div>



    <?php // Start the loop ?>
    <?php //if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      
      <div class="subHeader">
        <h3>@voyagetravel on instagram</h3>
        <div class="divider"><img src="//localhost:8888/week7_Project/wp-content/themes/voyage/images/divider.png" alt=""></div>
      </div>

        <?php echo do_shortcode('[instagram-feed]') ?>
      
        <?php //the_content(); ?>   

    <?php //endwhile; // end the loop?>


  </div> <!-- /.container -->
</section> <!-- /.main -->

<?php get_footer(); ?>