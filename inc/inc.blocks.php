<?php

/**
 * @since 230418
 * integrate wp-scripts for blocks into vite-workflow
 */

class CustomBlockBootstrap
{
    function __construct()
    {
        add_action('init', [$this, 'adminAssets']);
    }

    function adminAssets()
    {
        wp_register_style('bootstrap5-blocks', get_template_directory_uri() . '/build/block-backend.css');
        wp_register_script('bootstrap5-blocks', get_template_directory_uri() . '/build/block-backend.js', ['wp-blocks', 'wp-element', 'wp-editor']);



        register_block_type("custom-block/bootstrap5", [
            'editor_script' => 'bootstrap5-blocks',
            'editor_style' => 'bootstrap5-blocks',
            'render_callback' => [$this, 'html_bootstrap_card']
        ]);

        register_block_type("custom-block/fetchposts", [
            'editor_script' => 'bootstrap5-blocks',
            'editor_style' => 'bootstrap5-blocks',
            'render_callback' => [$this, 'html_fetch_posts']
        ]);


        // register_block_type("bootstrap5/accordion", [
        //     'editor_script' => 'bootstrap5-blocks',
        //     'editor_style' => 'bootstrap5-blocks',
        //     'render_callback' => [$this, 'html_bootstrap_accordion']
        // ]);
    }

    function html_fetch_posts($attributes, $content, $block)
    {
        $this->get_enqueue();

        $block_class_name = sanitize_title($block->parsed_block['blockName']);
        $encoded_attributes = esc_attr(wp_json_encode($attributes));

        ob_start();
?>
        <div class="<?= $block_class_name ?>">
            <pre><?= $encoded_attributes ?></pre>
        </div>
    <?php
        return ob_get_clean();
    }

    // function html_bootstrap_accordion($attributes, $content, $block){

    // }
    function html_bootstrap_card($attributes, $content, $block)
    {
        // enqueue frontend assets
        $this->get_enqueue();

        $block_class_name = sanitize_title($block->parsed_block['blockName']);

        // Encode the attributes as JSON and escape any special characters
        $encoded_attributes = esc_attr(wp_json_encode($attributes));

        // $block = new WP_Block($parsed_block);
        // echo '<pre>';
        // print_r($encoded_attributes);
        // print_r($content);
        // print_r(sanitize_title($block->parsed_block['blockName']));
        // echo '</pre>';

        ob_start();
    ?>
        <!-- <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script> -->
        <!-- <div id="app">
            <vue-bootstrap-card :attributes="<?= $encoded_attributes ?>"></vue-bootstrap-card>
        </div> -->

        <div class="<?= $block_class_name ?> card">
            <img src="<?= $attributes['img_url'] ?>" class="card-img-top aspect-[4/3] object-cover" alt="<?= $attributes['title'] ?>" />
            <div class="card-body">
                <h5 class="card-title"><?= $attributes['title'] ?></h5>
                <p class="card-text"><?= $attributes['description'] ?></p>
                <a href=<?= $attributes['href'] ?> class="btn btn-primary"><?= $attributes['label'] ?></a>
            </div>
        </div>
<?php
        return ob_get_clean();
    }

    function get_enqueue()
    {
        if (!is_admin()) {
            wp_enqueue_style('bootstrap5-blocks-frontend', get_template_directory_uri() . '/build/block-frontend.css');
            wp_enqueue_script("bootstrap5-blocks-frontend", get_template_directory_uri() . '/build/block-frontend.js', ['wp-element']);
        }
    }
}



// test block for bootstrap-accordion

// Define the block using register_block_type()
function create_bootstrap_accordion_block()
{
    register_block_type('myplugin/bootstrap-accordion', array(
        'editor_script' => 'myplugin-bootstrap-accordion-block',
        'render_callback' => 'myplugin_render_bootstrap_accordion_block'
    ));
}
// add_action('init', 'create_bootstrap_accordion_block');

// Enqueue the script for the block
function myplugin_bootstrap_accordion_block_assets()
{
    wp_enqueue_script(
        'myplugin-bootstrap-accordion-block',
        plugins_url('block.js', __FILE__),
        array('wp-blocks', 'wp-i18n', 'wp-element', 'wp-editor'),
        filemtime(plugin_dir_path(__FILE__) . 'block.js')
    );
}
// add_action('enqueue_block_editor_assets', 'myplugin_bootstrap_accordion_block_assets');

// Define the block's render callback
function myplugin_render_bootstrap_accordion_block($attributes, $content)
{
    $output = '<div class="accordion">';

    // Loop through each title/content pair
    foreach ($attributes['accordionItems'] as $item) {
        $output .= '<div class="accordion-item">';
        $output .= '<h2 class="accordion-header" id="heading-' . $item['id'] . '">';
        $output .= '<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-' . $item['id'] . '" aria-expanded="false" aria-controls="collapse-' . $item['id'] . '">';
        $output .= $item['title'];
        $output .= '</button></h2>';
        $output .= '<div id="collapse-' . $item['id'] . '" class="accordion-collapse collapse" aria-labelledby="heading-' . $item['id'] . '" data-bs-parent=".accordion">';
        $output .= '<div class="accordion-body">';
        $output .= $item['content'];
        $output .= '</div></div></div>';
    }

    $output .= '</div>';
    return $output;
}
