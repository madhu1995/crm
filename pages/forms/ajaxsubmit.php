<?php
require('../../sales_db.php');
$query=mysql_query("insert into testdrive(td_no,date,model,dur,Enq_id,Cus_id,Cus_name,place_td) VALUES ('".$_POST['drn']."','".$_POST['test_date']."','".$_POST['model1']."','".$_POST['dur']."','".$_POST['tenq']."','".$_POST['tcu']."','".$_POST['tcun']."','".$_POST['place']."')");
?>