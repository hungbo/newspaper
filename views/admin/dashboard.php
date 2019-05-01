<?php 
$admin = new admin();
$user = $admin->getValue('username');
$level = $admin->getValue('level');
?>

 
<p>hello <?php echo $user; ?></p>
<a href="<?php echo "?controller=admin&action=logout"; ?>">logout</a>
<hr />