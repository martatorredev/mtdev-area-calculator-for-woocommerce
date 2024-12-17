<?php
// If uninstall not called from WordPress, exit
if (!defined('WP_UNINSTALL_PLUGIN')) {
    exit;
}

// Delete options or data stored in the database
delete_option('area_calculator_options');
delete_post_meta_by_key('area_calculator_data');
?>