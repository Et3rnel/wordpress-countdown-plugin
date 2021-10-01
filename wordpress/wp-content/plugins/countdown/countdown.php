<?php

use Countdown\CountdownAdminMenu;
use Countdown\CountdownManager;

require plugin_dir_path( __FILE__ ) . 'src/vendor/autoload.php';

/**
 * Plugin Name: Countdown
 * Description: Countdown plugin desc.
 * Version: 0.1
 */

// Handle plugin install / uninstall process
function activate() {
	CountdownManager::activate();
}
register_activation_hook(__FILE__, 'activate');

function uninstall() {
	CountdownManager::uninstall();
}
register_uninstall_hook(__FILE__, 'uninstall');

// Init. countdown display on each page
function display_countdown()
{
	$stylesheetPath = plugins_url('countdown.css', __FILE__);
	$javascriptPath = plugins_url('countdown.js', __FILE__);

	wp_register_style('countdown', $stylesheetPath);
	wp_register_script('countdown', $javascriptPath);

    wp_enqueue_style('countdown');
    wp_enqueue_script('countdown');

    ?>
    <div class="countdown-container">
        <div class="countdown-description">This is inserted at the bottom haha HO</div>
        <div class="countdown-timer">
            <div id="countdown">
                <div id='tiles'></div>
                <div class="labels">
                    <li>Days</li>
                    <li>Hours</li>
                    <li>Mins</li>
                    <li>Secs</li>
                </div>
            </div>
        </div>
        <div class="countdown-button">CTA button</div>
    </div>
    <?php
}
add_action('wp_footer', 'display_countdown');

$countdownAdminMenu = new CountdownAdminMenu();


