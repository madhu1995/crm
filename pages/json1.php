<?php
    require('../sales_db.php');
	$events = array();
	$query = mysql_query( "SELECT * FROM ser_events");
	while($fetch = mysql_fetch_array($query))
	{
	$e = array();
    $e['title'] = $fetch['title'];
    $e['start'] = $fetch['start'];
    array_push($events, $e);
	}
	echo json_encode($events);

?>