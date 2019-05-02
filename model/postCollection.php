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

		global $database, $input,$helper;
		$id = $input->get('id');
		$save = $input->post('save');
		$post_title = $input->post('post_title');
		$post_description = $input->post('post_description');
		$post_content = $input->post('post_content');
		$post_publishdate = $input->post('post_publishdate');
		$post_author = $input->post('post_author');

		if ($save) {
			$database->update('posts',array(
			'post_title' => $post_title,
			'post_description' => $post_description,
			'post_content' => $post_content,
			),array('post_id' => $id));
			$helper->redirect('?controller=admin&action=dashboard');
		}
	}

	public function delete()
	{
		global $database, $input;
		$id = $input->post('delete');
		$database->delete('posts',array('post_id' => $id));

	}
}
?>