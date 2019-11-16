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
	}

	public function delete()
	{
		global $helper;
		$post = new postCollection();
		$post->delete();
		$helper->redirect('?controller=admin&action=dashboard');
	}

	public function edit()
	{
		global $helper;
		$post = new postCollection();
		parent::loadView(['admin/dashboard']);
        parent::loadView(['post/postList']);
		$post->edit();
	}
}
?>