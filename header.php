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

	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'wpbase2'); ?></a>

	<header>
		<nav class="navbar navbar-expand-lg" aria-label="Offcanvas navbar large">
			<div class="container-fluid">
				<!-- <a class="navbar-brand" href="<?php echo home_url() ?>"><i class="bi bi-send-plus-fill" style="font-size: 48px"></i> wpbase2</a> -->
				<div class="site-branding">
					<?php
					the_custom_logo();
					if (is_front_page() && is_home()) :
					?>
						<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
					<?php
					else :
					?>
						<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
					<?php
					endif;
					$wpbase2_description = get_bloginfo('description', 'display');
					if ($wpbase2_description || is_customize_preview()) :
					?>
						<p class="site-description"><?php echo $wpbase2_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
													?></p>
					<?php endif; ?>
				</div>

				<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
					<div class="offcanvas-header">
						<h5 class="offcanvas-title" id="offcanvasNavbar2Label">Offcanvas</h5>
						<button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
					</div>
					<div class="offcanvas-body">
						<ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

							<?php wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								)
							); ?>

							<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="#">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Link</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									Dropdown
								</a>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="#">Action</a></li>
									<li><a class="dropdown-item" href="#">Another action</a></li>
									<li>
										<hr class="dropdown-divider">
									</li>
									<li><a class="dropdown-item" href="#">Something else here</a></li>
								</ul>
							</li>
						</ul>
						<form class="d-flex mt-3 mt-lg-0" role="search">
							<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
							<button class="btn btn-outline-success" type="submit">Search</button>
						</form>
					</div>
				</div>
			</div>
		</nav>
	</header>

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="d-flex flex-wrap justify-content-between py-3 mb-4 border-bottom">

				<div class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">

					<div class="site-branding">
						<?php
						the_custom_logo();
						if (is_front_page() && is_home()) :
						?>
							<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
						<?php
						else :
						?>
							<p class="site-title mb-0"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
						<?php
						endif;
						$wpbase_description = get_bloginfo('description', 'display');
						if ($wpbase_description || is_customize_preview()) :
						?>
							<p class="site-description mb-0"><?php echo $wpbase_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
																?></p>
						<?php endif; ?>
					</div><!-- .site-branding -->
				</div>

				<nav id="site-navigation" class="main-navigation d-flex align-items-center">



					<nav class="navbar navbar-expand-lg" aria-label="offcanvas navbar">

						<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
							<span class="navbar-toggler-icon"></span>
						</button>

						<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

							<div class="offcanvas-header">
								<h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
								<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
							</div>

							<div class="offcanvas-body">

								<?php
								wp_nav_menu(
									array(
										'theme_location'  => 'primary',
										'menu_id'        => 'primary-menu',
										'menu_class'      => 'navbar-nav justify-content-end flex-grow-1',
										'container'         => "",
										'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
										'fallback_cb'     => false,
										// custom parameter added thru functions-wpbas3.php
										'list_item_class'  => 'nav-item',
										'link_class'   => 'nav-link menu-item'
										//  nav-active
									)
								);
								?>
							</div>
						</div>
					</nav>
				</nav>
			</div>
		</div>
	</header>