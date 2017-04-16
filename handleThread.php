<?php
	session_start();

        require_once 'Dao.php';

        $dao = new Dao();

        $username = $_SESSION['username'];
        $title = htmlentities($_POST['threadTitle']);
        $body = htmlentities($_POST['threadBody']);

        if(empty($title) || empty($body)){
              $_SESSION['inputs'] = $_POST;
		$_SESSION['forumMessage'] = "at least one field was blank. please try again.";
         }else{
		if(preg_match("/[a-z]/i", $title) && preg_match("/[a-z]/i", $body)){
               unset($_SESSION['inputs']);
		  $_SESSION['forumMessage'] = "you have successfully created a forum post ";
       	 	  $dao->createThread($username,$title, $body);
		$_SESSION['forum'] = 1;
		} else{
		 $_SESSION['inputs'] = $_POST;
                $_SESSION['forumMessage'] = "the title and body of your forum post must contain some combination of letters and numbers.";
	}

}

	 header("Location:newThread.php");
        exit;
