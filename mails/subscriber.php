<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("tvs",$con);
error_reporting(0);
include('class.smtp.php');
include('class.phpmailer.php');

if(isset($_POST['submit']))
{

		//	  $from=$_REQUEST["from"];
  // $emaila=$_REQUEST["emaila"];
  // $filea=$_REQUEST["filea"];
 // $attachment="";
 
	$result = mysql_query("TRUNCATE TABLE offer");
	 if ($result) {
   echo "Request ID table has been truncated";  
 }
 else echo "Something went wrong: " . mysql_error();
  
 $allowedExts = array("doc", "docx", "php");
    $extension = end(explode(".", $_FILES["filea"]["name"]));

    if (($_FILES["filea"]["size"] < 200000)
    && in_array($extension, $allowedExts)) {
        if ($_FILES["filea"]["error"] > 0)
        {
            echo "Return Code: " . $_FILES["filea"]["error"] . "<br />";
        }
		        else
        {            

            if (file_exists( $_FILES["filea"]["name"]))
            {
                echo $_FILES["filea"]["name"] . " already exists. ";
            }
            else
            {
                move_uploaded_file($_FILES["filea"]["tmp_name"],
               "file/".$_FILES["filea"]["name"]."");
               
            }
        }
		 } else {
       
    }
	//$structure1 = 'img/cj_gallery/photos/'.$category.'/thumbs';
	//$folder1 = mkdir($structure1, 0777, true);

	$sql=mysql_query("insert into offer(offer,content,filea) VALUES('".$_POST['offer']."','".$_POST['content']."','".$_FILES["filea"]["name"]."')");
	$subscriber=mysql_query("select * from subscribe ");
	while($row=mysql_fetch_assoc($subscriber))
	{

   // $start = strrpos($attachment, '/') == -1 ? strrpos($attachment, '//') : strrpos($attachment, '/')+1;
	// $fileatt_name = substr($attachment, $start, strlen($attachment)); 
	   //       $file = fopen($fileatt,'rb'); 
       //  $data = fread($file,filesize($fileatt)); 
     //    fclose($file); 
		$foot="";
$contents="";
$attachment="";
 //$fileatt = $attachment; // Path to the file
       //  $fileatt_type = "application/octet-stream"; // File Type 
$overall_contents="";	 
		$contents.='<style>
			td {
				color: #000000;
				font-family: Arial,Helvetica,sans-serif;
				font-size: 12px;
			}
			td.info {
				background: none repeat scroll 0 0 #336666;
				color: #FFFFFF;
				font-family: Arial,Helvetica,sans-serif;
				font-size: 12px;
			}
			tr {
				color: #000000;
				font-family: Arial,Helvetica,sans-serif;
				font-size: 12px;
			}
			td.back {
			background: none repeat scroll 0 0 #FFFFFF;
					}
			td.back2 {
				background: none repeat scroll 0 0 #EEEEEE;
			}
			table
			{
				border-collapse:collapse;
			}
		</style>';
			
			$title ='<h3 align="center"><font color="#063998">- NEW OFFER -</font></h3>';		
			$name = mysql_query("select * from offer ");
			
			$sname = mysql_fetch_assoc($name);
			if(mysql_num_rows($name) > 0)
			{
			$contents .='<h3><font color="#063998">offer :</font><font color="#E43808">'.$sname['offer'].'</font></h3>
						<h3><font color="#063998">content :</font><font color="#E43808">'.$sname['content'].'</font></h3> ';	
			$foot .='<h4><font color="#063998">Thanks & Regards,</font></h4>';
			$foot .='<h4><font color="#063998">H.Ranjith Kumar</font></h4>';
			//  my edit  $foot .= '<h4><font color="#063998">Gayathritex</font></h4>';	
		//print_r($contents); exit;
		$mail = new PHPMailer();
		$mail->IsSMTP(); 
		$mail->Host = "10.100.1.209";  
		$mail->From = "ranjithkumarhs@gmail.com";
		$mail->FromName = 'Ranjith';		
		$file_to_attach = "file/".$_FILES["filea"]["name"];
        $mail->AddAttachment($file_to_attach);

//$file_to_attach = 'PATH_OF_YOUR_FILE_HERE';

//$email->AddAttachment( $file_to_attach , 'NameOfFile.pdf' );


//$mail->AddAttachment( $file_to_attach , 'NameOfFile.pdf' );
		//$mail->AddAddress($to_email);
		$mail->AddAddress($row['mail']);				
		//$mail->AddCC('jayarajmohan@kggroup.com');
		
		$mail->IsHTML(true);    
		$mail->Subject = "NEW OFFER";
		$mail->Body = $title.$contents.$attachment.$foot;
		$mail->WordWrap = 50;
	
			if(!$mail->Send())
			{
			   echo 'Message was not sent.';
			}
			else
			{
			  echo 'Message has been sent.';
			} 
			
			$contents="";	
			
		
		}
	}
		
}



if(isset($_GET['did']))
{
	$did=$_GET['did'];
	$sql=mysql_query("delete from offer where Id='".$did."' ");
}
?>

<html>
 <script language="javascript" type="text/javascript">
         function CheckData45()
         {
            with(document.filepost)
            {
               if(filea.value != "")
               {
                  document.getElementById('one').innerText = "Attaching File ... Please Wait";
               }
            }
         }
      </script>
<style>

#section {
    background-color: black;
    height: 800px;
    margin-left: 0;
    margin-top: 0;
    padding: 1px;
    width: 497px;
}
#nav {
    background-color: gray;
    height: auto;
    margin-left: 499px;
    margin-top: -802px;
    padding: 1px;
    width: 832px;
}
a.two:link, a.two:visited {
    background-color: #3b78e7;
    color: #ffffff;
    display: block;
    font-weight: bold;
    padding: 5px;
    text-align: center;
    text-decoration: none;
    width: 54px;
}
a.two:hover, a.two:active {
    background-color: #000080;
}
</style>
<body>
<?php include 'header.php'; ?>
<?php include 'mnav.php'; ?>
<div id="section">
<center>
<table border="1">
<tr>
<td><b style="color:white">USERNAME</b></td>
<td><b style="color:white">EMAIL_ID</b></td>
<td><b style="color:white">PHONE.NO</b></td>
</tr>


<?php
$sql=mysql_query("select * from subscribe");
$i=1;
while($row=mysql_fetch_assoc($sql))
{
?>
<tr>
<td><p style="color:white"><?php echo $row['username']; ?></p></td>
<td><p style="color:white"><?php echo $row['mail']; ?></p></td>
<td><p style="color:white"><?php echo $row['phone']; ?></p></td>
</tr>
<?php $i++; } ?>
</table>
</center>
</div>
<div id="nav">
<form action="subscriber.php" method="post" enctype="multipart/form-data">

<center>
<table border="1">
<tr>
<td><b style="color:white">OFFER</b></td><td><input type="text" name="offer"></td></tr><tr>
<td><b style="color:white">CONTENT</b></td><td><textarea name="content"; rows="25"; cols="54;"></textarea></td></tr><tr>
<td><b style="color:white">ATTACHMENT</b></td><td><input name="filea" type="file" id="filea" size="16"></td>
</tr>
<tr>
<td colspan="2"><center><input type="submit" value="submit" name="submit"></center></td>
</tr>
</table>
</center>
</form>
<center>
<table border="1">
<tr>
<td><b style="color:white">OFFER</b></td>
<td><b style="color:white">CONTENT</b></td>
<td><b style="color:white">ATTACHMENT</b></td>
<td><b style="color:white"><center>ACTION</center></b></td>
</tr>
<?php
$sql=mysql_query("select * from offer");
$i=1;
while($row=mysql_fetch_assoc($sql))
{
?>
<tr>
<td><p style="color:white"><?php echo $row['offer']; ?></p></td>
<td><p style="color:white"><?php echo $row['content']; ?></p></td>
<td><p style="color:white"><?php echo $row['filea']; ?></p></td>
<td><a class="two" href="subscriber.php?did=<?php echo $row['Id']; ?>">DELETE</a></td>
</tr>
<?php $i++; } ?>
</table>
</center>
</div>
<?php include 'footer.php'; ?>
</body>
</html>