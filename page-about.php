
<?php 

/*
  Template Name: About Page
*/

get_header();  ?>

<div class="aboutPage">
  <div class="wrapper">
    
      
      <div class="content clearfix">

        <?php // Start the loop ?>
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
          
          <div class="bio">
            
            <div class="subHeader">
              <h2><?php the_title(); ?></h2>
              <div class="divider"><img src="//localhost:3000/week7_Project/wp-content/themes/voyage/images/divider.png" alt=""></div>  
            </div>
            
            <?php the_content(); ?>
            
          </div> <!-- .bio -->

          <div class="profilePic-Container">
            <img src=" <?php echo hackeryou_get_thumbnail_url($post) ?> " alt="">

          </div> <!-- .profilePic -->

        <?php endwhile; // end the loop?>

      </div> <!-- /.content -->



  </div> <!-- /.wrapper -->
</div> <!-- /.main -->

<?php get_footer(); ?>