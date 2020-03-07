<?php

	function connect() {
		try {
			$db = new PDO('mysql:host=localhost:3306;dbname=bb;charset=utf8', 'root', '');

			return $db;
		} catch (Exception $e) {
		    die('Error : ' . $e->getMessage());
		}
	}


	/**
	 * Save new user to the database
	 */
	function register($fullname, $username, $email, $password): bool
	{
		$db = connect();
		$req = $db->prepare('INSERT INTO user(fullname, username, email, password) VALUES(:fullname, :username, :email, :password)');
		$req->execute([
			'username' 	=> $username,
			'fullname' 	=> $fullname,
			'email' 	=> $email,
			'password' 	=> password_hash($password, PASSWORD_DEFAULT),
		]);

		return true;
	}

	/**
	 * Login with email or username and password
	 */
	function login($username, $password)
	{
		$db = connect();
		$req = $db->prepare('SELECT * FROM user WHERE username = :username OR email = :username AND password = :password');

		$req->execute([
			'username' => $username,
			'password' => password_hash($password, PASSWORD_DEFAULT)
		]);

		$result = $req->fetch();

		$req->closeCursor();

		return $result;
	}
?>