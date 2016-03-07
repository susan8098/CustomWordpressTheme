<?php get_header(); ?>

<div class="main">
  <div class="wrapper">

    <div class="innerWrapper">
      <h2>Tag Archives: <?php single_tag_title(); ?></h2>
      <?php get_template_part( 'loop', 'tag' ); ?>
    </div> <!-- /.content -->

    <?php get_sidebar(); ?>

  </div><!-- /.container -->
</div><!-- /.main -->

<?php get_footer(); ?>