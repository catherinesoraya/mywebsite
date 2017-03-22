<?php

	session_start();
	
	require_once 'Dao.php';

	$dao = new Dao();

	$email = htmlentities($_POST['emailR']);
	$username = htmlentities($_POST['usernameR']);
	$password = htmlentities($_POST['passwdR']);

	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$_SESSION['inputs'] = $_POST;
		exit;
	}else{
		unset($_SESSION['inputs']);
	}

	//DO MORE STUFF WITH PASSWORD & EMAIL?

	$dao->createUser($email, $username, $password);

	header("Location:register.php");

	exit;



			
			
			
