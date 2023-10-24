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
			<?php //do_action("wpbase_do_header"); ?>
		</header> -->

		<header id="site-header" class="fixed-top glass_only">
			<div class="container-fluid">
				<nav class="navbar navbar-expand-lg" aria-label="Offcanvas Primary">
					<div class="container-fluid">
						<a class="navbar-brand" href="/">
							<picture>
								<source media="(min-width:425px)" srcset="/assets/logo-petrosains-full.svg" />
								<img class="logo" src="/assets/logo-petrosains-icon.svg" alt="Logo of Petrosains" />
							</picture>
						</a>
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
								<ul id="primary_1" class="navbar-nav">
									<!-- 
									<li class="nav-item">
										<a class="nav-link active" aria-current="page" href="#">Home</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Link</a>
									</li> 
									-->
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
											Visit
										</a>
										<ul class="dropdown-menu">
											<li>
												<a class="dropdown-item" href="#">Latest Exhibitions</a>
											</li>
											<li><a class="dropdown-item" href="#">Another action</a></li>
										</ul>
									</li>

									<li class="nav-item">
										<a class="nav-link" href="#">Experiences</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Gettin Here</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">About Us</a>
									</li>
								</ul>
								<ul id="primary_2" class="navbar-nav glass_only">
									<li class="nav-item">
										<a class="nav-link" href="#">Venue Rental</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Xplorasi Gift Shop</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Discoverers League</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Explore PlaySmart</a>
									</li>
								</ul>

								<ul id="primary_3" class="navbar-nav">
									<span class="navbar-text me-3">Open Today 9AM-9PM</span>
									<li class="nav-item">
										<a class="btn btn-secondary rounded-pill text-white" target="_blank" href="https://eticket.petrosains.com.my/">Buy Tickets</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</nav>
			</div>
		</header>