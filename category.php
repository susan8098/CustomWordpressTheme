<?php get_header(); ?>

<div class="main">
  <div class="wrapper">
    <div class="innerWrapper">
      <h2>Category Archives: <?php single_cat_title(); ?></h2>
    	<?php
    		$category_description = category_description();
    		if ( ! empty( $category_description ) )
    			echo '' . $category_description . '';
    	   get_template_part( 'loop', 'category' );
        ?>

    </div> <!-- /.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>