<?php 
echo 'admin';

// deleteSession();
var_dump(getSession('username'));
if (getSession('username') == false) {
	loadView('views/admin/login.php');
}

$username = post('username');
$password = post('password');

echo $username;
echo $password;

?>