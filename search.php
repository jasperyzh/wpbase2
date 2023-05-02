<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package wpbase2
 */

// add_action("wpbase_do_entry_header", "wpbase2_post_thumbnail", 12);

remove_action("wpbase_do_entry_header", "wpbase_default_entry_header", 8);
remove_action("wpbase_do_entry_header", "wpbase_default_entry_meta");
remove_action("wpbase_do_entry_footer", "wpbase2_entry_footer", 8);


function content_search_entry_header()
{
	the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>');
}
add_action("wpbase_do_entry_header", "content_search_entry_header");


get_header();

do_action('wpbase_do_before_content');

?>

<main id="primary" class="site-main">

	<?php if (have_posts()) : ?>

		<header class="page-header">
			<h1 class="page-title">
				<?php
				/* translators: %s: search query. */
				printf(esc_html__('Search Results for: %s', 'wpbase2'), '<span>' . get_search_query() . '</span>');
				?>
			</h1>
		</header><!-- .page-header -->

	<?php
		/* Start the Loop */
		while (have_posts()) :
			the_post();

			/**
			 * Run the loop for the search to output the results.
			 * If you want to overload this in a child theme then include a file
			 * called content-search.php and that will be used instead.
			 */
			get_template_part('template-parts/content', 'search');

		endwhile;

		the_posts_navigation();

	else :

		get_template_part('template-parts/content', 'none');

	endif;
	?>

</main><!-- #main -->

<?php
do_action('wpbase_do_after_content');

get_sidebar();

get_footer();
