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
    
	foreach($data as $row){
	$table .= "<tr>
	<td>". $row[username] . "</td>".
	"<td><a href='thread.php'>" . $row[title] . "</a></td>" .
	"<td>" . $row[date_created] . "</td></tr>";
	}

	$table .= "</table>";
   	 echo $table;

	}

}
?>
