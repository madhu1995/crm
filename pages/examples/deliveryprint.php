<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("delivery",$con);
if(isset($_GET['did']))

$sql=mysql_query("select * from deliv_detail where enq_id='".$_GET['did']."' ");
echo "select * from deliv_detail where enq_id='".$_GET['did']."' ";
$row=mysql_fetch_assoc($sql);

?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aadhi Maruthi | Invoice</title>
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
  $sql=mysql_query("select * from deliv_detail where enq_id='".$_GET['did']."' ");
 # echo "select * from invoice_details where invoice_no='".$_GET['print']."' ";
  $row=mysql_fetch_assoc($sql);
  ?>
  <body onload="window.print();">
    <div class="wrapper">
      <!-- Main content -->
      <section class="delivery">
        <!-- title row -->
        <div class="row">
          <div class="col-xs-12">
            <h2 class="page-header">
			    
              <i class="fa fa-globe"></i> Aadhi Maruthi
              <small class="pull-right">Date&nbsp;<?php echo $row['doi']; ?></small>
            </h2>
          </div><!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row delivery-info">
          <div class="col-sm-4 delivery-col">
           From
              <address>
                <strong>Aadhi Maruthi</strong><br>
                6/79,Sivanandhapuram<br>
                Coimbatore-641017<br>
                Phone: 0422-2457652<br>
                Email: info@aadhimaruthi.com
              </address>
          </div><!-- /.col -->
          <div class="col-sm-4 delivery-col">
           To
              <address>
                <strong><?php echo $row['cust_name']; ?></strong><br>
				
               <?php echo $row['res_add']; ?><br>
			    <b>Pincode&nbsp;&nbsp;</b><?php echo $row['res_pin']; ?><br>
              </address>
          </div><!-- /.col -->
          <div class="col-sm-4 delivery-col">
            <b>Enquiry_id&nbsp;&nbsp;</b><?php echo $row['enq_id']; ?><br>
              <b>Customer_id&nbsp;&nbsp;</b> <?php echo $row['cus_id']; ?><br>
			  <b>Booking_id&nbsp;&nbsp;</b><?php echo $row['book_id']; ?><br>
			  <b>Delivery_id&nbsp;&nbsp;</b><?php echo $row['deliv_id']; ?><br>
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
                    <th>vat</th>
                    <th>Total Amount</th>
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
                    <th>Engine_No.</th>
                    <th>Chassis_No.</th>
                  </tr>
				  <tr>
						<td><?php echo $row['model_color']; ?></td>
						<td><?php echo $row['engine_no']; ?></td>
						<td><?php echo $row['chassis_no']; ?></td>
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
				
				  
  
				<br><br><br><br>
				<h4 align="right">For Aadhi Maruthi</h4>
				<br>
				
							<p>_________________________&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_________________________</p>
						
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
