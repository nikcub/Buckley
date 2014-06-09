<?php get_header(); ?>

  <div id="primary" class="site-content">
    <div id="content" role="main">

<?php if ( have_posts() ) : ?>

<?php while ( have_posts() ) : the_post(); ?>
  <article class="page">
    <header class="entry-header">
        <h1 class="entry-title">
          <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
        </h1>
    </header>
    <div class="content">
      <?php the_content(  ); ?>
    </div>
  </article>
<?php endwhile; ?>

<?php buckley_post_nav( 'nav-below' ); ?>

<?php endif; ?>

    </div>
  </div>

<?php // get_sidebar(); ?>
<?php get_footer(); ?>


