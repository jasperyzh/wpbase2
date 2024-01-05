<!-- <div class:list={[ "page-banner page-title-cont grey-dark-bg page-title-img" , classes, ]} style={defaultStyle}> -->
<div class="page-banner">
    <div class="container">
        <div class="row">
            <div class="col gx-0">
                <div class="page-banner__main">
                    <?php
                    // Assume $post_id is available, or use get_the_ID() to get current post/page ID
                    // If you are using this outside the loop, you might need to set $post_id differently

                    // Initialize the banner image variable
                    $banner_image = '';

                    // Check if we're on a single post, page, or an archive
                    if (is_single()) {
                        // Single Post
                        $default_image = '/assets/images/Maker Studio-ZH_02042.jpg'; // Default image for single posts
                        $banner_image = get_field('banner_image');
                    } elseif (is_page()) {
                        // Page
                        $default_image = '/assets/images/Maker Studio-ZH_01970.jpg'; // Default image for pages
                        $banner_image = get_field('banner_image');
                    } elseif (is_archive()) {
                        // Archive
                        $default_image = '/assets/images/petrosains_2015-201502151613-11.jpg'; // Default image for archives
                        $queried_object = get_queried_object(); // Get the current term object
                        if (isset($queried_object->taxonomy)) {
                            $term_id = 'category_' . $queried_object->term_id; // Prefix term_id with 'category_' for ACF
                            $banner_image = get_field('banner_image', $term_id);
                        }
                    } else {
                        $default_image = '/assets/images/Maker Studio-ZH_02042.jpg'; // Default image for single posts

                    }

                    // Use the ACF image if set, otherwise use the default
                    $image_to_use = $banner_image ?: $default_image;
                    ?>
                    <img src="<?= esc_url($image_to_use) ?>" alt="Page Banner" />

                    <?php if (is_page()) : ?>
                        <div class="page-banner__content glass_only">
                            <h1 class="page-banner__title"><?= esc_html(get_the_title()) ?></h1>
                        </div>
                    <?php elseif (is_single()) : ?>
                        <div class="page-banner__content glass_only">
                            <h1 class="page-banner__title"><?= esc_html(get_the_title()) ?></h1>
                        </div>
                    <?php elseif (is_archive()) : ?>
                        <div class="page-banner__content glass_only">
                            <?php
                            the_archive_title('<h1 class="page-banner__title">', '</h1>');
                            // Optionally, display the archive description.
                            // the_archive_description('<div class="taxonomy-description">', '</div>');
                            ?>
                        </div>
                    <?php elseif (is_search()) : ?>
                        <div class="page-banner__content glass_only">
                            <h1 class="page-banner__title">
                                <?php
                                printf(
                                    esc_html__('Search Results for: %s', 'petrosains'),
                                    '<span>' . esc_html(get_search_query()) . '</span>'
                                );
                                ?>
                            </h1>
                        </div>
                    <?php elseif (is_404()) : ?>
                        <div class="page-banner__content glass_only">
                            <h1 class="page-banner__title"><?= esc_html__('Not Found', 'petrosains') ?></h1>
                        </div>
                    <?php else : ?>
                        <!-- You can add additional conditions here for custom post types or taxonomies if needed -->
                        <div class="page-banner__content glass_only">
                            <h1 class="page-banner__title"><?= esc_html__('Additional Title', 'petrosains') ?></h1>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <?php add_breadcrumb(); ?>
            </div>
        </div>
    </div>
</div>