<?php

/**
 * @package wpbase2
 */
?>


<section class="footer__social spacing-lg">
	<div class="container">
		<div class="col mx-auto text-center">
			<h2>Stay Connected</h2>
			<div class="d-flex tw-gap-5 justify-content-center">
				<a class="btn btn-primary square-button rounded-circle" target="_blank" href="https://www.tiktok.com/@petrosains">
					<i class="bi bi-tiktok text-white"></i>
				</a>
				<a class="btn btn-primary square-button rounded-circle" target="_blank" href="https://www.facebook.com/petrosains">
					<i class="bi bi-facebook text-white"></i>
				</a>
				<a class="btn btn-primary square-button rounded-circle" target="_blank" href="https://www.instagram.com/instapetrosains/">
					<i class="bi bi-instagram text-white"></i>
				</a>
				<a class="btn btn-primary square-button rounded-circle" target="_blank" href="https://twitter.com/petrosains">
					<i class="bi bi-twitter text-white"></i>
				</a>
				<a class="btn btn-primary square-button rounded-circle" target="_blank" href="https://www.youtube.com/@PetrosainsVidz">
					<i class="bi bi-youtube text-white"></i>
				</a>
			</div>
		</div>
	</div>
</section>


<footer class="position-relative">
	<div class="footer__svg custom-shape-divider-bottom-1696931699">
		<svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
			<path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
		</svg>
	</div>

	<div class="container pt-1 pb-5">
		<div class="row">
			<div class="col-12 col-md text-center text-md-start">
				<section class="widget">
					<a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
						<img class="logo mx-auto mx-md-0" src="/assets/logo/logo-petrosains-full.svg" alt="Logo of Petrosains" width="180" />
					</a>
					<p>
						Petrosains, The Discovery Centre®
						<br />Level 4, Suria KLCC
						<br />PETRONAS Twin Towers
						<br />Kuala Lumpur City Centre
						<br />50088, Kuala Lumpur
					</p>
					<p><a href="mailto:infopetrosains@petronas.com" target="_blank">infopetrosains@petronas.com</a></p>
				</section>
			</div>

			<div class="col offset-md-1">
				<?php
				wp_nav_menu(array(
					'theme_location'  => 'footer1',
					'menu_id'        => 'footer1',
					'menu_class'      => 'nav flex-column',
					'container' => false,
					'fallback_cb' => false,
					'items_wrap'      => '<ul id="footer_1" class="%2$s">%3$s</ul>',
					'depth' => 2,
					'walker' => new bootstrap_5_wp_nav_menu_walker()
				));
				?>

				<!-- <ul class="nav flex-column">
					<li class="nav-item">
						<a href="#" class="nav-link">Admission & Tickets</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">Visit Information</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">Latest Events</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">Workshops</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">Venue Rental</a>
					</li>
				</ul> -->
			</div>

			<div class="col">

				<?php
				wp_nav_menu(array(
					'theme_location'  => 'footer2',
					'menu_id'        => 'footer2',
					'menu_class'      => 'nav flex-column',
					'container' => false,
					'fallback_cb' => false,
					'items_wrap'      => '<ul id="footer_2" class="%2$s">%3$s</ul>',
					'depth' => 2,
					'walker' => new bootstrap_5_wp_nav_menu_walker()
				));
				?>
				<!-- <ul class="nav flex-column">
					<li class="nav-item">
						<a href="#" class="nav-link">Join Membership</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">Volunteering</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">Career</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">Enquries</a>
					</li>
				</ul> -->
			</div>
		</div>
		<hr />
		<div class="container ps-lg-0">
			<?php
			wp_nav_menu(array(
				'theme_location'  => 'footer3',
				'menu_id'        => 'footer3',
				'menu_class'      => 'nav justify-content-center justify-content-md-start',
				'container' => false,
				'fallback_cb' => false,
				'items_wrap'      => '<ul id="footer_3" class="%2$s">%3$s
				<li class="nav-item">
					<a class="nav-link disabled" href="#">
						<p>&copy; Copyright 2023 Petrosains Sdn. Bhd. <span class="d-inline-block">(458560-H)</span></p>
					</a>
				</li></ul>',
				'depth' => 2,
				'walker' => new bootstrap_5_wp_nav_menu_walker()
			));
			?>
		</div>
	</div>
</footer>


<div id="effect_background">
	<div class="rellax">
		<div class="bg"></div>
	</div>
</div>

</div> <!-- .site-container -->


<?php wp_footer(); ?>

</body>

</html>