<?php require('views/widgets/header.php'); ?>

<?php 
require 'libs/loader.php';

$controller = $input->get('controller');
$action = $input->get('action');

if (empty($controller) && empty($action)) {
	$controller = 'home';
	$action = 'index';
}

load($controller,$action);


?>
<?php require('views/widgets/footer.php'); ?>