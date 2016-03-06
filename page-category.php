
<?php 

/*
  Template Name: Category Page
*/

get_header();  ?>

<div class="aboutPage">
  <div class="wrapper">
      
    <div class="innerWrapper">

      <div class="subHeader">
        <h3>Europe</h3>
        <div class="divider"><img src="//localhost:3000/week7_Project/wp-content/themes/voyage/images/divider.png" alt=""></div>
      </div>

      <div class="featuredContainer">
        <!-- Loop getting the Guide Category -->
        <?php query_posts('category_name=Europe&showposts=6');
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
      
      </div> <!-- .featuredContainer -->

    </div> <!-- innerWrapper -->



  </div> <!-- /.wrapper -->
</div> <!-- /.main -->

<?php get_footer(); ?>