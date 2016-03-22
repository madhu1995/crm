<?php
require('../../sales_db.php');
if(isset($_GET['id']))
{
$del = mysql_query("delete from testdrive where Enq_id = '".$_GET['id']."'");

}

?>