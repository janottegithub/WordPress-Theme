<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/blog/">
    <title>
        <?php bloginfo('name'); ?> | 
        <?php is_front_page() ? bloginfo('description'): wp_title();?>
        <?php wp_title(); ?> 

    </title>
    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <!--Font awesome-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php wp_head();?>

    <style>
      .showcase{
        background:url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/showcase.jpg' )?>) no-repeat center center; 
      }
    </style>
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
 <section class="showcase">
        <div class="container">
            <h1><?php echo get_theme_mod('showcase_heading', 'Custom bootstrap WordPress theme'); ?></h1>
            <p><?php echo get_theme_mod('showcase_text', ' Donec vel luctus est. Duis tempor lectus id leo egestas varius. Quisque arcu felis, hendrerit ut tortor laoreet, mollis pharetra erat. Nam quis mollis dui.'); ?></p>
          <a href="<?php echo get_theme_mod('btn_url', 'https://github.com/'); ?>" class="btn btn-primary btn-lg"><?php echo get_theme_mod('btn_text', 'Get started'); ?></a>
        </div>
    </section>
 
    <section class="boxes">
        <div class="container">
            <div class="row"> 

                <div class="col-md-4">
                      <?php if(is_active_sidebar('box1')) :?>
                        <?php dynamic_sidebar('box1');?>
                      <?php endif; ?>
                </div>

                <div class="col-md-4">
                    <?php if(is_active_sidebar('box2')) :?>
                        <?php dynamic_sidebar('box2');?>
                      <?php endif; ?>
                </div>

                <div class="col-md-4">
                      <?php if(is_active_sidebar('box3')) :?>
                          <?php dynamic_sidebar('box3');?>
                      <?php endif; ?> 
                </div>

            </div> 
        </div>
    </section>

    <footer class="blog-footer">
        <p>&copy; <?php echo date('Y');?> - <?php bloginfo('name')?></p>
        <p>
          <a href="#">Back to top</a>
        </p>
    </footer>
  <?php wp_footer(); ?>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="<?php bloginfo('template_url');?>/js/bootstrap.js"></script>
  </body>
</html>
