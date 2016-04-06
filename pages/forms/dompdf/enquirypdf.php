<?php
#ob_start();
	$con=mysql_connect("localhost","root","");
	mysql_select_db("sales",$con);
	
	 
	require_once("dompdf_config.inc.php");
	#require_once("dompdf_config.custom.inc.php");
	$dompdf = new DOMPDF();

	
	$sql=mysql_query("select * from lead_details where doe='".$_GET['enq']."' ");
	$row=mysql_fetch_assoc($sql);
	
	
		$content .='
				<table align="center" style="border:1px solid #000;font-size:12px;border-collapse:collapse;vertical-align:top" cellpadding="7" cellspacing="1" border="0.5" width="92%">
					<tr>
						<td>Enquiry Id</td>
						<td>Customer name</td>
						<td>Contact No</td>
						<td>Status</td>
					</tr>';
					
					$enqon=$_POST['doe'];
					$max= mysql_num_rows($_POST['doe']);
					for($i=0;$i<=$max;$i++)
					{
					if($_POST['doe']==$row['doe'])
					{
					$content .='
					<tr>
						<td>'.$row['enquire'].'</td>
						<td>'.$row['custname'].'</td>
						<td>'.$row['phone'].'</td>
						<td>'.$row['optionsRadios1'].'</td>
					</tr>
					
				</table>';
	}
}


$filename = 'enquirypdf';
$dompdf->load_html($content);

$dompdf->render();
$dompdf->stream($filename. ".pdf", array("Attachment" => 0));
?>