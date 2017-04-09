<?php
	include("header.php");
?>

	<div id="content">
		<h2> Forum > New Thread </h2>
		<form method="POST" action="handleThread.php"  enctype="multipart/form-data">
		title: <input type="text" id="threadTitle" value ="<?php if(isset($_SESSION['inputs'])){echo $_SESSION['inputs']['threadTitle'];} ?> " name="threadTitle">	
		<br>
		body: <input type="text" id="threadBody"value="<?php if(isset($_SESSION['inputs'])){echo $_SESSION['inputs']['threadBody'];} ?> "  name="threadBody">
		<input type="submit">
	
	<?php
		 if(isset($_SESSION['forumMessage'])){
		echo "<h5>". $_SESSION['forumMessage']. "</h5>";
                unset($_SESSION['forumMessage']);
        }
	?>

	</div>

<?php	
	
	include("footer.php");
	if($_SESSION['forum'] == 1){
		sleep(5);
		echo "<meta http-equiv='refresh' content='0;forum.php' />";
		unset($_SESSION['forum']);
		exit;
	}
	
