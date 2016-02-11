<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("service",$con);
#error_reporting(0);
if(isset($_GET['edit']))
{
$sql=mysql_query("select * from ser_detail where Customer_id='".$_GET['edit']."' ");
#echo "select * from ser_detail where ser_no='".$_GET['edi']."' ";
$row=mysql_fetch_assoc($sql);
}
if(isset($_POST['submit']))
{
$Customer_id=$_POST['Customer_id'];
$Customer_name=$_POST['Customer_name'];
$Service_no=$_POST['Service_no'];
$Car_no=$_POST['Car_no'];
$Model=$_POST['Model'];
$Engine_no=$_POST['Engine_no'];
$Serviced_by=$_POST['Serviced_by'];
$Repairs=$_POST['Repairs'];
$Parts_replaced=$_POST['Parts_replaced'];
$Date_of_service=$_POST['Date_of_service'];
$Delivery_date=$_POST['Delivery_date'];
$Next_service=$_POST['Next_service'];

$result=mysql_query("update ser_detail SET Customer_id='$Customer_id',Customer_name='$Customer_name',Service_no='$Service_no',Car_no='$Car_no',Model='$Model',Engine_no='$Engine_no',Serviced_by='$Serviced_by',Repairs='$Repairs',Parts_replaced='$Parts_replaced',Date_of_service='$Date_of_service',Delivery_date='$Delivery_date',Next_service='$Next_service' where Customer_id='".$_GET['edit']."'");
echo "update ser_detail SET Customer_id='$Customer_id',Customer_name='$Customer_name',Service_no='$Service_no',Car_no='$Car_no',Model='$Model',Engine_no_no='$Engine_no',Serviced_by='$Serviced_by',Repairs='$Repairs',Parts_replaced='$Parts_replaced',Date_of_service='$Date_of_service',Delivery_date='$Delivery_date',Next_service='$Next_service' where Customer_id='".$_GET['edit']."'";

if($result)
{
 echo "updated!!!!!";

 header("location:serdelete.php");
 
}

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
        <a style="background-color: rgb(204, 238, 255);" href="index.php" class="logo">
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
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-cogs"></i> <span>Pre-Sales</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu" class="treeview-active">
                <li><a href="leaddetailsindex.php"><i class="fa fa-circle-o"></i> Lead Details</a></li>
                <li><a href="pages/forms/pre.php"><i class="fa fa-circle-o"></i> Pre-sales Feedback</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-cog"></i><span>Sales</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/forms/oppur.php"><i class="fa fa-circle-o"></i> Opportunity Details</a></li>
				<li><a href="pages/examples/invoice.php"><i class="fa fa-circle-o"></i> Invoice</a></li>
                <li><a href="index.php"><i class="fa fa-circle-o"></i> Purchase Details</a></li>
                <li><a href="index.php"><i class="fa fa-circle-o"></i> Delivery</a></li>
              </ul>
            </li>
            <li>
              <a href="index.php">
                <i class="fa fa-steam-square"></i> 
				<span>Service</span><i class="fa fa-angle-left pull-right"></i> 
				</a>
			  <ul class="treeview-menu">
                <li><a href="amc.php"><i class="fa fa-circle-o"></i> AMC</a></li>
                <li><a href="appointments.php"><i class="fa fa-circle-o"></i> Service Appointments </a></li>
                <li class="active"><a href="servicedetails.php"><i class="fa fa-circle-o"></i> Service Details</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="index.php">
                <i class="fa fa-pie-chart"></i>
                <span>Report</span>
                </a>
            </li>
            <li class="treeview">
              <a href="#index.php">
                <i class="fa fa-inr"></i>
                <span>Finance</span>
              </a>
              </li>
            <li class="treeview">
              <a href="index.php">
                <i class="fa fa-edit"></i> <span>Feedback</span>
              </a>
              </li>
            <li>
              <a href="index.php">
                <i class="fa fa-calendar"></i> <span>Calendar</span>
               </a>
            </li>                
            <li>
              <a href="index.php">
                <i class="fa fa-phone"></i> <span>Alerts</span>
               </a>
            </li> 
<li class="treeview">
              <a href="pages/examples/logout.php">
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
           SERVICE DETAILS
            <!--<small>Service Details</small> -->
          </h1>
          <ol class="breadcrumb">
            <li><a href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li class="active">Service</li>
          </ol>
        </section>
		
         <br></br>
        <!-- form -->
		<div class="box box-primary">
		         
                 <div class="box-header with-border">
                  
                
		         <form role="form" method="post">
		          <div class="col-xs-3">
		          <div class="form-group">
                      <label>Customer_Id</label><input type="text" style="width:70%" class="form-control input-sm" name="Customer_id" value="<?php echo $row['Customer_id']; ?>">
                    </div>
					
					<div class="form-group">
					  <label for="phone">Customer_Name</label>
                      <input type="text" style="width:70%" class="form-control input-sm" name="Customer_name" pattern="[a-zA-Z]+" value="<?php echo $row['Customer_name']; ?>">
                    </div>
					
					<div class="form-group">
					  <label for="phone">Service No</label>
                      <input type="text" style="width:70%" class="form-control input-sm" name="Service_no" value="<?php echo $row['Service_no']; ?>">
                    </div>
					</div>

					<div class="col-xs-3">
					
					<div class="form-group">
					  <label for="phone">Car No</label>
                      <input type="text" style="width:70%" class="form-control input-sm" name="Car_no" value="<?php echo $row['Car_no']; ?>">
                    </div>
					
					<div class="form-group">
                      <label>Model</label>
					  <select class="form-control" style="width:70%" name="Model" required>
					    <option value="" disabled selected>Select a car model</option>
						<option value='swift'<?php if('swift'==$row['Model']){ ?>selected="selected"<?php } ?>>swift</option>
                        <option value='ritz'<?php if('ritz'==$row['Model']){ ?>selected="selected"<?php } ?>>ritz</option>
                        <option value='celerio'<?php if('celerio'==$row['Model']){ ?>selected="selected"<?php } ?>>celerio</option>
                        <option value='s-cross'<?php if('s-cross'==$row['Model']){ ?>selected="selected"<?php } ?>>s-cross</option>
                        <option value='sx4'<?php if('sx4'==$row['Model']){ ?>selected="selected"<?php } ?>>sx4</option>
                      </select>
                    </div>
					
					<div class="form-group">
					 <label for="phone">Engine No</label>
                      <input type="text" style="width:70%" class="form-control input-sm" name="Engine_no" value="<?php echo $row['Engine_no']; ?>">
                    </div>
					
					</div>
					
					<div class="col-xs-3">
					<div class="form-group">
					  <label for="phone">Seviced_By</label>
                      <input type="text" style="width:70%" class="form-control input-sm" name="Serviced_by" pattern="[a-zA-Z]+" value="<?php echo $row['Serviced_by']; ?>">
                    </div>
					
					<div class="form-group">
					  <label for="phone">Repairs</label>
                      <input type="text" style="width:70%" class="form-control input-sm" name="Repairs" value="<?php echo $row['Repairs']; ?>">
                    </div>
					  
					  <div class="form-group">
                      <label>Parts Replacement</label>
					  <select class="form-control" style="width:70%" name="Parts_replaced" required>
					    <option value="" disabled selected>Select</option>
						<option value='Tire'<?php if('Tire'==$row['Parts_replaced']){ ?>selected="selected"<?php } ?>>Tire</option>
						<option value='Seat'<?php if('Seat'==$row['Parts_replaced']){ ?>selected="selected"<?php } ?>>Seat</option>
						<option value='radiator'<?php if('radiator'==$row['Parts_replaced']){ ?>selected="selected"<?php } ?>>radiator</option>
						<option value='hand_break'<?php if('hand_break'==$row['Parts_replaced']){ ?>selected="selected"<?php } ?>>hand_break</option>
						<option value='lights'<?php if('lights'==$row['Parts_replaced']){ ?>selected="selected"<?php } ?>>lights</option>
                        
                      </select>
					  </div>
					  
					  
								
					</div>
					
					<div class="col-xs-3">
					  <div class="form-group">
                       <label>Date of Service</label>
					    <div class="input-group date" data-provide="datepicker" style="width:70%">
                        <input type="text" class="form-control"  name="Date_of_service" value="<?php echo $row['Date_of_service']; ?>">
                      <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                        </div>
                      </div>
					  </div>
					  
				
					  <div class="form-group">
                       <label>Delivery Date</label>
					    <div class="input-group date" data-provide="datepicker" style="width:70%" >
                        <input type="text" class="form-control" name="Delivery_date" value="<?php echo $row['Delivery_date']; ?>">
                      <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                        </div>
                      </div>
					  </div>
				
				
					  <div class="form-group">
                       <label>Next Service Date</label>
					    <div class="input-group date" data-provide="datepicker" style="width:70%">
                        <input type="text" class="form-control"  name="Next_service" value="<?php echo $row['Next_service']; ?>">
                      <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                        </div>
                      </div>
					  </div>
					  </div>

				
					  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" name="submit" onclick="location.href='serdelete.php">Update</button>
					
                  </div> 
		     </form>
			 </div><!-- /.box-header -->
        
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