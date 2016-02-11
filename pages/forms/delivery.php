<?php
session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db("delivery",$con);
#error_reporting(0);
if(isset($_POST['submits']))
{
                                                                                                       
$query=mysql_query("insert into deliv_detail(enq_id,cus_id,book_id,cust_name,deliv_id,res_add,res_ph1,res_ph2,res_em,res_pin,model1,model_fuel,model_color,model_gear,chassis_no,engine_no,ap_b_d,ap_b_e,pay) VALUES ('".$_POST['enq_id']."','".$_POST['cus_id']."','".$_POST['book_id']."','".$_POST['cust_name']."','".$_POST['deliv_id']."','".$_POST['res_add']."','".$_POST['res_ph1']."','".$_POST['res_ph2']."','".$_POST['res_em']."','".$_POST['res_pin']."','".$_POST['model1']."','".$_POST['model_fuel']."','".$_POST['model_color']."','".$_POST['model_gear']."','".$_POST['chassis_no']."','".$_POST['engine_no']."','".$_POST['ap_b_d']."','".$_POST['ap_b_e']."','".$_POST['pay']."')");
#echo "insert into deliv_detail(enq_id,cus_id,book_id,cust_name,deliv_id,res_add,res_ph1,res_ph2,res_em,res_pin,model1,model_fuel,model_color,model_gear,chassis_no,engine_no,ap_b_d,ap_b_e,pay) VALUES ('".$_POST['enq_id']."','".$_POST['cus_id']."','".$_POST['book_id']."','".$_POST['cust_name']."','".$_POST['deliv_id']."','".$_POST['res_add']."','".$_POST['res_ph1']."','".$_POST['res_ph2']."','".$_POST['res_em']."','".$_POST['res_pin']."','".$_POST['model1']."','".$_POST['model_fuel']."','".$_POST['model_color']."','".$_POST['model_gear']."','".$_POST['chassis_no']."','".$_POST['engine_no']."','".$_POST['ap_b_d']."','".$_POST['ap_b_e']."','".$_POST['pay']."')";

echo"Success";
if($query)
{
 header("location:../../deliverydetailindex.php");
}
}
?>
<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aadhi Maruti | Delivery Details</title>
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
	 <!-- Date Picker -->
    <link rel="stylesheet" href="../../plugins/datepicker/datepicker3.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

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
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                 </a>
				 </li>
                 <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                </a>
				</li>
               <!-- Tasks: style can be found in dropdown.less -->
              <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                </a>
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
          <form action="delivery.php" method="post" class="sidebar-form">
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
                <li><a href="../../leaddetails.php"><i class="fa fa-circle-o"></i> Lead Details</a></li>
                <li><a href="pre.php"><i class="fa fa-circle-o"></i> Pre-sales Feedback</a></li>
              </ul>
            </li>
            <li class=" active treeview">
              <a href="#">
                <i class="fa fa-cog"></i><span>Sales</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu" class="treeview-active">
                <li><a href="oppur.php"><i class="fa fa-circle-o"></i> Opportunity Details</a></li>
				<li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
                <li><a href="index.html"><i class="fa fa-circle-o"></i> Purchase Details</a></li>
                <li class="active"><a href="pages/forms/delivery.php"><i class="fa fa-circle-o"></i> Delivery</a></li>
              </ul>
            </li>
            <li>
              <a href="index.html">
                <i class="fa fa-steam-square"></i> 
				<span>Service</span><i class="fa fa-angle-left pull-right"></i> 
				</a>
			  <ul class="treeview-menu">
                <li><a href="index.html"><i class="fa fa-circle-o"></i> AMC</a></li>
                <li><a href="index.html"><i class="fa fa-circle-o"></i> Service Appointments </a></li>
                <li><a href="index.html"><i class="fa fa-circle-o"></i> Follow up</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="index.html">
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
              <a href="index.html">
                <i class="fa fa-edit"></i> <span>Feedback</span>
              </a>
              </li>
            <li>
              <a href="index.html">
                <i class="fa fa-calendar"></i> <span>Calendar</span>
               </a>
            </li>                
            <li>
              <a href="index.html">
                <i class="fa fa-phone"></i> <span>Alerts</span>
               </a>
            </li> 
				 <li class="treeview">
              <a href="../examples/logout.php">
                <i class="fa fa-circle-o-notch"></i>
                <span>Logout</span>
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
            Delivery
          </h1>
          <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li class="active">Delivery Details</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
		 <form role="form" method="post">
          <div class="row">
		  
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Enquiry Details</h3>
                </div><!-- /.box-header -->
                              
                  <div class="box-body">
                    <div class="form-group">
                      <label for="enq">Enquiry_Id</label><input type="text" style="width:70%" class="form-control input-sm" name="enq_id">
                    </div>
					<div class="form-group">
                      <label for="enq">Customer_Id</label><input type="text" style="width:70%" class="form-control input-sm" name="cus_id">
                    </div>
					<div class="form-group">
                      <label for="enq">Booking_Id</label><input type="text" style="width:70%" class="form-control input-sm" name="book_id">
                    </div>
					
                    <div class="form-group">
                      <label for="mail">Customer_Name</label><input type="text" style="width:70%" class="form-control input-sm" name="cust_name">
                    </div>
					<div class="form-group">
                      <label for="enq">Delivery_Id</label><input type="text" style="width:70%" class="form-control input-sm" name="deliv_id">
                    </div>
					</div>
	            </div>
				
              
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Residence</h3>
                </div>
                <div class="box-body">

				<div class="form-group">
                      <label>Address</label>
                      <textarea class="form-control input-sm" style="width:70%" rows="3" placeholder="Enter ..." name="res_add"></textarea>
                    </div>
					

				    <div class="form-group">
                      <label for="phone">Phone</label>
                      <input type="text" style="width:70%" class="form-control input-sm" id="res-phone1" name="res_ph1"  placeholder="Enter mobile number">
                    </div>
					<div class="form-group">
                      <label for="phone">Alternate phone</label>
                      <input type="text" style="width:70%" class="form-control input-sm" id="res-phone2" name="res_ph2" placeholder="Enter mobile number">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="text" style="width:70%" class="form-control input-sm" id="exampleInputEmail1" name="res_em" placeholder="Enter mail">
                    </div>
					<div class="form-group">
                      <label for="phone">Pincode</label>
                      <input type="text" style="width:70%" class="form-control input-sm" id="pin1" name="res_pin"  placeholder="Enter pincode">
                    </div>
					</div>
					
                </div><!-- /.box-body -->
              
            </div><!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">
              <!-- Horizontal Form -->
              <div class="box box-info">
                
                <div class="box-header with-border">
                  <h3 class="box-title">Model Details(Purchased)</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form role="form">
                    <!-- text input -->
					 <div class="form-group">
              <label>Model</label>
     		    <select class="form-control" style="width:70%" name="model1">
					    <option>Select a car model</option>
                        <option>swift</option>
                        <option>ritz</option>
                        <option>celerio</option>
                        <option>s-cross</option>
                        <option>sx4</option>
     			</select>
             </div>
			 <div class="form-group">
              <label>Fuel type</label>
     		    <select class="form-control" style="width:70%" name="model_fuel">
					    <option>Select fuel type</option>
                        <option>Petrol</option>
                        <option>Diesel</option>
     			</select>
             </div>
			 <div class="form-group">
              <label>Color</label>
     		    <select class="form-control" style="width:70%" name="model_color">
					    <option>Silver</option>
                        <option>Red</option>
                        <option>Black</option>
                        <option>Blue</option>
                        <option>Yellow</option>
     			</select>
             </div>
			
			 <div class="form-group">
              <label>Gear type</label>
     		    <select class="form-control" style="width:70%" name="model_gear">
					    <option>Select Gear type</option>
                        <option>Manual Shift</option>
                        <option>Auto Shift</option>
     			</select>
             </div>
			
			<div class="form-group">
                      <label>Chassis_No</label><input type="text" style="width:70%" class="form-control input-sm" name="chassis_no">
                    </div>
					
			<div class="form-group">
                      <label>Engine_No</label><input type="text" style="width:70%" class="form-control input-sm" name="engine_no">
                    </div>
			 
            <div class="form-group">
              <label>Date of Sale</label>
			    <div class="input-group date" data-provide="datepicker" style="width:70%">
                   <input type="text" class="form-control" name="ap_b_d" >
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                </div>
            </div>
			<div class="form-group">
              <label>Date Of Delivery</label>
			    <div class="input-group date" data-provide="datepicker" style="width:70%">
                   <input type="text" class="form-control" name="ap_b_e" >
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                </div>
            </div>
			
			<div class="form-group">
				<label>Mode of payment</label>
				<select class="form-control" style="width:70%" name="pay">
				<option>Cash</option>
				<option>Self finance</option>
				<option>Maruti finance</option>
				</select>
			</div>
			
             </div><!-- /.box-body -->
				<div class="box-footer">
                    <button type="submit" name="submits" class="btn btn-info pull-right">Submit</button>
                  </div>
				  
				  </div><!--/.col (right) -->
              </div>   <!-- /.row -->
		      </div>
				   </form><!-- /.box-footer -->
            
        </section><!-- /.content -->
	 
 
   <d!-- jQuery 2.1.4 -->
    <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
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
  </body>
</html>
