<?php 


$controller = $_GET['c'] ?? 'home';
$action = $_GET['a'] ?? 'index';

$path = "app/controller/".ucfirst($controller)."Controller.php";

echo $path;
// function __autoload($className)
// {
// 	$fileName = $className . '.php';
// 	if (is_readable($fileName)) {
// 		require $fileName;
// 	}
// }

?>