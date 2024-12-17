<?php
class AreaCalculator {
    public function __construct() {
        add_shortcode('area_calculator', [$this, 'registerShortcode']);
    }

    public function registerShortcode() {
        ob_start();
        include(plugin_dir_path(__FILE__) . '../templates/calculator-template.php');
        return ob_get_clean();
    }

    public function calculateArea($length, $width) {
        if (is_numeric($length) && is_numeric($width)) {
            return $length * $width;
        }
        return 0;
    }
}
?>