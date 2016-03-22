<?php
require('sales_db.php');
$result = mysql_query("SELECT name, val FROM web_marketing");
$rows = array();
while($r = mysql_fetch_array($result)) {
	$row[0] = $r[0];
	$row[1] = $r[1];
	array_push($rows,$row);
}

print json_encode($rows, JSON_NUMERIC_CHECK);
?> 
