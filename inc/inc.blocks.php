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
            'render_callback' => [$this, 'theHTML']
        ]);
    }
    function theHTML($attributes, $content, $block)
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
