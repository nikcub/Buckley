<?php get_header(); ?>

  <div id="primary" class="site-content">
    <div id="content" role="main">

      <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'content', get_post_format() ); ?>

        <?php comments_template( '', true ); ?>

      <?php endwhile; // end of the loop. ?>

    </div>
  </div>

<?php // get_sidebar(); ?>
<?php get_footer(); ?>