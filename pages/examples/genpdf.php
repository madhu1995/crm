<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("invoice",$con);
$sql=mysql_query("select * from invoice_details where invoice_no='".$_GET['pdf']."' ");
$row=mysql_fetch_assoc($sql);
?>

<?php
#$client->convertURI('http://localhost/aadhi/pages/examples/viewinvoice.php?view='".$_GET['gen']."'', fopen('invoice.pdf', 'wb'));





 require('../../../../php/PEAR/fpdf/fpdf.php');
 class PDF extends FPDF
{
function Header()
{
if(!empty($_FILES["file"]))
  {
$uploaddir = "logo/";
$nm = $_FILES["file"]["name"];
$random = rand(1,99);
move_uploaded_file($_FILES["file"]["tmp_name"], $uploaddir.$random.$nm);
$this->Image($uploaddir.$random.$nm,10,10,20);
unlink($uploaddir.$random.$nm);
}
$this->SetFont('Arial','B',12);
$this->Ln(1);
}
function Footer()
{
$this->SetY(-15);
$this->SetFont('Arial','I',8);
$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
$pdf=new FPDF();
 
$pdf->AliasNbPages();
$pdf->SetAutoPageBreak(true, 15);
 
$pdf->AddPage();
#$pdf->Image('logo.png',18,13,33);
$pdf->SetFont('Arial','B',14);
$pdf->WriteHTML('<para><h1>Invoice</h1><br>');
$pdf->SetFont('Arial','B',7); 

			    $htmlTable='<TABLE>
				<table>
				<tr>
				 <td><h2>Aadhi Maruthi</h2></td>
              <td>Date&nbsp;<?php echo $row[$doi]; ?></td>
				<TABLE>';
              
        
         $htmlTable='<TABLE> 
        <table>
		<tr>
           <td>From</td>
		   <td>To</td>
		   <td><b>Invoice No&nbsp;&nbsp;</b><?php echo $row[$invoice_no]; ?></td>
		</tr>
		<tr>
			<td><strong>Aadhi Maruthi</strong></td>
			<td> <strong><?php echo $row[$custname]; ?></strong><br></td>
			<td><b>Booking ID&nbsp;&nbsp;</b> <?php echo $row[$booking_no]; ?></td>
		</tr>
		<tr>
			<td> 6/79,Sivanandhapuram<br></td>
			<td><?php echo $row[$title]; ?>&nbsp;&nbsp;<?php echo $row[$fathername]; ?><br></td>
			<td> <b>Delivery At&nbsp;&nbsp;</b><?php echo $row[$delivery]; ?><br></td>
		</tr>
		<tr>
			<td>Coimbatore-641017</td>
			<td><?php echo $row[$addr]; ?></td>
		</tr>
		<tr>
			<td>Phone: 0422-2457652</td>
			<td>Email: info@aadhimaruthi.com</td>
		</tr>
		<tr>
			<td></td>
			<td><b>Pin Code&nbsp;&nbsp;</b><?php echo $row[$pin_code]; ?></td>
		</tr>
		  </table>
		  </TABLE>';
        
		$htmlTable='<TABLE>
            <table>
			     
                  <tr class="info">
                    <th>Particulars</th>
                    <th>Quantity</th>
                    <th>Unit Price Rs.</th>
                    <th>Amount</th>
                  </tr>
				  <tr>
				  
				  
						<td><?php echo $row[$particulars]; ?></td>
						<td><?php echo $row[$qty]; ?></td>
						<td><?php echo $row[$up]; ?></td>
						<td><?php echo $row[$amt]; ?></td>
				  
			
				  </tr>
				 
				  </table>
				  </TABLE>';
				  $htmlTable='<TABLE>
				  <table class="table">
				  <tbody>
				  <tr>
				  <td align="right">Unit Conecssion</td>
				  <td><?php echo $row[$unit_concess]; ?></td>
				  </tr>
				  <tr>
				  <td align="right">Total Conecssion</td>
				  <td><?php echo $row[$tot_concess]; ?></td>
				  </tr>
				  <tr>
				  <td align="right">Price after concession</td>
				  <td><?php echo $row[$af_concess]; ?></td>
				  </tr> 
				   <tr>
				  <td align="right">Total Tax</td>
				  <td><?php echo $row[$tot_tax]; ?></td>
				  </tr> 
				  <tr>
				  <td align="right">Gross Total</td>
				  <td><?php echo $row[$grs_tot]; ?></td>
				  </tr> 
				  <tr>
				  <td align="right">Adjustment Amount</td>
				  <td><?php echo $row[$adjust]; ?></td>
				  </tr> 
				  <tr>
				  <td align="right">Grand Total</td>
				  <td><?php echo $row[$grand_tot]; ?></td>
				  </tr> 
                </tbody>
              </table>
			    </TABLE>';
				$htmlTable='<TABLE>
			   <table class="table table-striped">
                <tbody>
                  <tr class="info">
                    <th>Color</th>
                    <th>Engine No.</th>
                    <th>Chassis No.</th>
                  </tr>
				  <tr>
						<td><?php echo $row[$color]; ?></td>
						<td><?php echo $row[$eng_no]; ?></td>
						<td><?php echo $row[$cha_no]; ?></td>
				  </tr>
				  </tbody>
				  </table>
				  </TABLE>';
				  
				  $htmlTable='<TABLE>
				   <table class="table table-striped">
                <tbody>
                  <tr class="info">
					<th colspan="3"><strong>This invoice includes the following taxes</strong></th>
                    <th>Name of the Tax</th>
                    <th>Tax Rate</th>
                    <th>Tax Amount</th>
                  </tr>
				  <tr>
						<td>VAT</td>
						<td>14.5 %</td>
						<td><?php echo $row[$tot_tax]; ?></td>
				  </tr>
				  </tbody>
				  </table>
				   </TABLE>';
					
					$htmlTable='<TABLE>
				  <table>
				     <tbody>
					
						<tr>
							<td align="center"><h3 align="center">Terms And Conditions</h3></td>
							<td>1)</td>
							<td>Above prices are current Ex-Showroom prices.Buyers will have to pay prices prevailing at the time of delivery.<br></td>
						</tr>
						<tr>
							<td>2)</td>
							<td>Optionals, accessories, insurance, registration, taxes, octroi, other levies etc. will be charged as applicable.<br></td>
						</tr>
						<tr>
							<td>3)</td>
							<td>Prices are for current specifications and are subject to change without notice.<br></td>
						</tr>
						<tr>
							<td>4)</td>
							<td>Prices and additional charges as above will have to be paid completely, to conclude the sales.<br></td>
						</tr>
						<tr>
							<td>5)</td>
							<td>Payments by Cheques/Demand Drafts may be in favour of AADHI MARUTHI payable at COIMBATORE.<br></td>
						</tr>
						<tr>
							<td>6)</td>
							<td>Acceptance of advance / deposits by the seller is merely an indication of an intention to sell and does not result into a contract of sale.<br></td>
							
						</tr>
						<tr>
							<td>7)</td>
							<td>All disputes arising between the parties hereto shall be referred to arbitration according to the arbitration laws of the country.<br></td>
						</tr>
						<tr>
							<td>8)</td>
							<td>Only the courts of COIMBATORE shall have jurisdiction in any proceedings relating to this contract. <br></td>
						</tr>
						
					
					 </tbody>
				  </table>
				  </TABLE>';
				$htmlTable='<TABLE>
				<table>
				<tr>
				<td></td>
				<td><h4 align="right">For Aadhi Maruthi</h4></td>
				</tr>
				<tr>
				
							<td>_________________________&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_________________________</td>
							</tr>
					</table>
					<TABLE>';	
           


$pdf->WriteHTML2("<br><br><br>$htmlTable");
$pdf->SetFont('Arial','B',6);
$pdf->Output("target=_blank"); 
?>