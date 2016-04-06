<?php
session_start();
$conn = mysql_connect("localhost","root",""); 
mysql_select_db("service1", $conn);
error_reporting(0);
?>