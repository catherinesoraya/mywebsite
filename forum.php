<?php 
session_start();
include("header.php");
require_once 'Dao.php';
require_once 'Render.php';
$dao = new Dao();
?>
<div id="content">
<h2>Forum</h2>
<button type="button"> <?php if($_SESSION['loggedIn']==1) echo " <a href='newThread.php'>create a thread</a>"; else echo "create a thread"; ?></button>

<?php

sleep(2);
if($_SESSION['loggedIn'] == 1){
	$username = $_SESSION['username'];
	$title = htmlentities($_POST['threadTitle']);
	$body = htmlentities($_POST['threadBody']);

	//if($)){
	//      $_SESSION['inputs'] = $_POST;
	//    exit;
	// }else{
	//       unset($_SESSION['inputs']);
	//}

	if(!isset($_SESSION['forum']) || $_SESSION['forum'] == 0){
		Render::formatTable($dao->getThreads());	
	}
	if($_SESSION['forum'] == 1){

		$dao->createThread($username,$title, $body);
		Render::formatTable($dao->getThreads());	
		$_SESSION['forum'] = 0;
	}
}
else{
	echo "please log in to create a thread";
}
?>

</div>	

<?php
include("footer.php");

?>
