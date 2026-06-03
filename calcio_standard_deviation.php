<?php
/*
Plugin Name: Standard Deviation by Calculator.iO
Plugin URI: https://www.calculator.io/standard-deviation/
Description: Easily calculate standard deviation, variance, and mean for any sample or population data set. Get instant, step-by-step solutions with our free calculator.
Version: 1.0.0
Author: www.calculator.io / Standard Deviation
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: calcio_standard_deviation
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Standard Deviation by www.calculator.io";

function calcio_standard_deviation_shortcode(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Standard Deviation</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="calcio_standard_deviation_iframe"></iframe></div>';
}


add_shortcode( 'calcio_standard_deviation', 'calcio_standard_deviation_shortcode' );