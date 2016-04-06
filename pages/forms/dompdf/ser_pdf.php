<?php
#ob_start();
$conn=mysql_connect("localhost","root","");
  mysql_select_db("service1",$conn);
  $sql_d=mysql_query("select * from ser_detail where cust_id='".$_GET['iid']."' ");
  $row_d=mysql_fetch_assoc($sql_d);
  $sql_a=mysql_query("select * from ser_appmnt where cust_id='".$_GET['iid']."' ");
   $row_a=mysql_fetch_assoc($sql_a);
   $query_sd=mysql_query("select d_engine_oil,filter,wheel,water_service,oil_service from ser_detail where cust_id='".$_GET['iid']."' ");
   $query_sdq=mysql_query("select d_qty,f_qty,w_qty,ws_qty,o_qty from ser_detail where cust_id='".$_GET['iid']."' ");
   mysql_select_db("sales",$conn);
   $sql_o=mysql_query("select * from opp_details where Cus_id='".$_GET['iid']."' ");
   $row_o=mysql_fetch_assoc($sql_o);
 #error_reporting(0);
	 
require_once("dompdf_config.inc.php");
require_once("dompdf_config.custom.inc.php");
$dompdf = new DOMPDF();
$content = '';

#$invoiceno = "INV - ".$row['year']." - ".str_pad($rowpo['inv_id'], 3, "0", STR_PAD_LEFT);
$content .= '<table align="center" style="font-size:12px;border-collapse:collapse;" width="80%">

<tr>
	<td style="line-height:20px;">
    	<strong style="font-size:22px;color:#00008B">Aadhi</strong><strong style="font-size:22px;color:#FF0000"> Maruthi</strong><br>
		<strong>6/79,Sivanandhapuram<br>
        Coimbatore-641017<br>
        Phone: 0422-2457652<br>
        Email: info@aadhimaruthi.com</strong>
	</td>     
	<td align="right" style="line-height:20px;">
		<img src="../img/Adi.png">
	</td>
</tr>    
</table>';
$content .='
<table align="center" style="border:1px solid #000;font-size:12px;border-collapse:collapse;vertical-align:top" cellpadding="7" cellspacing="1" border="0.5" width="92%">
<tr>
	<td style="line-height:20px;vertical-align:top;font-size:12px">
   		<strong style="font-size:16px">'.$row_o['Cus_name'].'</strong><br>
		'.$row_o['Res_addr'].'<br>
		'.$row_o['Pincode'].'<br>
		'.$row_o['Res_city'].'<br>
		'.$row_o['Res_phone'].'<br>
	</td>     
	
	<td style="line-height:10px;vertical-align:top">
		<b>Invoice no :</b>'.$row_d['cust_id'].' <br><br>
		<b>Model :</b>'.$row_a['model'].' <br><br>
		<b>Chassis no :</b>'.$row_a['chassis_no'].' <br><br>
		<b>Kms :</b>'.$row_a['milage'].' <br><br>
		<b>Vehicle no :</b>'.$row_a['car_regno'].' <br><br>
		<b>Date :</b>'.$row_d['cust_id'].' <br><br>
	</td>	
</tr> 
</table>';
$content .='
<table align="center" style="border:1px solid #000;font-size:12px;border-collapse:collapse;margin-top:15px" cellpadding="10" cellspacing="1" border="1" width="92%">
 <tr style="font-size:12px;">
    <td align="center" style="color:#00008B"><b>Part_no</b></td>
        <td align="center" style="color:#00008B"><b>Particulars</b></td>
    	<td align="center" style="color:#00008B"><b>UoM</b></td>
    	<td align="center" style="color:#00008B"><b>Unit Price Rs.</b></td>                                   
        <td align="center" style="color:#00008B"><b>Total Amount</b></td>  
    </tr>';	 
	            $p=array();
	              $i=0;
				  $c=0;
				  $q=array();
				  $k=0; $j=1; $n=2; $h=3; $l=4;
				 while($row_sdq=mysql_fetch_assoc($query_sdq))
				  {
				    $q[$k]=$row_sdq['d_qty'];
	                $q[$j]=$row_sdq['f_qty'];
	                $q[$n]=$row_sdq['w_qty'];
	                $q[$h]=$row_sdq['ws_qty'];
	                $q[$l]=$row_sdq['o_qty'];
				  }
	             while($row_sd=mysql_fetch_assoc($query_sd))
	              {
                    $p[$k]=$row_sd['d_engine_oil'];
	                $p[$j]=$row_sd['filter'];
	                $p[$n]=$row_sd['wheel'];
	                $p[$h]=$row_sd['water_service'];
	                $p[$l]=$row_sd['oil_service'];
             	  }	
	              for($i=0;$i<5;$i++)
	              {
	                if(!empty($p[$i]))
	                {
					
	                 $q[$i];
                     mysql_select_db("service1",$conn);
	                 $query_p=mysql_query("SELECT `part_no`, `price`, `UoM` FROM `parts` WHERE `service_type`='".$p[$i]."'");
	                 while($row_p=mysql_fetch_assoc($query_p))
	                {
	        $content .='<tr align="center" style="font-size:12px;">
	                 <td>' .$row_p['part_no'] .'</td>
	                 <td>' .$p[$i] .'</td>
	                 <td>' .$row_p['UoM'] .'</td>
	                 <td>' .$q[$i] .'</td>
	                 <td>' .$row_p['price'] .'</td>	
					  <td>' .$q[$i] * $row_p['price'] .'</td>	
					 </tr> 
	            </table>';
                  $s[$i]=$q[$i] * $row_p['price'];
				   $c=$c+$s[$i];
				  }
                 }
	             }
	           				
             
              $v=$c*(14/100);
			  $t=$c+$v;
			  $a=round($t)-($t);
			 $fn = round($a,2);
			  $g=$t+$a;	 

$content .='<table align="center" style=" solid #000;font-size:12px;border-collapse:collapse;margin-top:15px" cellpadding="10" cellspacing="1"  width="92%"> 	 
             
	            <tr>
				   <td align="right">Total Amt</td>
				   	<td>'.$c.'</td>
				  </tr>
				  
				  <tr>
				  <td align="right">VAT (14%)</td>
				  <td>'.$v.'</td>
				  </tr> 
				  
				  <tr>
				  <td align="right">Total Amt include Tax</td>
				  <td>'.$t.'</td>
				  </tr> 
				  
				  <tr>
				  <td align="right">Adjustment Amt</td>
				  <td>'.$fn.'</td>
				  </tr> 
				  <tr>
				  <td align="right">Grand Total</td>
				  <td>'.$g.'</td>
				  </tr>

</table>';



$content .='
<table align="center" style=" solid #000;font-size:12px;border-collapse:collapse;margin-top:15px"  width="92%">             		
<tr>	
	<td align="center" style="color:#00008B"><b>Terms and Conditions</b></td>
</tr>	
						<tr>
							<td>1)&nbsp;&nbsp;Goods once sold will not be taken back or exchange expect as required by law.<br></td>
						</tr>
						<tr>
							<td>2)&nbsp;&nbsp;Only the courts of COIMBATORE shall have jurisdiction in any proceedings relating to this contract.<br></td>
						</tr>
					    <tr>
							<td>3)&nbsp;&nbsp;I hereby certify that my Registration Certificate under the VAT Act in force on the date on which the sale of the goods in this bill/cash memorandum is made by me and that the transaction of sale covered by this bill/cash memorandum has been effected by me in the regular course of my business. <br></td>
						</tr>
						<tr>
							<td>*&nbsp;&nbsp;&nbsp;&nbsp;Vechicle/Goods received in good condition and to our satisfaction.<br></td>
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
</table>';
#$invo=$content .=''.$row['invoice_no'].'';
$filename = 'invoice';
$dompdf->load_html($content);

$dompdf->render();
$dompdf->stream($filename. ".pdf", array("Attachment" => 0));
?>