<?php 
	session_start();
?>

<html>
	<head>
		<title>Manucher Yazdanpour</title>

		<link rel="icon" href="pics/favicon.png" type="image/x-icon"/>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Carrois+Gothic+SC" rel="stylesheet">	
		<link href="https://fonts.googleapis.com/css?family=Telex" rel="stylesheet">
		
	
	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
	</head>
	<body>
		
		<div id ="header">
      			<img id="logo" src="pics/zoro.png"/>
     			 <h1>Manucher Yazdanpour</h1>
		</div>
		
		<!-- <div id="navigation">
			<ul>
				<li><a href="index.php" id="nav1">Home</a></li>
        			<hr>
				<li><a href="gallery.php" id="nav2">Gallery</a></li>
        			<hr>
				<li><a href="about.php" id="nav3">About</a></li>
        			<hr>
				<li><a href="forum.php" id="nav4">Forum</a></li>
      			</ul>
   		</div> -->


	<div id="userlogin">
<?php
	
	if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] ==0){

	if($_SESSION['loggedIn'] ==0){
		echo $_SESSION['logInMessage'];
		if($_SESSION['register'] == 1){ echo "you have successfully registered. now you can login with your new credentials.";	
		unset($_SESSION['register']);
		} 

	}
	
	
	echo "<form method='POST' action='handleLogin.php' name='login' id='login'>
	<ul> 
		<li>username:<br><input type='text' id='username' value='".$_SESSION['inputs']['username']."' name='username'></li>
		<li>password:<br><input type='password' id='passwd' name='passwd'></li>	
		<input type='submit' value='Log In'>		
		<button type='button'><a href='register.php'>Register</a></button>
	</ul>
	</form> ";
}elseif($_SESSION['loggedIn'] == 1){
		echo $_SESSION['logInMessage'];
	echo "<button type='button'><a href='handleLogout.php'>Log Out</a></button>";	
}

unset($_SESSION['logInMessage']);
?>


	</div>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>	
 <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="slick/slick.min.js"></script>

<script>
$( "#nav1" ).click(function() {
	$("a[href*='"index.php"']").addClass("current");
});

$( "#nav2" ).click(function() {
        $("a[href*='"gallery.php"']").addClass("current");
});

$( "#nav3" ).click(function() {
        $("a[href*='"about.php"']").addClass("current");
});

$( "#nav4" ).click(function() {
        $("a[href*='"forum.php"']").addClass("current");
});
</script>	
	
