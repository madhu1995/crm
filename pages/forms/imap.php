<?php
set_time_limit(4000); 
require("class.phpmailer.php");
#error_reporting(0);
$con=mysql_connect("localhost","root","");
mysql_select_db("sales",$con);
$partno = "2";
$partno1 = '1';
$partno2 = '1';
$partno3 = '2.2';
$hostname = '{10.100.1.209:993/imap/ssl/novalidate-cert}INBOX';
$username = 'madhumitha.r@kgkite.ac.in';
$password = 'Madhu@19';
$inbox = imap_open($hostname,$username,$password) or die('Cannot connect to mail: ' . imap_last_error());
$emails = imap_search($inbox,'RECENT');
if($emails) 
{
  $output = '';
  rsort($emails);  

  foreach($emails as $email_number) 
  {  
	$overview = imap_fetch_overview($inbox,$email_number,0);	
	/* To get multiple TO & CC address */
	$addresses = imap_rfc822_parse_headers(imap_fetchheader($inbox,$email_number));
	/* End */
	$header = imap_headerinfo($inbox, $email_number);	  
	$headers = imap_header($inbox, $email_number);
	$structure = imap_fetchstructure($inbox, $email_number);
	$part = $structure->parts[1];
	$mail_type = $structure->subtype;
	$attachments = array();	
	$subj = imap_mime_header_decode($overview[0]->subject);
	$date=mysql_real_escape_string($overview[0]->date);
	$subject= $subj[0]->text;
	$frommail=$headers->from[0]->mailbox."@".$headers->from[0]->host;
	$from_name = $headers->from[0]->personal;
	$time = time();
	$msg = imap_fetchbody($inbox,$email_number,$partno1);
	$datetime = date('Y-m-d H:i:s', strtotime($date));
	
	/*$msgg = imap_fetchbody($inbox,$email_number,$partno1);
	echo $msgg;
	echo $mail_type; exit;*/

//echo $headers->from[0]->host; exit;
	
if($headers->from[0]->host != 'youtube.com' && $headers->from[0]->host !='mss3.mailhostbox.vsnl-mum.colo' && $headers->from[0]->host !='googlemail.com' && $headers->from[0]->host !='mail.kgcloud.org')
{
	if($headers->from[0]->host == 'gmail.com')
	{
		$msgg = imap_fetchbody($inbox,$email_number,$partno1);
		$pos = strpos($msgg, "charset=UTF-8");
		$pos1 = strpos($msgg, "quoted-printable");
		
		if($pos !== false) 
		{				
			$msg1 = explode("charset=UTF-8",imap_fetchbody($inbox,$email_number,$partno1));
			$msg2 = explode("--",$msg1[1]);
			$message = $msg2[0];			
			str_replace("=20","",$message);
		}
		else if($pos1 > 0)
		{			
			$msg1 = quoted_printable_decode(imap_fetchbody($inbox,$email_number,$partno1));	
			//echo $msg1;
			$msg2 = explode('quoted-printable',$msg1);
			$msg3 = explode("------=_",$msg2[1]);
			$message = $msg3[0];
			
			/*$message = imap_fetchbody($inbox,$email_number,1);
			//echo $part->encoding; exit;
			if($part->encoding == 3) 
			{
				$message = imap_base64($message);
			}
			else if($part->encoding == 1) 
			{
				$message = imap_8bit($message);
			} 
			else 
			{
				$message = imap_qprint($message);
			}*/			
		}
		else
		{
			$message = quoted_printable_decode(imap_fetchbody($inbox,$email_number,$partno1));		
		}
	}
	else if($headers->from[0]->host == 'yahoo.co.in' || $headers->from[0]->host == 'yahoo.in' || $headers->from[0]->host == 'aol.com')
	{
		$msgg = imap_fetchbody($inbox,$email_number,$partno1);		
		$pos = strpos($msgg, "Content-Transfer-Encoding: 7bit");
		if ($pos !== false) 
		{				
			$msg1 = explode("Content-Transfer-Encoding: 7bit",imap_fetchbody($inbox,$email_number,$partno1));
			$msg2 = explode("------=_",$msg1[1]);
			$message = $msg2[0];
		}
		else
		{
			$message = imap_fetchbody($inbox,$email_number,$partno1);	
		}
	}	
	else if($headers->from[0]->host == 'rediffmail.com')
	{
		$msgg = imap_fetchbody($inbox,$email_number,$partno1);		
		$pos = strpos($msgg,'charset="UTF-8"');
		if ($pos !== false) 
		{				
			$msg1 = explode('charset="UTF-8"',imap_fetchbody($inbox,$email_number,$partno1));
			$msg2 = explode("--=_",$msg1[1]);
			$message = $msg2[0];
		}
		else
		{
			$message = imap_fetchbody($inbox,$email_number,$partno1);	
		}		
	}	
	else if($headers->from[0]->host == 'live.com' || $headers->from[0]->host == 'outlook.com')
	{
		$msgg = imap_fetchbody($inbox,$email_number,$partno1);		
		//echo $msgg; exit;
		$pos = strpos($msgg,'Content-Transfer-Encoding: quoted-printable');
		if ($pos > 0) 
		{				
			$msg1 = explode('Content-Transfer-Encoding: quoted-printable',imap_fetchbody($inbox,$email_number,$partno1));
			$msg2 = explode("--_",$msg1[1]);
			$message = $msg2[0];
		}
		else
		{
			$message = imap_fetchbody($inbox,$email_number,$partno1);	
		}
		//echo $message; exit;
	}	
	else if($headers->from[0]->host == 'yahoo.com')
	{
		$message = imap_fetchbody($inbox,$email_number,2);
		if($part->encoding == 3) 
		{
			$message = imap_base64($message);
		}
		else if($part->encoding == 1) 
		{
			$message = imap_8bit($message);
		} 
		else 
		{
			$message = imap_qprint($message);
		}		
	}
	else if($headers->from[0]->host == 'hotmail.com')
	{
		$message = imap_fetchbody($inbox,$email_number,$partno1);
		//echo $part->encoding; exit;
		if($part->encoding == 3) 
		{
			$message = imap_base64($message);
		}
		else if($part->encoding == 1) 
		{
			$message = imap_8bit($message);
		} 
		else 
		{
			$message = imap_qprint($message);
		}	
	}
	else
	{	
		//echo $mail_type;
		//exit;
		if($mail_type=='PLAIN')
		{
			$message = quoted_printable_decode(imap_fetchbody($inbox,$email_number,$partno1));
		}
		else if($mail_type=='MIXED')
		{
			$msgg = imap_fetchbody($inbox,$email_number,$partno2);		
			$pos = strpos($msgg, "quoted-printable");
			//$pos1 = strpos($msgg, "7bit");
			
			if($pos > 0) 
			{				
				$msg1 = explode("quoted-printable",quoted_printable_decode(imap_fetchbody($inbox,$email_number,$partno2)));
				$msg2 = explode("------_",$msg1[1]);
				$message = $msg2[0];
			}			
			else
			{
				$msg1 = imap_fetchbody($inbox,$email_number,$partno2);
				$msg2 = explode('quoted-printable',$msg1);
				$msg3 = explode("------=_",$msg2[1]);
				$message = $msg3[0];	
			}
			//echo $message; exit;
		}
		else if($mail_type == 'ALTERNATIVE')
		{
			$message = imap_fetchbody($inbox,$email_number,$partno1);
			//echo $message; exit;
			htmlentities($message,ENT_QUOTES);
		}
		else if($mail_type=='REPORT')
		{
			$msgg = imap_fetchbody($inbox,$email_number,$partno1);
			$pos = strpos($msgg, "quoted-printable");
			
			if ($pos > 0) 
			{				
				$msg1 = explode("quoted-printable",quoted_printable_decode(imap_fetchbody($inbox,$email_number,1.1)));
				$msggg = imap_fetchbody($inbox,$email_number,1.1);
			
				$pos1 = strpos($msggg,"------=_");
				if ($pos1 > 0) 
				{
					$msg2 = explode("------=_",$msg1[1]);
					$message = $msg2[0];
				}
				else
				{
					$message = $msg1[0];
				}			
			}
			else
			{
				$message = imap_fetchbody($inbox,$email_number,$partno1);
				//$message = imap_fetchbody($inbox,$email_number,$partno);
			}
		}
		else if($mail_type=='RELATED')
		{
			$message = imap_fetchbody($inbox,$email_number,$partno1);
			$pos = strpos($message, "quoted-printable");
			if ($pos > 0) 
			{
				$msg2 = explode("------=",$message);
				if($msg2[2]!= '')
				{
					$messg = explode("quoted-printable",$msg2[2]);
					$messge = $messg[1];
				}
				else
				{
					$message = $msg2[0];
				}
			}
			else
			{
				$message = imap_fetchbody($inbox,$email_number,$partno1);
			}
			//echo $message; 
			//exit;
		}
		else if($mail_type=='HTML')
		{
			$message = imap_fetchbody($inbox,$email_number,$partno1);
		}
		else
		{
			$message = imap_fetchbody($inbox,$email_number,$partno);
		} 
	//	print_r($message); exit;
	}
	//echo ($message); exit;
	$message = str_replace("'"," ",$message);	
	$message = str_replace("=","",$message);
		
	if($mail_type == 'PLAIN')	
	{
		$message = nl2br($message);
	}
	else if($mail_type == 'ALTERNATIVE')	
	{
		$message = nl2br($message);		
	}
	else if($mail_type == 'MIXED')
	{
		$message = nl2br($message);
		$message = htmlentities($message,ENT_QUOTES);
	}
	else if($mail_type == 'HTML')
	{		
		$message = htmlentities($message,ENT_QUOTES);
	}	
	else
	{		
		$message = htmlentities($message,ENT_QUOTES);
	}	
	//echo $message; exit;
	
	if(isset($addresses->to))
	{
		$to_array = $addresses->to;
		$to_emails = "";
		foreach($to_array as $val_to) 
		{			
			$to_emails.=$val_to->mailbox."@".$val_to->host.",";
		}
		$to_emails = rtrim($to_emails,",");
	}
	else
	{
		$cc_emails = '';
	}
	
	if(isset($addresses->cc))
	{
		$cc_array = $addresses->cc;                
		$cc_emails = "";	
		foreach($cc_array as $val_cc) 
		{
			$cc_emails.=$val_cc->mailbox."@".$val_cc->host.",";
		}	
		$cc_emails = rtrim($cc_emails,",");	
	}
	else
	{
		$cc_emails = '';
	}
	$received_date = date('Y-m-d H:i:s',strtotime($addresses->Date));
	
	 if(isset($structure->parts) && count($structure->parts)) 
        {
            for($i = 0; $i < count($structure->parts); $i++) 
            {
                $attachments[$i] = array(
                    'is_attachment' => false,
                    'filename' => '',
                    'name' => '',
                    'attachment' => ''
                );
 
                if($structure->parts[$i]->ifdparameters) 
                {
                    foreach($structure->parts[$i]->dparameters as $object) 
                    {
                        if(strtolower($object->attribute) == 'filename') 
                        {
                            $attachments[$i]['is_attachment'] = true;
                            $attachments[$i]['filename'] = $object->value;
                        }
                    }
                }
 
                if($structure->parts[$i]->ifparameters) 
                {
                    foreach($structure->parts[$i]->parameters as $object) 
                    {
                        if(strtolower($object->attribute) == 'name') 
                        {
                            $attachments[$i]['is_attachment'] = true;
                            $attachments[$i]['name'] = $object->value;
                        }
                    }
                }
 
                if($attachments[$i]['is_attachment']) 
                {
                    $attachments[$i]['attachment'] = imap_fetchbody($inbox, $email_number, $i+1);
 
                    /* 3 = BASE64 encoding */
                    if($structure->parts[$i]->encoding == 3) 
                    { 
                        $attachments[$i]['attachment'] = base64_decode($attachments[$i]['attachment']);
                    }
                    /* 4 = QUOTED-PRINTABLE encoding */
                    elseif($structure->parts[$i]->encoding == 4) 
                    { 
                        $attachments[$i]['attachment'] = quoted_printable_decode($attachments[$i]['attachment']);
                    }
                }
            }
        }
		$file = '';
		//print_r($attachments);exit;
		if(!empty($attachments))
		{
			/* iterate through each attachment and save it */
			foreach($attachments as $attachment)
			{
				if($attachment['is_attachment'] == 1)
				{
					$filename = $attachment['name'];
					if(empty($filename)) $filename = $attachment['filename'];
					$file .= $email_number . "-" . $filename.",";				              
					$fp = fopen("attachments/" . $email_number . "-" . $filename, "w+");
					fwrite($fp, $attachment['attachment']);
					fclose($fp);
				} 
			}
		}	
		$files = rtrim($file,",");	
		$message = trim($message);
		$subject = str_replace("'","",$subject);
		/*	echo $message; 
			print_r($files);
			exit;			*/
	    
		$sql = mysql_query("INSERT INTO `emails` (`from_email`, `from_name`, `to_emails`,`cc_emails`,`subject`,`mail_body`,`received_date`, `created_at`, `email_number`,`attachments`,`folder_id`,`mail_type`) VALUES ('".$frommail."', '".$from_name."', '".$to_emails."', '".$cc_emails."', '".$subject."','".$message."','".$received_date."', '".$datetime."', '".$email_number."','".$files."','1','".$mail_type."')");			
		$file = '';
	}	
  }  
}
imap_close($inbox);
?>
