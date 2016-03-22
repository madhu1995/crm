<?php
#ob_start();
	$con=mysql_connect("localhost","root","");
	mysql_select_db("delivery",$con);
	$sql=mysql_query("select * from deliv_detail where enq_id='".$_GET['gdf']." ' ");
	$row=mysql_fetch_assoc($sql);
	 
require_once("dompdf_config.inc.php");
#require_once("dompdf_config.custom.inc.php");
$dompdf = new DOMPDF();


#$invoiceno = "INV - ".$row['year']." - ".str_pad($rowpo['inv_id'], 3, "0", STR_PAD_LEFT);
$content = '<table align="center" style="font-size:12px;border-collapse:collapse;" width="80%">
<tbody>
<tr>
	<td align="center" style="line-height:50px;">
		<img src="2.jpg"><br>
	</td>
	</tr>
<tr>
	<td style="line-height:25px;">
    	<strong style="font-size:24px;color:#00008B">Aadhi</strong><strong style="font-size:24px;color:#FF0000"> Maruthi</strong><br>
		<strongstyle="font-size:24px;>6/79,Sivanandhapuram<br>
        Coimbatore-641017<br>
        Phone: 0422-2457652<br>
        Email: info@aadhimaruthi.com</strong><br>
	</td>     
</tr>    
</table>';
$content .='
<table align="center" style="border:2px solid #000;font-size:14px;border-collapse:collapse;vertical-align:top" cellpadding="7" cellspacing="1" border="1" width="92%">
<tr>
	<td style="line-height:25px;vertical-align:top;font-size:14px">Delivered To:<br>
    	<strong style="font-size:16px">'.$row['cust_name'].'</strong><br>
		'.$row['res_add'].'<br>
		'.$row['res_pin'].'<br>
		Email Id :'.$row['res_em'].'<br>
	</td>     
	<td style="line-height:10px;vertical-align:top">
	Booking No:'.$row['book_id'].'<br><br><br>
		Delivery No:'.$row['deliv_id'].' 
		<br><br><br>
		Date of sale:'.$row['ap_b_d'].'<br><br><br>
		Date of delivery:'.$row['ap_b_e'].'<br> <br>
		
		<br>
		
	</td>	
</tr> 
</table> 
<table align="center" style="border:1.5px solid #000;font-size:13px;border-collapse:collapse;margin-top:16px" cellpadding="10" cellspacing="1" border="1" width="92%">             		
<tr style="font-size:18px;">
        <td align="center" style="color:#00008B"><b>Car Model</b></td>
		<td align="center" style="color:#00008B"><b>Model Year</b></td>
		<td align="center" style="color:#00008B"><b>Car Registration No</b></td>
    	<td align="center" style="color:#00008B"><b>Color</b></td>
    	<td align="center" style="color:#00008B"><b>Engine No</b></td>                                   
        <td align="CENTER" style="color:#00008B"><b>Chassis No</b></td>    
</tr>';
$content .='<tr align="center" style="font-size:20px;">
    <td>'.$row['model1'].'</td>
	<td>'.$row['model_year'].'</td>
	<td>'.$row['car_regno'].'</td>
	<td>'.$row['model_color'].'</td>
	<td>'.$row['engine_no'].'</td>
	<td>'.$row['chassis_no'].'</td>
</tr>
</table>';
$content .='

<table>';
$content .='<table align="right" style="line-height:30px;">

<tr>
	<td>
		<br><br>	<br><br><br><br><br><br><span><strong style="color:#00008B">Customer Signature : </strong>..................................................</span>
	</td>
</tr>
</tbody></table>';
#$invo=$content .=''.$row['Delivery_no'].'';
$filename = 'delivery';
$dompdf->load_html($content);

$dompdf->render();
$dompdf->stream($filename. ".pdf", array("Attachment" => 0));
?>