<?php

namespace Countdown;

class CountdownAdminMenu
{
	public function __construct() {
		add_action(
			'admin_menu', # Fires before the administration menu loads in the admin.
			function() {
				add_menu_page(
					'My Page Title',
					'My Menu Title',
					'manage_options',
					'my-page-slug',
					function() {
						$this->background();
					}
				);
			}
		);
	}

	public function background()
	{
		wp_register_script(
			'countdown-admin',
			plugins_url('my-lib.umd.js', 'countdown/web/dist/my-lib.umd.js')
		);

		wp_enqueue_script('countdown-admin');

		echo '<div id="app"></div>';
	}
}
