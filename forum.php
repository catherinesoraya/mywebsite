<?php 

	include("header.php");
	require_once 'Dao.php';
	require_once 'Render.php';
	$dao = new Dao();
?>
	<div id="content">
		<h2>Forum</h2>
		<h3>no threads yet<h3>
		<button type="button"><a href="newThread.php">create a thread</a></button>
	
	<?php 
		echo 'hello';
		//Render::formatTable($dao->getThreads()); ?>		

	</div>	
<?php
	include("footer.php");

?>
