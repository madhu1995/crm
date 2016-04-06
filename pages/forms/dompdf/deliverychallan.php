<?php
require_once("dompdf_config.inc.php");
$dompdf = new DOMPDF();

	mysql_connect("localhost","root","KSr15LiI@cld");
	mysql_select_db("myshope");
	
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
	
	$selor = "SELECT * FROM ooz_orders WHERE `status`='1' AND enq_id='".$row['id']."'";
	$resor = mysql_query($selor);
	$rowor = mysql_fetch_array($resor);
	$courier = $rowor['courier'];
	
	$selcr = "SELECT * FROM ooz_couriers WHERE `status`='1' AND id='".$rowor['courier']."'";
	$rescr = mysql_query($selcr);
	$rowcr = mysql_fetch_array($rescr);
		
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
		$baddress2 = ",".$crow['address2'];
	}
	else
	{
		$baddress2 = "";
	}

	if($crow['address3']!="")
	{
		$baddress3 = ",<br>".$crow['address3'];
	}
	else
	{
		$baddress3 = "";
	}

	$landmark  = $crow['landmark'];
	
	if($city_id!='' && $city_id!='0')
	{
		$cqry = mysql_query("select * from ooz_city where status=1 AND id ='".$city_id."' ");
	        $ctyrows=mysql_fetch_array($cqry); 	
		$baddress4 = ",".$ctyrows['city_name'];
	}
	else
	{
		$baddress4 = "";
	}

	if($district_id!='' && $district_id!='0')
	{
		$dqry = mysql_query("select * from ooz_district where status=1 AND id ='".$district_id."' ");
     		$dtrows=mysql_fetch_array($dqry); 	
		$baddress5 = ",<br>".$dtrows['district_name'];
	}
	else
	{
		$baddress5 = "";
	}
		
	/*if($crow['postal_name']!="")
	{
		$pnqry = mysql_query("select * from ooz_postal where status=1 AND id ='".$crow['postal_name']."' ");
        $pnrows=mysql_fetch_array($pnqry); 	
		$baddress5 = ",<br>&nbsp;&nbsp;".$pnrows['postal_name'];	
	}*/
	
	if($crow['postal_code']!="" && $crow['postal_code']!="0")
	{
		$postal_code = " - ".$crow['postal_code'];
	}
	$address = $baddress1."".$baddress2."".$baddress3.""."".$baddress4."".$baddress5."".$postal_code;
	
	$date = date('d-m-Y');
	
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

$total=0;

$invoiceno = "INV - ".$row['year']." - ".str_pad($rowpo['inv_id'], 3, "0", STR_PAD_LEFT);
$content = '<table align="left" style="font-size:14px;border-collapse:collapse;font-family:Arial Black;font-weight:bold;" cellpadding="3" cellspacing="1" border="1" width="55%">
<tbody>';

if($courier=='3')
{
	$content.='<tr>
		 <td style="line-height:20px;font-size:12px;" colspan=2>BUSINESS PARCEL WITH COD BOOKED UNDER DEP.ACT SCHEME<br> AT PARCEL CENTRE MYLAPORE HPO CHENNAI-600004.A/C <br>
		 NO.TN/BPCOD/DAS/ 60000410011/2014-15 COD AMOUNT RS.2250/- <br>(RUPEES TWO THOUSAND TWO HUNDRED AND FIFTY ONLY)BILLER ID NO:4040</td>
	       </tr>';
}
$content.='
<tr>
	<td style="line-height:30px;">
		TIN NO : 33981670038 </td>
	<td>
		CST NO : 1245758 / Dt: 21-03-2014 </td>
</tr>
<tr>
	<td style="line-height:20px;vertical-align:top">From:<br>
    	<strong style="font-size:16px">MYSHOPE</strong><br>
		OLD NO:11, NEW NO:17,<br>
		Thirumal Nagar,
		3rd Cross Street,<br>
		Poonamallee,<br>
		Chennai-600056<br>
		Support:044-66008888
	</td>     
	<td style="line-height:20px;vertical-align:top">
	To:<br>
    	<strong style="font-size:16px">'.$crow['customername'].'</strong><br>
		'.$address.'<br>
		<strong>Landmark :'.$landmark.'</strong><br>
		<strong>Contact No :'.$crow['mob_no'].'</strong>
		<br>
		<strong>Alternative No :'.$crow['additional_mob1'].'</strong>
	</td>
</tr>'; 
	
		$line_sql = "SELECT * FROM `ooz_invoice_products` WHERE enq_id ='".$row['id']."' AND status=1";
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
					
					$total += $line_row['total'];
					$warranty = $rowpr['warrantyinmonth'];			   
					
				}
		$total = $total - $rowpo['discount'];

$content .= '
<tr style="font-family:Arial Black;font-weight:bold;">
	<td style="font-size:18px;" colspan=2><strong>COD AMOUNT TO COLLECT : </strong> 
	Rs.<strong>'.$total.'/-</strong>
	<br>
	<strong>
    	'.convert_number($total).' Only
	</strong>		
	</td>
</tr>
<tr style="font-size:14px;font-family:Arial Black;font-weight:bold;">
	<td colspan=2 style="vertical-align:top">
	'.$rowcr['courier'].'<br>
	<strong>Docket No : '.$rowpo['docket_no'].'</strong><br>
	<strong>Invoice No : '.$invoiceno.'</strong>		
	</td>
</tr>
</table>';
$tym = date('g:i s');
$filename = 'invoice'.$tym;
$dompdf->load_html($content);

$dompdf->render();
$dompdf->stream($filename. ".pdf", array("Attachment" => 0));
?>