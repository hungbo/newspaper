<?php 
session_start();
function setSession($value)
{
	if (!isset($_SESSION['username'])) {
		return $_SESSION['username'] = $value;
	}
}

function getSession()
{
	return isset($_SESSION['username']) ? $_SESSION['username'] : false;
}

function deleteSession()
{
	if (isset($_SESSION['username'])) {
		unset($_SESSION['username']);
	}
}


?>