<?php 
class helper
{
	function url($uri)
	{
		echo 'http://localhost/newspaper/'.$uri;
	}

	function redirect($url)
	{
		header("Location: ".$url);
	}
}


?>