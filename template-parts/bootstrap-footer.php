<footer>
    <div class="container py-3 my-4">
        <div class="row justify-content-center">

            <!-- nav__social -->
            <ul class="nav justify-content-center list-unstyled">
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

            <!-- nav__footer -->
            <!-- <ul class="nav justify-content-center border-bottom pb-3 mb-3"> -->
                <!-- <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li> -->
                <nav class="navbar navbar-expand-lg justify-content-center">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'container' => false,
                    'menu_class' => '',
                    'fallback_cb' => '__return_false',
                    'items_wrap' => '<ul id="%1$s" class="navbar-nav mx-auto %2$s">%3$s</ul>',
                    'depth' => 2,
                    'walker' => new bootstrap_5_wp_nav_menu_walker()
                ));
                ?>
                </nav>
            <!-- </ul> -->

            <!-- footer__copy -->
            <div class="col-auto d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                    <i class="bi bi-bootstrap-fill" style="font-size: 30px; color: var(--bs-purple)"></i>
                </a>
                <span class="mb-3 mb-md-0 text-muted">&copy; wpbase2 theme</span>
            </div>
        </div>
    </div>
</footer>