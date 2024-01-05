<div class="container my-5">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="archive-item glass_only row gx-0 mb-4">
                <div class="archive-item__content col-lg-5 d-flex flex-column justify-content-between">
                    <div class="content">
                        <p class="pb-2 text-muted mb-0 h6"><?= get_the_date(); ?></p>
                        <h2 class="fw-bold text-body-emphasis">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                        <?php if (has_excerpt()) : ?>
                            <p><?php the_excerpt(); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="meta">
                        <div class="d-flex flex-wrap gap-1">
                            <?php
                            $categories = get_the_category();
                            $separator = ' ';
                            $output = '';
                            if (!empty($categories)) {
                                foreach ($categories as $category) {
                                    $output .= '<span class="badge bg-primary">' . esc_html($category->name) . '</span>' . $separator;
                                }
                                echo trim($output, $separator);
                            }

                            $tags = get_the_tags();
                            $output = '';
                            if (!empty($tags)) {
                                foreach ($tags as $tag) {
                                    $output .= '<span class="badge bg-secondary">' . esc_html($tag->name) . '</span>' . $separator;
                                }
                                echo trim($output, $separator);
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="archive-item__featuredimg col-lg-7">
                    <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('full', array('class' => 'featured_image--sizing'));
                    } else {
                        echo '<img class="featured_image--sizing" src="/assets/images/placeholder.jpg" alt="default image">';
                    }
                    ?>
                </div>
            </div>
        <?php endwhile; ?>

        <!-- Bootstrap Pagination -->
        <div class="row">
            <div class="col">
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <?php
                        $links = paginate_links(array(
                            'prev_next' => true,
                            'prev_text' => __('&laquo; Previous'),
                            'next_text' => __('Next &raquo;'),
                            'before_page_number' => '',
                            'after_page_number'  => '',
                            'format'  => '?paged=%#%',
                            'current' => max(1, get_query_var('paged')),
                            'total'   => $wp_query->max_num_pages,
                            'type'    => 'array',
                            'show_all' => false, // set to true if you want to show all pages
                        ));
                        if (is_array($links)) {
                            foreach ($links as $link) {
                                // Replace 'page-numbers' with 'page-link' class.
                                $link = str_replace('page-numbers', 'page-link', $link);

                                // Check if the link is the current page.
                                if (strpos($link, 'current') !== false) {
                                    echo "<li class='page-item active' aria-current='page'>$link</li>";
                                } else {
                                    echo "<li class='page-item'>$link</li>";
                                }
                            }
                        }
                        ?>
                    </ul>
                </nav>
            </div>
        </div>

    <?php else : ?>
        <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
</div>