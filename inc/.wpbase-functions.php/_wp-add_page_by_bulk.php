<?php
// add_action("wp_head", "add_page_by_bulk");
function add_page_by_bulk()
{
    // Check if the button has been clicked
    if (isset($_POST['create_pages'])) {

        // Set up an array of page titles and content
        $pages = array(
            "Canna About Me " => "",
            "Canna About Us" => "",
        );

        // Loop through the array and create each page
        foreach ($pages as $title => $content) {
            // Set up the page query
            $args = array(
                'post_type'      => 'page',
                'post_status'    => 'any',
                'posts_per_page' => 1,
                'title'          => $title
            );
            $query = new WP_Query($args);

            // If the page doesn't exist, create it
            if (!$query->have_posts()) {
                // Set up the page data
                $page_data = array(
                    'post_title'    => $title,
                    // 'post_content'  => $content,
                    'post_status'   => 'publish',
                    'post_type'     => 'page',
                    // 'page_template' => 'my-custom-template.php' // Change this to your desired page template
                );

                // Insert the page and get its ID
                $page_id = wp_insert_post($page_data);
            }

            // Clean up after the query
            wp_reset_postdata();
        }
    }

    // Display the button
    echo '<form method="post">';
    echo '<button type="submit" name="create_pages">Create Pages</button>';
    echo '</form>';

    echo '<hr />';

    $directory = get_stylesheet_directory() . '/pages/'; // Set the directory path
    $file_names = glob($directory . '*.php'); // Get an array of file names
    echo '<pre>';
    foreach ($file_names as $file_name) {
        echo basename($file_name) . '<br>'; // Output the file name
    }
    echo '</pre>';
}

?>