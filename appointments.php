
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("service",$con);
error_reporting(0);
if(isset($_POST['submit']))
{
$query=mysql_query("INSERT INTO ser_app (Customer_name,Customer_id,Car_No,Model,Fuel_Type,Engine_No,Purchase_year,Service_No,Service,AMC_type,Kilometers_Covered,Warenty_period,Last_Service_Date,Due_Date, Service_Start_Date, Phone, Email, Address, City) VALUES ('".$_POST['Customer_name']."','".$_POST['Customer_id']."','".$_POST['Car_no']."','".$_POST['Model']."','".$_POST['Fuel_Type']."','".$_POST['Engine_No']."','".$_POST['Purchase_year']."','".$_POST['Service_No']."','".$_POST['Service']."', '".$_POST['AMC_type']."', '".$_POST['Kilometers_Covered']."','".$_POST['Warenty_period']."', '".$_POST['Last_Service_Date']."', '".$_POST['Due_Date']."', '".$_POST['Service_Start_Dateice']."','".$_POST['Phone']."', '".$_POST['Email']."', '".$_POST['Address']."', '".$_POST['City']."')");
#echo "INSERT INTO ser_app (Customer_name,Customer_id,Car_No,Model,Fuel_Type,Service_No,Service,Service_Type,AMC_type,Kilometers_Covered,Last_Service_Date,Due_Date,Service_Start_Date,Delivery_Date,Phone,Email,Address,City) VALUES ('".$_POST['cust_name']."','".$_POST['ser_no']."','".$_POST['car_no']."','".$_POST['model']."','".$_POST['ser']."','".$_POST['ser_typ']."', '".$_POST['amc']."', '".$_POST['kilomtr']."', '".$_POST['ls_dt']."', '".$_POST['d_dt']."', '".$_POST['ser_dt']."', '".$_POST['del_dt']."', '".$_POST['phone']."', '".$_POST['mail']."', '".$_POST['add']."', '".$_POST['city']."')";

#
}
?>





<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Adhi Maruti CRM</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
	<!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">
     <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.css">
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
	  </div>
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
              <ul class="treeview-menu" class="treeview-active">
                <li><a href="leaddetails.html"><i class="fa fa-circle-o"></i> Lead Details</a></li>
                <li><a href="pages/forms/pre.html"><i class="fa fa-circle-o"></i> Pre-sales Feedback</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-cog"></i><span>Sales</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="index.html"><i class="fa fa-circle-o"></i> Opportunity Details</a></li>
				<li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
                <li><a href="index.html"><i class="fa fa-circle-o"></i> Purchase Details</a></li>
                <li><a href="index.html"><i class="fa fa-circle-o"></i> Delivery</a></li>
              </ul>
            </li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-steam-square"></i> 
				<span>Service</span><i class="fa fa-angle-left pull-right"></i> 
				</a>
			  <ul class="treeview-menu">
                <li><a href="amc.php"><i class="fa fa-circle-o"></i> AMC</a></li>
                <li class="active"><a href="appointments.php"><i class="fa fa-circle-o"></i> Service Appointments </a></li>
               <li><a href="servicedetails.php"><i class="fa fa-circle-o"></i> Service Detail</a></li>
			   
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
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Service Appointments
            <small>Appointment Details</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li class="active">Service_Appoinment</li>
          </ol>
        </section>
		
         <br></br>
        <!-- form -->
		<div class="box box-primary">
		<form role="form" method="post">
                  <div class="box-body">
				  <div class="col-xs-3">
                    <div class="form-group">
                      <label>Customer_Name</label><input type="text" style="width:70%" class="form-control input-sm" name="Customer_name" pattern="[a-zA-Z]+" placeholder="Enter name">
                    </div>
					
					<div class="form-group">
					 
                      <label for="phone">Customer_id</label>
                      <input type="text" style="width:70%" class="form-control input-sm" name="Customer_id" placeholder="Enter service no">
                    </div>
					
					<div class="form-group">
					 
                      <label for="phone">Car No</label>
                      <input type="text" style="width:70%" class="form-control input-sm" name="Car_no" placeholder="car no">
                    </div>

					<div class="form-group">
                      <label>Model</label>
					  <select class="form-control" style="width:70%" name="Model" required>
					    <option value="" disabled selected>Select a car model</option>
                        <option>swift</option>
                        <option>ritz</option>
                        <option>celerio</option>
                        <option>s-cross</option>
                        <option>sx4</option>
                      </select>
                    </div>
					  
					   <div class="form-group">
                      <label>Fuel Type</label>
					  <select class="form-control" style="width:70%" name="Fuel_Type" required>
					    <option value="" disabled selected>Select</option>
                        <option>Petrol</option>
                        <option>Diesel</option>
                      </select>
                    </div>
					</div>
                     

					<div class="col-xs-3">
					<div class="form-group">
					  <label for="phone">Engine No</label>
                      <input type="text" style="width:70%" class="form-control input-sm" name="Engine_No" placeholder="Enter">
                    </div>
					
					<div class="form-group">
					  <label for="phone">Year of Purchase</label>
                      <input type="text" style="width:70%" class="form-control input-sm" name="Purchase_year" placeholder="">
                    </div>
					
					<div class="form-group">
					  <label for="phone">Service No</label>
                      <input type="text" style="width:70%" class="form-control input-sm" name="Purchase_year" placeholder="Enter service no">
                    </div>
					
                    <div class="form-group">
                      <label>Service</label>
                      <select class="form-control" style="width:70%" name="Service">
					  <option value="" disabled selected>Select</option>
					     <option>Regular</option>
                        <option>Oil and Filter Service</option>
                        <option>Full Service</option>
                        <option>Others</option>
                      </select>
					  </div>
					  
					 				  
					  <div class="form-group">
                      <label>AMC Type</label>
                      <select class="form-control" style="width:70%" name="AMC_type">
					  <option value="" disabled selected>Select</option>
                        <option>Gold</option>
                        <option>Silver</option>
                       </select>
					  </div>
					
					</div>
					  
					 
					  <div class="col-xs-3">
					  
					   <div class="form-group">
					  <label for="phone">Kilometers Covered</label>
                      <input type="text" style="width:70%" class="form-control input-sm" name="Kilometers_Covered" placeholder="Enter kilometer">
                    </div>	
					   
					  <div class="form-group">
					   <label for="phone">Warranty Period</label>
                      <input type="text" style="width:70%" class="form-control input-sm" name="Warenty_period" placeholder="Enter">
                    </div>
					
					  <div class="form-group">
                       <label>Last Service Date</label>
					    <div class="input-group date" data-provide="datepicker" style="width:70%" >
                        <input type="text" class="form-control" name="Last_Service_Date" >
                      <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                        </div>
                      </div>
					  </div>
				
					 <div class="form-group">
                       <label>Due Date</label>
					    <div class="input-group date" data-provide="datepicker" style="width:70%" >
                        <input type="text" class="form-control" name="Due_Date" >
                      <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                        </div>
                      </div>
					  </div>
					  
					   <div class="form-group">
                       <label>Service start Date</label>
					    <div class="input-group date" data-provide="datepicker" style="width:70%" >
                        <input type="text" class="form-control" name="Service_Start_Date" >
                      <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                        </div>
                      </div>
					  </div>
					  
					  
					  
					  
                    <!-- /.input group -->
                  
				  
					</div>	
					
                    <!-- /.input group -->
                  
				  <div class="col-xs-3">
                    <div class="form-group">
					 
                      <label for="phone">Phone</label>
                      <input type="text" style="width:70%" class="form-control input-sm" name="Phone" pattern="^[7||8||9]{1}[0-9]{9}$" placeholder="Enter mobile number">
                    </div>
					
					<div class="form-group">
                      <label for="emai1">Email</label>
                      <input type="text" style="width:70%" class="form-control input-sm" name="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Enter mail">
                    </div>
					
					<div class="form-group">
                      <label>Address</label>
                      <textarea class="form-control input-sm" style="width:70%" rows="3" name="Address" placeholder="Address"></textarea>
                    </div>
					
					 <div class="form-group">
                      <label>City</label>
                      <select class="form-control" style="width:70%" name="City" required>
					  <option value="" disabled selected>Select City</option>
					    <option value="1">Chennai</option>
                        <option value="2">Coimbatore</option>
                        <option value="3">Trichy</option>
                        <option value="4">Tirupur</option>
                        <option value="5">Others</option>
                      </select>
					 
                    </div>
					</div>	
					
					
                    
                    
					</div>
				  <!-- /.box-body -->
                  
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<button type="button" class="btn btn-primary" name="delete" onClick="location.href='appdelete.php'"  value="Delete">Delete</button>
                  </div>
                </form>
        </div>
      </div><!-- /.content-wrapper -->
	  
	   
       

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
	<!-- bootstrap time picker -->
    <script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
	<script>
      $(function () {
        //Timepicker
        $(".timepicker").timepicker({
          showInputs: true
        });
      });
    </script>
  </body>
</html>
