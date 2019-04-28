<?php
require 'config/config.php';

//load file and create object
foreach ($config as $key) {
	require $key.'.php';
	$$key =  new $key();
}

foreach ($models as $model) {
	require ('model/'.$model.'.php');
}

//load and create controller
function load($controller,$action)
{
	$path = 'controller/'.$controller.'.php';

	if (file_exists($path)) {
		require $path;
		$controller = new $controller();
		return $controller->$action();
	}else {
		require 'views/404.php';
	}
}

?>