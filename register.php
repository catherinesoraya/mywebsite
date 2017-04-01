<?php
	include("header.php");
	require_once("Dao.php");
?>

<div id="content">
	<h2>Registration</h2>

	<form method="POST" action="handleUser.php"  enctype="multipart/form-data">	
	<li>email:     <input type="text" id="emailR" value="<?php echo $_SESSION['inputs']['emailR']; ?> " name="emailR"></li>
	<li>username:  <input type="text" id="usernameR" value="<?php echo $_SESSION['inputs']['usernameR']; ?> " name="usernameR"></li>
	<li>password:  <input type="password" id="passwdR"  name="passwdR"></li>
	 <input type="submit">
	</form>
<?php
	
	if(isset($_SESSION['registerMessage'])){	
     		echo $_SESSION['registerMessage'];
		unset($_SESSION['registerMessage']);
		header("Location:register.php");
		echo "unset";
	}
?>

</div>



<?php 
	
	include("footer.php");
?>
