<?php

        session_start();

        require_once 'Dao.php';

        $dao = new Dao();

        $username = htmlentities($_POST['username']);
        $password = htmlentities($_POST['passwd']);

if(!empty($username) && !empty($password)){	
	$login = $dao->findUser($username, $password);

	$count = 0;
	foreach($login as $row)
	{	
		$userInfo = $row;
		$count = $count + 1;
	}
	
	if($count == 1){
		
		$email = $userInfo['email'];
		$_SESSION['username'] = $username;
		$_SESSION['loggedIn'] = 1;
		$_SESSION['logInMessage'] = "you are now logged in, $username";
	}
	else{

		$_SESSION['loggedIn'] = 0;
		$_SESSION['logInMessage'] = "Your log in credentials are invalid. Please try logging in again.";
	}
}else{
	$_SESSION['loggedIn'] = 0;
	$_SESSION['logInMessage'] = "One or more of the log in fields was blank. Please try logging in again.";
}

	echo "<meta http-equiv='refresh' content='0;index.php' />";
	//header("Location:index.php");

	//exit;

?>
