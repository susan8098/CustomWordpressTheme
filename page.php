<?php get_header();  ?>

<div class="aboutPage">
  <div class="wrapper">
    

    <div class="content">

        <?php // Start the loop ?>
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            
            <h2><?php the_title(); ?></h2>
            <div class="divider"><img src="//localhost:3000/week7_Project/wp-content/themes/voyage/images/divider.png" alt=""></div>
            <?php the_content(); ?>
            
          </div> <!-- .bio -->

        <?php endwhile; // end the loop?>

    </div> <!-- /.content -->



  </div> <!-- /.wrapper -->
</div> <!-- /.main -->

<?php get_footer(); ?>