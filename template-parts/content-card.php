<?php
// must exist
$args['tag'] = (isset($args['tag'])) ? $args['tag'] : "";
$args['footer'] = (isset($args['footer'])) ? $args['footer'] : "";

list($tag, $classes, $title, $excerpt, $img_url, $btn_label, $href, $post_meta, $footer) = [
    $args['tag'],
    $args['classes'],
    esc_html($args['title']),
    esc_html($args['excerpt']),
    esc_html($args['img_url']),
    esc_html($args['btn_label']),
    esc_html($args['href']),
    $args['post_meta'],
    $args['footer'],
];
?>
<div class="card <?= $classes['card'] ?>">
    <div class="card-img <?= isset($classes["card-img"]) ? $classes["card-img"] : "" ?>">
        <img src="<?= $img_url ?>" class="card-img-top" alt="<?= $title ?>">
    </div>
    <div class="card-body">

        <?php if ($tag) : ?>
            <p class="text-uppercase small m-0"><?= $tag ?></p>
        <?php endif; ?>

        <h5 class="card-title"><?= $title ?></h5>

        <?php if ($excerpt) : ?>
            <p class="card-text"><?= $excerpt ?></p>
        <?php endif; ?>

        <?php
        foreach ($post_meta as $key => $value) {
            echo '<p class="card-text">' . esc_html($value) . '</p>';
        }
        ?>
    </div>
    <div class="card-footer <?= isset($classes["card-footer"]) ? $classes["card-footer"] : "" ?>">

        <?= ($footer) ? $footer : "" ?>

        <a class="card-link <?= $classes["card-link"] ?>" href="<?= $href ?>"><?= $btn_label ?></a>
    </div>
</div>