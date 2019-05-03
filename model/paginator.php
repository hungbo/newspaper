<?php 
/**
 * @kane
 */
class paginator
{
	
	function __construct()
	{
		
	}

	public function show()
	{
		global $database;

		$total_record = count($database->getAll('posts'));
		$limit = 5;
		$total_page = ceil($total_record/$limit) + 1;

		echo '<ul>';
		for ($i=1; $i < $total_page; $i++) { 
			echo '<li><a href="">'.$i.'</a></li>';
		}
		echo '</ul>';
		// '
		// <ul>
		// 	<li><a href="">prev</a></li>
		// 	<li><a href="">1</a></li>
		// 	<li><a href="">2</a></li>
		// 	<li><a href="">3</a></li>
		// 	<li><a href="">next</a></li>
		// </ul>
		// ';
	}
}
?>