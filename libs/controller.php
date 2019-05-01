<?php 
/**
 * 
 */

class Controller
{

	
	function __construct()
	{
		
	}

	public function loadView($name = [])
	{
		foreach ($name as $key) {
			require('views/'.$key.'.php');
		}
	}
}
?>