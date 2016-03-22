<?php
require('sales_db.php');
if(isset($_GET[edit]))
{
$sql=mysql_query("select * from invoice_details where invoice_no='".$_GET['edit']."' ");
#echo "select * from invoice_details where invoice_no='".$_GET['edit']."' ";
$row=mysql_fetch_assoc($sql);
}
if(isset($_POST['submit']))
{
$enq_no=$_POST['enq_no'];
$custname=$_POST['custname'];
$title=$_POST['title'];
$fathername=$_POST['fathername'];
$invoice_no=$_POST['invoice_no'];
$booking_no=$_POST['booking_no'];
$doe=$_POST['doe'];
$doi=$_POST['doi'];
$email=$_POST['email'];
$addr=$_POST['addr'];
$pin_code=$_POST['pin_code'];
$delivery=$_POST['delivery'];
$particulars=$_POST['particulars'];
$qty=$_POST['qty'];
$up=$_POST['up'];
$amt=$_POST['amt'];
$unit_concess=$_POST['unit_concess'];
$tot_concess=$_POST['tot_concess'];
$af_concess=$_POST['af_concess'];
$tot_tax=$_POST['tot_tax'];
$grs_tot=$_POST['grs_tot'];
$adjust=$_POST['adjust'];
$grand_tot=$_POST['grand_tot'];
$color=$_POST['color'];
$eng_no=$_POST['eng_no'];
$cha_no=$_POST['cha_no'];
$result=mysql_query("update invoice_details SET enq_no='$enq_no',custname='$custname',title='$title',fathername='$fathername',invoice_no='$invoice_no',booking_no='$booking_no',doe='$doe' ,doi='$doi',email='$email',addr='$addr',pin_code='$pin_code',delivery='$delivery',particulars='$particulars',qty='$qty',up='$up',amt='$amt',unit_concess='$unit_concess',tot_concess='$tot_concess',af_concess='$af_concess',grs_tot='$grs_tot',adjust='$adjust',grand_tot='$grand_tot',color='$color',eng_no='$eng_no',cha_no='$cha_no' where invoice_no='".$_GET['edit']."'");
#echo  "update invoice_details SET enq_no='$enq_no',custname='$custname',title='$title',fathername='$fathername',invoice_no='$invoice_no',booking_no='$booking_no',doe='$doe' ,doi='$doi',addr='$addr',pin_code='$pin_code',delivery='$delivery',particulars='$particulars',qty='$qty',up='$up',amt='$amt',unit_concess='$unit_concess',tot_concess='$tot_concess',af_concess='$af_concess',grs_tot='$grs_tot',adjust='$adjust',grand_tot='$grand_tot' where invoice_no='".$_GET['edit']."'";
if($result)
{
 echo "updated!!!!!";
 header("location:pages/examples/invoiceindex.php");
 
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
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="dist/img/user3-128x128.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo $_SESSION['username'] ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                    <p>
					  <?php echo $_SESSION['username'] ?>
                    </p>
                  </li>
                 
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    
                    <div class="pull-right">
					  <a href="pages/examples/logout.php">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
               </ul>
			   
          </div>
        </nav>
      </header>
	  </div>
      <!-- Left side column. contains the logo and sidebar -->
	  <aside style="font-family: &quot;Comic Sans MS&quot;,cursive,sans-serif;" class="main-sidebar">
           <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar" style="height:auto; padding-bottom:320px">
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
            <li class="treeview" >
              <a href="#">
                <i class="fa fa-cogs"></i> <span>Pre-Sales</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="leaddetailsindex.php"><i class="fa fa-circle-o"></i> Lead Details</a></li>
                <li><a href="pages/forms/pre.php"><i class="fa fa-circle-o"></i> Pre-sales Feedback</a></li>
              </ul>
            </li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-cog"></i><span>Sales</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu" class="treeview-active">
                <li><a href="pages/forms/oppur.php"><i class="fa fa-circle-o"></i> Opportunity Details</a></li>
				<li class="active"><a href="pages/examples/invoiceindex.php"><i class="fa fa-circle-o"></i> Invoice</a></li>
                <!-- <li><a href="index.html"><i class="fa fa-circle-o"></i> Purchase Details</a></li> -->
                <li><a href="deliverydetailindex.php"><i class="fa fa-circle-o"></i> Delivery</a></li>
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
              <a href="pages/forms/report.php">
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
              <a href="pages/forms/post.php">
                <i class="fa fa-edit"></i> <span>Feedback</span>
              </a>
              </li>
            <li>
			  <a href="pages/calendar.php">
                <i class="fa fa-calendar"></i> <span>Calendar</span>
               </a>
            </li>                
            <li>
                <a href="">
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
		<!-- <a href="pages/examples/invoiceindex.php"><h3><i class="fa fa-reply"></i></h3></a> -->
          <h1>
            Invoice details
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Invoice</a></li>
			<li class="active">Invoice Details</li>
          </ol>
        </section>
		
         <br></br>
        <!-- form -->
		<div class="box box-primary">
		         
				 
				 
                 <div class="box-header with-border">
                           
						   
						   	<form role="form" method="post" onSubmit="false" oninput=" amt.value=qty.value*up.value; tot_concess.value=qty.value*unit_concess.value; af_concess.value=amt.value-tot_concess.value; tot_tax.value=(14.50*amt.value)/100; grs_tot.value=parseInt(af_concess.value)+parseInt(tot_tax.value); grand_tot.value=grs_tot.value-adjust.value;">
	<input type="hidden" name="edit" value="<?php echo $_GET['edit']; ?>">
	
		<div class="box-body">
				  <div class="col-xs-3">
				 
				  <div class="form-group">
				  <label>Enquiry_No</label>
					  <input type="text" style="width:70%" class="form-control input-sm"  name="enq_no" placeholder="Enter Enquiry no.." value="<?php echo $row['enq_no']; ?>" required>
				  </div>
				  
				   <div class="form-group">
                      <label for="mail">Customer_Name</label>
					  <input type="text" style="width:70%" class="form-control input-sm"  name="custname" placeholder="Enter name" value="<?php echo $row['custname']; ?>" required>
                    </div>
				   
				   <div class="form-group">
                      <label for="mail">Title</label>
					   <select class="form-control" style="width:70%" name="title" required>
					   <option value='S/O'<?php if('S/O'==$row['title']){ ?>selected="selected"<?php } ?>>S/O</option>
					   <option value='D/O'<?php if('D/O'==$row['title']){ ?>selected="selected"<?php } ?>>D/O</option>
					   </select>
                    </div>
					
					 <div class="form-group">
                      <label for="mail">Father_Name</label>
					  <input type="text" style="width:70%" class="form-control input-sm"  name="fathername" placeholder="Enter name" value="<?php echo $row['fathername']; ?>"  required>
                    </div>
				  
				  <div class="form-group">
				  <label>Invoice_No</label>
					  <input type="text" style="width:70%" class="form-control input-sm"  name="invoice_no" placeholder="Enter Invoice no.." value="<?php echo $row['invoice_no']; ?>" required>
				  </div>
				  <div class="form-group">
				  <label>Booking_No</label>
					  <input type="text" style="width:70%" class="form-control input-sm"  name="booking_no" placeholder="Enter Booking no.." value="<?php echo $row['booking_no']; ?>" required>
				  </div>
				  
				   
				        
                  </div>
				  
				  <div class="col-xs-3">
				 
				   <div class="form-group">
                    <label>Date of Enquiry</label>
					<div class="input-group date" data-provide="datepicker" style="width:70%">
                     <input type="text" class="form-control" name="doe" required value="<?php echo $row['doe']; ?>">
                      <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                        </div>
                      </div>
                    <!-- /.input group -->
                  </div>
				  
				   <div class="form-group">
                    <label>Date of Invoice Entry</label>
					<div class="input-group date" data-provide="datepicker" style="width:70%">
                     <input type="text" class="form-control" name="doi" value="<?php echo $row['doi']; ?>" required>
                      <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                        </div>
                      </div>
                    <!-- /.input group -->
                  </div>
				  
				      <!--<div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" style="width:70%" class="form-control input-sm" id="exampleInputEmail1" name="email" placeholder="Enter mail" <?php echo $row['email']; ?> required>
                    </div>-->
					
					<div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" style="width:70%" class="form-control input-sm" id="exampleInputEmail1" name="email" placeholder="Enter mail" value="<?php echo $row['email']; ?>"required>
                    </div>
					
					
					<div class="form-group">
                      <label>Address</label>
                      <textarea class="form-control input-sm" style="width:70%" rows="3" name="addr" placeholder="Enter ..."><?php echo $row['addr']; ?></textarea>
                    </div>
					
					<!--<div class="form-group">
                      <label>City</label>
                      <select class="form-control" style="width:70%" name="city" required>
					    <option>Select a city</option>
                        <option>Chennai</option>
                        <option>Coimbatore</option>
                        <option>Trichy</option>
                        <option>Tirupur</option>
                        <option>Others</option>
                      </select>
					  </div>-->
					  <div class="form-group">
                      <label>Pincode</label>
                      <input type="text" style="width:70%" class="form-control input-sm"  name="pin_code" placeholder="Enter pincode" value="<?php echo $row['pin_code']; ?>" required>
                    </div>
				  
				  
				   
				  <div class="form-group">
				  <label>Delivery At</label>
					  <select class="form-control" style="width:70%" name="delivery" required>
					    <option>Select Place</option>
                        <option value='Showroom'<?php if('Showroom'==$row['delivery']){ ?>selected="selected"<?php } ?>>Showroom</option>
                        <option value='At customer place'<?php if('At customer place'==$row['delivery']){ ?>selected="selected"<?php } ?>>At customer place</option>
						</select>
				  </div>
				  </div>
				  
				
				   <div class="col-xs-3">
				   <div class="form-group">
				   <label>Particulars</label>
				   <textarea class="form-control input-sm" style="width:70%" rows="3" name="particulars" placeholder="Enter ..." required><?php echo $row['particulars']; ?></textarea>
                     </div>
					 
					 <div class="form-group">
				   <label>Quantity</label>
				   <input type="text" style="width:70%" class="form-control input-sm"  name="qty" placeholder="Enter quantity" value="<?php echo $row['qty']; ?>" required>
				   </div>
				   
				   
				   
				   <div class="form-group">
				   <label>Unit Price Rs.</label>
				   <input type="text" style="width:70%" class="form-control input-sm"  name="up" placeholder="Enter price..." value="<?php echo $row['up']; ?>" required>
				   </div>
				   
				    <div class="form-group">
				   <label>Amount Rs.</label>
				   <input type="text" style="width:70%" class="form-control input-sm"  name="amt" value="<?php echo $row['amt']; ?>">
				   </div>
				   
				   <div class="form-group">
				   <label>Unit Concession</label>
				   <input type="text" style="width:70%" class="form-control input-sm"  name="unit_concess" placeholder="Enter concession..." value="<?php echo $row['unit_concess']; ?>">
				   </div>
				   
				   <div class="form-group">
				   <label>Total Concession</label>
				   <input type="text" style="width:70%" class="form-control input-sm"  name="tot_concess" value="<?php echo $row['tot_concess']; ?>">
				   </div>
					 
					 </div>
					
				
                    <div class="col-xs-3">	

					
				   
				   <div class="form-group">
				   <label>Price after Concession</label>
				   <input type="text" style="width:70%" class="form-control input-sm"  name="af_concess" value="<?php echo $row['af_concess']; ?>">
				   </div>
				   
				   <div class="form-group">
				   <label>Total Tax(14.50%)</label>
				   <input type="text" style="width:70%" class="form-control input-sm"  name="tot_tax" value="<?php echo $row['tot_tax']; ?>">
				   </div>
				   
				   <div class="form-group">
				   <label>Gross Total</label>
				   <input type="text" style="width:70%" class="form-control input-sm"  name="grs_tot" value="<?php echo $row['grs_tot']; ?>">
				   </div>
				   
				   <div class="form-group">
				   <label>Adjustment</label>
				   <input type="text" style="width:70%" class="form-control input-sm"  name="adjust" value="<?php echo $row['adjust']; ?>">
				   </div>
				   
				   <div class="form-group">
				   <label>Grand Total</label>
				   <input type="text" style="width:70%" class="form-control input-sm"  name="grand_tot" value="<?php echo $row['grand_tot']; ?>">
				   </div>
						
                    </div>
						 </div>
						   
                <!-- /.box-header -->
              </div>
        </div>
		
		<div class="box box-primary">
						 
						 <div class="box-header with-border">
					
					<div class="col-xs-3">
					 <div class="form-group">
				  <label>Color</label>
					  <select class="form-control" style="width:70%" name="color">
					    <option>Select Color</option>
                        <option value='Porcelain White'<?php if('Porcelain White'==$row['color']){ ?>selected="selected"<?php } ?>>Porcelain White</option>
                        <option value='Copper Red'<?php if('Copper Red'==$row['color']){ ?>selected="selected"<?php } ?>>Copper Red</option>
						<option value='Maroon'<?php if('Maroon'==$row['color']){ ?>selected="selected"<?php } ?>>Maroon</option>
						<option value='Metallic Silver'<?php if('Metallic Silver'==$row['color']){ ?>selected="selected"<?php } ?>>Metallic Silver</option>
						<option value='Coal Black'<?php if('Coal Black'==$row['color']){ ?>selected="selected"<?php } ?>>Coal Black</option>
						</select>
				  </div>
					</div>
					
					
					<div class="col-xs-3">
					<div class="form-group">
				   <label>Engine No.</label>
				   <input type="text" style="width:70%" class="form-control input-sm"  name="eng_no" value="<?php echo $row['eng_no']; ?>">
				   </div>
					</div>
					
					<div class="col-xs-3">
					<div class="form-group">
				   <label>Chassis No.</label>
				   <input type="text" style="width:70%" class="form-control input-sm"  name="cha_no"value="<?php echo $row['cha_no']; ?>">
				   </div>
					</div>
					</div>
					</div>		
				  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" name="submit">Update</button>
                  </div>
                </form>					
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
