<?php
if (have_comments()) : ?>
    <ul class="post-comments">
        <?php
            wp_list_comments(array(
                'style'       => 'li',
                'short_ping'  => true,
            ));
        ?>
	</ul>
	<?php
endif;

if (is_singular() && comments_open() && (get_option('thread_comments') == 1)) {
    wp_enqueue_script('comment-reply', 'wp-includes/js/comment-reply', array(), false, true);
}
comment_form(array('title_reply' => 'Join the discussion!', 'comment_notes_before' => ''));
