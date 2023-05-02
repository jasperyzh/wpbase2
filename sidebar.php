<?php

/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wpbase2
 */

?>

<aside id="sidebar" class="sidebar">
	<div class="wrap">

		<?php
		/**
		 * Fires immediately after the Primary Sidebar opening markup.
		 *
		 * @since ???
		 */
		do_action('wpbase_before_sidebar_widget_area');

		/**
		 * Fires to display the main Primary Sidebar content.
		 *
		 * @since ???
		 */
		do_action('wpbase_sidebar');

		/**
		 * Fires immediately before the Primary Sidebar closing markup.
		 *
		 * @since ???
		 */
		do_action('wpbase_after_sidebar_widget_area');
		?>

	</div>
</aside><!-- #secondary -->