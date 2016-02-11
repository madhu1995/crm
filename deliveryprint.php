<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("delivery",$con);
#if(isset($_GET['did']))

#$sql=mysql_query("select * from invoice_details where invoice_no='".$_GET['print']."' ");
#echo "select * from invoice_details where invoice_no='".$_GET['print']."' ";
#$row=mysql_fetch_assoc($sql);

?>
<html>
  <head>
  <style>
  table {
    width: 100%;
}

th {
    height: 60px;
} 
</style>`
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aadhi Maruthi | delivery</title>
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
            <h2 class="page-header"  align="center">
			    
              <i>Aadhi Maruthi</i><br><br><br><br> 
              <small class="pull-left">Date&nbsp;<?php echo $row['ap_b_e']; ?></small><br><br>
            </h2>
          </div><!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row delivery-info">
          <div class="col-sm-4 delivery-col">
           From<br>
              <address>
                <strong>Aadhi Maruthi</strong><br>
                6/79,Sivanandhapuram<br>
                Coimbatore-641017<br>
                Phone: 0422-2457652<br>
                Email: info@aadhimaruthi.com
              </address>
          </div><!-- /.col -->
          <div class="col-sm-4 delivery-col"><br><br>
           To<br>
              <address>
                <strong><?php echo $row['cust_name']; ?></strong><br>
               <strong><?php echo $row['res_add']; ?></strong><br>
			    <b>Pincode&nbsp;&nbsp;</b><?php echo $row['res_pin']; ?><br><br><br>
              </address>
          </div><!-- /.col -->
         
		  
        </div><!-- /.row -->

        <!-- Table row -->
        <div class="row">
          <div class="col-xs-12 table-responsive">
              <table class="table table-striped" border="2" >
                <tbody>
                  <tr class="info">
				  <th>Customer_id</th>
				  <th>Delivery_id</th>
				   <th>Car Model</th>
					  <th>Color</th>
					  <th>Gear type</th>
					  <th>Chassis_No</th>
					  <th>Engine_No</th>
					  <th>Mode Of Payment</th>
                  </tr>
				  <tr>
				  <td><?php echo $row['cus_id']; ?></td>
						
						
						<td><?php echo $row['deliv_id']; ?></td>
				
						<td><?php echo $row['model1']; ?></td>
						
						<td><?php echo $row['model_color']; ?></td>
						<td><?php echo $row['model_gear']; ?></td>
						<td><?php echo $row['chassis_no']; ?></td>
						<td><?php echo $row['engine_no']; ?></td>
						<td><?php echo $row['pay']; ?></td>
				  </tr>
				  </tbody>
				  </table
                 
                 <table class="table table-striped">
                <tbody>
                  <tr class="info">
  
				<br><br><br><br>
				<h4 align="right">For Aadhi Maruthi</h4>
				<br>
				</tr>
				</tbody>
				</table>
				
			<p class="pull-right">_________________________</p>
						
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
