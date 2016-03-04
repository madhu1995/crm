<?php
session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db("sales",$con);
error_reporting(0);
if(isset($_GET[edi]))
{
$sql=mysql_query("select * from vehicle where Enq_id='".$_GET['edi']."'");
$row=mysql_fetch_assoc($sql);
}
if(isset($_POST['submit']))
{
$vcun=$_POST['vcun'];
$app=$_POST['app'];
$pri=$_POST['pri'];
$fuel1=$_POST['fuel1'];
$col=$_POST['col'];
$quants=$_POST['quants'];
$sta=$_POST['sta'];
$vcu=$_POST['vcu'];
$result=mysql_query(" UPDATE `vehicle` SET `fuel`='$fuel1',`color`='$col',`quant`='$quants',`status`='$sta',`Cust_id`='$vcu',`Cust_name`='$vcun',`app_date`='$app',`pri_model`='$pri' WHERE Enq_id='".$_GET['edi']."'");
$event=mysql_query("UPDATE `events` SET `start`='$app' WHERE `title`='".$_GET['edi']."'");
if($result)
{
 echo "updated!!!!!";
 header("location:mod_fetch.php");
 
}
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AadhiMaruti | Vehicle Details</title>
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
            <li class=" active treeview">
              <a href="#">
                <i class="fa fa-cog"></i><span>Sales</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu" class="treeview-active">
                <li  class="active"><a href="oppur.php"><i class="fa fa-circle-o"></i> Opportunity Details</a></li>
			    <li><a href="../examples/invoiceindex.php"><i class="fa fa-circle-o"></i> Invoice</a></li> 
              <!--  <li><a href="index.html"><i class="fa fa-circle-o"></i> Purchase Details</a></li> -->
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
				<li><a href=""><i class="fa fa-circle-o"></i> Service Detail</a></li>
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
              <a href="index.html">
                <i class="fa fa-phone"></i> <span>Alerts</span>
               </a>
            </li>  	
           </ul>  			
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Vehicle edit
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
                      <label for="enq">Enquiry_Id</label><input name="venq" disabled="" value="<?php echo $row['Enq_id'];?>" type="text" style="width:70%" class="form-control input-sm">
                    </div>
					<div class="form-group">
                      <label for="enq">Customer_Id</label><input name="vcu" required value="<?php echo $row['Cust_id'];?>" type="text" style="width:70%" class="form-control input-sm">
                    </div>
                    <div class="form-group">
                      <label for="mail">Customer_Name</label><input name="vcun"required value="<?php echo $row['Cust_name'];?>" type="text" style="width:70%" class="form-control input-sm">
                    </div>
					
				    <div class="form-group">
                     <label>Model</label>
     		         <input type="text" id="model3" style="width:70%" disabled="" required value="<?php echo $row['model'];?>" class="form-control input-sm">
                    </div>
			 <div class="form-group">
              <label>Fuel type</label>
     		    <select class="form-control" style="width:70%" name="fuel1" required>
					    <option>Select fuel type</option>
                        <option value='Petrol'<?php if('Petrol'==$row['fuel']){ ?>selected="selected"<?php } ?>>Petrol</option>
                        <option value='Diesel'<?php if('Diesel'==$row['fuel']){ ?>selected="selected"<?php } ?>>Diesel</option>
     			</select>
             </div>
			 <div class="form-group">
              <label>Color</label>
     		    <select class="form-control" style="width:70%" name="col" required>
					    <option value='Silver'<?php if('Silver'==$row['color']){ ?>selected="selected"<?php } ?>>Silver</option>
                        <option value='Red'<?php if('Red'==$row['color']){ ?>selected="selected"<?php } ?>>Red</option>
                        <option value='Black'<?php if('Black'==$row['color']){ ?>selected="selected"<?php } ?>>Black</option>
                        <option value='Blue'<?php if('Blue'==$row['color']){ ?>selected="selected"<?php } ?>>Blue</option>
                        <option value='Yellow'<?php if('Yellow'==$row['color']){ ?>selected="selected"<?php } ?>>Yellow</option>
     			</select>
             </div>
			<div class="form-group">
              <label>Quantity</label>
     		    <select class="form-control" style="width:70%" name="quants" required>
					    <option value='1'<?php if('1'==$row['quant']){ ?>selected="selected"<?php } ?>>1</option>
                        <option value='2'<?php if('2'==$row['quant']){ ?>selected="selected"<?php } ?>>2</option>
                        <option value='3'<?php if('3'==$row['quant']){ ?>selected="selected"<?php } ?>>3</option>
                        <option value='4'<?php if('4'==$row['quant']){ ?>selected="selected"<?php } ?>>4</option>
     			</select>
             </div>
			 <div class="form-group">
              <label>Status</label>
     		    <select class="form-control" style="width:70%" name="sta" required>
					    <option value='Cold'<?php if('Cold'==$row['status']){ ?>selected="selected"<?php } ?>>Cold</option>
                        <option value='Hot'<?php if('Hot'==$row['status']){ ?>selected="selected"<?php } ?>>Hot</option>
     			</select>
             </div>
					<div class="form-group">
                      <label>Approx.date for booking</label>
			            <div class="input-group date" style="width:70%">
                          <input type="text" class="form-control" id="date" value="<?php echo $row['app_date'];?>" name="app" required>
                        <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                        </div>
                     </div>
                   </div>
					<div class="form-group">
                      <div class="col-sm-2 control-label">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="pri" value="yes"<?php if($row['pri_model']=='yes') { ?> checked="checked"<?php } ?> value="yes">Primary-Model
                          </label>
                        </div>
                      </div>
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
	<script>
	 $(document).ready(function () {
                
                $('#date').datepicker({
                    format: "yyyy-mm-dd",
					startDate: '-3d'
                });  
            
            });
	</script>
  </body>
</html>
