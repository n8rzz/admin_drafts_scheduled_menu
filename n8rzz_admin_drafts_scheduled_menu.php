<?php
/*
    Plugin Name: Drafts/Scheduled menu item
    Plugin URI:
    Description: This plugin adds a "Drafts" and "Scheduled" section within the Admin Posts menu
    Version: 1.0
    Author: Nate Geslin
    Author URI:
    License: MIT
*/
// see: https://davidwalsh.name/wordpress-admin-add-menu-item
function add_drafts_admin_menu_item() {
  // $page_title, $menu_title, $capability, $menu_slug, $callback_function
  add_posts_page(__('Drafts'), __('Drafts'), 'read', 'edit.php?post_status=draft&post_type=post&orderby=date&order=desc');
}

add_action('admin_menu', 'add_drafts_admin_menu_item');


function add_scheduled_admin_menu_item() {
  add_posts_page(__('Scheduled'), __('Scheduled'), 'read', 'edit.php?post_status=future&post_type=post&orderby=date&order=desc');
}

add_action('admin_menu', 'add_scheduled_admin_menu_item');