<?php 
	require_once 'config/config.php';
	require_once 'helpers/url.php';
	require_once 'helpers/session.php';

	spl_autoload_register(function($class){
		require_once 'libraries/' . $class . '.php';
	});

?>