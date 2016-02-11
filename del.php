<?php
session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db("sales",$con);
error_reporting(0);
if(isset($_POST['submits']))
{
$query=mysql_query("DELETE t1,t2,t3 FROM opp_details as t1 
JOIN testdrive as t2 ON t2.Enq_id = t1.Enq_id 
JOIN vehicle as t3 ON t3.Enq_id = t1.Enq_id
WHERE t1.Enq_id=1");
}

?>
}
?>
<html>
<body>
<form method="post">
<button type="submit" name="submits">submit</button>
</form>
</body>
</html>