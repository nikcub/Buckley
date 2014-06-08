<?php get_header(); ?>

  <div id="primary" class="site-content">
    <div id="content" role="main">

<?php if ( have_posts() ) : ?>

<?php while ( have_posts() ) : the_post(); ?>
  <h1 class="entry-title"><?php the_title() ?></h1>
  <p><?php the_excerpt(); ?></p>
<?php endwhile; ?>

<?php nikcub_nav( 'nav-below' ); ?>

<?php endif; ?>

    </div>
  </div>

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
