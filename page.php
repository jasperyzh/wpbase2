<?php

/**
 * page
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

  <?php do_action('wpbase_do_sidebar'); ?>

</main>

<?php

do_action('wpbase_do_after_content');

get_footer();
