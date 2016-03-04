<?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("invoice",$con);
	
	include('class.smtp.php');
	include('class.phpmailer.php');
	
	$sql=mysql_query("select * from invoice_details where invoice_no='".$_GET['send']."'");
	while($row=mysql_fetch_assoc($sql))
	{
		$contents="";
		$foot="";
		$title ='<h3 align="center"><font color="#063998">- Invoice--Purchase -</font></h3>';
		
		$contents .='Dear <strong style="font-size:16px">'.$row['custname'].'</strong><br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You have booked the vehicle with the following details at 
					<strong style="font-size:18px;color:#00008B">Aadhi</strong>
					<strong style="font-size:18px;color:#FF0000"> Maruthi</strong> , Sivanandhapuram
					<br><br>
					Your booking details are <br><br>
					<b>Invoice No </b>'.$row['invoice_no'].' 
					<br>
					
					'.$row['particulars'].' in '.$row['color'].' color with ENGINE NUMBER '.$row['eng_no'].' and CHASSIS NUMBER '.$row['cha_no'].'
					<br>
					
					The total price of your purchase is <b>'.$row['grand_tot'].'</b> which is inclusive of 14.5% tax that amounts to '.$row['tot_tax'].'		
					<br><br><br>';
					
					$foot .='Thanks <br>';
					$foot .='<strong style="font-size:20px;color:#00008B">Aadhi</strong>
					<strong style="font-size:20px;color:#FF0000"> Maruthi</strong>';

		
		$mail = new PHPMailer();
		$mail->IsSMTP(); 
		$mail->Host = "10.100.1.209";  
		$mail->From = "mahalakshmi.s2012@kgkite.ac.in";
		$mail->FromName = 'Aadhi Maruthi';		
		//$mail->AddAddress($to_email);
		$mail->AddAddress($row['email']);				
		$mail->IsHTML(true);    
		$mail->Subject = "Invoice--Purchase";
		$mail->Body = $title.$contents.$foot;
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