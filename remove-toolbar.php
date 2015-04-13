<?php
/*
Plugin Name: RemoveToolbar
Plugin URI: http://github.com/derektu/wp-removetoolbar
Description: Remove the top toolbar unless current user is admin.
Author: DerekTu
Author URI: http://github.com/derektu
Licence: GPLv3
Version: 1.0.0
*/

// Disable toolbar unless user is admin
//
add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
    if (!current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
    }
}

