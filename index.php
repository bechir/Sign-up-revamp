<?php

	session_start();

	if(!isset($_SESSION['user'])) {
		header('Location: /login.php');
	}

	[, $fullname, $username, $email] = $_SESSION['user'];

?>

<!DOCTYPE html>
<html>
<head>
	<title><?= $username ?></title>
</head>
<body>
	<h1>Bonjour, <?= $fullname ?>!</h1>
</body>
</html>