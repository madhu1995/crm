<?php
error_reporting(0);
require_once('class.phpmailer.php');
include("class.smtp.php"); 
//ini_set('smtp_port',25);
$foot .='<h4><font color="#063998">Thanks & Regards,</font></h4>';
$foot .='<h4><font color="#063998">Aadhi Maruti</font></h4>';
$title .='<h3 align="center"><font color="#063998"> Remainder mail </font></h3>';	
$title .='<p align="left">Greetings!!</p>';				
$mail = new PHPMailer();
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->IsSMTP(); 
//$mail->SMTPAuth = true; // authentication enabled
$mail->Host = "10.100.1.209";  
$mail->From = "kitecrm@kggroup.com";
$mail->FromName = 'Aadhi Maruti';		
//$mail->AddAddress($to_email);
$mail->AddAddress($_POST['to']);	
print_r($_POST['to']);
$mail->AddReplyTo('madhumitha.r@kgkite.ac.in', 'Madhu');
$mail->IsHTML(true);    
$mail->Subject = $_POST['subject'];
print_r($_POST['subject']);
$mail->Body =$title."<br>  ".$_POST['content']."<br></br>".$foot;
print_r($_POST['content']);
$mail->addAttachment($_FILES['file']['tmp_name'],$_FILES['file']['name']);
print_r($_FILES['file']['tmp_name'].$_FILES['file']['name']);
$mail->WordWrap = 50;
	if(!$mail->Send())
	{
	  echo 'Message was not sent.';
	}
	else
	{
	   header( 'location: mailbox.php');
	   
   } 			
 ?>
 