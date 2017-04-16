<?php

class Render {

	public static function formatTable($data){
	$table = "
      <table id='forumTable'>
      <thead>
        <tr>
           <th>User</th>
           <th>Title</th>
	   <th>Body</th>
           <th>Date</th>
        </tr>
       </thead>";
   	$count=0; 
	foreach($data as $row){
	$table .= "<tr>
	<td>". $row[username] . "</td>".
	"<td>" . $row[title] . "</td>" .
	"<td>". $row[body] ."</td>" .
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
