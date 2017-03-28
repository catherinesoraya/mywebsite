<?php
class formatForum {
  public static function format($data) {
    $table = "
      <table id='forum'>
      <thead>
        <tr>
           <th>Title</th>
           <th>User</th>
           <th>Date</th>
        </tr>
       </thead>";
    foreach($data as $row) {
      $table .= "<tr>
        <td>" . htmlentities($row['title']) . "</td>" .
        "<td>{$row['username']}</td>" .
        "<td>$row['date_created'] . "</td></tr>";
    }
    $table .= "</table>";
    echo $table;
  }
}
