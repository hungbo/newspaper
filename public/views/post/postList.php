<?php 
$post = new post();
global $helper, $input;
$posts = $post->list();
$paginate = new paginator();
$id = $input->get('id');


?>
<div class="container">
<div id="post-list">
<table>
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
		<?php if ($id == $item['post_id']): ?>
			<form method="post">
			<td><?php echo $item['post_id']; ?></td>
			<td><input type="text" name="post_title" value="<?php echo $item['post_title']; ?>"></td>
			<td><input type="text" name="post_description" value="<?php echo $item['post_description']; ?>"></td>
			<td><input type="text" name="post_content" value="<?php echo $item['post_content']; ?>"></td>
			<td><input type="text" name="post_publishdate" value="<?php echo $item['post_publishdate']; ?>"></td>
			<td><input type="text" name="post_author" value="<?php echo $item['post_author']; ?>"></td>
			<td>
			<input type="submit" name="save" value="save">
			<input onclick="window.location = '?controller=admin&action=dashboard'" type="button" value="cancel">
			</td>
			</form>
		<?php endif ?>

		<?php if (!$id):  ?>
		<td><?php echo $item['post_id']; ?></td>
		<td><?php echo $item['post_title']; ?></td>
		<td><?php echo $item['post_description']; ?></td>
		<td><?php echo $item['post_content']; ?></td>
		<td><?php echo $item['post_publishdate']; ?></td>
		<td><?php echo $item['post_author']; ?></td>
		<td>
			<form method="post" action="<?php echo $helper->url('?controller=post&action=delete'); ?>">
				<input onclick="window.location = '?controller=post&action=edit&id=<?php echo $item['post_id']; ?>'" type="button" value="edit">
				<input type="hidden" name="delete" value="<?php echo $item['post_id']; ?>">
				<button type="submit">delete</button>
			</form>
		</td>
		<?php endif ?>	
	</tr>
	<?php } ?>
</table>
</div>
</div>
<div class="container">
	<div class="paginate">
		<?php $paginate->show(); ?>
	</div>
</div>