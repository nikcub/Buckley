<div id="comments" class="comments-area">

        <?php if ( have_comments() ) : ?>

        <h2 class="comments-title">
                <?php printf("%s comments", get_comments_number(), get_the_title()); ?>
        </h2>

        <ol class="comment-list">
                <?php
                        wp_list_comments( array(
                                'style'      => 'ol',
                                'short_ping' => true,
                                'avatar_size'=> 0,
                                'callback' => 'buckley_comment'
                        ) );
                ?>
        </ol><!-- .comment-list -->

        <?php if ( ! comments_open() ) : ?>
        <p class="no-comments">Comments are closed</p>
        <?php endif; ?>

        <?php endif; // have_comments() ?>

        <?php comment_form(); ?>

</div><!-- #comments -->