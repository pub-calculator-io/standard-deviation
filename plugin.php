<?php
/*
Plugin Name: Standard Deviation by Calculator.iO
Plugin URI: https://www.calculator.io/standard-deviation/
Description: Given a discrete data set, the calculator calculates the mean, variance, and standard deviation of a sample or a population and shows all the intermediate steps of calculations.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_standard_deviation
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Standard Deviation by Calculator.iO";

function display_ci_standard_deviation(){
    $page = 'index.html';
    return '<h2><a href="https://www.calculator.io/standard-deviation/" target="_blank"><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48"></a> Standard Deviation</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_standard_deviation_iframe"></iframe></div>';
}

add_shortcode( 'ci_standard_deviation', 'display_ci_standard_deviation' );