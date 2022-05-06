<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/blog/">
    <!--Font awesome-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>
        <?php bloginfo('name'); ?> | 
        <?php is_front_page() ? bloginfo('description'): wp_title();?>
        <?php wp_title(); ?> 

    </title>
    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

    <?php wp_head();?>
  </head>
  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
        <?php /*
            wp_nav_menu( array(
            'menu'              => 'primary',
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'			=> new wp_bootstrap_navwalker())
	        );*/
          ?> 
          <a href="<?php echo site_url();?>" class="blog-nav-item active">Home</a>
          <a href="<?php echo site_url('/?page_id=42')?>" class="blog-nav-item active">New features</a>
          <a href="<?php echo site_url('/?page_id=13')?>" class="blog-nav-item active">Press</a>
          <a href="<?php echo site_url('/?page_id=15')?>" class="blog-nav-item active">New Hires</a>
          <a href="<?php echo site_url('/?page_id=9')?>" class="blog-nav-item active">About</a>
        </nav>
      </div>
    </div>

    <div class="container">
      <div class="blog-header">
        <h1 class="blog-title"><?php bloginfo('name')?></h1>
        <p class="lead blog-description"><?php bloginfo('description')?></p>
      </div>