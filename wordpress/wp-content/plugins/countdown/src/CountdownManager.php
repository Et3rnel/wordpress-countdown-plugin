<?php

namespace Countdown;

class CountdownManager {
	public static function activate()
	{
		global $wpdb;
		$charset_collate = $wpdb->get_charset_collate();

		$sql = "CREATE TABLE `{$wpdb->base_prefix}countdown` (
		  id MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
		  description TEXT NOT NULL,
		  start_date DATETIME NOT NULL,
		  end_date DATETIME NOT NULL,
		  cta_text VARCHAR(255) NOT NULL,
		  PRIMARY KEY (id)
		) $charset_collate;";

		require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		dbDelta($sql);
	}

	public static function uninstall()
	{
		global $wpdb;
		$wpdb->query("DROP TABLE IF EXISTS `{$wpdb->base_prefix}countdown`");
	}
}
