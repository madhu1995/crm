<?php
    $con=mysql_connect("localhost", "root", "") or die("Could not connect");
    mysql_select_db("sales",$con) or die("Could not select database");
	$events = array();
	$query = mysql_query( "SELECT * FROM events");
	while($fetch = mysql_fetch_array($query))
	{
	$e = array();
    $e['title'] = $fetch['title'];
    $e['start'] = $fetch['start'];
    array_push($events, $e);
	}
	echo json_encode($events);

?>