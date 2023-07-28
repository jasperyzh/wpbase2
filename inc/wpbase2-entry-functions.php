<?php

/**
 * ENTRY FUNCTIONS FOR WPBASE2
 * based on Bootstrap 5.3.0
 */

function wpbase_default_entry_header()
{
    // the_title('<h1 class="entry-title">', '</h1>');
    if (is_singular()) :
        the_title('<h1 class="entry-title">', '</h1>');
    else :
        the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
    endif;
}

function wpbase_default_entry_meta()
{
    if ('post' === get_post_type()) :
?>
        <div class="entry-meta">
            <?php
            wpbase2_posted_on();
            wpbase2_posted_by();
            ?>
        </div><!-- .entry-meta -->
<?php
    endif;
}

function wpbase_single_content_meta()
{
    $prev_post = get_previous_post();
    $next_post = get_next_post();

    if ($prev_post || $next_post) {
        echo '<nav class="blog-pagination" aria-label="Pagination">';
        if ($prev_post) {
            $prev_title = apply_filters('the_title', $prev_post->post_title);
            echo '<a class="btn btn-outline-primary rounded-pill" href="' . get_permalink($prev_post->ID) . '">Older - ' . $prev_title . '</a>';
        }
        if ($next_post) {
            $next_title = apply_filters('the_title', $next_post->post_title);
            echo '<a class="btn btn-outline-secondary rounded-pill" href="' . get_permalink($next_post->ID) . '">Newer - ' . $next_title . '</a>';
        }
        echo '</nav>';
    }

    // If comments are open or we have at least one comment, load up the comment template.
    if (comments_open() || get_comments_number()) :
        comments_template();
    endif;
}


function wpbase_bootstrap_pagination()
{
    global $wp_query;
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    $args = array(
        'base'         => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
        'total'        => $wp_query->max_num_pages,
        'current'      => max(1, $paged),
        'format'       => '?paged=%#%',
        'show_all'     => false,
        'end_size'     => 2,
        'mid_size'     => 1,
        'prev_next'    => true,
        'prev_text'    => __('« Prev'),
        'next_text'    => __('Next »'),
        'type'         => 'array',
        'add_args'     => false,
        'add_fragment' => '',
    );

    $pages = paginate_links($args);

    if (is_array($pages)) {
        echo '<nav aria-label="Page navigation example"><ul class="pagination">';
        foreach ($pages as $page) {
            if (strpos($page, 'current') !== false) {
                $page = preg_replace('/<span(.*?)>(.*?)<\/span>/', '<a class="page-link" href="#">$2</a>', $page);
                $page = '<li class="page-item active" aria-current="page">' . $page . '</li>';
            } else if (strpos($page, '« Prev') !== false || strpos($page, 'Next »') !== false) {
                if (strpos($page, 'href') === false) {
                    $page = preg_replace('/<span(.*?)>(.*?)<\/span>/', '<a class="page-link">$2</a>', $page);
                    $page = '<li class="page-item disabled">' . $page . '</li>';
                } else {
                    $page = preg_replace('/<a/', '<a class="page-link"', $page);
                    $page = '<li class="page-item">' . $page . '</li>';
                }
            } else {
                $page = preg_replace('/<a/', '<a class="page-link"', $page);
                $page = '<li class="page-item">' . $page . '</li>';
            }

            echo $page;
        }
        echo '</ul></nav>';
    }
}
