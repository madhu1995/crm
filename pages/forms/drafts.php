<?php
require('../../sales_db.php');
$query=mysql_query("INSERT INTO `drafts`(`to_emails`, `cc_emails`, `subject`, `mail_body`, `created_at`, `email_number`, `attachments`) VALUES ('".$_POST['to']."','".$_POST['cc']."','".$_POST['subject']."','".$_POST['content']."',NOW(),'','".$_FILES['file']['name']."')");
header( 'location: mailbox.php');
?>