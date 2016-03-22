<?php 
session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db("sales",$con);
error_reporting(0);
if (!$con) {
  die('Could not connect: ' . mysql_error());
}
?>