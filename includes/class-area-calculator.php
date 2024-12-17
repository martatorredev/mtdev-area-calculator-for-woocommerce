<?php
class AreaCalculator {
    public function __construct() {
        add_shortcode('area_calculator', [$this, 'renderShortcode']);
    }
    
    public function renderShortcode() {
        ob_start();
        include(plugin_dir_path(__FILE__) . '../templates/calculator-template.php');
        return ob_get_clean();
    }

    public function calculateArea($length, $width) {
        if (!is_numeric($length) || !is_numeric($width)) {
            return __('Invalid inputs.', 'mtdev-area-calculator');
        }
        return $length * $width;
    }
}
?>