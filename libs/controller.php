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
			echo $key."<br>";
			require('views/'.$key.'.php');
		}
	}
}
?>