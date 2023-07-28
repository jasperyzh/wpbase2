<div class="nav-scroller bg-body shadow-sm">
    <?php
    wp_nav_menu(array(
        'theme_location' => 'secondary',
        'container' => false,
        'menu_class' => '',
        'fallback_cb' => '__return_false',
        'items_wrap' => '<nav id="%1$s" class="nav %2$s" aria-label="Secondary navigation">%3$s</nav>',
        'depth' => 2,
        'walker' => new bootstrap_5_wp_nav_menu_walker()
    ));
    ?>
</div>