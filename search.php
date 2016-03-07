<?php get_header(); ?>
<div class="search">
	<div class="wrapper">

		<div class="innerWrapper">
			<?php if ( have_posts() ) : ?>

				<h2>Search Results for: <?php echo get_search_query(); ?></h2>
				<?php get_template_part( 'loop', 'search' ); ?>

			<?php else : ?>

				<h2>Nothing Found</h2>
				<p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
				<?php get_search_form(); ?>

				<p>see our latest posts...</p>

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

			<?php endif; ?>
		</div> <!-- /.content -->



	</div><!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>
