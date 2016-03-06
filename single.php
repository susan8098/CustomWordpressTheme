<?php get_header(); ?>

<div class="singlePage">
  
  <!-- Featured Image -->
  <div class="featured-image-container" style="background-image: url('<?php echo hackeryou_get_thumbnail_url($post) ?>') ; background-size: cover;">
  </div> <!-- featured image -->

  <div class="wrapper">
    <div class="innerWrapper">

      <!-- Loop -->
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          
          <div class="subHeader">
            <h1 class="entry-title"><a href=" <?php the_permalink() ?> "> <?php the_title(); ?> </a></h1>
            <div class="divider"><img src="//localhost:3000/week7_Project/wp-content/themes/voyage/images/divider.png" alt=""></div>
          </div>

          <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages(array(
              'before' => '<div class="page-link"> Pages: ',
              'after' => '</div>'
            )); ?>
          </div><!-- .entry-content -->

          <div class="entry-meta">
            <?php hackeryou_posted_on(); ?>
          </div><!-- .entry-meta -->

          <div class="entry-utility">
            / <?php hackeryou_posted_in(); ?> /
            <?php edit_post_link( 'Edit this post', '<span class="edit-link">', '</span>' ); ?>
          </div><!-- .entry-utility -->

        </div><!-- #post-## -->

        <div id="nav-below" class="navigation">
          <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
          <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
        </div><!-- #nav-below -->

        <?php comments_template( '', true ); ?>

      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.wrapper -->
</div> <!-- /.main -->

<?php get_footer(); ?>