<?php
class session
{
	public function __construct()
	{
		session_start();
	}

	public function set($name, $value)
	{
		return $_SESSION[$name] = $value;
	}

	function get()
	{
		return $_SESSION;
	}

	function remove()
	{
		if (isset($_SESSION[$name])) {
			unset($_SESSION[$name]);
		}
	}
}



?>