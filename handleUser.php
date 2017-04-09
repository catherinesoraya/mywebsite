<?php

	session_start();
	
	require_once 'Dao.php';

	$dao = new Dao();

	$email = htmlentities($_POST['emailR']);
	$username = htmlentities($_POST['usernameR']);
	$password = htmlentities($_POST['passwdR']);

	if(!empty($email) && !empty($username) && !empty($password)){
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$_SESSION['inputs'] = $_POST;
		$_SESSION['registerMessage'] = "your email is invalid. please try again.";

	
	}else{
		unset($_SESSION['inputs']);
		$_SESSION['registerMessage'] = "you have successfully registered!";
	
	$dao->createUser($email, $username, $password);
	$_SESSION['register'] = 1;
	}
}else{

	$_SESSION['registerMessage'] = "at least one field was blank. please try again.";
	
}

	header("Location:register.php");
	exit;







			
			
