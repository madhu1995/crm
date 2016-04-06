<?php
 require('../../sales_db.php');
  $sql_d=mysql_query("select * from ser_detail where cust_id='".$_GET['iid']."' ");
  $row_d=mysql_fetch_assoc($sql_d);
  $sql_a=mysql_query("select * from ser_appmnt where cust_id='".$_GET['iid']."' ");
   $row_a=mysql_fetch_assoc($sql_a);
   $query_sd=mysql_query("select d_engine_oil,filter,wheel,water_service,oil_service from ser_detail where cust_id='".$_GET['iid']."' ");
   $query_sdq=mysql_query("select d_qty,f_qty,w_qty,ws_qty,o_qty from ser_detail where cust_id='".$_GET['iid']."' ");
  
   $sql_o=mysql_query("select * from opp_details where Cus_id='".$_GET['iid']."' ");
   $row_o=mysql_fetch_assoc($sql_o);
 error_reporting(0);
?>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
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

  <body onload="window.print();">
    <div class="wrapper">
      <!-- Main content -->
    
	        <section class="invoice">
          <!-- title row -->
          <div class="row" id="myDiv">
		  
            <div class="col-xs-6" >
			
              <address>
               <h4> <strong> Aadhi Maruthi </strong><br></h4>
				6/79,Sivanandhapuram<br>
                Coimnatore-641017<br>
                Phone: 0422-2457652<br>
                Email: info@aadhimaruthi.com
				<address>
			</div>
			
			<div class="col-xs-6">
			<address>
				<img src="img/Adi.png" class="pull-right" style="width:200px; height:100px;">
            </address>
			</div>	<!-- /.col -->
             
            </div><br></br>
          <script>
		  document.getElementById("myDiv").style.backgroundColor="#E6E6FA"
		  </script>
          <!-- info row -->
         
		  
		  <div class="row invoice-info">
            <div class="col-xs-6">
			 
              <address>
                <strong><?php echo $row_o['Cus_name']; ?></strong><br>
				<?php echo $row_o['Res_addr']; ?><br>
				<?php echo $row_o['Pincode']; ?><br>
				<?php echo $row_o['Res_city']; ?><br>
               <?php echo $row_o['Res_phone']; ?><br>
			    
              </address>
			
            </div><!-- /.col -->
			
			 <div class="col-sm-3">
            <address>
				
                <b>Invoice no :</b><?php echo $row_a['cust_id']; ?><br>
				 <b>Model :</b><?php echo $row_a['model']; ?><br>
                <b>Chassis no :</b><?php echo $row_a['chassis_no']; ?><br>
			    <b>Kms :</b><?php echo $row_a['milage']; ?><br>
				<b>Vehicle no :</b><?php echo $row_a['car_regno']; ?><br>
				 
				<b>Date&nbsp;&nbsp;:</b><?php echo $row_d['delivery_date']; ?>
				</address>
              
            </div><!-- /.col -->
          </div><!-- /.row -->

          <!-- Table row -->
          <div class="row">
            <div class="col-xs-12 table-responsive">
			
			
			
              <table class="table table-striped">
                <tbody>
				
                 <tr class="info">
                    <th>Part_no</th>
                    <th>Particulars</th>
					<th>UoM</th>
					<th>Qty</th>
                    <th>Unit Price Rs.</th>
					<th>Total Price</th>
                  </tr> 
				 
				  <?php
				  
				  $p=array();
				  $i=0;
				   
				  ?>
				  
				<?php
                 
	              $p=array();
	              $i=0;
				  $c=0;
				  $q=array();
				 
				   $q[0]=$row_d['d_qty'];
	                $q[1]=$row_d['f_qty'];
	                $q[2]=$row_d['w_qty'];
	                $q[3]=$row_d['ws_qty'];
	                $q[4]=$row_d['o_qty'];
				 
                    $p[0]=$row_d['d_engine_oil'];
	                $p[1]=$row_d['filter'];
	                $p[2]=$row_d['wheel'];
	                $p[3]=$row_d['water_service'];
	                $p[4]=$row_d['oil_service'];
             	  
	              for($i=0;$i<5;$i++)
	              {
	                if(!empty($p[$i]))
	                {
					
	                 $q[$i];
                     mysql_select_db("service1",$conn);
	                 $query_p=mysql_query("SELECT `part_no`, `price`, `UoM` FROM `parts` WHERE `service_type`='".$p[$i]."'");
	                 while($row_p=mysql_fetch_assoc($query_p))
	                {	
	            ?>
	
	                 <tr>
	                 <td><?php echo $row_p['part_no']; ?></td> 
	                 <td><?php echo $p[$i]; ?></td>
					 <td><?php echo $row_p['UoM']; ?></td>
					 <td><?php echo $q[$i] ?></td>
	                 <td><?php echo $row_p['price']; ?></td>
					 <td><?php echo $q[$i] * $row_p['price']; ?></td>
					 </tr> 
	            <?php
                  $s[$i]=$q[$i] * $row_p['price'];
				   $c=$c+$s[$i];
				  }
                 }
	             }
	            ?>
				
				  </body>
				  </table>
				  
			 <table class="table">
			  <tbody>
			   <?php
			  $v=$c*(14/100);
			  $t=$c+$v;
			  $a=round($t)-($t);
			  $fn = round($a,2);
			  $g=$t+$a;
			  
			  
			  ?>
				   <tr>
				   <td align="right">Total Amt</td>
				   <td><?php echo $c; ?></td>
				  </tr>
				  
				  <tr>
				  <td align="right">VAT (14%)</td>
				  <td><?php echo $v; ?></td>
				  </tr> 
				  
				  <tr>
				  <td align="right">Total Amt include Tax</td>
				  <td><?php echo $t; ?></td>
				  </tr> 
				  
				  <tr>
				  <td align="right">Adjustment Amt</td>
				  <td><?php echo $fn ; ?></td>
				  </tr> 
				  <tr>
				  <td align="right">Grand Total</td>
				  <td><?php echo $g; ?></td>
				  </tr> 
                </tbody>
              </table>
			   
				 
				   <p>___________________________________________________________________________________________________</p>
					<h4>Terms And Conditions:</h4>
				  <table>
				     <tbody>
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
					 </tbody>
				  </table>
				<br><br><br><br>
				<h4 align="right">For Aadhi Maruthi</h4>
				<br>
			 <div class="col-xs-6" >
				<p align="left">__________________</p>
				<p align="left">Customer's Signature</p>
			</div>
			   <div class="col-xs-6" >
				<p align="right">___________________</p>
				<p align="right">Authorized signatory</p>
			   </div>		
            </div><!-- /.col -->
          </div><!-- /.row -->
         
        </section><!-- /.content -->
	
	
    </div><!-- ./wrapper -->

    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js"></script>
  </body>
</html>
