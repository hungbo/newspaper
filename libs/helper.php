<?php 
class helper
{
	function url($uri)
	{
		return 'http://localhost/newspaper/'.$uri;
	}

	function redirect($url)
	{
		header("Location: ".$url);
	}
}


?>