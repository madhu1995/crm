<?php
require('sales_db.php');
$result = mysql_query("SELECT COUNT( * )
FROM lead_details
WHERE src = 'Walk in'");
$row = mysql_fetch_row($result);
$res=mysql_query("UPDATE `web_marketing` SET `val`='$row[0]' WHERE `name`='walkin'");
$result1=mysql_query("SELECT COUNT( * )
FROM lead_details
WHERE src = 'Reference'");
$row1 = mysql_fetch_row($result1);
$res1=mysql_query("UPDATE `web_marketing` SET `val`='$row1[0]' WHERE `name`='reference'");
$result2=mysql_query("SELECT COUNT( * )
FROM lead_details
WHERE src = 'Incoming telephone'");
$row2 = mysql_fetch_row($result2);
$res2=mysql_query("UPDATE `web_marketing` SET `val`='$row2[0]' WHERE `name`='Incoming Telephone'");
$result3=mysql_query("SELECT COUNT( * )
FROM lead_details
WHERE src = 'Field visit/cold call'");
$row3 = mysql_fetch_row($result3);
$res3=mysql_query("UPDATE `web_marketing` SET `val`='$row3[0]' WHERE `name`='Field visit'");
$result4=mysql_query("SELECT COUNT( * )
FROM lead_details
WHERE src = 'Call center'");
$row4 = mysql_fetch_row($result4);
$res4 =mysql_query("UPDATE `web_marketing` SET `val`='$row4[0]' WHERE `name`='Call center'");
$result5=mysql_query("SELECT COUNT( * )
FROM lead_details
WHERE src = 'Event/Advertisement'");
$row5 = mysql_fetch_row($result5);
$res5 =mysql_query("UPDATE `web_marketing` SET `val`='$row5[0]' WHERE `name`='Event'");
?> 


