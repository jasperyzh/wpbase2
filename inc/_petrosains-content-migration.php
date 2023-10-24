<?php

/**
 * import page structure via google sheet
 */

function import_from_csv($edit_post_type)
{
    require_once(ABSPATH . 'wp-admin/includes/post.php');

    $google_sheet_url = 'https://docs.google.com/spreadsheets/d/e/2PACX-1vTqYPT_YsiE7PgIwCAprjTH9Rsk3Wlt4n4PpVP-ZYiUXCtC1DLy1j7_8lxCYqit56AHNG4WMWPDM06u/pub?gid=89067569&single=true&output=csv';

    // Assuming CSV file is in the same directory as this script
    if (($handle = fopen($google_sheet_url, 'r')
    ) !== FALSE) {

        $first_row = true; // Add a flag to indicate the first row

        // Read each line of the CSV
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {

            if ($first_row) {
                $first_row = false; // Skip the first row
                continue;
            }

            $title = $data[0]; // Column 1: Title
            $slug = $data[1]; // Column 2: Slug
            $post_type = $data[2]; // Column 3: Post Type
            $content = $data[3]; // Column 3: content
            $excerpt = $data[4]; // Column 4: exceprt
            $categories = $data[5]; // Column 5: Categories (assuming comma-separated IDs)
            $tags = $data[6]; // Column 6: Tags (assuming comma-separated IDs)
            $parent_page_slug = $data[7]; // Column 8: Parent Page ID
            $order = $data[8]; // Column 9: Order Number
            $yoast_meta = $data[9]; // Column 12: Yoast SEO meta description

            // check post_type
            if ($post_type !== $edit_post_type) {
                continue;
            }

            // check page_exist// Check for duplicate title or slug
            $existing_page = null;
            if ($post_type === $edit_post_type) {
                $query = new WP_Query(array(
                    'post_type'      => $edit_post_type,
                    'name'           => $slug,
                    'posts_per_page' => 1,
                    'fields'         => 'ids',
                ));

                $existing_page = $query->have_posts() ? $query->posts[0] : null;
            }

            // category
            $categories_names = explode(',', $categories);
            $categories_ids = array();
            foreach ($categories_names as $category_name) {
                $category_term = get_term_by('name', $category_name, 'category');
                if (!$category_term) {
                    // Category doesn't exist, create a new one
                    $new_category_id = wp_insert_category(array('cat_name' => $category_name));
                    if (!is_wp_error($new_category_id)) {
                        $categories_ids[] = (int) $new_category_id;
                    } else {
                        error_log('Failed to insert category: ' . $category_name);
                    }
                } else {
                    $categories_ids[] = (int) $category_term->term_id;
                }
            }

            // Get the parent page ID from the slug$parent_page_id = null;
            $parent_page_id = 0;
            if ($parent_page_slug != 'NULL' && $parent_page_slug != '') {
                $parent_page_object = get_page_by_path($parent_page_slug, OBJECT, $post_type);
                // Check if parent page exists, if not set it to null
                $parent_page_id = $parent_page_object ? $parent_page_object->ID : null;
            }

            $page_data = array(
                'post_title'    => wp_strip_all_tags($title),
                'post_name'     => $slug,
                // 'post_content'  => $content,
                'post_excerpt'  => $excerpt,
                'post_status'   => 'publish',
                'post_type'     => $post_type,
                'post_author'   => 1,
                'post_category' => $categories_ids, 
                'tags_input'    => explode(',', $tags),
                'post_parent'   => $parent_page_id,
                'menu_order'    => $order
            );

            if ($existing_page) {
                // Update existing page
                $page_data['ID'] = $existing_page;
                $post_id = wp_update_post($page_data);
            } else {
                // Create new page
                $post_id = wp_insert_post($page_data);
            }

            // Add Yoast SEO meta description
            if ($post_id && !is_wp_error($post_id)) {
                update_post_meta($post_id, '_yoast_wpseo_metadesc', $yoast_meta);
            }
        }
        fclose($handle);
    } else {
        error_log('Failed to open CSV file');
    }
}

function print_custom_js()
{
    // Only print the JavaScript code if we're on the pages listing page
    $screen = get_current_screen();
    if ($screen->id == 'edit-page') :
?>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                var button = $('<a id="import-pages" class="page-title-action">WpBase2: Import Pages from Gsheet</a>');
                $('.wp-header-end').before(button);
                $('#import-pages').click(function(e) {
                    e.preventDefault();
                    $.post(ajaxurl, {
                        action: 'import_pages'
                    }, function(response) {
                        if (response.success) {
                            location.reload();
                        } else {
                            console.log(response.data.message); // Log the error message to the console
                            alert('Error occurred during import. Please check the console for details.');
                        }
                    }).fail(function() {
                        alert('Error occurred during import. Please check the console for details.');
                    });
                });
            });
        </script>
    <?php
    elseif ($screen->id == 'edit-post') :
    ?>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                var button = $('<a id="import-posts" class="page-title-action">WpBase2: Import Posts from Gsheet</a>');
                $('.wp-header-end').before(button);
                $('#import-posts').click(function(e) {
                    e.preventDefault();
                    $.post(ajaxurl, {
                        action: 'import_posts'
                    }, function(response) {
                        if (response.success) {
                            location.reload();
                        } else {
                            console.log(response.data.message); // Log the error message to the console
                            alert('Error occurred during import. Please check the console for details.');
                        }
                    }).fail(function() {
                        alert('Error occurred during import. Please check the console for details.');
                    });
                });
            });
        </script>
<?php

    endif;
}
add_action('admin_footer', 'print_custom_js');


function handle_import_pages()
{
    import_from_csv("page");
    wp_send_json_success(); // Return a success response
    wp_die(); // This is required to terminate immediately and return a proper response
}
add_action('wp_ajax_import_pages', 'handle_import_pages');


function handle_import_posts()
{
    import_from_csv("post");
    wp_send_json_success(); // Return a success response
    wp_die(); // This is required to terminate immediately and return a proper response
}
add_action('wp_ajax_import_posts', 'handle_import_posts');
