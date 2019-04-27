<?php
$config = [
	'database',
	'helper',
	'session',
	'role'
];

foreach ($config as $key) {
	require_once $key.'.php';
}

function loadView($uri)
{
	return include_once $uri;
}

?>