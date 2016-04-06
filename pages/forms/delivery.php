<?php
require('../../sales_db.php');
$sql=mysql_query("select *from invoice_details where Enq_id='".$_GET['det']."' ");
//error_reporting();
$row=mysql_fetch_assoc($sql);

$sql1=mysql_query("select *from downpayment where Enq_id='".$_GET['det']."' ");
$row1=mysql_fetch_assoc($sql1);

$sql2=mysql_query("select *from opp_details where Enq_id='".$_GET['det']."' ");
$row2=mysql_fetch_assoc($sql2);

if(isset($_POST['submits']))
{
                                                                                      
$query=mysql_query("insert into deliv_detail(enq_id,cus_id,book_id,cust_name,deliv_id,res_add,res_ph1,res_em,res_pin,model1,variant,model_year,car_regno,model_color,chassis_no,engine_no,app_date,deliv_date,ap_b_e,mop) VALUES ('".$_POST['enq_id']."','".$_POST['cus_id']."','".$_POST['book_id']."','".$_POST['cust_name']."','".$_POST['deliv_id']."','".$_POST['res_add']."','".$_POST['res_ph1']."','".$_POST['res_em']."','".$_POST['res_pin']."','".$_POST['model1']."','".$_POST['variant']."','".$_POST['model_year']."','".$_POST['car_regno']."','".$_POST['model_color']."','".$_POST['chassis_no']."','".$_POST['engine_no']."','".$_POST['app_date']."','".$_POST['deliv_date']."','".$_POST['ap_b_e']."','".$_POST['mop']."')");
//echo "insert into deliv_detail(enq_id,cus_id,book_id,cust_name,deliv_id,res_add,res_ph1,res_em,res_pin,model1,variant,model_year,car_regno,model_color,chassis_no,engine_no,app_date,deliv_date,ap_b_e,mop) VALUES ('".$_POST['enq_id']."','".$_POST['cus_id']."','".$_POST['book_id']."','".$_POST['cust_name']."','".$_POST['deliv_id']."','".$_POST['res_add']."','".$_POST['res_ph1']."','".$_POST['res_em']."','".$_POST['res_pin']."','".$_POST['model1']."','".$_POST['variant']."','".$_POST['model_year']."','".$_POST['car_regno']."','".$_POST['model_color']."','".$_POST['chassis_no']."','".$_POST['engine_no']."','".$_POST['app_date']."','".$_POST['deliv_date']."','".$_POST['ap_b_e']."','".$_POST['mop']."')";
if($query)
{
header("location:../../deliverydetailindex.php");
}
}
?>
<!DOCTYPE html>
<html>
 <head>
       <script>
function showResult(str) {
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","../../livesearch.php?q="+str,true);
  xmlhttp.send();
}
</script>
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
          <form class="sidebar-form" autocomplete="off">
            <div class="input-group">
              <input type="text" id="q" class="form-control" placeholder="Search..." onkeyup="showResult(this.value)">
			  <span class="input-group-btn">
                <button type="button" id="search" class="btn btn-flat" onclick="javascript:eraseText();"><i class="fa fa-times"></i></button>
              </span>              
			   </div>
			   <div id="livesearch"></div>
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
				<li><a href="../examples/invoiceindex.php"><i class="fa fa-circle-o"></i> Invoice</a></li>
                <li class="active"><a href="../../deliverydetailindex.php"><i class="fa fa-circle-o"></i> Delivery</a></li>
              </ul>
            </li>
             <li class="treeview">
              <a href="#">
                <i class="fa fa-steam-square"></i> 
				<span>Service</span><i class="fa fa-angle-left pull-right"></i> 
				</a>
			  <ul class="treeview-menu">
                <li><a href="amc_delete.php"><i class="fa fa-circle-o"></i> AMC</a></li>
                <li><a href="appdelete.php"><i class="fa fa-circle-o"></i> Service Appointments </a></li>
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
                      <label for="enq">Enquiry_Id</label><input type="text" style="width:70%" class="form-control input-sm" value="<?php echo $row['Enq_id'] ?>" name="enq_id" >
                    </div>
					<div class="form-group">
                      <label for="enq">Customer_Id</label><input type="text" style="width:70%" class="form-control input-sm" name="cus_id" value="<?php echo $row['Cus_id'] ?>" >
                    </div>
					<div class="form-group">
                      <label for="enq">Booking_Id</label><input type="text" style="width:70%" class="form-control input-sm" name="book_id" value="<?php echo $row['Book_id'] ?>">
                    </div>
					
                    <div class="form-group">
                      <label for="mail">Customer_Name</label><input type="text" style="width:70%" class="form-control input-sm" name="cust_name" value="<?php echo $row['Cus_name'] ?>">
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
                      <textarea class="form-control input-sm" style="width:70%" rows="3" name="res_add"><?php echo $row['Res_addr'] ?></textarea>
                    </div>
					

				    <div class="form-group">
                      <label for="phone">Phone</label>
                      <input type="text" style="width:70%" class="form-control input-sm" id="res-phone1" name="res_ph1"  value="<?php echo $row1['Res_phone'] ?>">
                    </div>
				
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="text" style="width:70%" class="form-control input-sm" id="exampleInputEmail1" name="res_em" value="<?php echo $row['Email'] ?>">
                    </div>
					<div class="form-group">
                      <label for="phone">Pincode</label>
                      <input type="text" style="width:70%" class="form-control input-sm" id="pin1" name="res_pin"  value="<?php echo $row['Pincode'] ?>">
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
             
  <label for="mail">Model</label>
  <input type="text" style="width:70%" class="form-control input-sm" name="model1" value="<?php echo $row1['category'] ?>">
  </label>
                  
             </div>
			 
			 <div class="form-group">
             
  <label for="mail">Variant</label>
  <input type="text" style="width:70%" class="form-control input-sm" name="variant" value="<?php echo $row1['subcategory'] ?>">
  </label>
                  
             </div>
			 
			  <div class="form-group">
			  <label>Model year</label>
			   <?php
  
  $currently_selected = date('2016'); 
 
  $earliest_year = 2016; 
 
  $latest_year = date('1995'); 

  print '<select name="model_year">';
  foreach ( range( $latest_year, $earliest_year ) as $i ) {
    
    print '<option value="'.$i.'"'.($i === $currently_selected ? ' selected="selected"' : '').'>'.$i.'</option>';
  }
  print '</select>';
  ?>
</div>
			   
                  <div class="form-group">
                      <label>Car Registration no</label><input type="text" style="width:70%" class="form-control input-sm" name="car_regno">
                    </div>
           
			 <div class="form-group">
              <label>Color</label>
     		   <input type="text" style="width:70%" class="form-control input-sm" name="model_color" value="<?php echo $row['color'] ?>">
             </div>
			
			
			<div class="form-group">
                      <label>Chassis_No</label><input type="text" style="width:70%" class="form-control input-sm" name="chassis_no" value="<?php echo $row['cha_no'] ?>">
                    </div>
					
			<div class="form-group">
                      <label>Engine_No</label><input type="text" style="width:70%" class="form-control input-sm" name="engine_no" value="<?php echo $row['eng_no'] ?>">
                    </div>
			 
            <div class="form-group">
              <label>Date of Booking</label>
			    <input type="text" style="width:70%" class="form-control input-sm" name="app_date" value="<?php echo $row1['app_date'] ?>">
            </div>
			
			 <div class="form-group">
              <label>App. Date of Delivery</label>
			    <input type="text" style="width:70%" class="form-control input-sm" name="deliv_date" value="<?php echo $row1['deliv_date'] ?>">
            </div>
			
			<div class="form-group">
             
             				<label>Date of Delivery</label>
					<div class="input-group date" data-provide="datepicker" style="width:70%">
                     <input type="text" class="form-control" name="ap_b_e" required>
                      <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                        </div>
                      </div>
                    <!-- /.input group -->
                  </div>
            
			<div class="form-group">
				   <label>AMC Type</label>
				   <div class="radio">
                        <label>
                          <input type="radio" name="amc_type"  value="Yes">
                          Yes
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="amc_type"  value="No">
                          No
                        </label>
                      </div>
					  </div>
			
			<div class="form-group">
				<label>Mode of payment</label>
				
			    <input type="text" style="width:70%" class="form-control input-sm" name="mop" value="<?php echo $row2['MOP'] ?>">
            
			</div>
			
             </div><!-- /.box-body -->
				<div class="box-footer">
                    <button type="submits" name="submits"class="btn btn-primary">Submit</button>
                  </div>
				  
				  </div><!--/.col (right) -->
              </div>   <!-- /.row -->
		      </div>
				   </form><!-- /.box-footer -->
            </div>
        </section><!-- /.content -->
	 </div>
	<script>
	
	$(document).ready(function ()
	{
	$('#ap_b_e').datepicker({
	format:"yyyy-mm-dd",
	startDate:'-3d'
	});	
	});
	
	</script>
	 <script>
	function eraseText() {
    document.getElementById("q").value = "";
}
	</script>	
  </body>
</html>