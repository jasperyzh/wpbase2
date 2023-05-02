<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package wpbase2
 */

function wpbase_single_content()
{
	get_template_part('template-parts/content', get_post_type());
}
add_action("wpbase_do_content", "wpbase_single_content");


get_header();

do_action('wpbase_do_before_content');

?>

<main id="primary" class="site-main">

	<?php
	while (have_posts()) :
		the_post();

		do_action("wpbase_do_content");

	endwhile; // End of the loop.
	?>

	<?php do_action('wpbase_do_sidebar'); ?>

</main><!-- #main -->

<?php
do_action('wpbase_do_after_content');

get_footer();
