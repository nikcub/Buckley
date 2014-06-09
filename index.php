<?php get_header(); ?>

  <div id="primary" class="site-content">
    <div id="content" role="main">

<?php if ( have_posts() ) : ?>

<?php while ( have_posts() ) : the_post(); ?>
  <div class="list">
    <h4><a href="<?php the_permalink() ?>"><?php the_title() ?></a> <p class="entry-date"><?php the_date('l, F j, Y') ?></p></h4>
    <p><?php the_excerpt(); ?></p>
  </div>
<?php endwhile; ?>

<?php buckley_post_nav( 'nav-below' ); ?>

<?php endif; ?>

    </div>
  </div>

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
