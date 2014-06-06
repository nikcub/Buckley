<?php get_header(); ?>

  <div id="primary" class="site-content">
    <div id="content" role="main">

<?php if ( have_posts() ) : ?>

<?php while ( have_posts() ) : the_post(); ?>
  <?php print get_post_format() . PHP_EOL; ?>
  <?php get_template_part( 'content', get_post_format() ); ?>
<?php endwhile; ?>

<?php nikcub_nav( 'nav-below' ); ?>

<?php endif; ?>

    </div>
  </div>

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
