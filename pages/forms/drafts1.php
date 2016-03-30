<?php
require('../../sales_db.php');
if(isset($_GET['did']))
{
$to_emails=$_POST['to'];
$cc_emails=$_POST['cc'];
$subject=$_POST['subject'];
$mail_body=$_POST['content'];
$attachments=$_FILES['file']['name'];
$query=mysql_query("UPDATE `drafts` SET `to_emails`='$to_emails',`cc_emails`='$cc_emails',`subject`='$subject',`mail_body`='$mail_body',`created_at`=NOW(),`attachments`='$attachments' where `email_number`='".$_GET['did']."'");
//echo "UPDATE `drafts` SET `to_emails`='$to_emails',`cc_emails`='$cc_emails',`subject`='$subject',`mail_body`='$mail_body',`created_at`=NOW(),`attachments`='$attachments' where `email_number`='".$_GET['did']."'";
//exit;
header( 'location: mailbox.php');
}
?>