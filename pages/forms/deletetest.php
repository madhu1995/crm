<?php
session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db("sales",$con);

if(isset($_GET['id']))
{
$del = mysql_query("delete from testdrive where Enq_id = '".$_GET['id']."'");

}

?>