<?php 
function post($key)
{
	return isset($_POST[$key]) ? $_POST[$key] : false;
}

function get($key)
{
	return isset($_GET[$key]) ? $_GET[$key] : false;
}

function url($uri)
{
	return 'http://localhost/'.$uri;
}

function redirect($url)
{
	header("Location: ".$url);
}
?>