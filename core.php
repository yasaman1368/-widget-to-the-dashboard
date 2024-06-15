<?php
/*
Plugin Name:  widget-dashboard - ورژن 2
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description:  ویجت داشبورد
Author:محمد حسین عالی پور
Version: 2.0.0
License: GPLv2 or later
Author URI: http://develop-wp.local
*/
defined('ABSPATH') || exit;
define('yas01_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('yas01_PLUGIN_URL', plugin_dir_url(__FILE__));
const yas01_PLUGIN_INC = yas01_PLUGIN_DIR . '_inc/';
// const yas01_PLUGIN_VIEW = yas01_PLUGIN_DIR . 'view/';
// const yas01_PLUGIN_ASSETS = yas01_PLUGIN_DIR . 'assets/';
if (is_admin()) {
    include  yas01_PLUGIN_INC . 'admin/widget.php';
} else {
}
