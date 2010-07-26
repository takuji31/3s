<?php
class DATABASE_CONFIG {

	var $dev = array(
		'driver' => 'mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'root',
		'password' => '',
		'database' => 'study_dev',
		'encoding' => 'utf8'
	);
	var $pub = array(
		'driver' => 'mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'root',
		'password' => '',
		'database' => 'study',
		'encoding' => 'utf8'
	);
}
?>
