<?php
class session
{
	public function __construct()
	{
		session_start();
	}

	public function set($name, $value)
	{
		if (empty($_SESSION[$name])) {
			$_SESSION[$name] = $value;
		}	 
	}

	function get($name)
	{
		return $_SESSION[$name];
	}

	function remove()
	{
		if (isset($_SESSION[$name])) {
			unset($_SESSION[$name]);
		}
	}
}



?>