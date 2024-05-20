<?php
/**
 * The template for displaying Comments.
 *
 * @package Custom Print Shop
 */
/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() )
	return;
?>

<div id="comments" class="comments-area mt-4">
	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title py-3">
			<?php
				$custom_print_shop_comments_number = get_comments_number();
				if ( '1' === $custom_print_shop_comments_number ) {
					/* translators: %s: post title */
					printf( esc_html__( 'One thought on &ldquo;%s&rdquo;', 'custom-print-shop' ), esc_html(get_the_title()) );
				} else {
					printf(
					   	esc_html(
					      	/* translators: 1: number of comments, 2: post title */
					     	_nx( 
					          	'%1$s thought on &ldquo;%2$s&rdquo;',
								'%1$s thoughts on &ldquo;%2$s&rdquo;',
								$custom_print_shop_comments_number,
								'comments title',
								'custom-print-shop'
					       	)
					   	),
					   	esc_html (number_format_i18n( $custom_print_shop_comments_number ) ),
					   	esc_html(get_the_title())
					);
				}
			?>
		</h2>
		<?php the_comments_navigation(); ?>
		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 42,
				) );
			?>
		</ol>
		<?php the_comments_navigation(); ?>
	<?php endif; // Check for have_comments(). ?>
	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'custom-print-shop' ); ?></p>
	<?php endif; ?>
	<?php
		comment_form( array(
			'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
			'title_reply_after'  => '</h2>',
			'title_reply' => esc_html(get_theme_mod('custom_print_shop_comment_title',__('Leave a Reply','custom-print-shop' )) ),
			'label_submit' => esc_html(get_theme_mod('custom_print_shop_comment_submit_text',__('Post Comment','custom-print-shop' )) ),
		) );
	?>
</div>