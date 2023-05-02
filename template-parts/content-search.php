<?php

/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wpbase2
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php do_action('wpbase_do_entry_header'); ?>

		<?php
		// wpbase2_post_thumbnail(); 
		?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php do_action('wpbase_do_entry_footer'); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->