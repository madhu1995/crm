<?php
session_start();
$con=mysql_connect("localhost","root","");
echo "connected";
mysql_select_db("sales",$con);
$query=mysql_query("insert into vehicle(model,fuel,color,quant,status,Enq_id,Cust_id,Cust_name,app_date,pri_model) VALUES ('".$_POST['model3']."','".$_POST['fuel1']."','".$_POST['col']."','".$_POST['quants']."','".$_POST['sta']."','".$_POST['venq']."','".$_POST['vcu']."','".$_POST['vcun']."','".$_POST['app']."','".$_POST['pri']."')");

echo "insert into vehicle(model,fuel,color,quant,status,Enq_id,Cust_id,Cust_name,app_date,pri_model) VALUES ('".$_POST['model2']."','".$_POST['fuel']."','".$_POST['color']."','".$_POST['quan']."','".$_POST['stat']."','".$_POST['en_id']."','".$_POST['cu_id']."','".$_POST['cu_name']."','".$_POST['ap_d']."','".$_POST['imp']."')";
exit();
mysql_close($connection);
?>