<?php get_header(); ?>

  <div id="primary" class="site-content">
    <div id="content" role="main">

      <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'content', get_post_format() ); ?>

        <h2>Recent Posts</h2>
        <ul>
<?php
  $args = array( 'numberposts' => '5', 'post_status' => 'publish' );
  $recent_posts = wp_get_recent_posts( $args );
  foreach( $recent_posts as $recent ){
    echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
  }
?>
</ul>

        <?php comments_template( '', true ); ?>

      <?php endwhile; // end of the loop. ?>

    </div>
  </div>

<?php // get_sidebar(); ?>
<?php get_footer(); ?>