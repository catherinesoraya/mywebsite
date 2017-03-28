<?php	
	session_start();

        require_once 'Dao.php';

        $dao = new Dao();

        $title = htmlentities($_POST['threadTitle']);
        $body = htmlentities($_POST['threadBody']);

        //if($)){
          //      $_SESSION['inputs'] = $_POST;
            //    exit;
       // }else{
         //       unset($_SESSION['inputs']);
        //}

        //DO MORE STUFF WITH PASSWORD & EMAIL?

        $dao->createThread('username',$title, $body);
	
	header("Location:forum.php");

        exit;
