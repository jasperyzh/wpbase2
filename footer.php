<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wpbase2
 */

?>

<footer>
	<div class="container">
		<div class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
			<div class="col-md-4 d-flex align-items-center">
				<a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
					<i class="bi bi-bootstrap-fill" style="font-size: 30px; color: var(--bs-purple)"></i>
				</a>
				<span class="mb-3 mb-md-0 text-muted">&copy; wpbase2 theme</span>
			</div>

			<ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
				<li class="ms-3">
					<a class="text-muted" href="#">
						<i class="bi bi-twitter" style="font-size: 24px; color: var(--bs-gray-500)"></i>

					</a>
				</li>
				<li class="ms-3"><a class="text-muted" href="#">
						<i class="bi bi-youtube" style="font-size: 24px; color: var(--bs-gray-500)"></i>

					</a></li>
				<li class="ms-3"><a class="text-muted" href="#">
						<i class="bi bi-facebook" style="font-size: 24px; color: var(--bs-gray-500)"></i>

					</a></li>
			</ul>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>

</html>