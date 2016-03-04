<?php
ob_start();
	mysql_connect("localhost","root","KSr15LiI@cld");
	mysql_select_db("myshope") or die(mysql_error());
	if($_REQUEST['id'])
	{
		$id = $_REQUEST['id'];	
	} else 
	{
		$id = $_REQUEST['id'];
	}

 	$sel_lin = "SELECT * FROM `ooz_enquiries` WHERE id='".$id."'";
	$res_lin = mysql_query($sel_lin) or die(mysql_error());
	$row = mysql_fetch_array($res_lin);
	
	$sel_clin = "SELECT * FROM `ooz_customers` WHERE id='".$row['customer_id']."'";
	$res_clin = mysql_query($sel_clin) or die(mysql_error());
	$crow = mysql_fetch_array($res_clin);
	
	$country_id = $crow['country'];
	$state_id = $crow['state'];
	$district_id = $crow['district'];
	$city_id = $crow['city'];

	$landmark  = $crow['landmark'];
	
	$selor = "SELECT * FROM ooz_orders WHERE `status`='1' AND enq_id='".$row['id']."'";
	$resor = mysql_query($selor);
	$rowor = mysql_fetch_array($resor);
	
	$selpo = "SELECT * FROM ooz_invoices WHERE `status`='1' AND enq_id='".$row['id']."'";
	$respo = mysql_query($selpo);
	$rowpo = mysql_fetch_array($respo);
	
	$sql2 ="SELECT * FROM ooz_delivery_status where id ='".$rowpo['invoice_status']."'"; 
	$result2 = mysql_query($sql2);
	$orows = mysql_fetch_array($result2);
	
	if($crow['address1']!="")
	{
		$baddress1 = $crow['address1'];
	}
	else
	{
		$baddress1 = "";
	}

	if($crow['address2']!="")
	{
		$baddress2 = ",<br>&nbsp;&nbsp;".$crow['address2'];
	}
	else
	{
		$baddress2 = "";
	}

	if($crow['address3']!="")
	{
		$baddress3 = ",<br>&nbsp;&nbsp;".$crow['address3'];
	}
	else
	{
		$baddress3 = "";
	}
	if($city_id!='' && $city_id!='0')
	{
		$cqry = mysql_query("select * from ooz_city where status=1 AND id ='".$city_id."' ");
     		$ctyrows=mysql_fetch_array($cqry); 	
		$baddress4 = ",<br>&nbsp;&nbsp;".$ctyrows['city_name'];
	}
	else
	{
		$baddress4 = "";
	}

	if($crow['postal_name']!="")
	{
		$pnqry = mysql_query("select * from ooz_postal where status=1 AND id ='".$crow['postal_name']."' ");
     		$pnrows=mysql_fetch_array($pnqry); 	
		$baddress5 = ",<br>&nbsp;&nbsp;".$pnrows['postal_name'];	
	}
	else
	{
		$baddress5 = "";
	}

	if($crow['postal_code']!="" && $crow['postal_code']!="0")
	{
		$postal_code = " - ".$crow['postal_code'];
	}
	$address = $baddress1."".$baddress2."".$baddress3.""."".$baddress4."".$baddress5."".$postal_code;

function convert_number($number) 
{ 
    if (($number < 0) || ($number > 999999999)) 
    { 
    throw new Exception("Number is out of range");
    } 

    $Gn = floor($number / 1000000);  /* Millions (giga) */ 
    $number -= $Gn * 1000000; 
    $kn = floor($number / 1000);     /* Thousands (kilo) */ 
    $number -= $kn * 1000; 
    $Hn = floor($number / 100);      /* Hundreds (hecto) */ 
    $number -= $Hn * 100; 
    $Dn = floor($number / 10);       /* Tens (deca) */ 
    $n = $number % 10;               /* Ones */ 

    $res = ""; 

    if ($Gn) 
    { 
        $res .= convert_number($Gn) . " Million"; 
    } 

    if ($kn) 
    { 
        $res .= (empty($res) ? "" : " ") . 
            convert_number($kn) . " Thousand"; 
    } 

    if ($Hn) 
    { 
        $res .= (empty($res) ? "" : " ") . 
            convert_number($Hn) . " Hundred"; 
    } 

    $ones = array("", "One", "Two", "Three", "Four", "Five", "Six", 
        "Seven", "Eight", "Nine", "Ten", "Eleven", "Twelve", "Thirteen", 
        "Fourteen", "Fifteen", "Sixteen", "Seventeen", "Eightteen", 
        "Nineteen"); 
    $tens = array("", "", "Twenty", "Thirty", "Fourty", "Fifty", "Sixty", 
        "Seventy", "Eigthy", "Ninety"); 

    if ($Dn || $n) 
    { 
        if (!empty($res)) 
        { 
            $res .= " and "; 
        } 

        if ($Dn < 2) 
        { 
            $res .= $ones[$Dn * 10 + $n]; 
        } 
        else 
        { 
            $res .= $tens[$Dn]; 

            if ($n) 
            { 
                $res .= "-" . $ones[$n]; 
            } 
        } 
    } 

    if (empty($res)) 
    { 
        $res = "zero"; 
    } 

    return $res; 
} 
require_once("dompdf_config.inc.php");
$dompdf = new DOMPDF();
$total=0;

$invoiceno = "INV - ".$row['year']." - ".str_pad($rowpo['inv_id'], 3, "0", STR_PAD_LEFT);
$content = '<table align="center" style="font-size:12px;border-collapse:collapse;" cellpadding="10" cellspacing="1" border="0" width="95%">
<tbody>
<tr>
	<td style="line-height:20px;">
    	<strong style="font-size:16px">MYSHOPE</strong><br>
		OLD NO:11, NEW NO:17,<br>
		Thirumal Nagar,<br>
		3rd Cross Street,<br>
		Poonamallee,<br>
		Chennai-600056<br>
		Support:044-66008888
	</td>     
	<td style="line-height:30px;vertical-align:top">
		<img src="../../images/logo.png">
	</td>
</tr>    
</table>
<table align="center" style="border:1px solid #000;font-size:12px;border-collapse:collapse;vertical-align:top" cellpadding="10" cellspacing="1" border="1" width="92%">
<tr>
	<td style="line-height:20px;vertical-align:top">Invoice To:<br>
    	<strong style="font-size:16px">'.$crow['customername'].'</strong><br>
		'.$address.'<br>
		<strong>Landmark :'.$landmark.'</strong><br>
		<strong>Contact No :'.$crow['mob_no'].'</strong><br>
		<strong>Alternative No :'.$crow['additional_mob1'].'</strong><br>
	</td>     
	<td style="line-height:30px;">
		Tax Invoice
		<br>
		TIN NO : 33981670038 <br>
		CST NO : 1245758 / Dt: 21-03-2014 <br>
		Docket No : '.$rowpo['docket_no'].'
	</td>	
	<td style="line-height:30px;vertical-align:top">
		Invoice No & Date
		<br>
		No : '.$invoiceno.' 
		, '.date('d-m-Y',strtotime($rowpo['inv_date'])).' 
		<br>
		Executive : '.$row['executive'].'
	</td>	
</tr> 
</table>
<table align="center" style="border:1px solid #000;font-size:12px;border-collapse:collapse;margin-top:15px" cellpadding="10" cellspacing="1" border="1" width="92%">
 <tr style="font-family:sans-serif;font-size:12px;">
    	<td align="center"><b>Sl No</b></td>
        <td align="center"><b>Product</b></td>
    	<td align="center"><b>Quantity</b></td>
    	<td align="center"><b>Unit Price</b></td>                                
        <td align="CENTER"><b>Tax(%)</b></td>  
		<td align="CENTER"><b>Tax Amt</b></td>    
        <td align="CENTER"><b>Amount</b></td>    
    </tr>';		
	
		$line_sql = "SELECT * FROM `ooz_invoice_products` WHERE enq_id ='".$row['id']."' AND invoice_id='".$rowpo['id']."' AND status=1";
				$line_res = mysql_query($line_sql);
				
				$sumamount = 0;
				$linum = 1;
				$j=1;
				while($line_row = mysql_fetch_array($line_res))
				{
					$selpr = "SELECT * FROM ooz_products WHERE `status`='1' AND id='".$line_row['product_id']."'";
					$respr = mysql_query($selpr);
					$rowpr = mysql_fetch_array($respr);	
					$tax = $rowpr['saletax'];
					
					$seltx = "SELECT * FROM ooz_tax WHERE id='".$tax."'";
					$restx = mysql_query($seltx);
					$rowtx = mysql_fetch_array($restx);	
					
					$tax_percent = $rowtx['tax_pcent'];
					
					$tax_amt = ($line_row['total'] * $tax_percent) / 100;
					
					$total_tax= $tax_amt;
					$amt = $line_row['total']-$tax_amt;
			    
            	$content .='<tr align="center" style="font-family:sans-serif;font-size:12px;">
                    <td>'.$j.'</td>
                    <td style="text-align:left;">'.$rowpr['product_name'].'</td>
                    <td>'.$line_row['quantity'].'</td>
                    <td>'.$amt.'</td>
                    <td>'.$rowtx['tax_pcent'].'</td>
					<td>'.$total_tax.'</td>
                    <td>'.$line_row['total'].'</td>                    
                		</tr>';
               
			   $total += $line_row['total'];
			   $warranty = $rowpr['warrantyinmonth'];
			   
					$linum++;
					$j++;
				}
		$total = $total - $rowpo['discount'];

/* <td>
		Discount(Rs) :</td>
	<td style="text-align:center;">	
		'.$rowpo['discount'].'
	</td>*/

$content .= '
<tr style="font-family:sans-serif;font-size:12px;">
	<td colspan=7><strong>'.$warranty.' Months Warranty</strong>    	
	</td>     	
</tr>
<tr style="font-family:sans-serif;font-size:12px;">
	<td colspan=5><strong>Amount in Words:</strong>
    	'.convert_number($total).' Only
	</td>     
	<td>
		Total(Rs) :</td>
	<td style="text-align:center;">	
		<strong>'.$total.'</strong>
	</td>
</tr>
</table>
<table align="center" style="border:1px solid #000;font-size:12px;border-collapse:collapse;margin-top:15px" cellpadding="10" cellspacing="1" border="1" width="92%">
<tr>
	<td style="line-height:30px;" colspan=3>
		<p style="vertical-align:top;margin-top:-10px;">
			SOLD GOODS WILL NOT BE REFUNDED<br>
			I hereby acknowledge that the product is received in good condition<br>
			<span><strong>Customers Signature : </strong>..............</span><br>
			<span><strong>Receivers Signature : </strong>..............</span></p>
	</td>
	<td style="line-height:30px; vertical-align:top" colspan=3>
		Payment Mode: '.$rowor['payment_mode'].'<br>
		Advance Payment: 0.00<br>
		Balance Amount: '.$total.'<br><br>
		<span style="font-size:10px;">System Generated Invoice. Signature not Required.</span>
	</td>
</tr>
</tbody></table>';

$tym = date('g:i s');
$filename = 'invoice'.$tym;
$dompdf->load_html($content);

$dompdf->render();
$dompdf->stream($filename. ".pdf", array("Attachment" => 0));
?>