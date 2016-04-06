<?php
require('../../sales_db.php');
if(isset($_GET[edi]))
{
$sql=mysql_query("select * from ser_detail where service_no='".$_GET['edi']."' ");

$row=mysql_fetch_assoc($sql);

}
if(isset($_POST['submit']))
{

$cust_id=$_POST['cust_id'];
$cust_name=$_POST['cust_name'];
$service_no=$_POST['service_no'];
$car_regno=$_POST['car_regno'];
$model=$_POST['model'];
$payment=$_POST['payment'];
$serviced_by=$_POST['serviced_by'];
$delivery_date=$_POST['delivery_date'];
$nextservice=$_POST['nextservice'];
$d_engine_oil=$_POST['d_engine_oil'];
$filter=$_POST['filter'];
$wheel=$_POST['wheel'];
$water_service=$_POST['water_service'];
$oil_service=$_POST['oil_service'];
$d_qty=$_POST['d_qty'];
$f_qty=$_POST['f_qty'];
$w_qty=$_POST['w_qty'];
$ws_qty=$_POST['ws_qty'];
$o_qty=$_POST['o_qty'];
$result=mysql_query(" UPDATE `ser_detail` SET `cust_name`='$cust_name',`car_regno`='$car_regno',`model`='$model',`payment`='$payment',`serviced_by`='$serviced_by',`delivery_date`='$delivery_date',`nextservice`='$nextservice',`d_engine_oil`='$d_engine_oil',`filter`='$filter',`wheel`='$wheel',`water_service`='$water_service',`oil_service`='$oil_service', d_qty='$d_qty', f_qty='$f_qty', w_qty='$w_qty' ,ws_qty='$ws_qty', o_qty='$o_qty' WHERE service_no='".$_GET['edi']."'");
$res=mysql_query("UPDATE `ser_events` SET `start`='$nextservice' WHERE title='".$_GET['edi']."'");

if($result)
{
 
 header("location:ser_delete.php");
 
}
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
                <li ><a href="amc_delete.php"><i class="fa fa-circle-o"></i> AMC</a></li>
                <li><a href="appdelete.php"><i class="fa fa-circle-o"></i> Service Appointments </a></li>
				<li class="active"><a href="ser_delete.php"><i class="fa fa-circle-o"></i> Service Detail</a></li>
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
            Service Appointments
            <small>(service)</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="../../index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			
			<li class="active">Appointments</li>
          </ol>
        </section>

        <!-- Main content -->

		<section class="content">
		<form role="form" method="post" ">
		
		<input type="hidden" name="edi" value="<?php echo $_GET['edi']; ?>">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
			  
                <div class="box-header with-border">
                  <h3 class="box-title">Customer Details</h3>
                </div><!-- /.box-header -->
                <!-- form start enquiry-->
                  <div class="box-body">
				  
				  <div class="form-group">
                      <label for="enq">Customer_Id</label><input type="text" required id="cu" style="width:70%" class="form-control input-sm" disabled="" name="cust_id" value="<?php echo $row['cust_id']; ?>" >
                    </div>
					
                    <div class="form-group">
                      <label >Customer_Name</label>
					  <input type="text"  required pattern="[a-zA-Z]+"  id="cun" style="width:70%" class="form-control input-sm" name="cust_name"  value="<?php echo $row['cust_name']; ?>" >
                    </div>
					
					<div class="form-group">
					  <label for="phone">Service No</label>
                      <input type="text" style="width:70%" class="form-control input-sm" name="service_no" disabled="" value="<?php echo $row['service_no']; ?>">
                    </div>
					
					<div class="form-group">
                      <label for="phone">Car No</label>
                      <input type="text" style="width:70%" class="form-control input-sm"  name="car_regno" value="<?php echo $row['car_regno']; ?>" >
                    </div>

					
					<div class="form-group">
                      <label>Model</label>
					  <select class="form-control" style="width:70%" name="model" required>
					    <option value="" disabled selected>Select a car model</option>
                        <option value='swift'<?php if('swift'==$row['model']){ ?>selected="selected"<?php } ?>>swift</option>
                        <option value='ritz'<?php if('ritz'==$row['model']){ ?>selected="selected"<?php } ?>>ritz</option>
                        <option value='celerio'<?php if('celerio'==$row['model']){ ?>selected="selected"<?php } ?>>celerio</option>
                        <option value='s-cross'<?php if('s-cross'==$row['model']){ ?>selected="selected"<?php } ?>>s-cross</option>
                        <option value='sx4'<?php if('sx4'==$row['model']){ ?>selected="selected"<?php } ?>>sx4</option>
                      </select>
                    </div>
                
					 
                  </div><!-- /.box-body -->

              </div><!-- /.box -->
                   <!-- general form elements disabled -->
              
					  
			 <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">Service details</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                  <div class="box-body">
					
					   <div class="form-group">
                      <label>Payment_method</label>
                      <select class="form-control" style="width:70%" name="payment">
					  <option value="" disabled selected>Select</option>
					  <option value='Cash'<?php if('Cash'==$row['payment']){ ?>selected="selected"<?php } ?>>Cash</option>
                      <option value='Insurance'<?php if('Insurance'==$row['payment']){ ?>selected="selected"<?php } ?>>Insurance</option>
					    
                      </select>
					  </div>

                  </div><!-- /.box-body -->
              </div><!-- /.box -->
                  
            </div>   
                

			
            <!-- right column -->
            <div class="col-md-6">
              <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Service details</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                  <div class="box-body">
				  
					<div class="form-group">
                      <label for="phone">Serviced_by</label>
                      <input type="text" style="width:70%" class="form-control input-sm" name="serviced_by" value="<?php echo $row['serviced_by']; ?>">
                    </div>
										  
					  <div class="form-group">
                       <label>Delivery date</label>
					    <div class="input-group date"  style="width:70%">
                        <input type="text" class="form-control" id="deliv_dt" onblur="nxtDate(this.value)" name="delivery_date" value="<?php echo $row['delivery_date']; ?>">
                      <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                        </div>
                      </div>
					  </div>
					  
					  <script>
			  			function nxtDate(delivDate) {
						 var delivDate= new Date(delivDate);
                         var years =delivDate.getFullYear();
                         var months =delivDate.getMonth();
                         var days =delivDate.getDate();
					    
						var f=(parseInt(years)+1)+ '-'  + (parseInt(months)+1)+ '-'  +days;
						
						document.getElementById('nxt_dt').value= f;
                        }
					</script> 
					  
					  <div class="form-group">
                       <label>Next service</label>
					    <div class="input-group date"  style="width:70%">
                        <input type="text" class="form-control" id="nxt_dt" name="nextservice" value="<?php echo $row['nextservice']; ?>">
                      <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                        </div>
                      </div>
					  </div>
					  
                  </div><!-- /.box-body -->
              </div><!-- /.box -->
                  
				   <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Service</h3>
                </div>
                <div class="box-body">
				    
					 <div class="checkbox">
                      <label>
                        <input type="checkbox" value="Diesel Engine oil" onClick="d_quantity(this,this.form)" name="d_engine_oil" value=""<?php if($row['d_engine_oil']=='Diesel Engine oil') { ?> checked="checked"<?php } ?>> Disel Engine Oil
                      </label> &nbsp;&nbsp;&nbsp;
					  <input type="text" name="d_qty" style="width:20%;"   value="<?php echo $row['d_qty']; ?>" placeholder="qty"><br></br>
                    </div>
					
					<div class="checkbox">
                      <label>
                        <input type="checkbox" value="Filter Pack" onClick="f_quantity(this,this.form)" name="filter" value=""<?php if($row['filter']=='Filter Pack') { ?> checked="checked"<?php } ?>> Filter Pack
                      </label>&nbsp;&nbsp;&nbsp;
					  <input type="text" name="f_qty" style=" width:20%;"  value="<?php echo $row['f_qty']; ?>" placeholder="qty"><br></br>
                    </div>
					
					<div class="checkbox">
                      <label>
                        <input type="checkbox" value="Front Wheel Alignment" onClick="w_quantity(this,this.form)" name="wheel" value=""<?php if($row['wheel']=='Front Wheel Alignment') { ?> checked="checked"<?php } ?>> Front Wheel Alignment
                      </label>&nbsp;&nbsp;&nbsp;
					  <input type="text" name="w_qty" style="width:20%;"  value="<?php echo $row['w_qty']; ?>" placeholder="qty"><br></br>
                    </div>
					
					<div class="checkbox">
                      <label>
                        <input type="checkbox" value="Water service" onClick="ws_quantity(this,this.form)" name="water_service" value=""<?php if($row['water_service']=='Water service') { ?> checked="checked"<?php } ?>> Water Service
                      </label>&nbsp;&nbsp;&nbsp;
					  <input type="text" name="ws_qty" style="width:20%;"  value="<?php echo $row['ws_qty']; ?>" placeholder="qty"><br></br>
                    </div>
					
					<div class="checkbox">
                      <label>
                        <input type="checkbox" value="Oil Service" onClick="o_quantity(this,this.form)" name="oil_service" value=""<?php if($row['oil_service']=='Oil Service') { ?> checked="checked"<?php } ?>> Oil Service
                      </label>&nbsp;&nbsp;&nbsp;
					  <input type="text" name="o_qty" style="width:20%;"  value="<?php echo $row['o_qty']; ?>" placeholder="qty"><br></br>
                    </div>
					
				    				  <script>
					function d_quantity(c,f)
					{
                       if(c.checked){f.d_qty.style.visibility="visible"}
                        else{f.d_qty.style.visibility="hidden"} 
					}
					function f_quantity(c,f)
					{
                       if(c.checked){f.f_qty.style.visibility="visible"}
                        else{f.f_qty.style.visibility="hidden"} 
					}
					function w_quantity(c,f)
					{
                       if(c.checked){f.w_qty.style.visibility="visible"}
                        else{f.w_qty.style.visibility="hidden"} 
					}
					function ws_quantity(c,f)
					{
                       if(c.checked){f.ws_qty.style.visibility="visible"}
                        else{f.ws_qty.style.visibility="hidden"} 
					}
					function o_quantity(c,f)
					{
                       if(c.checked){f.o_qty.style.visibility="visible"}
                        else{f.o_qty.style.visibility="hidden"} 
					}
					
				</script>
					
					
					 <div class="box-footer">
                    <button type="submit" class="btn btn-info pull-right" name="submit" id="suub" >Update</button>
                  </div><!-- /.box-footer -->
				  
					
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              
                           
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
		  </form>
        </section><!-- /.content -->

 </div><!-- ./wrapper -->
  
    <script>
	$(document).ready(function ()
	{
	$('#deliv_dt').datepicker({
	format:"yyyy-mm-dd",
	startYear:'-3y'
	});
	});
	</script>
	<script>
	$(document).ready(function ()
	{
	$('#nxt_dt').datepicker({
	format:"yyyy-mm-dd",
	startYear:'-3y'
	});
	});
	</script>
	
  </body>
  
</html>
