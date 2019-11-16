<?php 
$admin = new admin();
$user = $admin->getValue('username');
$level = $admin->getValue('level');


?>
<div class="container">
	<div id="nav-bar">
		<nav>
			<p><?php echo 'today is: '.Date('Y-m-d'); ?></p>
			<div>
				<p>hello <?php echo $user; ?> |</p>
				<a href="<?php echo "?controller=admin&action=logout"; ?>">logout</a>
			</div>	
		</nav>
	</div>
</div>
<div class="clear"></div>