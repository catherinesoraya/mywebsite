<?php 
	include("header.php");
	require_once'Dao.php';
	require_once 'Render.php';
	$dao = new Dao();
?>

<div id="content">
<h2>Forum</h2>
<button type="button"> <?php if($_SESSION['loggedIn']==1) echo " <a href='newThread.php'>create a thread</a>"; else echo "create a thread"; ?></button>

<?php

if($_SESSION['loggedIn'] == 1){

	Render::formatTable($dao->getThreads());	
}
else{
	echo "please log in to create a thread";
}
?>

</div>	

<?php
include("footer.php");

?>
