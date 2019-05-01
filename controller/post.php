<?php 
/**
 * 
 */
class post extends Controller
{
	public $posts;

	function __construct()
	{
		
	}

	public function list()
	{
		$post = new postCollection();
		$this->posts = $post->get();
		return $this->posts;
		// parent::loadView(['post/postList']);
	}
}
?>