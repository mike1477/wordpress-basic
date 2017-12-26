<div class="comment-outer">
  <h2>COMMENTS.PHP</h2>

  <?php $args_comments = array(
	'max_depth'         => '2',
	'reply_text'        => 'Reply to comment'

); ?>

  <?php $args_comment = array(
  'label_submit'      => __( 'Post Comment test' )
); ?>
  <?php wp_list_comments($args_comments); ?>
  <?php comment_form($args_comment); ?>
</div>
