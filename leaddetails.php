<?php
session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db("presales",$con);
error_reporting(0);
if(isset($_POST['submit']))
{
$query=mysql_query("insert into lead_details(custname,doe,phone,addr,t_d ,email,optionsRadios,city,salesperson,model,src,mop,optionsRadios1,optionsRadios2,follow_date,toc,next_foll,enquire) VALUES ('".$_POST['custname']."','".$_POST['doe']."','".$_POST['phone']."','".$_POST['addr']."','".$_POST['t_d']."','".$_POST['email']."','".$_POST['optionsRadios']."','".$_POST['city']."','".$_POST['salesperson']."','".$_POST['model']."','".$_POST['src']."','".$_POST['mop']."','".$_POST['optionsRadios1']."','".$_POST['optionsRadios2']."','".$_POST['follow_date']."','".$_POST['toc']."','".$_POST['next_foll']."','".$_POST['enquire']."')");
#echo "insert into lead_details(custname,doe,phone,addr,t_d ,email,optionsRadios,city,salesperson,model,src,mop,optionsRadios1,optionsRadios2,follow_date,toc,next_foll,enquire) VALUES ('".$_POST['custname']."','".$_POST['doe']."','".$_POST['phone']."','".$_POST['addr']."','".$_POST['t_d']."','".$_POST['email']."','".$_POST['optionsRadios']."','".$_POST['city']."','".$_POST['salesperson']."','".$_POST['model']."','".$_POST['src']."','".$_POST['mop']."','".$_POST['optionsRadios1']."','".$_POST['optionsRadios2']."','".$_POST['follow_date']."','".$_POST['toc']."','".$_POST['next_foll']."','".$_POST['enquire']."')";
#echo "value inserted";
}
?>
<!DOCTYPE html>
<html>
  <head>
    <<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <title>AdhiMaruti | Leaddetails</title>
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
				<!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo $_SESSION['username'] ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    <p>
					  <?php echo $_SESSION['username'] ?>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
					  <a href="pages/examples/logout.php">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
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
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-cogs"></i> <span>Pre-Sales</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu" class="treeview-active">
                <li class="active"><a href="leaddetails.php"><i class="fa fa-circle-o"></i> Lead Details</a></li>
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
				<li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
                <li><a href="index.html"><i class="fa fa-circle-o"></i> Purchase Details</a></li>
                <li><a href="index.html"><i class="fa fa-circle-o"></i> Delivery</a></li>
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
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Enquiry details
            <small>Lead Customers</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li class="active">Lead Details</li>
          </ol>
        </section>
		
         <br></br>
        <!-- form -->
		<div class="box box-primary">
		         
                 <div class="box-header with-border">
                  <h3 class="box-title">Enquiry Followup</h3>
                </div><!-- /.box-header -->
		<form role="form" method="post">
                  <div class="box-body">
				  <div class="col-xs-3">
                    <div class="form-group">
                      <label for="mail">Customer_Name</label><input type="text" style="width:70%" class="form-control input-sm" name="custname" id="mail1" placeholder="Enter name">
                    </div>
					<div class="form-group">
                    <label>Date of Enquiry</label>
					<div class="input-group date" data-provide="datepicker" style="width:70%">
                     <input type="text" class="form-control" name="doe">
                      <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                        </div>
                      </div>
                    <!-- /.input group -->
                  </div>
				  
					 <div class="form-group">
                      <label for="phone">Phone</label>
                      <input type="text" style="width:70%" class="form-control input-sm" name="phone" id="phone1" placeholder="Enter mobile number">
                    </div>
					<div class="form-group">
                      <label>Address</label>
                      <textarea class="form-control input-sm" style="width:70%" name="addr" rows="3" placeholder="Enter ..."></textarea>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="t_d"> Test Drive
                      </label>
                    </div>
                  </div>
				   <div class="col-xs-3">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="text" style="width:70%" class="form-control input-sm" name="email" id="exampleInputEmail1" placeholder="Enter mail">
                    </div>
					<div class="form-group">
				   <label>Gender</label><div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
                          Male
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                          Female
                        </label>
                      </div>
                     </div>
					 <div class="form-group">
                      <label>City</label>
                      <select class="form-control" style="width:70%" name="city">
					    <option>Select a city</option>
                        <option>Chennai</option>
                        <option>Coimbatore</option>
                        <option>Trichy</option>
                        <option>Tirupur</option>
                        <option>Others</option>
                      </select>
					  
					  <div class="form-group">
                      <label>SalesPerson</label>
					  <select class="form-control" style="width:70%" name="salesperson">
					    <option>Select a sales person</option>
                        <option>aaa</option>
                        <option>bbb</option>
                        <option>ccc</option>
                        <option>ddd</option>
                        <option>eee</option>
                      </select>
                    </div>
					<div class="form-group">
                      <label>Model</label>
					  <select class="form-control" style="width:70%" name="model">
					    <option>Select a car model</option>
                        <option>swift</option>
                        <option>ritz</option>
                        <option>celerio</option>
                        <option>s-cross</option>
                        <option>sx4</option>
                      </select>
                    </div>
                    </div>
					</div>	
                    <div class="col-xs-3">
                     <div class="form-group">
                      <label>Source</label>
					  <select class="form-control" style="width:70%" name="src">
					    <option>Walk in</option>
                        <option>Reference</option>
                        <option>Incoming telephone</option>
                        <option>Field visit/cold call</option>
                        <option>Call center</option>
                        <option>Event/Advertisement</option>
                      </select>
                    </div>
					<div class="form-group">
                      <label>Mode of payment</label>
					  <select class="form-control" style="width:70%" name="mop">
					    <option>Cash</option>
                        <option>own finance</option>
                        <option>Maruti finance</option>
                      </select>
                    </div>
					<div class="form-group">
				   <label>Status</label><div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios1" id="hot" value="option1">
                          hot
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios1" id="cold" value="option2">
                          cold
                        </label>
                      </div>
                     </div>
					 <div class="form-group">
				   <label>Remarks</label><div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios2" id="b_r" value="option1">
                          Booked
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios2" id="c_r" value="option2">
                          Closed
                        </label>
                      </div>
                     </div>
                    </div>	
                     <div class="col-xs-3">
					 <div class="form-group">
                    <label>Followup Date</label>
					<div class="input-group date" data-provide="datepicker" style="width:70%">
                     <input type="text" class="form-control" name="follow_date">
                      <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                        </div>
                      </div>
                    <!-- /.input group -->
                  </div>
				  <div class="form-group">
                      <label>Time of call</label>
					  <select class="form-control" style="width:70%" name="toc">
					    <option>Morning</option>
                        <option>Afternoon</option>
                        <option>Evening</option>
                      </select>
                    </div>                
                    <div class="form-group">
                      <label>Next Followup</label>
					  <select class="form-control" style="width:70%" name="next_foll">
					    <option></option>
                        <option></option>
                        <option></option>
                      </select>
                    </div>
				    <div class="form-group">
                      <label for="enq">Enquiry_Id</label>
					  <input type="text" style="width:70%" class="form-control input-sm" id="enq_id" name="enquire">
                    </div>
					</div>					 
				  <!-- /.box-body -->
                  </div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
					<button type="button" class="btn btn-info btn-md" id="myBtn3">Delete</button>
                  </div>
                </form>
              </div>
        
		</div></div><!-- /.content-wrapper -->
      <div class="container">
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4 class="modal-title">Static Backdrop</h4>
        </div>
        <div class="modal-body">
          <p>You cannot click outside of this modal to close it.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
$(document).ready(function(){
    $("#myBtn3").click(function(){
        $("#myModal3").modal({backdrop: "static"});
    });
});
</script>

      

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
