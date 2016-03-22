<?php
require('sales_db.php');

?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <<title>Aadhi Maruthi | Invoice</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <?php
  $sql=mysql_query("select * from invoice_details where invoice_no='".$_GET['print']."' ");
 # echo "select * from invoice_details where invoice_no='".$_GET['print']."' ";
  $row=mysql_fetch_assoc($sql);
  ?>
  <body onload="window.print();">
    <div class="wrapper">
      <!-- Main content -->
      <section class="invoice">
        <!-- title row -->
        <div class="row">
          <div class="col-xs-12">
            <h2 class="page-header" class="header">
			    
              <i class="fa fa-globe"></i> Aadhi Maruthi
              <small class="pull-right">Date&nbsp;<?php echo $row['doi']; ?></small>
            </h2>
          </div><!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
          <div class="col-sm-4 invoice-col">
           From
              <address>
                <strong>Aadhi Maruthi</strong><br>
                6/79,Sivanandhapuram<br>
                Coimbatore-641017<br>
                Phone: 0422-2457652<br>
                Email: info@aadhimaruthi.com
              </address>
          </div><!-- /.col -->
          <div class="col-sm-4 invoice-col">
           To
              <address>
                <strong><?php echo $row['custname']; ?></strong><br>
				<?php echo $row['title']; ?>&nbsp;&nbsp;<?php echo $row['fathername']; ?><br>
               <?php echo $row['addr']; ?><br>
			    <b>Pin Code&nbsp;&nbsp;</b><?php echo $row['pin_code']; ?><br>
              </address>
          </div><!-- /.col -->
          <div class="col-sm-4 invoice-col">
            <b>Invoice No&nbsp;&nbsp;</b><?php echo $row['invoice_no']; ?><br>
              <b>Booking ID&nbsp;&nbsp;</b> <?php echo $row['booking_no']; ?><br>
			  <b>Delivery At&nbsp;&nbsp;</b><?php echo $row['delivery']; ?><br>
          </div><!-- /.col -->
		  
        </div><!-- /.row -->

        <!-- Table row -->
        <div class="row">
          <div class="col-xs-12 table-responsive">
            <table class="table table-striped">
			     <tbody>
                  <tr class="info">
                    <th>Particulars</th>
                    <th>Quantity</th>
                    <th>Unit Price Rs.</th>
                    <th>Amount</th>
                  </tr>
				  <tr>
				  
				  
						<td><?php echo $row['particulars']; ?></td>
						<td><?php echo $row['qty']; ?></td>
						<td><?php echo $row['up']; ?></td>
						<td><?php echo $row['amt']; ?></td>
				  
			
				  </tr>
				  </tbody>
				  </table>
				  <table class="table">
				  <tbody>
				  <tr>
				  <td align="right">Unit Conecssion</td>
				  <td><?php echo $row['unit_concess']; ?></td>
				  </tr>
				  <tr>
				  <td align="right">Total Conecssion</td>
				  <td><?php echo $row['tot_concess']; ?></td>
				  </tr>
				  <tr>
				  <td align="right">Price after concession</td>
				  <td><?php echo $row['af_concess']; ?></td>
				  </tr> 
				   <tr>
				  <td align="right">Total Tax</td>
				  <td><?php echo $row['tot_tax']; ?></td>
				  </tr> 
				  <tr>
				  <td align="right">Gross Total</td>
				  <td><?php echo $row['grs_tot']; ?></td>
				  </tr> 
				  <tr>
				  <td align="right">Adjustment Amount</td>
				  <td><?php echo $row['adjust']; ?></td>
				  </tr> 
				  <tr>
				  <td align="right">Grand Total</td>
				  <td><?php echo $row['grand_tot']; ?></td>
				  </tr> 
                </tbody>
              </table>
			   <table class="table table-striped">
                <tbody>
                  <tr class="info">
                    <th>Color</th>
                    <th>Engine No.</th>
                    <th>Chassis No.</th>
                  </tr>
				  <tr>
						<td><?php echo $row['color']; ?></td>
						<td><?php echo $row['eng_no']; ?></td>
						<td><?php echo $row['cha_no']; ?></td>
				  </tr>
				  </tbody>
				  </table>
				  <strong>This invoice includes the following taxes</strong>
				   <table class="table table-striped">
                <tbody>
                  <tr class="info">
                    <th>Name of the Tax</th>
                    <th>Tax Rate</th>
                    <th>Tax Amount</th>
                  </tr>
				  <tr>
						<td>VAT</td>
						<td>14.5 %</td>
						<td><?php echo $row['tot_tax']; ?></td>
				  </tr>
				  </tbody>
				  </table>
				  <br>
				  <br>
				  <br>
				  <br>
				  <br>
				  <br>
				  <br>
					<h3 align="center">Terms And Conditions</h3>
				  <table>
				     <tbody>
						<tr>
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
				<br><br><br><br>
				<br><br><br><br>
				<br><br><br><br>
				<br><br><br><br>
					<br><br><br><br>
						<br><br><br><br>
							
								
				<h4 align="right">For Aadhi Maruthi</h4>
				<br>
				
							<p>_____________________</p>
							<p align="right">______________________</p>
						
            </div><!-- /.col -->
          </div><!-- /.row -->

            
          </div><!-- /.col -->
        <!--</div>-->

        
      </section><!-- /.content -->
    </div><!-- ./wrapper -->

    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js"></script>
  </body>
</html>
