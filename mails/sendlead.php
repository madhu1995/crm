<?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("presales",$con);
	
	include('class.smtp.php');
	include('class.phpmailer.php');
	
	$sql=mysql_query("select * from lead_details where enquire='".$_GET['send']."'");
	while($row=mysql_fetch_assoc($sql))
	{
		$contents="";
		$foot="";
		$title ='<h3 align="center"><font color="#063998"> Enquiry at AADHI MARUTHI</font></h3>';
		
		$contents .='Dear <strong style="font-size:16px">'.$row['custname'].',</strong><br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You have enquired about the '.$row['model'].' model at 
					<strong style="font-size:18px;color:#00008B">Aadhi</strong>
					<strong style="font-size:18px;color:#FF0000"> Maruthi</strong> , Sivanandhapuram 
					 on '.$row['doe'].'.<br>
					 We look forward for your purchase.
					 For any enquiry please contact our showroom at <strong style="font-size:18px;color:#00008B">0422-1234567</strong><br><br>
					 Thanks for visiting our showroom.<br><br><br>
					
					';
					
					$foot .='<strong style="font-size:22px;color:#00008B">Aadhi</strong>
					<strong style="font-size:22px;color:#FF0000"> Maruthi</strong>';

		
		$mail = new PHPMailer();
		$mail->IsSMTP(); 
		$mail->Host = "10.100.1.209";  
		$mail->From = "mahalakshmi.s2012@kgkite.ac.in";
		$mail->FromName = 'Aadhi Maruthi';		
		//$mail->AddAddress($to_email);
		$mail->AddAddress($row['email']);				
		$mail->IsHTML(true);    
		$mail->Subject = "Enquiry at Aadhi Maruthi";
		$mail->Body = $title.$contents.$foot;;
		//$mail->WordWrap = 50;
	
			if(!$mail->Send())
			{
			   echo 'Message was not sent.';
			
			}
			else
			{
			  echo 'Message has been sent.';
			
			} 
			
			$contents .="";
	}
	
?>