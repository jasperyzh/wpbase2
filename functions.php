<?php

/**
 * 
 * 
 * 231205
 * - contact form - test email - https://stagingpetrosains.fishermen-analytics.com/contact-us/
 * - add href - infopetrosains@petronas.com
 * 
 * style
 * - line-height for paragraph
 * 
 * Homepage
--- instagram to be titlecase

--- #breadcrumbs - remove text-transform: uppercase;

--- .card.card__enquiry .label --- flex: 1;
--- .card.card__enquiry .detail --- flex: 3;


https://stagingpetrosains.fishermen-analytics.com/about/the-leadership-team/%20Beh%20Teng%20Peng%20Director%20of%20Finance%20(Acting)
--- replace with "petrosains" logo as placeholder

--- social media button - youtube to :https://twitter.com/petrosains
--- add youtube channel


https://stagingpetrosains.fishermen-analytics.com/visit/plan-a-school-field-trip/
--- ul-li - remove padding and add margin


--- table restyle

--- https://stagingpetrosains.fishermen-analytics.com/2023/07/science-show-panca-sains/ - restyle: add backround to the cards

--- frontpage-exhibitions - link to all exhibitions

--- map - replace starting icon with "START"

 * 
 * 
 * https://stagingpetrosains.fishermen-analytics.com/visit/plan-a-school-field-trip/
 * 
 * 
 * 231116
 * 
 * Completed Tasks
 * Redirects - Set up for key pages like /buy-tickets, /online-shop.
 * 
 * Template Checks - Ensured compatibility and functionality across various templates including page, archive, 404 error, etc.
 * 
 * Styling Checks - Improved UI elements like footers, banners, and breadcrumbs.
 * 
 * Page Specific Checks - Enhanced frontpage, exhibition pages, and others with content and styling adjustments.
 * 
 * Elementor Components - Created and styled a wide range of components including sections for content, features, galleries, and CTAs.
 * 
 * 
 * 
 * Pending Tasks
 * 
 * Page Finalization - Some pages need final touches, such as the exhibition page and swiper styling. featured_images, additional contents
 * 
 * Staging Checklist - Includes replacing page banners, disabling WP_DEBUG, menu verification, and randomizing placeholder images.
 * 
 * Launch Preparations - Disabling noindex settings, specifying image guidelines, and enabling contact-us page.
 * 
 * 
 user: petrosains_editor
 pass: i1DqCpIaiRgz7j)2EETTnYMk
 role: editor (on content management including creating, editing, and publishing posts)

 user: petrosains_admin
 pass: Pd@Oz8Q)mmht)rMTjePw1svZ
 role: admin (full access to the website, the ability to modify themes, plugins, and settings, and manage user roles)



https://stagingpetrosains.fishermen-analytics.com/visit/admission-and-ticketing/


// text-center
http://stagingpetrosains.fishermen-analytics.com/about/the-petrosains-board/
http://stagingpetrosains.fishermen-analytics.com/about/the-leadership-team/


// mission - text-center, maxwidth
http://stagingpetrosains.fishermen-analytics.com/about/corporate-social-responsibility-programs/


// icon center
http://stagingpetrosains.fishermen-analytics.com/contact-us/


// images - text center
http://stagingpetrosains.fishermen-analytics.com/playsmart/


// "Sorry, no posts matched your criteria." style it
http://stagingpetrosains.fishermen-analytics.com/category/workshop/

// add anchor scroll padding

notes: 

- add pink button on masthead video banner 
- infopetrosains@petronas.com for the contact form
- share backend access for clients

addition changes - redesign exhibitions map


the text-center override issue
 * 
 */

/**
 * TASKLIST
 * 231107-goal: 80% by nov14
 * 231103-starts
 * 
 * 
 * 
 * REDIRECT
 * - [x] /buy-tickets
 * - [x] /online-shop
 * - [x] /virtual-tour
 * - [x] /visit (used as parent_page; redirect to /visit/latest-exhibitions)
 * 
 * 
 * 
 * TEMPLATE CHECK
 * - [x] template: page
 * - [x] featured image on page? -/visit/facilities-accessibility/ -disabled
 * - [x] template: archive
 *   - [x] NEED STYLING
 *   - [x] check on category
 *   - [x] check on wonderblog
 * - [x] template: 404error -disabled extra widgets...
 * - [x] template: search
 * - [x] template: single
 * - [x] template: single-fullwidth
 * - [x] template: page_article for simple content; template_slim_page
 * - /privacy-policy
 * - /terms-of-use
 * 
 * 
 * 
 * STYLING CHECK 
 * - [x] footer: padding-bottom, divider overlap with socialmedia buttons
 * - [x] page_banner with margin-top from primary-navigation
 * - [x] 404page-margin_top
 * - [x] breadcrumb background contrast - http://petrosains.localhost/visit/latest-exhibitions/
 * /page-components
 * - [x] contact_details; class .contact_detail
 * - [x] style: /2023/07/petrosains-science-drama-competition/
 * /page-elementor
 * 
 * 
 * 
 * PAGE:FIRST_PASS / SECOND_PASS-check section&content / THIRD_PASS-check styling
 * - [x] /frontpage
 * - [x] masthead - video popups
 * - [x] introduction - blob & inverted white-text
 * - [x] carousel - add top-wave and bottom-wave
 * - [x] carousel - swiperjs
 * - [x] attraction - pull posts: promotions
 * - [x] attraction - style cards
 * - [x] ticket - add wavy image above (jpeg with white-background)
 * - [x] ticket - add wavy purple background
 * - [x] promotions - purple variant
 * - [x] promotions - styling: green text
 * - [x] CTA - blob_with_title (fixed aspect-ratio)
 * - [x] CTA - apply to elementor!
 - [ ] exhibition - add button redirect to /visit/latest-exhibitions
 - [x] exhibition - blob
 - [x] exhibition - images layout
 - [ ] swiper fix styling

 
 * 
 * 
 * 
 * ELEMENTOR COMPONENTS CREATE
 * - [x] section__content-image
 * - [x] section__feature_content*3
 * - [x] section__feature_image_content*3
 * - [x] section__feature_image_content*4 - CTA 
 * - [x] section__icon_content*3
 * - [x] section__icon_content*2
 * - [x] section__icon_content*4
 * - [x] section__icon_content*4 (3)
 * - [x] section__icon_content*4 - get_icons:https://petrosains.com.my/the-discoverers-league/
 * - [x] section__intro
 * - [x] section__intro--large
 * - [x] section__carousel
 * - [x] section__person/award-> section__team 
 * - [x] section__gallery--1
 * - [x] section__gallery--2
 * - [x] section__gallery--3
 * - [x] section__gallery--4
 * - [x] section__gallery--5
 * - [x] section__carousel_testimonial -> section__testimonial
 * - [x] section__address, contact_detail, map_link, googlemap
 * - [x] section__contact_form
 * - [x] section__contact_us
 * - [x] section__enquiry- contact_detail
 * - [x] section__table - opening time
 * - [x] section__table - admission rate
 * - [x] section__table: events
 * - [x] section__table: events - WEEK SPECIAL
 * - [x] section__table: events - For Invited School Only
 * - [x] section__CTA - Petrosains PlaySmart
 * - [x] section__CTA - https://eticket.petrosains.com.my/
 * - [x] section__CTA - https://shop.petrosains.com.my/
 * - [x] section__CTA - https://forms.office.com/r/vLWDWGkXDN
 * - [x] section__CTA * 3
 * - [x] section__highlight - Energy Capsule Tickets
 * - [x] section__highlight - maker studio
 * - [x] section__brochure - eng,bm,chi
 * - [x] section__accordion - Online Ticketing FAQ
 * - [x] section__vacancy - use accordion

 * 
 * ELEMENTOR COMPONENTS STYLING runthrough
 - [x] style generic template for elementor
 - [x] section__container :last - add padding-bottom;
 - [x] card__enquire - style <a> text-white
 * 
 * 
 * - http://petrosains.localhost/visit/latest-exhibitions
 * - [x] elementor buttons styling - /latest-exhibititions
 * - [x] check styling with mocks
 * - [x] disable default background
 * - [x] divider as background
 * 
 * 
 * - http://petrosains.localhost/visit/admission-and-ticketing - https://petrosains.com.my/admission-and-ticketing/
 * - [x] section: intro
 * - [x] section: carousel
 * - [x] section: table - opening time
 * - [x] section: table - admission rate
 * - [x] section: CTA - Petrosains PlaySmart
 * - [x] section: highlight - Energy Capsule Tickets
 * - [x] section: highlight - maker studio
 * - [x] section: brochure - eng,bm,chi
 * - [x] section: accordion - Online Ticketing FAQ
 * 
 * 
 * - http://petrosains.localhost/about - https://petrosains.com.my/about-us/
 * - [x] section: intro
 * - [x] section: feature_content*3
 * - [x] section: feature_image_content*3
 - [ ] section: carousel_testimonial
 * - http://petrosains.localhost/about/the-petrosains-board
 * - [x] section: intro
 * - [x] section: person
 * - http://petrosains.localhost/about/the-leadership-team
 * - [x] section: intro
 * - [x] section: person
 * - http://petrosains.localhost/about/the-people
 * - [x] section: intro
 * - [x] content
 * - http://petrosains.localhost/about/awards-and-recognition
 * - [x] section: intro
 * - [x] section: award - section__team
 * - http://petrosains.localhost/about/corporate-social-responsibility-programs - https://petrosains.com.my/support-in-corporate-social-responsibility-csr-programs
 * - [x] section: intro
 * - [x] section: carousel
 * - [x] section: icon_content*2
 *
 *  - http://petrosains.localhost/contact-us - https://petrosains.com.my/contact-us/
 * - [x] section: address, contact_detail, map_link, googlemap
 * - [x] section: contact_form
 * 
 * 
 * 
 * 
 *  - http://petrosains.localhost/visit/facilities-accessibility - https://petrosains.com.my/facilities-accessibility/
 * - [x] section: intro
 * - [x] section: icon_content*3
 * - [x] section: intro
 * - [x] section: icon_content*2
 * - [x] section: intro
 * - [x] section: icon_content*3
 * - [x] section: icon_content*3
 - [ ] section: carousel_testimonial
 * 
 *  - http://petrosains.localhost/visit/getting-to-the-centre - https://petrosains.com.my/getting-to-the-centre/
 * - [x] section: intro
 * - [x] section: address, contact_detail, map_link, googlemap
 * - [x] section: icon_content*4
 * - [x] section: icon_content*4 (3)
 * 
 *  - http://petrosains.localhost/visit/plan-a-trip - https://petrosains.com.my/plan-a-group-visit/
 * - [x] section: intro
 * - [x] section: carousel
 * - [x] section: feature_content*3
 * - [x] section: feature_content*3
 * - [x] section: enquiry-contact_detail
 *
 *  - http://petrosains.localhost/visit/plan-a-school-field-trip - https://petrosains.com.my/plan-a-school-field-trip/
 * - [x] section: intro
 * - [x] section: carousel
 * - [x] section: feature_content*3
 * - [x] section: feature_content*3
 * - [x] section: enquiry-contact_detail
 *
 * 
 * 
 * 
 * - http://petrosains.localhost/visit/the-discoverers-league - https://petrosains.com.my/the-discoverers-league/
 * - [x] section: intro
 * - [x] section: CTA - https://eticket.petrosains.com.my/
 * - [x] section: icon_content*4 - get_icons:https://petrosains.com.my/the-discoverers-league/
 * - [x] section: accordion
 *
 *  - http://petrosains.localhost/visit/xplorasi-petrosains-gift-shop - https://petrosains.com.my/xplorasi-petrosains-gift-shop/
 * - [x] section: intro
 * - [x] section: opening_time
 * - [x] section: CTA - https://shop.petrosains.com.my/
 * 
 *  - http://petrosains.localhost/host-an-event - https://petrosains.com.my/special-programme/
 * - [x] section: intro
 * - [x] section: carousel
 * - [x] section: enquiry-contact_detail
 *
 *  - http://petrosains.localhost/host-an-event/space-rental
 * - [x] section: intro
 * - [x] section: carousel - add:placeholder_images
 * - [x] section: enquiry-contact_detail
 *
 * 
 * 
 *
 * - http://petrosains.localhost/career - https://petrosains.com.my/job-opportunities
 * - [x] section: intro
 * - [x] section: vacancy - use accordion
 *
 * - http://petrosains.localhost/become-an-intern - https://petrosains.com.my/become-an-intern/
 * - [x] section: intro
 * - [x] article
 * - [x] section: enquiry-contact_detail
 *
 * - http://petrosains.localhost/be-our-volunteer - https://petrosains.com.my/be-our-volunteer/
 * - [x] section: intro
 * - [x] article
 * - [x] section: CTA - https://forms.office.com/r/vLWDWGkXDN
 *
 * - http://petrosains.localhost/commercial-partnership - https://petrosains.com.my/commercial-partnership
 * - [x] section: intro
 * - [x] section: carousel
 * - [x] section: enquiry-contact_detail
 *
 * 
 * 
 * 
 * - http://petrosains.localhost/maker-studio - https://petrosains.com.my/maker-studio/
 * - [x] section: intro
 * - [x] section: carousel
 - [ ] section: CTA * 3
 * - http://petrosains.localhost/maker-studio/kuala-lumpur
 * - [x] section: carousel
 * - [x] section: table: opening_time
 * - [x] section: table: events
 * - [x] section: enquiry-contact_detail
 * - http://petrosains.localhost/maker-studio/kuching
 * - [x] section: carousel
 * - [x] section: table: opening_time
 * - [x] section: table: events
 * - [x] section: enquiry-contact_detail
 * - http://petrosains.localhost/maker-studio/johor-bahru
 * - [x] section: carousel
 * - [x] section: table: opening_time
 * - [x] section: table: events
 * - [x] section: enquiry-contact_detail
 * - http://petrosains.localhost/playsmart
 * - [x] section: intro
 * - [x] section: carousel
 - [ ] section: feature_image_content*4 - CTA
 * - http://petrosains.localhost/playsmart/kuantan
 * - [x] section: table: opening_time
 * - [x] section: table: events - WEEK SPECIAL
 * - [x] section: table: events - For Invited School Only
 * - [x] section: gallery
 * - [x] section: contact_us
 * - http://petrosains.localhost/playsmart/johor-bahru
 * - [x] section: table: opening_time
 * - [x] section: table: events - WEEK SPECIAL
 * - [x] section: gallery
 * - [x] section: contact_us
 * - http://petrosains.localhost/playsmart/kota-kinabalu
 * - [x] section: table: opening_time
 * - [x] section: table: events - WEEK SPECIAL
 * - [x] section: gallery
 * - [x] section: contact_us
 * - http://petrosains.localhost/playsmart/kuching
 * - [x] section: table: opening_time
 * - [x] section: table: events - WEEK SPECIAL
 * - [x] section: contact_us
 * 
 * 
 * 
 * REMOVED
 * - /wonderblog // disabled as there no blog content
 * - [x] added card-archive 
 * 
 * 
 * 
 * FEATURES
 * - [x] nav_primary: widget for opening_time
 * - [x] check functionality of lightbox on photoswipe/elementor
 * - [x] page_banner: implement into CMS
 * - [x] page_banner: images for different template
 * - [x] page_banner: custom field for page_banner
 * 
 * 
 * 
 * MENU CHECK
 * 
 * 
 * UAT List of updates
 * 
- [x] add pink button on masthead video banner *
- [x] share backend access for clients

- [x] addition changes - redesign exhibitions map
- [x] Science show & Pancasains
- [x] promotions & events


1. Navigation and Accessibility
- [x] Eshop Tab: Include the ESHOP tab in the main menu (missing in the new website).
- [x] Visit Us Menu Updates:
    - [x] Add "Pixel Virtual Tour" to the Experience tab.
    - [x] Include "Plan a school field trip" in the Plan Your Events tab.

2. Content and Structure
- [x] Duplicate Tabs: Merge or differentiate the "Explore Our Discovery Centre" and "Experience" tabs.
- [x] Makers Studio: Add the Makers Studio tab, which is present in the current website but missing in the new design.
- [x] Careers Tab: Include the Careers tab for job and internship information.

3. Design and User Experience
- [x] Icon Alignment: Correct the alignment of the icon in the "Getting To Us" section.
- [x] Playsmart Photos: Update Playsmart photos to reflect current offerings.


New Feature Requests
- Background Options: Provide multiple background options for selection.
- Open/Close Time Information: Implement an automated open/close system indicating special closing times, like the first Monday of every month.

Missing exhibition info
- time zone
- space lab

 * 
 * 
 * 
 * PRODUCTION-SERVER: STAGING CHECKLIST
 - [x] replace page_banner with relevant images
 - [ ] disable WP_DEBUG
 - [ ] check all pages accounted for on menus
 - [ ] extra: randomize placeholder images
 - [ ] check on form submission to: infopetrosains@petronas.com
 - [x] infopetrosains@petronas.com for the contact form
 * 
 * 
 * 
 * LAUNCH CHECKLIST
 - [ ] disable norobot/noindex
 - [ ] list down specification for images
 - [ ] enable /contact-us
 * 
 * 
 * 
 * ADDON
 * - [ ] style: minor: photoswipe lightbox causes viewport to shift
 * - [ ] page_banner - background wave
 * - [ ] frontpage: gallery - instagram plugin?
 * - [ ] frontpage: effect_background - blur-blobs + parallax
 * - [ ] component: card-cta - restyle to align to all pages / easy variant
 * - [ ] sprinker AOS animation to elements
 * - [ ] generic image as placeholder
 * - [ ] generic copy as placeholder
 * - simple highlight hover effect
 * + class: .opening_time
 * + class: .contact_detail
 * - [ ] about: sub-navigation for about pages
 * 
 */

/**
 * @version 0.9.0
 */

// Exit if accessed directly
if (!defined('ABSPATH'))
    exit;

/**
 * functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wpbase2
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

// define('DEFAULT_FEATURED_IMAGE', '<svg class="bd-placeholder-img" width="400" height="300" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em" text-anchor="middle" dominant-baseline="middle">Featured Image</text></svg>');
define('DEFAULT_FEATURED_IMAGE', '<img src="https://images.pexels.com/photos/1478442/pexels-photo-1478442.jpeg?auto=compress&cs=tinysrgb&w=800&h=600&dpr=1" class="object-fit-cover w-100" width="400" height="300">');

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wpbase2_setup()
{
    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ]);

    add_theme_support(
        'custom-background',
        apply_filters('wpbase2_custom_background_args', [
            'default-color' => 'ffffff',
            'default-image' => '',
        ])
    );

    add_theme_support('customize-selective-refresh-widgets');

    add_theme_support('custom-logo', [
        'height'      => 250,
        'width'       => 250,
        'flex-width'  => true,
        'flex-height' => true,
    ]);

    register_nav_menus([
        'primary1' => esc_html__('Primary #1', 'wpbase'),
        'primary2' => esc_html__('Primary #2', 'wpbase'),
        'primary3' => esc_html__('Primary #3', 'wpbase'),
        'footer1' => esc_html__('Footer #1', 'wpbase'),
        'footer2' => esc_html__('Footer #2', 'wpbase'),
        'footer3' => esc_html__('Footer #3', 'wpbase'),
    ]);


    /**
     * Implement the Custom Header feature.
     */
    require get_template_directory() . '/inc/custom-header.php';

    /**
     * Custom template tags for this theme.
     */
    require get_template_directory() . '/inc/template-tags.php';

    /**
     * Functions which enhance the theme by hooking into WordPress.
     */
    require get_template_directory() . '/inc/template-functions.php';

    /**
     * Customizer additions.
     */
    require get_template_directory() . '/inc/customizer.php';

    /**
     * Register Custom Navigation Walker
     */
    require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

    /**
     * wpbase_inc
     */
    require get_template_directory() . '/inc/wp-reset_wp.php';
    require get_template_directory() . '/inc/wp-reset_image_sizes.php';
    require get_template_directory() . '/inc/wp-disable_comment.php';
    require get_template_directory() . '/inc/wp-nav_menu.php';
    require get_template_directory() . '/inc/wp-admin-sortbyordercolumn.php';
    require get_template_directory() . '/inc/wpbase2-entry-functions.php';
}
add_action('after_setup_theme', 'wpbase2_setup');

/**
 FILTERS
 */
// function add_search_form_class($form)
// {
//     /**
//     BOOTSTRAP IT
//      */
//     $form = str_replace('class="search-form"', 'd-flex mt-3 mt-lg-0" role="search"', $form);
//     return $form;

//     // <form class="d-flex mt-3 mt-lg-0" role="search">
//                         <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
//                         <button class="btn btn-outline-success" type="submit">Search</button>
//                     // </form>
// }
// add_filter('get_search_form', 'add_search_form_class');

function bootstrap_search_form($form)
{
    $form = '
    <form role="search" method="get" class="d-flex mt-3 mt-lg-0" action="' . home_url('/') . '">
        <input class="form-control me-2" type="search" placeholder="Search" value="' . get_search_query() . '" name="s" id="s" aria-label="Search">
        <button class="btn btn-outline-success" type="submit" id="searchsubmit">Search</button>
    </form>';
    return $form;
}
// add_filter('get_search_form', 'bootstrap_search_form');

// templates
function petrosains_template_insertion()
{
    // add_action("wpbase_do_entry_header", "wpbase2_post_thumbnail");

    // page template
    /*  if (is_single()) {
        add_action("wpbase_do_content", function () {
?>
            <div class="container">
                <div class="row g-5">
                    <div class="col-md-8">
                        <?php //get_template_part("template-parts/bootstrap", "single-article") ?>

                        <?php wpbase_single_content_meta() ?>
                    </div>

                    <div class="col-md-4">
                        <?php //get_template_part("template-parts/bootstrap", "single-sidebar") ?>
                    </div>
                </div>
            </div>
            <?php
        });
    } */

    if (is_page() && !is_front_page() && !is_home()) {
        add_action("wpbase_do_content", function () {

            // Check if the current page is using any custom template
            $template_slug = get_page_template_slug(get_queried_object_id());

            // If a custom template is in use, return early
            /* if ('' !== $template_slug && 'default' !== $template_slug) {
                return;
            } */

            // If a custom template is in use, check if it is one of the templates that should not display the_content()

            // If a custom template is in use, check if it is one of the templates that should not display the_content()
            if ('template-article-fullwidth.php' === $template_slug || 'template-page-slim.php' === $template_slug) {
                // Output custom template content or nothing
                // ...
            } else {
                while (have_posts()) :
                    the_post();
?>
                    <div class="container">
                        <?php get_template_part('template-parts/content', 'page'); ?>
                    </div>
<?php
                endwhile;
            }
        });
    }

    // page_banner
    add_action("wpbase_do_content", function () {
        if (!is_front_page() && is_home() || is_single() || !is_front_page() && is_page() || is_archive() || is_search()) :
            get_template_part('template-parts/page', "banner");
        endif;
    }, 2);
}
add_action("template_redirect", "petrosains_template_insertion");



/**
 * add yoast_seo breadcrumbs
 * move to wpbase2/inc
 * check on this: https://yoast.com/help/add-theme-support-for-yoast-seo-breadcrumbs/
 * add_theme_support( 'yoast-seo-breadcrumbs' );
 */
function add_breadcrumb()
{
    if (function_exists('yoast_breadcrumb')) {
        if (!is_front_page() && (is_single() || is_page() || is_archive())) {
            yoast_breadcrumb('<p id="breadcrumbs" class="my-3">', '</p>');
        }
    }
}


// wpbase2_petrosains setup_vite

// vite
// wp_config_php: IS_VITE_DEVELOPMENT
require get_template_directory() . '/inc/inc.vite.php';

/**
 * enqueues
 */
function enqueue_petrosains_scripts()
{
    wp_enqueue_style('bootstrap-icons', get_template_directory_uri() . '/lib/bootstrap-icons-1.10.5/font/bootstrap-icons.css', [], "1.10.5", "all");
}
add_action("wp_enqueue_scripts", "enqueue_petrosains_scripts");


// widget
function petrosains_widget_opening_time()
{
    register_sidebar(
        array(
            'name'          => esc_html__('Primary Navigation: Opening Time', 'petrosains'),
            'id'            => 'opening-time',
            'description'   => esc_html__('Add Opening Time on Primary Navigation Bar.', 'petrosains'),
            // 'before_widget' => '<section id="%1$s" class="widget %2$s">',
            // 'before_widget' => '',
            // 'after_widget'  => '',
            // 'before_title'  => '',
            // 'after_title'   => '',
        )
    );
}
add_action('widgets_init', 'petrosains_widget_opening_time');


// AFC to body class
function page_custom_body_classes($classes)
{
    // Only do this on the front-end
    if (!is_admin()) {
        // Get the current page ID
        $page_id = get_queried_object_id();

        // Get the custom field value
        $custom_classes = get_field('page_body_classes', $page_id);

        // If the field has a value, add it to the body class array
        if ($custom_classes) {
            // If there are multiple classes, split them into an array
            $custom_classes_array = explode(' ', $custom_classes);
            $classes = array_merge($classes, $custom_classes_array);
        }
    }

    return $classes;
}
add_filter('body_class', 'page_custom_body_classes');


// shortcode for using get_template_part on cms
function get_template_shortcode($atts)
{
    ob_start(); // Start output buffering

    // Extract attributes and set default template
    $atts = shortcode_atts(array(
        'slug' => 'default', // default slug
        'name' => ''         // default name (optional)
    ), $atts);

    // Load the template part
    get_template_part($atts['slug'], $atts['name']);

    return ob_get_clean(); // Return the buffered output
}

add_shortcode('get_template_shortcode', 'get_template_shortcode');



/**
 * opening_time
 * @todo move to cms
 * 
 * // Usage
 * // echo displayBusinessHours();
 */
function displayBusinessHours()
{
    // Define the business hours
    $weekdaysHours = '9:30 AM — 5:30 PM';
    $weekendHours = '9:30 AM — 6:30 PM';

    // Define public holidays or special days
    $publicHolidays = [
        '2024-01-01', // Example: New Year's Day
        '2024-12-25', // Example: Christmas
        // Add more dates as 'YYYY-MM-DD'
    ];

    // Get current date and time
    $currentDate = new DateTime();
    $dayOfWeek = $currentDate->format('l'); // Day of the week
    $currentDateFormatted = $currentDate->format('Y-m-d');
    $firstMonday = new DateTime('first monday of ' . $currentDate->format('F Y'));
    $thirdMonday = new DateTime('third monday of ' . $currentDate->format('F Y'));

    // Check if today is a public holiday
    if (in_array($currentDateFormatted, $publicHolidays)) {
        return 'Closed Today (Public Holiday)';
    }

    // Check if today is the first or third Monday of the month
    if ($dayOfWeek === 'Monday' && ($currentDateFormatted === $firstMonday->format('Y-m-d') || $currentDateFormatted === $thirdMonday->format('Y-m-d'))) {
        return 'Closed Today';
    }

    // Display business hours based on the day of the week
    switch ($dayOfWeek) {
        case 'Saturday':
        case 'Sunday':
            return 'Operation Hours: ' . $weekendHours;
        default:
            return 'Operation Hours: ' . $weekdaysHours;
    }
}