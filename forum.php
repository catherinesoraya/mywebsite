<?php 
	include("header.php");
	require_once'Dao.php';
	require_once 'Render.php';
	$dao = new Dao();
?>

<div id="navigation">
                        <ul>
                                <li><a href="index.php" id="nav1">Home</a></li>
                                <hr>
                                <li><a href="gallery.php" id="nav2">Gallery</a></li>
                                <hr>
                                <li><a href="about.php" id="nav3">About</a></li>
                                <hr>
                                <li><a href="forum.php" style="background-color:#d8d804">Forum</a></li>
                        </ul>
                </div>

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
