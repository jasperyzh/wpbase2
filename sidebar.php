<?php

/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wpbase2
 */

if (!is_active_sidebar('sidebar-1')) {
	return;
}

do_action("wpbase_do_sidebar");

?>
