<?php 
require 'libs/loader.php';


$controller = $input->get('controller');
$action = $input->get('action');

if (empty($controller) && empty($action)) {
	$controller = 'controller';
	$action = 'home';
}
$path = $controller.'/'.$action.'.php';

if (file_exists($path)) {
	require $path;
}else {
	include_once '404.php';
}
?>