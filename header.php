<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name')?> - <?php bloginfo('description')?> - <?php wp_title( ); ?></title>
  <?php wp_head(); ?>
</head>
<body>
  <?php do_action( 'before' ); ?>
  <header id="masthead" class="site-header" role="banner">
    <hgroup>
      <img src="http://0.gravatar.com/avatar/6af3381f219bc3eee66d1a28f98021fd?s=125&d=http%3A%2F%2F0.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D125&r=G">
      <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>


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