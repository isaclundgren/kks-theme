<?php

//Define path and URL to ACF-plugin

define('MY_ACF_PATH', get_stylesheet_directory() . '/inc/acf/');
define('MY_ACF_URL', get_stylesheet_directory_uri() . '/inc/acf/');

//Include ACF plugin

include_once( MY_ACF_PATH . 'acf.php');

//Customize the url setting to fix incorret asset URLs

add_filter('acf/settings/url', 'my_acf_settings_url');
function my_acf_settings_url($url) {
    return MY_ACF_URL;
}

// (Optional) Hide the ACF admin menu item.
// add_filter('acf/settings/show_admin', 'my_acf_settings_show_admin');
// function my_acf_settings_show_admin( $show_admin ) {
//     return false;
// }