<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name')?> - <?php bloginfo('description')?> <?php wp_title( ); ?></title>
  <link rel="alternate" type="application/rss+xml" title="RSS" href="https://www.nikcub.com/feed/atom">
  <?php wp_head(); ?>
</head>
<body>
  <?php do_action( 'before' ); ?>
  <header id="masthead" class="site-header" role="banner">
    <hgroup>
      <img src="https://www.nikcub.com/wp-content/uploads/2014/09/nik-profile-47.jpg" height="47" width=47 alt="Nik Cubrilovic">
      <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' );?> - <?php bloginfo('description'); ?></a></h1>


            <?php
            $args = array('theme_location' => 'primary',
                    'container_class' => 'navbar-collapse collapse',
                    'menu_class' => 'nav navbar-nav',
                    'fallback_cb' => '',
                                'menu_id' => 'main-menu'
                                );

            if(has_nav_menu('header-menu')) {
              wp_nav_menu(array(
                'theme_location' => 'header-menu',
                'container' => 'nav',
                'items_wrap' => '<ul>%3$s</ul>'
                ));
            }

            ?>
    </hgroup>
  </header><!-- #masthead -->

  <div id="page">
    <div id="main" class="wrapper">