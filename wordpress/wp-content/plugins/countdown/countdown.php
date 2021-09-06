<?php

use Countdown\MenuAdminTest;

require plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';

/**
 * Plugin Name: Countdown
 * Description: Countdown plugin desc.
 * Version: 0.3
 */

$stylesheetPath = plugins_url('countdown.css', __FILE__);
$javascriptPath = plugins_url('countdown.js', __FILE__);

wp_register_style('countdown', $stylesheetPath);
wp_register_script('countdown', $javascriptPath);

function your_function()
{
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

add_action('wp_footer', 'your_function');



// TEST MENU
add_action('admin_menu', 'my_menu');

function my_menu() {
    add_menu_page('My Page Title', 'My Menu Title', 'manage_options', 'my-page-slug', 'my_function');
}

function my_function() {
    $a = new MenuAdminTest();

    $a->test();
    echo 'Hello world!';
}



