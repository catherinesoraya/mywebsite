<?php

	include("header.php");
	
?>

	<div id="content">
		<form method="POST" action="handleThread.php"  enctype="multipart/form-data">
		title: <input type="text" id="threadTitle" name="threadtitle">
		<br>
		body: <input type="text" id="threadBody" name="threadBody">
		<input type="submit">
	</div>

<?php

	include("footer.php");

?>
