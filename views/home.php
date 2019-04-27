<?php
loadView('views/widgets/header.php');

// deleteSession();

if (getSession('username') != null) {
	redirect(url("?controller=controller&action=adminController"));
	// echo url("?controller=controller&action=adminController");
}

echo 'adas';

loadView('views/widgets/footer.php');

?>