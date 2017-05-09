<?php defined('SYSPATH') OR die('No direct access allowed.');

return array
(
	'default' => array
	(
		'type'       => 'MySQL',
		'connection' => array(

			'hostname'   => '192.168.99.101',
			'database'   => 'dnsmonitordb',
			'username'   => 'user_dns',
			'password'   => 'L3v3!3',
			'persistent' => FALSE,
		),
		'table_prefix' => '',
		'charset'      => 'utf8',
		'caching'      => FALSE,
	),
);
