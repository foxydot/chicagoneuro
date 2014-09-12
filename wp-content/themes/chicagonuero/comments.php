<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div class="comments" id="comments">
<?php
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');
 
	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
?>
 
<!-- You can start editing here. -->
 
<?php if ( have_comments() ) : ?>
	<h2><?php comments_number('No Comments', 'Comment (1)', 'Comments (%)' );?> <?php // the_title(); ?></h2>
 
	<ul class="commentlist">
		<?php wp_list_comments('type=comment&callback=advanced_comment'); //this is the important part that ensures we call our custom comment layout defined above 
                ?>
	</ul>
	<div class="clear"></div>
	<!--<div class="comment-navigation">
		<div class="older"><?php previous_comments_link() ?></div>
		<div class="newer"><?php next_comments_link() ?></div>
	</div>-->
 <?php else : // this is displayed if there are no comments so far ?>
 
	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->
        <P class="nocomments_post">There is no comment for this post.</p>
 
	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">Comments are closed.</p>
 
	<?php endif; ?>
<?php endif; ?>
<?php if ( comments_open() ) : ?>

</div>
<div class="leaveacomment">
<h2><?php comment_form_title( 'Leave a Comment', 'Leave a Reply to %s' ); ?></h2>

<div class="cancel-comment-reply">
	<small><?php cancel_comment_reply_link(); ?></small>
</div> 
<p>Your email address will not be published. Required fields are marked*</p>
<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
<p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
<?php else : ?>
<div class="cmnt-form">
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
 
<?php if ( is_user_logged_in() ) : ?>
<p class="loggedin_as">Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>, <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>
 
<?php else : //this is where we setup the comment input forums ?>
<div class="frm">
  <label class="lbl">Name*</label>
  <input type="text" name="author" id="author" class="inpt-txt-cmnt" value="<?php echo esc_attr($comment_author); ?>" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
</div>
<div class="frm">
  <label class="lbl">Email*</label>
  <input type="text" name="email" id="email" class="inpt-txt-cmnt" value="<?php echo esc_attr($comment_author_email); ?>" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
</div>
<div class="frm">
 <label class="lbl">Website</label>
 <input name="url" class="inpt-txt-cmnt" id="url" type="url" size="30" value="<?php echo esc_attr($comment_author_website); ?>" tabindex="3">
</div>

<?php endif; ?>
<span id="respond"></span>
 <label class="lbl">Comment</label>
 <textarea name="comment" id="comment" class="inpt-txtarea-cmnt" tabindex="4"></textarea>
 <input name="submit" type="submit" id="submit" value="Post Comment" class="cmnt-post" tabindex="5" />

<?php comment_id_fields(); ?>

<?php do_action('comment_form', $post->ID); ?>
</div>
</form>
<?php endif; // If registration required and not logged in ?>
<?php endif; // if you delete this the sky will fall on your head ?>
</div>

<!-- #comments -->
