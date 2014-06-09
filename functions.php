<?php
/**
 *  Buckley Wordpress Theme
 *
 *
 */


function buckley_init() {
  add_theme_support( 'post-formats', array());
}
add_action('init', 'buckley_init');

function buckley_setup() {

  add_theme_support('menus');

  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu', 'buckley' ),
      'footer-menu' => __( 'Footer Menu', 'buckley' )
    )
  );
}
add_action('after_setup_theme', 'buckley_setup');




function buckley_post_nav( $html_id ) {
  global $wp_query;

  $html_id = esc_attr( $html_id );

  if ( $wp_query->max_num_pages > 1 ) : ?>
    <nav id="<?php echo $html_id; ?>" class="navigation" role="navigation">
      <div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'buckley' ) ); ?></div>
      <div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'buckley' ) ); ?></div>
    </nav><!-- #<?php echo $html_id; ?> .navigation -->
  <?php endif;
}

function buckley_head_cleanup() {
  // Originally from http://wpengineer.com/1438/wordpress-header/
  remove_action('wp_head', 'feed_links', 2);
  remove_action('wp_head', 'feed_links_extra', 3);
  remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'wlwmanifest_link');
  remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
  remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
  remove_action('wp_head', 'index_rel_link' );
  remove_action('wp_head', 'parent_post_rel_link', 10, 0 );
  remove_action('wp_head', 'start_post_rel_link', 10, 0 );
  remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
  remove_action('wp_head', 'wp_generator' );

  global $wp_widget_factory;
  remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));

}
add_action('init', 'buckley_head_cleanup');

function buckley_login_rewrite() {
  add_rewrite_rule( 'backend/?$', 'wp-login.php', 'top' );
}
add_action( 'init', 'buckley_login_rewrite' );


function buckley_scripts() {
  wp_enqueue_style('main', get_template_directory_uri() . '/style.css', false, null);
}
add_action('wp_enqueue_scripts', 'buckley_scripts', 100);


function buckley_entry_meta() {
  // Translators: used between list items, there is a space after the comma.
  $categories_list = get_the_category_list( __( ', ', 'buckley' ) );

  // Translators: used between list items, there is a space after the comma.
  $tag_list = get_the_tag_list( '', __( ', ', 'buckley' ) );

  $date = sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a>',
    esc_url( get_permalink() ),
    esc_attr( get_the_time() ),
    esc_attr( get_the_date( 'c' ) ),
    esc_html( get_the_date() )
  );

  $author = sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
    esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
    esc_attr( sprintf( __( 'View all posts by %s', 'buckley' ), get_the_author() ) ),
    get_the_author()
  );

  // Translators: 1 is category, 2 is tag, 3 is the date and 4 is the author's name.
  if ( $tag_list ) {
    $utility_text = __( 'This entry was posted in %1$s and tagged %2$s on %3$s<span class="by-author"> by %4$s</span>.', 'buckley' );
  } elseif ( $categories_list ) {
    $utility_text = __( 'This entry was posted in %1$s on %3$s<span class="by-author"> by %4$s</span>.', 'buckley' );
  } else {
    $utility_text = __( 'This entry was posted on %3$s<span class="by-author"> by %4$s</span>.', 'buckley' );
  }

  printf(
    $utility_text,
    $categories_list,
    $tag_list,
    $date,
    $author
  );
}
