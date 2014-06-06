<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
</head>

<body>
<div id="page" class="hfeed site">
  <header id="masthead" class="site-header" role="banner">
    <hgroup>
      <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
      <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
    </hgroup>

    <nav id="site-navigation" class="main-navigation" role="navigation">
      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
    </nav><!-- #site-navigation -->

  </header><!-- #masthead -->

  <div id="main" class="wrapper">