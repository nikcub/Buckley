  </div>
  <footer id="footer">
    <?php do_action('footer'); ?>
    &copy; <?php the_date('Y') ?>
    <?php
      if(has_nav_menu('footer-menu')) {
        wp_nav_menu(array(
          'theme_location' => 'footer-menu',
          'container' => 'nav',
          'items_wrap' => '<ul>%3$s</ul>'

          ));
      }
    ?>

  </footer>
</div>

<?php wp_footer(); ?>
</body>
</html>