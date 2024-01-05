<?php

/**
 * archive 
 *
 * @link https--
 *
 * @package wpbase2
 */

get_header();

do_action('wpbase_do_before_content');

?>

<main id="main" class="site-main">

    <?php do_action('wpbase_do_content'); ?>

    <?php
    get_template_part("template-parts/archive", "content");
    ?>
    
    <?php do_action('wpbase_do_sidebar'); ?>

</main><!-- #main -->


<?php

do_action('wpbase_do_after_content');

get_footer();
