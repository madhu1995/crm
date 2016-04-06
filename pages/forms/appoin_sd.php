<?php
require('../../sales_db.php');
if(isset($_GET[gid]))
{
 $sql=mysql_query("select * from amc where car_regno='".$_GET['gid']."' ");
 $row=mysql_fetch_assoc($sql);
}

if(isset($_POST['submits']))

{
  	$query=mysql_query("INSERT INTO `ser_appmnt`(`cust_id`, `cust_name`, `service_no`, `phone`, `email`, `amc_type`, `servicedate`, `car_regno`, `model`, `fuel_type`, `engine_no`, `modelyear`, `chassis_no`, `milage`) VALUES ('".$_POST['cust_id']."','".$_POST['cust_name']."' ,'".$_POST['service_no']."','".$_POST['phone']."','".$_POST['email']."' ,'".$_POST['amc_type']."','".$_POST['servicedate']."','".$_POST['car_regno']."','".$_POST['model']."','".$_POST['fuel_type']."','".$_POST['engine_no']."','".$_POST['modelyear']."','".$_POST['chassis_no']."','".$_POST['milage']."' )");
}

if($query)
{
 header("location:appdelete.php");
}
?>

<!DOCTYPE html>
<html>
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
					  <a href="../../pages/examples/logout.php">
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
              <ul class="treeview-menu" >
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
                <li ><a href="amc_delete.php"><i class="fa fa-circle-o"></i> AMC</a></li>
                <li class="active"><a href="appdelete.php"><i class="fa fa-circle-o"></i> Service Appointments </a></li>
				<li><a href="ser_delete.php"><i class="fa fa-circle-o"></i> Service Detail</a></li>
                <li><a href="ser_invoice.php"><i class="fa fa-circle-o"></i> Invoice</a></li>
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
            Service Appointment 
            <small>(service)</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="../../index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li class="active">Appointment</li>
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
                <div class="box-header  with-border">
                  <h3 class="box-title">Customer Details</h3>
                </div><!-- /.box-header -->
                <!-- form start enquiry-->
                  <div class="box-body">
				  
				  <div class="form-group">
                      <label for="enq">Customer_Id</label>
					  <input type="text" required id="cu" style="width:70%" class="form-control input-sm" readonly name="cust_id" value="<?php echo $row['cust_id']; ?>" >
                    </div>
					
                    <div class="form-group">
                      <label >Customer_Name</label>
					  <input type="text"  required pattern="[a-zA-Z. ]+" id="cun" style="width:70%" readonly class="form-control input-sm" name="cust_name" value="<?php echo $row['cust_name']; ?>">
                    </div>
					
					<div class="form-group">
					  <label >Service No</label>
                      <input type="text" style="width:70%" class="form-control input-sm" required name="service_no" placeholder="Enter service no">
                    </div>
					
					 <div class="form-group">
					 
                      <label for="phone">Phone</label>
                      <input type="text" style="width:70%" class="form-control input-sm" readonly name="phone" pattern="^[7||8||9]{1}[0-9]{9}$" value="<?php echo $row['phone']; ?>">
                    </div>
					
					<div class="form-group">
                      <label>Email</label>
                      <input type="text" style="width:70%" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" readonly class="form-control input-sm" name="email"  value="<?php echo $row['email']; ?>">
                    </div>
                
					 
                  </div><!-- /.box-body -->

              </div><!-- /.box -->
                   <!-- general form elements disabled -->
				   
				                 <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Other details</h3>
                </div>
                <div class="box-body">
				
				 <div class="form-group">
                      <label>AMC Type</label>
                      <select class="form-control" style="width:70%" readonly name="amc_type">
					  <option value="" disabled selected>Select</option>
					  <option value='Platinum'<?php if('Platinum'==$row['amc_type']){ ?>selected="selected"<?php } ?>>Platinum</option>
					   <option value='Gold'<?php if('Gold'==$row['amc_type']){ ?>selected="selected"<?php } ?>>Gold</option>
					    <option value='Silver'<?php if('Silver'==$row['amc_type']){ ?>selected="selected"<?php } ?>>Silver</option>  
                       
                       </select>
					  </div>
					  
					  <div class="form-group">
                       <label>Exp Date</label>
					    <div class="input-group date"  style="width:70%" >
                        <input type="text" class="form-control" id="e_dt" readonly name="expdate" value="<?php echo $row['enddate']; ?>">
                      <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                        </div>
                      </div>
					  </div>
					
					  <div class="form-group">
                       <label>Service Date</label>
					    <div class="input-group date"  style="width:70%" >
                        <input type="text" class="form-control" onblur="expDate()" id="s_dt" name="servicedate" >
                      <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                        </div>
                      </div>
					  </div>
				  
					 <script>
				       function expDate()
                       {    
                           var exp=document.getElementById("e_dt").value;
                           var serv= document.getElementById("s_dt").value;
						   var ed=new Date(exp);
						   var sd=new Date(serv);
						   if (ed < sd)
						   {
						      alert("Service AMC Contract expired");
							  window.location="appdelete.php";
						   }
                       }
				    </script>
					
					 
                </div><!-- /.box-body -->
              </div><!-- /.box -->
			  
           
            </div><!--/.col (left) -->
			
            <!-- right column -->
            <div class="col-md-6">
              <!-- Horizontal Form -->
             
                  
                <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">Car details</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                  <div class="box-body">
					
                    <div class="form-group">
					
					<div class="form-group">
					 
                      <label for="phone">Car No</label>
                      <input type="text" style="width:70%" class="form-control input-sm" readonly name="car_regno" value="<?php echo $row['car_regno']; ?>">
                    </div>

					<div class="form-group">
                      <label>Model</label>
					  <select class="form-control" style="width:70%" name="model" readonly required>
					    <option value="" disabled selected>Select a car model</option>
                        <option value='swift'<?php if('swift'==$row['model']){ ?>selected="selected"<?php } ?>>swift</option>
                        <option value='ritz'<?php if('ritz'==$row['model']){ ?>selected="selected"<?php } ?>>ritz</option>
                        <option value='celerio'<?php if('celerio'==$row['model']){ ?>selected="selected"<?php } ?>>celerio</option>
                        <option value='s-cross'<?php if('s-cross'==$row['model']){ ?>selected="selected"<?php } ?>>s-cross</option>
                        <option value='sx4'<?php if('sx4'==$row['model']){ ?>selected="selected"<?php } ?>>sx4</option>
                      </select>
                    </div>
					  
					   <div class="form-group">
                      <label>Fuel Type</label>
					  <select class="form-control" style="width:70%" name="fuel_type" readonly required>
					    <option value="" disabled selected>Select</option>
                        <option value='Petrol'<?php if('Petrol'==$row['fuel_type']){ ?>selected="selected"<?php } ?>>Petrol</option>
                        <option value='Diesel'<?php if('Diesel'==$row['fuel_type']){ ?>selected="selected"<?php } ?>>Diesel</option>
                      </select>
                    </div>
					
					<div class="form-group">
					  <label for="phone">Engine No</label>
                      <input type="text" style="width:70%" class="form-control input-sm" readonly name="engine_no" value="<?php echo $row['engine_no']; ?>">
                    </div>
					
					<div class="form-group">
					  <label>Model year</label>
					  <select class="form-control" style="width:70%" id="year" name="modelyear" readonly value="<?php echo $row['modelyear']; ?>">
                          <script>
                              var myDate = new Date();
                              var year = myDate.getFullYear();
                              for(var i = 2000; i < year+1; i++)
                              {
                                   document.write('<option value="'+i+'">'+i+'</option>');
                              }
                           </script>
                       </select>
                     <!-- <input type="text" style="width:70%" class="form-control input-sm" name="purch" placeholder=""> -->
                    </div>
					
					<div class="form-group">
					  <label for="phone">Chassis No</label>
                      <input type="text" style="width:70%" class="form-control input-sm" readonly name="chassis_no" value="<?php echo $row['chassis_no']; ?>">
                    </div>
					 <div class="form-group">
					  <label for="phone">Milage</label>
                      <input type="text" style="width:70%" class="form-control input-sm" name="milage" placeholder="Enter kilometer">
                    </div>	
					  
                    </div>

                  </div><!-- /.box-body -->
				  
				  <div class="box-footer">
                    <button type="submit" class="btn btn-info pull-right" name="submits" id="suub" >Submit</button>
                  </div><!-- /.box-footer -->
				  
              </div><!-- /.box -->
             
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
		  </form>
        </section><!-- /.content -->
		<!--Edit -->
     
 </div><!-- ./wrapper -->
    <!-- jQuery 2.1.4 -->
	<script>
	$(document).ready(function ()
	{
	$('#s_dt').datepicker({
	format:"yyyy-mm-dd",
	startDate:'-5d'
	});
	});
	</script>
	
	<script>
	$(document).ready(function ()
	{
	$('#e_dt').datepicker({
	format:"yyyy-mm-dd",
	startDate:'-5d'
	});
	});
	</script>
	
  </body>
</html>
