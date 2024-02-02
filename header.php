<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wpbase2
 */


?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e('Skip to content', 'wpbase2'); ?></a>

	<div class="site-container">

		<!-- <header class="site-header">
			<?php
			//do_action("wpbase_do_header");  
			?>
		</header> -->

		<header id="site-header" class="fixed-top glass_only">
			<div class="container-fluid">
				<nav class="navbar navbar-expand-lg" aria-label="Offcanvas Primary">
					<div class="container-fluid">
						<a class="navbar-brand" href="/">
							<!-- <picture>
								<source media="(min-width:425px)" srcset="/assets/logo/logo-petrosains-full.svg" />
								<img class="logo" src="/assets/logo/logo-petrosains-icon.svg" alt="Logo of Petrosains" />
							</picture> -->
							<img class="logo" src="/assets/logo/logo-petrosains-full.svg" alt="Logo of Petrosains" />
						</a>
						<!-- <div>
							<?php
							/* wp_nav_menu(array(
								'theme_location'  => 'primary3',
								'menu_id'        => 'primary3',
								'menu_class'      => 'navbar-nav',
								'container' => false,
								'fallback_cb' => false,
								'items_wrap'      => '<ul id="primary_3-mobile" class="%2$s">
								<span class="navbar-text me-3">' . displayBusinessHours() . '</span>
								%3$s</ul>',
								'depth' => 2,
								'walker' => new bootstrap_5_wp_nav_menu_walker(),
							)); */
							?>
							<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasPrimary" aria-controls="offcanvasPrimary" aria-label="Toggle navigation">
								<i class="bi bi-list fs-3"></i>
							</button>
						</div> -->
						<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasPrimary" aria-controls="offcanvasPrimary" aria-label="Toggle navigation">
							<i class="bi bi-list fs-3"></i>
						</button>

						<div class="offcanvas offcanvas-end text-bg-primary" tabindex="-1" id="offcanvasPrimary" aria-labelledby="offcanvasPrimaryLabel">
							<div class="offcanvas-header">
								<h5 class="offcanvas-title" id="offcanvasPrimaryLabel">
									Explore Petrosains
								</h5>
								<button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
							</div>

							<div class="offcanvas-body">
								<?php
								wp_nav_menu(array(
									'theme_location'  => 'primary1',
									'menu_id'        => 'primary1',
									'menu_class'      => 'navbar-nav',
									'container' => false,
									'fallback_cb' => false,
									'items_wrap'      => '<ul id="primary_1" class="%2$s">%3$s</ul>',
									'depth' => 2,
									'walker' => new bootstrap_5_wp_nav_menu_walker()
								));
								wp_nav_menu(array(
									'theme_location'  => 'primary2',
									'menu_id'        => 'primary2',
									'menu_class'      => 'navbar-nav',
									'container' => false,
									'fallback_cb' => false,
									'items_wrap'      => '<ul id="primary_2" class="%2$s">%3$s</ul>',
									'depth' => 2,
									'walker' => new bootstrap_5_wp_nav_menu_walker()
								));

								// Custom function for opening_time widget area
								// function widget_area_opening_time()
								// {
								// 	ob_start();
								// 	dynamic_sidebar('opening-time');
								// 	return ob_get_clean();
								// }

								// echo do_shortcode('	');

								// wp_nav_menu(array(
								// 	'theme_location'  => 'primary3',
								// 	'menu_id'        => 'primary3',
								// 	'menu_class'      => 'navbar-nav',
								// 	'container' => false,
								// 	'fallback_cb' => false,
								// 	'items_wrap'      => '<ul id="primary_3" class="%2$s">
								// 	<span class="navbar-text me-3">' . displayBusinessHours() . '</span>
								// 	%3$s</ul>',
								// 	'depth' => 2,
								// 	'walker' => new bootstrap_5_wp_nav_menu_walker(),
								// ));

								// add dynamic sidebar widget area id:primary-menu-cta-section
								if (is_active_sidebar('primary-menu-cta-section')) {
									dynamic_sidebar('primary-menu-cta-section');
								}

								/* wp_nav_menu(array(
									'theme_location'  => 'primary3',
									'menu_id'        => 'primary3',
									'menu_class'      => 'navbar-nav',
									'container' => false,
									'fallback_cb' => false,
									'items_wrap'      => '<ul id="primary_3" class="%2$s">
									<span class="navbar-text me-3">' . widget_area_opening_time() . '</span>
									%3$s</ul>',
									'depth' => 2,
									'walker' => new bootstrap_5_wp_nav_menu_walker(),
								)); */
								?>
							</div>
						</div>
					</div>
				</nav>
			</div>
		</header>