<?php
    $key=$_GET['key'];
    $array = array();
    $con=mysql_connect("localhost","root","");
    $db=mysql_select_db("sales",$con);
    $query=mysql_query("select * from opp_details where Enq_id LIKE '%{$key}%'");
    while($row=mysql_fetch_assoc($query))
    {
      $array[] = $row['Enq_id'];
    }
    echo json_encode($array);
?>
