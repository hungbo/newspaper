<?php 
echo 'post list';

$post = new post();
$posts = $post->list();

?>

<table border="1px" width="100%">
	<tr>
		<th>id</th>
		<th>title</th>
		<th>description</th>
		<th>content</th>
		<th>publishdate</th>
		<th>author</th>
		<th>action</th>
	</tr>
	<?php foreach ($posts as $item) { ?>
	<tr>
		<td><?php echo $item['post_id']; ?></td>
		<td><?php echo $item['post_title']; ?></td>
		<td><?php echo $item['post_description']; ?></td>
		<td><?php echo $item['post_content']; ?></td>
		<td><?php echo $item['post_publishdate']; ?></td>
		<td><?php echo $item['post_author']; ?></td>
		<td>
			<form method="post">
				<input onclick="window.location = '?controller=post&action='" type="button" name="edit" value="edit">
			</form>
		</td>
	</tr>
	<?php } ?>
</table>