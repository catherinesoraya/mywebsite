<?php
	session_start();
	include("header.php");
	require_once 'Dao.php';
	require_once 'Render.php';
	$dao = new Dao();
?>

	<div id="content">
		<h2> Forum > New Thread </h2>
		<form method="POST" action="forum.php"  enctype="multipart/form-data">
		title: <input type="text" id="threadTitle" name="threadTitle">
		<br>
		body: <input type="text" id="threadBody" name="threadBody">
		<input type="submit">
	
	</div>

<?php	
	$_SESSION['forum'] = 1;
	header("Location:forum.php");
	include("footer.php");

?>
