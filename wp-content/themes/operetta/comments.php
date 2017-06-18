<?php
	// Do not delete these lines for security reasons
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) {
		die ('Please do not load this page directly. Thanks!');
	}
?>


    <!-- Comments -->
    <div class="comments-container">
        <a name="respond"></a>
        <div id="show-hide">
            <?php if (!comments_open() && !is_page() && post_type_supports(get_post_type(), 'comments')) : ?>
                <p class="comments-closed"><?php _e('Comments are closed.', 'aletheme'); ?></p>
            <?php endif; ?>
            <?php if (comments_open()) : ?>
                <a name="comments"></a>
                <?php if (post_password_required()) : ?>
                    <p class="comments-protected"><?php _e('This post is password protected. Enter the password to view comments.', 'aletheme'); ?></p>
                    <?php
                    return; endif; ?>
                <?php if (have_comments()) : ?>
                    <?php wp_list_comments(array('callback' => 'aletheme_comment_default','style' => 'div', 'max_depth' => 2,'avatar_size' => 52,)); ?>
                    <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : // are there comments to navigate through ?>
                        <nav class="comments-nav" class="pager">
                            <div class="previous"><?php previous_comments_link(__('&larr; Older comments', 'aletheme')); ?></div>
                            <div class="next"><?php next_comments_link(__('Newer comments &rarr;', 'aletheme')); ?></div>
                        </nav>
                    <?php endif; // check for comment navigation ?>
                <?php endif; ?>
            <?php endif; ?>

            <!-- Comment Form -->
            <?php if (comments_open()) : ?>
                <?php if (get_option('comment_registration') && !is_user_logged_in()) : ?>
                    <p><?php printf(__('You must be <a href="%s">logged in</a> to post a comment.', 'aletheme'), wp_login_url(get_permalink())); ?></p>
                <?php else : ?>
                    <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" id="comment-form" method="post" class="comment-form">

                        <p><?php _e('Add a comment to this post','aletheme'); ?><span class="cancel_reply"><?php cancel_comment_reply_link(); ?></span></p>
                        <?php if (is_user_logged_in()) : ?>
                            <p class="logged"><?php printf(__('Logged in as <a href="%s/wp-admin/profile.php">%s</a>.', 'aletheme'), get_option('siteurl'), $user_identity); ?> <a class="log_out" href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php __('Log out of this account', 'aletheme'); ?>"><?php _e('Log out', 'aletheme'); ?></a></p>
                        <?php else : ?>
                            <div class="personal">
                                <input type="text" class="name" placeholder="<?php _e('Your Name', 'aletheme'); ?> *" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> required="required">
                                <input type="email" placeholder="<?php _e('Your Email', 'aletheme'); ?> *" class="email" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> required="required" email="true">
                                <input type="url" placeholder="<?php _e('Your Site', 'aletheme'); ?>" class="site" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" tabindex="3" >
                            </div>
                        <?php endif; ?>
                        <div class="comment_message">
                            <textarea name="comment" placeholder="<?php _e('Say Something', 'aletheme'); ?> *" id="comment" class="message" required="required"></textarea>
                        </div>
                        <div class="comment_submit cf">
                            <input name="submit" class="submit" type="submit" value="<?php _e('send', 'aletheme'); ?>" />
                        </div>

                        <?php comment_id_fields(); ?>
                        <?php do_action('comment_form', $post->ID); ?>
                    </form>
                <?php endif; // if registration required and not logged in ?>
            <?php endif; ?>
        </div>
    </div>

