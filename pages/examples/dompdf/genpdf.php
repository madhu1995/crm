<?php
#ob_start();
	$con=mysql_connect("localhost","root","");
	mysql_select_db("invoice",$con);
	$sql=mysql_query("select * from invoice_details where invoice_no='".$_GET['pdf']."' ");
	$row=mysql_fetch_assoc($sql);
	 
require_once("dompdf_config.inc.php");
#require_once("dompdf_config.custom.inc.php");
$dompdf = new DOMPDF();


#$invoiceno = "INV - ".$row['year']." - ".str_pad($rowpo['inv_id'], 3, "0", STR_PAD_LEFT);
$content = '<table align="center" style="font-size:12px;border-collapse:collapse;" width="80%">
<tbody>
<tr>
	<td style="line-height:20px;">
    	<strong style="font-size:22px;color:#00008B">Aadhi</strong><strong style="font-size:22px;color:#FF0000"> Maruthi</strong><br>
		<strong>6/79,Sivanandhapuram<br>
        Coimbatore-641017<br>
        Phone: 0422-2457652<br>
        Email: info@aadhimaruthi.com</strong>
	</td>     
	<td align="right" style="line-height:20px;">
		<img src="logoaadhi.jpg">
	</td>
</tr>    
</table>';
$content .='
<table align="center" style="border:1px solid #000;font-size:12px;border-collapse:collapse;vertical-align:top" cellpadding="7" cellspacing="1" border="0.5" width="92%">
<tr>
	<td style="line-height:20px;vertical-align:top;font-size:12px">Invoice To:<br>
    	<strong style="font-size:16px">'.$row['custname'].'</strong><br>
		'.$row['addr'].'<br>
		'.$row['pin_code'].'<br>
		Email Id :'.$row['email'].'<br>
	</td>     
	<td style="line-height:20px;vertical-align:top;font-size:12px"><strong>Tax Invoice</strong><br><br>
		TIN NO : 33981670038 <br>
		CST NO : 1245758 / Dt: 21-03-2015 <br>
	</td>	
	<td style="line-height:10px;vertical-align:top">
		<b>Invoice No </b>'.$row['invoice_no'].' 
		<br><br>
		<b>Date </b>'.$row['doi'].' 
		<br>
	</td>	
</tr> 
</table>
<table align="center" style="border:1px solid #000;font-size:12px;border-collapse:collapse;margin-top:15px" cellpadding="10" cellspacing="1" border="1" width="92%">
 <tr style="font-size:12px;">
        <td align="center" style="color:#00008B"><b>Particulars</b></td>
    	<td align="center" style="color:#00008B"><b>Quantity</b></td>
    	<td align="center" style="color:#00008B"><b>Unit Price</b></td>                                   
        <td align="center" style="color:#00008B"><b>Amount</b></td>    
    </tr>';		
	
				
            	$content .='<tr align="center" style="font-size:12px;">
                    <td>'.$row['particulars'].'</td>
                    <td>'.$row['qty'].'</td>
                    <td>'.$row['up'].'</td>
                    <td>'.$row['amt'].'</td>              
                		</tr>
               


</table>';
$content .= '

<table align="center" style=" solid #000;font-size:12px;border-collapse:collapse;margin-top:15px" cellpadding="10" cellspacing="1"  width="92%">

 <tr style="font-size:12px;">
        <td align="right" style="color:#00008B"><b>Unit Concession</b></td>
		<td>'.$row['unit_concess'].'</td>
</tr>

<tr>
    	<td align="right" style="color:#00008B"><b>Total Concession</b></td>
		<td>'.$row['tot_concess'].'</td>
</tr>
<tr>
    	<td align="right" style="color:#00008B"><b>Price after Concession</b></td>            
		<td>'.$row['af_concess'].'</td>
</tr>
<tr>		
        <td align="right" style="color:#00008B"><b>Total Tax</b></td> 
		<td>'.$row['tot_tax'].'</td>
</tr>
<tr>
		<td align="right" style="color:#00008B"><b>Gross total</b></td> 
		<td>'.$row['grs_tot'].'</td>
</tr>
<tr>
		<td align="right" style="color:#00008B"><b>Adjustment</b></td> 
		<td>'.$row['adjust'].'</td>
</tr>
<tr>
		<td align="right" style="color:#00008B"><b>Grand Total</b></td> 
		<td style="color:#FF0000"><b>'.$row['grand_tot'].'</b></td>
</tr>
</table>';

$content .='  
<table align="center" style="border:1px solid #000;font-size:12px;border-collapse:collapse;margin-top:15px" cellpadding="10" cellspacing="1" border="1" width="92%">             		
<tr style="font-size:12px;">
    	<td align="center" style="color:#00008B"><b>Color</b></td>
    	<td align="center" style="color:#00008B"><b>Engine No</b></td>                                   
        <td align="CENTER" style="color:#00008B"><b>Chassis No</b></td>    
</tr>';
$content .='<tr align="center" style="font-size12px;">
	<td>'.$row['color'].'</td>
	<td>'.$row['eng_no'].'</td>
	<td>'.$row['cha_no'].'</td>
</tr>
</table>';
#$content .='
#<br><br><br><br><br><br><br><br><br><br><br><br><br><br>';
$content .='
<table align="center" style=" solid #000;font-size:12px;border-collapse:collapse;margin-top:15px"  width="92%">             		
<tr>	
	<td align="center" style="color:#00008B"><b>Terms and Conditions</b></td>
</tr>	
						<tr>
							
							<td>1) Above prices are current Ex-Showroom prices.Buyers will have to pay prices prevailing at the time of delivery.<br></td>
						</tr>
						<tr>
							
							<td>2) Optionals, accessories, insurance, registration, taxes, octroi, other levies etc. will be charged as applicable.<br></td>
						</tr>
						<tr>
							
							<td>3) Prices are for current specifications and are subject to change without notice.<br></td>
						</tr>
						<tr>
							
							<td>4) Prices and additional charges as above will have to be paid completely, to conclude the sales.<br></td>
						</tr>
						<tr>
						
							<td>5) Payments by Cheques/Demand Drafts may be in favour of AADHI MARUTHI payable at COIMBATORE.<br></td>
						</tr>
						<tr>
							
							<td>6) Acceptance of advance / deposits by the seller is merely an indication of an intention to sell and does not result into a contract of sale.<br></td>
							
						</tr>
						<tr>
							
							<td>7) All disputes arising between the parties hereto shall be referred to arbitration according to the arbitration laws of the country.<br></td>
						</tr>
						<tr>
							
							<td>8) Only the courts of COIMBATORE shall have jurisdiction in any proceedings relating to this contract. <br></td>
						</tr>
<table>';

$content .='<table style="line-height:30px;">
<tr>
	<td>
		<!--<p style="vertical-align:top;margin-top:-10px;">-->
		I hereby acknowledge that the product is received in good condition
	</td>
</tr>
<tr>
	<td>
			<span><strong style="color:#00008B">Customer Signature : </strong>..................................................</span>
	</td>
</tr>
<tr>
	<td>
			<span><strong style="color:#00008B"> This is system generated. Requires no authorisation </strong></span>
	</td>
</tr>
</tbody></table>';
#$invo=$content .=''.$row['invoice_no'].'';
$filename = 'invoice';
$dompdf->load_html($content);

$dompdf->render();
$dompdf->stream($filename. ".pdf", array("Attachment" => 0));
?>