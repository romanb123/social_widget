<?php
/**
 * Plugin Name:       Easy Social Widget
 * Description:       add social widget to your website
 * Version:           1.0.0
 * Author:            roman
 **/

// protect the file
if (!defined('ABSPATH')) {
    exit;
}
// include the php scripts
require_once plugin_dir_path(__FILE__) . '/includes/social_wid_scripts.php';
require_once plugin_dir_path(__FILE__) . '/includes/social_wid_class.php';
// register the widget
function register_social_wid()
{
    register_widget('Social_Widget');
}

add_action('widgets_init', 'register_social_wid');
