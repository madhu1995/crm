<?php
session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db("delivery",$con);
error_reporting(0);
if(isset($_GET[edi]))
{
$sql=mysql_query("select * from deliv_detail where enq_id='".$_GET['edi']."' ");
#echo "select * from deliv_detail where enq_id='".$_GET['edi']."' ";
$row=mysql_fetch_assoc($sql);
}
if(isset($_POST['submits']))
{
$enq_id=$_POST['enq_id'];
$cus_id=$_POST['cus_id'];
$book_id=$_POST['book_id'];
$cust_name=$_POST['cust_name'];
$deliv_id=$_POST['deliv_id'];
$res_add=$_POST['res_add'];
$res_ph1=$_POST['res_ph1'];
$res_ph2=$_POST['res_ph2'];
$res_em=$_POST['res_em'];
$res_pin=$_POST['res_pin'];
$model1=$_POST['model1'];
$model_year=$_POST['model_year'];
$car_regno=$_POST['car_regno'];
$model_fuel=$_POST['model_fuel'];
$model_color=$_POST['model_color'];
$model_gear=$_POST['model_gear'];
$chassis_no=$_POST['chassis_no'];
$engine_no=$_POST['engine_no'];
$ap_b_d=$_POST['ap_b_d'];
$ap_b_e=$_POST['ap_b_e'];
$amc_type=$_POST['amc_type'];
$pay=$_POST['pay'];
$result=mysql_query("UPDATE deliv_detail SET cus_id='$cus_id',book_id='$book_id',cust_name='$cust_name',deliv_id='$deliv_id',res_add='$res_add',res_ph1='$res_ph1',res_ph2='$res_ph2',res_em='$res_em',res_pin='$res_pin',model1='$model1',model_year='$model_year',car_regno='$car_regno',model_fuel='$model_fuel',model_color='$model_color',model_gear='$model_gear',chassis_no='$chassis_no',engine_no='$engine_no',ap_b_d='$ap_b_d',ap_b_e='$ap_b_e',amc_type='$amc_type',pay='$pay' WHERE enq_id='".$_GET['edi']."'");
echo "UPDATE deliv_detail SET cus_id='$cus_id',book_id='$book_id',cust_name='$cust_name',deliv_id='$deliv_id',res_add='$res_add',res_ph1='$res_ph1',res_ph2='$res_ph2',res_em='$res_em',res_pin='$res_pin',model1='$model1',model_year='$model_year',car_regno='$car_regno',model_fuel='$model_fuel',model_color='$model_color',model_gear='$model_gear',chassis_no='$chassis_no',engine_no='$engine_no',ap_b_d='$ap_b_d',ap_b_e='$ap_b_e',amc_type='$amc_type',pay='$pay' WHERE enq_id='".$_GET['edi']."'"; 
if($result)
{
 echo "updated!!!!!";
 header("location:../../deliverydetailindex.php");
 
}
}
?>
<html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=3">
    <title>Aadhi Maruti | Delivery Details</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=50x50, maximum-scale=50x50, user-scalable=no" name="viewport">
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
          <!-- mini logo for sidebar mini 50x50pixels -->
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
                <li><a href="oppur.php"><i class="fa fa-circle-o"></i> Opportunity Details</a></li>
				<li><a href="../examples/invoiceindex.php"><i class="fa fa-circle-o"></i> Invoice</a></li>
          <!--      <li><a href="index.html"><i class="fa fa-circle-o"></i> Purchase Details</a></li> -->
                <li class="active"><a href="../../deliverydetailindex.php"><i class="fa fa-circle-o"></i> Delivery</a></li>
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
</div>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Delivery
          </h1>
          <ol class="breadcrumb">
            <li><a href="../../index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
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
                      <label for="enq">Enquiry_Id</label><input type="text" style="width:70%" class="form-control input-sm" name="enq_id" value="<?php echo $row['enq_id']; ?>" required >
                    </div>
					<div class="form-group">
                      <label for="enq">Customer_Id</label><input type="text" style="width:70%" class="form-control input-sm" name="cus_id"value="<?php echo $row['cus_id']; ?>" required >
                    </div>
					<div class="form-group">
                      <label for="enq">Booking_Id</label><input type="text" style="width:70%" class="form-control input-sm" name="book_id"value="<?php echo $row['book_id']; ?>" required >
                    </div>
					
                    <div class="form-group">
                      <label for="mail">Customer_Name</label><input type="text" style="width:70%" class="form-control input-sm" name="cust_name" value="<?php echo $row['cust_name']; ?>" required >
                    </div>
					<div class="form-group">
                      <label for="enq">Delivery_Id</label><input type="text" style="width:70%" class="form-control input-sm" name="deliv_id"value="<?php echo $row['deliv_id']; ?>" required >
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
                      <textarea class="form-control input-sm" style="width:70%" rows="3" placeholder="Enter ..." name="res_add .."required> <?php echo $row['res_add']; ?></textarea>
                    </div>
					

				    <div class="form-group">
                      <label for="phone">Phone</label>
                      <input type="text" style="width:70%" class="form-control input-sm" id="res-phone1" name="res_ph1"  placeholder="Enter mobile number" value="<?php echo $row['res_ph1']; ?>" required >
                    </div>
					<div class="form-group">
                      <label for="phone">Alternate phone</label>
                      <input type="text" style="width:70%" class="form-control input-sm" id="res-phone2" name="res_ph2" placeholder="Enter mobile number" value="<?php echo $row['res_ph2']; ?>" required >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="text" style="width:70%" class="form-control input-sm" id="exampleInputEmail1" name="res_em" placeholder="Enter mail" value="<?php echo $row['res_em'] ?>" required >
                    </div>
					<div class="form-group">
                      <label for="phone">Pincode</label>
                      <input type="text" style="width:70%" class="form-control input-sm" id="pin1" name="res_pin"  placeholder="Enter pincode" value="<?php echo $row['res_pin']; ?>" required >
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
     		    <select class="form-control" style="width:70%" name="model1" >
					    <option>Select a car model</option>
						 <?php 
					$conn=mysql_connect("localhost","root","") or die("Connection Failed");
					mysql_select_db("select")or die("Connection Failed"); 
					$query = "SELECT * FROM carmodel"; 
					$result = mysql_query($query); 
					while ($line = mysql_fetch_array($result)) { ?>
					<option value="<?php echo $line['modelname'];?>" <?php if($line['modelname']==$row['model1']){ ?>selected="selected"<?php } ?>> 
					<?php echo $line['modelname'];?> </option>   <?php } ?>
					 </select>
             </div>
			 <div class="form-group">
			  <label>Model year</label>
			   <?php
  
  $currently_selected = date('2016'); 
 
  $earliest_year = 2016; 
 
  $latest_year = date('1995'); 

  print '<select>';
  foreach ( range( $latest_year, $earliest_year ) as $i ) {
    
    print '<option value="'.$i.'"'.($i === $currently_selected ? ' selected="selected"' : '').'>'.$i.'</option>';
  }
  print '</select>';
  ?>
</div>
 <div class="form-group">
                      <label>Car Registration no</label><input type="text" style="width:70%" class="form-control input-sm" name="car_regno" value="<?php echo $row['car_regno']; ?>" required>
                    </div>
			 <div class="form-group">
              <label>Fuel type</label>
     		    <select class="form-control" style="width:70%" name="model_fuel">
					    <option>Select fuel type</option>
                        <option value='Petrol'<?php if('Petrol'==$row['model_fuel']){ ?>selected="selected"<?php } ?>>Petrol</option>
                        <option value='Diesel'<?php if('Diesel'==$row['model_fuel']){ ?>selected="selected"<?php } ?>>Diesel</option>
     			</select>
             </div>
			 <div class="form-group">
              <label>Color</label>
     		    <select class="form-control" style="width:70%" name="model_color">
					    <option value='Silver'<?php if('Silver'==$row['model_color']){ ?>selected="selected"<?php } ?>> Silver</option>
                        <option value='Red'<?php if('Red'==$row['model_color']){ ?>selected="selected"<?php } ?>>Red</option>
                        <option value='Black'<?php if('Black'==$row['model_color']){ ?>selected="selected"<?php } ?>> Black</option>
                        <option value='Blue'<?php if('Blue'==$row['model_color']){ ?>selected="selected"<?php } ?>> Blue</option>
                        <option value='Yellow'<?php if('Yellow'==$row['model_color']){ ?>selected="selected"<?php } ?>> Yellow</option>
     			</select>
             </div>
			
			 <div class="form-group">
              <label>Gear type</label>
     		    <select class="form-control" style="width:70%" name="model_gear">
					    <option >Select Gear type</option>
                        <option value='Manual Shift'<?php if('Manual Shift'==$row['model_gear']){ ?>selected="selected"<?php }?>>Manual Shift</option>
                        <option value='Auto Shift'<?php if('Auto Shift'==$row['model_gear']){ ?>selected="selected"<?php }?>>Auto Shift</option>
     			</select>
             </div>
			
			<div class="form-group">
                      <label>Chassis_No</label><input type="text" style="width:70%" class="form-control input-sm" name="chassis_no" value="<?php echo $row['chassis_no']; ?>" required  >
                    </div>
					
			<div class="form-group">
                      <label>Engine_No</label><input type="text" style="width:70%" class="form-control input-sm" name="engine_no" value="<?php echo $row['engine_no']; ?>" required >
                    </div>
			 
            <div class="form-group">
              <label>Date of Sale</label>
			    <div class="input-group date" data-provide="datepicker" style="width:70%">
                   <input type="text" class="form-control" name="ap_b_d" value="<?php echo $row['ap_b_d']; ?>" required  >
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                </div>
            </div>
			<div class="form-group">
              <label>Date Of Delivery</label>
			    <div class="input-group date" data-provide="datepicker" style="width:70%">
                   <input type="text" class="form-control" name="ap_b_e" value="<?php echo $row['ap_b_e']; ?>" required>
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                </div>
            </div>
			<div class="form-group">
				   <label>AMC Type</label><div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="Yes" required>
                          Yes
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios2" value="No" required>
                          No
                        </label>
                      </div>
			
			
			<div class="form-group">
				<label>Mode of payment</label>
				<select class="form-control" style="width:70%" name="pay">
				<option value='Cash'<?php if('Cash'==$row['pay']){ ?>selected="selected"<?php } ?> >Cash</option>
				<option value='Self finance'<?php if('Self finance'==$row['pay']){ ?>selected="selected"<?php } ?> >Self finance</option>
				<option value='Maruti finance'<?php if('Maruti finance'==$row['pay']){ ?>selected="selected"<?php } ?>>Maruti finance</option>
				</select>
			</div>
	  </div> 
             </div><!-- /.box-body -->
				<div class="box-footer">
                   <button type="submit" class="btn btn-primary" name="submits" onClick="location.href='../../deliverydetailindex.php">Update</button>
 
                  </div>
				  
				  </div><!--/.col (right) -->
              </div>   <!-- /.row -->
		     
				   </form><!-- /.box-footer -->
            
        </section><!-- /.content -->
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
  </body>
</html>

