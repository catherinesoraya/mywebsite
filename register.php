<?php
	include("header.php");
	require_once("Dao.php");
?>

<div id="content">
	<h2>Registration</h2>

	<form method="POST" action="handler.php"  enctype="multipart/form-data">	
	<li>email:     <input type="text" id="emailR" name="emailR"></li>
	<li>username:  <input type="text" id="usernameR" name="usernameR"></li>
	<li>password:  <input type="password" id="passwdR" name="passwdR"></li>
	 <input type="submit">

	</form>
</div>



<?php 
	include("footer.php");
?>
