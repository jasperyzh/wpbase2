# petrosains theme

readme

## Setup
```bash

# development and build
npm run start
npm run build
```

// 240105-updates [pending_for_staging]
- [CMS] social media icons on footer


// 240105-runthrough

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
