<?php
/**
 * remove all except wordpress' default
 * 
 * https://developer.wordpress.org/reference/functions/remove_image_size/
 */
function remove_extra_image_sizes()
{
    foreach (get_intermediate_image_sizes() as $size) {
        if (!in_array($size, array('thumbnail', 'medium', 'medium_large', 'large'))) {
            remove_image_size($size);
        }
    }
    // echo "<pre>";
    // var_dump(get_image_sizes());
    // echo "</pre>";
}
add_action('init', 'remove_extra_image_sizes');

/**
 * Get information about available image sizes
 * 
 * https://developer.wordpress.org/reference/functions/get_intermediate_image_sizes/#user-contributed-notes
 */
function get_image_sizes($size = '')
{
    $wp_additional_image_sizes = wp_get_additional_image_sizes();

    $sizes = array();
    $get_intermediate_image_sizes = get_intermediate_image_sizes();

    // Create the full array with sizes and crop info
    foreach ($get_intermediate_image_sizes as $_size) {
        if (in_array($_size, array('thumbnail', 'medium', 'large'))) {
            $sizes[$_size]['width'] = get_option($_size . '_size_w');
            $sizes[$_size]['height'] = get_option($_size . '_size_h');
            $sizes[$_size]['crop'] = (bool) get_option($_size . '_crop');
        } elseif (isset($wp_additional_image_sizes[$_size])) {
            $sizes[$_size] = array(
                'width' => $wp_additional_image_sizes[$_size]['width'],
                'height' => $wp_additional_image_sizes[$_size]['height'],
                'crop' =>  $wp_additional_image_sizes[$_size]['crop']
            );
        }
    }

    // Get only 1 size if found
    if ($size) {
        if (isset($sizes[$size])) {
            return $sizes[$size];
        } else {
            return false;
        }
    }
    return $sizes;
}

