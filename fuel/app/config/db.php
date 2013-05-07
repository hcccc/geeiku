<?php
/**
 * Use this file to override global defaults.
 *
 * See the individual environment DB configs for specific config information.
 */

return array(
	'default' => array(
		'type' => 'mysql',
		'connection' => array(
			'hostname' => 'localhost',
			'port' => '',
			'database' => 'geeiku',
			'username' => 'root',
			'password' => '',
		),
		'identifier' => '`',
		'table_prefix' => '',
		'charset' => 'utf8',
		'enable_cache' => true,
		'profiling' => false,
	),
);
