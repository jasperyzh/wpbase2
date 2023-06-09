<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package wpbase2
 */

function wpbase_404_content()
{
?>
	<p class="small">
		<?= esc_html_e('We\'re sorry, but the page you requested could not be found.', 'wpbase2'); ?>
		<br />
		<?= esc_html_e('Please check the URL and try again, or use the navigation links above to find what you\'re looking for.', 'wpbase2'); ?>
	</p>

	<?php get_search_form(); ?>

	<?php
}

function wpbase_404_content_widget()
{
	?><?php the_widget('WP_Widget_Recent_Posts'); ?>

	<div class="widget widget_categories">
		<h2 class="widget-title"><?php esc_html_e('Most Used Categories', 'wpbase2'); ?></h2>
		<ul>
			<?php
			wp_list_categories(
				array(
					'orderby'    => 'count',
					'order'      => 'DESC',
					'show_count' => 1,
					'title_li'   => '',
					'number'     => 10,
				)
			);
			?>
		</ul>
	</div><!-- .widget -->

<?php
	/* translators: %1$s: smiley */
	$wpbase2_archive_content = '<p>' . sprintf(esc_html__('Try looking in the monthly archives. %1$s', 'wpbase2'), convert_smilies(':)')) . '</p>';
	the_widget('WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$wpbase2_archive_content");

	the_widget('WP_Widget_Tag_Cloud');
}


get_header();

do_action('wpbase_do_before_content');

?>

<main id="primary" class="site-main">

	<section class="error-404 not-found">
		<header class="page-header">
			<h1 class="page-title"><?php esc_html_e('404 | Page Not Found', 'wpbase2'); ?></h1>
		</header><!-- .page-header -->

		<div class="page-content">
			<?php do_action("wpbase_do_404_content"); ?>
		</div><!-- .page-content -->

	</section><!-- .error-404 -->

</main><!-- #main -->

<?php

do_action('wpbase_do_after_content');

get_footer();
