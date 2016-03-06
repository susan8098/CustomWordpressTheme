<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="wrapper">
    <nav>
      <div class="iconContainer">
        <a href=" <?php echo home_url( '/' ); ?> ">
          <img src=" <?php site_icon_url(); ?> " alt="">
        </a>
      </div> <!-- .iconContainer -->

      <!-- <h1>
        <a href="<?php //echo home_url( '/' ); ?>" title="<?php // bloginfo( 'name', 'display' ); ?>" rel="home">
          <?php //bloginfo( 'name' ); ?>
        </a>
      </h1> -->

      <?php wp_nav_menu( array(
        'container' => 'ul',
        'theme_location' => 'primary'
      )); ?>

     
      <?php get_search_form(); ?>

    </nav>


  </div> <!-- /.wrapper -->
</header><!--/.header-->

