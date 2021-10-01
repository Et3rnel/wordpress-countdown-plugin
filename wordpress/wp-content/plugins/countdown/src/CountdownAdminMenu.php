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
		wp_register_style(
			'countdown-admin',
			plugins_url('style.css', 'countdown/web/dist/style.css')
		);

		wp_register_script(
			'countdown-admin',
			plugins_url('admin-menu.umd.js', 'countdown/web/dist/admin-menu.umd.js') // TODO : change this
		);

		wp_enqueue_style('countdown-admin');
		wp_enqueue_script('countdown-admin');

		global $wpdb;
		$mytables=$wpdb->get_results("SHOW TABLES");
		foreach ($mytables as $mytable)
		{
			foreach ($mytable as $t)
			{
				echo $t . "<br>";
			}
		}

		echo '<div id="admin-menu"></div>';
	}
}
