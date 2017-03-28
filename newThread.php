<?php

	include("header.php");
	require_once 'Dao.php';
	require_once 'formatForum.php';
	$dao = new Dao();
?>

	<div id="content">
		<form method="POST" action="handleThread.php"  enctype="multipart/form-data">
		title: <input type="text" id="threadTitle" name="threadTitle">
		<br>
		body: <input type="text" id="threadBody" name="threadBody">
		<input type="submit">
	
	<?php formatForum::format($dao->getThreads()); ?>
	</div>

<?php

	include("footer.php");

?>
