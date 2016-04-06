<?php
require('../../sales_db.php');
  mysql_select_db("service1",$conn);
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

<!DOCTYPE html>
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AadhiMaruti | Service Details</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	 <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="../../plugins/iCheck/all.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
	 <!-- Date Picker -->
    <link rel="stylesheet" href="../../plugins/datepicker/datepicker3.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
     <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
     <script src="jquery.validate.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
	 <!-- datepicker -->
    <script src="../../plugins/datepicker/bootstrap-datepicker.js"></script>
	<script src="../../js/upgraded.js"></script>
	
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
        <!-- Logo -->
        <a style="background-color: rgb(204, 238, 255);" href="index.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>Aa</b>dhi</span>
          <!-- logo for regular state and mobile devices -->
          <span style="background-color: rgb(102, 204, 255);" class="logo-lg"><b>Aadhi</b>MARUTI</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav style="background-color: rgb(102, 204, 255);" class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
             
				<!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="../../dist/img/user3-128x128.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo $_SESSION['username'] ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="../../dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                    <p>
					  <?php echo $_SESSION['username'] ?>
                    </p>
                  </li>
                  <!-- Menu Body -->
                 
                  <!-- Menu Footer-->
                  <li class="user-footer">
                     <div class="text-center">
					  <a href="../examples/login.php">
                      Sign out</a>
                    </div>
                    
                  </li>
                </ul>
              </li>
               </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside style="font-family: &quot;Comic Sans MS&quot;,cursive,sans-serif;" class="main-sidebar">
           <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-cogs"></i> <span>Pre-Sales</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../../leaddetailsindex.php"><i class="fa fa-circle-o"></i> Lead Details</a></li>
                <li><a href="pre.php"><i class="fa fa-circle-o"></i> Pre-sales Feedback</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-cog"></i><span>Sales</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="oppur.php"><i class="fa fa-circle-o"></i> Opportunity Details</a></li>
			    <li><a href="../examples/invoiceindex.php"><i class="fa fa-circle-o"></i> Invoice</a></li> 
              <!--  <li><a href="index.html"><i class="fa fa-circle-o"></i> Purchase Details</a></li> -->
                <li><a href="../../deliverydetailindex.php"><i class="fa fa-circle-o"></i> Delivery</a></li>
              </ul>
            </li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-steam-square"></i> 
				<span>Service</span><i class="fa fa-angle-left pull-right"></i> 
				</a>
			  <ul class="treeview-menu" class="treeview-active">
                <li><a href="amc_delete.php"><i class="fa fa-circle-o"></i> AMC</a></li>
                <li><a href="appdelete.php"><i class="fa fa-circle-o"></i> Service Appointments </a></li>
				<li><a href="ser_delete.php"><i class="fa fa-circle-o"></i> Service Detail</a></li>
                <li class="active"><a href="ser_invoice.php"><i class="fa fa-circle-o"></i> Invoice</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="report.php">
                <i class="fa fa-pie-chart"></i>
                <span>Report</span>
                </a>
            </li>
            <li class="treeview">
              <a href="#index.html">
                <i class="fa fa-inr"></i>
                <span>Finance</span>
              </a>
              </li>
            <li class="treeview">
              <a href="post.php">
                <i class="fa fa-edit"></i> <span>Feedback</span>
              </a>
              </li>
            <li>
              <a href="../calendar.php">
                <i class="fa fa-calendar"></i> <span>Calendar</span>
               </a>
            </li>                
            <li>
              <a href="mailbox.php">
                <i class="fa fa-envelope-o"></i> <span>Mailbox</span>
               </a>
            </li>  	
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
             Service Invoice
            <small>(service)</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="../../index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li class="active">Service Invoice</li>
          </ol>
        </section>

       
		
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
				<p align="left">___________________</p>
				<p align="left">Customer's Signature</p>
			</div>
			   <div class="col-xs-6" >
				<p align="right">___________________</p>
				<p align="right">Authorized signatory</p>
			   </div>		
						
            </div><!-- /.col -->
          </div><!-- /.row -->

       

          <!-- this row will not appear when printing -->
          <div class="row no-print">
            <div class="col-xs-12">
              <a href="ser_invoiceprint.php?iid=<?php echo $row_d['cust_id']; ?>" target="_blank" class="btn btn-info"><i class="fa fa-print"></i> Print</a>
            </div>
          </div>
        </section><!-- /.content -->
        <div class="clearfix"></div>
      </div><!-- /.content-wrapper -->
      

    </div><!-- ./wrapper -->

 
  </body>
</html>