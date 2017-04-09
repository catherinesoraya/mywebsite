<?php

class Render {

	public static function formatTable($data){
	$table = "
      <table id='forumTable'>
      <thead>
        <tr>
           <th>User</th>
           <th>Title</th>
           <th>Date</th>
        </tr>
       </thead>";
   	$count=0; 
	foreach($data as $row){
	$table .= "<tr>
	<td>". $row[username] . "</td>".
	"<td><a href='thread.php?".$count."'>" . $row[title] . "</a></td>" .
	"<td>" . $row[date_created] . "</td></tr>";
	
	$myArray[$count] = $row;
	$count = $count + 1;
	}

	$table .= "</table>";
   	 echo $table;
	$_SESSION['thread'] = $myArray[$_SERVER['QUERY_STRING']][title];
	 $_SESSION['threadUser'] = $myArray[$_SERVER['QUERY_STRING']][username];

	echo $_SESSION['thread'];
	echo $_SESSION['threadUser'];
	}

	
}
?>
