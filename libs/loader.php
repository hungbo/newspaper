<?php
require 'config/config.php';

//load file
foreach ($config as $key) {
	require $key.'.php';
	$$key =  new $key();
}


foreach ($controller as $key) {
	require 'controller/'.$key.'.php';
	$$key =  new $key();
}

// spl_autoload_register(function ($class)
// {
// 	require $class.'.php';
// });

foreach ($models as $model) {
	require ('model/'.$model.'.php');
	$$model = new $model();
}

?>