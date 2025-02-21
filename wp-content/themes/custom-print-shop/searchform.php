<?php
/**
 * The template for displaying search forms in Custom Print Shop
 *
 * @package Custom Print Shop
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'custom-print-shop' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Type to search', 'placeholder', 'custom-print-shop' ); ?>" value="<?php echo esc_attr(get_search_query()); ?>" name="s">
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'custom-print-shop' ); ?>">
</form>