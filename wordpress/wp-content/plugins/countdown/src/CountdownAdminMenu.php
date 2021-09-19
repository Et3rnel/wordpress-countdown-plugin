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
					'my_function'
				);
			}
		);
	}

	public function my_function() {
		echo 'Hello method!';
	}

    public function test()
    {
	    function my_function() {
		    echo 'Hello method!';
	    }

	    add_action(
		    'admin_menu', # Fires before the administration menu loads in the admin.
		    function() {
			    add_menu_page(
				    'My Page Title',
				    'My Menu Title',
				    'manage_options',
				    'my-page-slug',
				    'my_function'
			    );
		    }
	    );

        echo 'Je suis un test echo';
    }
}
