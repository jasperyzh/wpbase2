<?php

/**
 * setting up multisite network
 */

/**
 * managing multisites
 * dashboard, sites, users, themes, plugins, settings, updates
 */

/**
 * multisite database structure
 * 
 * network-wide tables
 * wp_blogs, wp_blog_versions, wp_registration_log, wp_signups, wp_site, wp_sitemeta
 * 
 * individual sites tables
 * wp_$BLOG_ID_options
 * wp_$BLOG_ID_...
 * wp_$BLOG_ID_...
 */

/**
 * Shared Site Tables
 * 
 * user have the following meta keys
 * - primary_blog
 * - wp_2_capabilities
 * - wp_2_user_level
 * user can have one primary_blog, but can be tied to multiple sites with the capabilities and user_level
 */


/**
 * multisites plugins
 * 
 * WP MU Domain Mapping
 * 
 * Blog Copier
 * 
 * More Privacy Options
 * 
 * Multisite Global Search
 * 
 * Multisite Robots.txt Manager
 * 
 */

/**
 * multisites functionality
 */

$blog_id;

is_multisite();

get_current_blog_id();

switch_to_blog($new_blog); //pull posts or info from other sites
restore_current_blog(); //switch back after done with

get_blog_details($fields = null, $get_all = true); //get all available details of a site/blog

update_blog_details($blog_id, $details = array());

get_blog_status($id, $pref);

update_blog_status($blog_id, $pref, $value);

get_blog_option($id, $option, $default = false);

update_blog_option($id, $option, $value);

delete_blog_option($id, $option);

get_blog_post($blog_id, $post_id);

add_user_to_blog($blog_id, $user_id, $role);

// [DEPRECATED]create_empty_blog($doain, $path, $weblog_title, $site_id = 1);

/**
 * more to explore
 */
// wp-admin/includes/ms.php
// wp-includes/ms-blogs.php
// wp-includes/ms-functions.php


