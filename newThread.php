<?php
	include("header.php");
?>
<div id="navigation">
                        <ul>
                                <li><a href="index.php" id="nav1">Home</a></li>
                                <hr>
                                <li><a href="gallery.php" >Gallery</a></li>
                                <hr>
                                <li><a href="about.php" id="nav3">About</a></li>       
                                <hr>
                                <li><a href="forum.php" style="background-color:#d8d804">Forum</a></li>       
                        </ul>
                </div>

	<div id="content">
		<h2> Forum > New Thread </h2>
		<form method="POST" action="handleThread.php"  enctype="multipart/form-data">
		title: <input type="text" id="threadTitle" value ="<?php if(isset($_SESSION['inputs'])){echo $_SESSION['inputs']['threadTitle'];} ?>" name="threadTitle">	
		<br>
		body: <input type="text" id="threadBody"value="<?php if(isset($_SESSION['inputs'])){echo $_SESSION['inputs']['threadBody'];} ?>"  name="threadBody">
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
	
