<?php
require('../../sales_db.php');
if(isset($_POST['submit']))
{
$query=mysql_query("insert into post_feedback(custname,Cus_id,r1,r2,r3,r4,r5,r6,r7,r8,r9,r10) VALUES ('".$_POST['custname']."','".$_POST['delivery_id']."','".$_POST['r1']."','".$_POST['r2']."','".$_POST['r3']."','".$_POST['r4']."','".$_POST['r5']."','".$_POST['r6']."','".$_POST['r7']."','".$_POST['r8']."','".$_POST['r9']."','".$_POST['r10']."')");
#echo "insert into presales_fb(r3,r4,r5,r6,r7,r7,r9,r1) VALUES ('".$_POST['r3']."','".$_POST['r4']."','".$_POST['r5']."','".$_POST['r6']."','".$_POST['r7']."','".$_POST['r7']."','".$_POST['r9']."','".$_POST['r1']."')";
}
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AadhiMaruti | Customer Feedback</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="../../plugins/iCheck/all.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="../../plugins/colorpicker/bootstrap-colorpicker.min.css">
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="../../plugins/timepicker/bootstrap-timepicker.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="../../plugins/select2/select2.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
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
					  <a href="../../pages/examples/logout.php">Sign out</a>
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
               <!-- <li><a href="index.html"><i class="fa fa-circle-o"></i> Purchase Details</a></li>-->
                <li><a href="../../deliverydetailindex.php"><i class="fa fa-circle-o"></i> Delivery</a></li>
              </ul>
            </li>
            <li>
              <a href="index.html">
                <i class="fa fa-steam-square"></i> 
				<span>Service</span><i class="fa fa-angle-left pull-right"></i> 
				</a>
			  <ul class="treeview-menu">
                <li><a href=""><i class="fa fa-circle-o"></i> AMC</a></li>
                <li><a href=""><i class="fa fa-circle-o"></i> Service Appointments </a></li>
                <li><a href=""><i class="fa fa-circle-o"></i> Follow up</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="report.php">
                <i class="fa fa-pie-chart"></i>
                <span>Report</span>
                </a>
            </li>
            <li class="treeview">
              <a href="">
                <i class="fa fa-inr"></i>
                <span>Finance</span>
              </a>
              </li>
            <li class="active treeview">
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
            After-Sales
            <small>Feedback</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="../../index.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li class="active">After-Sales Feedback</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <form role="form" method="post">
          <!-- /.box -->
				 <div class="box-body">
				  <div class="col-xs-3">
                    <div class="form-group">
                      <label for="mail">Customer_Name</label>
					  <input type="text" style="width:70%" class="form-control input-sm"  name="custname" placeholder="Enter name" required>
                    </div>
					</div>
					<div class="col-xs-3">
						<div class="form-group">
                      <label for="enq">Customer id</label><input type="text" style="width:70%" class="form-control input-sm" id="delivery_id" name="delivery_id" required>
                    </div>
					</div>
					</div>
          <div class="row">
               <!-- iCheck -->
              <div class="box box-success">

                <div class="box-body">
				<table style="width:70%" height="70%">
				       <div class="form-group">
					   <th style="padding: 25px;"></th>
                      <th width="10%" style="padding: 25px;">Excellent</th>
					  <th width="10%" style="padding: 25px;">Good</th>
					  <th style="padding: 25px;">Average</th>
					   <th style="padding: 25px;">Poor</th>
                       <tr>
                        <td>Experience on delivery of your vehicle..</td>
                        <td>
						    <label>					   
                             <input type="radio" name="r1" class="flat-red" value="Excellent">
                             </label>
					    </td>		
                        <td>
						 <label>
                         <input type="radio" name="r1" class="flat-red" value="Good">
                         </label>
						</td>
						<td>
						 <label>
                         <input type="radio" name="r1" class="flat-red" value="Average">
                         </label>
						</td>
						<td>
						 <label>
                         <input type="radio" name="r1" class="flat-red" value="Poor">
                         </label>
						</td>
                      </tr>
					 
					  <tr>
                        <td>Delivery of vehicle with all the promised features..</td>
                        <td>
						    <label>					   
                             <input type="radio" name="r2" class="flat-red" value="Excellent">
                              </label>
					    </td>		
                        <td>
						 <label>
                         <input type="radio" name="r2" class="flat-red" value="Good">
                         </label>
						</td>
						<td>
						 <label>
                         <input type="radio" name="r2" class="flat-red" value="Average">
                         </label>
						</td>
						<td>
						 <label>
                         <input type="radio" name="r2" class="flat-red" value="Poor">
                         </label>
						</td>
                      </tr>
					  <tr>
                        <td>Status of your vehicle without any problems on receiving..</td>
                        <td>
						    <label>					   
                             <input type="radio" name="r3" class="flat-red" value="Excellent">
                              </label>
					    </td>		
                        <td>
						 <label>
                         <input type="radio" name="r3" class="flat-red" value="Good">
                         </label>
						</td>
						<td>
						 <label>
                         <input type="radio" name="r3" class="flat-red" value="Average">
                         </label>
						</td>
						<td>
						 <label>
                         <input type="radio" name="r3" class="flat-red" value="Poor">
                         </label>
						</td>
                      </tr>
					  <tr>
                        <td>Was the vehicle's maintenance schedule explained to you?</td>
                        <td>
						    <label>					   
                             <input type="radio" name="r4" class="flat-red" value="Excellent">
                              </label>
					    </td>		
                        <td>
						 <label>
                         <input type="radio" name="r4" class="flat-red" value="Good">
                         </label>
						</td>
						<td>
						 <label>
                         <input type="radio" name="r4" class="flat-red" value="Average">
                         </label>
						</td>
						<td>
						 <label>
                         <input type="radio" name="r4" class="flat-red" value="Poor">
                         </label>
						</td>
                      </tr>
					  <tr>
                        <td>Has the dealer contacted you regarding your satisfaction?</td>
                        <td>
						    <label>					   
                             <input type="radio" name="r5" class="flat-red" value="Excellent">
                              </label>
					    </td>		
                        <td>
						 <label>
                         <input type="radio" name="r5" class="flat-red" value="Good">
                         </label>
						</td>
						<td>
						 <label>
                         <input type="radio" name="r5" class="flat-red" value="Average">
                         </label>
						</td>
						<td>
						 <label>
                         <input type="radio" name="r5" class="flat-red" value="Poor">
                         </label>
						</td>
                      </tr>
					  <tr>
                        <td>Your salesperson</td>
                        <td>
						    <label>					   
                             <input type="radio" name="r6" class="flat-red" value="Excellent"> 
                              </label>
					    </td>		
                        <td>
						 <label>
                         <input type="radio" name="r6" class="flat-red" value="Good">
                         </label>
						</td>
						<td>
						 <label>
                         <input type="radio" name="r6" class="flat-red" value="Average">
                         </label>
						</td>
						<td>
						 <label>
                         <input type="radio" name="r6" class="flat-red" value="Poor">
                         </label>
						</td>
                      </tr>
					  <tr>
                        <td>Your overall purchase experience</td>
                        <td>
						    <label>					   
                             <input type="radio" name="r7" class="flat-red" value="Excellent">
                              </label>
					    </td>		
                        <td>
						 <label>
                         <input type="radio" name="r7" class="flat-red" value="Good">
                         </label>
						</td>
						<td>
						 <label>
                         <input type="radio" name="r7" class="flat-red" value="Average">
                         </label>
						</td>
						<td>
						 <label>
                         <input type="radio" name="r7" class="flat-red" value="Poor">
                         </label>
						</td>
                      </tr>
					  <tr>
                        <td>The way your new vehicle was delivered to you</td>
                        <td>
						    <label>					   
                             <input type="radio" name="r8" class="flat-red" value="Excellent">
                              </label>
					    </td>		
                        <td>
						 <label>
                         <input type="radio" name="r8" class="flat-red" value="Good">
                         </label>
						</td>
						<td>
						 <label>
                         <input type="radio" name="r8" class="flat-red" value="Average">
                         </label>
						</td>
						<td>
						 <label>
                         <input type="radio" name="r8" class="flat-red" value="Poor">
                         </label>
						</td>
                      </tr>
					  <tr>
                        <td>How satisfied are you with the actions taken by the dealership to resolve your problem?</td>
                        <td>
						    <label>					   
                             <input type="radio" name="r9" class="flat-red" value="Excellent">
                              </label>
					    </td>		
                        <td>
						 <label>
                         <input type="radio" name="r9" class="flat-red" value="Good">
                         </label>
						</td>
						<td>
						 <label>
                         <input type="radio" name="r9" class="flat-red" value="Average">
                         </label>
						</td>
						<td>
						 <label>
                         <input type="radio" name="r9" class="flat-red" value="Poor">
                         </label>
						</td>
                      </tr>
					   <tr>
                        <td>How likely would you be to purchase another vehicle from this dealer?</td>
                        <td>
						    <label>					   
                             <input type="radio" name="r10" class="flat-red" value="Excellent">
                              </label>
					    </td>		
                        <td>
						 <label>
                         <input type="radio" name="r10" class="flat-red" value="Good">
                         </label>
						</td>
						<td>
						 <label>
                         <input type="radio" name="r10" class="flat-red" value="Average">
                         </label>
						</td>
						<td>
						 <label>
                         <input type="radio" name="r10" class="flat-red" value="Poor">
                         </label>
						</td>
                      </tr>
					   
					  </div>
 
                    </table>
                  </div><!-- /.box-body -->
				<div class="box-footer">
				   <button type="submit" class="btn btn-primary" name="submit">Submit</button>
				</div>
              </div><!-- /.box -->
            </div><!-- /.col (right) -->
          </div><!-- /.row -->
          </form>
        </section>
      </div><!-- /.content-wrapper -->
      

      
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <!-- Select2 -->
    <script src="../../plugins/select2/select2.full.min.js"></script>
    <!-- InputMask -->
    <script src="../../plugins/input-mask/jquery.inputmask.js"></script>
    <script src="../../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="../../plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <!-- date-range-picker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="../../plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="../../plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
    <!-- bootstrap time picker -->
    <script src="../../plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- iCheck 1.0.1 -->
    <script src="../../plugins/iCheck/icheck.min.js"></script>
    <!-- FastClick -->
    <script src="../../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- Page script -->
    <script>
      $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();

        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        //Date range as a button
        $('#daterange-btn').daterangepicker(
            {
              ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
              },
              startDate: moment().subtract(29, 'days'),
              endDate: moment()
            },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        );

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });

        //Colorpicker
        $(".my-colorpicker1").colorpicker();
        //color picker with addon
        $(".my-colorpicker2").colorpicker();

        //Timepicker
        $(".timepicker").timepicker({
          showInputs: false
        });
      });
    </script>
  </body>
</html>
