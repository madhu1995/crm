<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("service1",$con);
error_reporting(0);
require_once('class.phpmailer.php');
include("class.smtp.php"); 
//ini_set('smtp_port',25);
if(isset($_GET[edi]))
{
$sql=mysql_query("select * from ser_detail where cust_id='".$_GET['edi']."' ");
#echo "select * from lead_details where Enq_id='".$_GET['edi']."' ";
$row=mysql_fetch_assoc($sql);
$sqli=mysql_query("select * from amc where cust_id='".$_GET['edi']."'");
$rowi=mysql_fetch_assoc($sqli);
}
$foot .='<h4><font color="#063998">Thanks & Regards,</font></h4>';
$foot .='<h4><font color="#063998">Aadhi Maruti</font></h4>';
$title ='<h3 align="center"><font color="#063998"> Remainder mail </font></h3>';					
$mail = new PHPMailer();
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->IsSMTP(); 
//$mail->SMTPAuth = true; // authentication enabled
$mail->Host = "10.100.1.209";  
$mail->From = "kitecrm@kggroup.com";
$mail->FromName = 'Aadhi Maruti';		
//$mail->AddAddress($to_email);
$mail->AddAddress($rowi['email']);	
$mail->AddReplyTo('madhumitha.r@kgkite.ac.in', 'Madhu');
$mail->IsHTML(true);    
$mail->Subject = "Remainder mail";
$mail->Body = $title."<b>Dear " .$row['cust_name']. " </b>,<br></br><b>Greetings!!</b><br></br> 
This mail is to remind you that your vehicle is due for service.Regular servicing can help to keep your car running smoothly and identify potential problems early on, reducing the risk of more serious and costly problems in the future.So, you are welcome to our service centre any time as per your convenience.
<br></br>If you have any queries, dont hesitate to contact us.<br>Your Customer Id is <b>".$_GET['edi']."</b>" .$foot;
$mail->WordWrap = 50;
	if(!$mail->Send())
	{
	  echo 'Message was not sent.';
	}
	else
	{
 header("location:../calendar.php");
	} 			
 ?>
 