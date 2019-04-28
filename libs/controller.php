<?php 
/**
 * 
 */

class Controller
{

	
	function __construct()
	{
		# code...
	}

	public function loadView($name = [])
	{
		foreach ($name as $key) {
			echo $key;
			require('views/'.$key.'.php');
		}
	}
}
?>