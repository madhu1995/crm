<?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("delivery",$con);
	
	include('class.smtp.php');
	include('class.phpmailer.php');
	$mail = new PHPMailer();
	$sql=mysql_query("select * from deliv_detail where enq_id='".$_GET['smd']."'");
	while($row=mysql_fetch_assoc($sql))
	{
		$contents="";
		$foot="";
		$title ='<h3 align="center"><font color="#063998">-Delivery-</font></h3>';
		
		$contents .='Dear <strong style="font-size:16px">'.$row['cust_name'].'</strong><br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You have purchased the vehicle with the following details at 
					<strong style="font-size:18px;color:#00008B">Aadhi</strong>
					<strong style="font-size:18px;color:#FF0000"> Maruthi</strong> , Sivanandhapuram
					<br><br>
					Your purchased details are <br><br>
					<b>Delivery No </b>'.$row['deliv_id'].' 
					<br>
					
					'.$row['model1'].' in '.$row['model_color'].' color with ENGINE NUMBER '.$row['engine_no'].' and CHASSIS NUMBER '.$row['chassis_no'].'
					<br>
					Thanks for purchasing your vehicle at AADHI MARUTHI.
					We cordially invite and request you to cherish your vehicle service at <strong style="font-size:16px color:#00008B">Aadhi</strong><strong style="font-size:16px color:#FF0000">Maruthi</strong> 
					<br><br><br>';
					
					
					
					$foot .='With Regards
					<br>';
					$foot .='<strong style="font-size:20px;color:#00008B">Aadhi</strong>
					<strong style="font-size:20px;color:#FF0000"> Maruthi</strong>';

		
		
		$mail->IsSMTP(); 
		$mail->Host = "10.100.1.209";  
		$mail->From = "laharisha.u@kgkite.ac.in";
		$mail->FromName = 'Aadhi Maruthi';		
		//$mail->AddAddress($to_email);
		$mail->AddAddress($row['res_em']);				
		$mail->IsHTML(true);    
		$mail->Subject = "Delivery of the vehicle";
		$mail->Body = $title.$contents.$foot;;
		//$mail->WordWrap = 50;
	
			if(!$mail->Send())
			{
			   echo 'Message was not sent.';
				//window.alert('Mail not sent');
			
			}
			else
			{
			  echo 'Message has been sent.';
				 #<?php 
				#header("location:invoiceindex.php");
			   //window.alert('Mail is sent');
			} 
			
			$contents .="";
	}
	
?>