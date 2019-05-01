<?php 
/**
 * @kane
 */
class postCollection
{
	
	function __construct()
	{
		# code...
	}

	public function get()
	{
		global $database;
		$posts = $database->getAll('posts');
		return $posts;
	}

	public function create()
	{
		global $database;

		echo 'create';
	}

	public function edit()
	{
		echo 'edit';
	}

	public function delete()
	{
		echo 'delete';
	}


}
?>