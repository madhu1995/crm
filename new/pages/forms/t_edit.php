<?php
session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db("sales",$con);
error_reporting(0);
if(isset($_GET[edi]))
{
$sql=mysql_query("select * from testdrive where Enq_id='".$_GET['edi']."' ");
#echo "select * from lead_details where Enq_id='".$_GET['edi']."' ";
$row=mysql_fetch_assoc($sql);
}
if(isset($_POST['submit']))
{
$drn=$_POST['drn'];
$test_date=$_POST['test_date'];
$model1=$_POST['model1'];
$dur=$_POST['dur'];
$tcu=$_POST['tcu'];
$tcun=$_POST['tcun'];
$place=$_POST['place'];
$result=mysql_query(" UPDATE `testdrive` SET `td_no`='$drn',`date`='$test_date',`model`='$model1',`dur`='$dur',`Cus_id`='$tcu',`Cus_name`='$tcun',`place_td`='$place' where Enq_id='".$_GET['edi']."'");
echo "UPDATE `testdrive` SET `td_no`='$drn',`date`='$test_date',`model`='$model1',`dur`='$dur',`Enq_id`='$tenq',`Cus_id`='$tcu',`Cus_name`='$tcun',`place_td`='$place' where Enq_id='".$_GET['edi']."'";
if($result)
{
 echo "updated!!!!!";
 header("location:test_fetch.php");
 
}
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AadhiMaruti | Opportunity Details</title>
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
                <li><a href="leaddetails.php"><i class="fa fa-circle-o"></i> Lead Details</a></li>
                <li><a href="pre.php"><i class="fa fa-circle-o"></i> Pre-sales Feedback</a></li>
              </ul>
            </li>
            <li class=" active treeview">
              <a href="#">
                <i class="fa fa-cog"></i><span>Sales</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu" class="treeview-active">
                <li  class="active"><a href="oppur.php"><i class="fa fa-circle-o"></i> Opportunity Details</a></li>
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
            Opportunity edit
            <small>(sales)</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="../../index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li><a href="oppur.php">Opportunity Details</a></li>
			<li class="active">Testdrive Edit</li>
          </ol>
        </section>
    <!-- main content -->
		<section class="content">
		<form role="form" method="post">
		  <div class="box box-info"><input type="hidden" name="edi" value="<?php echo $_GET['edi']; ?>">
                <!-- form start -->
                  <div class="box-body">
				     <div class="form-group">
					  
                      <label for="enq">Enquiry_Id</label><input type="text" disabled="" value="<?php echo $row['Enq_id'];?>" style="width:70%" class="form-control input-sm" name="tenq">
                    </div>
					<div class="form-group">
                      <label for="enq">Customer_Id</label><input type="text" value="<?php echo $row['Cus_id'];?>" style="width:70%" class="form-control input-sm" name="tcu">
                    </div>
                    <div class="form-group">
                      <label for="mail">Customer_Name</label><input type="text" value="<?php echo $row['Cus_name'];?>" style="width:70%" class="form-control input-sm" name="tcun">
                    </div>
					<div class="form-group">
                      <label>Place of TD</label>
     		           <select class="form-control" style="width:70%" name="place">
					    <option value='Dealership'<?php if('Dealership'==$row['place_td']){ ?>selected="selected"<?php } ?>>Dealership</option>
                        <option value='Customer place'<?php if('Customer place'==$row['place_td']){ ?>selected="selected"<?php } ?>>Customer place</option>
                      </select>
                   </div>
				   	  <div class="form-group">
                     <label for="mail">Test Drive No.</label><input type="text" value="<?php echo $row['td_no'];?>" style="width:70%" class="form-control input-sm" name="drn">
                  </div>
            <div class="form-group">
              <label>Date</label>
			    <div class="input-group date" data-provide="datepicker" style="width:70%">
                   <input type="text" class="form-control" name="test_date" value="<?php echo $row['date'];?>" >
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                </div>
            </div>
	        <div class="form-group">
              <label>Model</label>
     		    <select class="form-control" style="width:70%" name="model1">
					    <option>Select a car model</option>
                        <option value='swift'<?php if('swift'==$row['model']){ ?>selected="selected"<?php } ?>>swift</option>
                        <option value='ritz'<?php if('ritz'==$row['model']){ ?>selected="selected"<?php } ?>>ritz</option>
                        <option value='celerio'<?php if('celerio'==$row['model']){ ?>selected="selected"<?php } ?>>celerio</option>
                        <option value='s-cross'<?php if('s-cross'==$row['model']){ ?>selected="selected"<?php } ?>>s-cross</option>
                        <option value='sx4'<?php if('sx4'==$row['model']){ ?>selected="selected"<?php } ?>>sx4</option>
     			</select>
             </div>
		    <div class="form-group">
             <label for="mail">Duration(kms)</label>
			 <input type="text" style="width:70%" value="<?php echo $row['dur'];?>" class="form-control input-sm" name="dur">
            </div>
			</div>
			<div class="box-footer">
                    <button type="submit" class="btn btn-info pull-right" name="submit" >Update</button>
                  </div>
                <!-- /.box-footer -->
					</div><!-- /.box-body --> 
				  </form>
				 </section>				 
				  </div>
    <!-- jQuery 2.1.4 -->
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
	<script src="../../js/upgraded.js"></script>
	 <!-- DataTables -->
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>
   
  
  </body>
  
</html>
