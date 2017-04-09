<?php 
	include("header.php");
	require_once 'Dao.php';
	                if (session_status() == PHP_SESSION_ACTIVE) {
         echo "Session is active";
	echo $_SESSION['thread'];
}
?>

<div id="content">
                <h2> Forum > New Thread > <?php echo $_SESSION['thread']; ?> </h2>

	<?php
		$dao = new Dao();
		$data = $dao->findThread($_SESSION['thread'], $_SESSION['threadUser']);
		foreach($data as $row){
		$thread = $row;
		}
	echo "<h2> Title: ".$thread[title]."</h2>"; 
	echo "<h3> Written by: ".$thread[username]."</h3>";
	echo "<h3> Created on ".$thread[date_created]."</h3>";
	echo "<p> Body: ".$thread[body]."</p>";	
	?>
</div>

<?php

	include("footer.php");
?>
