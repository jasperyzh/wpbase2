<?php

/**
 * how to access user data
 */

// get the WP_User object WordPress creates for the currently logged-in user
global $current_user;

// get the currently logged-in user
$user = wp_get_current_user();

// variables
$user_id = 1;
$username = 'jason';
$email = 'jason@email.com';

// get a user by ID
$user = wp_getuserdata($user_id);

// get a user by another field
$user1 = wp_get_user_by('login', $username);
$user2 = wp_get_user_by('email', $email);

// user WP_User constructor directly
$user = new WP_User($user_id);

// use WP_User constductor with a username
$user = new WP_User($username);

// with WP_User object, can get any piece of user data
$user = wp_get_current_user();

echo $user->display_name;

//use user email address to send an email
wp_mail($user->user_email, 'Email Subject', 'Email body');

// get any user meta value
echo 'Department: ' . $user->department;


/**
 * add, update, delete users
 */
wp_insert_user();

update_user_meta($user_id, 'children', $children);

delete_user_meta($user_id, 'children');

wp_delete_user($user_id, 1); // reassign their posts to user with ID=1

// multisite delete user
wpmu_delete_user($user_id);

if (current_user_can('manage_options')) {
    // typically an admin
}
if (current_user_can('edit_user', $user_id)) {
    // can edit the user with ID = $user_id;
    // typically either the user himself or admin
}
if (current_user_can('edit_post', $user_id)) {
    // can edit the oist with ID = $user_id;
    // typically the author of the post, or admin, editor
}
if (current_user_can('subscriber')) {
    // check if current user is a subscriber
}

if(user_can($comment->user_id, 'edit_post', $post->ID)){

}
/**
 * creating custom roles and capabilities
 */
remove_role('office');
add_role('office', 'Office Manager', array());

$role = get_role('administrator');
$role->add_cap('office_report');

// dont let editor edit pages
$role = get_role('editor');
$role->remove_cap('edit_pages');

// Extending WP_User class

// Adding Registration and Profile Fields

// Customizing the Users Tale in the Dashboard

/**
 * how to customize the user profiles and reports in the dashboards
 */
